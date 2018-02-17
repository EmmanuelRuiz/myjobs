<?php

/* AppBundle:User:edit_user.html.twig */
class __TwigTemplate_aeb4d3749a6983c979350d39e2f222e7777727a299d66db36cb6c39b5e614f3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layoutprofiles.html.twig", "AppBundle:User:edit_user.html.twig", 1);
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
        $__internal_300932209f0dd2060f74d8c6892e46f56e4a8b33b57914ace1f14b313c1db013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300932209f0dd2060f74d8c6892e46f56e4a8b33b57914ace1f14b313c1db013->enter($__internal_300932209f0dd2060f74d8c6892e46f56e4a8b33b57914ace1f14b313c1db013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:edit_user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_300932209f0dd2060f74d8c6892e46f56e4a8b33b57914ace1f14b313c1db013->leave($__internal_300932209f0dd2060f74d8c6892e46f56e4a8b33b57914ace1f14b313c1db013_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_6c2174364125768600b9c0babba192dcd8f6f01e68b6981bb7da69dfdd291b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c2174364125768600b9c0babba192dcd8f6f01e68b6981bb7da69dfdd291b31->enter($__internal_6c2174364125768600b9c0babba192dcd8f6f01e68b6981bb7da69dfdd291b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <section class=\"edit-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <h2 class=\"page-header\">Opciones</h2>
                    <div class=\"list-group\">
                        <a href=\"#\" class=\"list-group-item active\">Editar perfil</a>
                        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_change");
        echo "\" class=\"list-group-item\">Cambiar contraseña</a>
                    </div>
                </div>
                <div class=\"col-lg-9 \"> 
                    <h2 class=\"page-header\">Perfil</h2>
                    ";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("enctype" => "multipart/form-data"));
        echo "
                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "                        <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                    <div class=\"col-lg-12 form-group\">
                        <div class=\"media\">
                            <div class=\"media-left\">
                                <a>  
                                    ";
        // line 23
        if (((((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), ".")) == "png") || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), ".")) == "jpg")) || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), ".")) == "jpeg")) || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), ".")) == "gif"))) {
            echo "    
                                        ";
            // line 24
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "anonimo", array()) == "Si")) {
                // line 25
                echo "                                            <img width=\"80\" height=\"80\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.jpg"), "html", null, true);
                echo "\"/>
                                        ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 26
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()) != null)) {
                // line 27
                echo "                                            <img width=\"80\" height=\"80\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/users/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()))), "html", null, true);
                echo "\"/>
                                        ";
            }
            // line 29
            echo "                                    ";
        } elseif ((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), ".")) == null)) {
            // line 30
            echo "                                        <img width=\"80\" height=\"80\"  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.jpg"), "html", null, true);
            echo "\"/>
                                    ";
        } else {
            // line 32
            echo "                                        <img width=\"80\" height=\"80\"  src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "html", null, true);
            echo "\"/>
                                    ";
        }
        // line 34
        echo "                                </a>
                            </div>
                            <div class=\"media-body\">

                                <h4 class=\"media-heading\">";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'row');
        echo "</h4>
                            </div>
                        </div>
                    </div>
                    <div class=\" col-lg-12 form-group\">
                        ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
                    </div>
                    <div class=\"col-lg-6 form-group\">
                        ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plastname", array()), 'row');
        echo "
                    </div>
                    <div class=\"col-lg-6 form-group\">
                        ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mlastname", array()), 'row');
        echo "
                    </div>
                    <div class=\" col-lg-12 form-group\">
                        ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                    </div>
                    <div class=\" col-lg-12 form-group\">
                        ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "biography", array()), 'row');
        echo "
                    </div>
                    <div class=\"col-lg-6 form-group\">
                        ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'row');
        echo "
                    </div>
                    <div class=\"col-lg-6 form-group\">
                        ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'row');
        echo "
                    </div>
                    <div class=\"col-lg-6 form-group\">
                        ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anonimo", array()), 'row');
        echo "
                    </div>
                    <div class=\"col-lg-12 form-group\">
                        ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Editar", array()), 'row');
        echo "
                    </div>
                    ";
        // line 69
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>  
    </section>    
";
        
        $__internal_6c2174364125768600b9c0babba192dcd8f6f01e68b6981bb7da69dfdd291b31->leave($__internal_6c2174364125768600b9c0babba192dcd8f6f01e68b6981bb7da69dfdd291b31_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:edit_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 69,  176 => 67,  170 => 64,  164 => 61,  158 => 58,  152 => 55,  146 => 52,  140 => 49,  134 => 46,  128 => 43,  120 => 38,  114 => 34,  108 => 32,  102 => 30,  99 => 29,  93 => 27,  91 => 26,  86 => 25,  84 => 24,  80 => 23,  74 => 19,  65 => 17,  61 => 16,  57 => 15,  49 => 10,  40 => 3,  34 => 2,  11 => 1,);
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
    <section class=\"edit-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <h2 class=\"page-header\">Opciones</h2>
                    <div class=\"list-group\">
                        <a href=\"#\" class=\"list-group-item active\">Editar perfil</a>
                        <a href=\"{{ path('user_change') }}\" class=\"list-group-item\">Cambiar contraseña</a>
                    </div>
                </div>
                <div class=\"col-lg-9 \"> 
                    <h2 class=\"page-header\">Perfil</h2>
                    {{form_start(form, {'enctype':'multipart/form-data'})}}
                    {%for message in app.session.flashbag().get('status')%}
                        <div class=\"alert alert-success\">{{message}}</div>
                    {%endfor%}
                    <div class=\"col-lg-12 form-group\">
                        <div class=\"media\">
                            <div class=\"media-left\">
                                <a>  
                                    {% if app.user.image | split('.') | last == 'png' or app.user.image | split('.') | last == 'jpg' or app.user.image | split('.') | last == 'jpeg' or app.user.image | split('.') | last == 'gif' %}    
                                        {% if app.user.anonimo == 'Si' %}
                                            <img width=\"80\" height=\"80\"  src=\"{{ asset('assets/images/default.jpg') }}\"/>
                                        {% elseif app.user.image != null %}
                                            <img width=\"80\" height=\"80\"  src=\"{{ asset('uploads/users/'~app.user.image) }}\"/>
                                        {% endif %}
                                    {% elseif app.user.image | split('.') | last == null %}
                                        <img width=\"80\" height=\"80\"  src=\"{{ asset('assets/images/default.jpg') }}\"/>
                                    {% else %}
                                        <img width=\"80\" height=\"80\"  src=\"{{ app.user.image }}\"/>
                                    {% endif %}
                                </a>
                            </div>
                            <div class=\"media-body\">

                                <h4 class=\"media-heading\">{{ form_row(form.image) }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class=\" col-lg-12 form-group\">
                        {{form_row(form.name)}}
                    </div>
                    <div class=\"col-lg-6 form-group\">
                        {{form_row(form.plastname)}}
                    </div>
                    <div class=\"col-lg-6 form-group\">
                        {{form_row(form.mlastname)}}
                    </div>
                    <div class=\" col-lg-12 form-group\">
                        {{form_row(form.email)}}
                    </div>
                    <div class=\" col-lg-12 form-group\">
                        {{form_row(form.biography)}}
                    </div>
                    <div class=\"col-lg-6 form-group\">
                        {{form_row(form.age)}}
                    </div>
                    <div class=\"col-lg-6 form-group\">
                        {{form_row(form.telephone)}}
                    </div>
                    <div class=\"col-lg-6 form-group\">
                        {{form_row(form.anonimo)}}
                    </div>
                    <div class=\"col-lg-12 form-group\">
                        {{form_row(form.Editar)}}
                    </div>
                    {{form_end(form)}}
                </div>
            </div>
        </div>  
    </section>    
{% endblock %}", "AppBundle:User:edit_user.html.twig", "C:\\wamp\\www\\myjobs\\src\\AppBundle/Resources/views/User/edit_user.html.twig");
    }
}
