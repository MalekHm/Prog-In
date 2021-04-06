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

/* home/index.html.twig */
class __TwigTemplate_d0e0ba556999a961aed8a458be99080da9dc85fc29ed9dc22e1bdd065787ec0c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/about_background.jpg"), "html", null, true);
        echo "\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">Home</div>
        </div>
    </div>
<br>
    <br>

";
        // line 14
        if ((isset($context["publicitytop"]) || array_key_exists("publicitytop", $context) ? $context["publicitytop"] : (function () { throw new RuntimeError('Variable "publicitytop" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "
<a href=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["publicitytop"]) || array_key_exists("publicitytop", $context) ? $context["publicitytop"] : (function () { throw new RuntimeError('Variable "publicitytop" does not exist.', 16, $this->source); })()), "link", [], "any", false, false, false, 16), "html", null, true);
            echo "\">


    <div class=\"add\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"add_container\">
                        <div class=\"add_background\" style=\"background-image:url(";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/publicity/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["publicitytop"]) || array_key_exists("publicitytop", $context) ? $context["publicitytop"] : (function () { throw new RuntimeError('Variable "publicitytop" does not exist.', 24, $this->source); })()), "picturePub", [], "any", false, false, false, 24), "html", null, true);
            echo ")\"></div>
                        <div class=\"add_content\">
                            <h1 class=\"add_title\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["publicitytop"]) || array_key_exists("publicitytop", $context) ? $context["publicitytop"] : (function () { throw new RuntimeError('Variable "publicitytop" does not exist.', 26, $this->source); })()), "titlePub", [], "any", false, false, false, 26), "html", null, true);
            echo "</h1>
                            <div class=\"add_subtitle\"> <p class=\"text-white\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["publicitytop"]) || array_key_exists("publicitytop", $context) ? $context["publicitytop"] : (function () { throw new RuntimeError('Variable "publicitytop" does not exist.', 27, $this->source); })()), "descriptionPub", [], "any", false, false, false, 27), "html", null, true);
            echo "</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</a>
";
        }
        // line 37
        echo "

<br>
    <br>


    <div class=\"offers\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col text-center\">
                    <h2 class=\"section_title\">our events</h2>
                </div>
            </div>
            <div class=\"row offers_items\">



                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 55
            echo "                    <div class=\"col-lg-6 offers_col\">
                        <div class=\"offers_item\">
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <div class=\"offers_image_container\">
                                        <!-- Image by https://unsplash.com/@mantashesthaven -->
                                        <div class=\"offers_image_background\" style=\"background-image:url(";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/event/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "images", [], "any", false, false, false, 61), 0, [], "array", false, false, false, 61), "source", [], "any", false, false, false, 61), "html", null, true);
            echo ")\"></div>
                                        <div class=\"offer_name\"><a href=\"#\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "titre", [], "any", false, false, false, 62), "html", null, true);
            echo "</a></div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"offers_content\">
                                        <div class=\"offers_price\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "priceEvent", [], "any", false, false, false, 67), "html", null, true);
            echo "<span>Vente</span></div>


                                        <p class=\"offers_text\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "description", [], "any", false, false, false, 70), "html", null, true);
            echo "</p>
                                        <div class=\"offers_icons\">
                                            <ul class=\"offers_icons_list\">
                                                <li class=\"offers_icons_item\"><img src=\"images/post.png\" alt=\"\"></li>
                                                <li class=\"offers_icons_item\"><img src=\"images/compass.png\" alt=\"\"></li>
                                                <li class=\"offers_icons_item\"><img src=\"images/bicycle.png\" alt=\"\"></li>
                                                <li class=\"offers_icons_item\"><img src=\"images/sailboat.png\" alt=\"\"></li>
                                            </ul>
                                        </div>
                                        <div class=\"offers_link\"><a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evennement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\">Consulter</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "
            </div>
        </div>
    </div>


    <div class=\"offers\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col text-center\">
                    <h2 class=\"section_title\">our products</h2>
                </div>
            </div>
            <div class=\"row offers_items\">



               ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 103, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 104
            echo "                <div class=\"col-lg-6 offers_col\">
                    <div class=\"offers_item\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"offers_image_container\">
                                    <!-- Image by https://unsplash.com/@mantashesthaven -->
                                    <div class=\"offers_image_background\" style=\"background-image:url(";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/product/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "images", [], "any", false, false, false, 110), 0, [], "array", false, false, false, 110), "source", [], "any", false, false, false, 110), "html", null, true);
            echo ")\"></div>
                                    <div class=\"offer_name\"><a href=\"#\">";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 111), "html", null, true);
            echo "</a></div>
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"offers_content\">
                                    <div class=\"offers_price\">";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price", [], "any", false, false, false, 116), "html", null, true);
            echo "<span>Vente</span></div>
                                    <div class=\"offers_price\">";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "pricer", [], "any", false, false, false, 117), "html", null, true);
            echo "<span>Location</span></div>


                                    <p class=\"offers_text\">";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "description", [], "any", false, false, false, 120), "html", null, true);
            echo "</p>
                                    <div class=\"offers_icons\">
                                        <ul class=\"offers_icons_list\">
                                            <li class=\"offers_icons_item\"><img src=\"images/post.png\" alt=\"\"></li>
                                            <li class=\"offers_icons_item\"><img src=\"images/compass.png\" alt=\"\"></li>
                                            <li class=\"offers_icons_item\"><img src=\"images/bicycle.png\" alt=\"\"></li>
                                            <li class=\"offers_icons_item\"><img src=\"images/sailboat.png\" alt=\"\"></li>
                                        </ul>
                                    </div>
                                    <div class=\"offers_link\"><a href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_reserver", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 129)]), "html", null, true);
            echo "\">Réserver</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "
            </div>
        </div>
    </div>




    ";
        // line 144
        if ((isset($context["publicitybottom"]) || array_key_exists("publicitybottom", $context) ? $context["publicitybottom"] : (function () { throw new RuntimeError('Variable "publicitybottom" does not exist.', 144, $this->source); })())) {
            // line 145
            echo "
        <a href=\"";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["publicitybottom"]) || array_key_exists("publicitybottom", $context) ? $context["publicitybottom"] : (function () { throw new RuntimeError('Variable "publicitybottom" does not exist.', 146, $this->source); })()), "link", [], "any", false, false, false, 146), "html", null, true);
            echo "\">


            <div class=\"add\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"add_container\">
                                <div class=\"add_background\" style=\"background-image:url(";
            // line 154
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/publicity/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["publicitybottom"]) || array_key_exists("publicitybottom", $context) ? $context["publicitybottom"] : (function () { throw new RuntimeError('Variable "publicitybottom" does not exist.', 154, $this->source); })()), "picturePub", [], "any", false, false, false, 154), "html", null, true);
            echo ")\"></div>
                                <div class=\"add_content\">
                                    <h1 class=\"add_title\">";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["publicitybottom"]) || array_key_exists("publicitybottom", $context) ? $context["publicitybottom"] : (function () { throw new RuntimeError('Variable "publicitybottom" does not exist.', 156, $this->source); })()), "titlePub", [], "any", false, false, false, 156), "html", null, true);
            echo "</h1>
                                    <div class=\"add_subtitle\"> <p class=\"text-white\">";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["publicitybottom"]) || array_key_exists("publicitybottom", $context) ? $context["publicitybottom"] : (function () { throw new RuntimeError('Variable "publicitybottom" does not exist.', 157, $this->source); })()), "descriptionPub", [], "any", false, false, false, 157), "html", null, true);
            echo "</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </a>
    ";
        }
        // line 167
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 167,  312 => 157,  308 => 156,  302 => 154,  291 => 146,  288 => 145,  286 => 144,  276 => 136,  263 => 129,  251 => 120,  245 => 117,  241 => 116,  233 => 111,  228 => 110,  220 => 104,  216 => 103,  197 => 86,  184 => 79,  172 => 70,  166 => 67,  158 => 62,  153 => 61,  145 => 55,  141 => 54,  122 => 37,  109 => 27,  105 => 26,  99 => 24,  88 => 16,  85 => 15,  83 => 14,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}

    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"{{ asset('front/images/about_background.jpg') }}\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">Home</div>
        </div>
    </div>
<br>
    <br>

{% if publicitytop %}

<a href=\"{{ publicitytop.link }}\">


    <div class=\"add\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"add_container\">
                        <div class=\"add_background\" style=\"background-image:url({{ asset('/publicity/') }}{{ publicitytop.picturePub }})\"></div>
                        <div class=\"add_content\">
                            <h1 class=\"add_title\">{{ publicitytop.titlePub }}</h1>
                            <div class=\"add_subtitle\"> <p class=\"text-white\">{{ publicitytop.descriptionPub }}</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</a>
{% endif %}


<br>
    <br>


    <div class=\"offers\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col text-center\">
                    <h2 class=\"section_title\">our events</h2>
                </div>
            </div>
            <div class=\"row offers_items\">



                {% for i in events %}
                    <div class=\"col-lg-6 offers_col\">
                        <div class=\"offers_item\">
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <div class=\"offers_image_container\">
                                        <!-- Image by https://unsplash.com/@mantashesthaven -->
                                        <div class=\"offers_image_background\" style=\"background-image:url({{ asset('/event/') }}{{ i.images[0].source }})\"></div>
                                        <div class=\"offer_name\"><a href=\"#\">{{ i.titre }}</a></div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"offers_content\">
                                        <div class=\"offers_price\">{{ i.priceEvent }}<span>Vente</span></div>


                                        <p class=\"offers_text\">{{ i.description }}</p>
                                        <div class=\"offers_icons\">
                                            <ul class=\"offers_icons_list\">
                                                <li class=\"offers_icons_item\"><img src=\"images/post.png\" alt=\"\"></li>
                                                <li class=\"offers_icons_item\"><img src=\"images/compass.png\" alt=\"\"></li>
                                                <li class=\"offers_icons_item\"><img src=\"images/bicycle.png\" alt=\"\"></li>
                                                <li class=\"offers_icons_item\"><img src=\"images/sailboat.png\" alt=\"\"></li>
                                            </ul>
                                        </div>
                                        <div class=\"offers_link\"><a href=\"{{ path('evennement_show',{'id':i.id}) }}\">Consulter</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}

            </div>
        </div>
    </div>


    <div class=\"offers\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col text-center\">
                    <h2 class=\"section_title\">our products</h2>
                </div>
            </div>
            <div class=\"row offers_items\">



               {% for i in products %}
                <div class=\"col-lg-6 offers_col\">
                    <div class=\"offers_item\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"offers_image_container\">
                                    <!-- Image by https://unsplash.com/@mantashesthaven -->
                                    <div class=\"offers_image_background\" style=\"background-image:url({{ asset('/product/') }}{{ i.images[0].source }})\"></div>
                                    <div class=\"offer_name\"><a href=\"#\">{{ i.name }}</a></div>
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"offers_content\">
                                    <div class=\"offers_price\">{{ i.price }}<span>Vente</span></div>
                                    <div class=\"offers_price\">{{ i.pricer }}<span>Location</span></div>


                                    <p class=\"offers_text\">{{ i.description }}</p>
                                    <div class=\"offers_icons\">
                                        <ul class=\"offers_icons_list\">
                                            <li class=\"offers_icons_item\"><img src=\"images/post.png\" alt=\"\"></li>
                                            <li class=\"offers_icons_item\"><img src=\"images/compass.png\" alt=\"\"></li>
                                            <li class=\"offers_icons_item\"><img src=\"images/bicycle.png\" alt=\"\"></li>
                                            <li class=\"offers_icons_item\"><img src=\"images/sailboat.png\" alt=\"\"></li>
                                        </ul>
                                    </div>
                                    <div class=\"offers_link\"><a href=\"{{ path('product_reserver',{'id':i.id}) }}\">Réserver</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% endfor %}

            </div>
        </div>
    </div>




    {% if publicitybottom %}

        <a href=\"{{ publicitybottom.link }}\">


            <div class=\"add\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"add_container\">
                                <div class=\"add_background\" style=\"background-image:url({{ asset('/publicity/') }}{{ publicitybottom.picturePub }})\"></div>
                                <div class=\"add_content\">
                                    <h1 class=\"add_title\">{{ publicitybottom.titlePub }}</h1>
                                    <div class=\"add_subtitle\"> <p class=\"text-white\">{{ publicitybottom.descriptionPub }}</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </a>
    {% endif %}

{% endblock %}", "home/index.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\home\\index.html.twig");
    }
}
