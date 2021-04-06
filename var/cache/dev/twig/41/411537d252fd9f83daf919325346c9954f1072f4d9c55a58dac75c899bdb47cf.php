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

/* baseBack.html.twig */
class __TwigTemplate_5f5792f2ffc87181808892114bcee0ee3a8e64a52716e5f7b213bcba45f31726 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
    <meta name=\"description\" content=\"\"/>
    <meta name=\"author\" content=\"\"/>
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- loader-->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/pace.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/pace.min.js"), "html", null, true);
        echo "\"></script>
    <!--favicon-->
    <link rel=\"icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/favicon.ico "), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <!-- simplebar CSS-->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/simplebar/cssBack/simplebar.css "), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <!-- Bootstrap core CSS-->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/bootstrap.min.css "), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <!-- animate CSS-->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/animate.css "), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Icons CSS-->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Sidebar CSS-->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/sidebar-menu.css "), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <!-- Custom Style-->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/app-style.css "), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

</head>

<body class=\"bg-theme bg-theme1\">

<!-- start loader -->
<div id=\"pageloader-overlay\" class=\"visible incoming\"><div class=\"loader-wrapper-outer\"><div class=\"loader-wrapper-inner\" ><div class=\"loader\"></div></div></div></div>
<!-- end loader -->

<!-- Start wrapper-->
<div id=\"wrapper\">

    <!--Start sidebar-wrapper-->
    <div id=\"sidebar-wrapper\" data-simplebar=\"\" data-simplebar-auto-hide=\"true\">
        <div class=\"brand-logo\">
            <a href=\"index.html\">
                <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/logo-icon.png "), "html", null, true);
        echo "\" class=\"logo-icon\" alt=\"logo icon\">
                <h5 class=\"logo-text\">Eventure Admin</h5>
            </a>
        </div>
        <ul class=\"sidebar-menu do-nicescrol\">
            <li class=\"sidebar-header\">MAIN NAVIGATION</li>
            <li>
                <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("place");
        echo "\">
                    <i class=\"zmdi zmdi-view-dashboard\"></i> <span>Recommandations</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_users");
        echo "\" class=\"hovereffect\">
                    <i class=\"zmdi zmdi-accounts-add\"></i> <span>Gestion des utilisateurs</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activity_index");
        echo "\">
                    <i class=\"zmdi zmdi-bookmark\"></i> <span>Gestion des activités</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evennement");
        echo "\">
                    <i class=\"zmdi zmdi-grid\"></i> <span>Gestion des événements</span>
                </a>
            </li>
            
            <li>
                <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_template_promotions");
        echo "\" class=\"hovereffect\">
                    <i class=\"zmdi zmdi-accounts-add\"></i> <span>Gestion des promotions</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_template_publicitys");
        echo "\">
                    <i class=\"zmdi zmdi-bookmark\"></i> <span>Gestion des publicités</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        echo "\">
                    <i class=\"zmdi zmdi-card-giftcard\"></i> <span>Gestion des produits</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_index");
        echo "\">
                    <i class=\"zmdi zmdi-card-giftcard\"></i> <span>Categories des produits</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orderlist");
        echo "\">
                    <i class=\"zmdi zmdi-card-giftcard\"></i> <span>Gestion de commandes</span>
                </a>
            </li>
    <li>
                <a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index");
        echo "\">
                    <i class=\"zmdi zmdi-grid\"></i> <span>Gestion de Blog </span>
                </a>
            </li>
                <li>
                <a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_index");
        echo "\">
                    <i class=\"zmdi zmdi-grid\"></i> <span>Gestion de Communitées</span>
                </a>
            </li>
            





            <li>
                <a href=\"icons.html\">
                    <i class=\"zmdi zmdi-invert-colors\"></i> <span>UI Icons</span>
                </a>
            </li>

            <li>
                <a href=\"forms.html\">
                    <i class=\"zmdi zmdi-format-list-bulleted\"></i> <span>Forms</span>
                </a>
            </li>

            <li>
                <a href=\"tables.html\">
                    <i class=\"zmdi zmdi-grid\"></i> <span>Tables</span>
                </a>
            </li>

            <li>
                <a href=\"calendar.html\">
                    <i class=\"zmdi zmdi-calendar-check\"></i> <span>Calendar</span>
                    <small class=\"badge float-right badge-light\">New</small>
                </a>
            </li>

            <li>
                <a href=\"profile.html\">
                    <i class=\"zmdi zmdi-face\"></i> <span>Profile</span>
                </a>
            </li>

            <li>
                <a href=\"login.html\" target=\"_blank\">
                    <i class=\"zmdi zmdi-lock\"></i> <span>Login</span>
                </a>
            </li>

            <li>
                <a href=\"#\">
                    <i class=\"zmdi zmdi-bookmark\"></i> <span>GESTION DES ACTIVITES</span>
                </a>
            </li>

            <li class=\"sidebar-header\">LABELS</li>
            <li><a href=\"/javaScript:void();\"><i class=\"zmdi zmdi-coffee text-danger\"></i> <span>Important</span></a></li>
            <li><a href=\"/javaScript:void();\"><i class=\"zmdi zmdi-chart-donut text-success\"></i> <span>Warning</span></a></li>
            <li><a href=\"/javaScript:void();\"><i class=\"zmdi zmdi-share text-info\"></i> <span>Information</span></a></li>

        </ul>

    </div>
    <!--End sidebar-wrapper-->


    <!--Start topbar header-->
    <header class=\"topbar-nav\">
        <nav class=\"navbar navbar-expand fixed-top\">
            <ul class=\"navbar-nav mr-auto align-items-center\">
                <li class=\"nav-item\">
                    <a class=\"nav-link toggle-menu\" href=\"/javascript:void();\">
                        <i class=\"icon-menu menu-icon\"></i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <form class=\"search-bar\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Enter keywords\">
                        <a href=\"/javascript:void();\"><i class=\"icon-magnifier\"></i></a>
                    </form>
                </li>
            </ul>

            <ul class=\"navbar-nav align-items-center right-nav-link\">
                <li class=\"nav-item dropdown-lg\">
                    <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect\" data-toggle=\"dropdown\" href=\"/javascript:void();\">
                        <i class=\"fa fa-envelope-open-o\"></i></a>
                </li>
                <li class=\"nav-item dropdown-lg\">
                    <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect\" data-toggle=\"dropdown\" href=\"/javascript:void();\">
                        <i class=\"fa fa-bell-o\"></i></a>
                </li>
                <li class=\"nav-item language\">
                    <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect\" data-toggle=\"dropdown\" href=\"/javascript:void();\"><i class=\"fa fa-flag\"></i></a>
                    <ul class=\"dropdown-menu dropdown-menu-right\">
                        <li class=\"dropdown-item\"> <i class=\"flag-icon flag-icon-gb mr-2\"></i> English</li>
                        <li class=\"dropdown-item\"> <i class=\"flag-icon flag-icon-fr mr-2\"></i> French</li>
                        <li class=\"dropdown-item\"> <i class=\"flag-icon flag-icon-cn mr-2\"></i> Chinese</li>
                        <li class=\"dropdown-item\"> <i class=\"flag-icon flag-icon-de mr-2\"></i> German</li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret\" data-toggle=\"dropdown\" href=\"#\">
                        <span class=\"user-profile\"><img src=\"/user/";
        // line 202
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 202, $this->source); })()), "user", [], "any", false, false, false, 202), "pictureUser", [], "any", false, false, false, 202), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"user avatar\"></span>
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-right\">
                        <li class=\"dropdown-item user-details\">
                            <a href=\"/javaScript:void();\">
                                <div class=\"media\">
                                    <div class=\"avatar\"><img class=\"align-self-start mr-3\" src=\"/user/";
        // line 208
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 208, $this->source); })()), "user", [], "any", false, false, false, 208), "pictureUser", [], "any", false, false, false, 208), "html", null, true);
        echo "\" alt=\"user avatar\"></div>
                                    <div class=\"media-body\">
                                        <h6 class=\"mt-2 user-title\">";
        // line 210
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 210, $this->source); })()), "user", [], "any", false, false, false, 210), "firstName", [], "any", false, false, false, 210), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 210, $this->source); })()), "user", [], "any", false, false, false, 210), "lastName", [], "any", false, false, false, 210), "html", null, true);
        echo "</h6>
                                        <p class=\"user-subtitle\">";
        // line 211
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 211, $this->source); })()), "user", [], "any", false, false, false, 211), "email", [], "any", false, false, false, 211), "html", null, true);
        echo "</p>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class=\"dropdown-item \">
                            <a href=\"";
        // line 218
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                                <i class=\"icon-power mr-2\"></i> Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <!--End topbar header-->
    <div class=\"clearfix\"></div>
    <div class=\"content-wrapper\">
        <div class=\"container-fluid\">

            ";
        // line 232
        $this->displayBlock('content', $context, $blocks);
        // line 235
        echo "        </div>
        <!-- End container-fluid-->

    </div><!--End content-wrapper-->

    <!--Start Back To Top Button-->
    <a href=\"/javaScript:void();\" class=\"back-to-top\"><i class=\"fa fa-angle-double-up\"></i> </a>
    <!--End Back To Top Button-->

    <!--Start footer-->
    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"text-center\">

            </div>
        </div>
    </footer>
    <!--End footer-->

    <!--start color switcher-->
    <div class=\"right-sidebar\">
        <div class=\"switcher-icon\">
            <i class=\"zmdi zmdi-settings zmdi-hc-spin\"></i>
        </div>
        <div class=\"right-sidebar-content\">

            <p class=\"mb-0\">Gaussion Texture</p>
            <hr>

            <ul class=\"switcher\">
                <li id=\"theme1\"></li>
                <li id=\"theme2\"></li>
                <li id=\"theme3\"></li>
                <li id=\"theme4\"></li>
                <li id=\"theme5\"></li>
                <li id=\"theme6\"></li>
            </ul>

            <p class=\"mb-0\">Gradient Background</p>
            <hr>

            <ul class=\"switcher\">
                <li id=\"theme7\"></li>
                <li id=\"theme8\"></li>
                <li id=\"theme9\"></li>
                <li id=\"theme10\"></li>
                <li id=\"theme11\"></li>
                <li id=\"theme12\"></li>
                <li id=\"theme13\"></li>
                <li id=\"theme14\"></li>
                <li id=\"theme15\"></li>
            </ul>

        </div>
    </div>
    <!--end color switcher-->

</div><!--End wrapper-->


<!-- Bootstrap core JavaScript-->
<script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- simplebar js -->
<script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/simplebar/js/simplebar.js "), "html", null, true);
        echo "\"></script>
<!-- sidebar-menu js -->
<script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/sidebar-menu.js"), "html", null, true);
        echo "\"></script>

<!-- Custom scripts -->
<script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/app-script.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 232
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 233
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseBack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 233,  483 => 232,  465 => 9,  451 => 306,  445 => 303,  440 => 301,  434 => 298,  430 => 297,  426 => 296,  363 => 235,  361 => 232,  344 => 218,  334 => 211,  328 => 210,  323 => 208,  314 => 202,  210 => 101,  202 => 96,  194 => 91,  186 => 86,  178 => 81,  170 => 76,  162 => 71,  153 => 65,  145 => 60,  137 => 55,  129 => 50,  119 => 43,  99 => 26,  94 => 24,  89 => 22,  84 => 20,  79 => 18,  74 => 16,  69 => 14,  64 => 12,  60 => 11,  55 => 9,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
    <meta name=\"description\" content=\"\"/>
    <meta name=\"author\" content=\"\"/>
    <title>{% block title %}{% endblock %}</title>
    <!-- loader-->
    <link href=\"{{asset('back/css/pace.min.css')}}\" rel=\"stylesheet\"/>
    <script src=\"{{ asset('back/js/pace.min.js') }}\"></script>
    <!--favicon-->
    <link rel=\"icon\" href=\"{{ asset('back/images/favicon.ico ')}}\" type=\"image/x-icon\">
    <!-- simplebar CSS-->
    <link href=\"{{ asset('back/plugins/simplebar/cssBack/simplebar.css ')}}\" rel=\"stylesheet\"/>
    <!-- Bootstrap core CSS-->
    <link href=\"{{ asset('back/css/bootstrap.min.css ')}}\" rel=\"stylesheet\"/>
    <!-- animate CSS-->
    <link href=\"{{ asset('back/css/animate.css ')}}\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Icons CSS-->
    <link href=\"{{ asset('back/css/icons.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Sidebar CSS-->
    <link href=\"{{ asset('back/css/sidebar-menu.css ')}}\" rel=\"stylesheet\"/>
    <!-- Custom Style-->
    <link href=\"{{ asset('back/css/app-style.css ')}}\" rel=\"stylesheet\"/>

</head>

<body class=\"bg-theme bg-theme1\">

<!-- start loader -->
<div id=\"pageloader-overlay\" class=\"visible incoming\"><div class=\"loader-wrapper-outer\"><div class=\"loader-wrapper-inner\" ><div class=\"loader\"></div></div></div></div>
<!-- end loader -->

<!-- Start wrapper-->
<div id=\"wrapper\">

    <!--Start sidebar-wrapper-->
    <div id=\"sidebar-wrapper\" data-simplebar=\"\" data-simplebar-auto-hide=\"true\">
        <div class=\"brand-logo\">
            <a href=\"index.html\">
                <img src=\"{{ asset('back/images/logo-icon.png ')}}\" class=\"logo-icon\" alt=\"logo icon\">
                <h5 class=\"logo-text\">Eventure Admin</h5>
            </a>
        </div>
        <ul class=\"sidebar-menu do-nicescrol\">
            <li class=\"sidebar-header\">MAIN NAVIGATION</li>
            <li>
                <a href=\"{{ path('place') }}\">
                    <i class=\"zmdi zmdi-view-dashboard\"></i> <span>Recommandations</span>
                </a>
            </li>
            <li>
                <a href=\"{{ path('back_users') }}\" class=\"hovereffect\">
                    <i class=\"zmdi zmdi-accounts-add\"></i> <span>Gestion des utilisateurs</span>
                </a>
            </li>
            <li>
                <a href=\"{{ path('activity_index') }}\">
                    <i class=\"zmdi zmdi-bookmark\"></i> <span>Gestion des activités</span>
                </a>
            </li>
            <li>
                <a href=\"{{ path('evennement') }}\">
                    <i class=\"zmdi zmdi-grid\"></i> <span>Gestion des événements</span>
                </a>
            </li>
            
            <li>
                <a href=\"{{ path('back_template_promotions') }}\" class=\"hovereffect\">
                    <i class=\"zmdi zmdi-accounts-add\"></i> <span>Gestion des promotions</span>
                </a>
            </li>
            <li>
                <a href=\"{{ path('back_template_publicitys') }}\">
                    <i class=\"zmdi zmdi-bookmark\"></i> <span>Gestion des publicités</span>
                </a>
            </li>
            <li>
                <a href=\"{{ path('product_index') }}\">
                    <i class=\"zmdi zmdi-card-giftcard\"></i> <span>Gestion des produits</span>
                </a>
            </li>
            <li>
                <a href=\"{{ path('category_index') }}\">
                    <i class=\"zmdi zmdi-card-giftcard\"></i> <span>Categories des produits</span>
                </a>
            </li>
            <li>
                <a href=\"{{ path('orderlist') }}\">
                    <i class=\"zmdi zmdi-card-giftcard\"></i> <span>Gestion de commandes</span>
                </a>
            </li>
    <li>
                <a href=\"{{ path('blog_index') }}\">
                    <i class=\"zmdi zmdi-grid\"></i> <span>Gestion de Blog </span>
                </a>
            </li>
                <li>
                <a href=\"{{ path('community_index') }}\">
                    <i class=\"zmdi zmdi-grid\"></i> <span>Gestion de Communitées</span>
                </a>
            </li>
            





            <li>
                <a href=\"icons.html\">
                    <i class=\"zmdi zmdi-invert-colors\"></i> <span>UI Icons</span>
                </a>
            </li>

            <li>
                <a href=\"forms.html\">
                    <i class=\"zmdi zmdi-format-list-bulleted\"></i> <span>Forms</span>
                </a>
            </li>

            <li>
                <a href=\"tables.html\">
                    <i class=\"zmdi zmdi-grid\"></i> <span>Tables</span>
                </a>
            </li>

            <li>
                <a href=\"calendar.html\">
                    <i class=\"zmdi zmdi-calendar-check\"></i> <span>Calendar</span>
                    <small class=\"badge float-right badge-light\">New</small>
                </a>
            </li>

            <li>
                <a href=\"profile.html\">
                    <i class=\"zmdi zmdi-face\"></i> <span>Profile</span>
                </a>
            </li>

            <li>
                <a href=\"login.html\" target=\"_blank\">
                    <i class=\"zmdi zmdi-lock\"></i> <span>Login</span>
                </a>
            </li>

            <li>
                <a href=\"#\">
                    <i class=\"zmdi zmdi-bookmark\"></i> <span>GESTION DES ACTIVITES</span>
                </a>
            </li>

            <li class=\"sidebar-header\">LABELS</li>
            <li><a href=\"/javaScript:void();\"><i class=\"zmdi zmdi-coffee text-danger\"></i> <span>Important</span></a></li>
            <li><a href=\"/javaScript:void();\"><i class=\"zmdi zmdi-chart-donut text-success\"></i> <span>Warning</span></a></li>
            <li><a href=\"/javaScript:void();\"><i class=\"zmdi zmdi-share text-info\"></i> <span>Information</span></a></li>

        </ul>

    </div>
    <!--End sidebar-wrapper-->


    <!--Start topbar header-->
    <header class=\"topbar-nav\">
        <nav class=\"navbar navbar-expand fixed-top\">
            <ul class=\"navbar-nav mr-auto align-items-center\">
                <li class=\"nav-item\">
                    <a class=\"nav-link toggle-menu\" href=\"/javascript:void();\">
                        <i class=\"icon-menu menu-icon\"></i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <form class=\"search-bar\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Enter keywords\">
                        <a href=\"/javascript:void();\"><i class=\"icon-magnifier\"></i></a>
                    </form>
                </li>
            </ul>

            <ul class=\"navbar-nav align-items-center right-nav-link\">
                <li class=\"nav-item dropdown-lg\">
                    <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect\" data-toggle=\"dropdown\" href=\"/javascript:void();\">
                        <i class=\"fa fa-envelope-open-o\"></i></a>
                </li>
                <li class=\"nav-item dropdown-lg\">
                    <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect\" data-toggle=\"dropdown\" href=\"/javascript:void();\">
                        <i class=\"fa fa-bell-o\"></i></a>
                </li>
                <li class=\"nav-item language\">
                    <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect\" data-toggle=\"dropdown\" href=\"/javascript:void();\"><i class=\"fa fa-flag\"></i></a>
                    <ul class=\"dropdown-menu dropdown-menu-right\">
                        <li class=\"dropdown-item\"> <i class=\"flag-icon flag-icon-gb mr-2\"></i> English</li>
                        <li class=\"dropdown-item\"> <i class=\"flag-icon flag-icon-fr mr-2\"></i> French</li>
                        <li class=\"dropdown-item\"> <i class=\"flag-icon flag-icon-cn mr-2\"></i> Chinese</li>
                        <li class=\"dropdown-item\"> <i class=\"flag-icon flag-icon-de mr-2\"></i> German</li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret\" data-toggle=\"dropdown\" href=\"#\">
                        <span class=\"user-profile\"><img src=\"/user/{{ app.user.pictureUser }}\" class=\"img-circle\" alt=\"user avatar\"></span>
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-right\">
                        <li class=\"dropdown-item user-details\">
                            <a href=\"/javaScript:void();\">
                                <div class=\"media\">
                                    <div class=\"avatar\"><img class=\"align-self-start mr-3\" src=\"/user/{{ app.user.pictureUser }}\" alt=\"user avatar\"></div>
                                    <div class=\"media-body\">
                                        <h6 class=\"mt-2 user-title\">{{ app.user.firstName }} {{ app.user.lastName }}</h6>
                                        <p class=\"user-subtitle\">{{ app.user.email }}</p>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class=\"dropdown-item \">
                            <a href=\"{{ path('app_logout') }}\">
                                <i class=\"icon-power mr-2\"></i> Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <!--End topbar header-->
    <div class=\"clearfix\"></div>
    <div class=\"content-wrapper\">
        <div class=\"container-fluid\">

            {%  block content %}

            {% endblock %}
        </div>
        <!-- End container-fluid-->

    </div><!--End content-wrapper-->

    <!--Start Back To Top Button-->
    <a href=\"/javaScript:void();\" class=\"back-to-top\"><i class=\"fa fa-angle-double-up\"></i> </a>
    <!--End Back To Top Button-->

    <!--Start footer-->
    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"text-center\">

            </div>
        </div>
    </footer>
    <!--End footer-->

    <!--start color switcher-->
    <div class=\"right-sidebar\">
        <div class=\"switcher-icon\">
            <i class=\"zmdi zmdi-settings zmdi-hc-spin\"></i>
        </div>
        <div class=\"right-sidebar-content\">

            <p class=\"mb-0\">Gaussion Texture</p>
            <hr>

            <ul class=\"switcher\">
                <li id=\"theme1\"></li>
                <li id=\"theme2\"></li>
                <li id=\"theme3\"></li>
                <li id=\"theme4\"></li>
                <li id=\"theme5\"></li>
                <li id=\"theme6\"></li>
            </ul>

            <p class=\"mb-0\">Gradient Background</p>
            <hr>

            <ul class=\"switcher\">
                <li id=\"theme7\"></li>
                <li id=\"theme8\"></li>
                <li id=\"theme9\"></li>
                <li id=\"theme10\"></li>
                <li id=\"theme11\"></li>
                <li id=\"theme12\"></li>
                <li id=\"theme13\"></li>
                <li id=\"theme14\"></li>
                <li id=\"theme15\"></li>
            </ul>

        </div>
    </div>
    <!--end color switcher-->

</div><!--End wrapper-->


<!-- Bootstrap core JavaScript-->
<script src=\"{{  asset('back/js/jquery.min.js')}}\"></script>
<script src=\"{{  asset('back/js/popper.min.js')}}\"></script>
<script src=\"{{  asset('back/js/bootstrap.min.js')}}\"></script>

<!-- simplebar js -->
<script src=\"{{ asset('back/plugins/simplebar/js/simplebar.js ')}}\"></script>
<!-- sidebar-menu js -->
<script src=\"{{asset ('back/js/sidebar-menu.js') }}\"></script>

<!-- Custom scripts -->
<script src=\"{{  asset('back/js/app-script.js')}}\"></script>

</body>
</html>", "baseBack.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\baseBack.html.twig");
    }
}
