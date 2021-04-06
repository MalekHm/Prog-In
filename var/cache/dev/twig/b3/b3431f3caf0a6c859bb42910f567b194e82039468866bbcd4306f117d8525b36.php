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

/* activity_front/list.html.twig */
class __TwigTemplate_cc44dc35d35315ea5d5ec40f9862793e28c06b6ef93ce29f48abbad0e1f1446a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity_front/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity_front/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "activity_front/list.html.twig", 1);
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
        echo "    Activités
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/blog_background.jpg"), "html", null, true);
        echo "\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">Activités</div>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 25
            echo "
                        <div class=\"blog_post\">
                            <div class=\"blog_post_image\">
                                <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/blog_3.jpg"), "html", null, true);
            echo "\" alt=\"https://unsplash.com/@stilclassics\">
                                <div class=\"blog_post_date d-flex flex-column align-items-center justify-content-center\">
                                    <div class=\"blog_post_month\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "titleActivity", [], "any", false, false, false, 30), "html", null, true);
            echo "</div>

                                </div>
                            </div>
                            <div class=\"blog_post_meta\">
                                <ul>
                                    <li class=\"blog_post_meta_item\"><a href=\"\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "category", [], "any", false, false, false, 36), "html", null, true);
            echo "</a></li>
                                    <li class=\"blog_post_meta_item\"><a href=\"\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "adressActivity", [], "any", false, false, false, 37), "html", null, true);
            echo "</a></li>
                                    <li class=\"blog_post_meta_item\"><a href=\"\">3 Comments</a></li>
                                    <li class=\"blog_post_meta_item\"><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activity_frontlike", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\"> J'aime <i class=\"fa fa-thumbs-up\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "likes", [], "any", false, false, false, 39), "html", null, true);
            echo "</a></li>
                                </ul>
                            </div>
                            <div class=\"blog_post_title\"><a href=\"#\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "titleActivity", [], "any", false, false, false, 42), "html", null, true);
            echo "</a></div>
                            <div class=\"blog_post_text\">
                                <p>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "descriptionActivity", [], "any", false, false, false, 44), "html", null, true);
            echo "</p>
                            </div>
                            <div class=\"blog_post_link\"><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activity_frontconsult", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">Consulter</a></div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
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
            echo "                                <li>
                                    <a href=\" ";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activity_frontlistcategory", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\">
                                        ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nameCategoryActivity", [], "any", false, false, false, 75), "html", null, true);
            echo "
                                    </a>
                                </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                            </ul>
                        </div>
                    </div>

                    <!-- Sidebar Latest Posts -->

                    <div class=\"sidebar_latest_posts\">
                        <div class=\"sidebar_title\">Latest Posts</div>
                        <div class=\"latest_posts_container\">
                            <ul>

                                <!-- Latest Post -->
                                <li class=\"latest_post clearfix\">
                                    <div class=\"latest_post_image\">
                                        <a href=\"#\"><img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/latest_1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                        </div>
                        <div class=\"latest_post_content\">
                            <div class=\"latest_post_title trans_200\"><a href=\"#\">A simple blog post</a></div>
                            <div class=\"latest_post_meta\">
                                <div class=\"latest_post_author trans_200\"><a href=\"#\">by Jane Smith</a></div>
                                <div class=\"latest_post_date trans_200\"><a href=\"#\">Aug 25, 2016</a></div>
                            </div>
                        </div>
                        </li>

                        <!-- Latest Post -->
                        <li class=\"latest_post clearfix\">
                            <div class=\"latest_post_image\">
                                <a href=\"#\"><img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/latest_2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                            </div>
                            <div class=\"latest_post_content\">
                                <div class=\"latest_post_title trans_200\"><a href=\"#\">Dream destination for you</a></div>
                                <div class=\"latest_post_meta\">
                                    <div class=\"latest_post_author trans_200\"><a href=\"#\">by Jane Smith</a></div>
                                    <div class=\"latest_post_date trans_200\"><a href=\"#\">Aug 25, 2016</a></div>
                                </div>
                            </div>
                        </li>

                        <!-- Latest Post -->
                        <li class=\"latest_post clearfix\">
                            <div class=\"latest_post_image\">
                                <a href=\"#\"><img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/latest_3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                            </div>
                            <div class=\"latest_post_content\">
                                <div class=\"latest_post_title trans_200\"><a href=\"#\">Tips to travel light</a></div>
                                <div class=\"latest_post_meta\">
                                    <div class=\"latest_post_author trans_200\"><a href=\"#\">by Jane Smith</a></div>
                                    <div class=\"latest_post_date trans_200\"><a href=\"#\">Aug 25, 2016</a></div>
                                </div>
                            </div>
                        </li>

                        <!-- Latest Post -->
                        <li class=\"latest_post clearfix\">
                            <div class=\"latest_post_image\">
                                <a href=\"#\"><img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/latest_4.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                            </div>
                            <div class=\"latest_post_content\">
                                <div class=\"latest_post_title trans_200\"><a href=\"#\">How to pick your vacation</a></div>
                                <div class=\"latest_post_meta\">
                                    <div class=\"latest_post_author trans_200\"><a href=\"#\">by Jane Smith</a></div>
                                    <div class=\"latest_post_date trans_200\"><a href=\"#\">Aug 25, 2016</a></div>
                                </div>
                            </div>
                        </li>

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
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/gallery_1.jpg"), "html", null, true);
        echo "\" alt=\"https://unsplash.com/@mantashesthaven\">
                                </a>
                            </li>
                            <li class=\"gallery_item\">
                                <a class=\"colorbox\" href=\"https://images.unsplash.com/photo-1495162048225-6b3b37b8a69e?ixlib=rb-0.3.5&s=861dd3c7b9d3e735d7fd7cbb1eefed64&auto=format&fit=crop&w=720&q=80\">
                                    <img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/gallery_2.jpg"), "html", null, true);
        echo "\" alt=\"https://unsplash.com/@kensuarez\">
                                </a>
                            </li>
                            <li class=\"gallery_item\">
                                <a class=\"colorbox\" href=\"https://images.unsplash.com/photo-1502646275263-04be86afa386?ixlib=rb-0.3.5&s=682a41d7d9bf6e3feabc73a5fdd61dd2&auto=format&fit=crop&w=720&q=80\">
                                    <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/gallery_3.jpg"), "html", null, true);
        echo "\" alt=\"https://unsplash.com/@jakobowens1\">
                                </a>
                            </li>
                            <li class=\"gallery_item\">
                                <a class=\"colorbox\" href=\"https://images.unsplash.com/photo-1484820301304-0b43512779dc?ixlib=rb-0.3.5&s=7a3393e9f507fb4718c36337a8014c52&auto=format&fit=crop&w=720&q=80\">
                                    <img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/gallery_4.jpg"), "html", null, true);
        echo "\" alt=\"https://unsplash.com/@seefromthesky\">
                                </a>
                            </li>
                            <li class=\"gallery_item\">
                                <a class=\"colorbox\" href=\"https://images.unsplash.com/photo-1490380169520-0a4b88d52565?ixlib=rb-0.3.5&s=7e6b68b1911fb4ffeea4c0750b8a5269&auto=format&fit=crop&w=720&q=80\">
                                    <img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/gallery_5.jpg"), "html", null, true);
        echo "\" alt=\"https://unsplash.com/@deannaritchie\">
                                </a>
                            </li>
                            <li class=\"gallery_item\">
                                <a class=\"colorbox\" href=\"https://images.unsplash.com/photo-1504434026032-a7e440a30b68?ixlib=rb-0.3.5&s=2cc35bf903b78ba4f7f7ed69bc2abe3f&auto=format&fit=crop&w=720&q=80\">
                                    <img src=\"";
        // line 182
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
        return "activity_front/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 182,  342 => 177,  334 => 172,  326 => 167,  318 => 162,  310 => 157,  285 => 135,  268 => 121,  251 => 107,  234 => 93,  218 => 79,  208 => 75,  204 => 74,  201 => 73,  197 => 72,  172 => 49,  163 => 46,  158 => 44,  153 => 42,  145 => 39,  140 => 37,  136 => 36,  127 => 30,  122 => 28,  117 => 25,  113 => 24,  93 => 7,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    Activités
{% endblock %}
{% block content %}
    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"{{ asset('front/images/blog_background.jpg') }}\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">Activités</div>
        </div>
    </div>

    <!-- Blog -->

    <div class=\"blog\">
        <div class=\"container\">
            <div class=\"row\">

                <!-- Blog Content -->

                <div class=\"col-lg-8\">

                    <div class=\"blog_post_container\">
                        {% for a in activity %}

                        <div class=\"blog_post\">
                            <div class=\"blog_post_image\">
                                <img src=\"{{ asset('front/images/blog_3.jpg') }}\" alt=\"https://unsplash.com/@stilclassics\">
                                <div class=\"blog_post_date d-flex flex-column align-items-center justify-content-center\">
                                    <div class=\"blog_post_month\">{{ a.titleActivity }}</div>

                                </div>
                            </div>
                            <div class=\"blog_post_meta\">
                                <ul>
                                    <li class=\"blog_post_meta_item\"><a href=\"\">{{ a.category }}</a></li>
                                    <li class=\"blog_post_meta_item\"><a href=\"\">{{ a.adressActivity }}</a></li>
                                    <li class=\"blog_post_meta_item\"><a href=\"\">3 Comments</a></li>
                                    <li class=\"blog_post_meta_item\"><a href=\"{{path('activity_frontlike',{'id':a.id}) }}\"> J'aime <i class=\"fa fa-thumbs-up\"></i>{{ a.likes }}</a></li>
                                </ul>
                            </div>
                            <div class=\"blog_post_title\"><a href=\"#\">{{ a.titleActivity }}</a></div>
                            <div class=\"blog_post_text\">
                                <p>{{ a.descriptionActivity }}</p>
                            </div>
                            <div class=\"blog_post_link\"><a href=\"{{path('activity_frontconsult',{'id':a.id}) }}\">Consulter</a></div>
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
                                <li>
                                    <a href=\" {{ path('activity_frontlistcategory',{'id':c.id } ) }}\">
                                        {{ c.nameCategoryActivity }}
                                    </a>
                                </li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>

                    <!-- Sidebar Latest Posts -->

                    <div class=\"sidebar_latest_posts\">
                        <div class=\"sidebar_title\">Latest Posts</div>
                        <div class=\"latest_posts_container\">
                            <ul>

                                <!-- Latest Post -->
                                <li class=\"latest_post clearfix\">
                                    <div class=\"latest_post_image\">
                                        <a href=\"#\"><img src=\"{{ asset('front/images/latest_1.jpg') }}\" alt=\"\"></a>
                        </div>
                        <div class=\"latest_post_content\">
                            <div class=\"latest_post_title trans_200\"><a href=\"#\">A simple blog post</a></div>
                            <div class=\"latest_post_meta\">
                                <div class=\"latest_post_author trans_200\"><a href=\"#\">by Jane Smith</a></div>
                                <div class=\"latest_post_date trans_200\"><a href=\"#\">Aug 25, 2016</a></div>
                            </div>
                        </div>
                        </li>

                        <!-- Latest Post -->
                        <li class=\"latest_post clearfix\">
                            <div class=\"latest_post_image\">
                                <a href=\"#\"><img src=\"{{ asset('front/images/latest_2.jpg') }}\" alt=\"\"></a>
                            </div>
                            <div class=\"latest_post_content\">
                                <div class=\"latest_post_title trans_200\"><a href=\"#\">Dream destination for you</a></div>
                                <div class=\"latest_post_meta\">
                                    <div class=\"latest_post_author trans_200\"><a href=\"#\">by Jane Smith</a></div>
                                    <div class=\"latest_post_date trans_200\"><a href=\"#\">Aug 25, 2016</a></div>
                                </div>
                            </div>
                        </li>

                        <!-- Latest Post -->
                        <li class=\"latest_post clearfix\">
                            <div class=\"latest_post_image\">
                                <a href=\"#\"><img src=\"{{ asset('front/images/latest_3.jpg') }}\" alt=\"\"></a>
                            </div>
                            <div class=\"latest_post_content\">
                                <div class=\"latest_post_title trans_200\"><a href=\"#\">Tips to travel light</a></div>
                                <div class=\"latest_post_meta\">
                                    <div class=\"latest_post_author trans_200\"><a href=\"#\">by Jane Smith</a></div>
                                    <div class=\"latest_post_date trans_200\"><a href=\"#\">Aug 25, 2016</a></div>
                                </div>
                            </div>
                        </li>

                        <!-- Latest Post -->
                        <li class=\"latest_post clearfix\">
                            <div class=\"latest_post_image\">
                                <a href=\"#\"><img src=\"{{ asset('front/images/latest_4.jpg') }}\" alt=\"\"></a>
                            </div>
                            <div class=\"latest_post_content\">
                                <div class=\"latest_post_title trans_200\"><a href=\"#\">How to pick your vacation</a></div>
                                <div class=\"latest_post_meta\">
                                    <div class=\"latest_post_author trans_200\"><a href=\"#\">by Jane Smith</a></div>
                                    <div class=\"latest_post_date trans_200\"><a href=\"#\">Aug 25, 2016</a></div>
                                </div>
                            </div>
                        </li>

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


{% endblock %}", "activity_front/list.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\activity_front\\list.html.twig");
    }
}
