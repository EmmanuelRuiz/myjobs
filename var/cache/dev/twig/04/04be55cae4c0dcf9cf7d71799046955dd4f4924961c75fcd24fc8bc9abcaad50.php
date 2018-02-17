<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_483f13238008ffeee297c926590d23eea29bd14577bd04e75a033fa2dd383316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bfa46b245c8fc8162b60f98227db17077351b3a14968bba0f7e18904f00d4d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa46b245c8fc8162b60f98227db17077351b3a14968bba0f7e18904f00d4d2b->enter($__internal_bfa46b245c8fc8162b60f98227db17077351b3a14968bba0f7e18904f00d4d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfa46b245c8fc8162b60f98227db17077351b3a14968bba0f7e18904f00d4d2b->leave($__internal_bfa46b245c8fc8162b60f98227db17077351b3a14968bba0f7e18904f00d4d2b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2935d6f8772493a2c60a6cc5ee0cc7b81579e3c201cc596221b51b4d4d01470a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2935d6f8772493a2c60a6cc5ee0cc7b81579e3c201cc596221b51b4d4d01470a->enter($__internal_2935d6f8772493a2c60a6cc5ee0cc7b81579e3c201cc596221b51b4d4d01470a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2935d6f8772493a2c60a6cc5ee0cc7b81579e3c201cc596221b51b4d4d01470a->leave($__internal_2935d6f8772493a2c60a6cc5ee0cc7b81579e3c201cc596221b51b4d4d01470a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b4438f617a0324a9f1a088a23cc358b47c11e251cdc6dd7b4ed6d72308d3472c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4438f617a0324a9f1a088a23cc358b47c11e251cdc6dd7b4ed6d72308d3472c->enter($__internal_b4438f617a0324a9f1a088a23cc358b47c11e251cdc6dd7b4ed6d72308d3472c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b4438f617a0324a9f1a088a23cc358b47c11e251cdc6dd7b4ed6d72308d3472c->leave($__internal_b4438f617a0324a9f1a088a23cc358b47c11e251cdc6dd7b4ed6d72308d3472c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e76bda1b3ea8bd0dfc5b492011112c1eb4b8656e41e346ef38618206fbedf1ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e76bda1b3ea8bd0dfc5b492011112c1eb4b8656e41e346ef38618206fbedf1ba->enter($__internal_e76bda1b3ea8bd0dfc5b492011112c1eb4b8656e41e346ef38618206fbedf1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e76bda1b3ea8bd0dfc5b492011112c1eb4b8656e41e346ef38618206fbedf1ba->leave($__internal_e76bda1b3ea8bd0dfc5b492011112c1eb4b8656e41e346ef38618206fbedf1ba_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\myjobs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
