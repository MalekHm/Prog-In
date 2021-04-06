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

/* place_front/list.html.twig */
class __TwigTemplate_617424d042c8c16319c3f078f845407fec24ac59f13a159193e6e67adfb5a88d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "place_front/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "place_front/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "place_front/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Recommandations
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/991.jpg"), "html", null, true);
        echo "\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">Recommandations</div>
        </div>
    </div>

    <!-- Blog -->

    <div class=\"blog\">
        <div class=\"container\">
            <div class=\"row\">

                <!-- Blog Content -->

                <div class=\"col-lg-8\">

                    <div class=\"blog_post_container\">
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 25
            echo "
                        <div class=\"blog_post\">
                            <div class=\"blog_post_image\">
                                <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["p"], "picturePlace", [], "any", false, false, false, 28))), "html", null, true);
            echo "\" alt=\"https://unsplash.com/@stilclassics\">
                                <div class=\"blog_post_date d-flex flex-column align-items-center justify-content-center\">
                                    <div class=\"blog_post_month\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nbView", [], "any", false, false, false, 30), "html", null, true);
            echo " <i class=\"fa fa-eye\"></i></div>

                                </div>
                            </div>
                            <div class=\"blog_post_meta\">
                                <ul>
                                    <li class=\"blog_post_meta_item\"><a href=\"\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "category", [], "any", false, false, false, 36), "html", null, true);
            echo "</a></li>
                                    <li class=\"blog_post_meta_item\"><a href=\"\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "location", [], "any", false, false, false, 37), "html", null, true);
            echo "</a></li>
                                    <li class=\"blog_post_meta_item\"><a href=\"\">3 Comments</a></li>
                                    <li class=\"blog_post_meta_item\"><a href=\"\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nbView", [], "any", false, false, false, 39), "html", null, true);
            echo "  <i class=\"fa fa-eye\"></i></a></li>
                                </ul>
                            </div>
                            <div class=\"blog_post_title\"><a href=\"#\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "titlePlace", [], "any", false, false, false, 42), "html", null, true);
            echo "</a></div>
                            <div class=\"blog_post_text\">
                                <p>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "DescriptionPlace", [], "any", false, false, false, 44), "html", null, true);
            echo "</p>
                            </div>
                            <div class=\"blog_post_link\"><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("place_frontconsult", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">Consulter</a></div>
                             </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                    </div>


                    <div class=\"blog_navigation\">
                        <ul>
                            <li class=\"blog_dot active\"><div></div>01.</li>
                            <li class=\"blog_dot\"><div></div>02.</li>
                            <li class=\"blog_dot\"><div></div>03.</li>
                        </ul>
                    </div>
                </div>

                <!-- Blog Sidebar -->

                <div class=\"col-lg-4 sidebar_col\">



                    <!-- Sidebar Archives -->
                    <div class=\"sidebar_categories\">
                        <div class=\"sidebar_title\">Categories</div>
                        <div class=\"sidebar_list\">
                            <ul>
                                ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 73
            echo "                                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("place_frontlistcategory", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nameCategoryPlace", [], "any", false, false, false, 73), "html", null, true);
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                            </ul>
                        </div>
                    </div>

                    <!-- Sidebar Latest Posts -->

                    <div class=\"sidebar_latest_posts\">
                        <div class=\"sidebar_title\">Latest Posts</div>
                        <div class=\"latest_posts_container\">
                            <ul>
                                 ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 85, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 86
            echo "                                     ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["p"], "showPlace", [], "any", false, false, false, 86), 1))) {
                // line 87
                echo "

                                <!-- Latest Post -->
                                <li class=\"latest_post clearfix\">
                                    <div class=\"latest_post_image\">
                                        <a href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("place_frontconsult", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 92)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["p"], "picturePlace", [], "any", false, false, false, 92))), "html", null, true);
                echo "\" alt=\"\"></a>
                                    </div>
                                    <div class=\"latest_post_content\">
                                        <div class=\"latest_post_title trans_200\"><a href=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("place_frontconsult", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 95)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "titlePlace", [], "any", false, false, false, 95), "html", null, true);
                echo "</a></div>
                                        <div class=\"latest_post_meta\">
                                            <div class=\"latest_post_author trans_200\"><a href=\"\">";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "location", [], "any", false, false, false, 97), "html", null, true);
                echo "</a></div>
                                            <div class=\"latest_post_date trans_200\"><a href=\"\">";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nbView", [], "any", false, false, false, 98), "html", null, true);
                echo " <i class=\"fa fa-eye\"></i></a></div>
                                        </div>
                                    </div>
                                </li>
                                     ";
            }
            // line 103
            echo "                               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                                <!-- Latest Post -->


                                <!-- Latest Post -->


                                <!-- Latest Post -->


                            </ul>
                        </div>
                    </div>

                    <!-- Sidebar Gallery -->
                    <div class=\"sidebar_gallery\">
                        <div class=\"sidebar_title\">Instagram</div>
                        <div class=\"gallery_container\">
                            <ul class=\"gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap\">
                                <li class=\"gallery_item\">
                                    <a class=\"colorbox\" href=\"https://images.unsplash.com/photo-1473625247510-8ceb1760943f?ixlib=rb-0.3.5&s=c0996cd16eda8c6f54c398de02d03cd3&auto=format&fit=crop&w=720&q=80\">
                                        <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/gallery_1.jpg"), "html", null, true);
        echo "\" alt=\"https://unsplash.com/@mantashesthaven\">
                                    </a>
                                </li>
                                <li class=\"gallery_item\">
                                    <a class=\"colorbox\" href=\"https://images.unsplash.com/photo-1495162048225-6b3b37b8a69e?ixlib=rb-0.3.5&s=861dd3c7b9d3e735d7fd7cbb1eefed64&auto=format&fit=crop&w=720&q=80\">
                                        <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/gallery_2.jpg"), "html", null, true);
        echo "\" alt=\"https://unsplash.com/@kensuarez\">
                                    </a>
                                </li>
                                <li class=\"gallery_item\">
                                    <a class=\"colorbox\" href=\"https://images.unsplash.com/photo-1502646275263-04be86afa386?ixlib=rb-0.3.5&s=682a41d7d9bf6e3feabc73a5fdd61dd2&auto=format&fit=crop&w=720&q=80\">
                                        <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/gallery_3.jpg"), "html", null, true);
        echo "\" alt=\"https://unsplash.com/@jakobowens1\">
                                    </a>
                                </li>
                                <li class=\"gallery_item\">
                                    <a class=\"colorbox\" href=\"https://images.unsplash.com/photo-1484820301304-0b43512779dc?ixlib=rb-0.3.5&s=7a3393e9f507fb4718c36337a8014c52&auto=format&fit=crop&w=720&q=80\">
                                        <img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/gallery_4.jpg"), "html", null, true);
        echo "\" alt=\"https://unsplash.com/@seefromthesky\">
                                    </a>
                                </li>
                                <li class=\"gallery_item\">
                                    <a class=\"colorbox\" href=\"https://images.unsplash.com/photo-1490380169520-0a4b88d52565?ixlib=rb-0.3.5&s=7e6b68b1911fb4ffeea4c0750b8a5269&auto=format&fit=crop&w=720&q=80\">
                                        <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/gallery_5.jpg"), "html", null, true);
        echo "\" alt=\"https://unsplash.com/@deannaritchie\">
                                    </a>
                                </li>
                                <li class=\"gallery_item\">
                                    <a class=\"colorbox\" href=\"https://images.unsplash.com/photo-1504434026032-a7e440a30b68?ixlib=rb-0.3.5&s=2cc35bf903b78ba4f7f7ed69bc2abe3f&auto=format&fit=crop&w=720&q=80\">
                                        <img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/gallery_6.jpg"), "html", null, true);
        echo "\" alt=\"https://unsplash.com/@benobro\">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "place_front/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 149,  323 => 144,  315 => 139,  307 => 134,  299 => 129,  291 => 124,  269 => 104,  263 => 103,  255 => 98,  251 => 97,  244 => 95,  236 => 92,  229 => 87,  226 => 86,  222 => 85,  210 => 75,  199 => 73,  195 => 72,  170 => 49,  161 => 46,  156 => 44,  151 => 42,  145 => 39,  140 => 37,  136 => 36,  127 => 30,  122 => 28,  117 => 25,  113 => 24,  93 => 7,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'base.html.twig' %}
{% block title %}
    Recommandations
{% endblock %}
{% block content %}
    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"{{ asset('front/images/991.jpg') }}\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">Recommandations</div>
        </div>
    </div>

    <!-- Blog -->

    <div class=\"blog\">
        <div class=\"container\">
            <div class=\"row\">

                <!-- Blog Content -->

                <div class=\"col-lg-8\">

                    <div class=\"blog_post_container\">
                        {% for p in places %}

                        <div class=\"blog_post\">
                            <div class=\"blog_post_image\">
                                <img src=\"{{ asset('/uploads/'~ p.picturePlace) }}\" alt=\"https://unsplash.com/@stilclassics\">
                                <div class=\"blog_post_date d-flex flex-column align-items-center justify-content-center\">
                                    <div class=\"blog_post_month\">{{ p.nbView }} <i class=\"fa fa-eye\"></i></div>

                                </div>
                            </div>
                            <div class=\"blog_post_meta\">
                                <ul>
                                    <li class=\"blog_post_meta_item\"><a href=\"\">{{ p.category }}</a></li>
                                    <li class=\"blog_post_meta_item\"><a href=\"\">{{ p.location }}</a></li>
                                    <li class=\"blog_post_meta_item\"><a href=\"\">3 Comments</a></li>
                                    <li class=\"blog_post_meta_item\"><a href=\"\">{{ p.nbView }}  <i class=\"fa fa-eye\"></i></a></li>
                                </ul>
                            </div>
                            <div class=\"blog_post_title\"><a href=\"#\">{{ p.titlePlace }}</a></div>
                            <div class=\"blog_post_text\">
                                <p>{{ p.DescriptionPlace }}</p>
                            </div>
                            <div class=\"blog_post_link\"><a href=\"{{ path('place_frontconsult',{'id':p.id}) }}\">Consulter</a></div>
                             </div>
                        {% endfor %}
                    </div>


                    <div class=\"blog_navigation\">
                        <ul>
                            <li class=\"blog_dot active\"><div></div>01.</li>
                            <li class=\"blog_dot\"><div></div>02.</li>
                            <li class=\"blog_dot\"><div></div>03.</li>
                        </ul>
                    </div>
                </div>

                <!-- Blog Sidebar -->

                <div class=\"col-lg-4 sidebar_col\">



                    <!-- Sidebar Archives -->
                    <div class=\"sidebar_categories\">
                        <div class=\"sidebar_title\">Categories</div>
                        <div class=\"sidebar_list\">
                            <ul>
                                {% for c in categories %}
                                <li><a href=\"{{path('place_frontlistcategory',{'id':c.id}) }}\">{{ c.nameCategoryPlace }}</a></li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>

                    <!-- Sidebar Latest Posts -->

                    <div class=\"sidebar_latest_posts\">
                        <div class=\"sidebar_title\">Latest Posts</div>
                        <div class=\"latest_posts_container\">
                            <ul>
                                 {% for p in places %}
                                     {% if(p.showPlace==1) %}


                                <!-- Latest Post -->
                                <li class=\"latest_post clearfix\">
                                    <div class=\"latest_post_image\">
                                        <a href=\"{{ path('place_frontconsult',{'id':p.id}) }}\"><img src=\"{{ asset('/uploads/'~ p.picturePlace) }}\" alt=\"\"></a>
                                    </div>
                                    <div class=\"latest_post_content\">
                                        <div class=\"latest_post_title trans_200\"><a href=\"{{ path('place_frontconsult',{'id':p.id}) }}\">{{ p.titlePlace }}</a></div>
                                        <div class=\"latest_post_meta\">
                                            <div class=\"latest_post_author trans_200\"><a href=\"\">{{ p.location }}</a></div>
                                            <div class=\"latest_post_date trans_200\"><a href=\"\">{{ p.nbView }} <i class=\"fa fa-eye\"></i></a></div>
                                        </div>
                                    </div>
                                </li>
                                     {% endif %}
                               {% endfor %}
                                <!-- Latest Post -->


                                <!-- Latest Post -->


                                <!-- Latest Post -->


                            </ul>
                        </div>
                    </div>

                    <!-- Sidebar Gallery -->
                    <div class=\"sidebar_gallery\">
                        <div class=\"sidebar_title\">Instagram</div>
                        <div class=\"gallery_container\">
                            <ul class=\"gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap\">
                                <li class=\"gallery_item\">
                                    <a class=\"colorbox\" href=\"https://images.unsplash.com/photo-1473625247510-8ceb1760943f?ixlib=rb-0.3.5&s=c0996cd16eda8c6f54c398de02d03cd3&auto=format&fit=crop&w=720&q=80\">
                                        <img src=\"{{ asset('front/images/gallery_1.jpg') }}\" alt=\"https://unsplash.com/@mantashesthaven\">
                                    </a>
                                </li>
                                <li class=\"gallery_item\">
                                    <a class=\"colorbox\" href=\"https://images.unsplash.com/photo-1495162048225-6b3b37b8a69e?ixlib=rb-0.3.5&s=861dd3c7b9d3e735d7fd7cbb1eefed64&auto=format&fit=crop&w=720&q=80\">
                                        <img src=\"{{ asset('front/images/gallery_2.jpg') }}\" alt=\"https://unsplash.com/@kensuarez\">
                                    </a>
                                </li>
                                <li class=\"gallery_item\">
                                    <a class=\"colorbox\" href=\"https://images.unsplash.com/photo-1502646275263-04be86afa386?ixlib=rb-0.3.5&s=682a41d7d9bf6e3feabc73a5fdd61dd2&auto=format&fit=crop&w=720&q=80\">
                                        <img src=\"{{ asset('front/images/gallery_3.jpg') }}\" alt=\"https://unsplash.com/@jakobowens1\">
                                    </a>
                                </li>
                                <li class=\"gallery_item\">
                                    <a class=\"colorbox\" href=\"https://images.unsplash.com/photo-1484820301304-0b43512779dc?ixlib=rb-0.3.5&s=7a3393e9f507fb4718c36337a8014c52&auto=format&fit=crop&w=720&q=80\">
                                        <img src=\"{{ asset('front/images/gallery_4.jpg') }}\" alt=\"https://unsplash.com/@seefromthesky\">
                                    </a>
                                </li>
                                <li class=\"gallery_item\">
                                    <a class=\"colorbox\" href=\"https://images.unsplash.com/photo-1490380169520-0a4b88d52565?ixlib=rb-0.3.5&s=7e6b68b1911fb4ffeea4c0750b8a5269&auto=format&fit=crop&w=720&q=80\">
                                        <img src=\"{{ asset('front/images/gallery_5.jpg') }}\" alt=\"https://unsplash.com/@deannaritchie\">
                                    </a>
                                </li>
                                <li class=\"gallery_item\">
                                    <a class=\"colorbox\" href=\"https://images.unsplash.com/photo-1504434026032-a7e440a30b68?ixlib=rb-0.3.5&s=2cc35bf903b78ba4f7f7ed69bc2abe3f&auto=format&fit=crop&w=720&q=80\">
                                        <img src=\"{{ asset('front/images/gallery_6.jpg') }}\" alt=\"https://unsplash.com/@benobro\">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    {% endblock %}", "place_front/list.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\place_front\\list.html.twig");
    }
}
