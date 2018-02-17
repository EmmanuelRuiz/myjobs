<?php

/* AppBundle:User:users.html.twig */
class __TwigTemplate_803039eb1cc39aad0ff0306ae03095a5ce3db303b089f8e68b335a0269013b93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layoutprofiles.html.twig", "AppBundle:User:users.html.twig", 1);
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
        $__internal_a5f947d35d42c58d10d9efb5bcf496c9490ceb5d816ee5edaa2c66aee2955aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f947d35d42c58d10d9efb5bcf496c9490ceb5d816ee5edaa2c66aee2955aae->enter($__internal_a5f947d35d42c58d10d9efb5bcf496c9490ceb5d816ee5edaa2c66aee2955aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5f947d35d42c58d10d9efb5bcf496c9490ceb5d816ee5edaa2c66aee2955aae->leave($__internal_a5f947d35d42c58d10d9efb5bcf496c9490ceb5d816ee5edaa2c66aee2955aae_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec19730c04b0f95c5f2b4e825d2e1587f995f8e077b576cffc67e425db2edf3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec19730c04b0f95c5f2b4e825d2e1587f995f8e077b576cffc67e425db2edf3b->enter($__internal_ec19730c04b0f95c5f2b4e825d2e1587f995f8e077b576cffc67e425db2edf3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/users.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ec19730c04b0f95c5f2b4e825d2e1587f995f8e077b576cffc67e425db2edf3b->leave($__internal_ec19730c04b0f95c5f2b4e825d2e1587f995f8e077b576cffc67e425db2edf3b_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_d88cefc57cbee63c4d04d993667f50f623193e99af54da69f1e9ecd6358d07a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d88cefc57cbee63c4d04d993667f50f623193e99af54da69f1e9ecd6358d07a5->enter($__internal_d88cefc57cbee63c4d04d993667f50f623193e99af54da69f1e9ecd6358d07a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <section class=\"people-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 box-form\">
                    <h1 id=\"user-result\">Usuarios registrados</h1>
                    <div class=\"count\">
                        <span class=\"label label-primary\">
                            Total de personas: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "
                        </span>
                    </div>

                    <hr />

                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 21
            echo "                        <div class=\"media\">
                            <div class=\"media-left\">
                                ";
            // line 24
            echo "                                
                                ";
            // line 25
            if (((((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($context["user"], "image", array()), ".")) == "png") || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($context["user"], "image", array()), ".")) == "jpg")) || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($context["user"], "image", array()), ".")) == "jpeg")) || (twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($context["user"], "image", array()), ".")) == "gif"))) {
                echo "    
                                    ";
                // line 26
                if (($this->getAttribute($context["user"], "anonimo", array()) == "Si")) {
                    // line 27
                    echo "                                        <img class=\"company-pp-list img-circle\"  src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.jpg"), "html", null, true);
                    echo "\"/>
                                    ";
                } elseif (($this->getAttribute(                // line 28
$context["user"], "image", array()) != null)) {
                    // line 29
                    echo "                                        <img class=\"company-pp-list img-circle\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/users/" . $this->getAttribute($context["user"], "image", array()))), "html", null, true);
                    echo "\"/>
                                    ";
                }
                // line 31
                echo "                                ";
            } elseif ((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($context["user"], "image", array()), ".")) == null)) {
                // line 32
                echo "                                    <img class=\"company-pp-list img-circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.jpg"), "html", null, true);
                echo "\"/>
                                ";
            } else {
                // line 34
                echo "                                    <img class=\"company-pp-list img-circle\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "image", array()), "html", null, true);
                echo "\"/>
                                ";
            }
            // line 36
            echo "                            </div>

                            <div class=\"media-body\">
                                <h4 class=\"media-heading\">
                                    ";
            // line 40
            if (($this->getAttribute($context["user"], "anonimo", array()) == "Si")) {
                // line 41
                echo "                                        <em>Anonimo</em>
                                    ";
            } else {
                // line 43
                echo "                                        <a class=\"links-search\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "plastname", array()), "html", null, true);
                echo "</a>
                                    ";
            }
            // line 45
            echo "
                                </h4>

                                ";
            // line 48
            if (($this->getAttribute($context["user"], "anonimo", array()) == "Si")) {
                // line 49
                echo "                                    <em>Este usuario es privado, por lo tanto no puedes ver su información personal</em>
                                ";
            } else {
                // line 51
                echo "                                    <p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "biography", array()), "html", null, true);
                echo "<p>
                                    ";
            }
            // line 53
            echo "
                                    ";
            // line 54
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) != $this->getAttribute($context["user"], "id", array()))) {
                // line 55
                echo "                                    <div class=\"buttons-following\" >
                                        <button class=\" btn btn-xs btn-success btn-follow ";
                // line 56
                if (($this->env->getExtension('AppBundle\Twig\FollowingExtension')->followingFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), $context["user"]) == true)) {
                    echo " hidden ";
                }
                echo "\" data-followed=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\">
                                            <i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>
                                            Seguir
                                        </button>

                                        <button class=\"btn btn-xs btn-default btn-unfollow ";
                // line 61
                if (($this->env->getExtension('AppBundle\Twig\FollowingExtension')->followingFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), $context["user"]) == false)) {
                    echo " hidden ";
                }
                echo "\" data-followed=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\">
                                            <i class=\"fa fa-user-times\" aria-hidden=\"true\"></i>
                                            Dejar de seguir
                                        </button>
                                    </div>
                                ";
            }
            // line 67
            echo "                            </div>
                            <div class=\"clearfix\"></div>
                            <hr>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                    <div class=\"navigation\">
                        ";
        // line 73
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>

    </section>



";
        
        $__internal_d88cefc57cbee63c4d04d993667f50f623193e99af54da69f1e9ecd6358d07a5->leave($__internal_d88cefc57cbee63c4d04d993667f50f623193e99af54da69f1e9ecd6358d07a5_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 73,  206 => 72,  196 => 67,  183 => 61,  171 => 56,  168 => 55,  166 => 54,  163 => 53,  157 => 51,  153 => 49,  151 => 48,  146 => 45,  136 => 43,  132 => 41,  130 => 40,  124 => 36,  118 => 34,  112 => 32,  109 => 31,  103 => 29,  101 => 28,  96 => 27,  94 => 26,  90 => 25,  87 => 24,  83 => 21,  79 => 20,  70 => 14,  61 => 7,  55 => 6,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%extends \"AppBundle:Layouts:layoutprofiles.html.twig\"%}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/js/custom/users.js') }}\"></script>
{% endblock %}
{% block content %}
    <section class=\"people-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 box-form\">
                    <h1 id=\"user-result\">Usuarios registrados</h1>
                    <div class=\"count\">
                        <span class=\"label label-primary\">
                            Total de personas: {{ pagination.getTotalItemCount }}
                        </span>
                    </div>

                    <hr />

                    {% for user in pagination %}
                        <div class=\"media\">
                            <div class=\"media-left\">
                                {#mostramos los datos del usuario#}
                                
                                {% if user.image | split('.') | last == 'png' or user.image | split('.') | last == 'jpg' or user.image | split('.') | last == 'jpeg' or user.image | split('.') | last == 'gif' %}    
                                    {% if user.anonimo == 'Si' %}
                                        <img class=\"company-pp-list img-circle\"  src=\"{{ asset('assets/images/default.jpg') }}\"/>
                                    {% elseif user.image != null %}
                                        <img class=\"company-pp-list img-circle\" src=\"{{ asset('uploads/users/'~user.image) }}\"/>
                                    {% endif %}
                                {% elseif user.image | split('.') | last == null %}
                                    <img class=\"company-pp-list img-circle\" src=\"{{ asset('assets/images/default.jpg') }}\"/>
                                {% else %}
                                    <img class=\"company-pp-list img-circle\" src=\"{{ user.image }}\"/>
                                {% endif %}
                            </div>

                            <div class=\"media-body\">
                                <h4 class=\"media-heading\">
                                    {% if user.anonimo == 'Si' %}
                                        <em>Anonimo</em>
                                    {% else %}
                                        <a class=\"links-search\" href=\"{{ path('user_profile', {'id':user.id})}}\">{{user.name}} {{user.plastname}}</a>
                                    {% endif %}

                                </h4>

                                {% if user.anonimo == 'Si' %}
                                    <em>Este usuario es privado, por lo tanto no puedes ver su información personal</em>
                                {% else %}
                                    <p>{{ user.biography}}<p>
                                    {% endif %}

                                    {% if app.user.id != user.id %}
                                    <div class=\"buttons-following\" >
                                        <button class=\" btn btn-xs btn-success btn-follow {% if app.user|following(user) == true%} hidden {% endif %}\" data-followed=\"{{ user.id }}\">
                                            <i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>
                                            Seguir
                                        </button>

                                        <button class=\"btn btn-xs btn-default btn-unfollow {% if app.user|following(user) == false %} hidden {% endif %}\" data-followed=\"{{ user.id }}\">
                                            <i class=\"fa fa-user-times\" aria-hidden=\"true\"></i>
                                            Dejar de seguir
                                        </button>
                                    </div>
                                {% endif %}
                            </div>
                            <div class=\"clearfix\"></div>
                            <hr>
                        </div>
                    {% endfor%}
                    <div class=\"navigation\">
                        {{ knp_pagination_render(pagination) }}
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>

    </section>



{%endblock%}", "AppBundle:User:users.html.twig", "C:\\wamp\\www\\myjobs\\src\\AppBundle/Resources/views/User/users.html.twig");
    }
}
