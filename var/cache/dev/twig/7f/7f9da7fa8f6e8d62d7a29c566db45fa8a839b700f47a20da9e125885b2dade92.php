<?php

/* AppBundle:Company:edit_company.html.twig */
class __TwigTemplate_2e8eb495cff4700423b79041182cb69244cbc5923277aabf48dd7419a56e1e1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layoutprofiles.html.twig", "AppBundle:Company:edit_company.html.twig", 1);
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
        $__internal_f0fb2e42546368677b9481f80c9617e6df7573a6db111a39e8eb12ca1bdb1134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0fb2e42546368677b9481f80c9617e6df7573a6db111a39e8eb12ca1bdb1134->enter($__internal_f0fb2e42546368677b9481f80c9617e6df7573a6db111a39e8eb12ca1bdb1134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Company:edit_company.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0fb2e42546368677b9481f80c9617e6df7573a6db111a39e8eb12ca1bdb1134->leave($__internal_f0fb2e42546368677b9481f80c9617e6df7573a6db111a39e8eb12ca1bdb1134_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_d8e5e88e71c51f9ab19923cb670785c5ed04cafee1129ac86015076e6bde0ca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e5e88e71c51f9ab19923cb670785c5ed04cafee1129ac86015076e6bde0ca4->enter($__internal_d8e5e88e71c51f9ab19923cb670785c5ed04cafee1129ac86015076e6bde0ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"edit-company-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3\">

                    <h2 class=\"page-header\">Opciones</h2>
                    <div class=\"list-group\">
                        <a href=\"#\" class=\"list-group-item active\">Editar perfil</a>
                        <a class=\"list-group-item disabled\">Avanzado</a>
                    </div>

                </div>
                <div class=\"col-lg-9\">
                    <h2 class=\"page-header\">Datos de la empresa</h2>
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "                        <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("enctype" => "multipart/form-data"));
        echo "

                    <div class=\"col-lg-12 form-group\">
                        <div class=\"media\">
                            <div class=\"media-left\">
                                <a>
                                    ";
        // line 26
        if (($this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "logo", array()) == null)) {
            // line 27
            echo "                                        <img class=\"\" width=\"80\" height=\"80\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/company-logo.png"), "html", null, true);
            echo "\"/>
                                    ";
        } else {
            // line 29
            echo "                                        <img class=\"\" width=\"80\" height=\"80\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/company/" . $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "logo", array()))), "html", null, true);
            echo "\"/>
                                    ";
        }
        // line 31
        echo "                                </a>
                            </div>
                            <div class=\"media-body\">
                                <h4 class=\"media-heading\">";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logo", array()), 'row');
        echo "</h4>

                            </div>
                        </div>

                    </div>

                    <div class=\"col-lg-6 form-group\">
                        ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tradename", array()), 'row');
        echo "
                    </div>

                    <div class=\"col-lg-6 form-group\">
                        ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rfc", array()), 'row');
        echo "
                    </div>
                    <div class=\"col-lg-6 form-group\">
                        ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "businesssector", array()), 'row');
        echo "
                    </div>
                    <div class=\"col-lg-12 form-group\">
                        ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
        echo "
                    </div>


                    <h3 class=\"col-lg-12 page-header\">Datos del representante</h3>
                    <div class=\"clearfix\"></div>

                    <div class=\"col-lg-12\">
                        <div class=\"alert alert-dismissible alert-info\">
                            <strong>¡No te preocupes!</strong> La información del representante nadie más puede verla, solo tú.
                        </div>
                    </div>


                    <div class=\"col-lg-6 form-group\">
                        ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contacname", array()), 'row');
        echo "
                    </div>


                    <div class=\"col-lg-6 form-group\">
                        ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "businessemail", array()), 'row');
        echo "
                    </div>
                    <div class=\"col-lg-6 form-group\">
                        ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'row');
        echo "
                    </div>
                    <div class=\"col-lg-6 form-group\">
                        ";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephoneext", array()), 'row');
        echo "
                    </div>
                    <div class=\"col-lg-12 form-group\">
                        ";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'row');
        echo "
                    </div>

                    <div class=\"col-lg-12 form-group\">
                        ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Registrar", array()), 'row', array("label" => "Editar"));
        echo "
                    </div>
                    ";
        // line 87
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_d8e5e88e71c51f9ab19923cb670785c5ed04cafee1129ac86015076e6bde0ca4->leave($__internal_d8e5e88e71c51f9ab19923cb670785c5ed04cafee1129ac86015076e6bde0ca4_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Company:edit_company.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 87,  179 => 85,  172 => 81,  166 => 78,  160 => 75,  154 => 72,  146 => 67,  128 => 52,  122 => 49,  116 => 46,  109 => 42,  98 => 34,  93 => 31,  87 => 29,  81 => 27,  79 => 26,  69 => 20,  60 => 18,  56 => 17,  40 => 3,  34 => 2,  11 => 1,);
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
    <div class=\"edit-company-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3\">

                    <h2 class=\"page-header\">Opciones</h2>
                    <div class=\"list-group\">
                        <a href=\"#\" class=\"list-group-item active\">Editar perfil</a>
                        <a class=\"list-group-item disabled\">Avanzado</a>
                    </div>

                </div>
                <div class=\"col-lg-9\">
                    <h2 class=\"page-header\">Datos de la empresa</h2>
                    {%for message in app.session.flashbag().get('status')%}
                        <div class=\"alert alert-success\">{{message}}</div>
                    {%endfor%}
                    {{form_start(form, {'enctype':'multipart/form-data'})}}

                    <div class=\"col-lg-12 form-group\">
                        <div class=\"media\">
                            <div class=\"media-left\">
                                <a>
                                    {% if company.logo == null%}
                                        <img class=\"\" width=\"80\" height=\"80\" src=\"{{ asset('assets/images/company-logo.png') }}\"/>
                                    {% else %}
                                        <img class=\"\" width=\"80\" height=\"80\" src=\"{{ asset('uploads/company/'~company.logo) }}\"/>
                                    {% endif %}
                                </a>
                            </div>
                            <div class=\"media-body\">
                                <h4 class=\"media-heading\">{{ form_row(form.logo) }}</h4>

                            </div>
                        </div>

                    </div>

                    <div class=\"col-lg-6 form-group\">
                        {{ form_row(form.tradename) }}
                    </div>

                    <div class=\"col-lg-6 form-group\">
                        {{ form_row(form.rfc) }}
                    </div>
                    <div class=\"col-lg-6 form-group\">
                        {{ form_row(form.businesssector) }}
                    </div>
                    <div class=\"col-lg-12 form-group\">
                        {{ form_row(form.description) }}
                    </div>


                    <h3 class=\"col-lg-12 page-header\">Datos del representante</h3>
                    <div class=\"clearfix\"></div>

                    <div class=\"col-lg-12\">
                        <div class=\"alert alert-dismissible alert-info\">
                            <strong>¡No te preocupes!</strong> La información del representante nadie más puede verla, solo tú.
                        </div>
                    </div>


                    <div class=\"col-lg-6 form-group\">
                        {{ form_row(form.contacname) }}
                    </div>


                    <div class=\"col-lg-6 form-group\">
                        {{ form_row(form.businessemail) }}
                    </div>
                    <div class=\"col-lg-6 form-group\">
                        {{ form_row(form.position) }}
                    </div>
                    <div class=\"col-lg-6 form-group\">
                        {{ form_row(form.telephoneext) }}
                    </div>
                    <div class=\"col-lg-12 form-group\">
                        {{ form_row(form.website) }}
                    </div>

                    <div class=\"col-lg-12 form-group\">
                        {{form_row(form.Registrar, {'label':'Editar'})}}
                    </div>
                    {{form_end(form)}}
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "AppBundle:Company:edit_company.html.twig", "C:\\wamp\\www\\myjobs\\src\\AppBundle/Resources/views/Company/edit_company.html.twig");
    }
}
