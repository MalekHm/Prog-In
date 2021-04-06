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

/* product_front/orders.html.twig */
class __TwigTemplate_d03ceb9d23005b10cc938b0c12f85985d4711c77955ce5a44ab8f0187dfe21b1 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product_front/orders.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product_front/orders.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product_front/orders.html.twig", 1);
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
        echo "    <style>
        .alert {
            padding: 10px;
            color: white;
            margin-bottom: 10px;
        }
    </style>

    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/about_background.jpg"), "html", null, true);
        echo "\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">Vos Commandes</div>
        </div>
    </div>



    <!-- CTA -->

    <div class=\"cta\">
        <!-- Image by https://unsplash.com/@thanni -->
        <div class=\"cta_background\" style=\"background: linear-gradient(to right, #fa9e1b, #8d4fff, #fa9e1b);color: white;\">
          <div class=\"container\">
              ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 29
            echo "                  <div class=\"alert alert-danger\">
                      ";
            // line 30
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                  </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            <div class=\"row\">
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Client</th>
                        <th>Télephone</th>
                        <th>Cin</th>
                        <th>Date du commande</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 47, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 48
            echo "                        <tr>
                            <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                            <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 50), "firstName", [], "any", false, false, false, 50), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 50), "lastName", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                            <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 51), "phone", [], "any", false, false, false, 51), "html", null, true);
            echo " </td>
                            <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 52), "identity", [], "any", false, false, false, 52), "html", null, true);
            echo " </td>
                            <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderDate", [], "any", false, false, false, 53), "d-m-Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "Total", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                            <td><a class=\"btn btn-primary\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profacture", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">Facture </a></td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            echo "                        <tr>
                            <td colspan=\"5\">Aucune Commande</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
    <script src=\"https://js.stripe.com/v3/\"></script>
    <script type=\"text/javascript\">
        // Create an instance of the Stripe object with your publishable API key
        var stripe = Stripe('pk_test_TYooMQauvdEDq54NiTphI7jx'
        );
        var checkoutButton = document.getElementById('checkout-button');

        function checkOut(ammount){
            // Create a new Checkout Session using the server-side endpoint you
            // created in step 3.
            fetch('/create-checkout-session/'+ammount, {
                method: 'POST',
            })
                .then(function(response) {
                    return response.json();
                })
                .then(function(session) {
                    return stripe.redirectToCheckout({ sessionId: session.id });
                })
                .then(function(result) {
                    // If `redirectToCheckout` fails due to a browser or network
                    // error, you should display the localized error message to your
                    // customer using `error.message`.
                    if (result.error) {
                        alert(result.error.message);
                    }
                })
                .catch(function(error) {
                    console.error('Error:', error);
                });
        }
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product_front/orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 62,  170 => 58,  162 => 55,  158 => 54,  154 => 53,  150 => 52,  146 => 51,  140 => 50,  136 => 49,  133 => 48,  128 => 47,  112 => 33,  103 => 30,  100 => 29,  96 => 28,  79 => 14,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block content %}
    <style>
        .alert {
            padding: 10px;
            color: white;
            margin-bottom: 10px;
        }
    </style>

    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"{{ asset('front/images/about_background.jpg') }}\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">Vos Commandes</div>
        </div>
    </div>



    <!-- CTA -->

    <div class=\"cta\">
        <!-- Image by https://unsplash.com/@thanni -->
        <div class=\"cta_background\" style=\"background: linear-gradient(to right, #fa9e1b, #8d4fff, #fa9e1b);color: white;\">
          <div class=\"container\">
              {% for message in app.flashes('danger') %}
                  <div class=\"alert alert-danger\">
                      {{ message }}
                  </div>
              {% endfor %}
            <div class=\"row\">
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Client</th>
                        <th>Télephone</th>
                        <th>Cin</th>
                        <th>Date du commande</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for order in orders %}
                        <tr>
                            <td>{{ order.id }}</td>
                            <td>{{ order.user.firstName }} {{ order.user.lastName }}</td>
                            <td>{{ order.user.phone }} </td>
                            <td>{{ order.user.identity }} </td>
                            <td>{{ order.orderDate |date('d-m-Y') }}</td>
                            <td>{{ order.Total }}</td>
                            <td><a class=\"btn btn-primary\" href=\"{{ path('profacture', {'id': order.id}) }}\">Facture </a></td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"5\">Aucune Commande</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
    <script src=\"https://js.stripe.com/v3/\"></script>
    <script type=\"text/javascript\">
        // Create an instance of the Stripe object with your publishable API key
        var stripe = Stripe('pk_test_TYooMQauvdEDq54NiTphI7jx'
        );
        var checkoutButton = document.getElementById('checkout-button');

        function checkOut(ammount){
            // Create a new Checkout Session using the server-side endpoint you
            // created in step 3.
            fetch('/create-checkout-session/'+ammount, {
                method: 'POST',
            })
                .then(function(response) {
                    return response.json();
                })
                .then(function(session) {
                    return stripe.redirectToCheckout({ sessionId: session.id });
                })
                .then(function(result) {
                    // If `redirectToCheckout` fails due to a browser or network
                    // error, you should display the localized error message to your
                    // customer using `error.message`.
                    if (result.error) {
                        alert(result.error.message);
                    }
                })
                .catch(function(error) {
                    console.error('Error:', error);
                });
        }
    </script>

{% endblock %}", "product_front/orders.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\product_front\\orders.html.twig");
    }
}
