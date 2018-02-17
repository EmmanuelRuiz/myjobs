<?php

/* AppBundle:Index:index.html.twig */
class __TwigTemplate_3482b53d1971b5e4b74dbab533678df70bbbacc82fe1e0cd96e7b1e7aa033360 extends Twig_Template
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
        $__internal_f5e8728e56953292fcc07d23c4407a3d2dce8a6c12c894f269eb398eb90ec4e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e8728e56953292fcc07d23c4407a3d2dce8a6c12c894f269eb398eb90ec4e0->enter($__internal_f5e8728e56953292fcc07d23c4407a3d2dce8a6c12c894f269eb398eb90ec4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5e8728e56953292fcc07d23c4407a3d2dce8a6c12c894f269eb398eb90ec4e0->leave($__internal_f5e8728e56953292fcc07d23c4407a3d2dce8a6c12c894f269eb398eb90ec4e0_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c4c98d99bc2c16bef2bb8a682af8970223c612955ec589fa831232bffdd5e729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c98d99bc2c16bef2bb8a682af8970223c612955ec589fa831232bffdd5e729->enter($__internal_c4c98d99bc2c16bef2bb8a682af8970223c612955ec589fa831232bffdd5e729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c4c98d99bc2c16bef2bb8a682af8970223c612955ec589fa831232bffdd5e729->leave($__internal_c4c98d99bc2c16bef2bb8a682af8970223c612955ec589fa831232bffdd5e729_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_7b2aa2084f04bda009e46314d34812be2504502de5d91673e006997aafed2a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b2aa2084f04bda009e46314d34812be2504502de5d91673e006997aafed2a96->enter($__internal_7b2aa2084f04bda009e46314d34812be2504502de5d91673e006997aafed2a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["opinions"]) {
            // line 55
            echo "                        ";
            if (($this->getAttribute($this->getAttribute($context["opinions"], "company", array()), "status", array()) == "valid")) {
                // line 56
                echo "                            <tbody>
                                <tr>
                                    <td>
                                        ";
                // line 59
                if (($this->getAttribute($this->getAttribute($context["opinions"], "company", array()), "logo", array()) == null)) {
                    // line 60
                    echo "                                            <img class=\"center-block\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/company-logo.png"), "html", null, true);
                    echo "\" width=\"50\"/>
                                        ";
                } else {
                    // line 62
                    echo "                                            <img class=\"center-block\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/company/" . $this->getAttribute($this->getAttribute($context["opinions"], "company", array()), "logo", array()))), "html", null, true);
                    echo "\" width=\"50\"/>
                                        ";
                }
                // line 64
                echo "                                    </td>
                                    <td>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "company", array()), "tradename", array()), "html", null, true);
                echo "</td>
                                    <td>
                                        ";
                // line 67
                if (($this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "anonimo", array()) == "Si")) {
                    // line 68
                    echo "                                            <em>Anónimo</em>
                                        ";
                } else {
                    // line 70
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "name", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "plastname", array()), "html", null, true);
                    echo "
                                        ";
                }
                // line 72
                echo "
                                    </td>
                                    <td>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["opinions"], "generalcomment", array()), "html", null, true);
                echo "</td>
                                </tr>
                            </tbody>
                        ";
            }
            // line 78
            echo "

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opinions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                </table>
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
        // line 101
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
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/rating.png"), "html", null, true);
        echo "\" alt=\"\" class=\"center-block img-responsive\" >
                <h4>Evaluaciones</h4>
                <p>Nuestra plataforma permite la evaluación de cualquier empresa de manera verdadera y transparente basados en una metodología original.</p>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center\">
                <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/profesional.png"), "html", null, true);
        echo "\" alt=\"\" class=\"center-block img-responsive \" >
                <h4>Perspectivas</h4>
                <p>Los trabajadores y extrabajadores evalúan con base en su experiencia, proporcionando una perspectiva real de cada organización.</p>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center\">
                <img src=\"";
        // line 125
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
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/guide.png"), "html", null, true);
        echo "\" alt=\"\" class=\"center-block img-responsive\" >
                <h4>Guía</h4>
                <p>Nuestra propuesta consiste en guiar a las organizaciones para crear un ambiente donde cada individuo pueda utilizar al máximo su potencial y
                    lograr las metas empresariales.</p>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center\">
                <img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/productividad.png"), "html", null, true);
        echo "\" alt=\"\" class=\"center-block img-responsive\" >
                <h4>Productividad</h4>
                <p>La suma de talentos logra incrementar la productividad y el rendimiento en los centros de trabajo.</p>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center\">
                <img src=\"";
        // line 151
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
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/vidanta.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                    </a>
                </div>
                <div class=\"col-lg-2 col-md-4 col-sm-4 col-xs-4\">
                    <a href=\"#\" class=\"thumbnail\">
                        <img class=\" img-responsive\" src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/catalonia.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                    </a>
                </div>
                <div class=\"col-lg-2 col-md-4 col-sm-4 col-xs-4\">
                    <a href=\"#\" class=\"thumbnail\">
                        <img class=\" img-responsive\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/barcelo.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                    </a>
                </div>
                <div class=\"col-lg-2 col-md-4 col-sm-4 col-xs-4\">
                    <a href=\"#\" class=\"thumbnail\">
                        <img class=\" img-responsive\" src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/city.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                    </a>
                </div>
                <div class=\"col-lg-2 col-md-4 col-sm-4 col-xs-4\">
                    <a href=\"#\" class=\"thumbnail\">
                        <img class=\" img-responsive\" src=\"";
        // line 188
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

    <section class=\"register-company-section-index\" style=\"padding:5% 0 5% 0;\">
        <div class=\"container\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\">
                <h4></h4>
                <h1>Registra una empresa</h1>
                <p>Eres representante de una empresa, regístrala ahora mismo</p>
            </div>
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\">
                <a href=\"";
        // line 235
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
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
        
        $__internal_7b2aa2084f04bda009e46314d34812be2504502de5d91673e006997aafed2a96->leave($__internal_7b2aa2084f04bda009e46314d34812be2504502de5d91673e006997aafed2a96_prof);

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
        return array (  379 => 235,  329 => 188,  321 => 183,  313 => 178,  305 => 173,  297 => 168,  277 => 151,  269 => 146,  260 => 140,  242 => 125,  234 => 120,  226 => 115,  209 => 101,  187 => 81,  179 => 78,  172 => 74,  168 => 72,  160 => 70,  156 => 68,  154 => 67,  149 => 65,  146 => 64,  140 => 62,  134 => 60,  132 => 59,  127 => 56,  124 => 55,  120 => 54,  92 => 29,  84 => 24,  76 => 19,  65 => 10,  59 => 9,  50 => 6,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle:Layouts:layout.html.twig\"%}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/js/custom/companies.js') }}\"></script>
    <script src=\"{{ asset('assets/js/custom/slider.js') }}\"></script>
{% endblock %}

{% block content %}

    <section class=\"about-section\">
        <div class=\"container\">
            <div class=\"col-lg-12 text-center\">
                <h2 class=\"our-process\">¿Cómo funciona MyJobsAdvisor?</h2>
                <p>Es muy sencillo, tan solo sigue estos sencillos pasos... </p>
            </div>
            <div class=\"row \">
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center\">
                    <img src=\"{{ asset('assets/images/myjobsadvisor-registrar.png') }}\" alt=\"\" class=\"center-block img-responsive\" >
                    <h4>Registrate</h4>
                    <p>Crea un perfil ingresando tus datos, o si lo deseas, inicia sesión con tu perfil de Facebook o tu cuenta de Google.</p>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center\">
                    <img src=\"{{ asset('assets/images/myjobsadvisor-search.png') }}\" alt=\"\" class=\"center-block img-responsive \" >
                    <h4>Busca a tu empresa</h4>
                    <p>Busca a tu empresa y si eres el primero en buscarla, registrala de inmediato</p>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center\">
                    <img src=\"{{ asset('assets/images/myjobsadvisor-califica.png') }}\" alt=\"\" class=\"center-block img-responsive \" >
                    <h4>Califica a tu empresa</h4>
                    <p>Por ultimo, califica tu empresa. Y listo, puedes hacerlo con tu empresa actual o en cualquier otra donde hayas laborado.</p>
                </div>
            </div>
        </div>
    </section><hr>

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
                    {% for opinions in pagination %}
                        {% if opinions.company.status == \"valid\" %}
                            <tbody>
                                <tr>
                                    <td>
                                        {% if opinions.company.logo == null %}
                                            <img class=\"center-block\" src=\"{{ asset('assets/images/company-logo.png') }}\" width=\"50\"/>
                                        {% else %}
                                            <img class=\"center-block\" src=\"{{ asset('uploads/company/'~opinions.company.logo) }}\" width=\"50\"/>
                                        {% endif %}
                                    </td>
                                    <td>{{ opinions.company.tradename}}</td>
                                    <td>
                                        {% if opinions.user.anonimo == 'Si'%}
                                            <em>Anónimo</em>
                                        {% else %}
                                            {{ opinions.user.name}} {{ opinions.user.plastname}}
                                        {% endif %}

                                    </td>
                                    <td>{{opinions.generalcomment}}</td>
                                </tr>
                            </tbody>
                        {% endif %}


                    {% endfor %}
                </table>
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
                    <img src=\"{{ asset('assets/images/myjobsadvisor-logotipo-oficial-movil.png') }}\" alt=\"\" class=\"center-block img-responsive\" width=\"350\"/>
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
                <img src=\"{{ asset('assets/images/rating.png') }}\" alt=\"\" class=\"center-block img-responsive\" >
                <h4>Evaluaciones</h4>
                <p>Nuestra plataforma permite la evaluación de cualquier empresa de manera verdadera y transparente basados en una metodología original.</p>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center\">
                <img src=\"{{ asset('assets/images/profesional.png') }}\" alt=\"\" class=\"center-block img-responsive \" >
                <h4>Perspectivas</h4>
                <p>Los trabajadores y extrabajadores evalúan con base en su experiencia, proporcionando una perspectiva real de cada organización.</p>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center\">
                <img src=\"{{ asset('assets/images/job.png') }}\" alt=\"\" class=\"center-block img-responsive \" >
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
                <img src=\"{{ asset('assets/images/guide.png') }}\" alt=\"\" class=\"center-block img-responsive\" >
                <h4>Guía</h4>
                <p>Nuestra propuesta consiste en guiar a las organizaciones para crear un ambiente donde cada individuo pueda utilizar al máximo su potencial y
                    lograr las metas empresariales.</p>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center\">
                <img src=\"{{ asset('assets/images/productividad.png') }}\" alt=\"\" class=\"center-block img-responsive\" >
                <h4>Productividad</h4>
                <p>La suma de talentos logra incrementar la productividad y el rendimiento en los centros de trabajo.</p>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center\">
                <img src=\"{{ asset('assets/images/gestion.png') }}\" alt=\"\" class=\"center-block img-responsive\" >
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
                        <img class=\" img-responsive\" src=\"{{ asset('assets/images/vidanta.jpg') }}\" alt=\"...\">
                    </a>
                </div>
                <div class=\"col-lg-2 col-md-4 col-sm-4 col-xs-4\">
                    <a href=\"#\" class=\"thumbnail\">
                        <img class=\" img-responsive\" src=\"{{ asset('assets/images/catalonia.jpg') }}\" alt=\"...\">
                    </a>
                </div>
                <div class=\"col-lg-2 col-md-4 col-sm-4 col-xs-4\">
                    <a href=\"#\" class=\"thumbnail\">
                        <img class=\" img-responsive\" src=\"{{ asset('assets/images/barcelo.jpg') }}\" alt=\"...\">
                    </a>
                </div>
                <div class=\"col-lg-2 col-md-4 col-sm-4 col-xs-4\">
                    <a href=\"#\" class=\"thumbnail\">
                        <img class=\" img-responsive\" src=\"{{ asset('assets/images/city.jpg') }}\" alt=\"...\">
                    </a>
                </div>
                <div class=\"col-lg-2 col-md-4 col-sm-4 col-xs-4\">
                    <a href=\"#\" class=\"thumbnail\">
                        <img class=\" img-responsive\" src=\"{{ asset('assets/images/maroma.jpg') }}\" alt=\"...\">
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

    <section class=\"register-company-section-index\" style=\"padding:5% 0 5% 0;\">
        <div class=\"container\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\">
                <h4></h4>
                <h1>Registra una empresa</h1>
                <p>Eres representante de una empresa, regístrala ahora mismo</p>
            </div>
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\">
                <a href=\"{% if app.user == null %} {{ path('user_register_login')}} {% else %} {{ path('register-company')}} {% endif %}\" type=\"button\" class=\"btn btn-page\">¡Registrarla ahora!</a>
            </div>
        </div>
    </section>

{% endblock %}
", "AppBundle:Index:index.html.twig", "C:\\wamp\\www\\myjobs\\src\\AppBundle/Resources/views/Index/index.html.twig");
    }
}
