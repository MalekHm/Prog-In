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

/* evennement_front/consulterEvent.html.twig */
class __TwigTemplate_d60ba10a8c0ee25789c57780f1223528ed0b35a31dac572d912ef85c70688a97 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evennement_front/consulterEvent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evennement_front/consulterEvent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evennement_front/consulterEvent.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        echo "
    <style>
        .alert {
            padding: 10px;
            color: white;
            margin-bottom: 10px;
        }
    </style>

    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/about_background.jpg"), "html", null, true);
        echo "\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">Evennements</div>
        </div>
    </div>

    <!-- Offers -->

    <div class=\"offers\">



        <!-- Offers -->

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"single_listing\">
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 35
            echo "                            <div class=\"alert alert-danger\">
                                ";
            // line 36
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
                        <!-- Hotel Info -->

                        <div class=\"hotel_info\">

                            <!-- Title -->
                            <div class=\"hotel_title_container d-flex flex-lg-row flex-column\">
                                <div class=\"hotel_title_content\">
                                    <h1 class=\"hotel_title\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 47, $this->source); })()), "titre", [], "any", false, false, false, 47), "html", null, true);
        echo "</h1>
                                    <div class=\"rating_r rating_r_4 hotel_rating\">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <div class=\"hotel_location\">";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 55, $this->source); })()), "startDate", [], "any", false, false, false, 55), "d-m-Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 55, $this->source); })()), "endDate", [], "any", false, false, false, 55), "d-m-Y"), "html", null, true);
        echo "</div>
                                </div>
                                <div class=\"hotel_title_button ml-lg-auto text-lg-right\">
                                    <div class=\"hotel_map_link_container\">
                                        <div class=\"hotel_map_link\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 59, $this->source); })()), "nbViews", [], "any", false, false, false, 59), "html", null, true);
        echo " views</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Listing Image -->
                            <center>
                                <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                                    <div class=\"carousel-inner\">
                                        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 68, $this->source); })()), "images", [], "any", false, false, false, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 69
            echo "                                            <div  class=\"carousel-item ";
            if ((0 === twig_compare($context["image"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 69, $this->source); })()), "images", [], "any", false, false, false, 69), 0, [], "array", false, false, false, 69)))) {
                echo "active";
            }
            echo "\">
                                                <img class=\"d-block \" height=\"500px\" src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/event/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "source", [], "any", false, false, false, 70), "html", null, true);
            echo "\" alt=\"First slide\">
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                                    </div>
                                    <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\" >
                                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\" style=\"background-color: #0a1219\"></span>
                                        <span class=\"sr-only\" >Previous</span>
                                    </a>
                                    <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\" style=\"background-color: #0a1219\"></span>
                                        <span class=\"sr-only\">Next</span>
                                    </a>
                                </div>
                            </center>




                            <!-- Hotel Info Text -->

                            <div class=\"hotel_info_text\">
                                <p>";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 91, $this->source); })()), "description", [], "any", false, false, false, 91), "html", null, true);
        echo "</p>
                            </div>

                            <!-- Hotel Info Tags -->

                            <div class=\"hotel_info_tags\">
                                <ul class=\"hotel_icons_list\">
                                    <li class=\"hotel_icons_item\"><img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/post.png"), "html", null, true);
        echo "\" alt=\"\"></li>
                                    <li class=\"hotel_icons_item\"><img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/compass.png"), "html", null, true);
        echo "\" alt=\"\"></li>
                                    <li class=\"hotel_icons_item\"><img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/bicycle.png"), "html", null, true);
        echo "\" alt=\"\"></li>
                                    <li class=\"hotel_icons_item\"><img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/sailboat.png"), "html", null, true);
        echo "\" alt=\"\"></li>

                                    ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103)) {
            // line 104
            echo "                                        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 104, $this->source); })()), "placeDisponible", [], "any", false, false, false, 104), 0))) {
                // line 105
                echo "                                            <li class=\"float-right\"><button  class=\" search_button\">
                                                    Complet
                                        </button>
                                            </li>

                                        ";
            } else {
                // line 111
                echo "                                            <li class=\"float-right\"><button data-toggle=\"modal\" data-target=\"#exampleModalCenter\" class=\"button search_button\">
                                                    ";
                // line 112
                if (twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 112, $this->source); })()), "Promo", [], "any", false, false, false, 112)) {
                    // line 113
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 113, $this->source); })()), "Promo", [], "any", false, false, false, 113), "html", null, true);
                    echo "
                                                    ";
                } else {
                    // line 115
                    echo "                                                        Réserver maintenant
                                                    ";
                }
                // line 117
                echo "
                                                    <span></span><span></span><span></span></button></li>
                                        ";
            }
            // line 120
            echo "
                                    ";
        }
        // line 122
        echo "                                </ul>

                            </div>


                            <div class=\"modal fade\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Complétez votre réservation</h5>
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">&times;</span>
                                            </button>
                                        </div>
                                        <form method=\"get\">

                                            <div class=\"modal-body\">
                                                    Combien de tickets voulez vous ?
                                                    <input type=\"number\" name=\"nbPersonnes\" class=\"form-control\">
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                                <button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
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
        return "evennement_front/consulterEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 122,  260 => 120,  255 => 117,  251 => 115,  245 => 113,  243 => 112,  240 => 111,  232 => 105,  229 => 104,  227 => 103,  222 => 101,  218 => 100,  214 => 99,  210 => 98,  200 => 91,  180 => 73,  170 => 70,  163 => 69,  159 => 68,  147 => 59,  138 => 55,  127 => 47,  117 => 39,  108 => 36,  105 => 35,  101 => 34,  80 => 16,  68 => 6,  58 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}


{% block content %}

    <style>
        .alert {
            padding: 10px;
            color: white;
            margin-bottom: 10px;
        }
    </style>

    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"{{ asset('front/images/about_background.jpg') }}\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">Evennements</div>
        </div>
    </div>

    <!-- Offers -->

    <div class=\"offers\">



        <!-- Offers -->

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"single_listing\">
                        {% for message in app.flashes('danger') %}
                            <div class=\"alert alert-danger\">
                                {{ message }}
                            </div>
                        {% endfor %}

                        <!-- Hotel Info -->

                        <div class=\"hotel_info\">

                            <!-- Title -->
                            <div class=\"hotel_title_container d-flex flex-lg-row flex-column\">
                                <div class=\"hotel_title_content\">
                                    <h1 class=\"hotel_title\">{{ events.titre }}</h1>
                                    <div class=\"rating_r rating_r_4 hotel_rating\">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <div class=\"hotel_location\">{{ events.startDate |date('d-m-Y') }} {{ events.endDate|date('d-m-Y') }}</div>
                                </div>
                                <div class=\"hotel_title_button ml-lg-auto text-lg-right\">
                                    <div class=\"hotel_map_link_container\">
                                        <div class=\"hotel_map_link\">{{ events.nbViews}} views</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Listing Image -->
                            <center>
                                <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                                    <div class=\"carousel-inner\">
                                        {% for image in events.images %}
                                            <div  class=\"carousel-item {% if image==events.images[0] %}active{% endif %}\">
                                                <img class=\"d-block \" height=\"500px\" src=\"{{ asset('/event/') }}{{ image.source }}\" alt=\"First slide\">
                                            </div>
                                        {% endfor %}
                                    </div>
                                    <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\" >
                                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\" style=\"background-color: #0a1219\"></span>
                                        <span class=\"sr-only\" >Previous</span>
                                    </a>
                                    <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\" style=\"background-color: #0a1219\"></span>
                                        <span class=\"sr-only\">Next</span>
                                    </a>
                                </div>
                            </center>




                            <!-- Hotel Info Text -->

                            <div class=\"hotel_info_text\">
                                <p>{{ events.description }}</p>
                            </div>

                            <!-- Hotel Info Tags -->

                            <div class=\"hotel_info_tags\">
                                <ul class=\"hotel_icons_list\">
                                    <li class=\"hotel_icons_item\"><img src=\"{{ asset('front/images/post.png') }}\" alt=\"\"></li>
                                    <li class=\"hotel_icons_item\"><img src=\"{{ asset('front/images/compass.png') }}\" alt=\"\"></li>
                                    <li class=\"hotel_icons_item\"><img src=\"{{ asset('front/images/bicycle.png') }}\" alt=\"\"></li>
                                    <li class=\"hotel_icons_item\"><img src=\"{{ asset('front/images/sailboat.png') }}\" alt=\"\"></li>

                                    {% if app.user %}
                                        {% if events.placeDisponible==0 %}
                                            <li class=\"float-right\"><button  class=\" search_button\">
                                                    Complet
                                        </button>
                                            </li>

                                        {% else%}
                                            <li class=\"float-right\"><button data-toggle=\"modal\" data-target=\"#exampleModalCenter\" class=\"button search_button\">
                                                    {% if events.Promo %}
                                                        {{ events.Promo }}
                                                    {% else %}
                                                        Réserver maintenant
                                                    {% endif %}

                                                    <span></span><span></span><span></span></button></li>
                                        {% endif %}

                                    {% endif %}
                                </ul>

                            </div>


                            <div class=\"modal fade\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Complétez votre réservation</h5>
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">&times;</span>
                                            </button>
                                        </div>
                                        <form method=\"get\">

                                            <div class=\"modal-body\">
                                                    Combien de tickets voulez vous ?
                                                    <input type=\"number\" name=\"nbPersonnes\" class=\"form-control\">
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                                <button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
{% endblock %}", "evennement_front/consulterEvent.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\evennement_front\\consulterEvent.html.twig");
    }
}
