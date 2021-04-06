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

/* categorie_back/index.html.twig */
class __TwigTemplate_c7e8687a545f6cc082c829dbbf14548ee2dbc02958f4eaee721b74e7a69515bf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_back/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_back/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "categorie_back/index.html.twig", 1);
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
        echo "    <div class=\"row mt-3\">
        <div class=\"col-lg-3\"></div>
        <div class=\"col-lg-5\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\" align=\"center\">LISTE DES CATEGORIES </h5>

                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                            <tr>


                                <th scope=\"col\"><center>Titre</center></th>

                                <th scope=\"col\" ><center>Actions</center></th>

                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 27
            echo "                                <tr>


                                    <td align=\"center\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "name", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>


                                    <td align=\"center\"> <!-- Call to action buttons -->
                                        <ul class=\"list-inline m-0\">

                                            <li class=\"list-inline-item\">
                                                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">  <button class=\"btn btn-success btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\"><i class=\"fa fa-edit\"></i></button></a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\"> <button class=\"btn btn-danger btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\"><i class=\"fa fa-trash\"></i></button></a>
                                            </li>
                                        </ul></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-4\"></div>
    </div><!--End Row-->
    <div class=\"row mt-3\">
        <div class=\"col-lg-4\"></div>
        <div class=\"col-lg-4\">
            <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_add");
        echo "\"><button type=\"submit\"  class=\"btn btn-light btn-round px-5\">Ajouter une Catégorie</button></a>
        </div>
        <div class=\"col-lg-4\"></div>
    </div><!--End Row-->
    <div class=\"row mt-3\">
        <div class=\"col-lg-4\"></div>
        <div class=\"col-lg-4\">
            <a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evennement");
        echo "\"><button type=\"submit\"  class=\"btn btn-light btn-round px-5\">Afficher les evennements</button></a>
        </div>
        <div class=\"col-lg-4\"></div>
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
        return "categorie_back/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 65,  161 => 58,  146 => 45,  135 => 40,  129 => 37,  119 => 30,  114 => 27,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Hello EvennementController!{% endblock %}

{% block content %}
    <div class=\"row mt-3\">
        <div class=\"col-lg-3\"></div>
        <div class=\"col-lg-5\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\" align=\"center\">LISTE DES CATEGORIES </h5>

                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                            <tr>


                                <th scope=\"col\"><center>Titre</center></th>

                                <th scope=\"col\" ><center>Actions</center></th>

                            </tr>
                            </thead>
                            <tbody>
                            {% for e in category %}
                                <tr>


                                    <td align=\"center\">{{ e.name}}</td>


                                    <td align=\"center\"> <!-- Call to action buttons -->
                                        <ul class=\"list-inline m-0\">

                                            <li class=\"list-inline-item\">
                                                <a href=\"{{ path('categorie_edit',{id:e.id}) }}\">  <button class=\"btn btn-success btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\"><i class=\"fa fa-edit\"></i></button></a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"{{ path('category_delete',{id:e.id}) }}\"> <button class=\"btn btn-danger btn-sm rounded-0\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\"><i class=\"fa fa-trash\"></i></button></a>
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
        <div class=\"col-lg-4\"></div>
    </div><!--End Row-->
    <div class=\"row mt-3\">
        <div class=\"col-lg-4\"></div>
        <div class=\"col-lg-4\">
            <a href=\"{{ path('categorie_add') }}\"><button type=\"submit\"  class=\"btn btn-light btn-round px-5\">Ajouter une Catégorie</button></a>
        </div>
        <div class=\"col-lg-4\"></div>
    </div><!--End Row-->
    <div class=\"row mt-3\">
        <div class=\"col-lg-4\"></div>
        <div class=\"col-lg-4\">
            <a href=\"{{ path('evennement') }}\"><button type=\"submit\"  class=\"btn btn-light btn-round px-5\">Afficher les evennements</button></a>
        </div>
        <div class=\"col-lg-4\"></div>
    </div><!--End Row-->
    <!--start overlay-->
    <div class=\"overlay toggle-menu\"></div>
    <!--end overlay-->
{% endblock %}
", "categorie_back/index.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\categorie_back\\index.html.twig");
    }
}
