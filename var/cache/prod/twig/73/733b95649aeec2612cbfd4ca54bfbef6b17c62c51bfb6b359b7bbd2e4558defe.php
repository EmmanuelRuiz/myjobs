<?php

/* AppBundle:Layouts:custom_pagination.html.twig */
class __TwigTemplate_116491bf3ef8dc9a710c85d5ed2e297396016810d43d072e46c405eb904f1998 extends Twig_Template
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
        // line 1
        if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > 1)) {
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["previous"]) ? $context["previous"] : null)))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["next"]) ? $context["next"] : null)))), "html", null, true);
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
        return array (  74 => 25,  68 => 22,  65 => 21,  57 => 18,  54 => 17,  52 => 16,  48 => 14,  42 => 11,  39 => 10,  31 => 7,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Layouts:custom_pagination.html.twig", "/home/myjobsa1/public_html/src/AppBundle/Resources/views/Layouts/custom_pagination.html.twig");
    }
}
