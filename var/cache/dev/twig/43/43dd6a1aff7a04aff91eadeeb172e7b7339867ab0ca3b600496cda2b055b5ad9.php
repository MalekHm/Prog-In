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

/* evennement/edit.html.twig */
class __TwigTemplate_81ec23191dcd295caf3546911229c4db0e5b55c6c7dd167bdc4de2fa5d5464a6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evennement/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evennement/edit.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "evennement/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
            <div class=\"row mt-3\">
                <div class=\"col-lg-2\"></div>
                <div class=\"col-lg-8\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"card-title\">MODIFIER UN EVENNEMENT</div>
                            <hr>
                            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <label for=\"input-6\">Titre</label>

                                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "titre", [], "any", false, false, false, 19), 'widget', ["id" => "input-titre", "attr" => ["class" => "form-control form-control-rounded", "placeholder" => "Saisir un titre"]]);
        echo "
                            </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"form-group\">
                                        <label for=\"input-11\">Nombre de personnes</label>

                                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nb_persons", [], "any", false, false, false, 26), 'widget', ["id" => "input-nbpersonne", "attr" => ["class" => "form-control form-control-rounded", "placeholder" => "Date Debut"]]);
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <label for=\"input-8\">Date Debut</label>

                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "start_date", [], "any", false, false, false, 35), 'widget', ["id" => "input-datedebut", "attr" => ["class" => "form-control form-control-rounded", "placeholder" => "Date Debut"]]);
        echo "

                            </div>
                                </div>
                                    <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <label for=\"input-9\">Date Fin</label>

                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "end_date", [], "any", false, false, false, 43), 'widget', ["id" => "input-datefin", "attr" => ["class" => "form-control form-control-rounded", "placeholder" => "Date Debut"]]);
        echo "

                            </div>
                                    </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"input-7\">Description</label>

                                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "description", [], "any", false, false, false, 51), 'widget', ["id" => "input-description", "attr" => ["class" => "form-control form-control-rounded", "placeholder" => "Description"]]);
        echo "
                            </div>

                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <div class=\"form-group\">
                                        <label for=\"input-10\">Prix</label>

                                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "price_event", [], "any", false, false, false, 59), 'widget', ["id" => "input-prix", "attr" => ["class" => "form-control form-control-rounded", "placeholder" => "Date Debut"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <label for=\"input-11\">Cathégorie</label>

                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "category", [], "any", false, false, false, 66), 'widget', ["id" => "input-nbpersonne", "attr" => ["class" => "form-control form-control-rounded", "placeholder" => "Date Debut"]]);
        echo "
                            </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"input-11\">image</label>

                                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "files", [], "any", false, false, false, 73), 'widget');
        echo "
                            </div>

                            <div class=\"form-group\">
                                <center><button type=\"submit\" class=\"btn btn-success btn-round px-5\">modifier l'événnement</button></center>

                            </div>
                            ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'form_end');
        echo "

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2\"></div>
            </div><!--End Row-->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "evennement/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 80,  162 => 73,  152 => 66,  142 => 59,  131 => 51,  120 => 43,  109 => 35,  97 => 26,  87 => 19,  78 => 13,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}


{% block content %}

            <div class=\"row mt-3\">
                <div class=\"col-lg-2\"></div>
                <div class=\"col-lg-8\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"card-title\">MODIFIER UN EVENNEMENT</div>
                            <hr>
                            {{ form_start(form) }}
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <label for=\"input-6\">Titre</label>

                                {{form_widget(form.titre, {'id':'input-titre','attr': {'class': 'form-control form-control-rounded','placeholder':'Saisir un titre'}}) }}
                            </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"form-group\">
                                        <label for=\"input-11\">Nombre de personnes</label>

                                        {{form_widget(form.nb_persons, {'id':'input-nbpersonne','attr': {'class': 'form-control form-control-rounded','placeholder':'Date Debut'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <label for=\"input-8\">Date Debut</label>

                                {{form_widget(form.start_date, {'id':'input-datedebut','attr': {'class': 'form-control form-control-rounded','placeholder':'Date Debut'}}) }}

                            </div>
                                </div>
                                    <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <label for=\"input-9\">Date Fin</label>

                                {{form_widget(form.end_date, {'id':'input-datefin','attr': {'class': 'form-control form-control-rounded','placeholder':'Date Debut'}}) }}

                            </div>
                                    </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"input-7\">Description</label>

                                {{form_widget(form.description, {'id':'input-description','attr': {'class': 'form-control form-control-rounded','placeholder':'Description'}}) }}
                            </div>

                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <div class=\"form-group\">
                                        <label for=\"input-10\">Prix</label>

                                        {{form_widget(form.price_event, {'id':'input-prix','attr': {'class': 'form-control form-control-rounded','placeholder':'Date Debut'}}) }}
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <label for=\"input-11\">Cathégorie</label>

                                {{form_widget(form.category, {'id':'input-nbpersonne','attr': {'class': 'form-control form-control-rounded','placeholder':'Date Debut'}}) }}
                            </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"input-11\">image</label>

                                {{form_widget(form.files) }}
                            </div>

                            <div class=\"form-group\">
                                <center><button type=\"submit\" class=\"btn btn-success btn-round px-5\">modifier l'événnement</button></center>

                            </div>
                            {{ form_end(form) }}

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2\"></div>
            </div><!--End Row-->


{% endblock %}", "evennement/edit.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\evennement\\edit.html.twig");
    }
}
