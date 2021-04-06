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

/* blog/_form.html.twig */
class __TwigTemplate_f74d7aa23543e663cb7852b0f0a26ac05211f4587e312f29f2410b4bd85170af extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/_form.html.twig"));

        // line 1
        echo " ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "


    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"card-title\">Create New Blog</div>
            <hr>

                <div class=\"form-group\">
                    <label for=\"input-6\">Title</label>
                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"input-7\">Description</label>
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "description", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"input-8\">Picture</label>
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "picture", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"input-9\">Community</label>
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "community", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "community", [], "any", false, false, false, 26), 'errors');
        echo "
                <div class=\"form-group py-2\">
                    <div class=\"icheck-material-white\">
                        <input type=\"checkbox\" id=\"user-checkbox2\" checked=\"\"/>
                        <label for=\"user-checkbox2\">I Agree Terms & Conditions</label>
                    </div>
                </div>
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-light btn-round px-5\"><i class=\"icon-lock\"></i> ";
        // line 34
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 34, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
                </div>

        </div>
    </div>

";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "blog/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  101 => 34,  90 => 26,  86 => 25,  79 => 21,  72 => 17,  68 => 16,  61 => 12,  57 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {{ form_start(form) }}


    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"card-title\">Create New Blog</div>
            <hr>

                <div class=\"form-group\">
                    <label for=\"input-6\">Title</label>
                    {{ form_widget(form.title ,{'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(form.title) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"input-7\">Description</label>
                    {{ form_widget(form.description ,{'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(form.description) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"input-8\">Picture</label>
                    {{ form_widget(form.picture ,{'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"input-9\">Community</label>
                    {{ form_widget(form.community ,{'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(form.community) }}
                <div class=\"form-group py-2\">
                    <div class=\"icheck-material-white\">
                        <input type=\"checkbox\" id=\"user-checkbox2\" checked=\"\"/>
                        <label for=\"user-checkbox2\">I Agree Terms & Conditions</label>
                    </div>
                </div>
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-light btn-round px-5\"><i class=\"icon-lock\"></i> {{ button_label|default('Save') }}</button>
                </div>

        </div>
    </div>

{{ form_end(form) }}
", "blog/_form.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\blog\\_form.html.twig");
    }
}
