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

/* FacturePdf/FacturePdf.html.twig */
class __TwigTemplate_857118d2915c6bd2cce8a1b3b73fc5a6b2473ce370a984327b81ee0fc952f8a9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FacturePdf/FacturePdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FacturePdf/FacturePdf.html.twig"));

        // line 1
        echo "<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<center>
    <div class=\"container\">
        <h1>Facture</h1>
        <p>Le ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["auj"]) || array_key_exists("auj", $context) ? $context["auj"] : (function () { throw new RuntimeError('Variable "auj" does not exist.', 10, $this->source); })()), "d-m-Y"), "html", null, true);
        echo "</p>
        <p>Date de la commande : ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 11, $this->source); })()), "orderDate", [], "any", false, false, false, 11), "d-m-Y"), "html", null, true);
        echo " </p>
        <h4>Client : ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "firstName", [], "any", false, false, false, 12), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "lastName", [], "any", false, false, false, 12), "html", null, true);
        echo "</h4>
        <table width=\"100%\">
            <tr>
                <th>Id</th>
                <th>Produit</th>
                <th>Quantite</th>
                <th>Achat/Location</th>
                <th>Prix Unitaire</th>
                <th>Total</th>
            </tr>

            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 23, $this->source); })()), "prodectOrders", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["proord"]) {
            // line 24
            echo "                <tr>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proord"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proord"], "product", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proord"], "quantity", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 29
            if (twig_get_attribute($this->env, $this->source, $context["proord"], "type", [], "any", false, false, false, 29)) {
                // line 30
                echo "                            Achat
                        ";
            } else {
                // line 32
                echo "                            Location
                        ";
            }
            // line 34
            echo "                    </td>
                    <td>
                        ";
            // line 36
            if (twig_get_attribute($this->env, $this->source, $context["proord"], "type", [], "any", false, false, false, 36)) {
                // line 37
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proord"], "product", [], "any", false, false, false, 37), "price", [], "any", false, false, false, 37), "html", null, true);
                echo "
                        ";
            } else {
                // line 39
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proord"], "product", [], "any", false, false, false, 39), "pricer", [], "any", false, false, false, 39), "html", null, true);
                echo "
                        ";
            }
            // line 41
            echo "                    </td>
                    <td>
                        ";
            // line 43
            if (twig_get_attribute($this->env, $this->source, $context["proord"], "type", [], "any", false, false, false, 43)) {
                // line 44
                echo "                            ";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proord"], "product", [], "any", false, false, false, 44), "price", [], "any", false, false, false, 44) * twig_get_attribute($this->env, $this->source, $context["proord"], "quantity", [], "any", false, false, false, 44)), "html", null, true);
                echo "
                        ";
            } else {
                // line 46
                echo "                            ";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proord"], "product", [], "any", false, false, false, 46), "pricer", [], "any", false, false, false, 46) * twig_get_attribute($this->env, $this->source, $context["proord"], "quantity", [], "any", false, false, false, 46)), "html", null, true);
                echo "
                        ";
            }
            // line 48
            echo "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
        </table>
        <br>
        <div style=\"margin-right: 0px\">Montant à payer ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 54, $this->source); })()), "total", [], "any", false, false, false, 54), "html", null, true);
        echo " DT</div>
    </div>
</center>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FacturePdf/FacturePdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 54,  152 => 51,  144 => 48,  138 => 46,  132 => 44,  130 => 43,  126 => 41,  120 => 39,  114 => 37,  112 => 36,  108 => 34,  104 => 32,  100 => 30,  98 => 29,  93 => 27,  89 => 26,  85 => 25,  82 => 24,  78 => 23,  62 => 12,  58 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<center>
    <div class=\"container\">
        <h1>Facture</h1>
        <p>Le {{ auj|date('d-m-Y') }}</p>
        <p>Date de la commande : {{ order.orderDate|date('d-m-Y')}} </p>
        <h4>Client : {{ order.user.firstName }} {{ order.user.lastName }}</h4>
        <table width=\"100%\">
            <tr>
                <th>Id</th>
                <th>Produit</th>
                <th>Quantite</th>
                <th>Achat/Location</th>
                <th>Prix Unitaire</th>
                <th>Total</th>
            </tr>

            {% for proord in order.prodectOrders %}
                <tr>
                    <td>{{ proord.id }}</td>
                    <td>{{ proord.product.name }}</td>
                    <td>{{ proord.quantity }}</td>
                    <td>
                        {% if proord.type %}
                            Achat
                        {% else %}
                            Location
                        {% endif %}
                    </td>
                    <td>
                        {% if proord.type %}
                            {{ proord.product.price }}
                        {% else %}
                            {{ proord.product.pricer }}
                        {% endif %}
                    </td>
                    <td>
                        {% if proord.type %}
                            {{ proord.product.price*proord.quantity }}
                        {% else %}
                            {{ proord.product.pricer*proord.quantity }}
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}

        </table>
        <br>
        <div style=\"margin-right: 0px\">Montant à payer {{ order.total }} DT</div>
    </div>
</center>
", "FacturePdf/FacturePdf.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\FacturePdf\\FacturePdf.html.twig");
    }
}
