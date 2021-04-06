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

/* category_activity/index.html.twig */
class __TwigTemplate_3d28a147adbb2aeb6560a94dadf9881efd5ffda89eee954a4b2134902add9e3c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category_activity/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category_activity/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "category_activity/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "



    <div class=\"row mt-3\">
        <div class=\"col-lg-3\"></div>
        <div class=\"col-lg-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\" align=\"center\">LISTE DES CATEGORIES DES ACTIVITES</h5>
                    <div class=\"table-responsive\">

                        <table class=\"table table-hover\">
                            <thead>
                            <tr>


                                <th scope=\"col\" align=\"center\">Nom de la catégorie </th>
                                <th scope=\"col\" align=\"center\"><center>Actions</center> </th>

                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 27
            echo "                                <tr>



                                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nameCategoryActivity", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>

                                    <td align=\"center\"> <!-- Call to action buttons -->
                                        <ul class=\"list-inline m-0\">

                                            <li class=\"list-inline-item\">
                                                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_activityupdate", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">
                                                    <button class=\"btn btn-success btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\"><i class=\"fa fa-edit\"></i></button>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_activitydelete", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">
                                                    <button class=\"btn btn-danger btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\"><i class=\"fa fa-trash\"></i></button>
                                                </a>
                                            </li>
                                        </ul></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3\"></div>
    </div><!--End Row-->
    <div class=\"row mt-3\">
        <div class=\"col-lg-3\"></div>
        <div class=\"col-lg-6\">
            <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_activityadd");
        echo "\"><center><button type=\"submit\" class=\"btn btn-light btn-round px-5\">Ajouter une Catégorie</button></center></a>
        </div>
        <div class=\"col-lg-3\"></div>
    </div><!--End Row-->
    <div class=\"row mt-3\">
        <div class=\"col-lg-3\"></div>
        <div class=\"col-lg-6\">
            <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activity_index");
        echo "\"><center><button type=\"submit\" class=\"btn btn-light btn-round px-5\">Afficher les activites</button></center></a>
        </div>
        <div class=\"col-lg-3\"></div>
    </div><!--End Row-->
    <!--start overlay-->
    <div class=\"overlay toggle-menu\"></div>
    <!--end overlay-->







";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "category_activity/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 68,  147 => 61,  133 => 49,  120 => 42,  112 => 37,  103 => 31,  97 => 27,  93 => 26,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}
{% block content %}




    <div class=\"row mt-3\">
        <div class=\"col-lg-3\"></div>
        <div class=\"col-lg-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\" align=\"center\">LISTE DES CATEGORIES DES ACTIVITES</h5>
                    <div class=\"table-responsive\">

                        <table class=\"table table-hover\">
                            <thead>
                            <tr>


                                <th scope=\"col\" align=\"center\">Nom de la catégorie </th>
                                <th scope=\"col\" align=\"center\"><center>Actions</center> </th>

                            </tr>
                            </thead>
                            <tbody>
                            {% for c in categories %}
                                <tr>



                                    <td>{{ c.nameCategoryActivity }}</td>

                                    <td align=\"center\"> <!-- Call to action buttons -->
                                        <ul class=\"list-inline m-0\">

                                            <li class=\"list-inline-item\">
                                                <a href=\"{{ path('category_activityupdate', {'id': c.id}) }}\">
                                                    <button class=\"btn btn-success btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\"><i class=\"fa fa-edit\"></i></button>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"{{ path('category_activitydelete', {'id': c.id}) }}\">
                                                    <button class=\"btn btn-danger btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\"><i class=\"fa fa-trash\"></i></button>
                                                </a>
                                            </li>
                                        </ul></td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3\"></div>
    </div><!--End Row-->
    <div class=\"row mt-3\">
        <div class=\"col-lg-3\"></div>
        <div class=\"col-lg-6\">
            <a href=\"{{ path('category_activityadd') }}\"><center><button type=\"submit\" class=\"btn btn-light btn-round px-5\">Ajouter une Catégorie</button></center></a>
        </div>
        <div class=\"col-lg-3\"></div>
    </div><!--End Row-->
    <div class=\"row mt-3\">
        <div class=\"col-lg-3\"></div>
        <div class=\"col-lg-6\">
            <a href=\"{{ path('activity_index') }}\"><center><button type=\"submit\" class=\"btn btn-light btn-round px-5\">Afficher les activites</button></center></a>
        </div>
        <div class=\"col-lg-3\"></div>
    </div><!--End Row-->
    <!--start overlay-->
    <div class=\"overlay toggle-menu\"></div>
    <!--end overlay-->







{% endblock %}", "category_activity/index.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\category_activity\\index.html.twig");
    }
}
