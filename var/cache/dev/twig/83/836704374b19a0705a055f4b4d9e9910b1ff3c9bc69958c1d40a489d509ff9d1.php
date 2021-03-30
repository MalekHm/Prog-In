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

/* evennement_front/listevent.html.twig */
class __TwigTemplate_7c237ae5f32d4427043d2bb8d93f899473caf00ef35760fe5754cb1af4bba88f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evennement_front/listevent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evennement_front/listevent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evennement_front/listevent.html.twig", 2);
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
        echo "    <!-- Home -->

    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/about_background.jpg"), "html", null, true);
        echo "\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">Evennements</div>
        </div>
    </div>

    <!-- Offers -->

    <div class=\"offers\">

        <!-- Search -->




        <!-- Offers -->

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 row\">
                    <div class=\"col-4\">
                        <form method=\"get\">
                            <select class=\" form-control w-100\" name=\"category\" onchange='this.form.submit();'>
                                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 33
            echo "                                    <option  class=\"sort_btn\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 33), "html", null, true);
            echo "\" ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 33), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "uri", [], "any", false, false, false, 33))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 33), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                            </select>
                            <noscript><input type=\"submit\" value=\"Submit\"></noscript>
                        </form>
                    </div>
                    <div class=\"col-lg-4\">
                        <form action=\"\" method=\"get\">
                            <input name=\"filter\" type=\"text\" class=\"form-control\" placeholder=\"Chercher un évenement\">
                        </form>
                    </div>
                    <div class=\"col-4\">
                        <form method=\"get\">
                            <select class=\" form-control w-100\" name=\"tri\" onchange='this.form.submit();'>
                                    <option  class=\"sort_btn\" value=\"startdate\" ";
        // line 47
        if (twig_in_filter("startdate", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "uri", [], "any", false, false, false, 47))) {
            echo "selected";
        }
        echo ">Date Début</option>
                                <option  class=\"sort_btn\" value=\"price\" ";
        // line 48
        if (twig_in_filter("price", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "uri", [], "any", false, false, false, 48))) {
            echo "selected";
        }
        echo ">Prix</option>
                            </select>
                            <noscript><input type=\"submit\" value=\"Submit\"></noscript>
                        </form>
                    </div>
                </div>

                </div>
                <div class=\"col-lg-12\">
                    <!-- Offers Grid -->

                    <div class=\"offers_grid\">

                        <!-- Offers Item -->


                        <!-- Offers Item -->


                        <!-- Offers Item -->

                        <!-- Offers Item -->


                        <!-- Offers Item -->

                        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 75
            echo "                        <div class=\"offers_item rating_3\">

                            <div class=\"row\">
                                <div class=\"col-lg-1 temp_col\"></div>
                                <div class=\"col-lg-3 col-1680-4\">
                                    <div class=\"offers_image_container\">
                                        <!-- Image by https://unsplash.com/@itsnwa -->
                                        <div class=\"offers_image_background\" style=\"background-image:url(";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/event/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "images", [], "any", false, false, false, 82), 0, [], "array", false, false, false, 82), "source", [], "any", false, false, false, 82), "html", null, true);
            echo ")\"></div>
                                        <div class=\"offer_name\"><a href=\"#\">";
            // line 83
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "startDate", [], "any", false, false, false, 83), "d-m-Y"), "html", null, true);
            echo "</a></div>
                                    </div>
                                </div>
                                <div class=\"col-lg-8\">
                                    <div class=\"offers_content\">
                                        <div class=\"offers_price\">";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "titre", [], "any", false, false, false, 88), "html", null, true);
            echo "</div>
                                        <div class=\"rating_r rating_r_3 offers_rating\" data-rating=\"3\">
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                        </div>
                                        <p class=\"offers_text\">";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "description", [], "any", false, false, false, 96), "html", null, true);
            echo "</p>
                                        <div class=\"offers_icons\">
                                            <ul class=\"offers_icons_list\">
                                                <li class=\"offers_icons_item\"><img src=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/post.png"), "html", null, true);
            echo "\" alt=\"\"></li>
                                                <li class=\"offers_icons_item\"><img src=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/compass.png"), "html", null, true);
            echo "\" alt=\"\"></li>
                                                <li class=\"offers_icons_item\"><img src=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/bicycle.png"), "html", null, true);
            echo "\" alt=\"\"></li>
                                                <li class=\"offers_icons_item\"><img src=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/sailboat.png"), "html", null, true);
            echo "\" alt=\"\"></li>
                                            </ul>
                                        </div>
                                        <div class=\"button book_button\"><a href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evennement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 105)]), "html", null, true);
            echo "\">Consulter<span></span><span></span><span></span></a></div>
                                        <div class=\"offer_reviews\">
                                            <div class=\"offer_reviews_content\">
                                                <div class=\"offer_reviews_title\">";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "Category", [], "any", false, false, false, 108), "html", null, true);
            echo "</div>

                                                <div class=\"offer_reviews_subtitle\">";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nbPersons", [], "any", false, false, false, 110), "html", null, true);
            echo " Personnes</div>
                                            </div>
                                            <div class=\"offer_reviews_rating text-center\">";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "priceEvent", [], "any", false, false, false, 112), "html", null, true);
            echo "DT <span></span></div>
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
        // line 120
        echo "                    </div>
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
        return "evennement_front/listevent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 120,  246 => 112,  241 => 110,  236 => 108,  230 => 105,  224 => 102,  220 => 101,  216 => 100,  212 => 99,  206 => 96,  195 => 88,  187 => 83,  182 => 82,  173 => 75,  169 => 74,  138 => 48,  132 => 47,  118 => 35,  103 => 33,  99 => 32,  73 => 9,  68 => 6,  58 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}


{% block content %}
    <!-- Home -->

    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"{{ asset('front/images/about_background.jpg') }}\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">Evennements</div>
        </div>
    </div>

    <!-- Offers -->

    <div class=\"offers\">

        <!-- Search -->




        <!-- Offers -->

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 row\">
                    <div class=\"col-4\">
                        <form method=\"get\">
                            <select class=\" form-control w-100\" name=\"category\" onchange='this.form.submit();'>
                                {% for c in categories %}
                                    <option  class=\"sort_btn\" value=\"{{c.name}}\" {% if c.name in  app.request.uri %}selected{% endif %}>{{c.name}}</option>
                                {% endfor %}
                            </select>
                            <noscript><input type=\"submit\" value=\"Submit\"></noscript>
                        </form>
                    </div>
                    <div class=\"col-lg-4\">
                        <form action=\"\" method=\"get\">
                            <input name=\"filter\" type=\"text\" class=\"form-control\" placeholder=\"Chercher un évenement\">
                        </form>
                    </div>
                    <div class=\"col-4\">
                        <form method=\"get\">
                            <select class=\" form-control w-100\" name=\"tri\" onchange='this.form.submit();'>
                                    <option  class=\"sort_btn\" value=\"startdate\" {% if 'startdate' in  app.request.uri %}selected{% endif %}>Date Début</option>
                                <option  class=\"sort_btn\" value=\"price\" {% if 'price' in  app.request.uri %}selected{% endif %}>Prix</option>
                            </select>
                            <noscript><input type=\"submit\" value=\"Submit\"></noscript>
                        </form>
                    </div>
                </div>

                </div>
                <div class=\"col-lg-12\">
                    <!-- Offers Grid -->

                    <div class=\"offers_grid\">

                        <!-- Offers Item -->


                        <!-- Offers Item -->


                        <!-- Offers Item -->

                        <!-- Offers Item -->


                        <!-- Offers Item -->

                        {% for i in events %}
                        <div class=\"offers_item rating_3\">

                            <div class=\"row\">
                                <div class=\"col-lg-1 temp_col\"></div>
                                <div class=\"col-lg-3 col-1680-4\">
                                    <div class=\"offers_image_container\">
                                        <!-- Image by https://unsplash.com/@itsnwa -->
                                        <div class=\"offers_image_background\" style=\"background-image:url({{ asset('/event/') }}{{ i.images[0].source }})\"></div>
                                        <div class=\"offer_name\"><a href=\"#\">{{ i.startDate | date('d-m-Y') }}</a></div>
                                    </div>
                                </div>
                                <div class=\"col-lg-8\">
                                    <div class=\"offers_content\">
                                        <div class=\"offers_price\">{{ i.titre }}</div>
                                        <div class=\"rating_r rating_r_3 offers_rating\" data-rating=\"3\">
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                        </div>
                                        <p class=\"offers_text\">{{ i.description }}</p>
                                        <div class=\"offers_icons\">
                                            <ul class=\"offers_icons_list\">
                                                <li class=\"offers_icons_item\"><img src=\"{{ asset('front/images/post.png') }}\" alt=\"\"></li>
                                                <li class=\"offers_icons_item\"><img src=\"{{ asset('front/images/compass.png') }}\" alt=\"\"></li>
                                                <li class=\"offers_icons_item\"><img src=\"{{ asset('front/images/bicycle.png') }}\" alt=\"\"></li>
                                                <li class=\"offers_icons_item\"><img src=\"{{ asset('front/images/sailboat.png') }}\" alt=\"\"></li>
                                            </ul>
                                        </div>
                                        <div class=\"button book_button\"><a href=\"{{ path('evennement_show',{'id':i.id}) }}\">Consulter<span></span><span></span><span></span></a></div>
                                        <div class=\"offer_reviews\">
                                            <div class=\"offer_reviews_content\">
                                                <div class=\"offer_reviews_title\">{{ i.Category }}</div>

                                                <div class=\"offer_reviews_subtitle\">{{ i.nbPersons }} Personnes</div>
                                            </div>
                                            <div class=\"offer_reviews_rating text-center\">{{ i.priceEvent }}DT <span></span></div>
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
{% endblock %}", "evennement_front/listevent.html.twig", "/var/www/html/Prog-In-master/templates/evennement_front/listevent.html.twig");
    }
}
