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

/* reservation_event_front/index.html.twig */
class __TwigTemplate_ba34cd282aace7486ab82fae11e8b3d077eeb39399445ec90b066159f8acb3a7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_event_front/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_event_front/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation_event_front/index.html.twig", 1);
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
            <div class=\"home_title\">Vos réservations</div>
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
                        <th scope=\"col\">Nom de l'événement</th>
                        <th scope=\"col\">Status</th>
                        <th scope=\"col\">Nombre de personnes</th>
                        <th scope=\"col\">Date</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 46
            echo "                        <tr>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "event", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 49
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 49), true))) {
                // line 50
                echo "                                Reservé
                                ";
            } else {
                // line 52
                echo "                                Annuler
                                ";
            }
            // line 54
            echo "                            </td>
                            <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "nbParticipants", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "reservationDate", [], "any", false, false, false, 56), "d-m-Y"), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 58
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 58), true))) {
                // line 59
                echo "                                    <a class=\"btn btn-danger\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_reservation_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                echo "\"><i class=\"fa fa-trash\"></i></a>
                                    <a class=\"btn btn-success\" href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("PDF", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "token", [], "any", false, false, false, 60)]), "html", null, true);
                echo "\"><i class=\"fa fa-ticket\"></i></a>
                                    ";
                // line 61
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["reservation"], "paid", [], "any", false, false, false, 61), true))) {
                    // line 62
                    echo "                                        Payé
                                        ";
                } else {
                    // line 64
                    echo "                                            <button class=\"btn btn-primary\" onclick=\"checkOut(";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["reservation"], "resteapayer", [], "any", false, false, false, 64) - twig_get_attribute($this->env, $this->source, $context["reservation"], "reduction", [], "any", false, false, false, 64)), "html", null, true);
                    echo ")\">Payer Mainteant</button>

                                    ";
                }
                // line 67
                echo "
                                ";
            }
            // line 69
            echo "

                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "

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

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation_event_front/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 74,  188 => 69,  184 => 67,  177 => 64,  173 => 62,  171 => 61,  167 => 60,  162 => 59,  160 => 58,  155 => 56,  151 => 55,  148 => 54,  144 => 52,  140 => 50,  138 => 49,  133 => 47,  130 => 46,  126 => 45,  112 => 33,  103 => 30,  100 => 29,  96 => 28,  79 => 14,  68 => 5,  58 => 4,  35 => 1,);
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
            <div class=\"home_title\">Vos réservations</div>
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
                        <th scope=\"col\">Nom de l'événement</th>
                        <th scope=\"col\">Status</th>
                        <th scope=\"col\">Nombre de personnes</th>
                        <th scope=\"col\">Date</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for reservation in reservations %}
                        <tr>
                            <td>{{ reservation.event }}</td>
                            <td>
                                {% if reservation.status ==true %}
                                Reservé
                                {% else %}
                                Annuler
                                {% endif%}
                            </td>
                            <td>{{ reservation.nbParticipants }}</td>
                            <td>{{ reservation.reservationDate|date('d-m-Y') }}</td>
                            <td>
                                {% if reservation.status ==true %}
                                    <a class=\"btn btn-danger\" href=\"{{ path('client_reservation_delete', {'id': reservation.id}) }}\"><i class=\"fa fa-trash\"></i></a>
                                    <a class=\"btn btn-success\" href=\"{{ path('PDF', {'id': reservation.token}) }}\"><i class=\"fa fa-ticket\"></i></a>
                                    {% if reservation.paid==true %}
                                        Payé
                                        {% else %}
                                            <button class=\"btn btn-primary\" onclick=\"checkOut({{ reservation.resteapayer  - reservation.reduction }})\">Payer Mainteant</button>

                                    {% endif %}

                                {% endif%}


                            </td>
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

{% endblock %}", "reservation_event_front/index.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\reservation_event_front\\index.html.twig");
    }
}
