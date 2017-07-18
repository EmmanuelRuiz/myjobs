<?php


namespace AppBundle\Security;

use AppBundle\Entity\User;
use Doctrine\ORM\EntityManager;

use KnpU\Guard\Exception\CustomAuthenticationException;


use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use League\OAuth2\Client\Provider\Facebook;
use League\OAuth2\Client\Provider\FacebookUser;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Security;

use KnpU\Guard\AbstractGuardAuthenticator;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class FacebookAuthenticator extends AbstractGuardAuthenticator
{
    private $container;
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
    public function getCredentials(Request $request)
    {
        if ($request->getPathInfo() != '/connect/facebook-check') {
            // skip authentication unless we're on this URL!
            return null;
        }
        if ($code = $request->query->get('code')) {
            return $code;
        }
        // no code! Something went wrong. Quite probably the user denied our app access
        // you could read the error, error_code, error_description, error_reason query params
        // http://localhost:8000/connect/facebook-check?error=access_denied&error_code=200&error_description=Permissions+error&error_reason=user_denied&state=S2fKgHJSZSJM0Qs2fhKL6USZP50KSBHc#_=_
        throw CustomAuthenticationException::createWithSafeMessage(
            'There was an error getting access from Facebook. Please try again.'
        );
    }
    public function getUser($authorizationCode, UserProviderInterface $userProvider)
    {
        $facebookProvider = $this->container->get('app.facebook_provider');
        try {
            // the credentials are really the access token
            $accessToken = $facebookProvider->getAccessToken(
                'authorization_code',
                ['code' => $authorizationCode]
            );
        } catch (IdentityProviderException $e) {
            // probably the authorization code has been used already
            $response = $e->getResponseBody();
            $errorCode = $response['error']['code'];
            $message = $response['error']['message'];
            throw CustomAuthenticationException::createWithSafeMessage(
                'There was an error logging you into Facebook - code '.$errorCode
            );
        }
        /** @var FacebookUser $facebookUser */
        $facebookUser = $facebookProvider->getResourceOwner($accessToken);
        $email = $facebookUser->getEmail();
        $em = $this->container->get('doctrine')->getManager();
        // 1) have they logged in with Facebook before? Easy!
        $existingUser = $em->getRepository('AppBundle:User')
            ->findOneBy(array('facebookId' => $facebookUser->getId()));
        if ($existingUser) {
            return $existingUser;
        }
        // 2) do we have a matching user by email?
        $user = $em->getRepository('AppBundle:User')
                    ->findOneBy(array('email' => $email));
        // 3) no user? Perhaps you just want to create one
        //      or maybe you want to redirect to a registration (in that case, keep reading_
        if (!$user) {
            $user = new User();
            $user->setUsername($email);
            $user->setEmail($email);
            // set an un-encoded password, which basically makes it *not* possible
            // to login with any password
            $user->setPassword('no password');
        }
        // make sure the Facebook user is set
        $user->setFacebookId($facebookUser->getId());
        $em->persist($user);
        $em->flush();
        return $user;
    }
    public function checkCredentials($credentials, UserInterface $user)
    {
        // do nothing - the fact that the access token worked means that
        // our app has been authorized with Facebook
    }
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        // this would happen if something went wrong in the OAuth flow
        $request->getSession()->set(Security::AUTHENTICATION_ERROR, $exception);
        $url = $this->container->get('router')
            ->generate('security_login');
        return new RedirectResponse($url);
    }
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        // todo - remove needing this crazy thing
        $targetPath = $request->getSession()->get('_security.'.$providerKey.'.target_path');
        if (!$targetPath) {
            $router = $this->container->get('router');
            $targetPath = $router->generate('homepage');
        }
        return new RedirectResponse($targetPath);
    }
    public function supportsRememberMe()
    {
        return true;
    }
    /**
     * Called when an anonymous user tries to access an protected page.
     *
     * In our app, this is never actually called, because there is only *one*
     * "entry_point" per firewall and in security.yml, we're using
     * app.form_login_authenticator as the entry point (so it's start() method
     * is the one that's called).
     */
    public function start(Request $request, AuthenticationException $authException = null)
    {
        // not called in our app, but if it were, redirecting to the
        // login page makes sense
        $url = $this->container->get('router')
            ->generate('security_login');
        return new RedirectResponse($url);
    }
}