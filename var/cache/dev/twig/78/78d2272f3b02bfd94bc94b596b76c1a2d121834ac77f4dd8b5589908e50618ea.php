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

/* back_template/publicity/index.html.twig */
class __TwigTemplate_cd07825ff975c91123fb41441d5cc1abdb99d6cf43b577803c783238c6790917 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_template/publicity/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_template/publicity/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "back_template/publicity/index.html.twig", 1);
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
        td {
            word-break: break-all;
        }
    </style>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "        <div class=\"alert alert-success\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            echo "        <div class=\"alert alert-warning\">
            ";
            // line 22
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 26
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 27
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    <div class=\"card\">
        <div class=\"card-body\">
            <div>
                <a class=\"btn btn-info\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_template_publicitys_form");
        echo "\"  style=\"float: left;\">
                    + Create new publicity
                    <div class=\"ripple-container\"></div>
                </a>
            </div>

            <br>
            <br>

            <div class=\"material-datatables\" >
                <table id=\"datatables\" class=\"table-active table-striped table-no-bordered \" cellspacing=\"0\"
                       width=\"100%\" style=\"table-layout: fixed; width: 100%; \">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Position</th>
                        <th>Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publicitys"]) || array_key_exists("publicitys", $context) ? $context["publicitys"] : (function () { throw new RuntimeError('Variable "publicitys" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["publicity"]) {
            // line 59
            echo "                        <tr>
                            <td>
                                <center>
                                    <img src=\"/publicity/";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publicity"], "picturePub", [], "any", false, false, false, 62), "html", null, true);
            echo "\" style=\"height: 80px\"
                                         class=\"picture-src\" id=\"wizardPicturePreview\" title=\"\"/>
                                </center>

                            </td>
                            <td>
                                ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publicity"], "titlePub", [], "any", false, false, false, 68), "html", null, true);
            echo "
                            </td>

                            <td >
                                ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publicity"], "descriptionPub", [], "any", false, false, false, 72), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 75
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publicity"], "startDatePub", [], "any", false, false, false, 75), "Y-m-d"), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publicity"], "endDatePub", [], "any", false, false, false, 78), "Y-m-d"), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publicity"], "position", [], "any", false, false, false, 81), "html", null, true);
            echo "
                                ";
            // line 82
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["publicity"], "position", [], "any", false, false, false, 82), "NAN"))) {
                // line 83
                echo "                                    <i class=\"zmdi zmdi-chart-donut text-success\"></i>
                                ";
            }
            // line 85
            echo "                            </td>
                            <td>

                                    <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_template_publicitys_form_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["publicity"], "id", [], "any", false, false, false, 88)]), "html", null, true);
            echo "\" class=\" btn btn-info \">Edit</a>
                                    <a data-toggle=\"modal\"
                                       data-target=\"#confirmdelete";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publicity"], "id", [], "any", false, false, false, 90), "html", null, true);
            echo "\" class=\" btn btn-danger\">Delete</a>


                            </td>

                        </tr>

                        <div class=\"modal fade\" id=\"confirmdelete";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publicity"], "id", [], "any", false, false, false, 97), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\"
                             aria-labelledby=\"exampleModalLabel\"
                             aria-hidden=\"true\">
                            <div class=\"modal-dialog\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title text-dark\" id=\"exampleModalLabel\">Delete publicity</h5>
                                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\"
                                                aria-label=\"Close\">
                                            <span aria-hidden=\"true\">×</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body text-dark\">
                                        Select \"Confirm\" below if you are ready to delete this publicity
                                    </div>
                                    <div class=\"modal-footer\">
                                        <a class=\"btn btn-success\"
                                           href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_template_publicitys_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["publicity"], "id", [], "any", false, false, false, 114)]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publicity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
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
                searchPlaceholder: \"Search Publicity\",
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
        return "back_template/publicity/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 127,  257 => 114,  237 => 97,  227 => 90,  222 => 88,  217 => 85,  213 => 83,  211 => 82,  207 => 81,  201 => 78,  195 => 75,  189 => 72,  182 => 68,  173 => 62,  168 => 59,  164 => 58,  136 => 33,  131 => 30,  122 => 27,  119 => 26,  114 => 25,  105 => 22,  102 => 21,  97 => 20,  88 => 17,  85 => 16,  81 => 15,  68 => 4,  58 => 3,  35 => 1,);
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
        td {
            word-break: break-all;
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
                <a class=\"btn btn-info\" href=\"{{ path('back_template_publicitys_form') }}\"  style=\"float: left;\">
                    + Create new publicity
                    <div class=\"ripple-container\"></div>
                </a>
            </div>

            <br>
            <br>

            <div class=\"material-datatables\" >
                <table id=\"datatables\" class=\"table-active table-striped table-no-bordered \" cellspacing=\"0\"
                       width=\"100%\" style=\"table-layout: fixed; width: 100%; \">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Position</th>
                        <th>Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    {% for publicity in publicitys %}
                        <tr>
                            <td>
                                <center>
                                    <img src=\"/publicity/{{ publicity.picturePub }}\" style=\"height: 80px\"
                                         class=\"picture-src\" id=\"wizardPicturePreview\" title=\"\"/>
                                </center>

                            </td>
                            <td>
                                {{ publicity.titlePub }}
                            </td>

                            <td >
                                {{ publicity.descriptionPub }}
                            </td>
                            <td>
                                {{ publicity.startDatePub | date('Y-m-d') }}
                            </td>
                            <td>
                                {{ publicity.endDatePub | date('Y-m-d') }}
                            </td>
                            <td>
                                {{ publicity.position }}
                                {% if publicity.position !='NAN' %}
                                    <i class=\"zmdi zmdi-chart-donut text-success\"></i>
                                {% endif %}
                            </td>
                            <td>

                                    <a href=\"{{ path('back_template_publicitys_form_edit', {'id': publicity.id}) }}\" class=\" btn btn-info \">Edit</a>
                                    <a data-toggle=\"modal\"
                                       data-target=\"#confirmdelete{{ publicity.id }}\" class=\" btn btn-danger\">Delete</a>


                            </td>

                        </tr>

                        <div class=\"modal fade\" id=\"confirmdelete{{ publicity.id }}\" tabindex=\"-1\" role=\"dialog\"
                             aria-labelledby=\"exampleModalLabel\"
                             aria-hidden=\"true\">
                            <div class=\"modal-dialog\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title text-dark\" id=\"exampleModalLabel\">Delete publicity</h5>
                                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\"
                                                aria-label=\"Close\">
                                            <span aria-hidden=\"true\">×</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body text-dark\">
                                        Select \"Confirm\" below if you are ready to delete this publicity
                                    </div>
                                    <div class=\"modal-footer\">
                                        <a class=\"btn btn-success\"
                                           href=\"{{ path('back_template_publicitys_delete', {'id': publicity.id}) }}\"
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
                searchPlaceholder: \"Search Publicity\",
            },
            dom: 'Bfrtip',
        });

        \$('#datatables').addClass('newclass').removeClass('dataTable');

    });
</script>
{% endblock %}", "back_template/publicity/index.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\back_template\\publicity\\index.html.twig");
    }
}
