<?php

/* AppBundle:Layouts:custom_pagination.html.twig */
class __TwigTemplate_b1212197cb996b8d1885c89316a8742bcb17fe8765cc04723ff847faa486da19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2dc7e6eb8c7e7f547ca3452b736d2d7af700da9ea9700aee527e1ebc35cdec77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc7e6eb8c7e7f547ca3452b736d2d7af700da9ea9700aee527e1ebc35cdec77->enter($__internal_2dc7e6eb8c7e7f547ca3452b736d2d7af700da9ea9700aee527e1ebc35cdec77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Layouts:custom_pagination.html.twig"));

        // line 1
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 2
            echo "    <nav aria-label=\"...\">
        <ul class=\"pager\">

            ";
            // line 5
            if (array_key_exists("previous", $context)) {
                // line 6
                echo "                <li>
                    <a class=\"prev_link\" rel=\"prev\" href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Atras"), "html", null, true);
                echo "</a>
                </li>
            ";
            } else {
                // line 10
                echo "                <li class=\"disabled\">
                    <span>&laquo;&nbsp;";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Atras"), "html", null, true);
                echo "</span>
                </li>
            ";
            }
            // line 14
            echo "

            ";
            // line 16
            if (array_key_exists("next", $context)) {
                // line 17
                echo "                <li class=\"\">
                    <a class=\"next_link\" rel=\"next\" href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Siguiente"), "html", null, true);
                echo "&nbsp;&raquo;</a>
                </li>
            ";
            } else {
                // line 21
                echo "                <li class=\"disabled \">
                    <span class=\"\">";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Siguiente"), "html", null, true);
                echo "&nbsp;&raquo;</span>
                </li>
            ";
            }
            // line 25
            echo "        </ul>
    </nav>
";
        }
        
        $__internal_2dc7e6eb8c7e7f547ca3452b736d2d7af700da9ea9700aee527e1ebc35cdec77->leave($__internal_2dc7e6eb8c7e7f547ca3452b736d2d7af700da9ea9700aee527e1ebc35cdec77_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Layouts:custom_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  71 => 22,  68 => 21,  60 => 18,  57 => 17,  55 => 16,  51 => 14,  45 => 11,  42 => 10,  34 => 7,  31 => 6,  29 => 5,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if pageCount > 1 %}
    <nav aria-label=\"...\">
        <ul class=\"pager\">

            {% if previous is defined %}
                <li>
                    <a class=\"prev_link\" rel=\"prev\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">&laquo;&nbsp;{{ 'Atras'|trans }}</a>
                </li>
            {% else %}
                <li class=\"disabled\">
                    <span>&laquo;&nbsp;{{ 'Atras'|trans }}</span>
                </li>
            {% endif %}


            {% if next is defined %}
                <li class=\"\">
                    <a class=\"next_link\" rel=\"next\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">{{ 'Siguiente'|trans }}&nbsp;&raquo;</a>
                </li>
            {% else %}
                <li class=\"disabled \">
                    <span class=\"\">{{ 'Siguiente'|trans }}&nbsp;&raquo;</span>
                </li>
            {% endif %}
        </ul>
    </nav>
{% endif %}
", "AppBundle:Layouts:custom_pagination.html.twig", "C:\\wamp\\www\\myjobs\\src\\AppBundle/Resources/views/Layouts/custom_pagination.html.twig");
    }
}
