<?php

/* AppBundle:Layouts:layout.html.twig */
class __TwigTemplate_417f2fd010a49472082615250c1a7cd2942700aa37c6122bae22637fb6ee59d3 extends Twig_Template
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
        $__internal_f8842925cd8fc47ae97c8ddaf5ea7170cdd921d77bafb8904a6b3520ee20db5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8842925cd8fc47ae97c8ddaf5ea7170cdd921d77bafb8904a6b3520ee20db5a->enter($__internal_f8842925cd8fc47ae97c8ddaf5ea7170cdd921d77bafb8904a6b3520ee20db5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Layouts:layout.html.twig"));

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
        // line 19
        echo "
        ";
        // line 20
        $this->displayBlock('fonts', $context, $blocks);
        // line 24
        echo "

    </head>
    <body>

        <!-- Navigation -->
        <nav class=\"navbar navbar-default navbar-fixed-top topnav\" role=\"navigation\">
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
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_homepage");
        echo "\"><img class=\"img-responsive img-desktop\" width=\"250\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/myjobsadvisor-logotipo-oficial.png"), "html", null, true);
        echo "\"></img></a>
                    <a class=\"navbar-brand topnav\" href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_homepage");
        echo "\"><img class=\"img-responsive img-movil\" width=\"60\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/myjobsadvisor-logotipo-oficial-movil.png"), "html", null, true);
        echo "\"></img></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 46
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 47
            echo "                            <li class=\"signin-movil\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register_login");
            echo "\">Entrar</a></li>
                            <li><a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
            echo "\">Registrarse</a></li>
                            <li><a href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pages_view_contact");
            echo "\">Contacto</a></li>

                            <ul class=\"nav navbar-nav navbar-right\">
                                <li class=\"dropdown\">
                                    <button type=\"button\" class=\"btn-sign-in btn btn-default btn-xs dropdown-toggle navbar-btn btn-login\" data-toggle=\"dropdown\">Iniciar sesión</button>
                                    <ul id=\"login-dp\" class=\"dropdown-menu\">
                                        <li>
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    Iniciar sesión con
                                                    <div class=\"social-buttons\">
                                                        <a href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connect_facebook");
            echo "\" class=\"btn btn-fb\"><i class=\"fa fa-facebook\"></i> Facebook</a>
                                                        <a href=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connect_google");
            echo "\" class=\"btn btn-tw\"><i class=\"fa fa-google\"></i> Google</a>
                                                    </div>
                                                    o ingresa tus datos
                                                    <br />
                                                    <form action=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_login");
            echo "\" class=\"form\" role=\"form\" method=\"post\" accept-charset=\"UTF-8\" id=\"login-nav\">
                                                        <div class=\"form-group\">
                                                            <label class=\"sr-only\" for=\"inputEmail\">Correo electronico</label>
                                                            <input type=\"email\" id=\"username\" value=\"";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
            echo "\" name=\"_username\"  class=\"form-control\" placeholder=\"Correo electronico\">
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"sr-only\" for=\"inputPassword\">Contraseña</label>
                                                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Contraseña\">
                                                            <div class=\"help-block text-right\"><a href=\"";
            // line 73
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
            // line 87
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
            // line 95
            echo "                            <li id=\"nav-desktop\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register-company");
            echo "\">Registrar empresa</a></li>

                            <li id=\"nav-desktop\"><a href=\"";
            // line 97
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_list");
            echo "\" >Usuarios</a></li>

                            <li id=\"nav-movil\" ><a href=\"";
            // line 99
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
            echo "\"><i class=\"fa fa-user \"></i>&nbsp;Perfil</a></li>
                            <li id=\"nav-movil\"><a href=\"";
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("companies_mycompanies");
            echo "\"><i class=\"fa fa-bookmark \"></i>&nbsp;Mis empresas</a></li>
                            <li id=\"nav-movil\"><a href=\"";
            // line 101
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register-company");
            echo "\"><i class=\"fa fa-building\" aria-hidden=\"true\"></i>&nbsp;Registrar empresa</a></li>
                                ";
            // line 102
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "role", array()) == "ROLE_ADMIN")) {
                // line 103
                echo "                                <li id=\"nav-movil\"><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_index");
                echo "\"><i class=\"fa fa-lock \"></i>&nbsp;Panel de administrador</a></li>
                                ";
            }
            // line 105
            echo "
                            <li id=\"nav-movil\"><a href=\"";
            // line 106
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_logout");
            echo "\"><i class=\"fa fa-sign-out \"></i>&nbsp;Salir</a></li>

                            ";
            // line 108
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
                // line 109
                echo "                                <li class=\"user-logged-in\">
                                    <div class=\"dropdown\">
                                        <button class=\"btn btn-link dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">

                                            <div class=\"avatar\">
                                                ";
                // line 114
                if (((((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), ".")) == "png") || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), ".")) == "jpg")) || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), ".")) == "jpeg")) || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), ".")) == "gif"))) {
                    // line 115
                    echo "                                                    ";
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "anonimo", array()) == "Si")) {
                        // line 116
                        echo "                                                        <img  src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.jpg"), "html", null, true);
                        echo "\"/>
                                                    ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 117
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()) != null)) {
                        // line 118
                        echo "                                                        <img  src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/users/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()))), "html", null, true);
                        echo "\"/>
                                                    ";
                    }
                    // line 120
                    echo "                                                ";
                } elseif ((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), ".")) == null)) {
                    // line 121
                    echo "                                                    <img  src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.jpg"), "html", null, true);
                    echo "\"/>
                                                ";
                } else {
                    // line 123
                    echo "                                                    <img  src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "html", null, true);
                    echo "\"/>
                                                ";
                }
                // line 125
                echo "                                            </div>

                                            ";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "plastname", array()), "html", null, true);
                echo "
                                            <span class=\"caret\"></span>
                                        </button>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"";
                // line 131
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
                echo "\"><i class=\"fa fa-user \"></i>&nbsp;Perfil</a></li>
                                            <li><a href=\"";
                // line 132
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit");
                echo "\"><i class=\"fa fa-pencil-square \"></i>&nbsp;Editar perfil</a></li>
                                                ";
                // line 133
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "role", array()) == "ROLE_ADMIN")) {
                    // line 134
                    echo "                                                <li><a href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_index");
                    echo "\"><i class=\"fa fa-lock \"></i>&nbsp;Panel de administrador</a></li>
                                                ";
                }
                // line 136
                echo "                                            <li role=\"separator\" class=\"divider\"></li>
                                            <li><a href=\"";
                // line 137
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("companies_mycompanies");
                echo "\"><i class=\"fa fa-bookmark \"></i>&nbsp;Mis empresas</a></li>
                                            <li role=\"separator\" class=\"divider\"></li>
                                            <li><a href=\"";
                // line 139
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_logout");
                echo "\"><i class=\"fa fa-sign-out \"></i>&nbsp;Salir</a></li>
                                            <li><a href=\"\"><i class=\"fa fa-question-circle\"></i>&nbsp;Ayuda</a></li>
                                        </ul>
                                    </div>
                                </li>
                            ";
            }
            // line 145
            echo "                        ";
        }
        // line 146
        echo "

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Header -->
        <a name=\"about\"></a>
        <div class=\"intro-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"intro-message\">
                            ";
        // line 162
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 163
            echo "                                <h1>Bienvenido ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
            echo "</h1>
                            ";
        } else {
            // line 165
            echo "                                <h1>Bienvenido</h1>
                            ";
        }
        // line 167
        echo "                            <h4>Conoce a las empresas a traves de las personas que ahi trabajan</h4>
                            <hr class=\"intro-divider\">
                            <div class=\"col-lg-6 col-lg-offset-3\">
                                <form action=\"";
        // line 170
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("companies_search");
        echo "\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control search-input\" placeholder=\"Busca la empresa que desees...\" name=\"search\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-default btn-search\" id=\"btn-search\" type=\"submit\"><i class=\"fa fa-2x fa-search \" aria-hidden=\"true\"></i></button>
                                        </span>
                                    </div><!-- /input-group -->
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container -->

        </div>

        <div class=\"container\">
            <div class=\"col-lg-12\">
                ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 192
            echo "                    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "            </div>
        </div>
        <div class=\"clearfix\"></div>

        ";
        // line 198
        $this->displayBlock('content', $context, $blocks);
        // line 202
        echo "

        <footer class=\"layout-footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"single-footer\">
                            <img class=\"img-responsive\" src=\"";
        // line 209
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
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "/downloads/AvisoPrivacidadMyJobsAdvisor.pdf\" target=\"_blank\">Aviso de privacidad</a></li>
                                    <li><a class=\"links-footer\" href=\"";
        // line 219
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
        // line 259
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 260
            echo "            <div class=\"modal fade\" id=\"mostrarmodal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"basicModal\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header text-center\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                            <h3>¿Te vas tan pronto?</h3>
                            <img class=\"img-responsive center-block\" src=\"";
            // line 266
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logout.png"), "html", null, true);
            echo "\" width=\"100\">
                            <p>Está bien. No tardes en regresar</p>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        echo "

        ";
        // line 275
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "error_login"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 276
            echo "            <div class=\"modal fade\" id=\"mostrarmodal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"basicModal\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header text-center\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                            <h3>";
            // line 281
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "</h3>
                            <img class=\"img-responsive center-block\" src=\"";
            // line 282
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/login-error.png"), "html", null, true);
            echo "\" width=\"100\">
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        echo "
        <script>
                \$(document).ready(function ()
                {
                    \$(\"#mostrarmodal\").modal(\"show\");
                });
        </script>

        ";
        // line 296
        $this->displayBlock('javascripts', $context, $blocks);
        // line 314
        echo "    </body>


</html>
";
        
        $__internal_f8842925cd8fc47ae97c8ddaf5ea7170cdd921d77bafb8904a6b3520ee20db5a->leave($__internal_f8842925cd8fc47ae97c8ddaf5ea7170cdd921d77bafb8904a6b3520ee20db5a_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_93e6be831f6acb3017e271f2224c999e071ed3fbc4099e59e31d3e3114330113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e6be831f6acb3017e271f2224c999e071ed3fbc4099e59e31d3e3114330113->enter($__internal_93e6be831f6acb3017e271f2224c999e071ed3fbc4099e59e31d3e3114330113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " MyJobsAdvisor | Sitio Oficial ";
        
        $__internal_93e6be831f6acb3017e271f2224c999e071ed3fbc4099e59e31d3e3114330113->leave($__internal_93e6be831f6acb3017e271f2224c999e071ed3fbc4099e59e31d3e3114330113_prof);

    }

    // line 12
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_82688e36c75b06435ec6ea62259bd27c016052744e4225e2acca686cd1e158fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82688e36c75b06435ec6ea62259bd27c016052744e4225e2acca686cd1e158fb->enter($__internal_82688e36c75b06435ec6ea62259bd27c016052744e4225e2acca686cd1e158fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_82688e36c75b06435ec6ea62259bd27c016052744e4225e2acca686cd1e158fb->leave($__internal_82688e36c75b06435ec6ea62259bd27c016052744e4225e2acca686cd1e158fb_prof);

    }

    // line 20
    public function block_fonts($context, array $blocks = array())
    {
        $__internal_4f6407a2e9bf8d45e95b3c729f2489dd5efb4c65820ec6061dd76c97b076975a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6407a2e9bf8d45e95b3c729f2489dd5efb4c65820ec6061dd76c97b076975a->enter($__internal_4f6407a2e9bf8d45e95b3c729f2489dd5efb4c65820ec6061dd76c97b076975a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fonts"));

        // line 21
        echo "            <!-- fonts -->
            <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_4f6407a2e9bf8d45e95b3c729f2489dd5efb4c65820ec6061dd76c97b076975a->leave($__internal_4f6407a2e9bf8d45e95b3c729f2489dd5efb4c65820ec6061dd76c97b076975a_prof);

    }

    // line 198
    public function block_content($context, array $blocks = array())
    {
        $__internal_717b3276fb6302eaca5abf7f8f484dc616bb3c678a0555b1585ccab78f92a654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_717b3276fb6302eaca5abf7f8f484dc616bb3c678a0555b1585ccab78f92a654->enter($__internal_717b3276fb6302eaca5abf7f8f484dc616bb3c678a0555b1585ccab78f92a654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 199
        echo "            <!-- todo el contenido de la web -->
            Content default
        ";
        
        $__internal_717b3276fb6302eaca5abf7f8f484dc616bb3c678a0555b1585ccab78f92a654->leave($__internal_717b3276fb6302eaca5abf7f8f484dc616bb3c678a0555b1585ccab78f92a654_prof);

    }

    // line 296
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4347b69e0a3bcf0d59f118ee9cb6969276733f9a06c872d2a9a178e2f812ddce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4347b69e0a3bcf0d59f118ee9cb6969276733f9a06c872d2a9a178e2f812ddce->enter($__internal_4347b69e0a3bcf0d59f118ee9cb6969276733f9a06c872d2a9a178e2f812ddce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 297
        echo "            <script type=\"text/javascript\">
                var URL = \"";
        // line 298
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "/myjobs/web/app_dev.php\";
            </script>
            <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-ias.min.js"), "html", null, true);
        echo "\"></script>
            <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

              ga('create', 'UA-106048583-1', 'auto');
              ga('send', 'pageview');

            </script>
        ";
        
        $__internal_4347b69e0a3bcf0d59f118ee9cb6969276733f9a06c872d2a9a178e2f812ddce->leave($__internal_4347b69e0a3bcf0d59f118ee9cb6969276733f9a06c872d2a9a178e2f812ddce_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Layouts:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  613 => 302,  609 => 301,  605 => 300,  600 => 298,  597 => 297,  591 => 296,  582 => 199,  576 => 198,  567 => 22,  564 => 21,  558 => 20,  548 => 16,  544 => 15,  540 => 14,  537 => 13,  531 => 12,  519 => 10,  508 => 314,  506 => 296,  496 => 288,  484 => 282,  480 => 281,  473 => 276,  469 => 275,  465 => 273,  452 => 266,  444 => 260,  440 => 259,  397 => 219,  393 => 218,  381 => 209,  372 => 202,  370 => 198,  364 => 194,  355 => 192,  351 => 191,  327 => 170,  322 => 167,  318 => 165,  312 => 163,  310 => 162,  292 => 146,  289 => 145,  280 => 139,  275 => 137,  272 => 136,  266 => 134,  264 => 133,  260 => 132,  256 => 131,  247 => 127,  243 => 125,  237 => 123,  231 => 121,  228 => 120,  222 => 118,  220 => 117,  215 => 116,  212 => 115,  210 => 114,  203 => 109,  201 => 108,  196 => 106,  193 => 105,  187 => 103,  185 => 102,  181 => 101,  177 => 100,  173 => 99,  168 => 97,  162 => 95,  151 => 87,  134 => 73,  126 => 68,  120 => 65,  113 => 61,  109 => 60,  95 => 49,  91 => 48,  86 => 47,  84 => 46,  74 => 41,  68 => 40,  50 => 24,  48 => 20,  45 => 19,  43 => 12,  38 => 10,  27 => 1,);
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
        {%endblock%}


    </head>
    <body>

        <!-- Navigation -->
        <nav class=\"navbar navbar-default navbar-fixed-top topnav\" role=\"navigation\">
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
                                    <button type=\"button\" class=\"btn-sign-in btn btn-default btn-xs dropdown-toggle navbar-btn btn-login\" data-toggle=\"dropdown\">Iniciar sesión</button>
                                    <ul id=\"login-dp\" class=\"dropdown-menu\">
                                        <li>
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    Iniciar sesión con
                                                    <div class=\"social-buttons\">
                                                        <a href=\"{{ path('connect_facebook') }}\" class=\"btn btn-fb\"><i class=\"fa fa-facebook\"></i> Facebook</a>
                                                        <a href=\"{{ path('connect_google') }}\" class=\"btn btn-tw\"><i class=\"fa fa-google\"></i> Google</a>
                                                    </div>
                                                    o ingresa tus datos
                                                    <br />
                                                    <form action=\"{{path('user_login')}}\" class=\"form\" role=\"form\" method=\"post\" accept-charset=\"UTF-8\" id=\"login-nav\">
                                                        <div class=\"form-group\">
                                                            <label class=\"sr-only\" for=\"inputEmail\">Correo electronico</label>
                                                            <input type=\"email\" id=\"username\" value=\"{{ last_username }}\" name=\"_username\"  class=\"form-control\" placeholder=\"Correo electronico\">
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
                                    <div class=\"dropdown\">
                                        <button class=\"btn btn-link dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">

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
                                    </div>
                                </li>
                            {% endif %}
                        {% endif%}


                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Header -->
        <a name=\"about\"></a>
        <div class=\"intro-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"intro-message\">
                            {% if app.user != null %}
                                <h1>Bienvenido {{app.user.name}}</h1>
                            {% else %}
                                <h1>Bienvenido</h1>
                            {% endif %}
                            <h4>Conoce a las empresas a traves de las personas que ahi trabajan</h4>
                            <hr class=\"intro-divider\">
                            <div class=\"col-lg-6 col-lg-offset-3\">
                                <form action=\"{{ path('companies_search') }}\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control search-input\" placeholder=\"Busca la empresa que desees...\" name=\"search\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-default btn-search\" id=\"btn-search\" type=\"submit\"><i class=\"fa fa-2x fa-search \" aria-hidden=\"true\"></i></button>
                                        </span>
                                    </div><!-- /input-group -->
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container -->

        </div>

        <div class=\"container\">
            <div class=\"col-lg-12\">
                {%for message in app.session.flashbag().get('status')%}
                    <div class=\"alert alert-success\">{{message}}</div>
                {%endfor%}
            </div>
        </div>
        <div class=\"clearfix\"></div>

        {% block content %}
            <!-- todo el contenido de la web -->
            Content default
        {%endblock%}


        <footer class=\"layout-footer\">
            <div class=\"container\">
                <div class=\"row\">
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


        {% for message in app.session.flashbag().get('notice') %}
            <div class=\"modal fade\" id=\"mostrarmodal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"basicModal\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header text-center\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                            <h3>¿Te vas tan pronto?</h3>
                            <img class=\"img-responsive center-block\" src=\"{{ asset('assets/images/logout.png') }}\" width=\"100\">
                            <p>Está bien. No tardes en regresar</p>
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}


        {% for error in app.session.flashbag().get('error_login') %}
            <div class=\"modal fade\" id=\"mostrarmodal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"basicModal\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header text-center\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                            <h3>{{ error }}</h3>
                            <img class=\"img-responsive center-block\" src=\"{{ asset('assets/images/login-error.png') }}\" width=\"100\">
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}

        <script>
                \$(document).ready(function ()
                {
                    \$(\"#mostrarmodal\").modal(\"show\");
                });
        </script>

        {% block javascripts %}
            <script type=\"text/javascript\">
                var URL = \"{{ app.request.getSchemeAndHttpHost() }}/myjobs/web/app_dev.php\";
            </script>
            <script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/jquery-ias.min.js') }}\"></script>
            <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

              ga('create', 'UA-106048583-1', 'auto');
              ga('send', 'pageview');

            </script>
        {% endblock %}
    </body>


</html>
", "AppBundle:Layouts:layout.html.twig", "C:\\wamp\\www\\myjobs\\src\\AppBundle/Resources/views/Layouts/layout.html.twig");
    }
}
