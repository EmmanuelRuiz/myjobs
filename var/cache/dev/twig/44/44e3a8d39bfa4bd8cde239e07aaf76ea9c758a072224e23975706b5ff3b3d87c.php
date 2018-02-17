<?php

/* AppBundle:User:login.html.twig */
class __TwigTemplate_1b61e49ef30abf72c390a3e01c49a85ca80b8e307c8127b36d1091178d3068de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layoutprofiles.html.twig", "AppBundle:User:login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Layouts:layoutprofiles.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9efb71fba3a1511ec600713186d0341c004b488b2fced16243545b7f9f964a8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9efb71fba3a1511ec600713186d0341c004b488b2fced16243545b7f9f964a8e->enter($__internal_9efb71fba3a1511ec600713186d0341c004b488b2fced16243545b7f9f964a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9efb71fba3a1511ec600713186d0341c004b488b2fced16243545b7f9f964a8e->leave($__internal_9efb71fba3a1511ec600713186d0341c004b488b2fced16243545b7f9f964a8e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6f7268c246181e048a0ee379c5a5d8fbeaad30bf299bb2fddd32a576fe748af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7268c246181e048a0ee379c5a5d8fbeaad30bf299bb2fddd32a576fe748af0->enter($__internal_6f7268c246181e048a0ee379c5a5d8fbeaad30bf299bb2fddd32a576fe748af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <section class=\"login-section\">
        <div class=\"container\">
            <div class=\"col-lg-4 col-lg-offset-4\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "                    <div class=\"alert alert-dismissible alert-success\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                        ";
            // line 10
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
                <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connect_facebook");
        echo "\" class=\"btn btn-fb btn-block\"><i class=\"fa fa-facebook\"></i> Facebook</a><br>
                <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connect_google");
        echo "\" class=\"btn btn-tw btn-block\"><i class=\"fa fa-google\"></i> Google</a><br>
                <p class=\"text-muted text-center\"> - o ingresa tus datos - </p>
                <form action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_login");
        echo "\" class=\"form-signin\" role=\"form\" method=\"post\" accept-charset=\"UTF-8\">
                    <h2 class=\"form-signin-heading\">Iniciar sesión</h2>
                    <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
                    <input type=\"email\" id=\"inputEmail\" class=\"form-control\" name=\"_username\" placeholder=\"Correo electrónico\" required autofocus>
                    <br>
                    <label for=\"inputPassword\" class=\"sr-only\">Password</label>
                    <input type=\"password\" id=\"inputPassword\" class=\"form-control\" name=\"_password\" placeholder=\"Contraseña\" required>
                    <br>
                    <label>¿No tienes una cuenta? <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
        echo "\"><b>Regístrate</b></a></label>

                    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Entrar</button>
                    <div class=\"help-block text-right\"><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_forget");
        echo "\">¿Olvidaste tu contraseña?</a></div>
                    <input type=\"hidden\" name=\"_target_path\" value=\"/perfil\">
                </form>
            </div>
        </div>
    </section>
";
        
        $__internal_6f7268c246181e048a0ee379c5a5d8fbeaad30bf299bb2fddd32a576fe748af0->leave($__internal_6f7268c246181e048a0ee379c5a5d8fbeaad30bf299bb2fddd32a576fe748af0_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 28,  85 => 25,  74 => 17,  69 => 15,  65 => 14,  62 => 13,  53 => 10,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle:Layouts:layoutprofiles.html.twig\"%}

{% block content %}
    <section class=\"login-section\">
        <div class=\"container\">
            <div class=\"col-lg-4 col-lg-offset-4\">
                {% for message in app.session.flashbag().get('success') %}
                    <div class=\"alert alert-dismissible alert-success\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                        {{ message }}
                    </div>
                {% endfor %}

                <a href=\"{{ path('connect_facebook') }}\" class=\"btn btn-fb btn-block\"><i class=\"fa fa-facebook\"></i> Facebook</a><br>
                <a href=\"{{ path('connect_google') }}\" class=\"btn btn-tw btn-block\"><i class=\"fa fa-google\"></i> Google</a><br>
                <p class=\"text-muted text-center\"> - o ingresa tus datos - </p>
                <form action=\"{{path('user_login')}}\" class=\"form-signin\" role=\"form\" method=\"post\" accept-charset=\"UTF-8\">
                    <h2 class=\"form-signin-heading\">Iniciar sesión</h2>
                    <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
                    <input type=\"email\" id=\"inputEmail\" class=\"form-control\" name=\"_username\" placeholder=\"Correo electrónico\" required autofocus>
                    <br>
                    <label for=\"inputPassword\" class=\"sr-only\">Password</label>
                    <input type=\"password\" id=\"inputPassword\" class=\"form-control\" name=\"_password\" placeholder=\"Contraseña\" required>
                    <br>
                    <label>¿No tienes una cuenta? <a href=\"{{path(\"user_register\")}}\"><b>Regístrate</b></a></label>

                    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Entrar</button>
                    <div class=\"help-block text-right\"><a href=\"{{ path('user_forget') }}\">¿Olvidaste tu contraseña?</a></div>
                    <input type=\"hidden\" name=\"_target_path\" value=\"/perfil\">
                </form>
            </div>
        </div>
    </section>
{% endblock %}
", "AppBundle:User:login.html.twig", "C:\\wamp\\www\\myjobs\\src\\AppBundle/Resources/views/User/login.html.twig");
    }
}
