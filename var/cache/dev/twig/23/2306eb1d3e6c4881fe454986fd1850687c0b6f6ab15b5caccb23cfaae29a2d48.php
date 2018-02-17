<?php

/* AppBundle:User:profile.html.twig */
class __TwigTemplate_af20f9e78f067d56667cb0272be2e734174e1f3cca4e68ecd5e2f904263aa27b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layoutprofiles.html.twig", "AppBundle:User:profile.html.twig", 1);
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
        $__internal_0e768047707c1e8712e2db72e4394511e2a58799cab5abdb65ee193048c313f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e768047707c1e8712e2db72e4394511e2a58799cab5abdb65ee193048c313f4->enter($__internal_0e768047707c1e8712e2db72e4394511e2a58799cab5abdb65ee193048c313f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e768047707c1e8712e2db72e4394511e2a58799cab5abdb65ee193048c313f4->leave($__internal_0e768047707c1e8712e2db72e4394511e2a58799cab5abdb65ee193048c313f4_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ce6d22b66a5af65e94319fc5c404168fb8b558db6c1fec21eb544f8e2aed9cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6d22b66a5af65e94319fc5c404168fb8b558db6c1fec21eb544f8e2aed9cb6->enter($__internal_ce6d22b66a5af65e94319fc5c404168fb8b558db6c1fec21eb544f8e2aed9cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/users.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/profile.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ce6d22b66a5af65e94319fc5c404168fb8b558db6c1fec21eb544f8e2aed9cb6->leave($__internal_ce6d22b66a5af65e94319fc5c404168fb8b558db6c1fec21eb544f8e2aed9cb6_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_d32f9edcadb9ba1dda4e32a74afd0e66ba353d63cfd84ee4c6b7efca25315d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d32f9edcadb9ba1dda4e32a74afd0e66ba353d63cfd84ee4c6b7efca25315d15->enter($__internal_d32f9edcadb9ba1dda4e32a74afd0e66ba353d63cfd84ee4c6b7efca25315d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <section class=\"profile-company-header\">
        <div class=\"container \">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-12 col-sm-12 col-xs-12 \">
                    ";
        // line 12
        if (((((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), ".")) == "png") || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), ".")) == "jpg")) || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), ".")) == "jpeg")) || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), ".")) == "gif"))) {
            // line 13
            echo "                        ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "anonimo", array()) == "Si")) {
                // line 14
                echo "                            <img class=\"profile-picture-company center-block\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.jpg"), "html", null, true);
                echo "\"/>
                        ";
            } elseif (($this->getAttribute(            // line 15
(isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()) != null)) {
                // line 16
                echo "                            <img class=\"profile-picture-company center-block\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/users/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()))), "html", null, true);
                echo "\"/>
                        ";
            }
            // line 18
            echo "                    ";
        } elseif ((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), ".")) == null)) {
            // line 19
            echo "                        <img class=\"profile-picture-company center-block\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.jpg"), "html", null, true);
            echo "\"/>
                    ";
        } else {
            // line 21
            echo "                        <img class=\"profile-picture-company center-block\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "html", null, true);
            echo "\"/>
                    ";
        }
        // line 23
        echo "                </div>
                <div class=\"col-lg-9 col-md-12 col-sm-12 col-xs-12\" id=\"user-card\">
                    <h1 id=\"profile-username \">

                        ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "plastname", array()), "html", null, true);
        echo "
                        ";
        // line 28
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "anonimo", array()) == "Si")) {
            // line 29
            echo "                            <i class=\"fa fa-user-secret\" aria-hidden=\"true\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Usuario anónimo\"></i>
                        ";
        }
        // line 31
        echo "                        ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))) {
            // line 32
            echo "                            <div class=\"btn-group\">
                                <a href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit");
            echo "\" class=\"btn btn-default btn-xs\" type=\"button\"  aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Editar perfil
                                </a>
                            </div>
                        ";
        }
        // line 38
        echo "
                        ";
        // line 39
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))) {
            // line 40
            echo "                            <div class=\"btn-group\">
                                <button class=\"pull-right btn btn-xs btn-success btn-follow ";
            // line 41
            if (($this->env->getExtension('AppBundle\Twig\FollowingExtension')->followingFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) == true)) {
                echo " hidden ";
            }
            echo "\" data-followed=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>
                                    Seguir
                                </button>

                                <button class=\"btn btn-xs btn-default btn-unfollow ";
            // line 46
            if (($this->env->getExtension('AppBundle\Twig\FollowingExtension')->followingFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) == false)) {
                echo " hidden ";
            }
            echo "\" data-followed=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-user-times\" aria-hidden=\"true\"></i>
                                    Dejar de seguir
                                </button>
                            </div>
                        ";
        }
        // line 52
        echo "                    </h1>

                    <h5><b>Biografía</b></h5>

                    ";
        // line 56
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "anonimo", array()) == "Si")) {
            // line 57
            echo "                      ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 58
                echo "                        <p><em>Este usuario es un usuario privado, por lo tanto no puedes ver su información personal</em></p>
                      ";
            } else {
                // line 60
                echo "                          <p>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "biography", array()), "html", null, true);
                echo "</p>
                      ";
            }
            // line 62
            echo "                    ";
        } else {
            // line 63
            echo "                        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "biography", array()), "html", null, true);
            echo "</p>
                    ";
        }
        // line 65
        echo "
                    <div  class=\"row\">
                        ";
        // line 67
        $context["user_stats"] = $this->env->getExtension('AppBundle\Twig\UserStatsExtension')->userStatsFilter($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()));
        // line 68
        echo "                        <div class=\"following-data\">
                            <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("following_users", array("email" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()))), "html", null, true);
        echo "\">
                                <i class=\"fa fa-user-plus fa-2x follwing-stats\" aria-hidden=\"true\"></i>
                                <span class=\"number-stat\">";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_stats"]) ? $context["user_stats"] : $this->getContext($context, "user_stats")), "following", array()), "html", null, true);
        echo "</span>
                            </a>
                        </div>

                        <div class=\"following-data\">
                            <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("followed_users", array("email" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()))), "html", null, true);
        echo "\">
                                <i class=\"fa fa-user-circle fa-2x followers-stats\" aria-hidden=\"true\"></i>
                                <span class=\"number-stat\">";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_stats"]) ? $context["user_stats"] : $this->getContext($context, "user_stats")), "followers", array()), "html", null, true);
        echo "</span>
                            </a>
                        </div>

                        ";
        // line 82
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "anonimo", array()) == "Si")) {
            // line 83
            echo "                          ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 84
                echo "                            <div class=\"following-data\">
                                <a href=\"#\" hidden>
                                    <i class=\"fa fa-commenting fa-2x comment-stats\" aria-hidden=\"true\"></i>
                                    <span class=\"number-stat\">";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_stats"]) ? $context["user_stats"] : $this->getContext($context, "user_stats")), "opinions", array()), "html", null, true);
                echo "</span>
                                </a>
                            </div>

                            <div class=\"following-data\">
                                <a href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_likes", array("email" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()))), "html", null, true);
                echo "\" hidden>
                                    <i class=\"fa fa-heart fa-2x heart-stats\" aria-hidden=\"true\"></i>
                                    <span class=\"number-stat\">";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_stats"]) ? $context["user_stats"] : $this->getContext($context, "user_stats")), "likes", array()), "html", null, true);
                echo "</span>
                                </a>
                            </div>
                          ";
            } else {
                // line 98
                echo "                            <div class=\"following-data\">
                                <a href=\"#\" >
                                    <i class=\"fa fa-commenting fa-2x comment-stats\" aria-hidden=\"true\"></i>
                                    <span class=\"number-stat\">";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_stats"]) ? $context["user_stats"] : $this->getContext($context, "user_stats")), "opinions", array()), "html", null, true);
                echo "</span>
                                </a>
                            </div>
                            <div class=\"following-data\">
                                <a href=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_likes", array("email" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()))), "html", null, true);
                echo "\" >
                                    <i class=\"fa fa-heart fa-2x heart-stats\" aria-hidden=\"true\"></i>
                                    <span class=\"number-stat\">";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_stats"]) ? $context["user_stats"] : $this->getContext($context, "user_stats")), "likes", array()), "html", null, true);
                echo "</span>
                                </a>
                            </div>
                          ";
            }
            // line 111
            echo "                        ";
        } else {
            // line 112
            echo "                          <div class=\"following-data\">
                              <a href=\"#\" >
                                  <i class=\"fa fa-commenting fa-2x comment-stats\" aria-hidden=\"true\"></i>
                                  <span class=\"number-stat\">";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_stats"]) ? $context["user_stats"] : $this->getContext($context, "user_stats")), "opinions", array()), "html", null, true);
            echo "</span>
                              </a>
                          </div>
                          <div class=\"following-data\">
                              <a href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_likes", array("email" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()))), "html", null, true);
            echo "\" >
                                  <i class=\"fa fa-heart fa-2x heart-stats\" aria-hidden=\"true\"></i>
                                  <span class=\"number-stat\">";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_stats"]) ? $context["user_stats"] : $this->getContext($context, "user_stats")), "likes", array()), "html", null, true);
            echo "</span>
                              </a>
                          </div>
                        ";
        }
        // line 125
        echo "



                    </div>

                </div>
            </div>
        </div>
        <hr />
        <!-- /.container -->
    </section>

    ";
        // line 139
        echo "    <section class=\"opinions-section\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 143
            echo "                    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "
                ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "msg"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 147
            echo "                    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "
                ";
        // line 150
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "anonimo", array()) == "Si")) {
            // line 151
            echo "                  ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 152
                echo "                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <h2 class=\"text-muted text-center\">Este usuario es privado, por lo tanto no puedes ver sus opiniones</h2>
                    </div>
                  ";
            } else {
                // line 156
                echo "                  <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                      ";
                // line 157
                if (($this->getAttribute((isset($context["user_stats"]) ? $context["user_stats"] : $this->getContext($context, "user_stats")), "opinions", array()) == 0)) {
                    // line 158
                    echo "                          <h2 class=\"text-muted text-center\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
                    echo " aún no ha realizado alguna opinión</h2>
                      ";
                } else {
                    // line 160
                    echo "                          <h1 class=\"page-header\">Opiniones</h1>
                      ";
                }
                // line 162
                echo "                  </div>
                  <div class=\"col-lg-8 col-md-12 col-sm-12 col-xs-12\">
                      ";
                // line 164
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
                foreach ($context['_seq'] as $context["_key"] => $context["opinions"]) {
                    // line 165
                    echo "
                          <div class=\"panel panel-default\">
                              <div class=\"panel-heading \">
                                  <div class=\"row\">
                                      <div class=\"col-lg-1 col-md-2 col-sm-2 col-xs-2\">
                                          <a href=\"";
                    // line 170
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("id" => $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "id", array()))), "html", null, true);
                    echo "\">
                                              <div class=\"avatar\">
                                                  ";
                    // line 172
                    if (((((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "image", array()), ".")) == "png") || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "image", array()), ".")) == "jpg")) || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "image", array()), ".")) == "jpeg")) || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "image", array()), ".")) == "gif"))) {
                        // line 173
                        echo "                                                      ";
                        if (($this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "anonimo", array()) == "Si")) {
                            // line 174
                            echo "                                                          <img class=\"user-logo-opinion\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.jpg"), "html", null, true);
                            echo "\"/>
                                                      ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 175
$context["opinions"], "user", array()), "image", array()) != null)) {
                            // line 176
                            echo "                                                          <img class=\"user-logo-opinion\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/users/" . $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "image", array()))), "html", null, true);
                            echo "\"/>
                                                      ";
                        }
                        // line 178
                        echo "                                                  ";
                    } elseif ((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "image", array()), ".")) == null)) {
                        // line 179
                        echo "                                                      <img class=\"user-logo-opinion\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.jpg"), "html", null, true);
                        echo "\"/>
                                                  ";
                    } else {
                        // line 181
                        echo "                                                      <img class=\"user-logo-opinion\" src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "image", array()), "html", null, true);
                        echo "\"/>
                                                  ";
                    }
                    // line 183
                    echo "                                              </div>
                                          </a>
                                      </div>
                                      <div class=\"col-lg-5 col-md-7 col-sm-7 col-xs-7\">
                                          <h5 class=\"media-heading\"><a href=\"";
                    // line 187
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("id" => $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "name", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "plastname", array()), "html", null, true);
                    echo "</a></h5>
                                          <small class=\"text-muted\">";
                    // line 188
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\LongTimeExtension')->LongTimeFilter($this->getAttribute($context["opinions"], "createdAt", array())), "html", null, true);
                    echo "</small>
                                      </div>
                                      <div class=\"col-lg-6 col-md-3 col-sm-3 col-xs-3\">
                                          ";
                    // line 191
                    if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
                        // line 192
                        echo "                                              ";
                        if (($this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                            // line 193
                            echo "                                                  <div class=\"btn-group pull-right\">
                                                      <button class=\"btn btn-link btn-xs dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                          <i class=\"fa fa-cog\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down caret-opinioncomment\"></i>
                                                      </button>
                                                      <ul class=\"dropdown-menu\">
                                                          <li><a class=\"btn-delete-pub\" data-id=\"";
                            // line 198
                            echo twig_escape_filter($this->env, $this->getAttribute($context["opinions"], "id", array()), "html", null, true);
                            echo "\">Eliminar</a></li>

                                                      </ul>
                                                  </div>
                                              ";
                        }
                        // line 203
                        echo "                                          ";
                    }
                    // line 204
                    echo "                                      </div>
                                  </div>
                              </div>


                              <div class=\"panel-body\">
                                  <p>";
                    // line 210
                    echo twig_escape_filter($this->env, $this->getAttribute($context["opinions"], "generalcomment", array()), "html", null, true);
                    echo "</p>

                                  ";
                    // line 212
                    if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
                        // line 213
                        echo "                                      <hr class=\"profiles-hr\">
                                      <div class=\"like\">

                                          <i data-id=\"";
                        // line 216
                        echo twig_escape_filter($this->env, $this->getAttribute($context["opinions"], "id", array()), "html", null, true);
                        echo "\" class=\"
                                             ";
                        // line 217
                        if (($this->env->getExtension('AppBundle\Twig\LikedExtension')->likedFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), $context["opinions"]) == true)) {
                            // line 218
                            echo "                                                 hidden
                                             ";
                        }
                        // line 220
                        echo "                                             btn-like fa fa-heart\"
                                             aria-hidden=\"true\"
                                             data-toggle=\"tooltip\"
                                             data-placement=\"left\"
                                             title=\"Me gusta\">
                                          </i>

                                          <i data-id=\"";
                        // line 227
                        echo twig_escape_filter($this->env, $this->getAttribute($context["opinions"], "id", array()), "html", null, true);
                        echo "\" class=\"
                                             ";
                        // line 228
                        if (($this->env->getExtension('AppBundle\Twig\LikedExtension')->likedFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), $context["opinions"]) == false)) {
                            // line 229
                            echo "                                                 hidden
                                             ";
                        }
                        // line 231
                        echo "                                             btn-unlike active fa fa-heart\"
                                             aria-hidden=\"true\"
                                             data-toggle=\"tooltip\"
                                             data-placement=\"left\"
                                             title=\"Ya no me gusta\">
                                          </i>
                                      </div>
                                      <hr class=\"profiles-hr\">
                                  ";
                    }
                    // line 240
                    echo "                              </div>
                              <div class=\"panel-footer\">
                                  ";
                    // line 242
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["comments"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
                        // line 243
                        echo "
                                      ";
                        // line 244
                        if (($this->getAttribute($this->getAttribute($context["comments"], "opinion", array()), "id", array()) == $this->getAttribute($context["opinions"], "id", array()))) {
                            // line 245
                            echo "                                          ";
                            if (($this->getAttribute($context["comments"], "status", array()) != "invalid")) {
                                // line 246
                                echo "                                              <div class=\"row\">
                                                  <div class=\"col-lg-1 col-md-2 col-sm-2 col-xs-2 \">
                                                      <div class=\"avatar  \">
                                                          ";
                                // line 249
                                if (((((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "image", array()), ".")) == "png") || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "image", array()), ".")) == "jpg")) || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "image", array()), ".")) == "jpeg")) || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "image", array()), ".")) == "gif"))) {
                                    // line 250
                                    echo "                                                              ";
                                    if (($this->getAttribute($this->getAttribute($context["comments"], "user", array()), "anonimo", array()) == "Si")) {
                                        // line 251
                                        echo "                                                                  <img class=\" user-logo-opinion-comment\" src=\"";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.jpg"), "html", null, true);
                                        echo "\"/>
                                                              ";
                                    } elseif (($this->getAttribute($this->getAttribute(                                    // line 252
$context["comments"], "user", array()), "image", array()) != null)) {
                                        // line 253
                                        echo "                                                                  <img class=\" user-logo-opinion-comment\" src=\"";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/users/" . $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "image", array()))), "html", null, true);
                                        echo "\"/>
                                                              ";
                                    }
                                    // line 255
                                    echo "                                                          ";
                                } elseif ((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "image", array()), ".")) == null)) {
                                    // line 256
                                    echo "                                                              <img class=\" user-logo-opinion-comment\" src=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.jpg"), "html", null, true);
                                    echo "\"/>
                                                          ";
                                } else {
                                    // line 258
                                    echo "                                                              <img class=\" user-logo-opinion-comment\"src=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "image", array()), "html", null, true);
                                    echo "\"/>
                                                          ";
                                }
                                // line 260
                                echo "                                                      </div>
                                                  </div>
                                                  <div class=\"col-lg-5 col-md-7 col-sm-7 col-xs-7\">
                                                      <h5 class=\"media-heading \">
                                                          ";
                                // line 264
                                if (($this->getAttribute($this->getAttribute($context["comments"], "user", array()), "anonimo", array()) == "Si")) {
                                    // line 265
                                    echo "                                                              <em>Anonimo</em>
                                                          ";
                                } else {
                                    // line 267
                                    echo "                                                              <a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("id" => $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "id", array()))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "name", array()), "html", null, true);
                                    echo " ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "plastname", array()), "html", null, true);
                                    echo "</a>
                                                          ";
                                }
                                // line 269
                                echo "                                                          - <small class=\"text-muted\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\LongTimeExtension')->LongTimeFilter($this->getAttribute($context["comments"], "createdAt", array())), "html", null, true);
                                echo "</small>
                                                      </h5>

                                                      <p >";
                                // line 272
                                echo twig_escape_filter($this->env, $this->getAttribute($context["comments"], "body", array()), "html", null, true);
                                echo "</p>


                                                      ";
                                // line 275
                                if (($this->getAttribute($context["comments"], "image", array()) != null)) {
                                    // line 276
                                    echo "                                                          <img class=\"center-block comment-img\" width=\"200\" src=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/comments/images/" . $this->getAttribute($context["comments"], "image", array()))), "html", null, true);
                                    echo "\"/>
                                                      ";
                                }
                                // line 278
                                echo "                                                  </div>
                                                  <div class=\"col-lg-6 col-md-3 col-sm-3 col-xs-3\">
                                                      ";
                                // line 280
                                if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
                                    // line 281
                                    echo "                                                          ";
                                    if (($this->getAttribute($this->getAttribute($context["comments"], "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                                        // line 282
                                        echo "                                                              <div class=\" btn-group pull-right  \">
                                                                  <button class=\"btn btn-link btn-xs dropdown-toggle \" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                      <i class=\"fa fa-cog\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down caret-opinioncomment\"></i>
                                                                  </button>
                                                                  <ul class=\"dropdown-menu \">
                                                                      <li><a class=\"btn-delete-comment\" data-id=\"";
                                        // line 287
                                        echo twig_escape_filter($this->env, $this->getAttribute($context["comments"], "id", array()), "html", null, true);
                                        echo "\">Eliminar</a></li>
                                                                  </ul>
                                                              </div>
                                                              <div class=\"clearfix\"></div>
                                                          ";
                                    }
                                    // line 292
                                    echo "                                                      ";
                                }
                                // line 293
                                echo "                                                  </div>
                                              </div>
                                              <hr class=\"profiles-hr\">
                                          ";
                            }
                            // line 297
                            echo "                                      ";
                        }
                        // line 298
                        echo "

                                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 301
                    echo "
                                  ";
                    // line 302
                    if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
                        // line 303
                        echo "                                      <form method=\"post\" enctype=\"multipart/form-data\" class=\"comment-form\" action=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_crate_user", array("opinion_id" => $this->getAttribute($context["opinions"], "id", array()))), "html", null, true);
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
                    // line 315
                    echo "                              </div>
                          </div>

                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opinions'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 319
                echo "                      ";
                echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
                echo "
                  </div>

                  ";
            }
            // line 323
            echo "
                ";
        } else {
            // line 325
            echo "                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        ";
            // line 326
            if (($this->getAttribute((isset($context["user_stats"]) ? $context["user_stats"] : $this->getContext($context, "user_stats")), "opinions", array()) == 0)) {
                // line 327
                echo "                            <h2 class=\"text-muted text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
                echo " aún no ha realizado alguna opinión</h2>
                        ";
            } else {
                // line 329
                echo "                            <h1 class=\"page-header\">Opiniones</h1>
                        ";
            }
            // line 331
            echo "                    </div>
                    <div class=\"col-lg-8 col-md-12 col-sm-12 col-xs-12\">
                        ";
            // line 333
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["opinions"]) {
                // line 334
                echo "
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading \">
                                    <div class=\"row\">
                                        <div class=\"col-lg-1 col-md-2 col-sm-2 col-xs-2\">
                                            <a href=\"";
                // line 339
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("id" => $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "id", array()))), "html", null, true);
                echo "\">
                                                <div class=\"avatar\">
                                                    ";
                // line 341
                if (((((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "image", array()), ".")) == "png") || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "image", array()), ".")) == "jpg")) || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "image", array()), ".")) == "jpeg")) || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "image", array()), ".")) == "gif"))) {
                    // line 342
                    echo "                                                        ";
                    if (($this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "anonimo", array()) == "Si")) {
                        // line 343
                        echo "                                                            <img class=\"user-logo-opinion\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.jpg"), "html", null, true);
                        echo "\"/>
                                                        ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 344
$context["opinions"], "user", array()), "image", array()) != null)) {
                        // line 345
                        echo "                                                            <img class=\"user-logo-opinion\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/users/" . $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "image", array()))), "html", null, true);
                        echo "\"/>
                                                        ";
                    }
                    // line 347
                    echo "                                                    ";
                } elseif ((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "image", array()), ".")) == null)) {
                    // line 348
                    echo "                                                        <img class=\"user-logo-opinion\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.jpg"), "html", null, true);
                    echo "\"/>
                                                    ";
                } else {
                    // line 350
                    echo "                                                        <img class=\"user-logo-opinion\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "image", array()), "html", null, true);
                    echo "\"/>
                                                    ";
                }
                // line 352
                echo "                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"col-lg-5 col-md-7 col-sm-7 col-xs-7\">
                                            <h5 class=\"media-heading\"><a href=\"";
                // line 356
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("id" => $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "plastname", array()), "html", null, true);
                echo "</a></h5>
                                            <small class=\"text-muted\">";
                // line 357
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\LongTimeExtension')->LongTimeFilter($this->getAttribute($context["opinions"], "createdAt", array())), "html", null, true);
                echo "</small>
                                        </div>
                                        <div class=\"col-lg-6 col-md-3 col-sm-3 col-xs-3\">
                                            ";
                // line 360
                if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
                    // line 361
                    echo "                                                ";
                    if (($this->getAttribute($this->getAttribute($context["opinions"], "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                        // line 362
                        echo "                                                    <div class=\"btn-group pull-right\">
                                                        <button class=\"btn btn-link btn-xs dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                            <i class=\"fa fa-cog\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down caret-opinioncomment\"></i>
                                                        </button>
                                                        <ul class=\"dropdown-menu\">
                                                            <li><a class=\"btn-delete-pub\" data-id=\"";
                        // line 367
                        echo twig_escape_filter($this->env, $this->getAttribute($context["opinions"], "id", array()), "html", null, true);
                        echo "\">Eliminar</a></li>

                                                        </ul>
                                                    </div>
                                                ";
                    }
                    // line 372
                    echo "                                            ";
                }
                // line 373
                echo "                                        </div>
                                    </div>
                                </div>


                                <div class=\"panel-body\">
                                    <p>";
                // line 379
                echo twig_escape_filter($this->env, $this->getAttribute($context["opinions"], "generalcomment", array()), "html", null, true);
                echo "</p>

                                    ";
                // line 381
                if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
                    // line 382
                    echo "                                        <hr class=\"profiles-hr\">
                                        <div class=\"like\">

                                            <i data-id=\"";
                    // line 385
                    echo twig_escape_filter($this->env, $this->getAttribute($context["opinions"], "id", array()), "html", null, true);
                    echo "\" class=\"
                                               ";
                    // line 386
                    if (($this->env->getExtension('AppBundle\Twig\LikedExtension')->likedFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), $context["opinions"]) == true)) {
                        // line 387
                        echo "                                                   hidden
                                               ";
                    }
                    // line 389
                    echo "                                               btn-like fa fa-heart\"
                                               aria-hidden=\"true\"
                                               data-toggle=\"tooltip\"
                                               data-placement=\"left\"
                                               title=\"Me gusta\">
                                            </i>

                                            <i data-id=\"";
                    // line 396
                    echo twig_escape_filter($this->env, $this->getAttribute($context["opinions"], "id", array()), "html", null, true);
                    echo "\" class=\"
                                               ";
                    // line 397
                    if (($this->env->getExtension('AppBundle\Twig\LikedExtension')->likedFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), $context["opinions"]) == false)) {
                        // line 398
                        echo "                                                   hidden
                                               ";
                    }
                    // line 400
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
                // line 409
                echo "                                </div>
                                <div class=\"panel-footer\">
                                    ";
                // line 411
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["comments"]);
                foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
                    // line 412
                    echo "
                                        ";
                    // line 413
                    if (($this->getAttribute($this->getAttribute($context["comments"], "opinion", array()), "id", array()) == $this->getAttribute($context["opinions"], "id", array()))) {
                        // line 414
                        echo "                                            ";
                        if (($this->getAttribute($context["comments"], "status", array()) != "invalid")) {
                            // line 415
                            echo "                                                <div class=\"row\">
                                                    <div class=\"col-lg-1 col-md-2 col-sm-2 col-xs-2 \">
                                                        <div class=\"avatar  \">
                                                            ";
                            // line 418
                            if (((((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "image", array()), ".")) == "png") || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "image", array()), ".")) == "jpg")) || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "image", array()), ".")) == "jpeg")) || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "image", array()), ".")) == "gif"))) {
                                // line 419
                                echo "                                                                ";
                                if (($this->getAttribute($this->getAttribute($context["comments"], "user", array()), "anonimo", array()) == "Si")) {
                                    // line 420
                                    echo "                                                                    <img class=\" user-logo-opinion-comment\" src=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.jpg"), "html", null, true);
                                    echo "\"/>
                                                                ";
                                } elseif (($this->getAttribute($this->getAttribute(                                // line 421
$context["comments"], "user", array()), "image", array()) != null)) {
                                    // line 422
                                    echo "                                                                    <img class=\" user-logo-opinion-comment\" src=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/users/" . $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "image", array()))), "html", null, true);
                                    echo "\"/>
                                                                ";
                                }
                                // line 424
                                echo "                                                            ";
                            } elseif ((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "image", array()), ".")) == null)) {
                                // line 425
                                echo "                                                                <img class=\" user-logo-opinion-comment\" src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.jpg"), "html", null, true);
                                echo "\"/>
                                                            ";
                            } else {
                                // line 427
                                echo "                                                                <img class=\" user-logo-opinion-comment\"src=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "image", array()), "html", null, true);
                                echo "\"/>
                                                            ";
                            }
                            // line 429
                            echo "                                                        </div>
                                                    </div>
                                                    <div class=\"col-lg-5 col-md-7 col-sm-7 col-xs-7\">
                                                        <h5 class=\"media-heading \">
                                                            ";
                            // line 433
                            if (($this->getAttribute($this->getAttribute($context["comments"], "user", array()), "anonimo", array()) == "Si")) {
                                // line 434
                                echo "                                                                <em>Anonimo</em>
                                                            ";
                            } else {
                                // line 436
                                echo "                                                                <a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("id" => $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "id", array()))), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "name", array()), "html", null, true);
                                echo " ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comments"], "user", array()), "plastname", array()), "html", null, true);
                                echo "</a>
                                                            ";
                            }
                            // line 438
                            echo "                                                            - <small class=\"text-muted\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\LongTimeExtension')->LongTimeFilter($this->getAttribute($context["comments"], "createdAt", array())), "html", null, true);
                            echo "</small>
                                                        </h5>

                                                        <p >";
                            // line 441
                            echo twig_escape_filter($this->env, $this->getAttribute($context["comments"], "body", array()), "html", null, true);
                            echo "</p>


                                                        ";
                            // line 444
                            if (($this->getAttribute($context["comments"], "image", array()) != null)) {
                                // line 445
                                echo "                                                            <img class=\"center-block comment-img\" width=\"200\" src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/comments/images/" . $this->getAttribute($context["comments"], "image", array()))), "html", null, true);
                                echo "\"/>
                                                        ";
                            }
                            // line 447
                            echo "                                                    </div>
                                                    <div class=\"col-lg-6 col-md-3 col-sm-3 col-xs-3\">
                                                        ";
                            // line 449
                            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
                                // line 450
                                echo "                                                            ";
                                if (($this->getAttribute($this->getAttribute($context["comments"], "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                                    // line 451
                                    echo "                                                                <div class=\" btn-group pull-right  \">
                                                                    <button class=\"btn btn-link btn-xs dropdown-toggle \" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                        <i class=\"fa fa-cog\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down caret-opinioncomment\"></i>
                                                                    </button>
                                                                    <ul class=\"dropdown-menu \">
                                                                        <li><a class=\"btn-delete-comment\" data-id=\"";
                                    // line 456
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["comments"], "id", array()), "html", null, true);
                                    echo "\">Eliminar</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class=\"clearfix\"></div>
                                                            ";
                                }
                                // line 461
                                echo "                                                        ";
                            }
                            // line 462
                            echo "                                                    </div>
                                                </div>
                                                <hr class=\"profiles-hr\">
                                            ";
                        }
                        // line 466
                        echo "                                        ";
                    }
                    // line 467
                    echo "

                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 470
                echo "
                                    ";
                // line 471
                if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
                    // line 472
                    echo "                                        <form method=\"post\" enctype=\"multipart/form-data\" class=\"comment-form\" action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_crate_user", array("opinion_id" => $this->getAttribute($context["opinions"], "id", array()))), "html", null, true);
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
                // line 484
                echo "                                </div>
                            </div>

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opinions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 488
            echo "                        ";
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            echo "
                    </div>

                ";
        }
        // line 492
        echo "
            </div>
        </div>
    </div>
</section>



</div>
";
        
        $__internal_d32f9edcadb9ba1dda4e32a74afd0e66ba353d63cfd84ee4c6b7efca25315d15->leave($__internal_d32f9edcadb9ba1dda4e32a74afd0e66ba353d63cfd84ee4c6b7efca25315d15_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1081 => 492,  1073 => 488,  1064 => 484,  1048 => 472,  1046 => 471,  1043 => 470,  1035 => 467,  1032 => 466,  1026 => 462,  1023 => 461,  1015 => 456,  1008 => 451,  1005 => 450,  1003 => 449,  999 => 447,  993 => 445,  991 => 444,  985 => 441,  978 => 438,  968 => 436,  964 => 434,  962 => 433,  956 => 429,  950 => 427,  944 => 425,  941 => 424,  935 => 422,  933 => 421,  928 => 420,  925 => 419,  923 => 418,  918 => 415,  915 => 414,  913 => 413,  910 => 412,  906 => 411,  902 => 409,  891 => 400,  887 => 398,  885 => 397,  881 => 396,  872 => 389,  868 => 387,  866 => 386,  862 => 385,  857 => 382,  855 => 381,  850 => 379,  842 => 373,  839 => 372,  831 => 367,  824 => 362,  821 => 361,  819 => 360,  813 => 357,  805 => 356,  799 => 352,  793 => 350,  787 => 348,  784 => 347,  778 => 345,  776 => 344,  771 => 343,  768 => 342,  766 => 341,  761 => 339,  754 => 334,  750 => 333,  746 => 331,  742 => 329,  736 => 327,  734 => 326,  731 => 325,  727 => 323,  719 => 319,  710 => 315,  694 => 303,  692 => 302,  689 => 301,  681 => 298,  678 => 297,  672 => 293,  669 => 292,  661 => 287,  654 => 282,  651 => 281,  649 => 280,  645 => 278,  639 => 276,  637 => 275,  631 => 272,  624 => 269,  614 => 267,  610 => 265,  608 => 264,  602 => 260,  596 => 258,  590 => 256,  587 => 255,  581 => 253,  579 => 252,  574 => 251,  571 => 250,  569 => 249,  564 => 246,  561 => 245,  559 => 244,  556 => 243,  552 => 242,  548 => 240,  537 => 231,  533 => 229,  531 => 228,  527 => 227,  518 => 220,  514 => 218,  512 => 217,  508 => 216,  503 => 213,  501 => 212,  496 => 210,  488 => 204,  485 => 203,  477 => 198,  470 => 193,  467 => 192,  465 => 191,  459 => 188,  451 => 187,  445 => 183,  439 => 181,  433 => 179,  430 => 178,  424 => 176,  422 => 175,  417 => 174,  414 => 173,  412 => 172,  407 => 170,  400 => 165,  396 => 164,  392 => 162,  388 => 160,  382 => 158,  380 => 157,  377 => 156,  371 => 152,  368 => 151,  366 => 150,  363 => 149,  354 => 147,  350 => 146,  347 => 145,  338 => 143,  334 => 142,  329 => 139,  314 => 125,  307 => 121,  302 => 119,  295 => 115,  290 => 112,  287 => 111,  280 => 107,  275 => 105,  268 => 101,  263 => 98,  256 => 94,  251 => 92,  243 => 87,  238 => 84,  235 => 83,  233 => 82,  226 => 78,  221 => 76,  213 => 71,  208 => 69,  205 => 68,  203 => 67,  199 => 65,  193 => 63,  190 => 62,  184 => 60,  180 => 58,  177 => 57,  175 => 56,  169 => 52,  156 => 46,  144 => 41,  141 => 40,  139 => 39,  136 => 38,  128 => 33,  125 => 32,  122 => 31,  118 => 29,  116 => 28,  110 => 27,  104 => 23,  98 => 21,  92 => 19,  89 => 18,  83 => 16,  81 => 15,  76 => 14,  73 => 13,  71 => 12,  65 => 8,  59 => 7,  50 => 5,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
{% block javascripts %}
    {{parent()}}
    <script src=\"{{ asset('assets/js/custom/users.js') }}\"></script>
    <script src=\"{{ asset('assets/js/custom/profile.js') }}\"></script>
{% endblock javascripts %}
{% block content %}
    <section class=\"profile-company-header\">
        <div class=\"container \">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-12 col-sm-12 col-xs-12 \">
                    {% if user.image | split('.') | last == 'png' or user.image | split('.') | last == 'jpg' or user.image | split('.') | last == 'jpeg' or user.image | split('.') | last == 'gif' %}
                        {% if user.anonimo == 'Si' %}
                            <img class=\"profile-picture-company center-block\"  src=\"{{ asset('assets/images/default.jpg') }}\"/>
                        {% elseif user.image != null %}
                            <img class=\"profile-picture-company center-block\" src=\"{{ asset('uploads/users/'~user.image) }}\"/>
                        {% endif %}
                    {% elseif user.image | split('.') | last == null %}
                        <img class=\"profile-picture-company center-block\" src=\"{{ asset('assets/images/default.jpg') }}\"/>
                    {% else %}
                        <img class=\"profile-picture-company center-block\" src=\"{{ user.image }}\"/>
                    {% endif %}
                </div>
                <div class=\"col-lg-9 col-md-12 col-sm-12 col-xs-12\" id=\"user-card\">
                    <h1 id=\"profile-username \">

                        {{ user.name }} {{ user.plastname}}
                        {% if user.anonimo == 'Si' %}
                            <i class=\"fa fa-user-secret\" aria-hidden=\"true\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Usuario anónimo\"></i>
                        {% endif %}
                        {% if app.user.id == user.id %}
                            <div class=\"btn-group\">
                                <a href=\"{{ path('user_edit') }}\" class=\"btn btn-default btn-xs\" type=\"button\"  aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Editar perfil
                                </a>
                            </div>
                        {% endif %}

                        {% if app.user.id != user.id %}
                            <div class=\"btn-group\">
                                <button class=\"pull-right btn btn-xs btn-success btn-follow {% if app.user|following(user) == true%} hidden {% endif %}\" data-followed=\"{{ user.id }}\">
                                    <i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>
                                    Seguir
                                </button>

                                <button class=\"btn btn-xs btn-default btn-unfollow {% if app.user|following(user) == false %} hidden {% endif %}\" data-followed=\"{{ user.id }}\">
                                    <i class=\"fa fa-user-times\" aria-hidden=\"true\"></i>
                                    Dejar de seguir
                                </button>
                            </div>
                        {% endif %}
                    </h1>

                    <h5><b>Biografía</b></h5>

                    {% if user.anonimo == 'Si' %}
                      {% if user.id != app.user.id %}
                        <p><em>Este usuario es un usuario privado, por lo tanto no puedes ver su información personal</em></p>
                      {% else %}
                          <p>{{ user.biography }}</p>
                      {% endif %}
                    {% else %}
                        <p>{{ user.biography }}</p>
                    {% endif %}

                    <div  class=\"row\">
                        {% set user_stats = user.id |user_stats%}
                        <div class=\"following-data\">
                            <a href=\"{{ path('following_users', {'email':user.email})}}\">
                                <i class=\"fa fa-user-plus fa-2x follwing-stats\" aria-hidden=\"true\"></i>
                                <span class=\"number-stat\">{{user_stats.following}}</span>
                            </a>
                        </div>

                        <div class=\"following-data\">
                            <a href=\"{{ path('followed_users', {'email':user.email})}}\">
                                <i class=\"fa fa-user-circle fa-2x followers-stats\" aria-hidden=\"true\"></i>
                                <span class=\"number-stat\">{{user_stats.followers}}</span>
                            </a>
                        </div>

                        {% if user.anonimo == 'Si' %}
                          {% if user.id != app.user.id %}
                            <div class=\"following-data\">
                                <a href=\"#\" hidden>
                                    <i class=\"fa fa-commenting fa-2x comment-stats\" aria-hidden=\"true\"></i>
                                    <span class=\"number-stat\">{{user_stats.opinions}}</span>
                                </a>
                            </div>

                            <div class=\"following-data\">
                                <a href=\"{{ path('user_likes', {'email':user.email})}}\" hidden>
                                    <i class=\"fa fa-heart fa-2x heart-stats\" aria-hidden=\"true\"></i>
                                    <span class=\"number-stat\">{{user_stats.likes}}</span>
                                </a>
                            </div>
                          {% else %}
                            <div class=\"following-data\">
                                <a href=\"#\" >
                                    <i class=\"fa fa-commenting fa-2x comment-stats\" aria-hidden=\"true\"></i>
                                    <span class=\"number-stat\">{{user_stats.opinions}}</span>
                                </a>
                            </div>
                            <div class=\"following-data\">
                                <a href=\"{{ path('user_likes', {'email':user.email})}}\" >
                                    <i class=\"fa fa-heart fa-2x heart-stats\" aria-hidden=\"true\"></i>
                                    <span class=\"number-stat\">{{user_stats.likes}}</span>
                                </a>
                            </div>
                          {% endif %}
                        {% else %}
                          <div class=\"following-data\">
                              <a href=\"#\" >
                                  <i class=\"fa fa-commenting fa-2x comment-stats\" aria-hidden=\"true\"></i>
                                  <span class=\"number-stat\">{{user_stats.opinions}}</span>
                              </a>
                          </div>
                          <div class=\"following-data\">
                              <a href=\"{{ path('user_likes', {'email':user.email})}}\" >
                                  <i class=\"fa fa-heart fa-2x heart-stats\" aria-hidden=\"true\"></i>
                                  <span class=\"number-stat\">{{user_stats.likes}}</span>
                              </a>
                          </div>
                        {% endif %}




                    </div>

                </div>
            </div>
        </div>
        <hr />
        <!-- /.container -->
    </section>

    {# con esto obtenemos el del usuario app.user.name #}
    <section class=\"opinions-section\">
        <div class=\"container\">
            <div class=\"row\">
                {%for message in app.session.flashbag().get('status')%}
                    <div class=\"alert alert-success\">{{message}}</div>
                {%endfor%}

                {%for message in app.session.flashbag().get('msg')%}
                    <div class=\"alert alert-success\">{{message}}</div>
                {%endfor%}

                {% if user.anonimo == 'Si'%}
                  {% if user.id != app.user.id %}
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <h2 class=\"text-muted text-center\">Este usuario es privado, por lo tanto no puedes ver sus opiniones</h2>
                    </div>
                  {% else %}
                  <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                      {% if user_stats.opinions == 0 %}
                          <h2 class=\"text-muted text-center\">{{user.name}} aún no ha realizado alguna opinión</h2>
                      {% else %}
                          <h1 class=\"page-header\">Opiniones</h1>
                      {% endif %}
                  </div>
                  <div class=\"col-lg-8 col-md-12 col-sm-12 col-xs-12\">
                      {% for opinions in pagination %}

                          <div class=\"panel panel-default\">
                              <div class=\"panel-heading \">
                                  <div class=\"row\">
                                      <div class=\"col-lg-1 col-md-2 col-sm-2 col-xs-2\">
                                          <a href=\"{{ path('user_profile',{'id':opinions.user.id}) }}\">
                                              <div class=\"avatar\">
                                                  {% if opinions.user.image | split('.') | last == 'png' or opinions.user.image | split('.') | last == 'jpg' or opinions.user.image | split('.') | last == 'jpeg' or opinions.user.image | split('.') | last == 'gif' %}
                                                      {% if opinions.user.anonimo == 'Si' %}
                                                          <img class=\"user-logo-opinion\" src=\"{{ asset('assets/images/default.jpg') }}\"/>
                                                      {% elseif opinions.user.image != null %}
                                                          <img class=\"user-logo-opinion\" src=\"{{ asset('uploads/users/'~opinions.user.image) }}\"/>
                                                      {% endif %}
                                                  {% elseif opinions.user.image | split('.') | last == null %}
                                                      <img class=\"user-logo-opinion\" src=\"{{ asset('assets/images/default.jpg') }}\"/>
                                                  {% else %}
                                                      <img class=\"user-logo-opinion\" src=\"{{ opinions.user.image }}\"/>
                                                  {% endif %}
                                              </div>
                                          </a>
                                      </div>
                                      <div class=\"col-lg-5 col-md-7 col-sm-7 col-xs-7\">
                                          <h5 class=\"media-heading\"><a href=\"{{ path('user_profile', {'id':opinions.user.id})}}\">{{opinions.user.name}} {{opinions.user.plastname}}</a></h5>
                                          <small class=\"text-muted\">{{opinions.createdAt|long_time}}</small>
                                      </div>
                                      <div class=\"col-lg-6 col-md-3 col-sm-3 col-xs-3\">
                                          {% if app.user != null %}
                                              {% if opinions.user.id == app.user.id %}
                                                  <div class=\"btn-group pull-right\">
                                                      <button class=\"btn btn-link btn-xs dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                          <i class=\"fa fa-cog\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down caret-opinioncomment\"></i>
                                                      </button>
                                                      <ul class=\"dropdown-menu\">
                                                          <li><a class=\"btn-delete-pub\" data-id=\"{{ opinions.id }}\">Eliminar</a></li>

                                                      </ul>
                                                  </div>
                                              {% endif %}
                                          {% endif%}
                                      </div>
                                  </div>
                              </div>


                              <div class=\"panel-body\">
                                  <p>{{opinions.generalcomment}}</p>

                                  {% if app.user != null%}
                                      <hr class=\"profiles-hr\">
                                      <div class=\"like\">

                                          <i data-id=\"{{opinions.id}}\" class=\"
                                             {% if app.user|liked(opinions) == true%}
                                                 hidden
                                             {% endif %}
                                             btn-like fa fa-heart\"
                                             aria-hidden=\"true\"
                                             data-toggle=\"tooltip\"
                                             data-placement=\"left\"
                                             title=\"Me gusta\">
                                          </i>

                                          <i data-id=\"{{opinions.id}}\" class=\"
                                             {% if app.user|liked(opinions) == false%}
                                                 hidden
                                             {% endif %}
                                             btn-unlike active fa fa-heart\"
                                             aria-hidden=\"true\"
                                             data-toggle=\"tooltip\"
                                             data-placement=\"left\"
                                             title=\"Ya no me gusta\">
                                          </i>
                                      </div>
                                      <hr class=\"profiles-hr\">
                                  {% endif %}
                              </div>
                              <div class=\"panel-footer\">
                                  {% for comments in comments%}

                                      {% if comments.opinion.id == opinions.id %}
                                          {% if comments.status != 'invalid'%}
                                              <div class=\"row\">
                                                  <div class=\"col-lg-1 col-md-2 col-sm-2 col-xs-2 \">
                                                      <div class=\"avatar  \">
                                                          {% if comments.user.image | split('.') | last == 'png' or comments.user.image | split('.') | last == 'jpg' or comments.user.image | split('.') | last == 'jpeg' or comments.user.image | split('.') | last == 'gif' %}
                                                              {% if comments.user.anonimo == 'Si' %}
                                                                  <img class=\" user-logo-opinion-comment\" src=\"{{ asset('assets/images/default.jpg') }}\"/>
                                                              {% elseif comments.user.image != null %}
                                                                  <img class=\" user-logo-opinion-comment\" src=\"{{ asset('uploads/users/'~comments.user.image) }}\"/>
                                                              {% endif %}
                                                          {% elseif comments.user.image | split('.') | last == null %}
                                                              <img class=\" user-logo-opinion-comment\" src=\"{{ asset('assets/images/default.jpg') }}\"/>
                                                          {% else %}
                                                              <img class=\" user-logo-opinion-comment\"src=\"{{ comments.user.image }}\"/>
                                                          {% endif %}
                                                      </div>
                                                  </div>
                                                  <div class=\"col-lg-5 col-md-7 col-sm-7 col-xs-7\">
                                                      <h5 class=\"media-heading \">
                                                          {% if comments.user.anonimo == 'Si' %}
                                                              <em>Anonimo</em>
                                                          {% else %}
                                                              <a href=\"{{ path('user_profile', {'id':comments.user.id}) }}\">{{ comments.user.name }} {{ comments.user.plastname }}</a>
                                                          {% endif %}
                                                          - <small class=\"text-muted\">{{comments.createdAt|long_time}}</small>
                                                      </h5>

                                                      <p >{{ comments.body }}</p>


                                                      {% if comments.image != null%}
                                                          <img class=\"center-block comment-img\" width=\"200\" src=\"{{ asset('uploads/comments/images/'~comments.image) }}\"/>
                                                      {% endif %}
                                                  </div>
                                                  <div class=\"col-lg-6 col-md-3 col-sm-3 col-xs-3\">
                                                      {% if app.user != null %}
                                                          {% if comments.user.id == app.user.id %}
                                                              <div class=\" btn-group pull-right  \">
                                                                  <button class=\"btn btn-link btn-xs dropdown-toggle \" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                      <i class=\"fa fa-cog\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down caret-opinioncomment\"></i>
                                                                  </button>
                                                                  <ul class=\"dropdown-menu \">
                                                                      <li><a class=\"btn-delete-comment\" data-id=\"{{ comments.id }}\">Eliminar</a></li>
                                                                  </ul>
                                                              </div>
                                                              <div class=\"clearfix\"></div>
                                                          {% endif %}
                                                      {% endif%}
                                                  </div>
                                              </div>
                                              <hr class=\"profiles-hr\">
                                          {% endif %}
                                      {% endif %}


                                  {% endfor %}

                                  {% if app.user != null%}
                                      <form method=\"post\" enctype=\"multipart/form-data\" class=\"comment-form\" action=\"{{ path('comment_crate_user', {'opinion_id':opinions.id}) }}\" >
                                          <div class=\"form-group\">
                                              <label for=\"nameInput\">Agregar comentario</label>
                                              <textarea type=\"text\" class=\"form-control\" id=\"nameInput\" placeholder=\"Escribe tu comentario...\" name=\"comment\" rows=\"2\" cols=\"80\"></textarea>
                                              <button type=\"submit\" class=\"btn btn-default btn-sm pull-right\">Comentar</button>

                                              <label for=\"file\" class=\"pull-right label-img\"><i class=\"fa fa-file-image-o\"></i></label>
                                              <input id=\"file\" name=\"image\" type=\"file\" >
                                          </div>
                                          <div class=\"clearfix\"></div>
                                      </form>
                                  {% endif %}
                              </div>
                          </div>

                      {% endfor %}
                      {{ knp_pagination_render(pagination) }}
                  </div>

                  {% endif %}

                {% else %}
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        {% if user_stats.opinions == 0 %}
                            <h2 class=\"text-muted text-center\">{{user.name}} aún no ha realizado alguna opinión</h2>
                        {% else %}
                            <h1 class=\"page-header\">Opiniones</h1>
                        {% endif %}
                    </div>
                    <div class=\"col-lg-8 col-md-12 col-sm-12 col-xs-12\">
                        {% for opinions in pagination %}

                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading \">
                                    <div class=\"row\">
                                        <div class=\"col-lg-1 col-md-2 col-sm-2 col-xs-2\">
                                            <a href=\"{{ path('user_profile',{'id':opinions.user.id}) }}\">
                                                <div class=\"avatar\">
                                                    {% if opinions.user.image | split('.') | last == 'png' or opinions.user.image | split('.') | last == 'jpg' or opinions.user.image | split('.') | last == 'jpeg' or opinions.user.image | split('.') | last == 'gif' %}
                                                        {% if opinions.user.anonimo == 'Si' %}
                                                            <img class=\"user-logo-opinion\" src=\"{{ asset('assets/images/default.jpg') }}\"/>
                                                        {% elseif opinions.user.image != null %}
                                                            <img class=\"user-logo-opinion\" src=\"{{ asset('uploads/users/'~opinions.user.image) }}\"/>
                                                        {% endif %}
                                                    {% elseif opinions.user.image | split('.') | last == null %}
                                                        <img class=\"user-logo-opinion\" src=\"{{ asset('assets/images/default.jpg') }}\"/>
                                                    {% else %}
                                                        <img class=\"user-logo-opinion\" src=\"{{ opinions.user.image }}\"/>
                                                    {% endif %}
                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"col-lg-5 col-md-7 col-sm-7 col-xs-7\">
                                            <h5 class=\"media-heading\"><a href=\"{{ path('user_profile', {'id':opinions.user.id})}}\">{{opinions.user.name}} {{opinions.user.plastname}}</a></h5>
                                            <small class=\"text-muted\">{{opinions.createdAt|long_time}}</small>
                                        </div>
                                        <div class=\"col-lg-6 col-md-3 col-sm-3 col-xs-3\">
                                            {% if app.user != null %}
                                                {% if opinions.user.id == app.user.id %}
                                                    <div class=\"btn-group pull-right\">
                                                        <button class=\"btn btn-link btn-xs dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                            <i class=\"fa fa-cog\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down caret-opinioncomment\"></i>
                                                        </button>
                                                        <ul class=\"dropdown-menu\">
                                                            <li><a class=\"btn-delete-pub\" data-id=\"{{ opinions.id }}\">Eliminar</a></li>

                                                        </ul>
                                                    </div>
                                                {% endif %}
                                            {% endif%}
                                        </div>
                                    </div>
                                </div>


                                <div class=\"panel-body\">
                                    <p>{{opinions.generalcomment}}</p>

                                    {% if app.user != null%}
                                        <hr class=\"profiles-hr\">
                                        <div class=\"like\">

                                            <i data-id=\"{{opinions.id}}\" class=\"
                                               {% if app.user|liked(opinions) == true%}
                                                   hidden
                                               {% endif %}
                                               btn-like fa fa-heart\"
                                               aria-hidden=\"true\"
                                               data-toggle=\"tooltip\"
                                               data-placement=\"left\"
                                               title=\"Me gusta\">
                                            </i>

                                            <i data-id=\"{{opinions.id}}\" class=\"
                                               {% if app.user|liked(opinions) == false%}
                                                   hidden
                                               {% endif %}
                                               btn-unlike active fa fa-heart\"
                                               aria-hidden=\"true\"
                                               data-toggle=\"tooltip\"
                                               data-placement=\"left\"
                                               title=\"Ya no me gusta\">
                                            </i>
                                        </div>
                                        <hr class=\"profiles-hr\">
                                    {% endif %}
                                </div>
                                <div class=\"panel-footer\">
                                    {% for comments in comments%}

                                        {% if comments.opinion.id == opinions.id %}
                                            {% if comments.status != 'invalid'%}
                                                <div class=\"row\">
                                                    <div class=\"col-lg-1 col-md-2 col-sm-2 col-xs-2 \">
                                                        <div class=\"avatar  \">
                                                            {% if comments.user.image | split('.') | last == 'png' or comments.user.image | split('.') | last == 'jpg' or comments.user.image | split('.') | last == 'jpeg' or comments.user.image | split('.') | last == 'gif' %}
                                                                {% if comments.user.anonimo == 'Si' %}
                                                                    <img class=\" user-logo-opinion-comment\" src=\"{{ asset('assets/images/default.jpg') }}\"/>
                                                                {% elseif comments.user.image != null %}
                                                                    <img class=\" user-logo-opinion-comment\" src=\"{{ asset('uploads/users/'~comments.user.image) }}\"/>
                                                                {% endif %}
                                                            {% elseif comments.user.image | split('.') | last == null %}
                                                                <img class=\" user-logo-opinion-comment\" src=\"{{ asset('assets/images/default.jpg') }}\"/>
                                                            {% else %}
                                                                <img class=\" user-logo-opinion-comment\"src=\"{{ comments.user.image }}\"/>
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                    <div class=\"col-lg-5 col-md-7 col-sm-7 col-xs-7\">
                                                        <h5 class=\"media-heading \">
                                                            {% if comments.user.anonimo == 'Si' %}
                                                                <em>Anonimo</em>
                                                            {% else %}
                                                                <a href=\"{{ path('user_profile', {'id':comments.user.id}) }}\">{{ comments.user.name }} {{ comments.user.plastname }}</a>
                                                            {% endif %}
                                                            - <small class=\"text-muted\">{{comments.createdAt|long_time}}</small>
                                                        </h5>

                                                        <p >{{ comments.body }}</p>


                                                        {% if comments.image != null%}
                                                            <img class=\"center-block comment-img\" width=\"200\" src=\"{{ asset('uploads/comments/images/'~comments.image) }}\"/>
                                                        {% endif %}
                                                    </div>
                                                    <div class=\"col-lg-6 col-md-3 col-sm-3 col-xs-3\">
                                                        {% if app.user != null %}
                                                            {% if comments.user.id == app.user.id %}
                                                                <div class=\" btn-group pull-right  \">
                                                                    <button class=\"btn btn-link btn-xs dropdown-toggle \" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                        <i class=\"fa fa-cog\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down caret-opinioncomment\"></i>
                                                                    </button>
                                                                    <ul class=\"dropdown-menu \">
                                                                        <li><a class=\"btn-delete-comment\" data-id=\"{{ comments.id }}\">Eliminar</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class=\"clearfix\"></div>
                                                            {% endif %}
                                                        {% endif%}
                                                    </div>
                                                </div>
                                                <hr class=\"profiles-hr\">
                                            {% endif %}
                                        {% endif %}


                                    {% endfor %}

                                    {% if app.user != null%}
                                        <form method=\"post\" enctype=\"multipart/form-data\" class=\"comment-form\" action=\"{{ path('comment_crate_user', {'opinion_id':opinions.id}) }}\" >
                                            <div class=\"form-group\">
                                                <label for=\"nameInput\">Agregar comentario</label>
                                                <textarea type=\"text\" class=\"form-control\" id=\"nameInput\" placeholder=\"Escribe tu comentario...\" name=\"comment\" rows=\"2\" cols=\"80\"></textarea>
                                                <button type=\"submit\" class=\"btn btn-default btn-sm pull-right\">Comentar</button>

                                                <label for=\"file\" class=\"pull-right label-img\"><i class=\"fa fa-file-image-o\"></i></label>
                                                <input id=\"file\" name=\"image\" type=\"file\" >
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </form>
                                    {% endif %}
                                </div>
                            </div>

                        {% endfor %}
                        {{ knp_pagination_render(pagination) }}
                    </div>

                {% endif %}

            </div>
        </div>
    </div>
</section>



</div>
{% endblock %}
", "AppBundle:User:profile.html.twig", "C:\\wamp\\www\\myjobs\\src\\AppBundle/Resources/views/User/profile.html.twig");
    }
}
