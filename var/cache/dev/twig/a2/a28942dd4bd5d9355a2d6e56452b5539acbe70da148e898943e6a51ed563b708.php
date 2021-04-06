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

/* back_template/publicity/form.html.twig */
class __TwigTemplate_f77f380db9c8634a3cb4d969a66d397d1cf26c6adf69c8ab87348e473321632c extends Template
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
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_template/publicity/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_template/publicity/form.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "back_template/publicity/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\" integrity=\"sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==\" crossorigin=\"anonymous\"></script>


    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"card-title\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</div>
            <hr>
            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
            <div class=\"my-custom-class-for-errors\">
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'errors');
        echo "
            </div>
                <div class=\"form-group\">
                    <label for=\"input-1\">Title</label>
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "titlePub", [], "any", false, false, false, 19), 'widget');
        echo "
                </div>
            <div class=\"form-group\">
                <label for=\"input-1\">Link</label>
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "link", [], "any", false, false, false, 23), 'widget');
        echo "
            </div>
                <div class=\"form-group\">
                    <label for=\"input-2\">Description</label>
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "descriptionPub", [], "any", false, false, false, 27), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"input-3\">Start Date  </label>
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "startDatePub", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "js-datepicker"]]);
        echo "
                    <div class=\"text-danger\">
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "startDatePub", [], "any", false, false, false, 33), 'errors');
        echo "
                    </div>
                 </div>

            <div class=\"form-group\">
                <label for=\"input-4\">End Date  </label>
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "endDatePub", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "js-datepicker"]]);
        echo "
                <div class=\"text-danger\">
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "endDatePub", [], "any", false, false, false, 41), 'errors');
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                <label for=\"input-4\">Position  </label>
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "position", [], "any", false, false, false, 47), 'widget');
        echo "

            </div>

            <div class=\"form-group\">
                <label for=\"input-4\">Publicity Picture  </label>
                <div class=\"picture-container\">
                    <div class=\"picture\" onchange=\"yes()\">
                        ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, (isset($context["publicity"]) || array_key_exists("publicity", $context) ? $context["publicity"] : (function () { throw new RuntimeError('Variable "publicity" does not exist.', 55, $this->source); })()), "picturePub", [], "any", false, false, false, 55)) {
            // line 56
            echo "
                            ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "picturePub", [], "any", false, false, false, 57), 'widget', ["id" => "pic", "required" => false]);
            echo "
                            <div class=\"text-danger\">
                                ";
            // line 59
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "picturePub", [], "any", false, false, false, 59), 'errors');
            echo "
                            </div>
                            <center>
                                <img src=\"/publicity/";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["publicity"]) || array_key_exists("publicity", $context) ? $context["publicity"] : (function () { throw new RuntimeError('Variable "publicity" does not exist.', 62, $this->source); })()), "picturePub", [], "any", false, false, false, 62), "html", null, true);
            echo "\" style=\"height: 140px\"
                                     class=\"picture-src\" id=\"wizardPicturePreview\" title=\"\"/>
                            </center>


                        ";
        } else {
            // line 68
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "picturePub", [], "any", false, false, false, 68), 'widget', ["id" => "pic"]);
            echo "
                            <div class=\"text-danger\">
                                ";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "picturePub", [], "any", false, false, false, 70), 'errors');
            echo "
                            </div>
                            <center>
                                <img src=\"\"
                                     class=\"picture-src\" id=\"wizardPicturePreview\" style=\"height: 140px\" title=\"\"/>
                            </center>

                        ";
        }
        // line 78
        echo "                    </div>
                </div>
            </div>


            <br>

            <center>
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-success px-10 w-25\"><i class=\"icon-lock\"></i> Save</button>
                    </div>
                </center>

            ";
        // line 91
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
<script>
    function yes(){
        var e= document.getElementById(\"pic\");
        readURL(e);
    }


    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                \$('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back_template/publicity/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 91,  196 => 78,  185 => 70,  179 => 68,  170 => 62,  164 => 59,  159 => 57,  156 => 56,  154 => 55,  143 => 47,  134 => 41,  129 => 39,  120 => 33,  115 => 31,  108 => 27,  101 => 23,  94 => 19,  87 => 15,  82 => 13,  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block content %}


    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\" integrity=\"sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==\" crossorigin=\"anonymous\"></script>


    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"card-title\">{{ title }}</div>
            <hr>
            {{ form_start(form) }}
            <div class=\"my-custom-class-for-errors\">
                {{ form_errors(form) }}
            </div>
                <div class=\"form-group\">
                    <label for=\"input-1\">Title</label>
                    {{ form_widget(form.titlePub) }}
                </div>
            <div class=\"form-group\">
                <label for=\"input-1\">Link</label>
                {{ form_widget(form.link) }}
            </div>
                <div class=\"form-group\">
                    <label for=\"input-2\">Description</label>
                    {{ form_widget(form.descriptionPub) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"input-3\">Start Date  </label>
                    {{ form_widget(form.startDatePub, { attr:{ class:'js-datepicker' } }) }}
                    <div class=\"text-danger\">
                        {{ form_errors(form.startDatePub) }}
                    </div>
                 </div>

            <div class=\"form-group\">
                <label for=\"input-4\">End Date  </label>
                {{ form_widget(form.endDatePub, { attr:{ class:'js-datepicker' } }) }}
                <div class=\"text-danger\">
                    {{ form_errors(form.endDatePub) }}
                </div>
            </div>

            <div class=\"form-group\">
                <label for=\"input-4\">Position  </label>
                {{ form_widget(form.position) }}

            </div>

            <div class=\"form-group\">
                <label for=\"input-4\">Publicity Picture  </label>
                <div class=\"picture-container\">
                    <div class=\"picture\" onchange=\"yes()\">
                        {% if publicity.picturePub %}

                            {{ form_widget(form.picturePub, {'id' : 'pic' , 'required':false}) }}
                            <div class=\"text-danger\">
                                {{ form_errors(form.picturePub) }}
                            </div>
                            <center>
                                <img src=\"/publicity/{{ publicity.picturePub }}\" style=\"height: 140px\"
                                     class=\"picture-src\" id=\"wizardPicturePreview\" title=\"\"/>
                            </center>


                        {% else %}
                            {{ form_widget(form.picturePub , {'id' : 'pic' }) }}
                            <div class=\"text-danger\">
                                {{ form_errors(form.picturePub) }}
                            </div>
                            <center>
                                <img src=\"\"
                                     class=\"picture-src\" id=\"wizardPicturePreview\" style=\"height: 140px\" title=\"\"/>
                            </center>

                        {% endif %}
                    </div>
                </div>
            </div>


            <br>

            <center>
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-success px-10 w-25\"><i class=\"icon-lock\"></i> Save</button>
                    </div>
                </center>

            {{ form_end(form) }}
        </div>
    </div>
<script>
    function yes(){
        var e= document.getElementById(\"pic\");
        readURL(e);
    }


    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                \$('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
{% endblock %}", "back_template/publicity/form.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\back_template\\publicity\\form.html.twig");
    }
}
