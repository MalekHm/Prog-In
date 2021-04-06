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

/* security/forget_password.html.twig */
class __TwigTemplate_a92520331dd2071d28a2517976e59d2e89566e061a1f2539e85cbcd54e4edddf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/forget_password.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/forget_password.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/pace.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/pace.min.js"), "html", null, true);
        echo "\"></script>
    <!--favicon-->
    <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/favicon.ico "), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <!-- simplebar CSS-->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/simplebar/cssBack/simplebar.css "), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <!-- Bootstrap core CSS-->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/bootstrap.min.css "), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <!-- animate CSS-->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/animate.css "), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Icons CSS-->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Sidebar CSS-->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/sidebar-menu.css "), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <!-- Custom Style-->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/app-style.css "), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

</head>

<body class=\"bg-theme bg-theme1\">

<!-- start loader -->
<div id=\"pageloader-overlay\" class=\"visible incoming\"><div class=\"loader-wrapper-outer\"><div class=\"loader-wrapper-inner\" ><div class=\"loader\"></div></div></div></div>
<!-- end loader -->

<!-- Start wrapper-->
<div id=\"wrapper\">


    <div class=\"height-100v d-flex align-items-center justify-content-center\">
        <div class=\"card card-authentication1 mb-0\">
            <div class=\"card-body\">
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 37
            echo "                    <div class=\"alert text-success\">
                        ";
            // line 38
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 42
            echo "                    <div class=\"alert text-danger\">
                        ";
            // line 43
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 47
            echo "                    <div class=\"alert alert-warning\">
                        ";
            // line 48
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 52
            echo "                    <div class=\"alert text-success\">
                        ";
            // line 53
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                <div class=\"card-content p-2\">
                    <div class=\"card-title text-uppercase pb-2\">Reset Password</div>
                    <p class=\"pb-2\">Please enter your email address. You will receive a link to create a new password via email.</p>
                    <form method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"exampleInputEmailAddress\" class=\"\">Email Address</label>
                            <div class=\"position-relative has-icon-right\">
                                <input type=\"text\" id=\"exampleInputEmailAddress\" class=\"form-control input-shadow\" name=\"email\" placeholder=\"Email Address\">
                                <div class=\"form-control-position\">
                                    <i class=\"icon-envelope-open\"></i>
                                </div>
                            </div>
                        </div>

                        <button type=\"submit\" class=\"btn btn-light btn-block mt-3\">Reset Password</button>
                    </form>
                </div>
            </div>
            <div class=\"card-footer text-center py-3\">
                <p class=\"text-warning mb-0\">Return to the <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"> Sign In</a></p>
            </div>
        </div>
    </div>

    <!--Start Back To Top Button-->
    <a href=\"javaScript:void();\" class=\"back-to-top\"><i class=\"fa fa-angle-double-up\"></i> </a>
    <!--End Back To Top Button-->

    <!--start color switcher-->
    <div class=\"right-sidebar\">

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

</div><!--wrapper-->

<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- simplebar js -->
<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/simplebar/js/simplebar.js "), "html", null, true);
        echo "\"></script>
<!-- sidebar-menu js -->
<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/sidebar-menu.js"), "html", null, true);
        echo "\"></script>

<!-- Custom scripts -->
<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/app-script.js"), "html", null, true);
        echo "\"></script>

</body>
</html>



";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/forget_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 132,  264 => 129,  259 => 127,  253 => 124,  249 => 123,  245 => 122,  195 => 75,  174 => 56,  165 => 53,  162 => 52,  157 => 51,  148 => 48,  145 => 47,  140 => 46,  131 => 43,  128 => 42,  123 => 41,  114 => 38,  111 => 37,  107 => 36,  87 => 19,  82 => 17,  77 => 15,  72 => 13,  67 => 11,  62 => 9,  57 => 7,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
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


    <div class=\"height-100v d-flex align-items-center justify-content-center\">
        <div class=\"card card-authentication1 mb-0\">
            <div class=\"card-body\">
                {% for message in app.flashes('success') %}
                    <div class=\"alert text-success\">
                        {{ message }}
                    </div>
                {% endfor %}
                {% for message in app.flashes('danger') %}
                    <div class=\"alert text-danger\">
                        {{ message }}
                    </div>
                {% endfor %}
                {% for message in app.flashes('warning') %}
                    <div class=\"alert alert-warning\">
                        {{ message }}
                    </div>
                {% endfor %}
                {% for message in app.flashes('notice') %}
                    <div class=\"alert text-success\">
                        {{ message }}
                    </div>
                {% endfor %}
                <div class=\"card-content p-2\">
                    <div class=\"card-title text-uppercase pb-2\">Reset Password</div>
                    <p class=\"pb-2\">Please enter your email address. You will receive a link to create a new password via email.</p>
                    <form method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"exampleInputEmailAddress\" class=\"\">Email Address</label>
                            <div class=\"position-relative has-icon-right\">
                                <input type=\"text\" id=\"exampleInputEmailAddress\" class=\"form-control input-shadow\" name=\"email\" placeholder=\"Email Address\">
                                <div class=\"form-control-position\">
                                    <i class=\"icon-envelope-open\"></i>
                                </div>
                            </div>
                        </div>

                        <button type=\"submit\" class=\"btn btn-light btn-block mt-3\">Reset Password</button>
                    </form>
                </div>
            </div>
            <div class=\"card-footer text-center py-3\">
                <p class=\"text-warning mb-0\">Return to the <a href=\"{{ path('app_login') }}\"> Sign In</a></p>
            </div>
        </div>
    </div>

    <!--Start Back To Top Button-->
    <a href=\"javaScript:void();\" class=\"back-to-top\"><i class=\"fa fa-angle-double-up\"></i> </a>
    <!--End Back To Top Button-->

    <!--start color switcher-->
    <div class=\"right-sidebar\">

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

</div><!--wrapper-->

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
</html>



", "security/forget_password.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\security\\forget_password.html.twig");
    }
}
