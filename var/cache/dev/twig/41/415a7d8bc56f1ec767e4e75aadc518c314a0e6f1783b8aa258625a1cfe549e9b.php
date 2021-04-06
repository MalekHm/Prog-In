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

/* checkout.html */
class __TwigTemplate_5da253c4b87febd9f7d573a674a6672439bc84f67c74a308a145c06bbd6d3476 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout.html"));

        // line 1
        echo "<html>
    <head>
        <title>Buy cool new product</title>
        <script src=\"https://js.stripe.com/v3/\"></script>
    </head>
    <body>
        <button id=\"checkout-button\">Checkout</button>
        <script type=\"text/javascript\">
            // Create an instance of the Stripe object with your publishable API key
            var stripe = Stripe('pk_test_51IYAqkFZNE9gSdmYthjXiqNIFWR1IcniXYtbHNzbUi2eToJjE3CSxkpglgiirfBqvsisqZ7eUbcSU14bZWEY2Dl800ICFFSC6n');
            var checkoutButton = document.getElementById('checkout-button');

            checkoutButton.addEventListener('click', function() {
                // Create a new Checkout Session using the server-side endpoint you
                // created in step 3.
                fetch('/payment/checkout2_btn', {
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
            });
        </script>
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "checkout.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    <head>
        <title>Buy cool new product</title>
        <script src=\"https://js.stripe.com/v3/\"></script>
    </head>
    <body>
        <button id=\"checkout-button\">Checkout</button>
        <script type=\"text/javascript\">
            // Create an instance of the Stripe object with your publishable API key
            var stripe = Stripe('pk_test_51IYAqkFZNE9gSdmYthjXiqNIFWR1IcniXYtbHNzbUi2eToJjE3CSxkpglgiirfBqvsisqZ7eUbcSU14bZWEY2Dl800ICFFSC6n');
            var checkoutButton = document.getElementById('checkout-button');

            checkoutButton.addEventListener('click', function() {
                // Create a new Checkout Session using the server-side endpoint you
                // created in step 3.
                fetch('/payment/checkout2_btn', {
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
            });
        </script>
    </body>
</html>", "checkout.html", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\checkout.html");
    }
}
