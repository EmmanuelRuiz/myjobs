<?php

/* AppBundle:Company:companies.html.twig */
class __TwigTemplate_01627fdf3da0593295cf54b11696f58c0bc94833bf1408d6e47b89852e9eb07c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layoutprofiles.html.twig", "AppBundle:Company:companies.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Layouts:layoutprofiles.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7779bef93c6cefc65c1f72443938ad1c71ebe0d3d986a59cb327b703235c6089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7779bef93c6cefc65c1f72443938ad1c71ebe0d3d986a59cb327b703235c6089->enter($__internal_7779bef93c6cefc65c1f72443938ad1c71ebe0d3d986a59cb327b703235c6089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Company:companies.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7779bef93c6cefc65c1f72443938ad1c71ebe0d3d986a59cb327b703235c6089->leave($__internal_7779bef93c6cefc65c1f72443938ad1c71ebe0d3d986a59cb327b703235c6089_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6507092b448fcc3d39b9cb6ba2213c33077e0c5f1737ab973dfb96ca3c171548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6507092b448fcc3d39b9cb6ba2213c33077e0c5f1737ab973dfb96ca3c171548->enter($__internal_6507092b448fcc3d39b9cb6ba2213c33077e0c5f1737ab973dfb96ca3c171548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/companies.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6507092b448fcc3d39b9cb6ba2213c33077e0c5f1737ab973dfb96ca3c171548->leave($__internal_6507092b448fcc3d39b9cb6ba2213c33077e0c5f1737ab973dfb96ca3c171548_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_92d07f5963c45c3d13cb3022da327f3db43fbfc182868207f2954d60245536fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d07f5963c45c3d13cb3022da327f3db43fbfc182868207f2954d60245536fd->enter($__internal_92d07f5963c45c3d13cb3022da327f3db43fbfc182868207f2954d60245536fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <section class=\"result-company-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    ";
        // line 12
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()) == 0)) {
            // line 13
            echo "                        <div class=\"search-result\">
                            <h1 class=\"text-muted text-center\">No se encontró ningún resultado </h1>
                            <h4 class=\"text-center\">Eres el primero en buscar esta empresa, si eres trabajador o extrabajador anímate, regístrala ahora y califícala.</h4>

                            <div class=\"col-lg-12 text-center\">
                                <a href=\"";
            // line 18
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
                echo " ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register_login");
                echo " ";
            } else {
                echo " ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register-company");
                echo " ";
            }
            echo "\" type=\"button\" class=\"btn btn-page\">¡Registrar una empresa ahora!</a>    
                            </div>
                        </div>

                    ";
        } else {
            // line 23
            echo "                        <h1 id=\"result-company\">Resultados de búsqueda</h1>
                        <div class=\"count\">
                            <span class=\"label label-primary\">
                                Total de resultados: ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
            echo "
                            </span>
                        </div>
                        <hr/>
                    ";
        }
        // line 31
        echo "
                    ";
        // line 33
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 34
            echo "                        <div class=\"media\">
                            <div class=\"media-left\">
                                ";
            // line 36
            if (($this->getAttribute($context["company"], "logo", array()) == null)) {
                // line 37
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("company_profile", array("id" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
                echo "\">
                                        <img class=\"company-logo img-circle\" src=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/company-logo.png"), "html", null, true);
                echo "\"/>
                                    </a>
                                ";
            } else {
                // line 41
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("company_profile", array("id" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
                echo "\">
                                        <img class=\"company-logo img-circle\" src=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/company/" . $this->getAttribute($context["company"], "logo", array()))), "html", null, true);
                echo "\"/>
                                    </a>
                                ";
            }
            // line 45
            echo "                            </div>

                            <div class=\"media-body\">
                                ";
            // line 49
            echo "                                ";
            $context["company_stats"] = $this->env->getExtension('AppBundle\Twig\CompanyStatsExtension')->companyStatsFilter($this->getAttribute($context["company"], "id", array()));
            // line 50
            echo "                                <h4 class=\"media-heading \">
                                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("company_profile", array("id" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
            echo "\" class=\"links-search \">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "tradename", array()), "html", null, true);
            echo "</a> 
                                    ";
            // line 52
            if (($this->getAttribute($context["company"], "status", array()) == "valid")) {
                echo " 
                                        <i class=\"fa fa-check-circle text-info\" aria-hidden=\"true\"></i> 
                                    ";
            }
            // line 54
            echo "  
                                    | ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company_stats"]) ? $context["company_stats"] : $this->getContext($context, "company_stats")), "opinions", array()), "html", null, true);
            echo " opiniones
                                </h4>
                                <p class=\"no-margin\"><b>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "localidad", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "estado", array()), "html", null, true);
            echo "</b></p>
                                <p class=\"no-margin\" id=\"company-description\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "description", array()), "html", null, true);
            echo "</p>
                                <a href=\"#\"  class=\"links-search-website\" >";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "website", array()), "html", null, true);
            echo "</a>
                            </div>
                            <div class=\"clearfix\"></div>
                            <hr />
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
                    ";
        // line 67
        echo "                    <div class=\"navigation\">
                        ";
        // line 68
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_92d07f5963c45c3d13cb3022da327f3db43fbfc182868207f2954d60245536fd->leave($__internal_92d07f5963c45c3d13cb3022da327f3db43fbfc182868207f2954d60245536fd_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Company:companies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 68,  197 => 67,  194 => 65,  182 => 59,  178 => 58,  172 => 57,  167 => 55,  164 => 54,  158 => 52,  152 => 51,  149 => 50,  146 => 49,  141 => 45,  135 => 42,  130 => 41,  124 => 38,  119 => 37,  117 => 36,  113 => 34,  108 => 33,  105 => 31,  97 => 26,  92 => 23,  76 => 18,  69 => 13,  67 => 12,  61 => 8,  55 => 7,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/js/custom/companies.js') }}\"></script>
{% endblock %}

{% block content %}
    <section class=\"result-company-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    {% if pagination.getTotalItemCount == 0 %}
                        <div class=\"search-result\">
                            <h1 class=\"text-muted text-center\">No se encontró ningún resultado </h1>
                            <h4 class=\"text-center\">Eres el primero en buscar esta empresa, si eres trabajador o extrabajador anímate, regístrala ahora y califícala.</h4>

                            <div class=\"col-lg-12 text-center\">
                                <a href=\"{% if app.user == null %} {{ path('user_register_login')}} {% else %} {{ path('register-company')}} {% endif %}\" type=\"button\" class=\"btn btn-page\">¡Registrar una empresa ahora!</a>    
                            </div>
                        </div>

                    {% else %}
                        <h1 id=\"result-company\">Resultados de búsqueda</h1>
                        <div class=\"count\">
                            <span class=\"label label-primary\">
                                Total de resultados: {{ pagination.getTotalItemCount }}
                            </span>
                        </div>
                        <hr/>
                    {% endif %}

                    {# usamos la variable company para recorrer cada resultado y mostrarlos #}
                    {% for company in pagination %}
                        <div class=\"media\">
                            <div class=\"media-left\">
                                {% if company.logo == null%}
                                    <a href=\"{{ path('company_profile', {'id':company.id}) }}\">
                                        <img class=\"company-logo img-circle\" src=\"{{ asset('assets/images/company-logo.png') }}\"/>
                                    </a>
                                {% else %}
                                    <a href=\"{{ path('company_profile', {'id':company.id}) }}\">
                                        <img class=\"company-logo img-circle\" src=\"{{ asset('uploads/company/'~company.logo) }}\"/>
                                    </a>
                                {% endif %}
                            </div>

                            <div class=\"media-body\">
                                {# enlace al perfil de la empresa #}
                                {% set company_stats = company.id|company_stats%}
                                <h4 class=\"media-heading \">
                                    <a href=\"{{ path('company_profile', {'id':company.id})}}\" class=\"links-search \">{{ company.tradename }}</a> 
                                    {% if company.status == 'valid' %} 
                                        <i class=\"fa fa-check-circle text-info\" aria-hidden=\"true\"></i> 
                                    {% endif %}  
                                    | {{company_stats.opinions}} opiniones
                                </h4>
                                <p class=\"no-margin\"><b>{{ company.localidad }}, {{ company.estado }}</b></p>
                                <p class=\"no-margin\" id=\"company-description\">{{ company.description }}</p>
                                <a href=\"#\"  class=\"links-search-website\" >{{ company.website }}</a>
                            </div>
                            <div class=\"clearfix\"></div>
                            <hr />
                        </div>
                    {% endfor %}

                    {# modificar el js para el scroll infinito #}
                    <div class=\"navigation\">
                        {{ knp_pagination_render(pagination) }}
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "AppBundle:Company:companies.html.twig", "C:\\wamp\\www\\myjobs\\src\\AppBundle/Resources/views/Company/companies.html.twig");
    }
}
