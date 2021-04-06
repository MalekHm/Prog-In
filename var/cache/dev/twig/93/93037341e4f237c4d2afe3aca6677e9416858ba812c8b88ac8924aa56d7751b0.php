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

/* product_front/list.html.twig */
class __TwigTemplate_f4f7c9f126417ce3bda07188a4890cb60c1e4f9eba66027e0c4b30094648059d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product_front/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product_front/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product_front/list.html.twig", 1);
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

        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        echo "    <style>
        .alert {
            padding: 10px;
            color: white;
            margin-bottom: 10px;
        }
    </style>
    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/single_background.jpg"), "html", null, true);
        echo "\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">Produits</div>
        </div>
    </div>


        <div class=\"search\">
            <div class=\"search_inner\">

                <!-- Search Contents -->

                <div class=\"container fill_height no-padding\">
                    <div class=\"row fill_height no-margin\">
                        <div class=\"col fill_height no-padding\">

                            <div class=\"search_panel active\">
                                <form action=\"#\" id=\"search_form_1\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">

                                                ";
        // line 31
        $this->loadTemplate("product_front/filter.html.twig", "product_front/list.html.twig", 31)->display(twig_to_array(["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })())]));
        // line 32
        echo "
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <!-- Offers -->
<br>
    <br>
    <div class=\"offers\">
        <div class=\"container\">
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 48
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 49
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
            <div class=\"row\">
                <div class=\"col text-center\">
                    <h2 class=\"section_title\">Tous nos produits</h2>
                </div>
                <div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        echo "\">PANIER </a></div>
            </div>

            <div class=\"row offers_items\">

                <!-- Offers Item -->
                ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 64
            echo "                <div class=\"col-lg-6 offers_col\">
                    <div class=\"offers_item\">

                        <div class=\"row\">

                            <div class=\"col-lg-6\">
                                <div class=\"offers_image_container\">
                                    <!-- Image by https://unsplash.com/@kensuarez -->
                                    ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["i"], "images", [], "any", false, false, false, 72));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 73
                echo "                                        <div class=\"offers_image_background\">
                                        <img src=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/product/" . twig_get_attribute($this->env, $this->source, $context["image"], "source", [], "any", false, false, false, 74))), "html", null, true);
                echo " \" alt=\"Image\" width=\"240\">
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "
                                    <div class=\"offers_image_background\" ></div>
                                    <div class=\"offer_name\"><a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_reserver", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 79), "html", null, true);
            echo "</a></div>
                                </div>
                            </div>

                            <div class=\"col-lg-6\">
                                <div class=\"offers_content\">
                                    <div class=\"offers_price\">";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price", [], "any", false, false, false, 85), "html", null, true);
            echo "<span>DT/ Vente</span></div>
                                    <br>
                                    <div class=\"offers_price\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "pricer", [], "any", false, false, false, 87), "html", null, true);
            echo "<span>DT/ Location</span></div>
                                    <p>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "description", [], "any", false, false, false, 88), "html", null, true);
            echo "</p>
                                    <div class=\"offers_icons\">
                                        <ul class=\"offers_icons_list\">
                                            <li class=\"offers_icons_item\"><img src=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/post.png"), "html", null, true);
            echo "\" alt=\"\"></li>
                                            <li class=\"offers_icons_item\"><img src=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/compass.png"), "html", null, true);
            echo "\" alt=\"\"></li>
                                            <li class=\"offers_icons_item\"><img src=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/bicycle.png"), "html", null, true);
            echo "\" alt=\"\"></li>
                                            <li class=\"offers_icons_item\"><img src=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/sailboat.png"), "html", null, true);
            echo "\" alt=\"\"></li>
                                        </ul>
                                    </div>
                                    <p class=\"offers_text\" >Quantité : ";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "quantity", [], "any", false, false, false, 97), "html", null, true);
            echo "</p>
                                    <div class=\"offers_link\"><a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_reserver", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 98)]), "html", null, true);
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
        // line 107
        echo "            </div>
        </div>
    </div>
            </div>
        </div>
    <div>
        ";
        // line 113
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 113, $this->source); })()));
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product_front/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 113,  268 => 107,  253 => 98,  249 => 97,  243 => 94,  239 => 93,  235 => 92,  231 => 91,  225 => 88,  221 => 87,  216 => 85,  205 => 79,  201 => 77,  192 => 74,  189 => 73,  185 => 72,  175 => 64,  171 => 63,  162 => 57,  155 => 52,  146 => 49,  143 => 48,  139 => 47,  122 => 32,  120 => 31,  98 => 12,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}  {% endblock %}
{% block content %}
    <style>
        .alert {
            padding: 10px;
            color: white;
            margin-bottom: 10px;
        }
    </style>
    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"{{ asset('front/images/single_background.jpg') }}\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">Produits</div>
        </div>
    </div>


        <div class=\"search\">
            <div class=\"search_inner\">

                <!-- Search Contents -->

                <div class=\"container fill_height no-padding\">
                    <div class=\"row fill_height no-margin\">
                        <div class=\"col fill_height no-padding\">

                            <div class=\"search_panel active\">
                                <form action=\"#\" id=\"search_form_1\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">

                                                {% include 'product_front/filter.html.twig' with {form: form} only %}

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <!-- Offers -->
<br>
    <br>
    <div class=\"offers\">
        <div class=\"container\">
            {% for message in app.flashes('danger') %}
                <div class=\"alert alert-danger\">
                    {{ message }}
                </div>
            {% endfor %}

            <div class=\"row\">
                <div class=\"col text-center\">
                    <h2 class=\"section_title\">Tous nos produits</h2>
                </div>
                <div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"{{ path('cart_index') }}\">PANIER </a></div>
            </div>

            <div class=\"row offers_items\">

                <!-- Offers Item -->
                {% for i in product %}
                <div class=\"col-lg-6 offers_col\">
                    <div class=\"offers_item\">

                        <div class=\"row\">

                            <div class=\"col-lg-6\">
                                <div class=\"offers_image_container\">
                                    <!-- Image by https://unsplash.com/@kensuarez -->
                                    {% for image in i.images %}
                                        <div class=\"offers_image_background\">
                                        <img src=\"{{ asset('/product/' ~ image.source) }} \" alt=\"Image\" width=\"240\">
                                        </div>
                                    {% endfor %}

                                    <div class=\"offers_image_background\" ></div>
                                    <div class=\"offer_name\"><a href=\"{{ path('product_reserver',{'id':i.id}) }}\">{{ i.name }}</a></div>
                                </div>
                            </div>

                            <div class=\"col-lg-6\">
                                <div class=\"offers_content\">
                                    <div class=\"offers_price\">{{ i.price }}<span>DT/ Vente</span></div>
                                    <br>
                                    <div class=\"offers_price\">{{ i.pricer }}<span>DT/ Location</span></div>
                                    <p>{{ i.description }}</p>
                                    <div class=\"offers_icons\">
                                        <ul class=\"offers_icons_list\">
                                            <li class=\"offers_icons_item\"><img src=\"{{ asset('front/images/post.png') }}\" alt=\"\"></li>
                                            <li class=\"offers_icons_item\"><img src=\"{{ asset('front/images/compass.png') }}\" alt=\"\"></li>
                                            <li class=\"offers_icons_item\"><img src=\"{{ asset('front/images/bicycle.png') }}\" alt=\"\"></li>
                                            <li class=\"offers_icons_item\"><img src=\"{{ asset('front/images/sailboat.png') }}\" alt=\"\"></li>
                                        </ul>
                                    </div>
                                    <p class=\"offers_text\" >Quantité : {{ i.quantity }}</p>
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
            </div>
        </div>
    <div>
        {{ knp_pagination_render(product) }}
    </div>
{% endblock %}", "product_front/list.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\product_front\\list.html.twig");
    }
}
