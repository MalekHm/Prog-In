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

/* back_template/promotion/index.html.twig */
class __TwigTemplate_9a6e5f64c323ec48fd694c057c12a5ad871b42629236cd9aa413ed2eb20ffe6b extends Template
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
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_template/promotion/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_template/promotion/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "back_template/promotion/index.html.twig", 1);
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

   <style>
       .alert {
           padding: 10px;
           color: white;
           margin-bottom: 10px;
       }
   </style>

    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            echo "        <div class=\"alert alert-success\">
            ";
            // line 16
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "        <div class=\"alert alert-warning\">
            ";
            // line 21
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 26
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    <div class=\"card\">
        <div class=\"card-body\">
            <div>

                <a class=\"btn btn-info\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_template_promotions_form");
        echo "\"  style=\"float: left;\">
                    + Create new promotion
                    <div class=\"ripple-container\"></div>
                </a>
            </div>

            <br>
            <br>

            <div class=\"material-datatables\" >
                <table id=\"datatables\" class=\"table-active table-striped table-no-bordered\" cellspacing=\"0\"
                       width=\"100%\" style=\"table-layout: fixed; width: 100%\">
                    <thead>
                    <tr>
                        <th>Event</th>
                        <th>Product</th>
                        <th>Description</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Percentage</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 58
            echo "                        <tr>
                            <td>
                                ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "event", [], "any", false, false, false, 60), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "product", [], "any", false, false, false, 63), "html", null, true);
            echo "
                            </td>
                            <td >
                                ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "descriptionpromotion", [], "any", false, false, false, 66), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "StartDatePromotion", [], "any", false, false, false, 69), "d-m-Y"), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "EndDatePromotion", [], "any", false, false, false, 72), "d-m-Y"), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "pourcentage", [], "any", false, false, false, 75), "html", null, true);
            echo " %
                            </td>
                            <td>
                                    <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_template_promotions_form_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\" class=\"btn-info btn \">Edit</a>
                                    <a data-toggle=\"modal\"
                                       data-target=\"#confirmdelete";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 80), "html", null, true);
            echo "\" class=\" btn btn-danger\">Delete</a>


                            </td>

                        </tr>

                        <div class=\"modal fade\" id=\"confirmdelete";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 87), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\"
                             aria-labelledby=\"exampleModalLabel\"
                             aria-hidden=\"true\">
                            <div class=\"modal-dialog\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title text-dark\" id=\"exampleModalLabel\">Delete promotion</h5>
                                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\"
                                                aria-label=\"Close\">
                                            <span aria-hidden=\"true\">×</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body text-dark\">
                                        Select \"Confirm\" below if you are ready to delete this promotion
                                    </div>
                                    <div class=\"modal-footer\">
                                        <a class=\"btn btn-success\"
                                           href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_template_promotions_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 104)]), "html", null, true);
            echo "\"
                                           id=\"inactivePayment\">Confirm</a>
                                        <button class=\"btn btn-danger\" type=\"button\" data-dismiss=\"modal\">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>





                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script>
        \$(document).ready(function () {
            \$('#datatables').addClass('newclass').removeClass('dataTable');


            \$('#datatables').DataTable({
                \"ordering\": false,
                \"bPaginate\": false,
                \"stripeClasses\": [],



                responsive: true,

                language: {
                    search: \"_INPUT_\",
                    searchPlaceholder: \"Search Promotion\",
                },
                dom: 'Bfrtip',
            });

            \$('#datatables').addClass('newclass').removeClass('dataTable');

        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back_template/promotion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 119,  242 => 104,  222 => 87,  212 => 80,  207 => 78,  201 => 75,  195 => 72,  189 => 69,  183 => 66,  177 => 63,  171 => 60,  167 => 58,  163 => 57,  136 => 33,  130 => 29,  121 => 26,  118 => 25,  113 => 24,  104 => 21,  101 => 20,  96 => 19,  87 => 16,  84 => 15,  80 => 14,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block content %}


   <style>
       .alert {
           padding: 10px;
           color: white;
           margin-bottom: 10px;
       }
   </style>

    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}
    {% for message in app.flashes('warning') %}
        <div class=\"alert alert-warning\">
            {{ message }}
        </div>
    {% endfor %}
    {% for message in app.flashes('danger') %}
        <div class=\"alert alert-danger\">
            {{ message }}
        </div>
    {% endfor %}
    <div class=\"card\">
        <div class=\"card-body\">
            <div>

                <a class=\"btn btn-info\" href=\"{{ path('back_template_promotions_form') }}\"  style=\"float: left;\">
                    + Create new promotion
                    <div class=\"ripple-container\"></div>
                </a>
            </div>

            <br>
            <br>

            <div class=\"material-datatables\" >
                <table id=\"datatables\" class=\"table-active table-striped table-no-bordered\" cellspacing=\"0\"
                       width=\"100%\" style=\"table-layout: fixed; width: 100%\">
                    <thead>
                    <tr>
                        <th>Event</th>
                        <th>Product</th>
                        <th>Description</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Percentage</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for promotion in promotions %}
                        <tr>
                            <td>
                                {{ promotion.event }}
                            </td>
                            <td>
                                {{ promotion.product }}
                            </td>
                            <td >
                                {{ promotion.descriptionpromotion }}
                            </td>
                            <td>
                                {{ promotion.StartDatePromotion | date('d-m-Y') }}
                            </td>
                            <td>
                                {{ promotion.EndDatePromotion | date('d-m-Y') }}
                            </td>
                            <td>
                                {{ promotion.pourcentage }} %
                            </td>
                            <td>
                                    <a href=\"{{ path('back_template_promotions_form_edit', {'id': promotion.id}) }}\" class=\"btn-info btn \">Edit</a>
                                    <a data-toggle=\"modal\"
                                       data-target=\"#confirmdelete{{ promotion.id }}\" class=\" btn btn-danger\">Delete</a>


                            </td>

                        </tr>

                        <div class=\"modal fade\" id=\"confirmdelete{{ promotion.id }}\" tabindex=\"-1\" role=\"dialog\"
                             aria-labelledby=\"exampleModalLabel\"
                             aria-hidden=\"true\">
                            <div class=\"modal-dialog\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title text-dark\" id=\"exampleModalLabel\">Delete promotion</h5>
                                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\"
                                                aria-label=\"Close\">
                                            <span aria-hidden=\"true\">×</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body text-dark\">
                                        Select \"Confirm\" below if you are ready to delete this promotion
                                    </div>
                                    <div class=\"modal-footer\">
                                        <a class=\"btn btn-success\"
                                           href=\"{{ path('back_template_promotions_delete', {'id': promotion.id}) }}\"
                                           id=\"inactivePayment\">Confirm</a>
                                        <button class=\"btn btn-danger\" type=\"button\" data-dismiss=\"modal\">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>





                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script>
        \$(document).ready(function () {
            \$('#datatables').addClass('newclass').removeClass('dataTable');


            \$('#datatables').DataTable({
                \"ordering\": false,
                \"bPaginate\": false,
                \"stripeClasses\": [],



                responsive: true,

                language: {
                    search: \"_INPUT_\",
                    searchPlaceholder: \"Search Promotion\",
                },
                dom: 'Bfrtip',
            });

            \$('#datatables').addClass('newclass').removeClass('dataTable');

        });
    </script>
{% endblock %}", "back_template/promotion/index.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\back_template\\promotion\\index.html.twig");
    }
}
