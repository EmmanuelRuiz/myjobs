<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7aa7449bbe13174df3bea518ebdfa88fc2af39591157518ee445080566b96a59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c320cd2f9e12507c845c7b39a5e9c35398ce91aa10ba72d0af7d4f48d5d03dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c320cd2f9e12507c845c7b39a5e9c35398ce91aa10ba72d0af7d4f48d5d03dc7->enter($__internal_c320cd2f9e12507c845c7b39a5e9c35398ce91aa10ba72d0af7d4f48d5d03dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c320cd2f9e12507c845c7b39a5e9c35398ce91aa10ba72d0af7d4f48d5d03dc7->leave($__internal_c320cd2f9e12507c845c7b39a5e9c35398ce91aa10ba72d0af7d4f48d5d03dc7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d0ee8860f7357616362746f4911b0d938704599916acd68286d6e8c52cb4f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0ee8860f7357616362746f4911b0d938704599916acd68286d6e8c52cb4f2c->enter($__internal_3d0ee8860f7357616362746f4911b0d938704599916acd68286d6e8c52cb4f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3d0ee8860f7357616362746f4911b0d938704599916acd68286d6e8c52cb4f2c->leave($__internal_3d0ee8860f7357616362746f4911b0d938704599916acd68286d6e8c52cb4f2c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_26af2e267d842d2f40a62b3c3a0098fbde9f68fd9d4b6cdfbb3df82d24548ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26af2e267d842d2f40a62b3c3a0098fbde9f68fd9d4b6cdfbb3df82d24548ee3->enter($__internal_26af2e267d842d2f40a62b3c3a0098fbde9f68fd9d4b6cdfbb3df82d24548ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_26af2e267d842d2f40a62b3c3a0098fbde9f68fd9d4b6cdfbb3df82d24548ee3->leave($__internal_26af2e267d842d2f40a62b3c3a0098fbde9f68fd9d4b6cdfbb3df82d24548ee3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e930fa6a1971861eed9890b224bbb22883b24e2bc68fb5586a2c16a1caea96c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e930fa6a1971861eed9890b224bbb22883b24e2bc68fb5586a2c16a1caea96c->enter($__internal_1e930fa6a1971861eed9890b224bbb22883b24e2bc68fb5586a2c16a1caea96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1e930fa6a1971861eed9890b224bbb22883b24e2bc68fb5586a2c16a1caea96c->leave($__internal_1e930fa6a1971861eed9890b224bbb22883b24e2bc68fb5586a2c16a1caea96c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\myjobs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
