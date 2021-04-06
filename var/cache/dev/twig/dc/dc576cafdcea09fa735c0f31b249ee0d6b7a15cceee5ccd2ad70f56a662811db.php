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

/* back_template/promotion/form.html.twig */
class __TwigTemplate_1786a5a6556fb1372eb9ce50b31ebfd66689818a31fd75a71d2a07af7a72e546 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_template/promotion/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_template/promotion/form.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "back_template/promotion/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\" integrity=\"sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==\" crossorigin=\"anonymous\"></script>

    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"card-title\">";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</div>
            <hr>
            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "

                <div class=\"form-group row\">
                    <div class=\"col\">
                        <label for=\"input-1\">Event</label>
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "event", [], "any", false, false, false, 17), 'widget');
        echo "
                    </div>
                    <div class=\"col\">
                        <label for=\"input-1\">Product</label>
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "product", [], "any", false, false, false, 21), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"input-2\">Description</label>
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "descriptionpromotion", [], "any", false, false, false, 26), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"input-3\">Start Date  </label>
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "startDatePromotion", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "js-datepicker"]]);
        echo "
                    <div class=\"text-danger\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "startDatePromotion", [], "any", false, false, false, 32), 'errors');
        echo "
                    </div>
                </div>

            <div class=\"form-group\">
                <label for=\"input-4\">End Date  </label>
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "endDatePromotion", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "js-datepicker"]]);
        echo "
                <div class=\"text-danger\">
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "endDatePromotion", [], "any", false, false, false, 40), 'errors');
        echo "
                </div>

            </div>

            <div class=\"form-group\">
                <label for=\"input-4\">Percentage</label>
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "pourcentage", [], "any", false, false, false, 47), 'widget');
        echo "
            </div>

                <center>
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-success px-5 w-25\"><i class=\"icon-lock\"></i> Save</button>
                    </div>
                </center>

            ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back_template/promotion/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 56,  140 => 47,  130 => 40,  125 => 38,  116 => 32,  111 => 30,  104 => 26,  96 => 21,  89 => 17,  81 => 12,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block content %}


    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\" integrity=\"sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==\" crossorigin=\"anonymous\"></script>

    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"card-title\">{{ title }}</div>
            <hr>
            {{ form_start(form) }}

                <div class=\"form-group row\">
                    <div class=\"col\">
                        <label for=\"input-1\">Event</label>
                        {{ form_widget(form.event) }}
                    </div>
                    <div class=\"col\">
                        <label for=\"input-1\">Product</label>
                        {{ form_widget(form.product) }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"input-2\">Description</label>
                    {{ form_widget(form.descriptionpromotion) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"input-3\">Start Date  </label>
                    {{ form_widget(form.startDatePromotion, { attr:{ class:'js-datepicker' } }) }}
                    <div class=\"text-danger\">
                        {{ form_errors(form.startDatePromotion) }}
                    </div>
                </div>

            <div class=\"form-group\">
                <label for=\"input-4\">End Date  </label>
                {{ form_widget(form.endDatePromotion, { attr:{ class:'js-datepicker' } }) }}
                <div class=\"text-danger\">
                    {{ form_errors(form.endDatePromotion) }}
                </div>

            </div>

            <div class=\"form-group\">
                <label for=\"input-4\">Percentage</label>
                {{ form_widget(form.pourcentage) }}
            </div>

                <center>
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-success px-5 w-25\"><i class=\"icon-lock\"></i> Save</button>
                    </div>
                </center>

            {{ form_end(form) }}
        </div>
    </div>

{% endblock %}", "back_template/promotion/form.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\back_template\\promotion\\form.html.twig");
    }
}
