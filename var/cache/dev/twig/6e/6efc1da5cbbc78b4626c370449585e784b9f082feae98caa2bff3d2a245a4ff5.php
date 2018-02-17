<?php

/* AppBundle:Administrator:administrator_comments.html.twig */
class __TwigTemplate_4209c24fe3c8bb0ddce3feee11b05970d4388e9c8e7642f7c11ceb00f6f97bbb extends Twig_Template
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
        $__internal_57be9111ac5304e36d5e8019bf42d4afa69a7c097016d01bd5b5c5590972928f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57be9111ac5304e36d5e8019bf42d4afa69a7c097016d01bd5b5c5590972928f->enter($__internal_57be9111ac5304e36d5e8019bf42d4afa69a7c097016d01bd5b5c5590972928f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Administrator:administrator_comments.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>Panel de Administración</title>


        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/admin.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-ias.min.js"), "html", null, true);
        echo "\"></script>

    </head>

    <body>

        <div id=\"wrapper\">

            <!-- Navigation -->
            <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"index.html\">MyJobsAdvisor</a>
                </div>
                <!-- Top Menu Items -->
                <ul class=\"nav navbar-right top-nav\">

                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> Administrador <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">

                            <li>
                                <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrador_logout");
        echo "\"><i class=\"fa fa-fw fa-power-off\"></i> Salir </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                    <ul class=\"nav navbar-nav side-nav\">
                        <li class=\"\">
                            <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_index");
        echo "\"><i class=\"fa fa-building\" aria-hidden=\"true\"></i> Empresas sin validar ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["empresas"]);
        foreach ($context['_seq'] as $context["_key"] => $context["empresas"]) {
            echo " <span class=\"badge pull-right\">";
            echo twig_escape_filter($this->env, $context["empresas"], "html", null, true);
            echo "</span>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresas'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</a>
                            
                        </li>
                        <li>
                            <a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_comment");
        echo "\"><i class=\"fa fa-comments\" aria-hidden=\"true\"></i> Comentarios sin validar ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["comentarios"]);
        foreach ($context['_seq'] as $context["_key"] => $context["comentarios"]) {
            echo " <span class=\"badge pull-right\">";
            echo twig_escape_filter($this->env, $context["comentarios"], "html", null, true);
            echo "</span>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comentarios'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_claim");
        echo "\"><i class=\"fa fa-gavel\" aria-hidden=\"true\"></i> Reclamaciones ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["claims"]);
        foreach ($context['_seq'] as $context["_key"] => $context["claims"]) {
            echo " <span class=\"badge pull-right\">";
            echo twig_escape_filter($this->env, $context["claims"], "html", null, true);
            echo "</span>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['claims'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_user");
        echo "\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> Administrar usuarios ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["usuarios"]);
        foreach ($context['_seq'] as $context["_key"] => $context["usuarios"]) {
            echo " <span class=\"badge pull-right\">";
            echo twig_escape_filter($this->env, $context["usuarios"], "html", null, true);
            echo "</span>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuarios'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_allcompanies");
        echo "\"><i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i> Administrar empresas ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["todas_empresas"]);
        foreach ($context['_seq'] as $context["_key"] => $context["todas_empresas"]) {
            echo " <span class=\"badge pull-right\">";
            echo twig_escape_filter($this->env, $context["todas_empresas"], "html", null, true);
            echo "</span>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todas_empresas'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_graficar");
        echo "\"><i class=\"fa fa-bar-chart\" aria-hidden=\"true\"></i> Estadísticas </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <div id=\"page-wrapper\">

                <div class=\"container-fluid\">

                    <h2 class=\"page-header\">Comentarios pendientes por validar</h2>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Creador</th>
                                    <th>Comentario</th>
                                    <th>Creación</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            ";
        // line 98
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 99
            echo "                                <tbody>
                                    <tr>
                                        <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "name", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "body", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "createdAt", array()), "D d M Y"), "html", null, true);
            echo "</td>
                                        <td>
                                            <a href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_validate_comment", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-xs btn-success \"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                        </table>
                    </div>
                    ";
        // line 114
        echo "                    <div class=\"navigation text-center\">
                        ";
        // line 115
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
    </body>

</html>
";
        
        $__internal_57be9111ac5304e36d5e8019bf42d4afa69a7c097016d01bd5b5c5590972928f->leave($__internal_57be9111ac5304e36d5e8019bf42d4afa69a7c097016d01bd5b5c5590972928f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Administrator:administrator_comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 115,  255 => 114,  251 => 111,  240 => 106,  235 => 104,  231 => 103,  227 => 102,  223 => 101,  219 => 99,  214 => 98,  188 => 74,  171 => 71,  154 => 68,  137 => 65,  120 => 62,  102 => 58,  90 => 49,  59 => 21,  55 => 20,  51 => 19,  46 => 17,  42 => 16,  38 => 15,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

    <head>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>Panel de Administración</title>


        <link href=\"{{ asset('assets/css/bootstrap.min.css')}}\" type=\"text/css\" rel=\"stylesheet\">
        <link href=\"{{ asset('assets/css/admin.css')}}\" type=\"text/css\" rel=\"stylesheet\">
        <link href=\"{{ asset('assets/css/font-awesome.min.css')}}\" rel=\"stylesheet\">

        <script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('assets/js/jquery-ias.min.js') }}\"></script>

    </head>

    <body>

        <div id=\"wrapper\">

            <!-- Navigation -->
            <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"index.html\">MyJobsAdvisor</a>
                </div>
                <!-- Top Menu Items -->
                <ul class=\"nav navbar-right top-nav\">

                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> Administrador <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">

                            <li>
                                <a href=\"{{ path('administrador_logout') }}\"><i class=\"fa fa-fw fa-power-off\"></i> Salir </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                    <ul class=\"nav navbar-nav side-nav\">
                        <li class=\"\">
                            <a href=\"{{ path('administrator_index') }}\"><i class=\"fa fa-building\" aria-hidden=\"true\"></i> Empresas sin validar {% for empresas in empresas %} <span class=\"badge pull-right\">{{empresas}}</span>{% endfor %}</a>
                            
                        </li>
                        <li>
                            <a href=\"{{ path('administrator_comment') }}\"><i class=\"fa fa-comments\" aria-hidden=\"true\"></i> Comentarios sin validar {% for comentarios in comentarios %} <span class=\"badge pull-right\">{{comentarios}}</span>{% endfor %}</a>
                        </li>
                        <li>
                            <a href=\"{{ path('administrator_claim') }}\"><i class=\"fa fa-gavel\" aria-hidden=\"true\"></i> Reclamaciones {% for claims in claims %} <span class=\"badge pull-right\">{{claims}}</span>{% endfor %}</a>
                        </li>
                        <li>
                            <a href=\"{{ path('administrator_user') }}\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> Administrar usuarios {% for usuarios in usuarios %} <span class=\"badge pull-right\">{{usuarios}}</span>{% endfor %}</a>
                        </li>
                        <li>
                            <a href=\"{{ path('administrator_allcompanies') }}\"><i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i> Administrar empresas {% for todas_empresas in todas_empresas %} <span class=\"badge pull-right\">{{todas_empresas}}</span>{% endfor %}</a>
                        </li>
                        <li>
                            <a href=\"{{ path('administrator_graficar') }}\"><i class=\"fa fa-bar-chart\" aria-hidden=\"true\"></i> Estadísticas </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <div id=\"page-wrapper\">

                <div class=\"container-fluid\">

                    <h2 class=\"page-header\">Comentarios pendientes por validar</h2>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Creador</th>
                                    <th>Comentario</th>
                                    <th>Creación</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            {# usamos la variable company para recorrer cada resultado y mostrarlos #}
                            {% for comment in pagination %}
                                <tbody>
                                    <tr>
                                        <td>{{ comment.id }}</td>
                                        <td>{{ comment.user.name }}</td>
                                        <td>{{ comment.body }}</td>
                                        <td>{{ comment.createdAt|date(\"D d M Y\") }}</td>
                                        <td>
                                            <a href=\"{{ path('administrator_validate_comment', {'id':comment.id}) }}\" type=\"button\" class=\"btn btn-xs btn-success \"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            {% endfor %}
                        </table>
                    </div>
                    {# modificar el js para el scroll infinito #}
                    <div class=\"navigation text-center\">
                        {{ knp_pagination_render(pagination) }}
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
    </body>

</html>
", "AppBundle:Administrator:administrator_comments.html.twig", "C:\\wamp\\www\\myjobs\\src\\AppBundle/Resources/views/Administrator/administrator_comments.html.twig");
    }
}
