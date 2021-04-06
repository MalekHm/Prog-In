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

/* activity/index.html.twig */
class __TwigTemplate_87c408eb066768deb9004f2afb4f2c09e66bde29d8ff368846e0fb0d24691c7e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "activity/index.html.twig", 1);
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
        <div class=\"col-lg-1\"></div>
        <div class=\"col-lg-11\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\" align=\"center\">LISTE DES ACTIVITES</h5>
                    <div class=\"table-responsive\">

                        <table class=\"table table-hover\">
                            <thead>
                            <tr>

                                <th scope=\"col\"  align=\"center\">Titre </th>
                                <th scope=\"col\"  align=\"center\">Catégorie</th>
                                <th scope=\"col\"  align=\"center\">Prix</th>
                                <th scope=\"col\"  align=\"center\">Adresse</th>
                                <th scope=\"col\" align=\"center\"><center>Actions</center> </th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 28
            echo "                                <tr>


                                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "titleActivity", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "category", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "priceActivity", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>

                                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "adressActivity", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                                    <td  align=\"center\"> <!-- Call to action buttons -->
                                        <ul class=\"list-inline m-0\">

                                            <li class=\"list-inline-item\">
                                                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activity_update", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">
                                                    <button class=\"btn btn-success btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\"><i class=\"fa fa-edit\"></i></button>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activity_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">
                                                    <button class=\"btn btn-danger btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\"><i class=\"fa fa-trash\"></i></button>
                                                </a>
                                            </li>
                                        </ul></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div><!--End Row-->
    <div class=\"row mt-3\">
        <div class=\"col-lg-3\"></div>
        <div class=\"col-lg-6\">
            <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activity_add");
        echo "\"><center><button type=\"submit\" class=\"btn btn-light btn-round px-5\">Ajouter une activité</button></center></a>
        </div>
        <div class=\"col-lg-3\"></div>
    </div><!--End Row-->
    <div class=\"row mt-3\">
        <div class=\"col-lg-3\"></div>
        <div class=\"col-lg-6\">
            <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_activity");
        echo "\"><center><button type=\"submit\" class=\"btn btn-light btn-round px-5\">Afficher les catégories</button></center></a>
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
        return "activity/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 71,  159 => 64,  145 => 52,  132 => 45,  124 => 40,  116 => 35,  111 => 33,  107 => 32,  103 => 31,  98 => 28,  94 => 27,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}
{% block content %}




    <div class=\"row mt-3\">
        <div class=\"col-lg-1\"></div>
        <div class=\"col-lg-11\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\" align=\"center\">LISTE DES ACTIVITES</h5>
                    <div class=\"table-responsive\">

                        <table class=\"table table-hover\">
                            <thead>
                            <tr>

                                <th scope=\"col\"  align=\"center\">Titre </th>
                                <th scope=\"col\"  align=\"center\">Catégorie</th>
                                <th scope=\"col\"  align=\"center\">Prix</th>
                                <th scope=\"col\"  align=\"center\">Adresse</th>
                                <th scope=\"col\" align=\"center\"><center>Actions</center> </th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for a in activity %}
                                <tr>


                                    <td>{{ a.titleActivity }}</td>
                                    <td>{{ a.category }}</td>
                                    <td>{{ a.priceActivity }}</td>

                                    <td>{{ a.adressActivity }}</td>
                                    <td  align=\"center\"> <!-- Call to action buttons -->
                                        <ul class=\"list-inline m-0\">

                                            <li class=\"list-inline-item\">
                                                <a href=\"{{ path('activity_update', {'id': a.id}) }}\">
                                                    <button class=\"btn btn-success btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\"><i class=\"fa fa-edit\"></i></button>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"{{ path('activity_delete', {'id': a.id}) }}\">
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

    </div><!--End Row-->
    <div class=\"row mt-3\">
        <div class=\"col-lg-3\"></div>
        <div class=\"col-lg-6\">
            <a href=\"{{ path('activity_add') }}\"><center><button type=\"submit\" class=\"btn btn-light btn-round px-5\">Ajouter une activité</button></center></a>
        </div>
        <div class=\"col-lg-3\"></div>
    </div><!--End Row-->
    <div class=\"row mt-3\">
        <div class=\"col-lg-3\"></div>
        <div class=\"col-lg-6\">
            <a href=\"{{path('category_activity')}}\"><center><button type=\"submit\" class=\"btn btn-light btn-round px-5\">Afficher les catégories</button></center></a>
        </div>
        <div class=\"col-lg-3\"></div>
    </div><!--End Row-->
    <!--start overlay-->
    <div class=\"overlay toggle-menu\"></div>
    <!--end overlay-->







{% endblock %}", "activity/index.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\activity\\index.html.twig");
    }
}
