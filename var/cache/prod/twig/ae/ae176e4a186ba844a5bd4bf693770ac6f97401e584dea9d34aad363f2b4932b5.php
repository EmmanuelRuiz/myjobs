<?php

/* AppBundle:Company:companies.html.twig */
class __TwigTemplate_c2be32d42c05d5ad0544f76edac9d2b7a0561536d8110bb9695814113a5e42cc extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/companies.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <section class=\"result-company-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    ";
        // line 12
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalItemCount", array()) == 0)) {
            // line 13
            echo "                        <div class=\"search-result\">
                            <h1 class=\"text-muted text-center\">No se encontró ningún resultado </h1>
                            <h4 class=\"text-center\">Eres el primero en buscar esta empresa, si eres trabajador o extrabajador anímate, regístrala ahora y califícala.</h4>

                            <div class=\"col-lg-12 text-center\">
                                <a href=\"";
            // line 18
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) == null)) {
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalItemCount", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company_stats"]) ? $context["company_stats"] : null), "opinions", array()), "html", null, true);
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
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
        echo "
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </section>
";
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
        return array (  185 => 68,  182 => 67,  179 => 65,  167 => 59,  163 => 58,  157 => 57,  152 => 55,  149 => 54,  143 => 52,  137 => 51,  134 => 50,  131 => 49,  126 => 45,  120 => 42,  115 => 41,  109 => 38,  104 => 37,  102 => 36,  98 => 34,  93 => 33,  90 => 31,  82 => 26,  77 => 23,  61 => 18,  54 => 13,  52 => 12,  46 => 8,  43 => 7,  37 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Company:companies.html.twig", "/home/myjobsa1/public_html/src/AppBundle/Resources/views/Company/companies.html.twig");
    }
}
