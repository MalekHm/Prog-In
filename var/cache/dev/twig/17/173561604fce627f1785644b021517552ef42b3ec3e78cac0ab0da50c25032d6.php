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

/* comments_place/list.html.twig */
class __TwigTemplate_181fcc4eaccb2d8406a22cc4aca227c25d76893828c7b2bdd590990d42508aeb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comments_place/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comments_place/list.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "comments_place/list.html.twig", 1);
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
                    <h5 class=\"card-title\" align=\"center\">LISTE DES COMMENTAIRES</h5>
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                            <tr>
                                <th scope=\"col\"  align=\"center\">Titre </th>
                                <th scope=\"col\"  align=\"center\">Catégorie</th>
                                <th scope=\"col\"  align=\"center\">Adresse</th>
                                <th scope=\"col\"  align=\"center\">Date et Heure</th>
                                <th scope=\"col\" align=\"center\"><center>Actions</center> </th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 25
            echo "                                <tr>
                                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "titleComment", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nickname", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "email", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                                    <td> ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "createdAt", [], "any", false, false, false, 29), "d/m/Y H:i "), "html", null, true);
            echo "</td>
                                    <td  align=\"center\"> <!-- Call to action buttons -->
                                        <ul class=\"list-inline m-0\">
                                            <li class=\"list-inline-item\">
                                                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">
                                                    <button class=\"btn btn-danger btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Supprimer\"><i class=\"fa fa-trash\"></i></button>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-2\">
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 49
            echo "                <br>
                <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("place_listcategory", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\"><center><button type=\"submit\" class=\"btn btn-light btn-round px-5\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nameCategoryPlace", [], "any", false, false, false, 50), "html", null, true);
            echo "</button></center></a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </div>
    </div>
    <!--End Row-->
    <div class=\"row mt-3\">
        <div class=\"col-lg-3\"></div>
        <div class=\"col-lg-6\">
            <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("place");
        echo "\"><center><button type=\"submit\" class=\"btn btn-light btn-round px-5\">Afficher les recommandations</button></center></a>
        </div>
        <div class=\"col-lg-3\"></div>
    </div><!--End Row-->
    <div class=\"row mt-3\">
        <div class=\"col-lg-3\"></div>
        <div class=\"col-lg-6\">
            <a href=\"";
        // line 65
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
        return "comments_place/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 65,  165 => 58,  157 => 52,  147 => 50,  144 => 49,  140 => 48,  131 => 41,  117 => 33,  110 => 29,  106 => 28,  102 => 27,  98 => 26,  95 => 25,  91 => 24,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}
{% block content %}




    <div class=\"row mt-3\">
        <div class=\"col-lg-10\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\" align=\"center\">LISTE DES COMMENTAIRES</h5>
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                            <tr>
                                <th scope=\"col\"  align=\"center\">Titre </th>
                                <th scope=\"col\"  align=\"center\">Catégorie</th>
                                <th scope=\"col\"  align=\"center\">Adresse</th>
                                <th scope=\"col\"  align=\"center\">Date et Heure</th>
                                <th scope=\"col\" align=\"center\"><center>Actions</center> </th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for p in comments %}
                                <tr>
                                    <td>{{ p.titleComment }}</td>
                                    <td>{{ p.nickname }}</td>
                                    <td>{{ p.email }}</td>
                                    <td> {{ p.createdAt|date(\"d/m/Y H:i \") }}</td>
                                    <td  align=\"center\"> <!-- Call to action buttons -->
                                        <ul class=\"list-inline m-0\">
                                            <li class=\"list-inline-item\">
                                                <a href=\"{{ path('comment_delete', {'id': p.id}) }}\">
                                                    <button class=\"btn btn-danger btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Supprimer\"><i class=\"fa fa-trash\"></i></button>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
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
            <a href=\"{{ path('place') }}\"><center><button type=\"submit\" class=\"btn btn-light btn-round px-5\">Afficher les recommandations</button></center></a>
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







{% endblock %}", "comments_place/list.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\comments_place\\list.html.twig");
    }
}
