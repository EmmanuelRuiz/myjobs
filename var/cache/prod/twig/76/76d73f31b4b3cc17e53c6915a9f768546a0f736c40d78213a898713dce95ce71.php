<?php

/* AppBundle:Company:register-company.html.twig */
class __TwigTemplate_126d6d82a2fd59ec14fd1d01fdecae1e9efbc40f0e2a801736148217907ad41b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layoutprofiles.html.twig", "AppBundle:Company:register-company.html.twig", 1);
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

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <section class=\"register-company-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 hidden-md hidden-sm hidden-xs\">

                    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/myjobsadvisor-registrar-empresa.png"), "html", null, true);
        echo "\" class=\"img-responsive img-register\" widthalt=\"\">
                </div> 
                <div class=\"col-lg-6 box-form-register-company\">
                    <h2 class=\"page-header\">Ingresa los datos de la empresa</h2>

                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array(), "method"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "                        <div class=\"alert alert-dismissible alert-danger\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                            ";
            // line 20
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                   

                    <div class=\"panel panel-default\">

                        <div class=\"panel-body\">
                            ";
        // line 28
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => "", "method" => "POST"));
        echo "
                            ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "


                            <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tradename", array()), 'row');
        echo "
                            </div>


                            <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "businesssector", array()), 'row');
        echo "
                            </div>


                            <div class=\"col-lg-4 col-md-12 col-sm-12 col-xs-12 form-group\">
                                <label>Estado</label>
                                <select class=\"form-control\" name=\"estado\" id=\"select-estados\">
                                </select>
                            </div>
                            <div class=\"col-lg-4 col-md-12 col-sm-12 col-xs-12 form-group\">
                                <label>Municipios</label>
                                <select class=\"form-control\" name=\"municipio\" id=\"select-municipio\">
                                </select>
                            </div>
                            <div class=\"col-lg-4 col-md-12 col-sm-12 col-xs-12 form-group\">
                                <label>Ciudad</label>
                                <select class=\"form-control\" name=\"localidad\" id=\"select-localidad\">
                                </select>
                            </div>
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group\">
                                ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "website", array()), 'row');
        echo "
                            </div>

                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group\">
                                ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'row');
        echo "
                            </div>

                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group\">
                                <label>Eres representante de la empresa?</label> <i class=\"fa fa-question-circle text-info\" aria-hidden=\"true\" role=\"button\" data-toggle=\"popover\" title=\"Que es ser representante?\" data-placement=\"bottom\" data-content=\"Para MyJobsAdvisor un representante puede ser el representante legal, el gerente general, gerente de recursos humanos o la persona destinada por la empresa para representarla en nuestra plataforma.\"></i><br>
                                <div class=\"radio\">
                                    <label>
                                        <input type=\"radio\" name=\"optionsRadios\" id=\"mostrar\" value=\"si\">
                                        Si
                                    </label>
                                </div>
                                <div class=\"radio\">
                                    <label>
                                        <input type=\"radio\" name=\"optionsRadios\" id=\"ocultar\" value=\"no\" checked>
                                        No
                                    </label>
                                </div>
                            </div>



                            <div class=\"repdiv\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group\">
                                    <h4 class=\"\">Datos del  representante</h4>
                                    <hr>
                                </div>
                                <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                    ";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contacname", array()), 'row');
        echo "
                                </div>
                                <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                    ";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contactlastname", array()), 'row');
        echo "
                                </div>
                                <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                    ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "position", array()), 'row');
        echo "
                                </div>
                                
                                <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                    ";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "businessemail", array()), 'row');
        echo "
                                </div>
                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group\">
                                    ";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "rfc", array()), 'row');
        echo "
                                </div>
                                <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                    ";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephoneext", array()), 'row');
        echo "
                                </div>
                                <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                    ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "personalnumber", array()), 'row');
        echo "
                                </div>

                            </div>

                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                ";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Registrar", array()), 'row');
        echo "
                            </div> 


                            ";
        // line 118
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    
    <script>
        \$(document).ready(function () {
            \$('[data-toggle=\"popover\"]').popover();
        });
    </script>


";
    }

    public function getTemplateName()
    {
        return "AppBundle:Company:register-company.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 118,  210 => 114,  201 => 108,  195 => 105,  189 => 102,  183 => 99,  176 => 95,  170 => 92,  164 => 89,  134 => 62,  127 => 58,  104 => 38,  96 => 33,  89 => 29,  85 => 28,  78 => 23,  69 => 20,  65 => 18,  61 => 17,  53 => 12,  46 => 7,  43 => 6,  37 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Company:register-company.html.twig", "/home/myjobsa1/public_html/src/AppBundle/Resources/views/Company/register-company.html.twig");
    }
}
