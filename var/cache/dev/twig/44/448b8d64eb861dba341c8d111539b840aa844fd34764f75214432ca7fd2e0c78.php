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

/* payment/index.html.twig */
class __TwigTemplate_06d2a1b1b9cc1f424b8663db12f344d27e2aacb53a12562d2929ad65f58b468b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "payment/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/single_background.jpg"), "html", null, true);
        echo "\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">Produits</div>
        </div>
    </div>
<div class=\"listing\">

    <!-- Search -->

    <div class=\"search\">
        <div class=\"search_inner\">

            <!-- Search Contents -->

            <div class=\"container fill_height no-padding\">
                <div class=\"row fill_height no-margin\">
                    <div class=\"col fill_height no-padding\">
                        <div class=\"search_tabs_container\">
                            <div class=\"search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                                <div class=\"search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/suitcase.png"), "html", null, true);
        echo "\" alt=\"\"><span>Paiement</span></div>
                            </div>
                        </div>
                        <div class=\"search_panel active\">
                            <form action=\"#\" id=\"search_form_2\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">

      <div class=\"bg-light p-3\">
          <h2> <strong> Mode de paiement</strong> </h2>
          <h4>Choisissez la méthode de paiement qui vous convient !</h4>

          <form action=\"modepaiement\" method=\"get\" name=\"key\">
          <div>
              <input type=\"radio\" id=\"livraison\" name=\"paiement\" onchange=\"changeMethod(this.id)\"  CHECKED>
              <label for=\"livraison\"> <h4> <b> <u>  Paiement a la livraison </u></b> </h4> </label>
          </div>


         <div class=\"bg-light p-3\">
             <h4> Payez votre commande cash à la livraison!</h4>
             <h6>Important:</h6>
             <h6>*Assurez-vous de préparer le montant exact de la commande. Les livreurs ne disposent pas toujours d'espèces pour vous rendre la monnaie. </h6>
             <h6>*Nous acceptons uniquement le payement en Dinar Tunisien.</h6>
             <h6>*Le paiement par carte bancaire, chèques ne sont pas acceptés.</h6>
         </div>

          <div>
              <input type=\"radio\" id=\"enligne\" name=\"paiement\" onchange=\"changeMethod(this.id)\" >
              <label for=\"enligne\"> <h4> <b> <u>  Paiement en ligne </u></b> </h4> </label>
          </div>

        <div class=\"bg-light p-3\">
            <h4> Payez votre commande en ligne!</h4>
            <h6>Important:</h6>
            <h6>*Votre sécurité, notre priorité. Vous gardez le contrôle de chaque transaction et vous êtes protégés contre la fraude bancaire. </h6>
            <h6>*Une procédure de remboursement plus rapide. La transaction s'effectue systématiquement sur votre carte de paiement.Politique de retour et remboursement s'applique.</h6>
            <h6>*Avant de procéder, veuillez vous assurer que vous disposez de suffisamment de solde dans le compte de votre carte.</h6>
        </div>

              <table  class=\"table table-bordered table-striped table-condensed\" style=\"width:50%\">
                  <thead>
                  <tr>
                      <td> Sous-total: </td>
                      <td> ";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["totalf"]) || array_key_exists("totalf", $context) ? $context["totalf"] : (function () { throw new RuntimeError('Variable "totalf" does not exist.', 66, $this->source); })()), "html", null, true);
        echo " DT </td>
                  </tr>
                  <tr>
                      <td> frais de livraison: </td>
                      <td> ";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["fraislivraison"]) || array_key_exists("fraislivraison", $context) ? $context["fraislivraison"] : (function () { throw new RuntimeError('Variable "fraislivraison" does not exist.', 70, $this->source); })()), "html", null, true);
        echo " DT</td>
                  </tr>
                  <tr>
                      <td> <strong> TOTAL: </strong> </td>
                      <td> <strong> ";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["totalfinal"]) || array_key_exists("totalfinal", $context) ? $context["totalfinal"] : (function () { throw new RuntimeError('Variable "totalfinal" does not exist.', 74, $this->source); })()), "html", null, true);
        echo " DT </strong> </td>
                  </tr>
                  </thead>
              </table>
    </div>

                                <button id=\"livraison-button\" class=\"button search_button\" type=\"submit\"><a href=\"/payment/successlivraison\">Payer a la livraison<span></span><span></span><span></span></button>
                                <button style=\"display: none\" id=\"checkout-button\" class=\"button search_button\">Payer en ligne<span></span><span></span><span></span> </button>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src=\"https://js.stripe.com/v3/\"></script>
    <script type=\"text/javascript\">
        function changeMethod(id){
            var livraison=document.getElementById('livraison-button');
            var enligne=document.getElementById('checkout-button');
            if(id=='livraison'){
                enligne.style.display = \"none\";
                livraison.style.display = \"block\";
            }
            else{
                enligne.style.display = \"block\";
                livraison.style.display = \"none\";
            }
        }
        // Create an instance of the Stripe object with your publishable API key
        var stripe = Stripe('pk_test_51IYAqkFZNE9gSdmYthjXiqNIFWR1IcniXYtbHNzbUi2eToJjE3CSxkpglgiirfBqvsisqZ7eUbcSU14bZWEY2Dl800ICFFSC6n');
        var checkoutButton = document.getElementById('checkout-button');

        checkoutButton.addEventListener('click', function() {
            // Create a new Checkout Session using the server-side endpoint you
            // created in step 3.

            fetch('/payment/create-checkout-session', {
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "payment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 74,  146 => 70,  139 => 66,  94 => 24,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block content %}

    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"{{ asset('front/images/single_background.jpg') }}\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">Produits</div>
        </div>
    </div>
<div class=\"listing\">

    <!-- Search -->

    <div class=\"search\">
        <div class=\"search_inner\">

            <!-- Search Contents -->

            <div class=\"container fill_height no-padding\">
                <div class=\"row fill_height no-margin\">
                    <div class=\"col fill_height no-padding\">
                        <div class=\"search_tabs_container\">
                            <div class=\"search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                                <div class=\"search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"{{ asset('front/images/suitcase.png') }}\" alt=\"\"><span>Paiement</span></div>
                            </div>
                        </div>
                        <div class=\"search_panel active\">
                            <form action=\"#\" id=\"search_form_2\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">

      <div class=\"bg-light p-3\">
          <h2> <strong> Mode de paiement</strong> </h2>
          <h4>Choisissez la méthode de paiement qui vous convient !</h4>

          <form action=\"modepaiement\" method=\"get\" name=\"key\">
          <div>
              <input type=\"radio\" id=\"livraison\" name=\"paiement\" onchange=\"changeMethod(this.id)\"  CHECKED>
              <label for=\"livraison\"> <h4> <b> <u>  Paiement a la livraison </u></b> </h4> </label>
          </div>


         <div class=\"bg-light p-3\">
             <h4> Payez votre commande cash à la livraison!</h4>
             <h6>Important:</h6>
             <h6>*Assurez-vous de préparer le montant exact de la commande. Les livreurs ne disposent pas toujours d'espèces pour vous rendre la monnaie. </h6>
             <h6>*Nous acceptons uniquement le payement en Dinar Tunisien.</h6>
             <h6>*Le paiement par carte bancaire, chèques ne sont pas acceptés.</h6>
         </div>

          <div>
              <input type=\"radio\" id=\"enligne\" name=\"paiement\" onchange=\"changeMethod(this.id)\" >
              <label for=\"enligne\"> <h4> <b> <u>  Paiement en ligne </u></b> </h4> </label>
          </div>

        <div class=\"bg-light p-3\">
            <h4> Payez votre commande en ligne!</h4>
            <h6>Important:</h6>
            <h6>*Votre sécurité, notre priorité. Vous gardez le contrôle de chaque transaction et vous êtes protégés contre la fraude bancaire. </h6>
            <h6>*Une procédure de remboursement plus rapide. La transaction s'effectue systématiquement sur votre carte de paiement.Politique de retour et remboursement s'applique.</h6>
            <h6>*Avant de procéder, veuillez vous assurer que vous disposez de suffisamment de solde dans le compte de votre carte.</h6>
        </div>

              <table  class=\"table table-bordered table-striped table-condensed\" style=\"width:50%\">
                  <thead>
                  <tr>
                      <td> Sous-total: </td>
                      <td> {{ totalf }} DT </td>
                  </tr>
                  <tr>
                      <td> frais de livraison: </td>
                      <td> {{ fraislivraison }} DT</td>
                  </tr>
                  <tr>
                      <td> <strong> TOTAL: </strong> </td>
                      <td> <strong> {{ totalfinal }} DT </strong> </td>
                  </tr>
                  </thead>
              </table>
    </div>

                                <button id=\"livraison-button\" class=\"button search_button\" type=\"submit\"><a href=\"/payment/successlivraison\">Payer a la livraison<span></span><span></span><span></span></button>
                                <button style=\"display: none\" id=\"checkout-button\" class=\"button search_button\">Payer en ligne<span></span><span></span><span></span> </button>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src=\"https://js.stripe.com/v3/\"></script>
    <script type=\"text/javascript\">
        function changeMethod(id){
            var livraison=document.getElementById('livraison-button');
            var enligne=document.getElementById('checkout-button');
            if(id=='livraison'){
                enligne.style.display = \"none\";
                livraison.style.display = \"block\";
            }
            else{
                enligne.style.display = \"block\";
                livraison.style.display = \"none\";
            }
        }
        // Create an instance of the Stripe object with your publishable API key
        var stripe = Stripe('pk_test_51IYAqkFZNE9gSdmYthjXiqNIFWR1IcniXYtbHNzbUi2eToJjE3CSxkpglgiirfBqvsisqZ7eUbcSU14bZWEY2Dl800ICFFSC6n');
        var checkoutButton = document.getElementById('checkout-button');

        checkoutButton.addEventListener('click', function() {
            // Create a new Checkout Session using the server-side endpoint you
            // created in step 3.

            fetch('/payment/create-checkout-session', {
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
{% endblock %}
", "payment/index.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\payment\\index.html.twig");
    }
}
