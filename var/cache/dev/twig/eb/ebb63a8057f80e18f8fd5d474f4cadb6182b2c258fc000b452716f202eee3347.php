<?php

/* AppBundle:Company:register-company.html.twig */
class __TwigTemplate_59db5b4ab722e43a08a9f9e78a91e8261cc8f36789c4c083310bc63305ee194b extends Twig_Template
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
        $__internal_d1e40bcc0a35cee260bc6d08bf90e03b7b0e8455247732906d0e441b71cef28a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e40bcc0a35cee260bc6d08bf90e03b7b0e8455247732906d0e441b71cef28a->enter($__internal_d1e40bcc0a35cee260bc6d08bf90e03b7b0e8455247732906d0e441b71cef28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Company:register-company.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1e40bcc0a35cee260bc6d08bf90e03b7b0e8455247732906d0e441b71cef28a->leave($__internal_d1e40bcc0a35cee260bc6d08bf90e03b7b0e8455247732906d0e441b71cef28a_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec0f69e7d2c3cb58624d29ec5786569b88541af6fa2617034f8bdcaa501af15c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec0f69e7d2c3cb58624d29ec5786569b88541af6fa2617034f8bdcaa501af15c->enter($__internal_ec0f69e7d2c3cb58624d29ec5786569b88541af6fa2617034f8bdcaa501af15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/companies.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ec0f69e7d2c3cb58624d29ec5786569b88541af6fa2617034f8bdcaa501af15c->leave($__internal_ec0f69e7d2c3cb58624d29ec5786569b88541af6fa2617034f8bdcaa501af15c_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_2777ddcab82e2571b151909ccfa0e7b6f6b9ba87ae7c7df11e3bfef5b6d1ddd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2777ddcab82e2571b151909ccfa0e7b6f6b9ba87ae7c7df11e3bfef5b6d1ddd4->enter($__internal_2777ddcab82e2571b151909ccfa0e7b6f6b9ba87ae7c7df11e3bfef5b6d1ddd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "error"), "method"));
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo "
                            ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "


                            <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tradename", array()), 'row');
        echo "
                            </div>


                            <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "businesssector", array()), 'row');
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'row');
        echo "
                            </div>

                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group\">
                                ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contacname", array()), 'row');
        echo "
                                </div>
                                <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                    ";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contactlastname", array()), 'row');
        echo "
                                </div>
                                <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                    ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'row');
        echo "
                                </div>
                                
                                <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                    ";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "businessemail", array()), 'row');
        echo "
                                </div>
                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group\">
                                    ";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rfc", array()), 'row');
        echo "
                                </div>
                                <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                    ";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephoneext", array()), 'row');
        echo "
                                </div>
                                <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                    ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "personalnumber", array()), 'row');
        echo "
                                </div>

                            </div>

                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                ";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Registrar", array()), 'row');
        echo "
                            </div> 


                            ";
        // line 118
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_2777ddcab82e2571b151909ccfa0e7b6f6b9ba87ae7c7df11e3bfef5b6d1ddd4->leave($__internal_2777ddcab82e2571b151909ccfa0e7b6f6b9ba87ae7c7df11e3bfef5b6d1ddd4_prof);

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
        return array (  232 => 118,  225 => 114,  216 => 108,  210 => 105,  204 => 102,  198 => 99,  191 => 95,  185 => 92,  179 => 89,  149 => 62,  142 => 58,  119 => 38,  111 => 33,  104 => 29,  100 => 28,  93 => 23,  84 => 20,  80 => 18,  76 => 17,  68 => 12,  61 => 7,  55 => 6,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
    {{parent()}}
    <script src=\"{{ asset('assets/js/custom/companies.js') }}\"></script>
{% endblock javascripts %}
{% block content %}
    <section class=\"register-company-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 hidden-md hidden-sm hidden-xs\">

                    <img src=\"{{ asset('assets/images/myjobsadvisor-registrar-empresa.png')}}\" class=\"img-responsive img-register\" widthalt=\"\">
                </div> 
                <div class=\"col-lg-6 box-form-register-company\">
                    <h2 class=\"page-header\">Ingresa los datos de la empresa</h2>

                    {% for message in app.session.flashbag().get('error') %}
                        <div class=\"alert alert-dismissible alert-danger\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                            {{ message }}
                        </div>
                    {% endfor %}
                   

                    <div class=\"panel panel-default\">

                        <div class=\"panel-body\">
                            {{form_start(form, {'action':'', 'method':'POST'})}}
                            {{form_errors(form)}}


                            <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                {{form_row(form.tradename)}}
                            </div>


                            <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                {{form_row(form.businesssector)}}
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
                                {{form_row(form.website)}}
                            </div>

                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group\">
                                {{form_row(form.description)}}
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
                                    {{form_row(form.contacname)}}
                                </div>
                                <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                    {{form_row(form.contactlastname)}}
                                </div>
                                <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                    {{form_row(form.position)}}
                                </div>
                                
                                <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                    {{form_row(form.businessemail)}}
                                </div>
                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group\">
                                    {{form_row(form.rfc)}}
                                </div>
                                <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                    {{form_row(form.telephoneext)}}
                                </div>
                                <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                    {{form_row(form.personalnumber)}}
                                </div>

                            </div>

                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                {{form_row(form.Registrar)}}
                            </div> 


                            {{form_end(form)}}
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


{% endblock %}", "AppBundle:Company:register-company.html.twig", "C:\\wamp\\www\\myjobs\\src\\AppBundle/Resources/views/Company/register-company.html.twig");
    }
}
