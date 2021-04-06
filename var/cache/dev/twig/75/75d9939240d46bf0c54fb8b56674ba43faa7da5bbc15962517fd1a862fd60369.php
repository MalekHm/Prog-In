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

/* place/list.html.twig */
class __TwigTemplate_2b89d85edd1a94d802e6df7bc259403c01dceaf3cdb002b811a2e39044de1d6d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "place/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "place/list.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "place/list.html.twig", 1);
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
                <div class=\"col-lg-10\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\" align=\"center\">LISTE DES RECOMMANDATIONS</h5>
                            <div class=\"table-responsive\">

                                <table class=\"table table-hover\">
                                    <thead>
                                    <tr>

                                        <th scope=\"col\"  align=\"center\">Titre </th>
                                        <th scope=\"col\"  align=\"center\">Catégorie</th>

                                        <th scope=\"col\"  align=\"center\">Adresse</th>
                                        <th scope=\"col\" align=\"center\"><center>Actions</center> </th>
                                        <th scope=\"col\"  align=\"center\">Affichée</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 29
            echo "                                    <tr>


                                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "titlePlace", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "category", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>


                                        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "location", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                                        <td  align=\"center\"> <!-- Call to action buttons -->
                                            <ul class=\"list-inline m-0\">

                                                <li class=\"list-inline-item\">
                                                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("place_update", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">
                                                    <button class=\"btn btn-success btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Modifier\"><i class=\"fa fa-edit\"></i></button>
                                                    </a>
                                                </li>
                                                <li class=\"list-inline-item\">
                                                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("place_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">
                                                        <button class=\"btn btn-danger btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Supprimer\"><i class=\"fa fa-trash\"></i></button>
                                                    </a>
                                                  </li>
                                                <li class=\"list-inline-item\">
                                                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("place_listcomment", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">
                                                        <button class=\"btn btn-secondary btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Commentaires\"><i class=\"fa fa-list\"></i></button>
                                                    </a>
                                                </li>
                                                ";
            // line 55
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["p"], "showPlace", [], "any", false, false, false, 55), 1))) {
                // line 56
                echo "                                                <td>OUI</td>
                                        ";
            } else {
                // line 58
                echo "                                            <td>NON</td>
                                            ";
            }
            // line 60
            echo "
                                            </ul></td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2\">
                    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 73
            echo "                        <br>
                        <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("place_listcategory", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\"><center><button type=\"submit\" class=\"btn btn-light btn-round px-5\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nameCategoryPlace", [], "any", false, false, false, 74), "html", null, true);
            echo "</button></center></a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                </div>
            </div>
    <!--End Row-->
    <div class=\"row mt-3\">
        <div class=\"col-lg-3\"></div>
        <div class=\"col-lg-6\">
            <a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("place_add");
        echo "\"><center><button type=\"submit\" class=\"btn btn-light btn-round px-5\">Ajouter une recommandation</button></center></a>
        </div>
        <div class=\"col-lg-3\"></div>
    </div><!--End Row-->
    <div class=\"row mt-3\">
        <div class=\"col-lg-3\"></div>
        <div class=\"col-lg-6\">
            <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_placelist");
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
        return "place/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 89,  199 => 82,  191 => 76,  181 => 74,  178 => 73,  174 => 72,  164 => 64,  155 => 60,  151 => 58,  147 => 56,  145 => 55,  138 => 51,  130 => 46,  122 => 41,  114 => 36,  108 => 33,  104 => 32,  99 => 29,  95 => 28,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}
{% block content %}




            <div class=\"row mt-3\">
                <div class=\"col-lg-10\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\" align=\"center\">LISTE DES RECOMMANDATIONS</h5>
                            <div class=\"table-responsive\">

                                <table class=\"table table-hover\">
                                    <thead>
                                    <tr>

                                        <th scope=\"col\"  align=\"center\">Titre </th>
                                        <th scope=\"col\"  align=\"center\">Catégorie</th>

                                        <th scope=\"col\"  align=\"center\">Adresse</th>
                                        <th scope=\"col\" align=\"center\"><center>Actions</center> </th>
                                        <th scope=\"col\"  align=\"center\">Affichée</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for p in places %}
                                    <tr>


                                        <td>{{ p.titlePlace }}</td>
                                        <td>{{ p.category }}</td>


                                        <td>{{ p.location }}</td>
                                        <td  align=\"center\"> <!-- Call to action buttons -->
                                            <ul class=\"list-inline m-0\">

                                                <li class=\"list-inline-item\">
                                                    <a href=\"{{ path('place_update', {'id': p.id}) }}\">
                                                    <button class=\"btn btn-success btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Modifier\"><i class=\"fa fa-edit\"></i></button>
                                                    </a>
                                                </li>
                                                <li class=\"list-inline-item\">
                                                    <a href=\"{{ path('place_delete', {'id': p.id}) }}\">
                                                        <button class=\"btn btn-danger btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Supprimer\"><i class=\"fa fa-trash\"></i></button>
                                                    </a>
                                                  </li>
                                                <li class=\"list-inline-item\">
                                                    <a href=\"{{ path('place_listcomment', {'id': p.id}) }}\">
                                                        <button class=\"btn btn-secondary btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Commentaires\"><i class=\"fa fa-list\"></i></button>
                                                    </a>
                                                </li>
                                                {% if(p.showPlace==1) %}
                                                <td>OUI</td>
                                        {% else %}
                                            <td>NON</td>
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
                <div class=\"col-lg-2\">
                    {% for c in categories %}
                        <br>
                        <a href=\"{{ path('place_listcategory',{'id':c.id}) }}\"><center><button type=\"submit\" class=\"btn btn-light btn-round px-5\">{{ c.nameCategoryPlace }}</button></center></a>
                    {% endfor %}
                </div>
            </div>
    <!--End Row-->
    <div class=\"row mt-3\">
        <div class=\"col-lg-3\"></div>
        <div class=\"col-lg-6\">
            <a href=\"{{ path('place_add') }}\"><center><button type=\"submit\" class=\"btn btn-light btn-round px-5\">Ajouter une recommandation</button></center></a>
        </div>
        <div class=\"col-lg-3\"></div>
    </div><!--End Row-->
    <div class=\"row mt-3\">
        <div class=\"col-lg-3\"></div>
        <div class=\"col-lg-6\">
            <a href=\"{{ path('category_placelist') }}\"><center><button type=\"submit\" class=\"btn btn-light btn-round px-5\">Afficher les catégories</button></center></a>
        </div>
        <div class=\"col-lg-3\"></div>
    </div><!--End Row-->
            <!--start overlay-->
            <div class=\"overlay toggle-menu\"></div>
            <!--end overlay-->







{% endblock %}", "place/list.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\place\\list.html.twig");
    }
}
