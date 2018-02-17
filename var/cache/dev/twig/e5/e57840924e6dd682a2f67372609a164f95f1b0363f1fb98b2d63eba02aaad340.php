<?php

/* AppBundle:Administrator:administrator_graficar.html.twig */
class __TwigTemplate_df9e5c23bcf274a0c7c3b94f5d11bc05b74edf4f4333e7bfc2a648676fd8c5fc extends Twig_Template
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
        $__internal_bad6b49de9281d5ec0a915a5a832f2273ecd60a00798e8c8ce8c8d50b2e6e349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad6b49de9281d5ec0a915a5a832f2273ecd60a00798e8c8ce8c8d50b2e6e349->enter($__internal_bad6b49de9281d5ec0a915a5a832f2273ecd60a00798e8c8ce8c8d50b2e6e349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Administrator:administrator_graficar.html.twig"));

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

        <script type=\"text/javascript\">
            var URL = \"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "/myjobs/web/app_dev.php\";
        </script>
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 24
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
        // line 51
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
        // line 60
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
        // line 64
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
        // line 67
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
        // line 70
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
        // line 73
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
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_graficar");
        echo "\"><i class=\"fa fa-bar-chart\" aria-hidden=\"true\"></i> Estadísticas </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <div id=\"page-wrapper\">

                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"panel panel-primary\">

                            <div class=\"panel-heading\">Usuarios por rango de edades</div>

                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th>Rango de usuarios</th>
                                        <th>Total</th>
                                    </tr>
                                    ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["edades"]) ? $context["edades"] : $this->getContext($context, "edades")));
        foreach ($context['_seq'] as $context["_key"] => $context["edad"]) {
            // line 98
            echo "                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["edad"], "rango", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["edad"], "total", array()), "html", null, true);
            echo " usuarios</td>                                          
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['edad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"panel panel-primary\">
                            <!-- Default panel contents -->
                            <div class=\"panel-heading\">5 empresas más puntuadas por opiniones</div>
                            <!-- Table -->
                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th>Empresas</th>
                                        <th>Total de puntos en opiniones</th>
                                    </tr>
                                    ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["puntos"]) ? $context["puntos"] : $this->getContext($context, "puntos")));
        foreach ($context['_seq'] as $context["_key"] => $context["punto"]) {
            // line 121
            echo "                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["punto"], "tradename", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["punto"], "promedio", array()), "html", null, true);
            echo " Puntos</td>                                          
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['punto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <!-- empresas por estados-->
                    <div class=\"col-lg-6\">
                        <div class=\"panel panel-primary\">
                            <!-- Default panel contents -->
                            <div class=\"panel-heading\">Cantidad de empresas, agrupación por estados</div>
                            <!-- Table -->
                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th>Estado</th>
                                        <th>Total</th>
                                    </tr>
                                    ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["estados"]) ? $context["estados"] : $this->getContext($context, "estados")));
        foreach ($context['_seq'] as $context["_key"] => $context["estado"]) {
            // line 147
            echo "                                    </thead>
                                    <tbody>
                                        <tr>                                            
                                            <td>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["estado"], "estado", array()), "html", null, true);
            echo " </td>
                                            <td>";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["estado"], "total", array()), "html", null, true);
            echo " Registros</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>  

                    <div class=\"col-lg-6\">
                        <div class=\"panel panel-primary\">
                            <!-- Default panel contents -->
                            <div class=\"panel-heading\">Cantidad de usuarios por género</div>
                            <!-- Table -->
                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th>Masculino</th>
                                        <th>Femenino</th>
                                    </tr>
                                    ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["generos"]) ? $context["generos"] : $this->getContext($context, "generos")));
        foreach ($context['_seq'] as $context["_key"] => $context["genero"]) {
            // line 171
            echo "                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute($context["genero"], "masculino", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($context["genero"], "femenino", array()), "html", null, true);
            echo " </td>                                          
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genero'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>




            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->

    </body>

</html>
";
        
        $__internal_bad6b49de9281d5ec0a915a5a832f2273ecd60a00798e8c8ce8c8d50b2e6e349->leave($__internal_bad6b49de9281d5ec0a915a5a832f2273ecd60a00798e8c8ce8c8d50b2e6e349_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Administrator:administrator_graficar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 178,  351 => 175,  347 => 174,  342 => 171,  338 => 170,  320 => 154,  311 => 151,  307 => 150,  302 => 147,  298 => 146,  278 => 128,  269 => 125,  265 => 124,  260 => 121,  256 => 120,  239 => 105,  230 => 102,  226 => 101,  221 => 98,  217 => 97,  193 => 76,  176 => 73,  159 => 70,  142 => 67,  125 => 64,  107 => 60,  95 => 51,  65 => 24,  61 => 23,  57 => 22,  52 => 20,  46 => 17,  42 => 16,  38 => 15,  22 => 1,);
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

        <script type=\"text/javascript\">
            var URL = \"{{ app.request.getSchemeAndHttpHost() }}/myjobs/web/app_dev.php\";
        </script>
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
                            <a href=\"{{ path('administrator_index') }}\"><i class=\"fa fa-building\" aria-hidden=\"true\"></i> Empresas sin validar {% for empresas in empresas %} <span class=\"badge pull-right\">{{ empresas }}</span>{% endfor %}</a>

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

                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"panel panel-primary\">

                            <div class=\"panel-heading\">Usuarios por rango de edades</div>

                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th>Rango de usuarios</th>
                                        <th>Total</th>
                                    </tr>
                                    {%for edad in edades %}
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{edad.rango}}</td>
                                            <td>{{edad.total}} usuarios</td>                                          
                                        </tr>
                                    {%endfor%}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"panel panel-primary\">
                            <!-- Default panel contents -->
                            <div class=\"panel-heading\">5 empresas más puntuadas por opiniones</div>
                            <!-- Table -->
                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th>Empresas</th>
                                        <th>Total de puntos en opiniones</th>
                                    </tr>
                                    {%for punto in puntos %}
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{punto.tradename}}</td>
                                            <td>{{punto.promedio}} Puntos</td>                                          
                                        </tr>
                                    {%endfor%}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <!-- empresas por estados-->
                    <div class=\"col-lg-6\">
                        <div class=\"panel panel-primary\">
                            <!-- Default panel contents -->
                            <div class=\"panel-heading\">Cantidad de empresas, agrupación por estados</div>
                            <!-- Table -->
                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th>Estado</th>
                                        <th>Total</th>
                                    </tr>
                                    {%for estado in estados %}
                                    </thead>
                                    <tbody>
                                        <tr>                                            
                                            <td>{{estado.estado}} </td>
                                            <td>{{estado.total}} Registros</td>
                                        </tr>
                                    {%endfor%}
                                </tbody>
                            </table>
                        </div>
                    </div>  

                    <div class=\"col-lg-6\">
                        <div class=\"panel panel-primary\">
                            <!-- Default panel contents -->
                            <div class=\"panel-heading\">Cantidad de usuarios por género</div>
                            <!-- Table -->
                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th>Masculino</th>
                                        <th>Femenino</th>
                                    </tr>
                                    {%for genero in generos %}
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{genero.masculino}}</td>
                                            <td>{{genero.femenino}} </td>                                          
                                        </tr>
                                    {%endfor%}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>




            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->

    </body>

</html>
", "AppBundle:Administrator:administrator_graficar.html.twig", "C:\\wamp\\www\\myjobs\\src\\AppBundle/Resources/views/Administrator/administrator_graficar.html.twig");
    }
}
