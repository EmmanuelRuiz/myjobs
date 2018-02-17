<?php

/* AppBundle:Administrator:login.html.twig */
class __TwigTemplate_4f06c0835a9bf287be2ca7000f4eec16fd4c4fb1047b7245e580f4ce133b2cb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d52adcb2f77f75d56df806881d0eeeb4f2b19fadc4183c2f2eb67c4ca61e90c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d52adcb2f77f75d56df806881d0eeeb4f2b19fadc4183c2f2eb67c4ca61e90c->enter($__internal_7d52adcb2f77f75d56df806881d0eeeb4f2b19fadc4183c2f2eb67c4ca61e90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Administrator:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    
    <body>
        <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrador_login_check");
        echo "\" method=\"post\">
            <h1>Iniciar Sesión</h1>
            <p>Este inicio de sesión, pertenece a los administradores de MyJobsAdvisor. <br>Si usted no es 
                administrador, le recomendamos <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_homepage");
        echo "\"><b>regresar a la página de inicio</b></a></p>
            <label><b>Nombre de usuario</b></label><br>
            <input type=\"text\" placeholder=\"Usuario\" name=\"_username\" ><br>

            <label><b>Contraseña</b></label><br>
            <input type=\"password\" placeholder=\"Contraseña\" name=\"_password\" ><br>

            <button type=\"submit\">Entrar</button>
            <input type=\"hidden\" name=\"_target_path\" value=\"/admin/panel\" >
        </form>


    </body>
</html>
";
        
        $__internal_7d52adcb2f77f75d56df806881d0eeeb4f2b19fadc4183c2f2eb67c4ca61e90c->leave($__internal_7d52adcb2f77f75d56df806881d0eeeb4f2b19fadc4183c2f2eb67c4ca61e90c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Administrator:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,  31 => 8,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    
    <body>
        <form action=\"{{ path('administrador_login_check') }}\" method=\"post\">
            <h1>Iniciar Sesión</h1>
            <p>Este inicio de sesión, pertenece a los administradores de MyJobsAdvisor. <br>Si usted no es 
                administrador, le recomendamos <a href=\"{{ path('app_homepage') }}\"><b>regresar a la página de inicio</b></a></p>
            <label><b>Nombre de usuario</b></label><br>
            <input type=\"text\" placeholder=\"Usuario\" name=\"_username\" ><br>

            <label><b>Contraseña</b></label><br>
            <input type=\"password\" placeholder=\"Contraseña\" name=\"_password\" ><br>

            <button type=\"submit\">Entrar</button>
            <input type=\"hidden\" name=\"_target_path\" value=\"/admin/panel\" >
        </form>


    </body>
</html>
", "AppBundle:Administrator:login.html.twig", "C:\\wamp\\www\\myjobs\\src\\AppBundle/Resources/views/Administrator/login.html.twig");
    }
}
