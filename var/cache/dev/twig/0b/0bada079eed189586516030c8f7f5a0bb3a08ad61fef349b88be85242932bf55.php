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

/* product_front/filter.html.twig */
class __TwigTemplate_864d8b89feb4426634107505f4c06c755b0e1a17face35cd9b5c07a20632de02 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product_front/filter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product_front/filter.html.twig"));

        // line 1
        echo "<table  style=\"width:100%\">
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["class" => "search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start"]]);
        echo "
<tr>
    <td>
    <div class=\"search_item\">
        <div> Produits </div>
             ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "q", [], "any", false, false, false, 7), 'row', ["attr" => ["class" => "destination search_input"]]);
        echo "
    </div>
    </td>

    <td>
        <div class=\"search_item\">
            <div> Categories </div>
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "categories", [], "any", false, false, false, 14), 'row');
        echo "
           </div>
   </div>
    </td>

    <td>
        <div class=\"search_item\">
            <div> PrixVente </div>
        </div>
<div class=\"row\">
    <div class=\"col-md-6\">
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "min", [], "any", false, false, false, 25), 'row');
        echo "
    </div>
    <div class=\"col-md-6\">
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "max", [], "any", false, false, false, 28), 'row');
        echo "
    </div>
</div>


<div id=\"slider\"> </div>

        <div class=\"search_item\">
            <div> PrixLocation </div>
        </div>
<div class=\"row\">
    <div class=\"col-md-6\">
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "mini", [], "any", false, false, false, 40), 'row');
        echo "
    </div>
    <div class=\"col-md-6\">
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "maxi", [], "any", false, false, false, 43), 'row');
        echo "
    </div>
</div>

<div id=\"slider\">
</div>


    <td>
    <div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">
        <button  class=\"btn btn-outline-warning\" type=\"submit\"> Filtrer </button>
    </div>

    </td>
</tr>
";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_end');
        echo "

</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product_front/filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 58,  105 => 43,  99 => 40,  84 => 28,  78 => 25,  64 => 14,  54 => 7,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table  style=\"width:100%\">
{{ form_start(form , {'attr': {'class': 'search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start'}})}}
<tr>
    <td>
    <div class=\"search_item\">
        <div> Produits </div>
             {{ form_row(form.q , {'attr': {'class': 'destination search_input'}}) }}
    </div>
    </td>

    <td>
        <div class=\"search_item\">
            <div> Categories </div>
            {{ form_row(form.categories) }}
           </div>
   </div>
    </td>

    <td>
        <div class=\"search_item\">
            <div> PrixVente </div>
        </div>
<div class=\"row\">
    <div class=\"col-md-6\">
        {{ form_row(form.min) }}
    </div>
    <div class=\"col-md-6\">
        {{ form_row(form.max) }}
    </div>
</div>


<div id=\"slider\"> </div>

        <div class=\"search_item\">
            <div> PrixLocation </div>
        </div>
<div class=\"row\">
    <div class=\"col-md-6\">
        {{ form_row(form.mini) }}
    </div>
    <div class=\"col-md-6\">
        {{ form_row(form.maxi) }}
    </div>
</div>

<div id=\"slider\">
</div>


    <td>
    <div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">
        <button  class=\"btn btn-outline-warning\" type=\"submit\"> Filtrer </button>
    </div>

    </td>
</tr>
{{  form_end(form) }}

</table>
", "product_front/filter.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\product_front\\filter.html.twig");
    }
}
