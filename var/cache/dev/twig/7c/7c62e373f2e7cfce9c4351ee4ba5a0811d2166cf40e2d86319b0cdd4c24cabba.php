<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* frontblog/show.html.twig */
class __TwigTemplate_88184bcd4dfe1864c8e35556fb4ec4316394c516e2588ccdad1d6af76ac67f7d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontblog/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontblog/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "frontblog/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <!-- Home -->

    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/blog_background.jpg"), "html", null, true);
        echo "\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">Blog</div>
        </div>
    </div>


    <!-- Blog -->

    <div class=\"blog\">
        <div class=\"container\">
            <div class=\"row\">

                <!-- Blog Content -->
                <div class=\"col-lg-8\">

                    <div class=\"blog_post_container\">

                        <!-- Blog Post -->
                        <div class=\"blog_post\">
                            <div class=\"blog_post_image\">
                                <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 29, $this->source); })()), "picture", [], "any", false, false, false, 29))), "html", null, true);
        echo "\" alt=\"https://unsplash.com/@stilclassics\">

                            </div>
                        </div>
                        <div class=\"blog_post_meta\">
                            <ul>
                                <li class=\"blog_post_meta_item\"><a href=\"\"><i class=\"fa fa-user-circle\"> </i> ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 35, $this->source); })()), "community", [], "any", false, false, false, 35), "grpName", [], "any", false, false, false, 35), "html", null, true);
        echo " </a></li>
                                <li class=\"blog_post_meta_item\"><a href=\"\"><i class=\"fa fa-comment \"> Comment</i> ";
        // line 36
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 36, $this->source); })()), "commentArticles", [], "any", false, false, false, 36)), "html", null, true);
        echo " </a></li>
                                <li class=\"blog_post_meta_item\"><a href=\"\"><i class=\"fa fa-clock-o\"> </i> ";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 37, $this->source); })()), "DateAjout", [], "any", false, false, false, 37)), "html", null, true);
        echo "</a></li>
                                <li class=\"blog_post_meta_item\">


                                    ";
        // line 41
        $context["test"] = "false";
        // line 42
        echo "
                                    ";
        // line 43
        $context["test2"] = "false";
        // line 44
        echo "
                                    ";
        // line 45
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 46
            echo "
                                        ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 47, $this->source); })()), "likes", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 48
                echo "                                            ";
                $context["test2"] = "true";
                // line 49
                echo "


                                            ";
                // line 52
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 52), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52)))) {
                    // line 53
                    echo "
                                                <form action=\"";
                    // line 54
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_like");
                    echo "\" method =\"post\">

                                                    <input type=\"hidden\" value=\"";
                    // line 56
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56), "html", null, true);
                    echo "\" name=\"id\">

                                                    ";
                    // line 58
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 58, $this->source); })()), "likes", [], "any", false, false, false, 58)), "html", null, true);
                    echo "   <button class=\"btn btn-small btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-o-up \"   >  </a> </button>
                                                    ";
                    // line 59
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 59, $this->source); })()), "dislike", [], "any", false, false, false, 59)), "html", null, true);
                    echo "      <button class=\"btn btn-small btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-down \"  >  </a> </button>

                                                </form>
                                                ";
                    // line 62
                    $context["test"] = "true";
                    // line 63
                    echo "                                                ";
                    $context["test2"] = "true";
                    // line 64
                    echo "

                                            ";
                }
                // line 67
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "
                                        ";
            // line 69
            if (((0 === twig_compare((isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 69, $this->source); })()), "false")) && (0 === twig_compare((isset($context["test2"]) || array_key_exists("test2", $context) ? $context["test2"] : (function () { throw new RuntimeError('Variable "test2" does not exist.', 69, $this->source); })()), "true")))) {
                // line 70
                echo "
                                            <form action=\"";
                // line 71
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_like");
                echo "\" method =\"post\">

                                                <input type=\"hidden\" value=\"";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73), "html", null, true);
                echo "\" name=\"id\">

                                                ";
                // line 75
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 75, $this->source); })()), "likes", [], "any", false, false, false, 75)), "html", null, true);
                echo "   <button class=\"btn btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-up  \"  >  </a> </button>
                                                ";
                // line 76
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 76, $this->source); })()), "dislike", [], "any", false, false, false, 76)), "html", null, true);
                echo " <button class=\"btn btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-o-down \"   > </a> </button>

                                            </form>
                                        ";
            }
            // line 80
            echo "
                                        ";
            // line 81
            if ((0 === twig_compare((isset($context["test2"]) || array_key_exists("test2", $context) ? $context["test2"] : (function () { throw new RuntimeError('Variable "test2" does not exist.', 81, $this->source); })()), "false"))) {
                // line 82
                echo "                                            <form action=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_like");
                echo "\" method =\"post\">

                                                <input type=\"hidden\" value=\"";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84), "html", null, true);
                echo "\" name=\"id\">

                                                ";
                // line 86
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 86, $this->source); })()), "likes", [], "any", false, false, false, 86)), "html", null, true);
                echo "   <button class=\"btn btn-info\" href=\"#\">   <a class=\"fa fa-thumbs-up  \"   > </a> </button>
                                                ";
                // line 87
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 87, $this->source); })()), "dislike", [], "any", false, false, false, 87)), "html", null, true);
                echo "      <button class=\"btn btn-small btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-down \"  ></a> </button>             </form>
                                        ";
            }
            // line 89
            echo "
                                    ";
        }
        // line 91
        echo "




                                </li>
                            </ul>
                        </div>
                        <div class=\"blog_post_title\"><a href=\"#\">";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 99, $this->source); })()), "title", [], "any", false, false, false, 99), "html", null, true);
        echo "</a></div>
                        <div class=\"blog_post_text\">
                            <p>";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 101, $this->source); })()), "description", [], "any", false, false, false, 101), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"blog_post_title\"><a href=\"#\">Commentaire</a></div>


                        ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 106, $this->source); })()), "commentArticles", [], "any", false, false, false, 106));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 107
            echo "
                            <div class=\"blog_post_text\">
                                <form method=\"post\" action=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_article_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 109)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Vous voulez supprimer votre commentaire?');\">

                                    <p>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["b"], "user", [], "any", false, false, false, 111), "username", [], "any", false, false, false, 111), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "contenu", [], "any", false, false, false, 111), "html", null, true);
            echo "
                                        ";
            // line 112
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 113
                echo "
                                        ";
                // line 114
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["b"], "user", [], "any", false, false, false, 114), "id", [], "any", false, false, false, 114), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "user", [], "any", false, false, false, 114), "id", [], "any", false, false, false, 114)))) {
                    // line 115
                    echo "
                                        <button class=\"btn btn-danger\" href=\"#\"> Delete <a class=\"fa fa-trash-o \"> </a> </button>
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        <input type=\"hidden\" name=\"idb\" value=\"";
                    // line 118
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["b"], "blogs", [], "any", false, false, false, 118), "id", [], "any", false, false, false, 118), "html", null, true);
                    echo "\">

                                        <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 120
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 120))), "html", null, true);
                    echo "\">
                                </form>

                                ";
                }
                // line 124
                echo "                                ";
            }
            // line 125
            echo "                                </p>

                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "
                    </div>



                    <form action=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_article_new");
        echo "\" method =\"post\">

                        <input type=\"text\" name=\"comment\">
                        <input type=\"hidden\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 138, $this->source); })()), "id", [], "any", false, false, false, 138), "html", null, true);
        echo "\" name=\"id\">

                        <input type=\"submit\">
                    </form>


                </div>

                        <!-- Blog Post -->


                        <!-- Blog Post -->


                <!-- Blog Sidebar -->


            </div>
        </div>
    </div>

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontblog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 138,  333 => 135,  326 => 130,  316 => 125,  313 => 124,  306 => 120,  301 => 118,  296 => 115,  294 => 114,  291 => 113,  289 => 112,  283 => 111,  278 => 109,  274 => 107,  270 => 106,  262 => 101,  257 => 99,  247 => 91,  243 => 89,  238 => 87,  234 => 86,  229 => 84,  223 => 82,  221 => 81,  218 => 80,  211 => 76,  207 => 75,  202 => 73,  197 => 71,  194 => 70,  192 => 69,  189 => 68,  183 => 67,  178 => 64,  175 => 63,  173 => 62,  167 => 59,  163 => 58,  158 => 56,  153 => 54,  150 => 53,  148 => 52,  143 => 49,  140 => 48,  136 => 47,  133 => 46,  131 => 45,  128 => 44,  126 => 43,  123 => 42,  121 => 41,  114 => 37,  110 => 36,  106 => 35,  97 => 29,  73 => 8,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block content %}
    <!-- Home -->

    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"{{ asset('front/images/blog_background.jpg') }}\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">Blog</div>
        </div>
    </div>


    <!-- Blog -->

    <div class=\"blog\">
        <div class=\"container\">
            <div class=\"row\">

                <!-- Blog Content -->
                <div class=\"col-lg-8\">

                    <div class=\"blog_post_container\">

                        <!-- Blog Post -->
                        <div class=\"blog_post\">
                            <div class=\"blog_post_image\">
                                <img src=\"{{ asset('uploads/images/' ~ blog.picture) }}\" alt=\"https://unsplash.com/@stilclassics\">

                            </div>
                        </div>
                        <div class=\"blog_post_meta\">
                            <ul>
                                <li class=\"blog_post_meta_item\"><a href=\"\"><i class=\"fa fa-user-circle\"> </i> {{blog.community.grpName}} </a></li>
                                <li class=\"blog_post_meta_item\"><a href=\"\"><i class=\"fa fa-comment \"> Comment</i> {{blog.commentArticles|length}} </a></li>
                                <li class=\"blog_post_meta_item\"><a href=\"\"><i class=\"fa fa-clock-o\"> </i> {{blog.DateAjout |date() }}</a></li>
                                <li class=\"blog_post_meta_item\">


                                    {% set test = 'false' %}

                                    {% set test2 = 'false' %}

                                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}

                                        {% for b in blog.likes %}
                                            {% set test2 = 'true' %}



                                            {% if b.id == app.user.id %}

                                                <form action=\"{{ path('remove_like') }}\" method =\"post\">

                                                    <input type=\"hidden\" value=\"{{blog.id}}\" name=\"id\">

                                                    {{blog.likes|length}}   <button class=\"btn btn-small btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-o-up \"   >  </a> </button>
                                                    {{blog.dislike|length}}      <button class=\"btn btn-small btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-down \"  >  </a> </button>

                                                </form>
                                                {% set test = 'true' %}
                                                {% set test2 = 'true' %}


                                            {% endif %}
                                        {% endfor %}

                                        {% if test == \"false\" and test2 == \"true\"  %}

                                            <form action=\"{{ path('add_like') }}\" method =\"post\">

                                                <input type=\"hidden\" value=\"{{blog.id}}\" name=\"id\">

                                                {{blog.likes|length}}   <button class=\"btn btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-up  \"  >  </a> </button>
                                                {{blog.dislike|length}} <button class=\"btn btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-o-down \"   > </a> </button>

                                            </form>
                                        {% endif %}

                                        {% if test2 == \"false\"  %}
                                            <form action=\"{{ path('add_like') }}\" method =\"post\">

                                                <input type=\"hidden\" value=\"{{blog.id}}\" name=\"id\">

                                                {{blog.likes|length}}   <button class=\"btn btn-info\" href=\"#\">   <a class=\"fa fa-thumbs-up  \"   > </a> </button>
                                                {{blog.dislike|length}}      <button class=\"btn btn-small btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-down \"  ></a> </button>             </form>
                                        {% endif %}

                                    {% endif %}





                                </li>
                            </ul>
                        </div>
                        <div class=\"blog_post_title\"><a href=\"#\">{{ blog.title }}</a></div>
                        <div class=\"blog_post_text\">
                            <p>{{ blog.description }}</p>
                        </div>
                        <div class=\"blog_post_title\"><a href=\"#\">Commentaire</a></div>


                        {% for b in blog.commentArticles %}

                            <div class=\"blog_post_text\">
                                <form method=\"post\" action=\"{{ path('comment_article_delete', {'id': b.id}) }}\" onsubmit=\"return confirm('Vous voulez supprimer votre commentaire?');\">

                                    <p>{{ b.user.username }} : {{ b.contenu }}
                                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}

                                        {% if b.user.id == app.user.id %}

                                        <button class=\"btn btn-danger\" href=\"#\"> Delete <a class=\"fa fa-trash-o \"> </a> </button>
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        <input type=\"hidden\" name=\"idb\" value=\"{{b.blogs.id}}\">

                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ b.id) }}\">
                                </form>

                                {% endif %}
                                {% endif %}
                                </p>

                            </div>

                        {% endfor %}

                    </div>



                    <form action=\"{{ path('comment_article_new') }}\" method =\"post\">

                        <input type=\"text\" name=\"comment\">
                        <input type=\"hidden\" value=\"{{blog.id}}\" name=\"id\">

                        <input type=\"submit\">
                    </form>


                </div>

                        <!-- Blog Post -->


                        <!-- Blog Post -->


                <!-- Blog Sidebar -->


            </div>
        </div>
    </div>

  {% endblock %}
", "frontblog/show.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\frontblog\\show.html.twig");
    }
}
