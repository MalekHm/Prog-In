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

/* base.html.twig */
class __TwigTemplate_61d2aac208ca8b4b978a87882347313500fe929228a3c8af81283450823331e6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Blog</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"Travelix Project\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/colorbox/colorbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/blog_styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/blog_responsive.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/about_responsive.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/about_styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/contact_responsive.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/contact_styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/elements_responsive.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/elements_styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/main_responsive.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/offers_styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/offers_responsive.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/responsive.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/single_listing_responsive.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/single_listing_styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/colorbox/colorbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/single_listing_styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/single_listing_responsive.css"), "html", null, true);
        echo "\">
</head>

<body>

<div class=\"super_container\">

    <!-- Header -->

    <header class=\"header\">

        <!-- Top Bar -->

        <div class=\"top_bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col d-flex flex-row\">
                        <div class=\"phone\">+45 345 3324 56789</div>
                        <div class=\"social\">
                            <ul class=\"social_list\">
                                <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a></li>
                                <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                            </ul>
                        </div>
                        ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63)) {
            // line 64
            echo "                            <div class=\"user_box ml-auto\">
                                <div class=\" user_box_link\"><a>    <img class=\"rounded-circle \" width=\"25px\" src=\"/user/";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "pictureUser", [], "any", false, false, false, 65), "html", null, true);
            echo "\" alt=\"user avatar\"></a></div>



                                <div class=\"user_box_login user_box_link\"><a>Connecté en tant que ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "firstName", [], "any", false, false, false, 69), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "lastName", [], "any", false, false, false, 69), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "role", [], "any", false, false, false, 69), "html", null, true);
            echo ")</a></div>
                                <a class=\"btn  text-danger user_box_link btn-sm rounded-0\" href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\"><i class=\"fa fa-sign-out\"></i></a>

                            </div>
                        ";
        } else {
            // line 74
            echo "                            <div class=\"user_box ml-auto\">
                                <div class=\"user_box_login user_box_link\"><a href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">login</a></div>
                                <div class=\"user_box_register user_box_link\"><a href=\"";
            // line 76
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
            echo "\">register</a></div>
                            </div>
                        ";
        }
        // line 79
        echo "
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->

        <nav class=\"main_nav\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col main_nav_col d-flex flex-row align-items-center justify-content-start\">
                        <div class=\"logo_container\">
                            <div class=\"logo\"><a href=\"#\"><img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/logo.png"), "html", null, true);
        echo "\" alt=\"\">travelix</a></div>
                        </div>
                        <div class=\"main_nav_container ml-auto\">
                            <ul class=\"main_nav_list\">
                                <li class=\"main_nav_item\"><a href=\"index.html\">home</a></li>
                                <li class=\"main_nav_item\"><a href=\"about.html\">about us</a></li>
                                <li class=\"main_nav_item\"><a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evennement_front");
        echo "\">Evenements</a></li>
                                ";
        // line 99
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99)) {
            // line 100
            echo "                                <li class=\"main_nav_item\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_event_front");
            echo "\">Mes Réservations</a></li>
                                ";
        }
        // line 102
        echo "                                <li class=\"main_nav_item\"><a href=\"contact.html\">contact</a></li>
                            </ul>
                        </div>
                        <div class=\"content_search ml-lg-0 ml-auto\">
                            <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                 width=\"17px\" height=\"17px\" viewBox=\"0 0 512 512\" enable-background=\"new 0 0 512 512\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<g>
                                    <g>
                                        <g>
                                            <path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
\t\t\t\t\t\t\t\t\t\t\ts112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
\t\t\t\t\t\t\t\t\t\t\tC407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
\t\t\t\t\t\t\t\t\t\t\tM119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
\t\t\t\t\t\t\t\t\t\t\tc0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z\"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
\t\t\t\t\t\t\t\t\t\t\tc8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
\t\t\t\t\t\t\t\t\t\t\tC-2.019,484.77-2.019,497.865,6.057,505.942z\"/>
                                        </g>
                                    </g>
                                </g>
\t\t\t\t\t\t\t</svg>
                        </div>

                        <form id=\"search_form\" class=\"search_form bez_1\">
                            <input type=\"search\" class=\"search_content_input bez_1\">
                        </form>

                        <div class=\"hamburger\">
                            <i class=\"fa fa-bars trans_200\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </header>

    <div class=\"menu trans_500\">
        <div class=\"menu_content d-flex flex-column align-items-center justify-content-center text-center\">
            <div class=\"menu_close_container\"><div class=\"menu_close\"></div></div>
            <div class=\"logo menu_logo\"><a href=\"#\"><img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a></div>
            <ul>
                <li class=\"menu_item\"><a href=\"index.html\">home</a></li>
                <li class=\"menu_item\"><a href=\"about.html\">about us</a></li>
                <li class=\"menu_item\"><a href=\"offers.html\">offers</a></li>
                <li class=\"menu_item\"><a href=\"#\">news</a></li>
                <li class=\"menu_item\"><a href=\"contact.html\">contact</a></li>
            </ul>
        </div>
    </div>

    <!-- Home -->

    ";
        // line 159
        $this->displayBlock('content', $context, $blocks);
        // line 161
        echo "    <!-- Footer -->

    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">

                <!-- Footer Column -->
                <div class=\"col-lg-3 footer_column\">
                    <div class=\"footer_col\">
                        <div class=\"footer_content footer_about\">
                            <div class=\"logo_container footer_logo\">
                                <div class=\"logo\"><a href=\"#\"><img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/logo.png"), "html", null, true);
        echo "\" alt=\"\">travelix</a></div>
                            </div>
                            <p class=\"footer_about_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
                            <ul class=\"footer_social_list\">
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class=\"col-lg-3 footer_column\">
                    <div class=\"footer_col\">
                        <div class=\"footer_title\">blog posts</div>
                        <div class=\"footer_content footer_blog\">

                            <!-- Footer blog item -->
                            <div class=\"footer_blog_item clearfix\">
                                <div class=\"footer_blog_image\"><img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/footer_blog_1.jpg"), "html", null, true);
        echo "\" alt=\"https://unsplash.com/@avidenov\"></div>
                                <div class=\"footer_blog_content\">
                                    <div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
                                    <div class=\"footer_blog_date\">Nov 29, 2017</div>
                                </div>
                            </div>

                            <!-- Footer blog item -->
                            <div class=\"footer_blog_item clearfix\">
                                <div class=\"footer_blog_image\"><img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/footer_blog_2.jpg"), "html", null, true);
        echo "\" alt=\"https://unsplash.com/@deannaritchie\"></div>
                                <div class=\"footer_blog_content\">
                                    <div class=\"footer_blog_title\"><a href=\"blog.html\">New destinations for you</a></div>
                                    <div class=\"footer_blog_date\">Nov 29, 2017</div>
                                </div>
                            </div>

                            <!-- Footer blog item -->
                            <div class=\"footer_blog_item clearfix\">
                                <div class=\"footer_blog_image\"><img src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/footer_blog_3.jpg"), "html", null, true);
        echo "\" alt=\"https://unsplash.com/@bergeryap87\"></div>
                                <div class=\"footer_blog_content\">
                                    <div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
                                    <div class=\"footer_blog_date\">Nov 29, 2017</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class=\"col-lg-3 footer_column\">
                    <div class=\"footer_col\">
                        <div class=\"footer_title\">tags</div>
                        <div class=\"footer_content footer_tags\">
                            <ul class=\"tags_list clearfix\">
                                <li class=\"tag_item\"><a href=\"#\">design</a></li>
                                <li class=\"tag_item\"><a href=\"#\">fashion</a></li>
                                <li class=\"tag_item\"><a href=\"#\">music</a></li>
                                <li class=\"tag_item\"><a href=\"#\">video</a></li>
                                <li class=\"tag_item\"><a href=\"#\">party</a></li>
                                <li class=\"tag_item\"><a href=\"#\">photography</a></li>
                                <li class=\"tag_item\"><a href=\"#\">adventure</a></li>
                                <li class=\"tag_item\"><a href=\"#\">travel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class=\"col-lg-3 footer_column\">
                    <div class=\"footer_col\">
                        <div class=\"footer_title\">contact info</div>
                        <div class=\"footer_content footer_contact\">
                            <ul class=\"contact_info_list\">
                                <li class=\"contact_info_item d-flex flex-row\">
                                    <div><div class=\"contact_info_icon\"><img src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/placeholder.svg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\">4127 Raoul Wallenber 45b-c Gibraltar</div>
                                </li>
                                <li class=\"contact_info_item d-flex flex-row\">
                                    <div><div class=\"contact_info_icon\"><img src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/phone-call.svg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\">2556-808-8613</div>
                                </li>
                                <li class=\"contact_info_item d-flex flex-row\">
                                    <div><div class=\"contact_info_icon\"><img src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/message.svg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\"><a href=\"mailto:contactme@gmail.com?Subject=Hello\" target=\"_top\">contactme@gmail.com</a></div>
                                </li>
                                <li class=\"contact_info_item d-flex flex-row\">
                                    <div><div class=\"contact_info_icon\"><img src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/planet-earth.svg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\"><a href=\"https://colorlib.com\">www.colorlib.com</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- Copyright -->

    <div class=\"copyright\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 order-lg-1 order-2  \">
                    <div class=\"copyright_content d-flex flex-row align-items-center\">
                        <div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                    </div>
                </div>
                <div class=\"col-lg-9 order-lg-2 order-1\">
                    <div class=\"footer_nav_container d-flex flex-row align-items-center justify-content-lg-end\">
                        <div class=\"footer_nav\">
                            <ul class=\"footer_nav_list\">
                                <li class=\"footer_nav_item\"><a href=\"index.html\">home</a></li>
                                <li class=\"footer_nav_item\"><a href=\"about.html\">about us</a></li>
                                <li class=\"footer_nav_item\"><a href=\"offers.html\">offers</a></li>
                                <li class=\"footer_nav_item\"><a href=\"#\">news</a></li>
                                <li class=\"footer_nav_item\"><a href=\"contact.html\">contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/parallax-js-master/parallax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/colorbox/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/single_listing_custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/colorbox/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/parallax-js-master/parallax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/blog_custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/offers_custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/Isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/parallax-js-master/parallax.min.js"), "html", null, true);
        echo "\"></script>





<script src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/parallax-js-master/parallax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/colorbox/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/single_listing_custom.js"), "html", null, true);
        echo "\"></script>


</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 159
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 160
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  644 => 160,  634 => 159,  618 => 337,  614 => 336,  610 => 335,  606 => 334,  602 => 333,  598 => 332,  594 => 331,  590 => 330,  581 => 324,  577 => 323,  573 => 322,  569 => 321,  565 => 320,  561 => 319,  557 => 318,  553 => 317,  549 => 316,  545 => 315,  541 => 314,  537 => 313,  533 => 312,  529 => 311,  525 => 310,  521 => 309,  517 => 308,  513 => 307,  509 => 306,  505 => 305,  501 => 304,  497 => 303,  452 => 261,  445 => 257,  438 => 253,  431 => 249,  391 => 212,  379 => 203,  367 => 194,  342 => 172,  329 => 161,  327 => 159,  311 => 146,  265 => 102,  259 => 100,  257 => 99,  253 => 98,  244 => 92,  229 => 79,  223 => 76,  219 => 75,  216 => 74,  209 => 70,  201 => 69,  194 => 65,  191 => 64,  189 => 63,  158 => 35,  154 => 34,  150 => 33,  146 => 32,  142 => 31,  138 => 30,  134 => 29,  130 => 28,  126 => 27,  122 => 26,  118 => 25,  114 => 24,  110 => 23,  106 => 22,  102 => 21,  98 => 20,  94 => 19,  90 => 18,  86 => 17,  82 => 16,  78 => 15,  74 => 14,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Blog</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"Travelix Project\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('front/styles/bootstrap4/bootstrap.min.css') }}\">
    <link href=\"{{ asset('front/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('front/plugins/colorbox/colorbox.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('front/styles/blog_styles.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('front/styles/blog_responsive.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('front/styles/about_responsive.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('front/styles/about_styles.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('front/styles/contact_responsive.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('front/styles/contact_styles.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('front/styles/elements_responsive.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('front/styles/elements_styles.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('front/styles/main_responsive.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('front/styles/offers_styles.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('front/styles/bootstrap4/bootstrap.min.css') }}\">
    <link href=\"{{ asset('front/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('front/styles/offers_responsive.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('front/styles/responsive.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('front/styles/single_listing_responsive.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('front/styles/single_listing_styles.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('front/styles/bootstrap4/bootstrap.min.css') }}\">
    <link href=\"{{ asset('front/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('front/plugins/colorbox/colorbox.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('front/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('front/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('front/plugins/OwlCarousel2-2.2.1/animate.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('front/styles/single_listing_styles.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('front/styles/single_listing_responsive.css') }}\">
</head>

<body>

<div class=\"super_container\">

    <!-- Header -->

    <header class=\"header\">

        <!-- Top Bar -->

        <div class=\"top_bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col d-flex flex-row\">
                        <div class=\"phone\">+45 345 3324 56789</div>
                        <div class=\"social\">
                            <ul class=\"social_list\">
                                <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a></li>
                                <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                            </ul>
                        </div>
                        {% if app.user %}
                            <div class=\"user_box ml-auto\">
                                <div class=\" user_box_link\"><a>    <img class=\"rounded-circle \" width=\"25px\" src=\"/user/{{ app.user.pictureUser }}\" alt=\"user avatar\"></a></div>



                                <div class=\"user_box_login user_box_link\"><a>Connecté en tant que {{ app.user.firstName }} {{ app.user.lastName }} ({{ app.user.role }})</a></div>
                                <a class=\"btn  text-danger user_box_link btn-sm rounded-0\" href=\"{{ path('app_logout') }}\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\"><i class=\"fa fa-sign-out\"></i></a>

                            </div>
                        {% else %}
                            <div class=\"user_box ml-auto\">
                                <div class=\"user_box_login user_box_link\"><a href=\"{{ path('app_login') }}\">login</a></div>
                                <div class=\"user_box_register user_box_link\"><a href=\"{{ path('inscription') }}\">register</a></div>
                            </div>
                        {% endif %}

                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->

        <nav class=\"main_nav\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col main_nav_col d-flex flex-row align-items-center justify-content-start\">
                        <div class=\"logo_container\">
                            <div class=\"logo\"><a href=\"#\"><img src=\"{{ asset('front/images/logo.png') }}\" alt=\"\">travelix</a></div>
                        </div>
                        <div class=\"main_nav_container ml-auto\">
                            <ul class=\"main_nav_list\">
                                <li class=\"main_nav_item\"><a href=\"index.html\">home</a></li>
                                <li class=\"main_nav_item\"><a href=\"about.html\">about us</a></li>
                                <li class=\"main_nav_item\"><a href=\"{{ path('evennement_front') }}\">Evenements</a></li>
                                {% if app.user %}
                                <li class=\"main_nav_item\"><a href=\"{{ path('reservation_event_front') }}\">Mes Réservations</a></li>
                                {% endif %}
                                <li class=\"main_nav_item\"><a href=\"contact.html\">contact</a></li>
                            </ul>
                        </div>
                        <div class=\"content_search ml-lg-0 ml-auto\">
                            <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                 width=\"17px\" height=\"17px\" viewBox=\"0 0 512 512\" enable-background=\"new 0 0 512 512\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<g>
                                    <g>
                                        <g>
                                            <path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
\t\t\t\t\t\t\t\t\t\t\ts112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
\t\t\t\t\t\t\t\t\t\t\tC407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
\t\t\t\t\t\t\t\t\t\t\tM119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
\t\t\t\t\t\t\t\t\t\t\tc0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z\"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
\t\t\t\t\t\t\t\t\t\t\tc8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
\t\t\t\t\t\t\t\t\t\t\tC-2.019,484.77-2.019,497.865,6.057,505.942z\"/>
                                        </g>
                                    </g>
                                </g>
\t\t\t\t\t\t\t</svg>
                        </div>

                        <form id=\"search_form\" class=\"search_form bez_1\">
                            <input type=\"search\" class=\"search_content_input bez_1\">
                        </form>

                        <div class=\"hamburger\">
                            <i class=\"fa fa-bars trans_200\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </header>

    <div class=\"menu trans_500\">
        <div class=\"menu_content d-flex flex-column align-items-center justify-content-center text-center\">
            <div class=\"menu_close_container\"><div class=\"menu_close\"></div></div>
            <div class=\"logo menu_logo\"><a href=\"#\"><img src=\"{{ asset('front/images/logo.png') }}\" alt=\"\"></a></div>
            <ul>
                <li class=\"menu_item\"><a href=\"index.html\">home</a></li>
                <li class=\"menu_item\"><a href=\"about.html\">about us</a></li>
                <li class=\"menu_item\"><a href=\"offers.html\">offers</a></li>
                <li class=\"menu_item\"><a href=\"#\">news</a></li>
                <li class=\"menu_item\"><a href=\"contact.html\">contact</a></li>
            </ul>
        </div>
    </div>

    <!-- Home -->

    {% block content %}
    {% endblock %}
    <!-- Footer -->

    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">

                <!-- Footer Column -->
                <div class=\"col-lg-3 footer_column\">
                    <div class=\"footer_col\">
                        <div class=\"footer_content footer_about\">
                            <div class=\"logo_container footer_logo\">
                                <div class=\"logo\"><a href=\"#\"><img src=\"{{ asset('front/images/logo.png') }}\" alt=\"\">travelix</a></div>
                            </div>
                            <p class=\"footer_about_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
                            <ul class=\"footer_social_list\">
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class=\"col-lg-3 footer_column\">
                    <div class=\"footer_col\">
                        <div class=\"footer_title\">blog posts</div>
                        <div class=\"footer_content footer_blog\">

                            <!-- Footer blog item -->
                            <div class=\"footer_blog_item clearfix\">
                                <div class=\"footer_blog_image\"><img src=\"{{ asset('front/images/footer_blog_1.jpg') }}\" alt=\"https://unsplash.com/@avidenov\"></div>
                                <div class=\"footer_blog_content\">
                                    <div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
                                    <div class=\"footer_blog_date\">Nov 29, 2017</div>
                                </div>
                            </div>

                            <!-- Footer blog item -->
                            <div class=\"footer_blog_item clearfix\">
                                <div class=\"footer_blog_image\"><img src=\"{{ asset('front/images/footer_blog_2.jpg') }}\" alt=\"https://unsplash.com/@deannaritchie\"></div>
                                <div class=\"footer_blog_content\">
                                    <div class=\"footer_blog_title\"><a href=\"blog.html\">New destinations for you</a></div>
                                    <div class=\"footer_blog_date\">Nov 29, 2017</div>
                                </div>
                            </div>

                            <!-- Footer blog item -->
                            <div class=\"footer_blog_item clearfix\">
                                <div class=\"footer_blog_image\"><img src=\"{{ asset('front/images/footer_blog_3.jpg') }}\" alt=\"https://unsplash.com/@bergeryap87\"></div>
                                <div class=\"footer_blog_content\">
                                    <div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
                                    <div class=\"footer_blog_date\">Nov 29, 2017</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class=\"col-lg-3 footer_column\">
                    <div class=\"footer_col\">
                        <div class=\"footer_title\">tags</div>
                        <div class=\"footer_content footer_tags\">
                            <ul class=\"tags_list clearfix\">
                                <li class=\"tag_item\"><a href=\"#\">design</a></li>
                                <li class=\"tag_item\"><a href=\"#\">fashion</a></li>
                                <li class=\"tag_item\"><a href=\"#\">music</a></li>
                                <li class=\"tag_item\"><a href=\"#\">video</a></li>
                                <li class=\"tag_item\"><a href=\"#\">party</a></li>
                                <li class=\"tag_item\"><a href=\"#\">photography</a></li>
                                <li class=\"tag_item\"><a href=\"#\">adventure</a></li>
                                <li class=\"tag_item\"><a href=\"#\">travel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class=\"col-lg-3 footer_column\">
                    <div class=\"footer_col\">
                        <div class=\"footer_title\">contact info</div>
                        <div class=\"footer_content footer_contact\">
                            <ul class=\"contact_info_list\">
                                <li class=\"contact_info_item d-flex flex-row\">
                                    <div><div class=\"contact_info_icon\"><img src=\"{{ asset('front/images/placeholder.svg') }}\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\">4127 Raoul Wallenber 45b-c Gibraltar</div>
                                </li>
                                <li class=\"contact_info_item d-flex flex-row\">
                                    <div><div class=\"contact_info_icon\"><img src=\"{{ asset('front/images/phone-call.svg') }}\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\">2556-808-8613</div>
                                </li>
                                <li class=\"contact_info_item d-flex flex-row\">
                                    <div><div class=\"contact_info_icon\"><img src=\"{{ asset('front/images/message.svg') }}\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\"><a href=\"mailto:contactme@gmail.com?Subject=Hello\" target=\"_top\">contactme@gmail.com</a></div>
                                </li>
                                <li class=\"contact_info_item d-flex flex-row\">
                                    <div><div class=\"contact_info_icon\"><img src=\"{{ asset('front/images/planet-earth.svg') }}\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\"><a href=\"https://colorlib.com\">www.colorlib.com</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- Copyright -->

    <div class=\"copyright\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 order-lg-1 order-2  \">
                    <div class=\"copyright_content d-flex flex-row align-items-center\">
                        <div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                    </div>
                </div>
                <div class=\"col-lg-9 order-lg-2 order-1\">
                    <div class=\"footer_nav_container d-flex flex-row align-items-center justify-content-lg-end\">
                        <div class=\"footer_nav\">
                            <ul class=\"footer_nav_list\">
                                <li class=\"footer_nav_item\"><a href=\"index.html\">home</a></li>
                                <li class=\"footer_nav_item\"><a href=\"about.html\">about us</a></li>
                                <li class=\"footer_nav_item\"><a href=\"offers.html\">offers</a></li>
                                <li class=\"footer_nav_item\"><a href=\"#\">news</a></li>
                                <li class=\"footer_nav_item\"><a href=\"contact.html\">contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src=\"{{ asset('front/js/jquery-3.2.1.min.js') }}\"></script>
<script src=\"{{ asset('front/styles/bootstrap4/popper.js') }}\"></script>
<script src=\"{{ asset('front/styles/bootstrap4/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('front/plugins/easing/easing.js') }}\"></script>
<script src=\"{{ asset('front/plugins/parallax-js-master/parallax.min.js') }}\"></script>
<script src=\"{{ asset('front/plugins/colorbox/jquery.colorbox-min.js') }}\"></script>
<script src=\"{{ asset('front/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}\"></script>
<script src=\"{{ asset('front/https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA')}}\"></script>
<script src=\"{{ asset('front/js/single_listing_custom.js') }}\"></script>
<script src=\"{{ asset('front/js/jquery-3.2.1.min.js') }}\"></script>
<script src=\"{{ asset('front/styles/bootstrap4/popper.js') }}\"></script>
<script src=\"{{ asset('front/styles/bootstrap4/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('front/plugins/colorbox/jquery.colorbox-min.js') }}\"></script>
<script src=\"{{ asset('front/plugins/parallax-js-master/parallax.min.js') }}\"></script>
<script src=\"{{ asset('front/js/blog_custom.js') }}\"></script>
<script src=\"{{ asset('front/js/offers_custom.js') }}\"></script>
<script src=\"{{ asset('front/js/jquery-3.2.1.min.js') }}\"></script>
<script src=\"{{ asset('front/styles/bootstrap4/popper.js') }}\"></script>
<script src=\"{{ asset('front/styles/bootstrap4/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('front/plugins/Isotope/isotope.pkgd.min.js') }}\"></script>
<script src=\"{{ asset('front/plugins/easing/easing.js') }}\"></script>
<script src=\"{{ asset('front/plugins/parallax-js-master/parallax.min.js') }}\"></script>





<script src=\"{{ asset('front/js/jquery-3.2.1.min.js') }}\"></script>
<script src=\"{{ asset('front/styles/bootstrap4/popper.js') }}\"></script>
<script src=\"{{ asset('front/styles/bootstrap4/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('front/plugins/easing/easing.js') }}\"></script>
<script src=\"{{ asset('front/plugins/parallax-js-master/parallax.min.js') }}\"></script>
<script src=\"{{ asset('front/plugins/colorbox/jquery.colorbox-min.js') }}\"></script>
<script src=\"{{ asset('front/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}\"></script>
<script src=\"{{ asset('front/js/single_listing_custom.js') }}\"></script>


</body>

</html>", "base.html.twig", "/var/www/html/Prog-In-master/templates/base.html.twig");
    }
}
