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

/* ticket/index.html.twig */
class __TwigTemplate_eb0c3b49d39be6decaf3bc88a231c5f531509d1955d5f7768b55db022c73a5ae extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/index.html.twig"));

        // line 1
        echo "<center>
    ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 2, $this->source); })()), "event", [], "any", false, false, false, 2), "titre", [], "any", false, false, false, 2), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 2, $this->source); })()), "event", [], "any", false, false, false, 2), "startDate", [], "any", false, false, false, 2), "d-m-Y"), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 2, $this->source); })()), "event", [], "any", false, false, false, 2), "endDate", [], "any", false, false, false, 2), "d-m-Y"), "html", null, true);
        echo ")
    <br>
    Client ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "email", [], "any", false, false, false, 4), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "identity", [], "any", false, false, false, 4), "html", null, true);
        echo "
    <br>
    Nombre de Tickets achetés :  ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 6, $this->source); })()), "nbParticipants", [], "any", false, false, false, 6), "html", null, true);
        echo "
    <br>
    Montant Total = ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 8, $this->source); })()), "resteapayer", [], "any", false, false, false, 8), "html", null, true);
        echo "
    <br>
    Reduction = ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 10, $this->source); })()), "reduction", [], "any", false, false, false, 10), "html", null, true);
        echo "
    <br>
    <strong style=\"text-decoration: underline\">
        Reste à Payer =
        ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 14, $this->source); })()), "paid", [], "any", false, false, false, 14)) {
            // line 15
            echo "            0
        ";
        } else {
            // line 17
            echo "            ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 17, $this->source); })()), "resteapayer", [], "any", false, false, false, 17) - twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 17, $this->source); })()), "reduction", [], "any", false, false, false, 17)), "html", null, true);
            echo "
        ";
        }
        // line 19
        echo "        DT</strong>

    <br>
    <br>
    <br>
    <br>

    <img style=\"width: 200px;height: 200px;\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["codeqr"]) || array_key_exists("codeqr", $context) ? $context["codeqr"] : (function () { throw new RuntimeError('Variable "codeqr" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "\">
    <br>
    Date Réservation ";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 28, $this->source); })()), "reservationDate", [], "any", false, false, false, 28), "d-m-Y"), "html", null, true);
        echo "
</center>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ticket/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 28,  100 => 26,  91 => 19,  85 => 17,  81 => 15,  79 => 14,  72 => 10,  67 => 8,  62 => 6,  55 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<center>
    {{ reservation.event.titre }} ({{ reservation.event.startDate | date ('d-m-Y') }} / {{ reservation.event.endDate | date ('d-m-Y') }})
    <br>
    Client {{ reservation.user.email }} / {{ reservation.user.identity }}
    <br>
    Nombre de Tickets achetés :  {{ reservation.nbParticipants }}
    <br>
    Montant Total = {{  reservation.resteapayer }}
    <br>
    Reduction = {{ reservation.reduction }}
    <br>
    <strong style=\"text-decoration: underline\">
        Reste à Payer =
        {% if reservation.paid %}
            0
        {% else %}
            {{ reservation.resteapayer-reservation.reduction }}
        {% endif %}
        DT</strong>

    <br>
    <br>
    <br>
    <br>

    <img style=\"width: 200px;height: 200px;\" src=\"{{codeqr}}\">
    <br>
    Date Réservation {{ reservation.reservationDate | date ('d-m-Y') }}
</center>
", "ticket/index.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\ticket\\index.html.twig");
    }
}
