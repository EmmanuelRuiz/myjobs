<?php

/* AppBundle:Layouts:layoutprofiles.html.twig */
class __TwigTemplate_e05cb848a7cd88f1b7c6c83df754d45de6a85746dffae2761727b8b3b25f2772 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'fonts' => array($this, 'block_fonts'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
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
        ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "    </head>
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
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_homepage");
        echo "\"><img class=\"img-responsive img-desktop\" width=\"250\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/myjobsadvisor-logotipo-oficial.png"), "html", null, true);
        echo "\"></img></a>
                    <a class=\"navbar-brand topnav\" href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_homepage");
        echo "\"><img class=\"img-responsive img-movil\" width=\"60\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/myjobsadvisor-logotipo-oficial-movil.png"), "html", null, true);
        echo "\"></img></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 63
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) == null)) {
            // line 64
            echo "                            <li class=\"signin-movil\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register_login");
            echo "\">Entrar</a></li>
                            <li><a href=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
            echo "\">Registrarse</a></li>
                            <li><a href=\"";
            // line 66
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
            // line 76
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connect_facebook");
            echo "\" class=\"btn btn-fb\"><i class=\"fa fa-facebook\"></i> Facebook</a>
                                                        <a href=\"";
            // line 77
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connect_google");
            echo "\" class=\"btn btn-tw\"><i class=\"fa fa-google\"></i> Google</a>
                                                    </div>
                                                    o ingresa tus datos
                                                    <br />
                                                    <form action=\"";
            // line 81
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
            // line 89
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
            // line 104
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
            // line 112
            echo "
                            <form action=\"";
            // line 113
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("companies_search");
            echo "\" id=\"navbar-form-alternative\" class=\"navbar-form navbar-left\">
                                <div class=\"form-group\">
                                    <input type=\"text\"  class=\"form-control-alternative\" placeholder=\"Buscar empresa...\" name=\"search\">
                                </div>
                                <button type=\"submit\" class=\"btn btn-default\">Buscar</button>
                            </form>


                            <li id=\"nav-desktop\"><a href=\"";
            // line 121
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register-company");
            echo "\">Registrar empresa</a></li>

                            <li id=\"nav-desktop\"><a href=\"";
            // line 123
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_list");
            echo "\" >Usuarios</a></li>

                            <li id=\"nav-movil\" ><a href=\"";
            // line 125
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
            echo "\"><i class=\"fa fa-user \"></i>&nbsp;Perfil</a></li>
                            <li id=\"nav-movil\"><a href=\"";
            // line 126
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("companies_mycompanies");
            echo "\"><i class=\"fa fa-bookmark \"></i>&nbsp;Mis empresas</a></li>
                            <li id=\"nav-movil\"><a href=\"";
            // line 127
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register-company");
            echo "\"><i class=\"fa fa-building\" aria-hidden=\"true\"></i>&nbsp;Registrar empresa</a></li>
                                ";
            // line 128
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "role", array()) == "ROLE_ADMIN")) {
                // line 129
                echo "                                <li id=\"nav-movil\"><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_index");
                echo "\"><i class=\"fa fa-lock \"></i>&nbsp;Panel de administrador</a></li>
                                ";
            }
            // line 131
            echo "
                            <li id=\"nav-movil\"><a href=\"";
            // line 132
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_logout");
            echo "\"><i class=\"fa fa-sign-out \"></i>&nbsp;Salir</a></li>
                                ";
            // line 133
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) != null)) {
                // line 134
                echo "                                <li class=\"user-logged-in\">
                                    <button class=\"btn btn-link  dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <div class=\"avatar\">
                                            ";
                // line 137
                if (((((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()), ".")) == "png") || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()), ".")) == "jpg")) || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()), ".")) == "jpeg")) || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()), ".")) == "gif"))) {
                    echo "    
                                                ";
                    // line 138
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "anonimo", array()) == "Si")) {
                        // line 139
                        echo "                                                    <img  src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.jpg"), "html", null, true);
                        echo "\"/>
                                                ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 140
(isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()) != null)) {
                        // line 141
                        echo "                                                    <img  src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/users/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()))), "html", null, true);
                        echo "\"/>
                                                ";
                    }
                    // line 143
                    echo "                                            ";
                } elseif ((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()), ".")) == null)) {
                    // line 144
                    echo "                                                <img  src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.jpg"), "html", null, true);
                    echo "\"/>
                                            ";
                } else {
                    // line 146
                    echo "                                                <img  src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()), "html", null, true);
                    echo "\"/>
                                            ";
                }
                // line 148
                echo "                                        </div>

                                        ";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "plastname", array()), "html", null, true);
                echo "
                                        <span class=\"caret\"></span>
                                    </button>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                // line 154
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
                echo "\"><i class=\"fa fa-user \"></i>&nbsp;Perfil</a></li>
                                        <li><a href=\"";
                // line 155
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit");
                echo "\"><i class=\"fa fa-pencil-square \"></i>&nbsp;Editar perfil</a></li>
                                            ";
                // line 156
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "role", array()) == "ROLE_ADMIN")) {
                    // line 157
                    echo "                                            <li><a href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_index");
                    echo "\"><i class=\"fa fa-lock \"></i>&nbsp;Panel de administrador</a></li>
                                            ";
                }
                // line 159
                echo "                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 160
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("companies_mycompanies");
                echo "\"><i class=\"fa fa-bookmark \"></i>&nbsp;Mis empresas</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 162
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_logout");
                echo "\"><i class=\"fa fa-sign-out \"></i>&nbsp;Salir</a></li>
                                        <li><a href=\"\"><i class=\"fa fa-question-circle\"></i>&nbsp;Ayuda</a></li>
                                    </ul>
                                </li>
                            ";
            }
            // line 167
            echo "                        ";
        }
        // line 168
        echo "

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>



        ";
        // line 179
        $this->displayBlock('content', $context, $blocks);
        // line 183
        echo "

        <footer class=\"layout-footer\">
            <div class=\"container\">
                <div class=\"row footer\">
                    <div class=\"col-md-4\">
                        <div class=\"single-footer\">
                            <img class=\"img-responsive\" src=\"";
        // line 190
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
        // line 199
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "/downloads/AvisoPrivacidadMyJobsAdvisor.pdf\" target=\"_blank\">Aviso de privacidad</a></li>
                                    <li><a class=\"links-footer\" href=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
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

    </body>
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo " MyJobsAdvisor | Sitio Oficial ";
    }

    // line 12
    public function block_stylesheet($context, array $blocks = array())
    {
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
    }

    // line 19
    public function block_fonts($context, array $blocks = array())
    {
        // line 20
        echo "            <!-- fonts -->
            <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "            <script type=\"text/javascript\">
\t\t\t\tvar URL = \"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "\";
            </script>
            <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-ias.min.js"), "html", null, true);
        echo "\"></script>
            
            <script>
\t\t  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
\t\t  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
\t\t  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
\t\t  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
\t\t
\t\t  ga('create', 'UA-106048583-1', 'auto');
\t\t  ga('send', 'pageview');
\t\t
\t    </script>
        ";
    }

    // line 179
    public function block_content($context, array $blocks = array())
    {
        // line 180
        echo "            <!-- todo el contenido de la web -->
            Content default
        ";
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
        return array (  462 => 180,  459 => 179,  442 => 30,  438 => 29,  434 => 28,  429 => 26,  426 => 25,  423 => 24,  417 => 21,  414 => 20,  411 => 19,  405 => 16,  401 => 15,  397 => 14,  394 => 13,  391 => 12,  385 => 10,  339 => 200,  335 => 199,  323 => 190,  314 => 183,  312 => 179,  299 => 168,  296 => 167,  288 => 162,  283 => 160,  280 => 159,  274 => 157,  272 => 156,  268 => 155,  264 => 154,  255 => 150,  251 => 148,  245 => 146,  239 => 144,  236 => 143,  230 => 141,  228 => 140,  223 => 139,  221 => 138,  217 => 137,  212 => 134,  210 => 133,  206 => 132,  203 => 131,  197 => 129,  195 => 128,  191 => 127,  187 => 126,  183 => 125,  178 => 123,  173 => 121,  162 => 113,  159 => 112,  148 => 104,  130 => 89,  119 => 81,  112 => 77,  108 => 76,  95 => 66,  91 => 65,  86 => 64,  84 => 63,  74 => 58,  68 => 57,  52 => 43,  50 => 24,  47 => 23,  45 => 19,  42 => 18,  40 => 12,  35 => 10,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Layouts:layoutprofiles.html.twig", "/home/myjobsa1/public_html/src/AppBundle/Resources/views/Layouts/layoutprofiles.html.twig");
    }
}
