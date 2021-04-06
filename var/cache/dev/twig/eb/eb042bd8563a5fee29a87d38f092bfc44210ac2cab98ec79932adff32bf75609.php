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

/* place_front/listconsult.html.twig */
class __TwigTemplate_df480060ae5197ef02d3783b991132b7ad451dd53c2112efdd4e1914af7f0e2b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "place_front/listconsult.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "place_front/listconsult.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "place_front/listconsult.html.twig", 1);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 3, $this->source); })()), "titlePlace", [], "any", false, false, false, 3), "html", null, true);
        echo "
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
        echo "    <!-- Home -->

    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 9, $this->source); })()), "picturePlace", [], "any", false, false, false, 9))), "html", null, true);
        echo "\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 11, $this->source); })()), "titlePlace", [], "any", false, false, false, 11), "html", null, true);
        echo "</div>
        </div>
    </div>

    <!-- Offers -->

    <div class=\"listing\">

        <!-- Search -->


        <!-- Single Listing -->

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"single_listing\">

                        <!-- Hotel Info -->

                        <div class=\"hotel_info\">

                            <!-- Title -->
                            <div class=\"hotel_title_container d-flex flex-lg-row flex-column\">
                                <div class=\"hotel_title_content\">
                                    <h1 class=\"hotel_title\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 36, $this->source); })()), "titlePlace", [], "any", false, false, false, 36), "html", null, true);
        echo "</h1>
                                    <div class=\"rating_r rating_r_4 hotel_rating\">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <div class=\"hotel_location\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 44, $this->source); })()), "category", [], "any", false, false, false, 44), "html", null, true);
        echo "</div>
                                </div>
                                <div class=\"hotel_title_button ml-lg-auto text-lg-right\">
                                    <div class=\"hotel_review\">
                                        <div class=\"hotel_review_content\">
                                            <div class=\"hotel_review_title\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 49, $this->source); })()), "location", [], "any", false, false, false, 49), "html", null, true);
        echo "</div>
                                        </div>
                                        <div class=\"hotel_review_rating_perfect text-center\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 51, $this->source); })()), "nbView", [], "any", false, false, false, 51), "html", null, true);
        echo " <i class=\"fa fa-eye\"></i></div>
                                    </div>
                                </div>

                            </div>

                            <!-- Listing Image -->



                            <!-- Hotel Gallery -->

                            <div class=\"hotel_gallery\" >
                                <div class=\"hotel_slider_container\">
                                    <div class=\"owl-carousel owl-theme hotel_slider\"  >
                                        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 66, $this->source); })()), "media", [], "any", false, false, false, 66));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 67
            echo "                                        <!-- Hotel Gallery Slider Item -->

                                            <div class=\"owl-item\">
                                                <a class=\"colorbox cboxElement\" href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . twig_get_attribute($this->env, $this->source, $context["image"], "imagePlace", [], "any", false, false, false, 70))), "html", null, true);
            echo "\">
                                                    <img src=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . twig_get_attribute($this->env, $this->source, $context["image"], "imagePlace", [], "any", false, false, false, 71))), "html", null, true);
            echo "\" alt=\"https://unsplash.com/@jbriscoe\">
                                                </a>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                                    </div>

                                    <!-- Hotel Slider Nav - Prev -->
                                    <div class=\"hotel_slider_nav hotel_slider_prev\">
                                        <svg version=\"1.1\" id=\"Layer_6\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                             width=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t\t\t\t<defs>
                                                <linearGradient id='hotel_grad_prev'>
                                                    <stop offset='0%' stop-color='#fa9e1b'/>
                                                    <stop offset='100%' stop-color='#8d4fff'/>
                                                </linearGradient>
                                            </defs>
                                            <path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\t\t\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\t\t\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
                                            <polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
\t\t\t\t\t\t\t\t\t\t\t11.042,18.219 \"/>
\t\t\t\t\t\t\t\t\t\t</svg>
                                    </div>

                                    <!-- Hotel Slider Nav - Next -->
                                    <div class=\"hotel_slider_nav hotel_slider_next\">
                                        <svg version=\"1.1\" id=\"Layer_7\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                             width=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t\t\t\t<defs>
                                                <linearGradient id='hotel_grad_next'>
                                                    <stop offset='0%' stop-color='#fa9e1b'/>
                                                    <stop offset='100%' stop-color='#8d4fff'/>
                                                </linearGradient>
                                            </defs>
                                            <path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\t\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\t\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
                                            <polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
\t\t\t\t\t\t\t\t\t\t17.046,15.554 \"/>
\t\t\t\t\t\t\t\t\t\t</svg>
                                    </div>

                                </div>
                            </div>

                            <!-- Hotel Info Text -->

                            <div class=\"hotel_info_text\">
                                <p>";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 119, $this->source); })()), "DescriptionPlace", [], "any", false, false, false, 119), "html", null, true);
        echo "</p>
                            </div>

                            <!-- Hotel Info Tags -->

                            <div class=\"hotel_info_tags\">
                                <ul class=\"hotel_icons_list\">
                                    <li class=\"hotel_icons_item\"><img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/post.png"), "html", null, true);
        echo "\" alt=\"\"></li>
                                    <li class=\"hotel_icons_item\"><img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/compass.png"), "html", null, true);
        echo "\" alt=\"\"></li>
                                    <li class=\"hotel_icons_item\"><img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/bicycle.png"), "html", null, true);
        echo "\" alt=\"\"></li>
                                    <li class=\"hotel_icons_item\"><img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/sailboat.png"), "html", null, true);
        echo "\" alt=\"\"></li>
                                </ul>
                            </div>

                        </div>

                        <!-- Rooms -->



                        <!-- Reviews -->

                        <div class=\"reviews\">

                            <div class=\"reviews_title\" align=\"center\">Commentaires</div>
                            <div class=\"reviews_container\">

                                <!-- Review -->
                                ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 147, $this->source); })()), "commentsPlaces", [], "any", false, false, false, 147));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 148
            echo "                                <div class=\"review\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-2\"></div>
                                        <div class=\"col-lg-8\">
                                            <div class=\"review_content\">
                                                <div class=\"review_title_container\">
                                                    <div class=\"review_title\">";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "titleComment", [], "any", false, false, false, 154), "html", null, true);
            echo "</div>
                                                    <div class=\"review_rating\">";
            // line 155
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 155), "d/m "), "html", null, true);
            echo "</div>
                                                </div>
                                                <div class=\"review_text\">
                                                    <p>
                                                        ";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 159), "html", null, true);
            echo "
                                                    </p>
                                                </div>
                                                <div class=\"review_name\">";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "nickname", [], "any", false, false, false, 162), "html", null, true);
            echo " / E-mail : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "email", [], "any", false, false, false, 162), "html", null, true);
            echo "</div>
                                                <div class=\"review_date\">Commenté le";
            // line 163
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 163), "d/m/Y "), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 163), "H:i"), "html", null, true);
            echo "</div>
                                            </div>

                                        </div>
                                        <div class=\"col-lg-2\"></div>
                                    </div>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "                                <!-- Review -->


                            </div>
                        </div>

                        <!-- Location on Map -->


                    </div>


                </div>

            </div>
        </div>



        <div class=\"search\">
            <div class=\"search_inner\">

                <!-- Search Contents -->

                <div class=\"container fill_height no-padding\">
                    <div class=\"row fill_height no-margin\">
                        <div class=\"col fill_height no-padding\">

                            <!-- Search Tabs -->

                            <div class=\"search_tabs_container\">
                                <div class=\"search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                                    <div class=\"search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/suitcase.png\" alt=\"\"><span>Ajouter un commentaire</span></div>

                                </div>
                            </div>
                            <div class=\"search_panel\">
                                 ";
        // line 208
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 208, $this->source); })()), 'form_start', ["id" => "search_form_3", "attr" => ["class" => "search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start"]]);
        echo "
                                    <div class=\"search_item\">
                                        <div>Commentez</div>
                                        ";
        // line 211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 211, $this->source); })()), "content", [], "any", false, false, false, 211), 'widget', ["id" => "input-categorie", "attr" => ["class" => "destination search_input", "placeholder" => "Avez-vous quelques choses à dire ? Commentez ici ! "]]);
        echo "
                                    </div>
                                <div class=\"search_item\">
                                    <div>Titre du commentaire</div>
                                    ";
        // line 215
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 215, $this->source); })()), "titleComment", [], "any", false, false, false, 215), 'widget', ["id" => "input-categorie", "attr" => ["class" => "destination search_input", "placeholder" => "Saisir un titre"]]);
        echo "
                                </div>
                                <div class=\"search_item\">
                                    <div>Votre E-mail</div>
                                    ";
        // line 219
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 219, $this->source); })()), "email", [], "any", false, false, false, 219), 'widget', ["id" => "input-categorie", "attr" => ["class" => "destination search_input", "placeholder" => "Votre E-mail"]]);
        echo "
                                </div>
                                <div class=\"search_item\">
                                    <div>Votre pseudo</div>
                                    ";
        // line 223
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 223, $this->source); })()), "nickname", [], "any", false, false, false, 223), 'widget', ["id" => "input-categorie", "attr" => ["class" => "destination search_input", "placeholder" => "Votre pseudo"]]);
        echo "
                                </div>
                                <div class=\"search_item\">
                                    <div>Rgpd</div>
                                    ";
        // line 227
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 227, $this->source); })()), "rgpd", [], "any", false, false, false, 227), 'widget', ["id" => "input-categorie", "attr" => ["class" => "destination search_input", "placeholder" => ""]]);
        echo "
                                </div>
                                    <button type=\"submit\" class=\"button search_button\">Envoyer le commentaire<span></span><span></span><span></span></button>
                                    ";
        // line 230
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 230, $this->source); })()), 'form_end');
        echo "

                            </div>

                            <!-- Search Panel -->



                            <!-- Search Panel -->


                            <!-- Search Panel -->

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
        return "place_front/listconsult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 230,  407 => 227,  400 => 223,  393 => 219,  386 => 215,  379 => 211,  373 => 208,  334 => 171,  318 => 163,  312 => 162,  306 => 159,  299 => 155,  295 => 154,  287 => 148,  283 => 147,  262 => 129,  258 => 128,  254 => 127,  250 => 126,  240 => 119,  194 => 75,  184 => 71,  180 => 70,  175 => 67,  171 => 66,  153 => 51,  148 => 49,  140 => 44,  129 => 36,  101 => 11,  96 => 9,  91 => 6,  81 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
{{places.titlePlace }}
{% endblock %}
{% block content %}
    <!-- Home -->

    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"{{ asset('/uploads/'~ places.picturePlace) }}\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">{{ places.titlePlace }}</div>
        </div>
    </div>

    <!-- Offers -->

    <div class=\"listing\">

        <!-- Search -->


        <!-- Single Listing -->

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"single_listing\">

                        <!-- Hotel Info -->

                        <div class=\"hotel_info\">

                            <!-- Title -->
                            <div class=\"hotel_title_container d-flex flex-lg-row flex-column\">
                                <div class=\"hotel_title_content\">
                                    <h1 class=\"hotel_title\">{{ places.titlePlace }}</h1>
                                    <div class=\"rating_r rating_r_4 hotel_rating\">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <div class=\"hotel_location\">{{ places.category }}</div>
                                </div>
                                <div class=\"hotel_title_button ml-lg-auto text-lg-right\">
                                    <div class=\"hotel_review\">
                                        <div class=\"hotel_review_content\">
                                            <div class=\"hotel_review_title\">{{ places.location }}</div>
                                        </div>
                                        <div class=\"hotel_review_rating_perfect text-center\">{{ places.nbView }} <i class=\"fa fa-eye\"></i></div>
                                    </div>
                                </div>

                            </div>

                            <!-- Listing Image -->



                            <!-- Hotel Gallery -->

                            <div class=\"hotel_gallery\" >
                                <div class=\"hotel_slider_container\">
                                    <div class=\"owl-carousel owl-theme hotel_slider\"  >
                                        {% for image in places.media %}
                                        <!-- Hotel Gallery Slider Item -->

                                            <div class=\"owl-item\">
                                                <a class=\"colorbox cboxElement\" href=\"{{ asset('/uploads/images/'~ image.imagePlace) }}\">
                                                    <img src=\"{{ asset('/uploads/images/'~ image.imagePlace) }}\" alt=\"https://unsplash.com/@jbriscoe\">
                                                </a>
                                            </div>
                                        {% endfor %}
                                    </div>

                                    <!-- Hotel Slider Nav - Prev -->
                                    <div class=\"hotel_slider_nav hotel_slider_prev\">
                                        <svg version=\"1.1\" id=\"Layer_6\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                             width=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t\t\t\t<defs>
                                                <linearGradient id='hotel_grad_prev'>
                                                    <stop offset='0%' stop-color='#fa9e1b'/>
                                                    <stop offset='100%' stop-color='#8d4fff'/>
                                                </linearGradient>
                                            </defs>
                                            <path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\t\t\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\t\t\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
                                            <polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
\t\t\t\t\t\t\t\t\t\t\t11.042,18.219 \"/>
\t\t\t\t\t\t\t\t\t\t</svg>
                                    </div>

                                    <!-- Hotel Slider Nav - Next -->
                                    <div class=\"hotel_slider_nav hotel_slider_next\">
                                        <svg version=\"1.1\" id=\"Layer_7\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                             width=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t\t\t\t<defs>
                                                <linearGradient id='hotel_grad_next'>
                                                    <stop offset='0%' stop-color='#fa9e1b'/>
                                                    <stop offset='100%' stop-color='#8d4fff'/>
                                                </linearGradient>
                                            </defs>
                                            <path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\t\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\t\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
                                            <polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
\t\t\t\t\t\t\t\t\t\t17.046,15.554 \"/>
\t\t\t\t\t\t\t\t\t\t</svg>
                                    </div>

                                </div>
                            </div>

                            <!-- Hotel Info Text -->

                            <div class=\"hotel_info_text\">
                                <p>{{ places.DescriptionPlace }}</p>
                            </div>

                            <!-- Hotel Info Tags -->

                            <div class=\"hotel_info_tags\">
                                <ul class=\"hotel_icons_list\">
                                    <li class=\"hotel_icons_item\"><img src=\"{{ asset('front/images/post.png') }}\" alt=\"\"></li>
                                    <li class=\"hotel_icons_item\"><img src=\"{{ asset('front/images/compass.png') }}\" alt=\"\"></li>
                                    <li class=\"hotel_icons_item\"><img src=\"{{ asset('front/images/bicycle.png') }}\" alt=\"\"></li>
                                    <li class=\"hotel_icons_item\"><img src=\"{{ asset('front/images/sailboat.png') }}\" alt=\"\"></li>
                                </ul>
                            </div>

                        </div>

                        <!-- Rooms -->



                        <!-- Reviews -->

                        <div class=\"reviews\">

                            <div class=\"reviews_title\" align=\"center\">Commentaires</div>
                            <div class=\"reviews_container\">

                                <!-- Review -->
                                {% for comment in places.commentsPlaces %}
                                <div class=\"review\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-2\"></div>
                                        <div class=\"col-lg-8\">
                                            <div class=\"review_content\">
                                                <div class=\"review_title_container\">
                                                    <div class=\"review_title\">{{ comment.titleComment }}</div>
                                                    <div class=\"review_rating\">{{ comment.createdAt|date(\"d/m \") }}</div>
                                                </div>
                                                <div class=\"review_text\">
                                                    <p>
                                                        {{ comment.content }}
                                                    </p>
                                                </div>
                                                <div class=\"review_name\">{{ comment.nickname }} / E-mail : {{ comment.email }}</div>
                                                <div class=\"review_date\">Commenté le{{ comment.createdAt|date(\"d/m/Y \") }} à {{ comment.createdAt|date(\"H:i\") }}</div>
                                            </div>

                                        </div>
                                        <div class=\"col-lg-2\"></div>
                                    </div>
                                </div>
                                {% endfor %}
                                <!-- Review -->


                            </div>
                        </div>

                        <!-- Location on Map -->


                    </div>


                </div>

            </div>
        </div>



        <div class=\"search\">
            <div class=\"search_inner\">

                <!-- Search Contents -->

                <div class=\"container fill_height no-padding\">
                    <div class=\"row fill_height no-margin\">
                        <div class=\"col fill_height no-padding\">

                            <!-- Search Tabs -->

                            <div class=\"search_tabs_container\">
                                <div class=\"search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                                    <div class=\"search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/suitcase.png\" alt=\"\"><span>Ajouter un commentaire</span></div>

                                </div>
                            </div>
                            <div class=\"search_panel\">
                                 {{ form_start(commentForm, {'id':'search_form_3','attr': {'class': 'search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start'}}) }}
                                    <div class=\"search_item\">
                                        <div>Commentez</div>
                                        {{form_widget(commentForm.content, {'id':'input-categorie','attr': {'class': 'destination search_input','placeholder':'Avez-vous quelques choses à dire ? Commentez ici ! '}}) }}
                                    </div>
                                <div class=\"search_item\">
                                    <div>Titre du commentaire</div>
                                    {{form_widget(commentForm.titleComment, {'id':'input-categorie','attr': {'class': 'destination search_input','placeholder':'Saisir un titre'}}) }}
                                </div>
                                <div class=\"search_item\">
                                    <div>Votre E-mail</div>
                                    {{form_widget(commentForm.email, {'id':'input-categorie','attr': {'class': 'destination search_input','placeholder':'Votre E-mail'}}) }}
                                </div>
                                <div class=\"search_item\">
                                    <div>Votre pseudo</div>
                                    {{form_widget(commentForm.nickname, {'id':'input-categorie','attr': {'class': 'destination search_input','placeholder':'Votre pseudo'}}) }}
                                </div>
                                <div class=\"search_item\">
                                    <div>Rgpd</div>
                                    {{form_widget(commentForm.rgpd, {'id':'input-categorie','attr': {'class': 'destination search_input','placeholder':''}}) }}
                                </div>
                                    <button type=\"submit\" class=\"button search_button\">Envoyer le commentaire<span></span><span></span><span></span></button>
                                    {{ form_end(commentForm) }}

                            </div>

                            <!-- Search Panel -->



                            <!-- Search Panel -->


                            <!-- Search Panel -->

                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>

{% endblock %}", "place_front/listconsult.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\place_front\\listconsult.html.twig");
    }
}
