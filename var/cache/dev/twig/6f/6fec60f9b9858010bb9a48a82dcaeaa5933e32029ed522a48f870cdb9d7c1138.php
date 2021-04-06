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

/* reservation_event/index.html.twig */
class __TwigTemplate_339a1a8cc8c3a8db838895da797966ff14793f705207fafa59043b94b1eb88cc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_event/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_event/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "reservation_event/index.html.twig", 1);
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

        echo "Hello reservation controller!";
        
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
        <div class=\"col-lg-1\"></div>
        <div class=\"col-lg-10\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\" align=\"center\">LISTE DES RESERVATIONS POUR L'EVENEMENT : ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</h5>
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Nom </th>
                                <th>Prenom</th>
                                <th>Email</th>
                                <th scope=\"col\">Nombre des tickets</th>
                                <th>Status</th>
                                <th>Date de réservation</th>
                                <th>Montant</th>


                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 30
            echo "                                <tr>
                                    <td>
                                            <img src=\"/user/";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "user", [], "any", false, false, false, 32), "pictureUser", [], "any", false, false, false, 32), "html", null, true);
            echo "\"
                                                 class=\"picture-src rounded-circle \" width=\"50px\" id=\"wizardPicturePreview\" title=\"\"/>


                                    </td>
                                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "user", [], "any", false, false, false, 37), "firstName", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "user", [], "any", false, false, false, 38), "lastName", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "user", [], "any", false, false, false, 39), "email", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "nbParticipants", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>

                                    <td>
                                        ";
            // line 43
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["e"], "status", [], "any", false, false, false, 43), true))) {
                // line 44
                echo "                                            Reservé
                                        ";
            } else {
                // line 46
                echo "                                            Annuler
                                        ";
            }
            // line 48
            echo "                                    </td>
                                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "reservationDate", [], "any", false, false, false, 49), "d-m-Y"), "html", null, true);
            echo "</td>
                                    <td>              ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "resteapayer", [], "any", false, false, false, 50), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "reduction", [], "any", false, false, false, 50), "html", null, true);
            echo " =";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["e"], "resteapayer", [], "any", false, false, false, 50) - twig_get_attribute($this->env, $this->source, $context["e"], "reduction", [], "any", false, false, false, 50)), "html", null, true);
            echo " DT
                                    </td>



                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-1\"></div>
    </div><!--End Row-->

    <div class=\"row mt-3\">
        <div class=\"col-lg-4\"></div>
        <div class=\"col-lg-4\">
            <a href=\"";
        // line 71
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
        return "reservation_event/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 71,  184 => 57,  167 => 50,  163 => 49,  160 => 48,  156 => 46,  152 => 44,  150 => 43,  144 => 40,  140 => 39,  136 => 38,  132 => 37,  124 => 32,  120 => 30,  116 => 29,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Hello reservation controller!{% endblock %}

{% block content %}
    <div class=\"row mt-3\">
        <div class=\"col-lg-1\"></div>
        <div class=\"col-lg-10\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\" align=\"center\">LISTE DES RESERVATIONS POUR L'EVENEMENT : {{ event }}</h5>
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Nom </th>
                                <th>Prenom</th>
                                <th>Email</th>
                                <th scope=\"col\">Nombre des tickets</th>
                                <th>Status</th>
                                <th>Date de réservation</th>
                                <th>Montant</th>


                            </tr>
                            </thead>
                            <tbody>
                            {% for e in reservation %}
                                <tr>
                                    <td>
                                            <img src=\"/user/{{ e.user.pictureUser }}\"
                                                 class=\"picture-src rounded-circle \" width=\"50px\" id=\"wizardPicturePreview\" title=\"\"/>


                                    </td>
                                    <td>{{ e.user.firstName }}</td>
                                    <td>{{ e.user.lastName }}</td>
                                    <td>{{ e.user.email }}</td>
                                    <td>{{ e.nbParticipants }}</td>

                                    <td>
                                        {% if e.status ==true %}
                                            Reservé
                                        {% else %}
                                            Annuler
                                        {% endif%}
                                    </td>
                                    <td>{{ e.reservationDate|date('d-m-Y') }}</td>
                                    <td>              {{ e.resteapayer}} - {{ e.reduction}} ={{ e.resteapayer-e.reduction }} DT
                                    </td>



                                </tr>
                            {% endfor %}


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-1\"></div>
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
", "reservation_event/index.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\reservation_event\\index.html.twig");
    }
}
