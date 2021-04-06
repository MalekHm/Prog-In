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

/* back_template/user/index.html.twig */
class __TwigTemplate_020ab4b8203e39fc900310fa24209d7833e2881590b7edeaccb475f4a81450e1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_template/user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_template/user/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "back_template/user/index.html.twig", 1);
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
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "        <div class=\"alert alert-success\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            echo "        <div class=\"alert alert-warning\">
            ";
            // line 23
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 28
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    <div class=\"card\">
        <div class=\"card-body\">
            <div>
                <a class=\"btn btn-info\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_users_form");
        echo "\"  style=\"float: left;\">
                    + Create new user
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
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Identity</th>
                        <th>BirthDate</th>
                        <th>Phone Number</th>
                        <th>Roles</th>
                        <th>Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 62
            echo "                        <tr>
                            <td>
                                <center>
                                    <img src=\"/user/";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "pictureUser", [], "any", false, false, false, 65), "html", null, true);
            echo "\"
                                         class=\"picture-src rounded-circle w-50\" id=\"wizardPicturePreview\" title=\"\"/>
                                </center>

                            </td>
                            <td>
                                ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 71), "html", null, true);
            echo "
                            </td>

                            <td>
                                ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 75), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 78), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "identity", [], "any", false, false, false, 81), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 84
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "birthday", [], "any", false, false, false, 84), "Y-m-d"), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 87), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 90), 0, [], "array", false, false, false, 90), "html", null, true);
            echo "
                            </td>

                            <td>
                                <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_users_form_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 94)]), "html", null, true);
            echo "\" class=\"btn btn-success btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\"><i class=\"fa fa-edit\"></i></a>
                                <a data-toggle=\"modal\" data-target=\"#confirmdelete";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 95), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm rounded-0\" type=\"button\"  data-placement=\"top\" title=\"Edit\"><i class=\"fa fa-trash\"></i></a>


                            </td>

                        </tr>

                        <div class=\"modal fade\" id=\"confirmdelete";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 102), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\"
                             aria-labelledby=\"exampleModalLabel\"
                             aria-hidden=\"true\">
                            <div class=\"modal-dialog\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title text-dark\" id=\"exampleModalLabel\">Delete user</h5>
                                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\"
                                                aria-label=\"Close\">
                                            <span aria-hidden=\"true\">×</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body text-dark\">
                                        Select \"Confirm\" below if you are ready to delete this user
                                    </div>
                                    <div class=\"modal-footer\">
                                        <a class=\"btn btn-success\"
                                           href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_users_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 119)]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
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
                searchPlaceholder: \"Search User\",
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
        return "back_template/user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 132,  263 => 119,  243 => 102,  233 => 95,  229 => 94,  222 => 90,  216 => 87,  210 => 84,  204 => 81,  198 => 78,  192 => 75,  185 => 71,  176 => 65,  171 => 62,  167 => 61,  137 => 34,  132 => 31,  123 => 28,  120 => 27,  115 => 26,  106 => 23,  103 => 22,  98 => 21,  89 => 18,  86 => 17,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
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
                <a class=\"btn btn-info\" href=\"{{ path('back_users_form') }}\"  style=\"float: left;\">
                    + Create new user
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
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Identity</th>
                        <th>BirthDate</th>
                        <th>Phone Number</th>
                        <th>Roles</th>
                        <th>Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    {% for user in users %}
                        <tr>
                            <td>
                                <center>
                                    <img src=\"/user/{{ user.pictureUser }}\"
                                         class=\"picture-src rounded-circle w-50\" id=\"wizardPicturePreview\" title=\"\"/>
                                </center>

                            </td>
                            <td>
                                {{ user.firstName }}
                            </td>

                            <td>
                                {{ user.lastName }}
                            </td>
                            <td>
                                {{ user.email }}
                            </td>
                            <td>
                                {{ user.identity }}
                            </td>
                            <td>
                                {{ user.birthday | date('Y-m-d') }}
                            </td>
                            <td>
                                {{ user.phone }}
                            </td>
                            <td>
                                {{ user.roles[0] }}
                            </td>

                            <td>
                                <a href=\"{{ path('back_users_form_edit', {'id': user.id}) }}\" class=\"btn btn-success btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\"><i class=\"fa fa-edit\"></i></a>
                                <a data-toggle=\"modal\" data-target=\"#confirmdelete{{ user.id }}\" class=\"btn btn-danger btn-sm rounded-0\" type=\"button\"  data-placement=\"top\" title=\"Edit\"><i class=\"fa fa-trash\"></i></a>


                            </td>

                        </tr>

                        <div class=\"modal fade\" id=\"confirmdelete{{ user.id }}\" tabindex=\"-1\" role=\"dialog\"
                             aria-labelledby=\"exampleModalLabel\"
                             aria-hidden=\"true\">
                            <div class=\"modal-dialog\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title text-dark\" id=\"exampleModalLabel\">Delete user</h5>
                                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\"
                                                aria-label=\"Close\">
                                            <span aria-hidden=\"true\">×</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body text-dark\">
                                        Select \"Confirm\" below if you are ready to delete this user
                                    </div>
                                    <div class=\"modal-footer\">
                                        <a class=\"btn btn-success\"
                                           href=\"{{ path('back_users_delete', {'id': user.id}) }}\"
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
                searchPlaceholder: \"Search User\",
            },
            dom: 'Bfrtip',
        });

        \$('#datatables').addClass('newclass').removeClass('dataTable');

    });
</script>
{% endblock %}", "back_template/user/index.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\back_template\\user\\index.html.twig");
    }
}
