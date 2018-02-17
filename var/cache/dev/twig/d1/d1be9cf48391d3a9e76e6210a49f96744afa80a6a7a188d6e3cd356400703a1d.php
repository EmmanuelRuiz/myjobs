<?php

/* AppBundle:User:register.html.twig */
class __TwigTemplate_01c6f0e5528893f19cae5318f1c8a0e938d9402c41c52103ed7ca4c611abff64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layoutprofiles.html.twig", "AppBundle:User:register.html.twig", 1);
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
        $__internal_4bf99a885201ca9815272c672dff2f1db49f6b5a7e493ba56df04b728604102b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf99a885201ca9815272c672dff2f1db49f6b5a7e493ba56df04b728604102b->enter($__internal_4bf99a885201ca9815272c672dff2f1db49f6b5a7e493ba56df04b728604102b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bf99a885201ca9815272c672dff2f1db49f6b5a7e493ba56df04b728604102b->leave($__internal_4bf99a885201ca9815272c672dff2f1db49f6b5a7e493ba56df04b728604102b_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c5a58ac72172ee93fd46602620c8fe0186299d35f389ec30aff992969760d314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a58ac72172ee93fd46602620c8fe0186299d35f389ec30aff992969760d314->enter($__internal_c5a58ac72172ee93fd46602620c8fe0186299d35f389ec30aff992969760d314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "
    ";
        // line 4
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/email-test.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_c5a58ac72172ee93fd46602620c8fe0186299d35f389ec30aff992969760d314->leave($__internal_c5a58ac72172ee93fd46602620c8fe0186299d35f389ec30aff992969760d314_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_bae771ad009e0cb173e189fc5c8b4ca063a76a45aa39c2c95e5883426f2280a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae771ad009e0cb173e189fc5c8b4ca063a76a45aa39c2c95e5883426f2280a8->enter($__internal_bae771ad009e0cb173e189fc5c8b4ca063a76a45aa39c2c95e5883426f2280a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "
    <section class=\"register-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <h2>Nuestros valores</h2>
                    <ul>
                        <li>Tratamos a los demás como nos gustaría ser tratados.</li>
                        <li>Estamos agradecidos por la oportunidad de ser útiles a nuestra generación y
                            tener talentos para compartir e impulsar a otros.</li>
                        <li>Creemos en compartir como una forma de transformar el mundo.</li>
                    </ul>
                    
                    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/myjobsadvisor-register.png"), "html", null, true);
        echo "\" class=\"img-responsive img-register\" alt=\"\">
                </div>
                <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-register\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\"><h4>Únete a MyJobsAdvisor</h4></div>
                        <div class=\"panel-body\">
                            ";
        // line 28
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo "
                            ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "


                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group\">
                                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 34
            echo "                                    <div class=\"alert alert-dismissible alert-danger\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                        ";
            // line 36
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plastname", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mlastname", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group\">
                                ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group\">
                                ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                <label for=\"confirmpasswordInput\">Confirmar contraseña</label>
                                <input type=\"password\" class=\"form-control\" required id=\"confirmpasswordInput\">
                            </div>

                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group\" data-toggle=\"popover\" 
                                 data-placement=\"bottom\"  data-content=\"Si eres un perfil privado, los demás usuarios no podrán ver tus datos\">
                                ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anonimo", array()), 'row');
        echo " 

                            </div>
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group\">
                                <br>
                                <p><b>Dando clic en \"Registrarse\" acepto los <a href=\"#\">términos y condiciones</a> de la empresa</b></p>
                            </div>
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group\">
                                ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Registrarse", array()), 'row');
        echo "
                            </div>
                            <div class=\"clearfix\"></div>
                            ";
        // line 80
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </section>
    <script>
        \$(document).ready(function () {
            \$('[data-toggle=\"popover\"]').popover();
        });
    </script>
";
        
        $__internal_bae771ad009e0cb173e189fc5c8b4ca063a76a45aa39c2c95e5883426f2280a8->leave($__internal_bae771ad009e0cb173e189fc5c8b4ca063a76a45aa39c2c95e5883426f2280a8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 80,  181 => 77,  170 => 69,  158 => 60,  152 => 57,  146 => 54,  140 => 51,  134 => 48,  128 => 45,  122 => 42,  115 => 39,  106 => 36,  102 => 34,  98 => 33,  91 => 29,  87 => 28,  78 => 22,  63 => 9,  57 => 8,  48 => 5,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle:Layouts:layoutprofiles.html.twig\" %}
{% block javascripts %}

    {{ parent() }}
    <script src=\"{{asset('assets/js/custom/email-test.js')}}\"></script>
{% endblock %}

{% block content %}

    <section class=\"register-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <h2>Nuestros valores</h2>
                    <ul>
                        <li>Tratamos a los demás como nos gustaría ser tratados.</li>
                        <li>Estamos agradecidos por la oportunidad de ser útiles a nuestra generación y
                            tener talentos para compartir e impulsar a otros.</li>
                        <li>Creemos en compartir como una forma de transformar el mundo.</li>
                    </ul>
                    
                    <img src=\"{{ asset('assets/images/myjobsadvisor-register.png')}}\" class=\"img-responsive img-register\" alt=\"\">
                </div>
                <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-register\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\"><h4>Únete a MyJobsAdvisor</h4></div>
                        <div class=\"panel-body\">
                            {{form_start(form, {'action':'', 'method':'POST'})}}
                            {{form_errors(form)}}


                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group\">
                                {% for message in app.session.flashbag().get('error') %}
                                    <div class=\"alert alert-dismissible alert-danger\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                        {{ message }}
                                    </div>
                                {% endfor %}
                                {{form_row(form.name)}}
                            </div>
                            <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                {{form_row(form.plastname)}}
                            </div>
                            <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                {{form_row(form.mlastname)}}
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group\">
                                {{form_row(form.email)}}
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group\">
                                {{ form_row(form.gender) }}
                            </div>
                            <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                {{form_row(form.age)}}
                            </div>
                            <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                {{form_row(form.telephone)}}
                            </div>
                            <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                {{form_row(form.password)}}
                            </div>
                            <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group\">
                                <label for=\"confirmpasswordInput\">Confirmar contraseña</label>
                                <input type=\"password\" class=\"form-control\" required id=\"confirmpasswordInput\">
                            </div>

                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group\" data-toggle=\"popover\" 
                                 data-placement=\"bottom\"  data-content=\"Si eres un perfil privado, los demás usuarios no podrán ver tus datos\">
                                {{form_row(form.anonimo)}} 

                            </div>
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group\">
                                <br>
                                <p><b>Dando clic en \"Registrarse\" acepto los <a href=\"#\">términos y condiciones</a> de la empresa</b></p>
                            </div>
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group\">
                                {{form_row(form.Registrarse)}}
                            </div>
                            <div class=\"clearfix\"></div>
                            {{form_end(form)}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </section>
    <script>
        \$(document).ready(function () {
            \$('[data-toggle=\"popover\"]').popover();
        });
    </script>
{% endblock %}
", "AppBundle:User:register.html.twig", "C:\\wamp\\www\\myjobs\\src\\AppBundle/Resources/views/User/register.html.twig");
    }
}
