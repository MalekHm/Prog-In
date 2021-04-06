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

/* evennement/AddEvent.html.twig */
class __TwigTemplate_5a616c10f1c27c9fbd9740171ed911431d8a2bc88ea25a1ea1eb4bcaba59e36a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evennement/AddEvent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evennement/AddEvent.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "evennement/AddEvent.html.twig", 1);
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
                            <div class=\"card-title\">AJOUTER UN EVENNEMENT</div>
                            <hr>
                            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                              <div class=\"row\">
                                  <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label for=\"input-6\">Titre</label>

                                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "titre", [], "any", false, false, false, 19), 'widget', ["id" => "input-titre", "attr" => ["class" => "form-control form-control-rounded", "placeholder" => "Saisir un titre"]]);
        echo "
                                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "titre", [], "any", false, false, false, 20), 'errors');
        echo "
                                </div>
                                  </div>
                                      <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <label for=\"input-11\">Nombre de personnes</label>

                                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "nb_persons", [], "any", false, false, false, 27), 'widget', ["id" => "input-nbpersonne", "attr" => ["class" => "form-control form-control-rounded", "placeholder" => ""]]);
        echo "
                                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nb_persons", [], "any", false, false, false, 28), 'errors');
        echo "
                            </div>
                                      </div>
                              </div>
                                <div class=\"form-group\">
                                    <label for=\"input-7\">Description</label>

                                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), 'widget', ["id" => "input-description", "attr" => ["class" => "form-control form-control-rounded", "placeholder" => "Saisir une description"]]);
        echo "
                                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "description", [], "any", false, false, false, 36), 'errors');
        echo "
                                </div>
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label for=\"input-8\">Date Debut</label>

                                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "start_date", [], "any", false, false, false, 43), 'widget', ["id" => "input-datedebut", "attr" => ["class" => "form-control form-control-rounded", "placeholder" => ""]]);
        echo "
                                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "start_date", [], "any", false, false, false, 44), 'errors');
        echo "
                                </div>
                                </div>
                                <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label for=\"input-9\">Date Fin</label>

                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "end_date", [], "any", false, false, false, 51), 'widget', ["id" => "input-datefin", "attr" => ["class" => "form-control form-control-rounded", "placeholder" => ""]]);
        echo "
                                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "end_date", [], "any", false, false, false, 52), 'errors');
        echo "
                                </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label for=\"input-10\">Prix</label>

                                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "price_event", [], "any", false, false, false, 61), 'widget', ["id" => "input-prix", "attr" => ["class" => "form-control form-control-rounded", "placeholder" => "Saisir le prix"]]);
        echo "
                                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "price_event", [], "any", false, false, false, 62), 'errors');
        echo "
                                </div>
                                </div>
                                <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label for=\"input-11\">Cathégorie</label>

                                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "category", [], "any", false, false, false, 69), 'widget', ["id" => "input-nbpersonne", "attr" => ["class" => "form-control form-control-rounded", "placeholder" => ""]]);
        echo "
                                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "category", [], "any", false, false, false, 70), 'errors');
        echo "
                                </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                            <label for=\"input-11\">image</label>

                            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "files", [], "any", false, false, false, 77), 'widget');
        echo "
                        </div>

                                <div class=\"form-group\">
                                <center><button type=\"submit\" class=\"btn btn-success btn-round px-5\">AJOUTER l'événnement</button></center>
                                </div>
                            ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), 'form_end');
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
        return "evennement/AddEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 83,  187 => 77,  177 => 70,  173 => 69,  163 => 62,  159 => 61,  147 => 52,  143 => 51,  133 => 44,  129 => 43,  119 => 36,  115 => 35,  105 => 28,  101 => 27,  91 => 20,  87 => 19,  78 => 13,  68 => 5,  58 => 4,  35 => 1,);
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
                            <div class=\"card-title\">AJOUTER UN EVENNEMENT</div>
                            <hr>
                            {{form_start(form,{'attr': {'novalidate': 'novalidate'}} )}}
                              <div class=\"row\">
                                  <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label for=\"input-6\">Titre</label>

                                    {{form_widget(form.titre, {'id':'input-titre','attr': {'class': 'form-control form-control-rounded','placeholder':'Saisir un titre'}}) }}
                                    {{ form_errors(form.titre) }}
                                </div>
                                  </div>
                                      <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <label for=\"input-11\">Nombre de personnes</label>

                                {{form_widget(form.nb_persons, {'id':'input-nbpersonne','attr': {'class': 'form-control form-control-rounded','placeholder':''}}) }}
                                {{ form_errors(form.nb_persons) }}
                            </div>
                                      </div>
                              </div>
                                <div class=\"form-group\">
                                    <label for=\"input-7\">Description</label>

                                    {{form_widget(form.description, {'id':'input-description','attr': {'class': 'form-control form-control-rounded','placeholder':'Saisir une description'}}) }}
                                    {{ form_errors(form.description) }}
                                </div>
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label for=\"input-8\">Date Debut</label>

                                    {{form_widget(form.start_date, {'id':'input-datedebut','attr': {'class': 'form-control form-control-rounded','placeholder':''}}) }}
                                    {{ form_errors(form.start_date) }}
                                </div>
                                </div>
                                <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label for=\"input-9\">Date Fin</label>

                                    {{form_widget(form.end_date, {'id':'input-datefin','attr': {'class': 'form-control form-control-rounded','placeholder':''}}) }}
                                    {{ form_errors(form.end_date) }}
                                </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label for=\"input-10\">Prix</label>

                                    {{form_widget(form.price_event, {'id':'input-prix','attr': {'class': 'form-control form-control-rounded','placeholder':'Saisir le prix'}}) }}
                                    {{ form_errors(form.price_event) }}
                                </div>
                                </div>
                                <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label for=\"input-11\">Cathégorie</label>

                                    {{form_widget(form.category, {'id':'input-nbpersonne','attr': {'class': 'form-control form-control-rounded','placeholder':''}}) }}
                                    {{ form_errors(form.category) }}
                                </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                            <label for=\"input-11\">image</label>

                            {{form_widget(form.files) }}
                        </div>

                                <div class=\"form-group\">
                                <center><button type=\"submit\" class=\"btn btn-success btn-round px-5\">AJOUTER l'événnement</button></center>
                                </div>
                            {{ form_end(form) }}

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2\"></div>
            </div><!--End Row-->



{% endblock %}", "evennement/AddEvent.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\evennement\\AddEvent.html.twig");
    }
}
