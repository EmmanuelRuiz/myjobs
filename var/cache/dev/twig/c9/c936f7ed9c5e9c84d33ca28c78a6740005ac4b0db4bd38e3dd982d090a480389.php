<?php

/* AppBundle:Layouts:layoutprofiles.html.twig */
class __TwigTemplate_2fda90d35dbbcdae4a2a66698b80bc1666e3c3db392291bf3275d353745afc2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'fonts' => array($this, 'block_fonts'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_020a8fd80bb26b3049e0dc746d84e401dd692f6ac052e2dc5e6d60684be8ec9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020a8fd80bb26b3049e0dc746d84e401dd692f6ac052e2dc5e6d60684be8ec9e->enter($__internal_020a8fd80bb26b3049e0dc746d84e401dd692f6ac052e2dc5e6d60684be8ec9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Layouts:layoutprofiles.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $this->displayBlock('fonts', $context, $blocks);
        // line 23
        echo "

    </head>
    <body>

        <!-- Navigation -->
        <nav class=\"navbar navbar-default-alternative navbar-fixed-top topnav\" role=\"navigation\">
            <div class=\"container topnav\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand topnav\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_homepage");
        echo "\"><img class=\"img-responsive img-desktop\" width=\"250\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/myjobsadvisor-logotipo-oficial.png"), "html", null, true);
        echo "\"></img></a>
                    <a class=\"navbar-brand topnav\" href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_homepage");
        echo "\"><img class=\"img-responsive img-movil\" width=\"60\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/myjobsadvisor-logotipo-oficial-movil.png"), "html", null, true);
        echo "\"></img></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 45
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 46
            echo "                            <li class=\"signin-movil\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register_login");
            echo "\">Entrar</a></li>
                            <li><a href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
            echo "\">Registrarse</a></li>
                            <li><a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pages_view_contact");
            echo "\">Contacto</a></li>
                            <ul class=\"nav navbar-nav navbar-right\">
                                <li class=\"dropdown\">
                                    <button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle btn-login navbar-btn btn-sign-in\" data-toggle=\"dropdown\">Iniciar sesion</button>
                                    <ul id=\"login-dp\" class=\"dropdown-menu\">
                                        <li>
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    Entrar con
                                                    <div class=\"social-buttons\">
                                                        <a href=\"";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connect_facebook");
            echo "\" class=\"btn btn-fb\"><i class=\"fa fa-facebook\"></i> Facebook</a>
                                                        <a href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connect_google");
            echo "\" class=\"btn btn-tw\"><i class=\"fa fa-google\"></i> Google</a>
                                                    </div>
                                                    o ingresa tus datos
                                                    <br />
                                                    <form action=\"";
            // line 63
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_login");
            echo "\" class=\"form\" role=\"form\" method=\"post\" accept-charset=\"UTF-8\" id=\"login-nav\">
                                                        <div class=\"form-group\">
                                                            <label class=\"sr-only\" for=\"inputEmail\">Correo electronico</label>
                                                            <input type=\"email\" id=\"username\" name=\"_username\"  class=\"form-control\" placeholder=\"Correo electronico\">
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"sr-only\" for=\"inputPassword\">Contraseña</label>
                                                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Contraseña\">
                                                            <div class=\"help-block text-right\"><a href=\"";
            // line 71
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_forget");
            echo "\">¿Olvidaste tu contraseña?</a></div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <button type=\"submit\" class=\"btn btn-primary btn-block\">Entrar</button>
                                                            <input type=\"hidden\" name=\"_target_path\" value=\"/perfil\">

                                                        </div>
                                                        <div class=\"checkbox\">
                                                            <label>
                                                                <input type=\"checkbox\"> Recuerdame
                                                            </label>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class=\"bottom text-center\">
                                                    ¿No tienes una cuenta? <a href=\"";
            // line 86
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
            echo "\"><b>Regístrate</b></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        ";
        } else {
            // line 94
            echo "
                            <form action=\"";
            // line 95
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("companies_search");
            echo "\" id=\"navbar-form-alternative\" class=\"navbar-form navbar-left\">
                                <div class=\"form-group\">
                                    <input type=\"text\"  class=\"form-control-alternative\" placeholder=\"Buscar empresa...\" name=\"search\">
                                </div>
                                <button type=\"submit\" class=\"btn btn-default\">Buscar</button>
                            </form>


                            <li id=\"nav-desktop\"><a href=\"";
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register-company");
            echo "\">Registrar empresa</a></li>

                            <li id=\"nav-desktop\"><a href=\"";
            // line 105
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_list");
            echo "\" >Usuarios</a></li>

                            <li id=\"nav-movil\" ><a href=\"";
            // line 107
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
            echo "\"><i class=\"fa fa-user \"></i>&nbsp;Perfil</a></li>
                            <li id=\"nav-movil\"><a href=\"";
            // line 108
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("companies_mycompanies");
            echo "\"><i class=\"fa fa-bookmark \"></i>&nbsp;Mis empresas</a></li>
                            <li id=\"nav-movil\"><a href=\"";
            // line 109
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register-company");
            echo "\"><i class=\"fa fa-building\" aria-hidden=\"true\"></i>&nbsp;Registrar empresa</a></li>
                                ";
            // line 110
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "role", array()) == "ROLE_ADMIN")) {
                // line 111
                echo "                                <li id=\"nav-movil\"><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_index");
                echo "\"><i class=\"fa fa-lock \"></i>&nbsp;Panel de administrador</a></li>
                                ";
            }
            // line 113
            echo "
                            <li id=\"nav-movil\"><a href=\"";
            // line 114
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_logout");
            echo "\"><i class=\"fa fa-sign-out \"></i>&nbsp;Salir</a></li>
                                ";
            // line 115
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
                // line 116
                echo "                                <li class=\"user-logged-in\">
                                    <button class=\"btn btn-link  dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <div class=\"avatar\">
                                            ";
                // line 119
                if (((((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), ".")) == "png") || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), ".")) == "jpg")) || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), ".")) == "jpeg")) || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), ".")) == "gif"))) {
                    // line 120
                    echo "                                                ";
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "anonimo", array()) == "Si")) {
                        // line 121
                        echo "                                                    <img  src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.jpg"), "html", null, true);
                        echo "\"/>
                                                ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 122
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()) != null)) {
                        // line 123
                        echo "                                                    <img  src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/users/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()))), "html", null, true);
                        echo "\"/>
                                                ";
                    }
                    // line 125
                    echo "                                            ";
                } elseif ((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), ".")) == null)) {
                    // line 126
                    echo "                                                <img  src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.jpg"), "html", null, true);
                    echo "\"/>
                                            ";
                } else {
                    // line 128
                    echo "                                                <img  src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "html", null, true);
                    echo "\"/>
                                            ";
                }
                // line 130
                echo "                                        </div>

                                        ";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "plastname", array()), "html", null, true);
                echo "
                                        <span class=\"caret\"></span>
                                    </button>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                // line 136
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
                echo "\"><i class=\"fa fa-user \"></i>&nbsp;Perfil</a></li>
                                        <li><a href=\"";
                // line 137
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit");
                echo "\"><i class=\"fa fa-pencil-square \"></i>&nbsp;Editar perfil</a></li>
                                            ";
                // line 138
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "role", array()) == "ROLE_ADMIN")) {
                    // line 139
                    echo "                                            <li><a href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_index");
                    echo "\"><i class=\"fa fa-lock \"></i>&nbsp;Panel de administrador</a></li>
                                            ";
                }
                // line 141
                echo "                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 142
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("companies_mycompanies");
                echo "\"><i class=\"fa fa-bookmark \"></i>&nbsp;Mis empresas</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 144
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_logout");
                echo "\"><i class=\"fa fa-sign-out \"></i>&nbsp;Salir</a></li>
                                        <li><a href=\"\"><i class=\"fa fa-question-circle\"></i>&nbsp;Ayuda</a></li>
                                    </ul>
                                </li>
                            ";
            }
            // line 149
            echo "                        ";
        }
        // line 150
        echo "

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>



        ";
        // line 161
        $this->displayBlock('content', $context, $blocks);
        // line 165
        echo "

        <footer class=\"layout-footer\">
            <div class=\"container\">
                <div class=\"row footer\">
                    <div class=\"col-md-4\">
                        <div class=\"single-footer\">
                            <img class=\"img-responsive\" src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/myjobsadvisor-footer.png"), "html", null, true);
        echo "\" width=\"350\"><br>
                            <p>MyJobsAdvisor suma el talento de profesionales en la gestión de relaciones laborales, formación empresarial y adquisición de talento.</p>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"single-footer\">
                            <h4>Enlaces</h4>
                            <div class=\"footer-links\">
                                <ul class=\"list-unstyled\">
                                    <li><a class=\"links-footer\" href=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "/downloads/AvisoPrivacidadMyJobsAdvisor.pdf\" target=\"_blank\">Aviso de privacidad</a></li>
                                    <li><a class=\"links-footer\" href=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "/downloads/TerminosCondicionesMyJobsAdvisor.pdf\" target=\"_blank\">Términos y condiciones</a></li>
                                </ul>
                            </div>
                            <h4>Contacto</h4>
                            <div class=\"footer-links\">
                                <ul class=\"list-unstyled\">
                                    <li>Email: <b>contacto@myjobsadvisor.com</b></li>
                                    <li>Número telefónico 1: <b>+52 1 984 164 3269</b></li>
                                    <li>Número telefónico 2: <b>+52 1 984 168 4082</b></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"single-footer\">
                            <h4>Conéctate con nosotros</h4>
                            <div class=\"footer-links\">
                                <ul class=\"list-unstyled\">
                                    <li><a class=\"links-footer\" href=\"https://www.facebook.com/myjobsadvisor\" target=\"_blank\"><i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i> Facebook</a></li>
                                    <li><a class=\"links-footer\" href=\"https://twitter.com/Myjobsadvisor/\" target=\"_blank\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i> Twitter</a></li>
                                    <li><a class=\"links-footer\" href=\"https://www.instagram.com/Myjobsadvisor/\" target=\"_blank\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i> Instagram</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <hr>
                <div class=\"row footer-copy\">
                    <div class=\"col-lg-6\">
                        <p><span>&copy; 2017 MyJobsAdvisor. Todos los derechos reservados</span> </p>
                    </div>
                    <div class=\"col-lg-6 \">
                        <p class=\"pull-right\"><span> Creado con <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> por <a class=\"links-footer\" href=\"https://www.crealab.com.mx\">CreaLab</a></span> </p>
                    </div>
                </div>
            </div>
        </footer>
        ";
        // line 220
        $this->displayBlock('javascripts', $context, $blocks);
        // line 253
        echo "    </body>
</html>
";
        
        $__internal_020a8fd80bb26b3049e0dc746d84e401dd692f6ac052e2dc5e6d60684be8ec9e->leave($__internal_020a8fd80bb26b3049e0dc746d84e401dd692f6ac052e2dc5e6d60684be8ec9e_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_0350eb79094756b0b274b61d6ff2da0b6f53fbdba50459927f2490126ff7903b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0350eb79094756b0b274b61d6ff2da0b6f53fbdba50459927f2490126ff7903b->enter($__internal_0350eb79094756b0b274b61d6ff2da0b6f53fbdba50459927f2490126ff7903b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " MyJobsAdvisor | Sitio Oficial ";
        
        $__internal_0350eb79094756b0b274b61d6ff2da0b6f53fbdba50459927f2490126ff7903b->leave($__internal_0350eb79094756b0b274b61d6ff2da0b6f53fbdba50459927f2490126ff7903b_prof);

    }

    // line 12
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_2f6d20826f515e3bef071530ed869fcd2171fc6409e7a00b3849c0a303d36a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f6d20826f515e3bef071530ed869fcd2171fc6409e7a00b3849c0a303d36a8c->enter($__internal_2f6d20826f515e3bef071530ed869fcd2171fc6409e7a00b3849c0a303d36a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 13
        echo "            <!-- estilos css -->
            <!--<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">-->
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootswatch.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/styles.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
        ";
        
        $__internal_2f6d20826f515e3bef071530ed869fcd2171fc6409e7a00b3849c0a303d36a8c->leave($__internal_2f6d20826f515e3bef071530ed869fcd2171fc6409e7a00b3849c0a303d36a8c_prof);

    }

    // line 19
    public function block_fonts($context, array $blocks = array())
    {
        $__internal_f680716b9bbe0e36adf2475bb35be33eb2d93e638deabfe40d3c02ed565650c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f680716b9bbe0e36adf2475bb35be33eb2d93e638deabfe40d3c02ed565650c7->enter($__internal_f680716b9bbe0e36adf2475bb35be33eb2d93e638deabfe40d3c02ed565650c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fonts"));

        // line 20
        echo "            <!-- fonts -->
            <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_f680716b9bbe0e36adf2475bb35be33eb2d93e638deabfe40d3c02ed565650c7->leave($__internal_f680716b9bbe0e36adf2475bb35be33eb2d93e638deabfe40d3c02ed565650c7_prof);

    }

    // line 161
    public function block_content($context, array $blocks = array())
    {
        $__internal_405a60dff2a422c47ed8b10933810d0c04c25d442c124cd4c73e484edf2f89c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_405a60dff2a422c47ed8b10933810d0c04c25d442c124cd4c73e484edf2f89c3->enter($__internal_405a60dff2a422c47ed8b10933810d0c04c25d442c124cd4c73e484edf2f89c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 162
        echo "            <!-- todo el contenido de la web -->
            Content default
        ";
        
        $__internal_405a60dff2a422c47ed8b10933810d0c04c25d442c124cd4c73e484edf2f89c3->leave($__internal_405a60dff2a422c47ed8b10933810d0c04c25d442c124cd4c73e484edf2f89c3_prof);

    }

    // line 220
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_458101216c2f11f684797151cb671c4a259ee0a953c0bdfb5f0ec26d39683843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_458101216c2f11f684797151cb671c4a259ee0a953c0bdfb5f0ec26d39683843->enter($__internal_458101216c2f11f684797151cb671c4a259ee0a953c0bdfb5f0ec26d39683843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 221
        echo "            <script type=\"text/javascript\">
\t\t\t\t         var URL = \"";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "/myjobs/web/app_dev.php\";
            </script>
            <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-ias.min.js"), "html", null, true);
        echo "\"></script>

            <script>
        \t\t  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        \t\t  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        \t\t  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        \t\t  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        \t\t  ga('create', 'UA-106048583-1', 'auto');
        \t\t  ga('send', 'pageview');



      \t    </script>

            ";
        // line 241
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 242
            echo "              <script type=\"text/javascript\">
                \$(document).ready(function () {
                    \$(\"#ratingModal\").modal(\"show\");

                    \$(\"#ratingModal .modal-body .alert-register\").append(\"<div class='alert alert-dismissible alert-success'>";
            // line 246
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " <button type='button' class='close' data-dismiss='alert'>&times;</button></div>\");

                });
              </script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        echo "
        ";
        
        $__internal_458101216c2f11f684797151cb671c4a259ee0a953c0bdfb5f0ec26d39683843->leave($__internal_458101216c2f11f684797151cb671c4a259ee0a953c0bdfb5f0ec26d39683843_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Layouts:layoutprofiles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  522 => 251,  511 => 246,  505 => 242,  501 => 241,  483 => 226,  479 => 225,  475 => 224,  470 => 222,  467 => 221,  461 => 220,  452 => 162,  446 => 161,  437 => 21,  434 => 20,  428 => 19,  419 => 16,  415 => 15,  411 => 14,  408 => 13,  402 => 12,  390 => 10,  381 => 253,  379 => 220,  338 => 182,  334 => 181,  322 => 172,  313 => 165,  311 => 161,  298 => 150,  295 => 149,  287 => 144,  282 => 142,  279 => 141,  273 => 139,  271 => 138,  267 => 137,  263 => 136,  254 => 132,  250 => 130,  244 => 128,  238 => 126,  235 => 125,  229 => 123,  227 => 122,  222 => 121,  219 => 120,  217 => 119,  212 => 116,  210 => 115,  206 => 114,  203 => 113,  197 => 111,  195 => 110,  191 => 109,  187 => 108,  183 => 107,  178 => 105,  173 => 103,  162 => 95,  159 => 94,  148 => 86,  130 => 71,  119 => 63,  112 => 59,  108 => 58,  95 => 48,  91 => 47,  86 => 46,  84 => 45,  74 => 40,  68 => 39,  50 => 23,  48 => 19,  45 => 18,  43 => 12,  38 => 10,  27 => 1,);
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
<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>{% block title %} MyJobsAdvisor | Sitio Oficial {%endblock%}</title>

        {% block stylesheet %}
            <!-- estilos css -->
            <!--<link href=\"{{ asset('assets/css/bootstrap.min.css')}}\" type=\"text/css\" rel=\"stylesheet\">-->
            <link href=\"{{ asset('assets/css/bootswatch.css')}}\" type=\"text/css\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/css/styles.css')}}\" type=\"text/css\" rel=\"stylesheet\">
        {%endblock%}

        {% block fonts %}
            <!-- fonts -->
            <link href=\"{{ asset('assets/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
        {% endblock %}


    </head>
    <body>

        <!-- Navigation -->
        <nav class=\"navbar navbar-default-alternative navbar-fixed-top topnav\" role=\"navigation\">
            <div class=\"container topnav\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand topnav\" href=\"{{ path('app_homepage') }}\"><img class=\"img-responsive img-desktop\" width=\"250\" src=\"{{ asset('assets/images/myjobsadvisor-logotipo-oficial.png') }}\"></img></a>
                    <a class=\"navbar-brand topnav\" href=\"{{ path('app_homepage') }}\"><img class=\"img-responsive img-movil\" width=\"60\" src=\"{{ asset('assets/images/myjobsadvisor-logotipo-oficial-movil.png') }}\"></img></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        {% if app.user == null %}
                            <li class=\"signin-movil\"><a href=\"{{path(\"user_register_login\")}}\">Entrar</a></li>
                            <li><a href=\"{{path(\"user_register\")}}\">Registrarse</a></li>
                            <li><a href=\"{{ path('pages_view_contact') }}\">Contacto</a></li>
                            <ul class=\"nav navbar-nav navbar-right\">
                                <li class=\"dropdown\">
                                    <button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle btn-login navbar-btn btn-sign-in\" data-toggle=\"dropdown\">Iniciar sesion</button>
                                    <ul id=\"login-dp\" class=\"dropdown-menu\">
                                        <li>
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    Entrar con
                                                    <div class=\"social-buttons\">
                                                        <a href=\"{{ path('connect_facebook') }}\" class=\"btn btn-fb\"><i class=\"fa fa-facebook\"></i> Facebook</a>
                                                        <a href=\"{{ path('connect_google') }}\" class=\"btn btn-tw\"><i class=\"fa fa-google\"></i> Google</a>
                                                    </div>
                                                    o ingresa tus datos
                                                    <br />
                                                    <form action=\"{{path('user_login')}}\" class=\"form\" role=\"form\" method=\"post\" accept-charset=\"UTF-8\" id=\"login-nav\">
                                                        <div class=\"form-group\">
                                                            <label class=\"sr-only\" for=\"inputEmail\">Correo electronico</label>
                                                            <input type=\"email\" id=\"username\" name=\"_username\"  class=\"form-control\" placeholder=\"Correo electronico\">
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"sr-only\" for=\"inputPassword\">Contraseña</label>
                                                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Contraseña\">
                                                            <div class=\"help-block text-right\"><a href=\"{{ path('user_forget') }}\">¿Olvidaste tu contraseña?</a></div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <button type=\"submit\" class=\"btn btn-primary btn-block\">Entrar</button>
                                                            <input type=\"hidden\" name=\"_target_path\" value=\"/perfil\">

                                                        </div>
                                                        <div class=\"checkbox\">
                                                            <label>
                                                                <input type=\"checkbox\"> Recuerdame
                                                            </label>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class=\"bottom text-center\">
                                                    ¿No tienes una cuenta? <a href=\"{{path(\"user_register\")}}\"><b>Regístrate</b></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        {% else %}

                            <form action=\"{{ path('companies_search') }}\" id=\"navbar-form-alternative\" class=\"navbar-form navbar-left\">
                                <div class=\"form-group\">
                                    <input type=\"text\"  class=\"form-control-alternative\" placeholder=\"Buscar empresa...\" name=\"search\">
                                </div>
                                <button type=\"submit\" class=\"btn btn-default\">Buscar</button>
                            </form>


                            <li id=\"nav-desktop\"><a href=\"{{path(\"register-company\")}}\">Registrar empresa</a></li>

                            <li id=\"nav-desktop\"><a href=\"{{path(\"user_list\")}}\" >Usuarios</a></li>

                            <li id=\"nav-movil\" ><a href=\"{{ path('user_profile') }}\"><i class=\"fa fa-user \"></i>&nbsp;Perfil</a></li>
                            <li id=\"nav-movil\"><a href=\"{{path('companies_mycompanies')}}\"><i class=\"fa fa-bookmark \"></i>&nbsp;Mis empresas</a></li>
                            <li id=\"nav-movil\"><a href=\"{{path(\"register-company\")}}\"><i class=\"fa fa-building\" aria-hidden=\"true\"></i>&nbsp;Registrar empresa</a></li>
                                {% if app.user.role == 'ROLE_ADMIN'%}
                                <li id=\"nav-movil\"><a href=\"{{path('administrator_index')}}\"><i class=\"fa fa-lock \"></i>&nbsp;Panel de administrador</a></li>
                                {% endif %}

                            <li id=\"nav-movil\"><a href=\"{{path('user_logout')}}\"><i class=\"fa fa-sign-out \"></i>&nbsp;Salir</a></li>
                                {% if app.user != null %}
                                <li class=\"user-logged-in\">
                                    <button class=\"btn btn-link  dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <div class=\"avatar\">
                                            {% if app.user.image | split('.') | last == 'png' or app.user.image | split('.') | last == 'jpg' or app.user.image | split('.') | last == 'jpeg' or app.user.image | split('.') | last == 'gif' %}
                                                {% if app.user.anonimo == 'Si' %}
                                                    <img  src=\"{{ asset('assets/images/default.jpg') }}\"/>
                                                {% elseif app.user.image != null %}
                                                    <img  src=\"{{ asset('uploads/users/'~app.user.image) }}\"/>
                                                {% endif %}
                                            {% elseif app.user.image | split('.') | last == null %}
                                                <img  src=\"{{ asset('assets/images/default.jpg') }}\"/>
                                            {% else %}
                                                <img  src=\"{{ app.user.image }}\"/>
                                            {% endif %}
                                        </div>

                                        {{app.user.name}} {{app.user.plastname}}
                                        <span class=\"caret\"></span>
                                    </button>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"{{ path('user_profile') }}\"><i class=\"fa fa-user \"></i>&nbsp;Perfil</a></li>
                                        <li><a href=\"{{path('user_edit')}}\"><i class=\"fa fa-pencil-square \"></i>&nbsp;Editar perfil</a></li>
                                            {% if app.user.role == 'ROLE_ADMIN'%}
                                            <li><a href=\"{{path('administrator_index')}}\"><i class=\"fa fa-lock \"></i>&nbsp;Panel de administrador</a></li>
                                            {% endif %}
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"{{path('companies_mycompanies')}}\"><i class=\"fa fa-bookmark \"></i>&nbsp;Mis empresas</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"{{path('user_logout')}}\"><i class=\"fa fa-sign-out \"></i>&nbsp;Salir</a></li>
                                        <li><a href=\"\"><i class=\"fa fa-question-circle\"></i>&nbsp;Ayuda</a></li>
                                    </ul>
                                </li>
                            {% endif %}
                        {% endif %}


                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>



        {% block content %}
            <!-- todo el contenido de la web -->
            Content default
        {% endblock %}


        <footer class=\"layout-footer\">
            <div class=\"container\">
                <div class=\"row footer\">
                    <div class=\"col-md-4\">
                        <div class=\"single-footer\">
                            <img class=\"img-responsive\" src=\"{{ asset('assets/images/myjobsadvisor-footer.png') }}\" width=\"350\"><br>
                            <p>MyJobsAdvisor suma el talento de profesionales en la gestión de relaciones laborales, formación empresarial y adquisición de talento.</p>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"single-footer\">
                            <h4>Enlaces</h4>
                            <div class=\"footer-links\">
                                <ul class=\"list-unstyled\">
                                    <li><a class=\"links-footer\" href=\"{{ app.request.getSchemeAndHttpHost() }}/downloads/AvisoPrivacidadMyJobsAdvisor.pdf\" target=\"_blank\">Aviso de privacidad</a></li>
                                    <li><a class=\"links-footer\" href=\"{{ app.request.getSchemeAndHttpHost() }}/downloads/TerminosCondicionesMyJobsAdvisor.pdf\" target=\"_blank\">Términos y condiciones</a></li>
                                </ul>
                            </div>
                            <h4>Contacto</h4>
                            <div class=\"footer-links\">
                                <ul class=\"list-unstyled\">
                                    <li>Email: <b>contacto@myjobsadvisor.com</b></li>
                                    <li>Número telefónico 1: <b>+52 1 984 164 3269</b></li>
                                    <li>Número telefónico 2: <b>+52 1 984 168 4082</b></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"single-footer\">
                            <h4>Conéctate con nosotros</h4>
                            <div class=\"footer-links\">
                                <ul class=\"list-unstyled\">
                                    <li><a class=\"links-footer\" href=\"https://www.facebook.com/myjobsadvisor\" target=\"_blank\"><i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i> Facebook</a></li>
                                    <li><a class=\"links-footer\" href=\"https://twitter.com/Myjobsadvisor/\" target=\"_blank\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i> Twitter</a></li>
                                    <li><a class=\"links-footer\" href=\"https://www.instagram.com/Myjobsadvisor/\" target=\"_blank\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i> Instagram</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <hr>
                <div class=\"row footer-copy\">
                    <div class=\"col-lg-6\">
                        <p><span>&copy; 2017 MyJobsAdvisor. Todos los derechos reservados</span> </p>
                    </div>
                    <div class=\"col-lg-6 \">
                        <p class=\"pull-right\"><span> Creado con <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> por <a class=\"links-footer\" href=\"https://www.crealab.com.mx\">CreaLab</a></span> </p>
                    </div>
                </div>
            </div>
        </footer>
        {% block javascripts %}
            <script type=\"text/javascript\">
\t\t\t\t         var URL = \"{{ app.request.getSchemeAndHttpHost() }}/myjobs/web/app_dev.php\";
            </script>
            <script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/jquery-ias.min.js') }}\"></script>

            <script>
        \t\t  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        \t\t  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        \t\t  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        \t\t  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        \t\t  ga('create', 'UA-106048583-1', 'auto');
        \t\t  ga('send', 'pageview');



      \t    </script>

            {% for message in app.session.flashbag().get('success') %}
              <script type=\"text/javascript\">
                \$(document).ready(function () {
                    \$(\"#ratingModal\").modal(\"show\");

                    \$(\"#ratingModal .modal-body .alert-register\").append(\"<div class='alert alert-dismissible alert-success'>{{ message }} <button type='button' class='close' data-dismiss='alert'>&times;</button></div>\");

                });
              </script>
            {% endfor %}

        {% endblock %}
    </body>
</html>
", "AppBundle:Layouts:layoutprofiles.html.twig", "C:\\wamp\\www\\myjobs\\src\\AppBundle/Resources/views/Layouts/layoutprofiles.html.twig");
    }
}
