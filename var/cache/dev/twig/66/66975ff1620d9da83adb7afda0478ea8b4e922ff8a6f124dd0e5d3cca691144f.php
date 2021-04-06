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

/* cart/index.html.twig */
class __TwigTemplate_f1ec5d850c32482f0225ef9c29c2fcb4fbdda9c24d5c64d79418f062ca9bf4fa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        echo "    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/single_background.jpg"), "html", null, true);
        echo "\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">Produits</div>
        </div>
    </div>

    <!--
    <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
-->

<div class=\"container fill_height no-padding\">
<div class=\"row fill_height no-margin\">
    <div class=\"col fill_height no-padding\">
        <div class=\"search_tabs_container\">
            <div class=\"search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                <div class=\"search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/suitcase.png"), "html", null, true);
        echo "\" alt=\"\"><span>Paiement</span></div>
            </div>
        </div>


            <center>

    ";
        // line 28
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 28, $this->source); })())), 0))) {
            // line 29
            echo "        <table  class=\"table table-bordered table-striped table-condensed\" style=\"width:50%\" >
            <thead>
            <tr>
                <th colspan=\"5\"><center>Vos achats</center></th>
            </tr>
            <tr>
                <th>Produit</th>
                <th>Prix de vente</th>
                <th>Quantite</th>
                <th>Sous-Total</th>
                <th>Ations</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 43, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 44
                echo "                <tr>
                    <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
                echo "</td>
                    <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 46), "price", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
                    <td> <strong>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 47), "html", null, true);
                echo " </strong></td>
                    <td>";
                // line 48
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 48), "price", [], "any", false, false, false, 48) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 48)), "html", null, true);
                echo "</td>
                    <td>
                        <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\">Annuler</a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "
            </tbody>
            <tfoot>
            <td colspan=\"3\" class=\"text-right\"> <strong>Total des achats:</strong> </td>
            <td> <strong> ";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 58, $this->source); })()), "html", null, true);
            echo " </strong></td>
            </tfoot>

        </table>

        </center>
    ";
        } else {
            // line 65
            echo "        <table  class=\"table table-bordered table-striped table-condensed\" style=\"width:50%\">
            <thead>
            <tr>
                <th colspan=\"5\"><center>Vos Achats</center></th>
            </tr>
            <tr>
                <th colspan=\"5\"><center>Pas d'achat pour aujourd'hui!</center></th>
            </tr>
            </thead>
        </table>

    ";
        }
        // line 77
        echo "

    <center>


        ";
        // line 82
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["itemsr"]) || array_key_exists("itemsr", $context) ? $context["itemsr"] : (function () { throw new RuntimeError('Variable "itemsr" does not exist.', 82, $this->source); })())), 0))) {
            // line 83
            echo "            <table  class=\"table table-bordered table-striped table-condensed\" style=\"width:50%\">
                <thead>
                <tr>
                    <th colspan=\"5\"><center>Vos locations</center></th>
                </tr>

                <tr>
                    <th>Produit</th>
                    <th>Prix de location</th>
                    <th>Quantite</th>
                    <th>Sous-Total</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["itemsr"]) || array_key_exists("itemsr", $context) ? $context["itemsr"] : (function () { throw new RuntimeError('Variable "itemsr" does not exist.', 98, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["itemr"]) {
                // line 99
                echo "                    <tr>
                        <td>";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["itemr"], "product", [], "any", false, false, false, 100), "name", [], "any", false, false, false, 100), "html", null, true);
                echo "</td>
                        <td>";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["itemr"], "product", [], "any", false, false, false, 101), "pricer", [], "any", false, false, false, 101), "html", null, true);
                echo "</td>
                        <td> <strong>";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itemr"], "quantity", [], "any", false, false, false, 102), "html", null, true);
                echo " </strong></td>
                        <td>";
                // line 103
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["itemr"], "product", [], "any", false, false, false, 103), "pricer", [], "any", false, false, false, 103) * twig_get_attribute($this->env, $this->source, $context["itemr"], "quantity", [], "any", false, false, false, 103)), "html", null, true);
                echo "</td>
                        <td>
                            <a href=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remover", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["itemr"], "product", [], "any", false, false, false, 105), "id", [], "any", false, false, false, 105)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\">Annuler</a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "
                </tbody>
                <tfoot>
                <td colspan=\"3\" class=\"text-right\"> <strong>Total des commandes:</strong> </td>
                <td> <strong> ";
            // line 113
            echo twig_escape_filter($this->env, (isset($context["totalf"]) || array_key_exists("totalf", $context) ? $context["totalf"] : (function () { throw new RuntimeError('Variable "totalf" does not exist.', 113, $this->source); })()), "html", null, true);
            echo " </strong></td>
                </tfoot>
                <tfoot>
                <td colspan=\"3\" class=\"text-right\"><strong> Total des locations:</strong> </td>
                <td> <strong>";
            // line 117
            echo twig_escape_filter($this->env, (isset($context["totalr"]) || array_key_exists("totalr", $context) ? $context["totalr"] : (function () { throw new RuntimeError('Variable "totalr" does not exist.', 117, $this->source); })()), "html", null, true);
            echo "</strong></td>
                </tfoot>


            </table>


        ";
        } else {
            // line 125
            echo "        <table  class=\"table table-bordered table-striped table-condensed\" style=\"width:50%\">
            <thead>
            <tr>
                <th colspan=\"5\"><center>Vos locations</center></th>
            </tr>
            <tr>
                <th colspan=\"5\"><center>Pas de location pour aujourd'hui!</center></th>
            </tr>
            </thead>
        </table>
        ";
        }
        // line 136
        echo "
    </center>
    </div>
</div>
</div>

    <center>  <div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_front");
        echo "\">Poursuivre mes achats </a></div>
        <div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment");
        echo "\">Passer au paiement </a></div>
    </center>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 143,  306 => 142,  298 => 136,  285 => 125,  274 => 117,  267 => 113,  261 => 109,  251 => 105,  246 => 103,  242 => 102,  238 => 101,  234 => 100,  231 => 99,  227 => 98,  210 => 83,  208 => 82,  201 => 77,  187 => 65,  177 => 58,  171 => 54,  161 => 50,  156 => 48,  152 => 47,  148 => 46,  144 => 45,  141 => 44,  137 => 43,  121 => 29,  119 => 28,  109 => 21,  91 => 6,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}  {% endblock %}

{% block content %}
    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"{{ asset('front/images/single_background.jpg') }}\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">Produits</div>
        </div>
    </div>

    <!--
    <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
-->

<div class=\"container fill_height no-padding\">
<div class=\"row fill_height no-margin\">
    <div class=\"col fill_height no-padding\">
        <div class=\"search_tabs_container\">
            <div class=\"search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                <div class=\"search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"{{ asset('front/images/suitcase.png') }}\" alt=\"\"><span>Paiement</span></div>
            </div>
        </div>


            <center>

    {% if  items | length > 0%}
        <table  class=\"table table-bordered table-striped table-condensed\" style=\"width:50%\" >
            <thead>
            <tr>
                <th colspan=\"5\"><center>Vos achats</center></th>
            </tr>
            <tr>
                <th>Produit</th>
                <th>Prix de vente</th>
                <th>Quantite</th>
                <th>Sous-Total</th>
                <th>Ations</th>
            </tr>
            </thead>
            <tbody>
            {% for item in items  %}
                <tr>
                    <td>{{ item.product.name }}</td>
                    <td>{{ item.product.price }}</td>
                    <td> <strong>{{ item.quantity }} </strong></td>
                    <td>{{ item.product.price * item.quantity }}</td>
                    <td>
                        <a href=\"{{ path('cart_remove', {'id': item.product.id}) }}\" class=\"btn btn-danger btn-sm\">Annuler</a>
                    </td>
                </tr>
            {% endfor %}

            </tbody>
            <tfoot>
            <td colspan=\"3\" class=\"text-right\"> <strong>Total des achats:</strong> </td>
            <td> <strong> {{ total }} </strong></td>
            </tfoot>

        </table>

        </center>
    {% else %}
        <table  class=\"table table-bordered table-striped table-condensed\" style=\"width:50%\">
            <thead>
            <tr>
                <th colspan=\"5\"><center>Vos Achats</center></th>
            </tr>
            <tr>
                <th colspan=\"5\"><center>Pas d'achat pour aujourd'hui!</center></th>
            </tr>
            </thead>
        </table>

    {% endif %}


    <center>


        {% if  itemsr | length > 0%}
            <table  class=\"table table-bordered table-striped table-condensed\" style=\"width:50%\">
                <thead>
                <tr>
                    <th colspan=\"5\"><center>Vos locations</center></th>
                </tr>

                <tr>
                    <th>Produit</th>
                    <th>Prix de location</th>
                    <th>Quantite</th>
                    <th>Sous-Total</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                {% for itemr in itemsr  %}
                    <tr>
                        <td>{{ itemr.product.name }}</td>
                        <td>{{ itemr.product.pricer }}</td>
                        <td> <strong>{{ itemr.quantity }} </strong></td>
                        <td>{{ itemr.product.pricer * itemr.quantity }}</td>
                        <td>
                            <a href=\"{{ path('cart_remover', {'id': itemr.product.id}) }}\" class=\"btn btn-danger btn-sm\">Annuler</a>
                        </td>
                    </tr>
                {% endfor %}

                </tbody>
                <tfoot>
                <td colspan=\"3\" class=\"text-right\"> <strong>Total des commandes:</strong> </td>
                <td> <strong> {{ totalf }} </strong></td>
                </tfoot>
                <tfoot>
                <td colspan=\"3\" class=\"text-right\"><strong> Total des locations:</strong> </td>
                <td> <strong>{{ totalr }}</strong></td>
                </tfoot>


            </table>


        {% else %}
        <table  class=\"table table-bordered table-striped table-condensed\" style=\"width:50%\">
            <thead>
            <tr>
                <th colspan=\"5\"><center>Vos locations</center></th>
            </tr>
            <tr>
                <th colspan=\"5\"><center>Pas de location pour aujourd'hui!</center></th>
            </tr>
            </thead>
        </table>
        {% endif %}

    </center>
    </div>
</div>
</div>

    <center>  <div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"{{ path('product_front') }}\">Poursuivre mes achats </a></div>
        <div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"{{ path('payment') }}\">Passer au paiement </a></div>
    </center>

{% endblock %}






", "cart/index.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\cart\\index.html.twig");
    }
}
