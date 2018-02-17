<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_708e8744204575cf8b07de7585277e6856d25cb6f1e9eeb6de7face0bcb9cf29 extends Twig_Template
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
        $__internal_858c92ee9162d5e3e18e5ebe6f444ed08527aff3d7d5f76b5646e03ab3a2f441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_858c92ee9162d5e3e18e5ebe6f444ed08527aff3d7d5f76b5646e03ab3a2f441->enter($__internal_858c92ee9162d5e3e18e5ebe6f444ed08527aff3d7d5f76b5646e03ab3a2f441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_858c92ee9162d5e3e18e5ebe6f444ed08527aff3d7d5f76b5646e03ab3a2f441->leave($__internal_858c92ee9162d5e3e18e5ebe6f444ed08527aff3d7d5f76b5646e03ab3a2f441_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d206c67924c914eedd4c196439d911a4aeb017c7e432a629f114d6b25a04c420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d206c67924c914eedd4c196439d911a4aeb017c7e432a629f114d6b25a04c420->enter($__internal_d206c67924c914eedd4c196439d911a4aeb017c7e432a629f114d6b25a04c420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d206c67924c914eedd4c196439d911a4aeb017c7e432a629f114d6b25a04c420->leave($__internal_d206c67924c914eedd4c196439d911a4aeb017c7e432a629f114d6b25a04c420_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_298034fac00e313a9210b2947a2b1b9e1b97bfb1261559c30e9ea15e73dc76ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298034fac00e313a9210b2947a2b1b9e1b97bfb1261559c30e9ea15e73dc76ad->enter($__internal_298034fac00e313a9210b2947a2b1b9e1b97bfb1261559c30e9ea15e73dc76ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_298034fac00e313a9210b2947a2b1b9e1b97bfb1261559c30e9ea15e73dc76ad->leave($__internal_298034fac00e313a9210b2947a2b1b9e1b97bfb1261559c30e9ea15e73dc76ad_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e432ee96b1792ac9c83ca83a1f22c51197b160bf6c5f91689c2ac131c5aabf57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e432ee96b1792ac9c83ca83a1f22c51197b160bf6c5f91689c2ac131c5aabf57->enter($__internal_e432ee96b1792ac9c83ca83a1f22c51197b160bf6c5f91689c2ac131c5aabf57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e432ee96b1792ac9c83ca83a1f22c51197b160bf6c5f91689c2ac131c5aabf57->leave($__internal_e432ee96b1792ac9c83ca83a1f22c51197b160bf6c5f91689c2ac131c5aabf57_prof);

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
