<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // user_loginerror
                if ($pathinfo === '/loginerror') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::loginerrorAction',  '_route' => 'user_loginerror',);
                }

                // user_login
                if ($pathinfo === '/login') {
                    return array('_route' => 'user_login');
                }

            }

            // user_logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'user_logout');
            }

        }

        // user_register
        if ($pathinfo === '/registrarse') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::registerAction',  '_route' => 'user_register',);
        }

        // user_email_test
        if ($pathinfo === '/email-test') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_user_email_test;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\UserController::emailTestAction',  '_route' => 'user_email_test',);
        }
        not_user_email_test:

        // user_profile
        if ($pathinfo === '/perfil') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::profileAction',  '_route' => 'user_profile',);
        }

        if (0 === strpos($pathinfo, '/cuenta')) {
            // user_edit
            if ($pathinfo === '/cuenta/editar') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::editUserAction',  '_route' => 'user_edit',);
            }

            if (0 === strpos($pathinfo, '/cuenta/cambia')) {
                // user_change
                if ($pathinfo === '/cuenta/cambiar/contraseña') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::viewChangeAction',  '_route' => 'user_change',);
                }

                // user_change_password
                if ($pathinfo === '/cuenta/cambiando/contraseña') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::changePasswordAction',  '_route' => 'user_change_password',);
                }

            }

        }

        // user_list
        if ($pathinfo === '/usuarios') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::userAction',  '_route' => 'user_list',);
        }

        // user_register_login
        if ($pathinfo === '/cuenta/login') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::redirectAction',  '_route' => 'user_register_login',);
        }

        if (0 === strpos($pathinfo, '/recupera')) {
            // user_forget
            if ($pathinfo === '/recuperar/contraseña') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::viewForgetPasswordAction',  '_route' => 'user_forget',);
            }

            // user_forget_password
            if ($pathinfo === '/recuperando') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::resetPasswordAction',  '_route' => 'user_forget_password',);
            }

        }

        if (0 === strpos($pathinfo, '/empresas')) {
            // register-company
            if ($pathinfo === '/empresas/registrar') {
                return array (  '_controller' => 'AppBundle\\Controller\\CompanyController::registerAction',  '_route' => 'register-company',);
            }

            // companies_list
            if ($pathinfo === '/empresas') {
                return array (  '_controller' => 'AppBundle\\Controller\\CompanyController::companiesAction',  '_route' => 'companies_list',);
            }

        }

        // companies_search
        if ($pathinfo === '/busqueda') {
            return array (  '_controller' => 'AppBundle\\Controller\\CompanyController::searchAction',  '_route' => 'companies_search',);
        }

        // companies_edit
        if ($pathinfo === '/empresa/editar') {
            return array (  '_controller' => 'AppBundle\\Controller\\CompanyController::editAction',  '_route' => 'companies_edit',);
        }

        // companies_points
        if ($pathinfo === '/prueba') {
            return array (  '_controller' => 'AppBundle\\Controller\\CompanyController::puntosAction',  '_route' => 'companies_points',);
        }

        if (0 === strpos($pathinfo, '/e')) {
            if (0 === strpos($pathinfo, '/empresas')) {
                // company_profile
                if ($pathinfo === '/empresas/perfil') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CompanyController::profileAction',  '_route' => 'company_profile',);
                }

                // companies_mycompanies
                if ($pathinfo === '/empresas/mis_empresas') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CompanyController::myCompaniesAction',  '_route' => 'companies_mycompanies',);
                }

            }

            // companies_state
            if ($pathinfo === '/estados') {
                return array (  '_controller' => 'AppBundle\\Controller\\CompanyController::findStateAction',  '_route' => 'companies_state',);
            }

        }

        // companies_muni
        if ($pathinfo === '/municipio') {
            return array (  '_controller' => 'AppBundle\\Controller\\CompanyController::findMunicipioAction',  '_route' => 'companies_muni',);
        }

        // companies_loca
        if ($pathinfo === '/localidad') {
            return array (  '_controller' => 'AppBundle\\Controller\\CompanyController::findLocalidadAction',  '_route' => 'companies_loca',);
        }

        // remove_opinion
        if (0 === strpos($pathinfo, '/opinion/remove') && preg_match('#^/opinion/remove(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_opinion')), array (  '_controller' => 'AppBundle\\Controller\\CompanyController::removeOpinionAction',  'id' => NULL,));
        }

        // remove_comment
        if (0 === strpos($pathinfo, '/comment/remove') && preg_match('#^/comment/remove(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_comment')), array (  '_controller' => 'AppBundle\\Controller\\CompanyController::removeCommentAction',  'id' => NULL,));
        }

        // rate
        if (0 === strpos($pathinfo, '/rate') && preg_match('#^/rate(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'rate')), array (  '_controller' => 'AppBundle\\Controller\\RateController::rateAction',  'id' => NULL,));
        }

        // following_follow
        if ($pathinfo === '/follow') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_following_follow;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\FollowingController::followAction',  '_route' => 'following_follow',);
        }
        not_following_follow:

        // following_unfollow
        if ($pathinfo === '/unfollow') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_following_unfollow;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\FollowingController::unfollowAction',  '_route' => 'following_unfollow',);
        }
        not_following_unfollow:

        if (0 === strpos($pathinfo, '/s')) {
            // following_users
            if (0 === strpos($pathinfo, '/siguiendo') && preg_match('#^/siguiendo(?:/(?P<email>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'following_users')), array (  '_controller' => 'AppBundle\\Controller\\FollowingController::followingAction',  'email' => NULL,));
            }

            // followed_users
            if (0 === strpos($pathinfo, '/seguidores') && preg_match('#^/seguidores(?:/(?P<email>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'followed_users')), array (  '_controller' => 'AppBundle\\Controller\\FollowingController::followedAction',  'email' => NULL,));
            }

        }

        // like_opinion
        if (0 === strpos($pathinfo, '/like') && preg_match('#^/like(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'like_opinion')), array (  '_controller' => 'AppBundle\\Controller\\LikeController::likeAction',  'id' => NULL,));
        }

        // unlike_opinion
        if (0 === strpos($pathinfo, '/unlike') && preg_match('#^/unlike(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'unlike_opinion')), array (  '_controller' => 'AppBundle\\Controller\\LikeController::unlikeAction',  'id' => NULL,));
        }

        // user_likes
        if (0 === strpos($pathinfo, '/likes') && preg_match('#^/likes(?:/(?P<email>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_likes')), array (  '_controller' => 'AppBundle\\Controller\\LikeController::likesAction',  'email' => NULL,));
        }

        if (0 === strpos($pathinfo, '/createcomment')) {
            // comment_crate
            if (preg_match('#^/createcomment(?:/(?P<id>[^/]++)(?:/(?P<opinion_id>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_crate')), array (  '_controller' => 'AppBundle\\Controller\\CommentController::createAction',  'id' => NULL,  'opinion_id' => NULL,));
            }

            // comment_crate_user
            if ($pathinfo === '/createcommentuser') {
                return array (  '_controller' => 'AppBundle\\Controller\\CommentController::createFromUserAction',  '_route' => 'comment_crate_user',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // administrator_index
            if ($pathinfo === '/admin/panel') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdministratorController::indexAction',  '_route' => 'administrator_index',);
            }

            if (0 === strpos($pathinfo, '/administrar')) {
                // administrator_comment
                if ($pathinfo === '/administrar/comentarios') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdministratorController::commentsAction',  '_route' => 'administrator_comment',);
                }

                // administrator_user
                if ($pathinfo === '/administrar/usuarios') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdministratorController::usersAction',  '_route' => 'administrator_user',);
                }

                if (0 === strpos($pathinfo, '/administrar/todas_empresas')) {
                    // administrator_allcompanies
                    if ($pathinfo === '/administrar/todas_empresas') {
                        return array (  '_controller' => 'AppBundle\\Controller\\AdministratorController::allCompaniesAction',  '_route' => 'administrator_allcompanies',);
                    }

                    // administrator_delete_companies
                    if ($pathinfo === '/administrar/todas_empresas/eliminar') {
                        return array (  '_controller' => 'AppBundle\\Controller\\AdministratorController::deleteCompaniesAction',  '_route' => 'administrator_delete_companies',);
                    }

                }

                // administrator_delete_user
                if ($pathinfo === '/administrar/usuarios/eliminar') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdministratorController::deleteUsersAction',  '_route' => 'administrator_delete_user',);
                }

                if (0 === strpos($pathinfo, '/administrar/empresas')) {
                    // administrator_validate_company
                    if ($pathinfo === '/administrar/empresas/validar') {
                        return array (  '_controller' => 'AppBundle\\Controller\\AdministratorController::validateCompaniesAction',  '_route' => 'administrator_validate_company',);
                    }

                    // administrator_edit_company
                    if ($pathinfo === '/administrar/empresas/editar') {
                        return array (  '_controller' => 'AppBundle\\Controller\\AdministratorController::editCompaniesAction',  '_route' => 'administrator_edit_company',);
                    }

                }

                // administrator_validate_comment
                if ($pathinfo === '/administrar/comentarios/validar') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdministratorController::validateCommentAction',  '_route' => 'administrator_validate_comment',);
                }

                if (0 === strpos($pathinfo, '/administrar/reclama')) {
                    if (0 === strpos($pathinfo, '/administrar/reclamaciones')) {
                        // administrator_claim
                        if ($pathinfo === '/administrar/reclamaciones') {
                            return array (  '_controller' => 'AppBundle\\Controller\\AdministratorController::viewAction',  '_route' => 'administrator_claim',);
                        }

                        // administrator_asign
                        if ($pathinfo === '/administrar/reclamaciones/asignar') {
                            return array (  '_controller' => 'AppBundle\\Controller\\AdministratorController::asignAction',  '_route' => 'administrator_asign',);
                        }

                    }

                    // administrator_claimcompany
                    if ($pathinfo === '/administrar/reclamar') {
                        return array (  '_controller' => 'AppBundle\\Controller\\AdministratorController::reclamarAction',  '_route' => 'administrator_claimcompany',);
                    }

                }

                // administrator_graficar
                if ($pathinfo === '/administrar/estadisticas') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdministratorController::graficarAction',  '_route' => 'administrator_graficar',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // administrator_login
                    if ($pathinfo === '/admin/login') {
                        return array (  '_controller' => 'AppBundle\\Controller\\AdministratorController::loginAction',  '_route' => 'administrator_login',);
                    }

                    // administrador_login_check
                    if ($pathinfo === '/admin/login_check') {
                        return array('_route' => 'administrador_login_check');
                    }

                }

                // administrador_logout
                if ($pathinfo === '/admin/logout') {
                    return array('_route' => 'administrador_logout');
                }

            }

        }

        if (0 === strpos($pathinfo, '/con')) {
            if (0 === strpos($pathinfo, '/connect')) {
                if (0 === strpos($pathinfo, '/connect/facebook')) {
                    // connect_facebook
                    if ($pathinfo === '/connect/facebook') {
                        return array (  '_controller' => 'AppBundle\\Controller\\FacebookConnectController::connectFacebookAction',  '_route' => 'connect_facebook',);
                    }

                    // connect_facebook_check
                    if ($pathinfo === '/connect/facebook-check') {
                        return array('_route' => 'connect_facebook_check');
                    }

                }

                if (0 === strpos($pathinfo, '/connect/google')) {
                    // connect_google
                    if ($pathinfo === '/connect/google') {
                        return array (  '_controller' => 'AppBundle\\Controller\\GoogleConnectController::connectGoogleAction',  '_route' => 'connect_google',);
                    }

                    // connect_google_check
                    if ($pathinfo === '/connect/google-check') {
                        return array('_route' => 'connect_google_check');
                    }

                }

            }

            if (0 === strpos($pathinfo, '/contacto')) {
                // pages_view_contact
                if ($pathinfo === '/contacto') {
                    return array (  '_controller' => 'AppBundle\\Controller\\PagesController::viewContactAction',  '_route' => 'pages_view_contact',);
                }

                // pages_contact
                if ($pathinfo === '/contacto/enviar') {
                    return array (  '_controller' => 'AppBundle\\Controller\\PagesController::contactAction',  '_route' => 'pages_contact',);
                }

            }

        }

        // app_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'app_homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
