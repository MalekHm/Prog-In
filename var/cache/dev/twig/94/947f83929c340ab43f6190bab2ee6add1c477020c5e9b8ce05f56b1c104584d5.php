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

/* community/_form.html.twig */
class __TwigTemplate_c8493df36c1487ba90de5d94bc20f788757c9a8d73fbe243e19433435a897c15 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "community/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "community/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "


<div class=\"card\" xmlns=\"http://www.w3.org/1999/html\">
    <div class=\"card-body\">
        <div class=\"card-title\">Create New Community</div>
        <hr>

        <div class=\"form-group\">
            <label for=\"input-6\">Group Name</label>

            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "grp_name", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "grp_name", [], "any", false, false, false, 13), 'errors');
        echo "</div>
        <div class=\"form-group\">
            <label for=\"input-9\">Email </label>

            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "email", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "email", [], "any", false, false, false, 18), 'errors');
        echo "</div>
        <div class=\"form-group\">
            <label for=\"input-8\">Description</label>

            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), 'errors');
        echo "</div>
        <div class=\"form-group\">
            <label for=\"input-7\">Phone <i class=\"fa fa-phone \"  > </i></label>

            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "phone", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "phone", [], "any", false, false, false, 28), 'errors');
        echo "
        </div>
            <div class=\"form-group py-2\">
                <div class=\"icheck-material-white\">
                    <input type=\"checkbox\" id=\"user-checkbox2\" checked=\"\"/>
                    <label for=\"user-checkbox2\">I Agree Terms & Conditions</label>
                </div>
            </div>
            <div class=\"form-group\">
                <i class=\"icon-lock\"> </i>
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "save", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "btn btn-light btn-round px-5"]]);
        echo "

            </div>

        </div>
    </div>

    ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "community/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 45,  107 => 38,  94 => 28,  90 => 27,  83 => 23,  79 => 22,  72 => 18,  68 => 17,  61 => 13,  57 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}


<div class=\"card\" xmlns=\"http://www.w3.org/1999/html\">
    <div class=\"card-body\">
        <div class=\"card-title\">Create New Community</div>
        <hr>

        <div class=\"form-group\">
            <label for=\"input-6\">Group Name</label>

            {{ form_widget(form.grp_name ,{'attr': {'class': 'form-control'}}) }}
            {{ form_errors(form.grp_name) }}</div>
        <div class=\"form-group\">
            <label for=\"input-9\">Email </label>

            {{ form_widget(form.email ,{'attr': {'class': 'form-control'}}) }}
            {{ form_errors(form.email) }}</div>
        <div class=\"form-group\">
            <label for=\"input-8\">Description</label>

            {{ form_widget(form.description ,{'attr': {'class': 'form-control'}}) }}
        {{ form_errors(form.description) }}</div>
        <div class=\"form-group\">
            <label for=\"input-7\">Phone <i class=\"fa fa-phone \"  > </i></label>

            {{ form_widget(form.phone ,{'attr': {'class': 'form-control'}}) }}
            {{ form_errors(form.phone) }}
        </div>
            <div class=\"form-group py-2\">
                <div class=\"icheck-material-white\">
                    <input type=\"checkbox\" id=\"user-checkbox2\" checked=\"\"/>
                    <label for=\"user-checkbox2\">I Agree Terms & Conditions</label>
                </div>
            </div>
            <div class=\"form-group\">
                <i class=\"icon-lock\"> </i>
                    {{ form_widget(form.save ,{'attr': {'class': 'btn btn-light btn-round px-5'}} ) }}

            </div>

        </div>
    </div>

    {{ form_end(form) }}
", "community/_form.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\community\\_form.html.twig");
    }
}
