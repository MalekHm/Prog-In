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

/* place/update.html.twig */
class __TwigTemplate_7b218d85ce61bd661d10a8f67cef92f568c1f7aab90588c2753609f82c140761 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "place/update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "place/update.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "place/update.html.twig", 1);
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
        echo "
    <div class=\"row mt-3\">
        <div class=\"col-lg-2\"></div>
        <div class=\"col-lg-8\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"card-title\"><center>MODIFIER UNE RECOMMANDATION</center></div>
                    <hr>
                    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <label for=\"input-6\">Titre</label>

                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "titlePlace", [], "any", false, false, false, 19), 'widget', ["id" => "input-titre", "attr" => ["class" => "form-control form-control-rounded", "placeholder" => "Titre"]]);
        echo "
                    </div>
                        </div>
                        <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <label for=\"input-8\">Catégorie</label>

                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "category", [], "any", false, false, false, 26), 'widget', ["id" => "input-categorie", "attr" => ["class" => "form-control form-control-rounded", "placeholder" => ""]]);
        echo "

                    </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                    <div class=\"form-group\">
                        <label for=\"input-7\">Description</label>

                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "DescriptionPlace", [], "any", false, false, false, 36), 'widget', ["id" => "input-description", "attr" => ["class" => "form-control form-control-rounded", "placeholder" => "Description"]]);
        echo "
                    </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"input-9\">Image</label>
                        <div class=\"row\">


                        ";
        // line 46
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "request", [], "any", false, false, false, 46), "attributes", [], "any", false, false, false, 46), "get", [0 => "_route"], "method", false, false, false, 46), "place_update"))) {
            // line 47
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["place"]) || array_key_exists("place", $context) ? $context["place"] : (function () { throw new RuntimeError('Variable "place" does not exist.', 47, $this->source); })()), "media", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 48
                echo "                            <div class=\"col-md-4\">
                                <div>
                                    <img src=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . twig_get_attribute($this->env, $this->source, $context["image"], "imagePlace", [], "any", false, false, false, 50))), "html", null, true);
                echo "\" alt=\"Image\" width=\"150\">
                                    <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("place_delete_image", ["id" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\"
                                       data-delete data-token=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 52))), "html", null, true);
                echo "\">
                                        <button class=\"btn btn-danger btn-sm rounded-0\"   data-placement=\"top\" ><i class=\"fa fa-trash\"></i></button>
                                    </a>
                                </div>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                        ";
        }
        // line 59
        echo "
                        </div>
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "media", [], "any", false, false, false, 61), 'widget', ["id" => "input-localisation", "attr" => ["class" => "form-control form-control-rounded", "placeholder" => "Saisir une adresse"]]);
        echo "

                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <label for=\"input-10\">Adresse</label>

                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "location", [], "any", false, false, false, 70), 'widget', ["id" => "input-localisation", "attr" => ["class" => "form-control form-control-rounded", "placeholder" => "Saisir une adresse"]]);
        echo "
                    </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <label for=\"input-10\">Affichage </label>

                                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "showPlace", [], "any", false, false, false, 77), 'widget', ["id" => "input-localisation", "attr" => ["class" => "form-control form-control-rounded", "placeholder" => "Saisir une adresse"]]);
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <button type=\"submit\" class=\"btn btn-info btn-round px-5\"> Retourner </button>
                          </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                <button type=\"submit\" class=\"btn btn-success btn-round px-5\"> Enregistrer</button>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                <button type=\"reset\" class=\"btn btn-secondary btn-round px-5\"> Annuler</button>

                            </div>
                        </div>

                    </div>

                    ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), 'form_end');
        echo "

                </div>
            </div>
        </div>
        <div class=\"col-lg-2\">

        </div>
    </div><!--End Row-->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 112
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "place/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 112,  231 => 111,  209 => 99,  184 => 77,  174 => 70,  162 => 61,  158 => 59,  155 => 58,  143 => 52,  139 => 51,  135 => 50,  131 => 48,  126 => 47,  124 => 46,  111 => 36,  98 => 26,  88 => 19,  79 => 13,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}


{% block content %}

    <div class=\"row mt-3\">
        <div class=\"col-lg-2\"></div>
        <div class=\"col-lg-8\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"card-title\"><center>MODIFIER UNE RECOMMANDATION</center></div>
                    <hr>
                    {{ form_start(form) }}
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <label for=\"input-6\">Titre</label>

                        {{form_widget(form.titlePlace, {'id':'input-titre','attr': {'class': 'form-control form-control-rounded','placeholder':'Titre'}}) }}
                    </div>
                        </div>
                        <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <label for=\"input-8\">Catégorie</label>

                        {{form_widget(form.category, {'id':'input-categorie','attr': {'class': 'form-control form-control-rounded','placeholder':''}}) }}

                    </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                    <div class=\"form-group\">
                        <label for=\"input-7\">Description</label>

                        {{form_widget(form.DescriptionPlace, {'id':'input-description','attr': {'class': 'form-control form-control-rounded','placeholder':'Description'}}) }}
                    </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"input-9\">Image</label>
                        <div class=\"row\">


                        {% if app.request.attributes.get('_route')=='place_update' %}
                            {% for image in place.media %}
                            <div class=\"col-md-4\">
                                <div>
                                    <img src=\"{{ asset('/uploads/images/'~ image.imagePlace) }}\" alt=\"Image\" width=\"150\">
                                    <a href=\"{{ path( 'place_delete_image',{'id':image.id} ) }}\"
                                       data-delete data-token=\"{{ csrf_token('delete' ~ image.id) }}\">
                                        <button class=\"btn btn-danger btn-sm rounded-0\"   data-placement=\"top\" ><i class=\"fa fa-trash\"></i></button>
                                    </a>
                                </div>
                            </div>
                            {% endfor %}
                        {% endif %}

                        </div>
                        {{form_widget(form.media, {'id':'input-localisation','attr': {'class': 'form-control form-control-rounded','placeholder':'Saisir une adresse'}}) }}

                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <label for=\"input-10\">Adresse</label>

                        {{form_widget(form.location, {'id':'input-localisation','attr': {'class': 'form-control form-control-rounded','placeholder':'Saisir une adresse'}}) }}
                    </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <label for=\"input-10\">Affichage </label>

                                {{form_widget(form.showPlace, {'id':'input-localisation','attr': {'class': 'form-control form-control-rounded','placeholder':'Saisir une adresse'}}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <button type=\"submit\" class=\"btn btn-info btn-round px-5\"> Retourner </button>
                          </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                <button type=\"submit\" class=\"btn btn-success btn-round px-5\"> Enregistrer</button>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                <button type=\"reset\" class=\"btn btn-secondary btn-round px-5\"> Annuler</button>

                            </div>
                        </div>

                    </div>

                    {{ form_end(form) }}

                </div>
            </div>
        </div>
        <div class=\"col-lg-2\">

        </div>
    </div><!--End Row-->


{% endblock %}
{% block javascript %}

{% endblock %}", "place/update.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\place\\update.html.twig");
    }
}
