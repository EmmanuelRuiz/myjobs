<?php

/* AppBundle:Administrator:administrator.html.twig */
class __TwigTemplate_b4284078d49a4d6524675bafaef585fab2127ec268a1fd59fd5baaf01b95b73c extends Twig_Template
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
        $__internal_94aa4d46a15f6c68506fb680ba0e7db351df745c887e47042124e5a3e6bd66fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94aa4d46a15f6c68506fb680ba0e7db351df745c887e47042124e5a3e6bd66fe->enter($__internal_94aa4d46a15f6c68506fb680ba0e7db351df745c887e47042124e5a3e6bd66fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Administrator:administrator.html.twig"));

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

                    <h2 class=\"page-header\">Empresas pendientes por validar</h2>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>RFC</th>
                                    <th>Sector</th>
                                    <th class=\"info\">Registrante</th>
                                    <th class=\"info\">N° de Registrante</th>
                                    <th class=\"active\">Representante</th>
                                    <th class=\"active\">Ext. Representante</th>
                                    <th class=\"active\">Email de Representante</th>
                                    <th class=\"active\">N° de Representante</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>


                            ";
        // line 106
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 107
            echo "                                <tbody>
                                    <tr>
                                        <td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "id", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "tradename", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "rfc", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "businesssector", array()), "html", null, true);
            echo "</td>
                                        ";
            // line 113
            if (($this->getAttribute($context["company"], "representant", array()) == "si")) {
                // line 114
                echo "                                            <td>NULL</td>
                                        ";
            } else {
                // line 116
                echo "                                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["company"], "user", array()), "name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["company"], "user", array()), "mlastname", array()), "html", null, true);
                echo "</td>
                                        ";
            }
            // line 118
            echo "                                        ";
            if (($this->getAttribute($context["company"], "representant", array()) == "si")) {
                // line 119
                echo "                                            <td>NULL</td>
                                        ";
            } else {
                // line 121
                echo "                                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["company"], "user", array()), "telephone", array()), "html", null, true);
                echo "</td>
                                        ";
            }
            // line 123
            echo "                                        
                                        ";
            // line 124
            if (($this->getAttribute($context["company"], "contacname", array()) == null)) {
                // line 125
                echo "                                            <td>NULL</td>
                                        ";
            } else {
                // line 127
                echo "                                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "contacname", array()), "html", null, true);
                echo "</td>
                                        ";
            }
            // line 129
            echo "
                                        ";
            // line 130
            if (($this->getAttribute($context["company"], "telephoneext", array()) == null)) {
                // line 131
                echo "                                            <td>NULL</td>
                                        ";
            } else {
                // line 133
                echo "                                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "telephoneext", array()), "html", null, true);
                echo "</td>
                                        ";
            }
            // line 135
            echo "
                                        ";
            // line 136
            if (($this->getAttribute($context["company"], "businessemail", array()) == null)) {
                // line 137
                echo "                                            <td>NULL</td>
                                        ";
            } else {
                // line 139
                echo "                                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "businessemail", array()), "html", null, true);
                echo "</td>
                                        ";
            }
            // line 141
            echo "                                        
                                        ";
            // line 142
            if (($this->getAttribute($context["company"], "personalnumber", array()) == null)) {
                // line 143
                echo "                                            <td>NULL</td>
                                        ";
            } else {
                // line 145
                echo "                                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "personalnumber", array()), "html", null, true);
                echo "</td>
                                        ";
            }
            // line 147
            echo "
                                        <td><a href=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_validate_company", array("id" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Validar\" data-original-title=\"\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a></td>
                                    </tr>
                                </tbody>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                        </table>
                        <div class=\"navigation text-center\">
                            ";
        // line 154
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                        </div>
                    </div>


                    <h2 class=\"page-header\">Empresas destacadas</h2>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Opiniones Totales</th>
                                    <th>Puntos Totales</th>
                                    <th>Calificacion General</th>
                                </tr>
                            </thead>

                            ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["general_avg"]) ? $context["general_avg"] : $this->getContext($context, "general_avg")));
        foreach ($context['_seq'] as $context["_key"] => $context["avg"]) {
            // line 172
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) ? $context["companies"] : $this->getContext($context, "companies")));
            foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
                // line 173
                echo "                                    <tbody>
                                        <tr>
                                            ";
                // line 175
                if (($this->getAttribute($context["company"], "id", array()) == $this->getAttribute($context["avg"], "company", array()))) {
                    // line 176
                    echo "                                                <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "id", array()), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 177
                    echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "tradename", array()), "html", null, true);
                    echo "</td>
                                                <td>
                                                    ";
                    // line 179
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["puntos"]) ? $context["puntos"] : $this->getContext($context, "puntos")));
                    foreach ($context['_seq'] as $context["_key"] => $context["puntuacion"]) {
                        echo " 
                                                        ";
                        // line 180
                        if (($this->getAttribute($context["puntuacion"], "company_id", array()) == $this->getAttribute($context["company"], "id", array()))) {
                            // line 181
                            echo "                                                            ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["puntuacion"], "promedio", array()), "html", null, true);
                            echo " 
                                                        ";
                        }
                        // line 183
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['puntuacion'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 184
                    echo "                                                </td>
                                                <td>";
                    // line 185
                    echo twig_escape_filter($this->env, $this->getAttribute($context["avg"], "promedio", array()), "html", null, true);
                    echo "</td>
                                            ";
                }
                // line 187
                echo "                                        </tr>
                                    </tbody>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "                        </table>
                    </div>
                    <div class=\"navigation text-center\">
                    ";
        // line 194
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
        
        $__internal_94aa4d46a15f6c68506fb680ba0e7db351df745c887e47042124e5a3e6bd66fe->leave($__internal_94aa4d46a15f6c68506fb680ba0e7db351df745c887e47042124e5a3e6bd66fe_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Administrator:administrator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 194,  438 => 191,  432 => 190,  424 => 187,  419 => 185,  416 => 184,  410 => 183,  404 => 181,  402 => 180,  396 => 179,  391 => 177,  386 => 176,  384 => 175,  380 => 173,  375 => 172,  371 => 171,  351 => 154,  347 => 152,  337 => 148,  334 => 147,  328 => 145,  324 => 143,  322 => 142,  319 => 141,  313 => 139,  309 => 137,  307 => 136,  304 => 135,  298 => 133,  294 => 131,  292 => 130,  289 => 129,  283 => 127,  279 => 125,  277 => 124,  274 => 123,  268 => 121,  264 => 119,  261 => 118,  253 => 116,  249 => 114,  247 => 113,  243 => 112,  239 => 111,  235 => 110,  231 => 109,  227 => 107,  222 => 106,  188 => 74,  171 => 71,  154 => 68,  137 => 65,  120 => 62,  102 => 58,  90 => 49,  59 => 21,  55 => 20,  51 => 19,  46 => 17,  42 => 16,  38 => 15,  22 => 1,);
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

                    <h2 class=\"page-header\">Empresas pendientes por validar</h2>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>RFC</th>
                                    <th>Sector</th>
                                    <th class=\"info\">Registrante</th>
                                    <th class=\"info\">N° de Registrante</th>
                                    <th class=\"active\">Representante</th>
                                    <th class=\"active\">Ext. Representante</th>
                                    <th class=\"active\">Email de Representante</th>
                                    <th class=\"active\">N° de Representante</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>


                            {# usamos la variable company para recorrer cada resultado y mostrarlos #}
                            {% for company in pagination  %}
                                <tbody>
                                    <tr>
                                        <td>{{ company.id }}</td>
                                        <td>{{ company.tradename }}</td>
                                        <td>{{ company.rfc }}</td>
                                        <td>{{ company.businesssector }}</td>
                                        {% if company.representant == 'si' %}
                                            <td>NULL</td>
                                        {% else %}
                                            <td>{{ company.user.name }} {{ company.user.mlastname }}</td>
                                        {% endif %}
                                        {% if company.representant == 'si' %}
                                            <td>NULL</td>
                                        {% else %}
                                            <td>{{ company.user.telephone }}</td>
                                        {% endif %}
                                        
                                        {% if company.contacname == null%}
                                            <td>NULL</td>
                                        {% else %}
                                            <td>{{ company.contacname }}</td>
                                        {% endif %}

                                        {% if company.telephoneext == null%}
                                            <td>NULL</td>
                                        {% else %}
                                            <td>{{ company.telephoneext }}</td>
                                        {% endif %}

                                        {% if company.businessemail == null%}
                                            <td>NULL</td>
                                        {% else %}
                                            <td>{{ company.businessemail }}</td>
                                        {% endif %}
                                        
                                        {% if company.personalnumber == null%}
                                            <td>NULL</td>
                                        {% else %}
                                            <td>{{ company.personalnumber }}</td>
                                        {% endif %}

                                        <td><a href=\"{{path('administrator_validate_company', {'id':company.id})}}\" type=\"button\" class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Validar\" data-original-title=\"\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a></td>
                                    </tr>
                                </tbody>
                            {% endfor %}
                        </table>
                        <div class=\"navigation text-center\">
                            {{ knp_pagination_render(pagination) }}
                        </div>
                    </div>


                    <h2 class=\"page-header\">Empresas destacadas</h2>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Opiniones Totales</th>
                                    <th>Puntos Totales</th>
                                    <th>Calificacion General</th>
                                </tr>
                            </thead>

                            {% for avg in general_avg %}
                                {% for company in companies %}
                                    <tbody>
                                        <tr>
                                            {% if company.id == avg.company %}
                                                <td>{{ company.id }}</td>
                                                <td>{{ company.tradename }}</td>
                                                <td>
                                                    {% for puntuacion in puntos %} 
                                                        {% if puntuacion.company_id == company.id %}
                                                            {{ puntuacion.promedio }} 
                                                        {% endif %}
                                                    {% endfor %}
                                                </td>
                                                <td>{{ avg.promedio }}</td>
                                            {% endif %}
                                        </tr>
                                    </tbody>
                                {% endfor %}
                            {% endfor %}
                        </table>
                    </div>
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
", "AppBundle:Administrator:administrator.html.twig", "C:\\wamp\\www\\myjobs\\src\\AppBundle/Resources/views/Administrator/administrator.html.twig");
    }
}
