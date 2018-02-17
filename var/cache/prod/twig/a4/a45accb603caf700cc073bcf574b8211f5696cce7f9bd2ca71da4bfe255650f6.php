<?php

/* AppBundle:Company:profile.html.twig */
class __TwigTemplate_3d20cc7fe3d6505e74b331e8e228ef008cbd54e3b883d54c210acac8e68b7498 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layoutprofiles.html.twig", "AppBundle:Company:profile.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Layouts:layoutprofiles.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/profile.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <section class=\"profile-company-header\">
        <div class=\"container \">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-12 col-sm-12 col-xs-12\">
                    ";
        // line 11
        if (($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "logo", array()) == null)) {
            // line 12
            echo "                        <img class=\"profile-picture-company center-block\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/company-logo.png"), "html", null, true);
            echo "\"/>
                    ";
        } else {
            // line 14
            echo "                        <img class=\"profile-picture-company center-block\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/company/" . $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "logo", array()))), "html", null, true);
            echo "\"/>
                    ";
        }
        // line 16
        echo "                </div>

                <div class=\"col-lg-9 col-md-12 col-sm-12 col-xs-12\" id=\"company-card\">
                    <h1 id=\"profile-company-name\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "tradename", array()), "html", null, true);
        echo "  | ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "businesssector", array()), "html", null, true);
        echo "
                        ";
        // line 20
        if (($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "status", array()) == "valid")) {
            // line 21
            echo "                            <i class=\"fa fa-check-circle text-info\" aria-hidden=\"true\"></i>
                        ";
        }
        // line 23
        echo "
                        ";
        // line 24
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) != null)) {
            // line 25
            echo "                            ";
            if ((($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "representant", array()) == "no") || ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "representant", array()) == null))) {
                // line 26
                echo "
                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-warning btn-xs\" data-toggle=\"modal\" data-target=\"#modalReclamar\">Reclamar empresa</button>
                                </div>
                            ";
            } else {
                // line 31
                echo "                                ";
                if ((($this->getAttribute($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())) && ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "representant", array()) == "si"))) {
                    // line 32
                    echo "                                    <div class=\"btn-group\">
                                        <a href=\"";
                    // line 33
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("companies_edit", array("id" => $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-default btn-xs\" type=\"button\"  aria-haspopup=\"true\" aria-expanded=\"false\">
                                            Editar empresa
                                        </a>
                                    </div>
                                ";
                }
                // line 38
                echo "                            ";
            }
            // line 39
            echo "                        ";
        }
        // line 40
        echo "
                    </h1>

                    <h5><b>Descripción</b></h5>

                    <p>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "description", array()), "html", null, true);
        echo "</p>

                    <div class=\"row \">
                        ";
        // line 48
        $context["company_stats"] = $this->env->getExtension('AppBundle\Twig\CompanyStatsExtension')->companyStatsFilter($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "id", array()));
        // line 49
        echo "
                        <div class=\"following-data\">

                            <a href=\"#\">
                                <i class=\"fa fa-commenting fa-2x comment-stats\" aria-hidden=\"true\"></i>
                                <span class=\"number-stat\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company_stats"]) ? $context["company_stats"] : null), "opinions", array()), "html", null, true);
        echo "</span>
                            </a>
                        </div>

                        <div class=\"following-data\">
                            <a href=\"#\">
                                <i class=\"fa fa-heart fa-2x heart-stats\" aria-hidden=\"true\"></i>
                                <span class=\"number-stat\">0</span>
                            </a>
                        </div>

                        <div class=\"following-data\">
                            <a href=\"#\">
                                <i class=\"fa fa-star fa-2x star-stats\" aria-hidden=\"true\"></i>\t

                                ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["puntos"]);
        foreach ($context['_seq'] as $context["_key"] => $context["puntos"]) {
            // line 70
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["puntos2"]);
            foreach ($context['_seq'] as $context["_key"] => $context["puntos2"]) {
                // line 71
                echo "                                        ";
                if (($context["puntos"] == null)) {
                    // line 72
                    echo "                                            ";
                    if (($this->getAttribute((isset($context["company_stats"]) ? $context["company_stats"] : null), "opinions", array()) != 0)) {
                        // line 73
                        echo "                                                <span class=\"number-stat\"> ";
                        echo twig_escape_filter($this->env, twig_round(($context["puntos2"] / $this->getAttribute((isset($context["company_stats"]) ? $context["company_stats"] : null), "opinions", array())), 1, "floor"), "html", null, true);
                        echo "</span>
                                            ";
                    }
                    // line 75
                    echo "                                        ";
                } elseif (($context["puntos2"] == null)) {
                    // line 76
                    echo "                                            <span class=\"number-stat\"> ";
                    echo twig_escape_filter($this->env, twig_round(($context["puntos"] / $this->getAttribute((isset($context["company_stats"]) ? $context["company_stats"] : null), "opinions", array())), 1, "floor"), "html", null, true);
                    echo "</span>
                                        ";
                } else {
                    // line 78
                    echo "                                            <span class=\"number-stat\"> ";
                    echo twig_escape_filter($this->env, twig_round((($context["puntos"] + $context["puntos2"]) / $this->getAttribute((isset($context["company_stats"]) ? $context["company_stats"] : null), "opinions", array())), 1, "floor"), "html", null, true);
                    echo "</span>
                                        ";
                }
                // line 80
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['puntos2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['puntos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "
                            </a>
                        </div>


                        ";
        // line 87
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) == null)) {
            echo " ";
            // line 88
            echo "                            ";
            // line 89
            echo "                            <div class=\"following-data btn-opinion-desktop\">
                               <button type=\"button\" class=\"btn btn-page\" data-toggle=\"modal\" data-target=\"#ratingModalOffline\" data-whatever=\"@mdo\">Calificar empresa</button>
                            </div>
                        ";
        } else {
            // line 93
            echo "                            ";
            // line 94
            echo "                            ";
            $context["lol"] = "0";
            // line 95
            echo "                            ";
            $context["sol"] = "0";
            // line 96
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["opinions"]) {
                // line 97
                echo "                                ";
                if (($this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))) {
                    // line 98
                    echo "                                    ";
                    // line 99
                    echo "                                    ";
                    if ((twig_date_converter($this->env, $this->getAttribute($context["opinions"], "createdAt", array())) < twig_date_converter($this->env, "-365days"))) {
                        // line 100
                        echo "                                        ";
                        $context["lol"] = "3";
                        // line 101
                        echo "                                    ";
                    } else {
                        // line 102
                        echo "                                        ";
                        $context["sol"] = "5";
                        // line 103
                        echo "                                    ";
                    }
                    // line 104
                    echo "                                ";
                }
                // line 105
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opinions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "
                            ";
            // line 108
            if (((isset($context["sol"]) ? $context["sol"] : null) == "5")) {
                // line 109
                echo "                                <div class=\"following-data btn-opinion-desktop \">
                                    <button type=\"button\" class=\"btn btn-default\" disabled>Has realizado una opinión</button>
                                </div>
                            ";
            } else {
                // line 113
                echo "                                ";
                if (((isset($context["lol"]) ? $context["lol"] : null) == "3")) {
                    // line 114
                    echo "                                    <div class=\"following-data btn-opinion-desktop\">
                                        <button type=\"button\" class=\"btn btn-page\" data-toggle=\"modal\" data-target=\"#ratingModal\" data-whatever=\"@mdo\">Calificar empresa</button>
                                    </div>
                                ";
                } elseif ((                // line 117
(isset($context["lol"]) ? $context["lol"] : null) == "0")) {
                    // line 118
                    echo "                                    <div class=\"following-data btn-opinion-desktop\">
                                        <button type=\"button\" class=\"btn btn-page\" data-toggle=\"modal\" data-target=\"#ratingModal\" data-whatever=\"@mdo\">Calificar empresa</button>
                                    </div>
                                ";
                }
                // line 122
                echo "                            ";
            }
            // line 123
            echo "
                        ";
        }
        // line 125
        echo "
                        <div class=\"col-lg-12\">
                            ";
        // line 127
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) == null)) {
            echo " ";
            // line 128
            echo "                                ";
            // line 129
            echo "                                <div class=\" btn-opinion-movil\">
                                    <button type=\"button\" id=\"btn-opinion-movil\" class=\"btn btn-page btn-block\" data-toggle=\"modal\" data-target=\"#ratingModalOffline\" data-whatever=\"@mdo\">Calificar empresa</button>
                                </div>
                            ";
        } else {
            // line 133
            echo "                                ";
            // line 134
            echo "                                ";
            $context["lol"] = "0";
            // line 135
            echo "                                ";
            $context["sol"] = "0";
            // line 136
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["opinions"]) {
                // line 137
                echo "                                    ";
                if (($this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))) {
                    // line 138
                    echo "                                        ";
                    // line 139
                    echo "                                        ";
                    if ((twig_date_converter($this->env, $this->getAttribute($context["opinions"], "createdAt", array())) < twig_date_converter($this->env, "-365days"))) {
                        // line 140
                        echo "                                            ";
                        $context["lol"] = "3";
                        // line 141
                        echo "                                        ";
                    } else {
                        // line 142
                        echo "                                            ";
                        $context["sol"] = "5";
                        // line 143
                        echo "                                        ";
                    }
                    // line 144
                    echo "                                    ";
                }
                // line 145
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opinions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "
                                ";
            // line 148
            if (((isset($context["sol"]) ? $context["sol"] : null) == "5")) {
                // line 149
                echo "                                    <div class=\" btn-opinion-movil\">
                                        <button type=\"button\" id=\"btn-opinion-movil\" class=\"btn btn-default btn-block\" disabled>Has realizado una opinión</button>
                                    </div>
                                ";
            } else {
                // line 153
                echo "                                    ";
                if (((isset($context["lol"]) ? $context["lol"] : null) == "3")) {
                    // line 154
                    echo "                                        <div class=\" btn-opinion-movil\">
                                            <button type=\"button\" id=\"btn-opinion-movil\" class=\"btn btn-page btn-block\" data-toggle=\"modal\" data-target=\"#ratingModal\" data-whatever=\"@mdo\">Calificar empresa</button>
                                        </div>
                                    ";
                } elseif ((                // line 157
(isset($context["lol"]) ? $context["lol"] : null) == "0")) {
                    // line 158
                    echo "                                        <div class=\"btn-opinion-movil\">
                                            <button type=\"button\" id=\"btn-opinion-movil\" class=\"btn btn-page btn-block\" data-toggle=\"modal\" data-target=\"#ratingModal\" data-whatever=\"@mdo\">Calificar empresa</button>
                                        </div>
                                    ";
                }
                // line 162
                echo "                                ";
            }
            // line 163
            echo "
                            ";
        }
        // line 165
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <!-- /.container -->
    </section>

    ";
        // line 175
        echo "    <section class=\"opinions-section\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 179
            echo "                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"alert alert-success\">";
            // line 180
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "
                ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array(), "method"), "get", array(0 => "msg"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 185
            echo "                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"alert alert-success\">";
            // line 186
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "

                ";
        // line 191
        if (($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "status", array()) == "invalid")) {
            // line 192
            echo "                    <h2 class=\"text-muted text-center\">
                        La empresa aún no está verificada. Podrás realizar una opinión y esta se mostrará cuando la empresa este verificada
                    </h2>

                ";
        } else {
            // line 197
            echo "                    <div class=\"col-lg-8 col-md-12 col-sm-12 col-xs-12\">
                        <h1 class=\"page-header\">Opiniones</h1>

                        ";
            // line 200
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["opinions"]) {
                // line 201
                echo "
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading \">
                                    <div class=\"row\">
                                        <div class=\"col-lg-1 col-md-2 col-sm-2 col-xs-2\">
                                            <a href=\"";
                // line 206
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("id" => $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "id", array()))), "html", null, true);
                echo "\">
                                                <div class=\"avatar\">

                                                    ";
                // line 209
                if (((((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "image", array()), ".")) == "png") || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "image", array()), ".")) == "jpg")) || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "image", array()), ".")) == "jpeg")) || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "image", array()), ".")) == "gif"))) {
                    echo "    
                                                        ";
                    // line 210
                    if (($this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "anonimo", array()) == "Si")) {
                        // line 211
                        echo "                                                            <img class=\"user-logo-opinion\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.jpg"), "html", null, true);
                        echo "\"/>
                                                        ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 212
$context["opinions"], "user", array()), "image", array()) != null)) {
                        // line 213
                        echo "                                                            <img class=\"user-logo-opinion\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/users/" . $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "image", array()))), "html", null, true);
                        echo "\"/>
                                                        ";
                    }
                    // line 215
                    echo "                                                    ";
                } elseif ((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "image", array()), ".")) == null)) {
                    // line 216
                    echo "                                                        <img class=\"user-logo-opinion\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.jpg"), "html", null, true);
                    echo "\"/>
                                                    ";
                } else {
                    // line 218
                    echo "                                                        <img class=\"user-logo-opinion\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "image", array()), "html", null, true);
                    echo "\"/>
                                                    ";
                }
                // line 220
                echo "                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"col-lg-5 col-md-7 col-sm-7 col-xs-7\">
                                            <h5 class=\"media-heading\">
                                                ";
                // line 225
                if (($this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "anonimo", array()) == "Si")) {
                    // line 226
                    echo "                                                    <em>Anonimo</em>
                                                ";
                } else {
                    // line 228
                    echo "                                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("id" => $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "name", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "plastname", array()), "html", null, true);
                    echo "</a>
                                                ";
                }
                // line 230
                echo "
                                            </h5>
                                            <small class=\"text-muted\">";
                // line 232
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\LongTimeExtension')->LongTimeFilter($this->getAttribute($context["opinions"], "createdAt", array())), "html", null, true);
                echo "</small>
                                        </div>
                                        <div class=\"col-lg-6 col-md-3 col-sm-3 col-xs-3\">
                                            ";
                // line 235
                if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) != null)) {
                    // line 236
                    echo "                                                ";
                    if (($this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))) {
                        // line 237
                        echo "                                                    <div class=\"btn-group pull-right\">
                                                        <button class=\"btn btn-link btn-xs dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                            <i class=\"fa fa-cog\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down caret-opinioncomment\"></i>
                                                        </button>
                                                        <ul class=\"dropdown-menu\">
                                                            <li><a class=\"btn-delete-pub\" data-id=\"";
                        // line 242
                        echo twig_escape_filter($this->env, $this->getAttribute($context["opinions"], "id", array()), "html", null, true);
                        echo "\">Eliminar</a></li>

                                                        </ul>
                                                    </div>
                                                ";
                    }
                    // line 247
                    echo "                                            ";
                }
                // line 248
                echo "                                        </div>
                                    </div>
                                </div>

                                <div class=\"panel-body\">
                                    <p>";
                // line 253
                echo twig_escape_filter($this->env, $this->getAttribute($context["opinions"], "generalcomment", array()), "html", null, true);
                echo "</p>

                                    ";
                // line 255
                if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) != null)) {
                    // line 256
                    echo "                                        <hr class=\"profiles-hr\">
                                        <div class=\"like\">

                                            <i data-id=\"";
                    // line 259
                    echo twig_escape_filter($this->env, $this->getAttribute($context["opinions"], "id", array()), "html", null, true);
                    echo "\" class=\"
                                               ";
                    // line 260
                    if (($this->env->getExtension('AppBundle\Twig\LikedExtension')->likedFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), $context["opinions"]) == true)) {
                        // line 261
                        echo "                                                   hidden
                                               ";
                    }
                    // line 263
                    echo "                                               btn-like fa fa-heart\"
                                               aria-hidden=\"true\"
                                               data-toggle=\"tooltip\"
                                               data-placement=\"left\"
                                               title=\"Me gusta\">
                                            </i>

                                            <i data-id=\"";
                    // line 270
                    echo twig_escape_filter($this->env, $this->getAttribute($context["opinions"], "id", array()), "html", null, true);
                    echo "\" class=\"
                                               ";
                    // line 271
                    if (($this->env->getExtension('AppBundle\Twig\LikedExtension')->likedFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), $context["opinions"]) == false)) {
                        // line 272
                        echo "                                                   hidden
                                               ";
                    }
                    // line 274
                    echo "                                               btn-unlike active fa fa-heart\"
                                               aria-hidden=\"true\"
                                               data-toggle=\"tooltip\"
                                               data-placement=\"left\"
                                               title=\"Ya no me gusta\">
                                            </i>
                                        </div>
                                        <hr class=\"profiles-hr\">
                                    ";
                }
                // line 283
                echo "                                </div>

                                <div class=\"panel-footer\">
                                    ";
                // line 286
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["comments"]);
                foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
                    // line 287
                    echo "
                                        ";
                    // line 288
                    if (($this->getAttribute($this->getAttribute($context["comments"], "opinion", array()), "id", array()) == $this->getAttribute($context["opinions"], "id", array()))) {
                        // line 289
                        echo "                                            ";
                        if (($this->getAttribute($context["comments"], "status", array()) != "invalid")) {
                            // line 290
                            echo "                                                <div class=\"row\" id=\"comment\">
                                                    <div class=\"col-lg-1 col-md-2 col-sm-2 col-xs-2 \">
                                                        <div class=\"avatar  \">
                                                            ";
                            // line 293
                            if (((((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "image", array()), ".")) == "png") || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "image", array()), ".")) == "jpg")) || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "image", array()), ".")) == "jpeg")) || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "image", array()), ".")) == "gif"))) {
                                echo "    
                                                                ";
                                // line 294
                                if (($this->getAttribute($this->getAttribute($context["comments"], "user", array()), "anonimo", array()) == "Si")) {
                                    // line 295
                                    echo "                                                                    <img class=\" user-logo-opinion-comment\" src=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.jpg"), "html", null, true);
                                    echo "\"/>
                                                                ";
                                } elseif (($this->getAttribute($this->getAttribute(                                // line 296
$context["comments"], "user", array()), "image", array()) != null)) {
                                    // line 297
                                    echo "                                                                    <img class=\" user-logo-opinion-comment\" src=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/users/" . $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "image", array()))), "html", null, true);
                                    echo "\"/>
                                                                ";
                                }
                                // line 299
                                echo "                                                            ";
                            } elseif ((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "image", array()), ".")) == null)) {
                                // line 300
                                echo "                                                                <img class=\" user-logo-opinion-comment\" src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.jpg"), "html", null, true);
                                echo "\"/>
                                                            ";
                            } else {
                                // line 302
                                echo "                                                                <img class=\" user-logo-opinion-comment\"src=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "image", array()), "html", null, true);
                                echo "\"/>
                                                            ";
                            }
                            // line 304
                            echo "                                                        </div>
                                                    </div>
                                                    <div class=\"col-lg-5 col-md-7 col-sm-7 col-xs-7\">
                                                        <h5 class=\"media-heading \">
                                                            ";
                            // line 308
                            if (($this->getAttribute($this->getAttribute($context["comments"], "user", array()), "anonimo", array()) == "Si")) {
                                // line 309
                                echo "                                                                <em>Anonimo</em>
                                                            ";
                            } else {
                                // line 311
                                echo "                                                                <a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("id" => $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "id", array()))), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "name", array()), "html", null, true);
                                echo " ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "plastname", array()), "html", null, true);
                                echo "</a>
                                                            ";
                            }
                            // line 313
                            echo "
                                                            - <small class=\"text-muted\">";
                            // line 314
                            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\LongTimeExtension')->LongTimeFilter($this->getAttribute($context["comments"], "createdAt", array())), "html", null, true);
                            echo "</small>
                                                        </h5>

                                                        <p >";
                            // line 317
                            echo twig_escape_filter($this->env, $this->getAttribute($context["comments"], "body", array()), "html", null, true);
                            echo "</p>


                                                        ";
                            // line 320
                            if (($this->getAttribute($context["comments"], "image", array()) != null)) {
                                // line 321
                                echo "                                                            <img class=\"center-block comment-img\" width=\"200\" src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/comments/images/" . $this->getAttribute($context["comments"], "image", array()))), "html", null, true);
                                echo "\"/>
                                                        ";
                            }
                            // line 323
                            echo "                                                    </div>
                                                    <div class=\"col-lg-6 col-md-3 col-sm-3 col-xs-3\">
                                                        ";
                            // line 325
                            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) != null)) {
                                // line 326
                                echo "                                                            ";
                                if (($this->getAttribute($this->getAttribute($context["comments"], "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))) {
                                    // line 327
                                    echo "                                                                <div class=\" btn-group pull-right  \">
                                                                    <button class=\"btn btn-link btn-xs dropdown-toggle \" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                        <i class=\"fa fa-cog\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down caret-opinioncomment\"></i>
                                                                    </button>
                                                                    <ul class=\"dropdown-menu \">
                                                                        <li><a class=\"btn-delete-comment\" data-id=\"";
                                    // line 332
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["comments"], "id", array()), "html", null, true);
                                    echo "\">Eliminar</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class=\"clearfix\"></div>
                                                            ";
                                }
                                // line 337
                                echo "                                                        ";
                            }
                            // line 338
                            echo "                                                    </div>
                                                </div>

                                                <hr class=\"profiles-hr\">

                                            ";
                        }
                        // line 344
                        echo "                                        ";
                    }
                    // line 345
                    echo "
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 347
                echo "                                    ";
                if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) != null)) {
                    // line 348
                    echo "                                        <form method=\"post\" enctype=\"multipart/form-data\" class=\"comment-form\" action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_crate", array("id" => $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "id", array()), "opinion_id" => $this->getAttribute($context["opinions"], "id", array()))), "html", null, true);
                    echo "\" >
                                            <div class=\"form-group\">
                                                <label for=\"nameInput\">Agregar comentario</label>
                                                <textarea type=\"text\" class=\"form-control\" id=\"nameInput\" placeholder=\"Escribe tu comentario...\" name=\"comment\" rows=\"2\" cols=\"80\"></textarea>
                                                <button type=\"submit\" class=\"btn btn-default btn-sm pull-right\">Comentar</button>

                                                <label for=\"file\" class=\"pull-right label-img\"><i class=\"fa fa-file-image-o\"></i></label>
                                                <input id=\"file\" name=\"image\" type=\"file\" >
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </form>
                                    ";
                }
                // line 360
                echo "                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opinions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 363
            echo "                        ";
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
            echo "
                    </div>
                ";
        }
        // line 366
        echo "            </div>
        </div>
    </section>

    <div class=\"modal fade bs-example-modal-lg\" id=\"ratingModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ratingModal\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h3 class=\"modal-title\" id=\"exampleModalLabel\"><b>Tu opinión es importante</b></h3>
                </div>
                <div class=\"modal-body\">
                    <form class=\"form-rating\" action=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rate", array("id" => $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "id", array()))), "html", null, true);
        echo "\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <fieldset>
                                    <h5>La empresa considera importante mi punto de vista en el desarrollo de mis actividades</h5>
                                    <p class=\"clasificacion\">
                                        <input id=\"radio-ques1\" name=\"estrellas\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-ques1\" ><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest2\" name=\"estrellas\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest2\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest3\" name=\"estrellas\" value=\"0.5\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest3\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest4\" name=\"estrellas\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest4\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest5\" name=\"estrellas\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest5\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                    </p>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-6\">
                                <fieldset>
                                    <h5>En definitiva, laborar aquí me ha permitido ser una mejor persona</h5>
                                    <p class=\"clasificacion\">
                                        <input id=\"radio-ques6\" name=\"estrellas2\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-ques6\" ><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest7\" name=\"estrellas2\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest7\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest8\" name=\"estrellas2\" value=\"0.5\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest8\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></i></label>
                                        <input id=\"radio-quest9\" name=\"estrellas2\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest9\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest10\" name=\"estrellas2\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest10\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></i></label>
                                    </p>

                                </fieldset>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <fieldset>
                                    <h5>Los valores de la empresa, como respeto y honestidad, son predicados con el ejemplo</h5>
                                    <p class=\"clasificacion\">
                                        <input id=\"radio-ques11\" name=\"estrellas3\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-ques11\" ><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest12\" name=\"estrellas3\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest12\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest13\" name=\"estrellas3\" value=\"0.5\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest13\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest14\" name=\"estrellas3\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest14\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest15\" name=\"estrellas3\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest15\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                    </p>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-6\">
                                <fieldset>
                                    <h5>Me siento satisfecho con mi crecimiento profesional en la organización</h5>
                                    <p class=\"clasificacion\">
                                        <input id=\"radio-ques16\" name=\"estrellas4\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-ques16\" ><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest17\" name=\"estrellas4\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest17\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest18\" name=\"estrellas4\" value=\"0.5\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest18\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest19\" name=\"estrellas4\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest19\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest20\" name=\"estrellas4\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest20\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                    </p>
                                </fieldset>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <fieldset>
                                    <h5>Mis talentos y habilidades corresponden a las tareas y responsabilidades asignadas</h5>
                                    <p class=\"clasificacion\">
                                        <input id=\"radio-ques21\" name=\"estrellas5\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-ques21\" ><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest22\" name=\"estrellas5\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest22\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest23\" name=\"estrellas5\" value=\"0.5\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest23\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest24\" name=\"estrellas5\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest24\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest25\" name=\"estrellas5\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest25\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                    </p>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-6\">
                                <fieldset>
                                    <h5>Se me ha brindado la oportunidad de contribuir con mi talento de manera excepcional en beneficio de la organización</h5>
                                    <p class=\"clasificacion\">
                                        <input id=\"radio-ques26\" name=\"estrellas6\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-ques26\" ><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest27\" name=\"estrellas6\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest27\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest28\" name=\"estrellas6\" value=\"0.5\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest28\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest29\" name=\"estrellas6\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest29\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest30\" name=\"estrellas6\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest30\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                    </p>
                                </fieldset>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <fieldset>
                                    <h5>He logrado mis metas personales trabajando en esta organización</h5>
                                    <p class=\"clasificacion\">
                                        <input id=\"radio-ques31\" name=\"estrellas7\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-ques31\" ><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest32\" name=\"estrellas7\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest32\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest33\" name=\"estrellas7\" value=\"0.5\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest33\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest34\" name=\"estrellas7\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest34\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest35\" name=\"estrellas7\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest35\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                    </p>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-6\">
                                <fieldset>
                                    <h5>Considero que formo parte de un gran equipo de trabajo</h5>
                                    <p class=\"clasificacion\">
                                        <input id=\"radio-ques36\" name=\"estrellas8\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-ques36\" ><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest37\" name=\"estrellas8\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest37\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest38\" name=\"estrellas8\" value=\"0.5\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest38\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest39\" name=\"estrellas8\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest39\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest40\" name=\"estrellas8\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest40\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                    </p>
                                </fieldset>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <fieldset>
                                    <h5>Los compañeros facilitan que cualquier persona se adapte rápidamente a la organización</h5>
                                    <p class=\"clasificacion\">
                                        <input id=\"radio-ques41\" name=\"estrellas9\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-ques41\" ><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest42\" name=\"estrellas9\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest42\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest43\" name=\"estrellas9\" value=\"0.5\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest43\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest44\" name=\"estrellas9\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest44\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest45\" name=\"estrellas9\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest45\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                    </p>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-6\">
                                <fieldset>
                                    <h5>Esta organización brinda las mejores oportunidades de desarrollar el talento de su gente</h5>
                                    <p class=\"clasificacion\">
                                        <input id=\"radio-ques46\" name=\"estrellas10\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-ques46\" ><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest47\" name=\"estrellas10\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest47\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest48\" name=\"estrellas10\" value=\"0.5\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest48\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest49\" name=\"estrellas10\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest49\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        <input id=\"radio-quest50\" name=\"estrellas10\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest50\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                    </p>
                                </fieldset>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <fieldset>
                                    <h5>¿Trabajas actualmente en esta empresa?</h5>
                                    <div class=\"radio\">
                                        <label>
                                            <input class=\"mostrarRadio\" type=\"radio\" name=\"yesno\" id=\"optionsRadios1\" value=\"si\" checked>
                                            Si
                                        </label>
                                    </div>
                                    <div class=\"radio\">
                                        <label>
                                            <input class=\"mostrarRadio\" type=\"radio\" name=\"yesno\" id=\"optionsRadios2\" value=\"no\">
                                            No
                                        </label>
                                    </div>
                                </fieldset><hr/>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"form-group\">
                                    <label for=\"inputOpinion\" class=\"control-label\">Tomando todo en consideración, ¿cuál es tu opinión personal de esta empresa?</label>
                                    <textarea name=\"generalcomment\" class=\"form-control\" rows=\"2\" maxlength=\"150\" placeholder=\"Una buena opinión debería incluir aspectos positivos y negativos.\" required></textarea>
                                    <p class=\"help-block text-info pull-right\">No más de 150 caracteres</p>
                                </div>
                                <button type=\"submit\" class=\"pull-right btn btn-page btn-block\">Opinar</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
    
    ";
        // line 547
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array(), "method"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 548
            echo "        <div class=\"modal fade bs-example-modal-lg\" id=\"ratingModalSuccess\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ratingModal\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h3 class=\"modal-title\" id=\"exampleModalLabel\"><b>Tu opinión es importante</b></h3>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"alert alert-dismissible alert-success\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                            ";
            // line 558
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        </div>
                        <form class=\"form-rating\" action=\"";
            // line 560
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rate", array("id" => $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "id", array()))), "html", null, true);
            echo "\">
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <fieldset>
                                        <h5>La empresa considera importante mi punto de vista en el desarrollo de mis actividades</h5>
                                        <p class=\"clasificacion\">
                                            <input id=\"radio-ques1\" name=\"estrellas\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-ques1\" ><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest2\" name=\"estrellas\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest2\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest3\" name=\"estrellas\" value=\"0.5\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest3\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest4\" name=\"estrellas\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest4\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest5\" name=\"estrellas\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest5\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        </p>
                                    </fieldset>
                                </div>
                                <div class=\"col-lg-6\">
                                    <fieldset>
                                        <h5>En definitiva, laborar aquí me ha permitido ser una mejor persona</h5>
                                        <p class=\"clasificacion\">
                                            <input id=\"radio-ques6\" name=\"estrellas2\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-ques6\" ><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest7\" name=\"estrellas2\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest7\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest8\" name=\"estrellas2\" value=\"0.5\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest8\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></i></label>
                                            <input id=\"radio-quest9\" name=\"estrellas2\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest9\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest10\" name=\"estrellas2\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest10\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></i></label>
                                        </p>

                                    </fieldset>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <fieldset>
                                        <h5>Los valores de la empresa, como respeto y honestidad, son predicados con el ejemplo</h5>
                                        <p class=\"clasificacion\">
                                            <input id=\"radio-ques11\" name=\"estrellas3\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-ques11\" ><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest12\" name=\"estrellas3\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest12\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest13\" name=\"estrellas3\" value=\"0.5\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest13\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest14\" name=\"estrellas3\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest14\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest15\" name=\"estrellas3\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest15\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        </p>
                                    </fieldset>
                                </div>
                                <div class=\"col-lg-6\">
                                    <fieldset>
                                        <h5>Me siento satisfecho con mi crecimiento profesional en la organización</h5>
                                        <p class=\"clasificacion\">
                                            <input id=\"radio-ques16\" name=\"estrellas4\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-ques16\" ><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest17\" name=\"estrellas4\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest17\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest18\" name=\"estrellas4\" value=\"0.5\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest18\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest19\" name=\"estrellas4\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest19\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest20\" name=\"estrellas4\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest20\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        </p>
                                    </fieldset>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <fieldset>
                                        <h5>Mis talentos y habilidades corresponden a las tareas y responsabilidades asignadas</h5>
                                        <p class=\"clasificacion\">
                                            <input id=\"radio-ques21\" name=\"estrellas5\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-ques21\" ><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest22\" name=\"estrellas5\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest22\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest23\" name=\"estrellas5\" value=\"0.5\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest23\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest24\" name=\"estrellas5\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest24\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest25\" name=\"estrellas5\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest25\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        </p>
                                    </fieldset>
                                </div>
                                <div class=\"col-lg-6\">
                                    <fieldset>
                                        <h5>Se me ha brindado la oportunidad de contribuir con mi talento de manera excepcional en beneficio de la organización</h5>
                                        <p class=\"clasificacion\">
                                            <input id=\"radio-ques26\" name=\"estrellas6\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-ques26\" ><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest27\" name=\"estrellas6\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest27\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest28\" name=\"estrellas6\" value=\"0.5\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest28\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest29\" name=\"estrellas6\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest29\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest30\" name=\"estrellas6\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest30\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        </p>
                                    </fieldset>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <fieldset>
                                        <h5>He logrado mis metas personales trabajando en esta organización</h5>
                                        <p class=\"clasificacion\">
                                            <input id=\"radio-ques31\" name=\"estrellas7\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-ques31\" ><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest32\" name=\"estrellas7\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest32\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest33\" name=\"estrellas7\" value=\"0.5\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest33\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest34\" name=\"estrellas7\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest34\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest35\" name=\"estrellas7\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest35\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        </p>
                                    </fieldset>
                                </div>
                                <div class=\"col-lg-6\">
                                    <fieldset>
                                        <h5>Considero que formo parte de un gran equipo de trabajo</h5>
                                        <p class=\"clasificacion\">
                                            <input id=\"radio-ques36\" name=\"estrellas8\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-ques36\" ><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest37\" name=\"estrellas8\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest37\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest38\" name=\"estrellas8\" value=\"0.5\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest38\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest39\" name=\"estrellas8\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest39\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest40\" name=\"estrellas8\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest40\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        </p>
                                    </fieldset>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <fieldset>
                                        <h5>Los compañeros facilitan que cualquier persona se adapte rápidamente a la organización</h5>
                                        <p class=\"clasificacion\">
                                            <input id=\"radio-ques41\" name=\"estrellas9\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-ques41\" ><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest42\" name=\"estrellas9\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest42\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest43\" name=\"estrellas9\" value=\"0.5\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest43\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest44\" name=\"estrellas9\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest44\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest45\" name=\"estrellas9\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest45\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        </p>
                                    </fieldset>
                                </div>
                                <div class=\"col-lg-6\">
                                    <fieldset>
                                        <h5>Esta organización brinda las mejores oportunidades de desarrollar el talento de su gente</h5>
                                        <p class=\"clasificacion\">
                                            <input id=\"radio-ques46\" name=\"estrellas10\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-ques46\" ><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest47\" name=\"estrellas10\" value=\"1\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest47\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest48\" name=\"estrellas10\" value=\"0.5\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest48\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest49\" name=\"estrellas10\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest49\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                            <input id=\"radio-quest50\" name=\"estrellas10\" value=\"0\" type=\"radio\"><label class=\"label-star\" for=\"radio-quest50\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></label>
                                        </p>
                                    </fieldset>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <fieldset>
                                        <h5>¿Trabajas actualmente en esta empresa?</h5>
                                        <div class=\"radio\">
                                            <label>
                                                <input class=\"mostrarRadio\" type=\"radio\" name=\"yesno\" id=\"optionsRadios1\" value=\"si\" checked>
                                                Si
                                            </label>
                                        </div>
                                        <div class=\"radio\">
                                            <label>
                                                <input class=\"mostrarRadio\" type=\"radio\" name=\"yesno\" id=\"optionsRadios2\" value=\"no\">
                                                No
                                            </label>
                                        </div>
                                    </fieldset><hr/>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <div class=\"form-group\">
                                        <label for=\"inputOpinion\" class=\"control-label\">Tomando todo en consideración, ¿cuál es tu opinión personal de esta empresa?</label>
                                        <textarea name=\"generalcomment\" class=\"form-control\" rows=\"2\" maxlength=\"150\" placeholder=\"Una buena opinión debería incluir aspectos positivos y negativos.\"></textarea>
                                        <p class=\"help-block text-info pull-right\">No más de 150 caracteres</p>
                                    </div>
                                    <button type=\"submit\" class=\"pull-right btn btn-page btn-block\">Opinar</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 729
        echo "
    <div class=\"modal fade \" id=\"ratingModalOffline\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ratingModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">

                <form action=\"";
        // line 734
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_login");
        echo "\" method=\"post\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\" id=\"exampleModalLabel\">Iniciar Sesión</h4>
                    </div>

                    <div class=\"modal-body\">
                        <a href=\"";
        // line 741
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connect_facebook");
        echo "\" class=\"btn btn-fb btn-block\"><i class=\"fa fa-facebook\"></i> Facebook</a><br>
                        <a href=\"";
        // line 742
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connect_google");
        echo "\" class=\"btn btn-tw btn-block\"><i class=\"fa fa-google\"></i> Google</a><br>
                        <p class=\"text-muted text-center\"> - o ingresa tus datos - </p>
                        <div class=\"form-group\">
                            <label class=\"sr-only\" for=\"inputEmail\">Correo electrónico</label>
                            <input type=\"email\" id=\"username\" name=\"_username\"  class=\"form-control\" placeholder=\"Corre electronico\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"sr-only\" for=\"inputPassword\">Contraseña</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Contraseña\">
                            <div class=\"help-block text-right\"><a href=\"\">¿Olvidaste tu contraseña?</a></div>
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block\">Entrar</button>
                        </div>
                        <input type=\"hidden\" name=\"_target_path\" value=\"/perfil\">

                        <div class=\"bottom text-center\">
                            ¿No tienes una cuenta? <a href=\"";
        // line 759
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
        echo "\"><b>Regístrate</b></a>
                        </div>
                        
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div id=\"modalReclamar\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Reclamar esta empresa</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"alert alert-info\">
                        <strong>Información: </strong> Para lograr la reclamación de esta empresa
                        es necesario que nos ayudes con algunos datos.
                        En breve nos comunicaremos contigo para corroborar la información.
                    </div>
                    <hr>
                    ";
        // line 785
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) != null)) {
            // line 786
            echo "                        <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_claimcompany", array("id" => $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "id", array()), "user_id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))), "html", null, true);
            echo "\" method=\"post\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"Nombre\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"lastname\" id=\"lastname\" placeholder=\"Apellidos\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"position\" id=\"position\" placeholder=\"Cargo en la empresa\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"companyemail\" id=\"companyemail\" placeholder=\"Email empresarial\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"rfc\" id=\"companyemail\" placeholder=\"RFC\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"officenumber\" id=\"officenumber\" placeholder=\"Telefono de oficina y/o extención\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"personalnumber\" id=\"personalnumber\" placeholder=\"Telefono personal\">
                            </div>

                            <button type=\"submit\" class=\"btn btn-success btn-block btn-lg\">Enviar</button>
                        </form>
                    ";
        }
        // line 812
        echo "                </div>

            </div>

        </div>
    </div>
</div>
<script>
\t\t\$(document).ready(function () {
\t\t\t\$(\"#ratingModalSuccess\").modal(\"show\");
\t\t});
    </script>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Company:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1292 => 812,  1262 => 786,  1260 => 785,  1231 => 759,  1211 => 742,  1207 => 741,  1197 => 734,  1190 => 729,  1015 => 560,  1010 => 558,  998 => 548,  994 => 547,  822 => 378,  808 => 366,  801 => 363,  793 => 360,  777 => 348,  774 => 347,  767 => 345,  764 => 344,  756 => 338,  753 => 337,  745 => 332,  738 => 327,  735 => 326,  733 => 325,  729 => 323,  723 => 321,  721 => 320,  715 => 317,  709 => 314,  706 => 313,  696 => 311,  692 => 309,  690 => 308,  684 => 304,  678 => 302,  672 => 300,  669 => 299,  663 => 297,  661 => 296,  656 => 295,  654 => 294,  650 => 293,  645 => 290,  642 => 289,  640 => 288,  637 => 287,  633 => 286,  628 => 283,  617 => 274,  613 => 272,  611 => 271,  607 => 270,  598 => 263,  594 => 261,  592 => 260,  588 => 259,  583 => 256,  581 => 255,  576 => 253,  569 => 248,  566 => 247,  558 => 242,  551 => 237,  548 => 236,  546 => 235,  540 => 232,  536 => 230,  526 => 228,  522 => 226,  520 => 225,  513 => 220,  507 => 218,  501 => 216,  498 => 215,  492 => 213,  490 => 212,  485 => 211,  483 => 210,  479 => 209,  473 => 206,  466 => 201,  462 => 200,  457 => 197,  450 => 192,  448 => 191,  444 => 189,  435 => 186,  432 => 185,  428 => 184,  425 => 183,  416 => 180,  413 => 179,  409 => 178,  404 => 175,  393 => 165,  389 => 163,  386 => 162,  380 => 158,  378 => 157,  373 => 154,  370 => 153,  364 => 149,  362 => 148,  359 => 147,  352 => 145,  349 => 144,  346 => 143,  343 => 142,  340 => 141,  337 => 140,  334 => 139,  332 => 138,  329 => 137,  324 => 136,  321 => 135,  318 => 134,  316 => 133,  310 => 129,  308 => 128,  305 => 127,  301 => 125,  297 => 123,  294 => 122,  288 => 118,  286 => 117,  281 => 114,  278 => 113,  272 => 109,  270 => 108,  267 => 107,  260 => 105,  257 => 104,  254 => 103,  251 => 102,  248 => 101,  245 => 100,  242 => 99,  240 => 98,  237 => 97,  232 => 96,  229 => 95,  226 => 94,  224 => 93,  218 => 89,  216 => 88,  213 => 87,  206 => 82,  200 => 81,  194 => 80,  188 => 78,  182 => 76,  179 => 75,  173 => 73,  170 => 72,  167 => 71,  162 => 70,  158 => 69,  140 => 54,  133 => 49,  131 => 48,  125 => 45,  118 => 40,  115 => 39,  112 => 38,  104 => 33,  101 => 32,  98 => 31,  91 => 26,  88 => 25,  86 => 24,  83 => 23,  79 => 21,  77 => 20,  71 => 19,  66 => 16,  60 => 14,  54 => 12,  52 => 11,  46 => 7,  43 => 6,  37 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Company:profile.html.twig", "/home/myjobsa1/public_html/src/AppBundle/Resources/views/Company/profile.html.twig");
    }
}
