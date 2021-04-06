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

/* activity/add.html.twig */
class __TwigTemplate_70e7e5372e4f13fc2811c74dda5a5b7262be36406a8ecc722ea984149da91551 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/add.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "activity/add.html.twig", 1);
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
        <div class=\"col-lg-3\"></div>
        <div class=\"col-lg-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"card-title\">AJOUTER UNE ACTIVITE</div>
                    <hr>
                    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <label for=\"input-6\">Titre</label>

                                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "titleActivity", [], "any", false, false, false, 19), 'widget', ["id" => "input-titre", "attr" => ["class" => "form-control form-control-rounded", "placeholder" => "Entrer un titre"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <label for=\"input-10\">Category</label>

                                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "category", [], "any", false, false, false, 26), 'widget', ["id" => "input-prix", "attr" => ["class" => "form-control form-control-rounded", "placeholder" => ""]]);
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"input-7\">Description</label>

                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "descriptionActivity", [], "any", false, false, false, 35), 'widget', ["id" => "input-description", "attr" => ["class" => "form-control form-control-rounded", "placeholder" => "Entrer une description"]]);
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"input-8\">Prix</label>

                                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "priceActivity", [], "any", false, false, false, 44), 'widget', ["id" => "input-titre", "attr" => ["class" => "form-control form-control-rounded", "placeholder" => "Saisir un prix"]]);
        echo "


                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"input-9\">Adresse</label>

                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "adressActivity", [], "any", false, false, false, 55), 'widget', ["id" => "input-datefin", "attr" => ["class" => "form-control form-control-rounded", "placeholder" => "Saisir une adresse"]]);
        echo "

                            </div>
                        </div>
                    </div>


                    <div class=\"form-group\">
                        <center><button type=\"submit\" class=\"btn btn-success btn-round px-5\"> Ajouter l'activité</button></center>
                    </div>
                    ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
        echo "

                </div>
            </div>
        </div>
        <div class=\"col-lg-3\"></div>
    </div><!--End Row-->



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "activity/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 65,  135 => 55,  121 => 44,  109 => 35,  97 => 26,  87 => 19,  78 => 13,  68 => 5,  58 => 4,  35 => 1,);
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
                    <div class=\"card-title\">AJOUTER UNE ACTIVITE</div>
                    <hr>
                    {{ form_start(form) }}
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <label for=\"input-6\">Titre</label>

                                {{form_widget(form.titleActivity, {'id':'input-titre','attr': {'class': 'form-control form-control-rounded','placeholder':'Entrer un titre'}}) }}
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <label for=\"input-10\">Category</label>

                                {{form_widget(form.category, {'id':'input-prix','attr': {'class': 'form-control form-control-rounded','placeholder':''}}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"input-7\">Description</label>

                                {{form_widget(form.descriptionActivity, {'id':'input-description','attr': {'class': 'form-control form-control-rounded','placeholder':'Entrer une description'}}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"input-8\">Prix</label>

                                {{form_widget(form.priceActivity, {'id':'input-titre','attr': {'class': 'form-control form-control-rounded','placeholder':'Saisir un prix'}}) }}


                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"input-9\">Adresse</label>

                                {{form_widget(form.adressActivity, {'id':'input-datefin','attr': {'class': 'form-control form-control-rounded','placeholder':'Saisir une adresse'}}) }}

                            </div>
                        </div>
                    </div>


                    <div class=\"form-group\">
                        <center><button type=\"submit\" class=\"btn btn-success btn-round px-5\"> Ajouter l'activité</button></center>
                    </div>
                    {{ form_end(form) }}

                </div>
            </div>
        </div>
        <div class=\"col-lg-3\"></div>
    </div><!--End Row-->



{% endblock %}", "activity/add.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\activity\\add.html.twig");
    }
}
