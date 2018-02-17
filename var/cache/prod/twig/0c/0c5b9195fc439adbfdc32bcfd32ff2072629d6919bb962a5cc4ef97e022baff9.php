<?php

/* AppBundle:Layouts:layout.html.twig */
class __TwigTemplate_ec2b4f16d3938de1388271587c0dacba00a76d673747ebee13ae2ca9031d0330 extends Twig_Template
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
        // line 19
        echo "
        ";
        // line 20
        $this->displayBlock('fonts', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "    </head>
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
                                    <button type=\"button\" class=\"btn-sign-in btn btn-default btn-xs dropdown-toggle navbar-btn btn-login\" data-toggle=\"dropdown\">Iniciar sesión</button>
                                    <ul id=\"login-dp\" class=\"dropdown-menu\">
                                        <li>
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    Iniciar sesión con
                                                    <div class=\"social-buttons\">
                                                        <a href=\"";
            // line 77
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connect_facebook");
            echo "\" class=\"btn btn-fb\"><i class=\"fa fa-facebook\"></i> Facebook</a>
                                                        <a href=\"";
            // line 78
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connect_google");
            echo "\" class=\"btn btn-tw\"><i class=\"fa fa-google\"></i> Google</a>
                                                    </div>
                                                    o ingresa tus datos
                                                    <br />
                                                    <form action=\"";
            // line 82
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_login");
            echo "\" class=\"form\" role=\"form\" method=\"post\" accept-charset=\"UTF-8\" id=\"login-nav\">
                                                        <div class=\"form-group\">
                                                            <label class=\"sr-only\" for=\"inputEmail\">Correo electronico</label>
                                                            <input type=\"email\" id=\"username\" value=\"";
            // line 85
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
            echo "\" name=\"_username\"  class=\"form-control\" placeholder=\"Correo electronico\">
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"sr-only\" for=\"inputPassword\">Contraseña</label>
                                                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Contraseña\">
                                                            <div class=\"help-block text-right\"><a href=\"";
            // line 90
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
            echo "                            <li id=\"nav-desktop\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register-company");
            echo "\">Registrar empresa</a></li>

                            <li id=\"nav-desktop\"><a href=\"";
            // line 114
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_list");
            echo "\" >Usuarios</a></li>

                            <li id=\"nav-movil\" ><a href=\"";
            // line 116
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
            echo "\"><i class=\"fa fa-user \"></i>&nbsp;Perfil</a></li>
                            <li id=\"nav-movil\"><a href=\"";
            // line 117
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("companies_mycompanies");
            echo "\"><i class=\"fa fa-bookmark \"></i>&nbsp;Mis empresas</a></li>
                            <li id=\"nav-movil\"><a href=\"";
            // line 118
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register-company");
            echo "\"><i class=\"fa fa-building\" aria-hidden=\"true\"></i>&nbsp;Registrar empresa</a></li>
                                ";
            // line 119
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "role", array()) == "ROLE_ADMIN")) {
                // line 120
                echo "                                <li id=\"nav-movil\"><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_index");
                echo "\"><i class=\"fa fa-lock \"></i>&nbsp;Panel de administrador</a></li>
                                ";
            }
            // line 122
            echo "
                            <li id=\"nav-movil\"><a href=\"";
            // line 123
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_logout");
            echo "\"><i class=\"fa fa-sign-out \"></i>&nbsp;Salir</a></li>

                            ";
            // line 125
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) != null)) {
                // line 126
                echo "                                <li class=\"user-logged-in\">
                                    <div class=\"dropdown\">
                                        <button class=\"btn btn-link dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">

                                            <div class=\"avatar\">
                                                ";
                // line 131
                if (((((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()), ".")) == "png") || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()), ".")) == "jpg")) || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()), ".")) == "jpeg")) || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()), ".")) == "gif"))) {
                    // line 132
                    echo "                                                    ";
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "anonimo", array()) == "Si")) {
                        // line 133
                        echo "                                                        <img  src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.jpg"), "html", null, true);
                        echo "\"/>
                                                    ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 134
(isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()) != null)) {
                        // line 135
                        echo "                                                        <img  src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/users/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()))), "html", null, true);
                        echo "\"/>
                                                    ";
                    }
                    // line 137
                    echo "                                                ";
                } elseif ((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()), ".")) == null)) {
                    // line 138
                    echo "                                                    <img  src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.jpg"), "html", null, true);
                    echo "\"/>
                                                ";
                } else {
                    // line 140
                    echo "                                                    <img  src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()), "html", null, true);
                    echo "\"/>
                                                ";
                }
                // line 142
                echo "                                            </div>

                                            ";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "plastname", array()), "html", null, true);
                echo "
                                            <span class=\"caret\"></span>
                                        </button>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"";
                // line 148
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
                echo "\"><i class=\"fa fa-user \"></i>&nbsp;Perfil</a></li>
                                            <li><a href=\"";
                // line 149
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit");
                echo "\"><i class=\"fa fa-pencil-square \"></i>&nbsp;Editar perfil</a></li>
                                                ";
                // line 150
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "role", array()) == "ROLE_ADMIN")) {
                    // line 151
                    echo "                                                <li><a href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_index");
                    echo "\"><i class=\"fa fa-lock \"></i>&nbsp;Panel de administrador</a></li>
                                                ";
                }
                // line 153
                echo "                                            <li role=\"separator\" class=\"divider\"></li>
                                            <li><a href=\"";
                // line 154
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("companies_mycompanies");
                echo "\"><i class=\"fa fa-bookmark \"></i>&nbsp;Mis empresas</a></li>
                                            <li role=\"separator\" class=\"divider\"></li>
                                            <li><a href=\"";
                // line 156
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_logout");
                echo "\"><i class=\"fa fa-sign-out \"></i>&nbsp;Salir</a></li>
                                            <li><a href=\"\"><i class=\"fa fa-question-circle\"></i>&nbsp;Ayuda</a></li>
                                        </ul>
                                    </div>
                                </li>
                            ";
            }
            // line 162
            echo "                        ";
        }
        // line 163
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
        // line 179
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) != null)) {
            // line 180
            echo "                                <h1>Bienvenido ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "name", array()), "html", null, true);
            echo "</h1>
                            ";
        } else {
            // line 182
            echo "                                <h1>Bienvenido</h1>
                            ";
        }
        // line 184
        echo "                            <h4>Conoce a las empresas a traves de las personas que ahi trabajan</h4>
                            <hr class=\"intro-divider\">
                            <div class=\"col-lg-6 col-lg-offset-3\">
                                <form action=\"";
        // line 187
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
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 209
            echo "                    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "            </div>
        </div>
        <div class=\"clearfix\"></div>

        ";
        // line 215
        $this->displayBlock('content', $context, $blocks);
        // line 219
        echo "

        <footer class=\"layout-footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"single-footer\">
                            <img class=\"img-responsive\" src=\"";
        // line 226
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
        // line 235
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "/downloads/AvisoPrivacidadMyJobsAdvisor.pdf\" target=\"_blank\">Aviso de privacidad</a></li>
                                    <li><a class=\"links-footer\" href=\"";
        // line 236
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


        ";
        // line 276
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array(), "method"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 277
            echo "            <div class=\"modal fade\" id=\"mostrarmodal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"basicModal\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header text-center\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                            <h3>¿Te vas tan pronto?</h3>
                            <img class=\"img-responsive center-block\" src=\"";
            // line 283
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
        // line 290
        echo "

        ";
        // line 292
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array(), "method"), "get", array(0 => "error_login"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 293
            echo "            <div class=\"modal fade\" id=\"mostrarmodal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"basicModal\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header text-center\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                            <h3>";
            // line 298
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "</h3>
                            <img class=\"img-responsive center-block\" src=\"";
            // line 299
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
        // line 305
        echo "
        <script>
                \$(document).ready(function ()
                {
                    \$(\"#mostrarmodal\").modal(\"show\");
                });
        </script>
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

    // line 20
    public function block_fonts($context, array $blocks = array())
    {
        // line 21
        echo "            <!-- fonts -->
            <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        echo "            <script type=\"text/javascript\">
\t\t\t\tvar URL = \"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "\";
            </script>
            <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 31
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
    }

    // line 215
    public function block_content($context, array $blocks = array())
    {
        // line 216
        echo "            <!-- todo el contenido de la web -->
            Content default
        ";
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
        return array (  586 => 216,  583 => 215,  567 => 31,  563 => 30,  559 => 29,  554 => 27,  551 => 26,  548 => 25,  542 => 22,  539 => 21,  536 => 20,  529 => 16,  525 => 15,  521 => 14,  518 => 13,  515 => 12,  509 => 10,  496 => 305,  484 => 299,  480 => 298,  473 => 293,  469 => 292,  465 => 290,  452 => 283,  444 => 277,  440 => 276,  397 => 236,  393 => 235,  381 => 226,  372 => 219,  370 => 215,  364 => 211,  355 => 209,  351 => 208,  327 => 187,  322 => 184,  318 => 182,  312 => 180,  310 => 179,  292 => 163,  289 => 162,  280 => 156,  275 => 154,  272 => 153,  266 => 151,  264 => 150,  260 => 149,  256 => 148,  247 => 144,  243 => 142,  237 => 140,  231 => 138,  228 => 137,  222 => 135,  220 => 134,  215 => 133,  212 => 132,  210 => 131,  203 => 126,  201 => 125,  196 => 123,  193 => 122,  187 => 120,  185 => 119,  181 => 118,  177 => 117,  173 => 116,  168 => 114,  162 => 112,  151 => 104,  134 => 90,  126 => 85,  120 => 82,  113 => 78,  109 => 77,  95 => 66,  91 => 65,  86 => 64,  84 => 63,  74 => 58,  68 => 57,  52 => 43,  50 => 25,  47 => 24,  45 => 20,  42 => 19,  40 => 12,  35 => 10,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Layouts:layout.html.twig", "/home/myjobsa1/public_html/src/AppBundle/Resources/views/Layouts/layout.html.twig");
    }
}
