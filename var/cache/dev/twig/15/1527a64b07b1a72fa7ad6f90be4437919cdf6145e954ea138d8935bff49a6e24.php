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

/* evennement/index.html.twig */
class __TwigTemplate_098d916b317ec0391d68894e2e885ab65ab4c14f0ac02f63ea70ad46625bd845 extends Template
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
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evennement/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evennement/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "evennement/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello EvennementController!";
        
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
        echo "
    <div class=\"row mt-3\">

        <div class=\"col-lg-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\" align=\"center\">LISTE DES EVENNEMENTS</h5>
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                            <tr>

                                <th scope=\"col\">Titre </th>
                                <th scope=\"col\">Date début</th>
                                <th scope=\"col\">Date fin</th>
                                <th scope=\"col\">Nombre de personnes</th>
                                <th  scope=\"col\"> Places disponible</th>
                                <th scope=\"col\">Catégorie</th>

                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 29
            echo "                                <tr>

                                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "titre", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "startDate", [], "any", false, false, false, 32), "d-m-Y"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "endDate", [], "any", false, false, false, 33), "d-m-Y"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "NbPersons", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 36
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["e"], "placeDisponible", [], "any", false, false, false, 36), 0))) {
                // line 37
                echo "                                            Complet
                                        ";
            } else {
                // line 39
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "placeDisponible", [], "any", false, false, false, 39), "html", null, true);
                echo "
                                        ";
            }
            // line 41
            echo "                                    </td>
                                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "category", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                                    <td> <!-- Call to action buttons -->
                                        <ul class=\"list-inline m-0\">

                                            <li class=\"list-inline-item\">
                                                <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evennement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">  <button class=\"btn btn-success btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\"><i class=\"fa fa-edit\"></i></button></a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evennement_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\"> <button class=\"btn btn-danger btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\"><i class=\"fa fa-trash\"></i></button></a>
                                            </li>
                                            ";
            // line 52
            if ((0 !== twig_compare((twig_get_attribute($this->env, $this->source, $context["e"], "NbPersons", [], "any", false, false, false, 52) - twig_get_attribute($this->env, $this->source, $context["e"], "placeDisponible", [], "any", false, false, false, 52)), 0))) {
                // line 53
                echo "                                            <li class=\"list-inline-item\">
                                                <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_event", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                echo "\"> <button class=\"btn btn-warning btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Réservations\">";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["e"], "NbPersons", [], "any", false, false, false, 54) - twig_get_attribute($this->env, $this->source, $context["e"], "placeDisponible", [], "any", false, false, false, 54)), "html", null, true);
                echo "<i class=\"fa fa-shopping-bag\"></i></button></a>
                                            </li>
                                            ";
            }
            // line 57
            echo "                                        </ul></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div><!--End Row-->
    <div class=\"row mt-3\">
        <div class=\"col-lg-2\"></div>
        <div class=\"col-lg-3\">
            <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_event");
        echo "\"><button type=\"submit\"  class=\"btn btn-light btn-round px-5\">Ajouter un Evennement</button></a>
        </div>
        <div class=\"col-lg-3\">
            <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_back");
        echo "\"><button type=\"submit\"  class=\"btn btn-light btn-round px-5\">Afficher les catégories</button></a>

        </div>

        <div class=\"col-lg-1\"></div>
    </div><!--End Row-->
    <div class=\"row mt-3\">
        <div class=\"col-lg-4\"></div>
        <div class=\"col-lg-5\">
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
        return "evennement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 76,  207 => 73,  192 => 60,  184 => 57,  176 => 54,  173 => 53,  171 => 52,  166 => 50,  160 => 47,  152 => 42,  149 => 41,  143 => 39,  139 => 37,  137 => 36,  132 => 34,  128 => 33,  124 => 32,  120 => 31,  116 => 29,  112 => 28,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Hello EvennementController!{% endblock %}

{% block content %}

    <div class=\"row mt-3\">

        <div class=\"col-lg-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\" align=\"center\">LISTE DES EVENNEMENTS</h5>
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                            <tr>

                                <th scope=\"col\">Titre </th>
                                <th scope=\"col\">Date début</th>
                                <th scope=\"col\">Date fin</th>
                                <th scope=\"col\">Nombre de personnes</th>
                                <th  scope=\"col\"> Places disponible</th>
                                <th scope=\"col\">Catégorie</th>

                            </tr>
                            </thead>
                            <tbody>
                            {% for e in events %}
                                <tr>

                                    <td>{{ e.titre }}</td>
                                    <td>{{ e.startDate | date ('d-m-Y') }}</td>
                                    <td>{{e.endDate | date ('d-m-Y') }}</td>
                                    <td>{{ e.NbPersons }}</td>
                                    <td>
                                        {% if e.placeDisponible==0 %}
                                            Complet
                                        {% else %}
                                            {{ e.placeDisponible }}
                                        {% endif %}
                                    </td>
                                    <td>{{ e.category.name }}</td>
                                    <td> <!-- Call to action buttons -->
                                        <ul class=\"list-inline m-0\">

                                            <li class=\"list-inline-item\">
                                                <a href=\"{{ path('evennement_edit',{id:e.id}) }}\">  <button class=\"btn btn-success btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\"><i class=\"fa fa-edit\"></i></button></a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"{{ path('evennement_delete',{id:e.id}) }}\"> <button class=\"btn btn-danger btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\"><i class=\"fa fa-trash\"></i></button></a>
                                            </li>
                                            {% if e.NbPersons - e.placeDisponible !=0 %}
                                            <li class=\"list-inline-item\">
                                                <a href=\"{{ path('reservation_event',{id:e.id}) }}\"> <button class=\"btn btn-warning btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Réservations\">{{ e.NbPersons - e.placeDisponible}}<i class=\"fa fa-shopping-bag\"></i></button></a>
                                            </li>
                                            {% endif %}
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
        <div class=\"col-lg-2\"></div>
        <div class=\"col-lg-3\">
            <a href=\"{{ path('create_event') }}\"><button type=\"submit\"  class=\"btn btn-light btn-round px-5\">Ajouter un Evennement</button></a>
        </div>
        <div class=\"col-lg-3\">
            <a href=\"{{ path('categorie_back') }}\"><button type=\"submit\"  class=\"btn btn-light btn-round px-5\">Afficher les catégories</button></a>

        </div>

        <div class=\"col-lg-1\"></div>
    </div><!--End Row-->
    <div class=\"row mt-3\">
        <div class=\"col-lg-4\"></div>
        <div class=\"col-lg-5\">
           </div>
        <div class=\"col-lg-3\"></div>
    </div><!--End Row-->
    <!--start overlay-->
    <div class=\"overlay toggle-menu\"></div>
    <!--end overlay-->
{% endblock %}
", "evennement/index.html.twig", "/var/www/html/Prog-In-master/templates/evennement/index.html.twig");
    }
}
