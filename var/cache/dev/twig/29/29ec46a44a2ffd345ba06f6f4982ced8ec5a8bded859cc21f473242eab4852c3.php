<?php

/* AppBundle:Company:listmycompanies.html.twig */
class __TwigTemplate_c7fe249c3871752d9f7df485c1b3bdff8d6de6b9f851b7c817929d9450e26d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layoutprofiles.html.twig", "AppBundle:Company:listmycompanies.html.twig", 1);
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
        $__internal_c9d6ee9480f5268e864278a188ebb6622117f72dd7bde57797925b682e5c7ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d6ee9480f5268e864278a188ebb6622117f72dd7bde57797925b682e5c7ce8->enter($__internal_c9d6ee9480f5268e864278a188ebb6622117f72dd7bde57797925b682e5c7ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Company:listmycompanies.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9d6ee9480f5268e864278a188ebb6622117f72dd7bde57797925b682e5c7ce8->leave($__internal_c9d6ee9480f5268e864278a188ebb6622117f72dd7bde57797925b682e5c7ce8_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_cb7d3f067eeaab995bfdfab4758c583c338c068b8d7608de261682c009c494cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb7d3f067eeaab995bfdfab4758c583c338c068b8d7608de261682c009c494cf->enter($__internal_cb7d3f067eeaab995bfdfab4758c583c338c068b8d7608de261682c009c494cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <section class=\"result-company-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    ";
        // line 8
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()) == 0)) {
            // line 9
            echo "                        <div class=\"search-result\">
                            <h1 class=\"text-muted text-center\">No has registrado ninguna empresa</h1>
                            <h4 class=\"text-center\">Si eres trabajador o extrabajador de alguna empresa, anímate, regístrala ahora y califícala.</h4>

                            <div class=\"col-lg-12 text-center\">
                                <a href=\"";
            // line 14
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
            // line 19
            echo "                        <h1 id=\"result-company\">Empresas a las que representas</h1>
                        <div class=\"count\">
                            <span class=\"label label-primary\">
                                Total de resultados: ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
            echo "
                            </span>
                        </div>
                        <hr/>
                    ";
        }
        // line 27
        echo "
                    ";
        // line 29
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 30
            echo "                        ";
            if ((($this->getAttribute($this->getAttribute($context["company"], "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())) && ($this->getAttribute($context["company"], "representant", array()) == "si"))) {
                // line 31
                echo "                            <div class=\"media\">
                                <div class=\"media-left\">
                                    ";
                // line 33
                if (($this->getAttribute($context["company"], "logo", array()) == null)) {
                    // line 34
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("company_profile", array("id" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
                    echo "\">
                                            <img class=\"company-logo img-circle\" src=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/company-logo.png"), "html", null, true);
                    echo "\"/>
                                        </a>
                                    ";
                } else {
                    // line 38
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("company_profile", array("id" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
                    echo "\">
                                            <img class=\"company-logo img-circle\" src=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/company/" . $this->getAttribute($context["company"], "logo", array()))), "html", null, true);
                    echo "\"/>
                                        </a>
                                    ";
                }
                // line 42
                echo "                                </div>

                                <div class=\"media-body\">
                                    ";
                // line 46
                echo "                                    ";
                $context["company_stats"] = $this->env->getExtension('AppBundle\Twig\CompanyStatsExtension')->companyStatsFilter($this->getAttribute($context["company"], "id", array()));
                // line 47
                echo "                                    <h4 class=\"media-heading \">
                                        <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("company_profile", array("id" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
                echo "\" class=\"links-search \">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "tradename", array()), "html", null, true);
                echo "</a> 
                                        ";
                // line 49
                if (($this->getAttribute($context["company"], "status", array()) == "valid")) {
                    echo " 
                                            <i class=\"fa fa-check-circle text-info\" aria-hidden=\"true\"></i> 
                                        ";
                }
                // line 51
                echo "  
                                        | ";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company_stats"]) ? $context["company_stats"] : $this->getContext($context, "company_stats")), "opinions", array()), "html", null, true);
                echo " opiniones
                                    </h4>
                                    <p class=\"no-margin\"><b>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "localidad", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "estado", array()), "html", null, true);
                echo "</b></p>
                                    <p class=\"no-margin\" id=\"company-description\">";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "description", array()), "html", null, true);
                echo "</p>
                                    <a href=\"#\"  class=\"links-search-website\" >";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "website", array()), "html", null, true);
                echo "</a>
                                </div>
                                <div class=\"clearfix\"></div>
                                <hr />
                            </div>
                        ";
            }
            // line 62
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                    ";
        // line 64
        echo "                    <div class=\"navigation\">
                        ";
        // line 65
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_cb7d3f067eeaab995bfdfab4758c583c338c068b8d7608de261682c009c494cf->leave($__internal_cb7d3f067eeaab995bfdfab4758c583c338c068b8d7608de261682c009c494cf_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Company:listmycompanies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 65,  181 => 64,  179 => 63,  173 => 62,  164 => 56,  160 => 55,  154 => 54,  149 => 52,  146 => 51,  140 => 49,  134 => 48,  131 => 47,  128 => 46,  123 => 42,  117 => 39,  112 => 38,  106 => 35,  101 => 34,  99 => 33,  95 => 31,  92 => 30,  87 => 29,  84 => 27,  76 => 22,  71 => 19,  55 => 14,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
    <section class=\"result-company-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    {% if pagination.getTotalItemCount == 0 %}
                        <div class=\"search-result\">
                            <h1 class=\"text-muted text-center\">No has registrado ninguna empresa</h1>
                            <h4 class=\"text-center\">Si eres trabajador o extrabajador de alguna empresa, anímate, regístrala ahora y califícala.</h4>

                            <div class=\"col-lg-12 text-center\">
                                <a href=\"{% if app.user == null %} {{ path('user_register_login')}} {% else %} {{ path('register-company')}} {% endif %}\" type=\"button\" class=\"btn btn-page\">¡Registrar una empresa ahora!</a>    
                            </div>
                        </div>

                    {% else %}
                        <h1 id=\"result-company\">Empresas a las que representas</h1>
                        <div class=\"count\">
                            <span class=\"label label-primary\">
                                Total de resultados: {{ pagination.getTotalItemCount }}
                            </span>
                        </div>
                        <hr/>
                    {% endif %}

                    {# usamos la variable company para recorrer cada resultado y mostrarlos #}
                    {% for company in pagination %}
                        {% if company.user.id == app.user.id and company.representant == 'si' %}
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
                        {% endif  %}
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
", "AppBundle:Company:listmycompanies.html.twig", "C:\\wamp\\www\\myjobs\\src\\AppBundle/Resources/views/Company/listmycompanies.html.twig");
    }
}
