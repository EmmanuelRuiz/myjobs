<?php

/* AppBundle:Index:index.html.twig */
class __TwigTemplate_4327644a3a3a807bde027398c0e7befcedb670ea794889d8dc76ae1a68d4d07d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layout.html.twig", "AppBundle:Index:index.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Layouts:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/companies.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/slider.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
    <section class=\"about-section\">
        <div class=\"container\">
            <div class=\"col-lg-12 text-center\">
                <h2 class=\"our-process\">¿Cómo funciona MyJobsAdvisor?</h2>
                <p>Es muy sencillo, tan solo sigue estos sencillos pasos... </p>
            </div>
            <div class=\"row \">
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center\">
                    <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/myjobsadvisor-registrar.png"), "html", null, true);
        echo "\" alt=\"\" class=\"center-block img-responsive\" >
                    <h4>Registrate</h4>
                    <p>Crea un perfil ingresando tus datos, o si lo deseas, inicia sesión con tu perfil de Facebook o tu cuenta de Google.</p>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center\">
                    <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/myjobsadvisor-search.png"), "html", null, true);
        echo "\" alt=\"\" class=\"center-block img-responsive \" >
                    <h4>Busca a tu empresa</h4>
                    <p>Busca a tu empresa y si eres el primero en buscarla, registrala de inmediato</p>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center\">
                    <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/myjobsadvisor-califica.png"), "html", null, true);
        echo "\" alt=\"\" class=\"center-block img-responsive \" >
                    <h4>Califica a tu empresa</h4>
                    <p>Por ultimo, califica tu empresa. Y listo, puedes hacerlo con tu empresa actual o en cualquier otra donde hayas laborado.</p>
                </div>
            </div>
        </div>
    </section><hr>

    <section class=\"about-section\">
        <div class=\"container\">
            <div class=\"row \">
                <div class=\"col-lg-12 text-center\">
                    <h2 class=\"our-process\">Acerca de nosotros</h2><br>
                </div>
                <div class=\"col-lg-6\">
                    <h3>¿Quiénes somos?</h3>
                    <p>MyJobsAdvisor es <b>una plataforma confiable</b> y auténtica basada en comentarios verdaderos
                        provenientes de los trabajadores y extrabajadores: ofrecemos una plataforma única donde los trabajadores intercambian
                        experiencias y <b>logran</b> reconocer los mejores lugares de trabajo.</p> <br>
                    <p>MyJobsAdvisor <b>suma el talento de profesionales en la gestión de relaciones laborales,</b> formación empresarial y
                        adquisición de talento.</p>
                </div>
                <div class=\"col-lg-6\">
                    <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/myjobsadvisor-logotipo-oficial-movil.png"), "html", null, true);
        echo "\" alt=\"\" class=\"center-block img-responsive\" width=\"350\"/>
                </div>
            </div>
        </div>
    </section><hr>

    <section class=\"how-we-work-for-you-section\">
        <div class=\"container\">
            <div class=\"col-lg-12 text-center\">
                <h4 class=\"our-process\">MyJobsAdvisor y los trabajadores</h4>
                <h1>¿Cómo ayudamos a los trabajadores y extrabajadores?</h1>
                <p>Ayudamos a las personas a encontrar el mejor lugar para desarrollar su talento.</p><br>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center\">
                <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/rating.png"), "html", null, true);
        echo "\" alt=\"\" class=\"center-block img-responsive\" >
                <h4>Evaluaciones</h4>
                <p>Nuestra plataforma permite la evaluación de cualquier empresa de manera verdadera y transparente basados en una metodología original.</p>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center\">
                <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/profesional.png"), "html", null, true);
        echo "\" alt=\"\" class=\"center-block img-responsive \" >
                <h4>Perspectivas</h4>
                <p>Los trabajadores y extrabajadores evalúan con base en su experiencia, proporcionando una perspectiva real de cada organización.</p>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center\">
                <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/job.png"), "html", null, true);
        echo "\" alt=\"\" class=\"center-block img-responsive \" >
                <h4>Desarrolla tus talentos</h4>
                <p>Deja de perder tiempo en el lugar equivocado, encuentra la mejor empresa para desarrollar tu talento, comienza o continua tu carrera profesional.</p>
            </div>
        </div>
    </section><hr>

    <section class=\"how-we-work-for-you-section\">
        <div class=\"container\">
            <div class=\"col-lg-12 text-center\">
                <h4 class=\"our-process\">MyJobsAdvisor y las empresas</h4>
                <h1>¿Cómo ayudamos a los compañías?</h1>
                <p>Ayudamos a las empresas a generar el mejor ambiente para desarrollar talentos</p><br>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center\">
                <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/guide.png"), "html", null, true);
        echo "\" alt=\"\" class=\"center-block img-responsive\" >
                <h4>Guía</h4>
                <p>Nuestra propuesta consiste en guiar a las organizaciones para crear un ambiente donde cada individuo pueda utilizar al máximo su potencial y
                    lograr las metas empresariales.</p>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center\">
                <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/productividad.png"), "html", null, true);
        echo "\" alt=\"\" class=\"center-block img-responsive\" >
                <h4>Productividad</h4>
                <p>La suma de talentos logra incrementar la productividad y el rendimiento en los centros de trabajo.</p>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center\">
                <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/gestion.png"), "html", null, true);
        echo "\" alt=\"\" class=\"center-block img-responsive\" >
                <h4>Equipos de alto rendimiento</h4>
                <p>Ayudamos a los líderes a descubrir sus principales talentos y a gestionar adecuadamente el talento de sus equipos de trabajo.</p>
            </div>
        </div>
    </section><hr>

    <section class=\"companies-from-myjobsadvisor\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h4 class=\"company\">Empresas</h4>
                    <h1>Algunas empresas registradas en MyJobsAdvisor</h1>
                    <br>
                </div>
                <div class=\"col-lg-2 col-md-4 col-sm-4 col-xs-4 col-lg-offset-1\">
                    <a  class=\"thumbnail\">
                        <img class=\" img-responsive\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/vidanta.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                    </a>
                </div>
                <div class=\"col-lg-2 col-md-4 col-sm-4 col-xs-4\">
                    <a href=\"#\" class=\"thumbnail\">
                        <img class=\" img-responsive\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/catalonia.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                    </a>
                </div>
                <div class=\"col-lg-2 col-md-4 col-sm-4 col-xs-4\">
                    <a href=\"#\" class=\"thumbnail\">
                        <img class=\" img-responsive\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/barcelo.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                    </a>
                </div>
                <div class=\"col-lg-2 col-md-4 col-sm-4 col-xs-4\">
                    <a href=\"#\" class=\"thumbnail\">
                        <img class=\" img-responsive\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/city.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                    </a>
                </div>
                <div class=\"col-lg-2 col-md-4 col-sm-4 col-xs-4\">
                    <a href=\"#\" class=\"thumbnail\">
                        <img class=\" img-responsive\" src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/maroma.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class=\"quotes-slider\">
        <div class=\"container\">
            <div class=\"col-lg-12\">
                <div class=\"btn-bar text-center\">
                    <div id=\"buttons\">
                        <a id=\"prev\" href=\"#\">&lt;</a>
                        <a id=\"next\" href=\"#\">&gt;</a>
                    </div>
                </div>
                <div id=\"slides\">
                    <ul>
                        <li class=\"slide\"><i>\"Una de las cosas que hemos aprendido tras analizar todos los datos de nuestro proceso de selección es que el
                                expediente académico y la puntuación de los candidatos en los test son inútiles como criterio de contratación\".</i><br>
                            <b>- Laszlo Bock, vicepresidente de Recursos Humanos de Google</b></li>
                        <li class=\"slide\"><i>\"Las empresas necesitan dejar atrás sus prácticas actuales y aprender a contratar personas, no empleados\".</i>
                            <b>- Jim Collins, Considerado uno de los pensadores de negocios más influyentes de la vida moderna, autor de “Empresas que sobresalen”</b></li>
                        <li class=\"slide\"><i>\"Brindar espacios para que la persona desarrolle, desde su consciencia, tareas fundadas en sus aptitudes innatas; esto es
                                lo único que lo hace fuerte, diferente y especial\".</i>
                            <b>- Martin Seligman, psicólogo, educador y escritor, pionero de la psicología positiva.</b></li>
                        <li class=\"slide\"><i>\"Es necesario cambiar la forma como los empleados son reclutados, posicionados en sus roles, reconocidos y más aún,
                                como son liderados para asegurar que se involucren emocionalmente\".</i>
                            <b>- John H. Fleming & Jim Asplund de la organización Gallup. Metodología Human Sigma</b></li>
                        <li class=\"slide\"><i>\"La gente obtiene mejores resultados si pone su esfuerzo en sus fortalezas en lugar de poner demasiado énfasis en
                                las carencias o deficiencias percibidas\".</i>
                            <b>- Marcus Buckingham, escritor, investigador, orador motivacional y consultor de negocios, autor de “Primero, rompa todas las reglas”</b></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <section class=\"recent-opinion\">
        <div class=\"container\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\">
                <h4 class=\"opinions\">Opiniones</h4>
                <h1>Se parte de cientos de opiniones</h1>
                <p>Estas son las últimas opiniones que los usuarios han hecho a estas empresas</p>
            </div>
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 table-responsive\">
                <table class=\"table table-bordered\">
                    <thead>
                        <tr>
                            <th>Logo</th>
                            <th>Empresa</th>
                            <th>Opinado por</th>
                            <th>Opinión</th>
                        </tr>
                    </thead>
                    ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["opinions"]) {
            // line 196
            echo "                        ";
            if (($this->getAttribute($this->getAttribute($context["opinions"], "company", array()), "status", array()) == "valid")) {
                // line 197
                echo "                            <tbody>
                                <tr>
                                    <td>
                                        ";
                // line 200
                if (($this->getAttribute($this->getAttribute($context["opinions"], "company", array()), "logo", array()) == null)) {
                    // line 201
                    echo "                                            <img class=\"center-block\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/company-logo.png"), "html", null, true);
                    echo "\" width=\"50\"/>
                                        ";
                } else {
                    // line 203
                    echo "                                            <img class=\"center-block\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/company/" . $this->getAttribute($this->getAttribute($context["opinions"], "company", array()), "logo", array()))), "html", null, true);
                    echo "\" width=\"50\"/>
                                        ";
                }
                // line 205
                echo "                                    </td>
                                    <td>";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "company", array()), "tradename", array()), "html", null, true);
                echo "</td>
                                    <td>
                                        ";
                // line 208
                if (($this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "anonimo", array()) == "Si")) {
                    // line 209
                    echo "                                            <em>Anónimo</em>
                                        ";
                } else {
                    // line 211
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "name", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "plastname", array()), "html", null, true);
                    echo "
                                        ";
                }
                // line 213
                echo "
                                    </td>
                                    <td>";
                // line 215
                echo twig_escape_filter($this->env, $this->getAttribute($context["opinions"], "generalcomment", array()), "html", null, true);
                echo "</td>
                                </tr>
                            </tbody>
                        ";
            }
            // line 219
            echo "

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opinions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo "                </table>
            </div>
        </div>
    </section><hr>

    <section class=\"register-company-section-index\">
        <div class=\"container\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\">
                <h4></h4>
                <h1>Registra una empresa</h1>
                <p>Eres representante de una empresa, regístrala ahora mismo</p>
            </div>
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\">
                <a href=\"";
        // line 235
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) == null)) {
            echo " ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register_login");
            echo " ";
        } else {
            echo " ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register-company");
            echo " ";
        }
        echo "\" type=\"button\" class=\"btn btn-page\">¡Registrarla ahora!</a>
            </div>
        </div>
    </section>

";
    }

    public function getTemplateName()
    {
        return "AppBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 235,  349 => 222,  341 => 219,  334 => 215,  330 => 213,  322 => 211,  318 => 209,  316 => 208,  311 => 206,  308 => 205,  302 => 203,  296 => 201,  294 => 200,  289 => 197,  286 => 196,  282 => 195,  223 => 139,  215 => 134,  207 => 129,  199 => 124,  191 => 119,  171 => 102,  163 => 97,  154 => 91,  136 => 76,  128 => 71,  120 => 66,  103 => 52,  77 => 29,  69 => 24,  61 => 19,  50 => 10,  47 => 9,  41 => 6,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Index:index.html.twig", "/home/myjobsa1/public_html/src/AppBundle/Resources/views/Index/index.html.twig");
    }
}
