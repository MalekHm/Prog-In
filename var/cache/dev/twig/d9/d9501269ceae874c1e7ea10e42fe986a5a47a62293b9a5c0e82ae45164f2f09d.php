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

/* back_template/user/form.html.twig */
class __TwigTemplate_5bd6bcaf42efceb4978c6654dfa85c3dbb4e3d8bb729de436ddd9f85bdabbfab extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_template/user/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_template/user/form.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "back_template/user/form.html.twig", 1);
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



    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"card-title\">";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</div>
            <hr>
            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
            <div class=\"my-custom-class-for-errors\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'errors');
        echo "
            </div>
                <div class=\"row\">
                    <div class=\"form-group col-6\">
                        <label for=\"input-1\">First Name</label>
                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "firstName", [], "any", false, false, false, 19), 'widget');
        echo "
                    </div>
                    <div class=\"form-group col-6\">
                        <label for=\"input-2\">Last Name</label>
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "lastName", [], "any", false, false, false, 23), 'widget');
        echo "
                    </div>
                </div>
            <div class=\"row\">
                <div class=\"form-group col-6\">
                    <label for=\"input-2\">Email</label>
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), 'widget');
        echo "
                    <div class=\"text-danger\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'errors');
        echo "
                        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 33
            echo "                            ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    </div>
                </div>
                <div class=\"form-group col-6\"";
        // line 38
        if ((0 === twig_compare((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 38, $this->source); })()), "Edit User"))) {
            echo "style=\"display: none\"";
        }
        echo ">
                    <label for=\"input-2\">Password</label>
                    ";
        // line 40
        if ((0 === twig_compare((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 40, $this->source); })()), "Edit User"))) {
            // line 41
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "password", [], "any", false, false, false, 41), 'widget', ["required" => false]);
            echo "
                    ";
        } else {
            // line 43
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "password", [], "any", false, false, false, 43), 'widget');
            echo "
                    ";
        }
        // line 45
        echo "                    <div class=\"text-danger\">
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "password", [], "any", false, false, false, 46), 'errors');
        echo "
                    </div>
                </div>

            </div>
            <div class=\"row\">
                <div class=\"form-group col-3\">
                    <label for=\"input-2\">Identity</label>
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "identity", [], "any", false, false, false, 54), 'widget');
        echo "
                    <div class=\"text-danger\">
                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "identity", [], "any", false, false, false, 56), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group  col-3\">
                    <label for=\"input-3\">Birth Date  </label>
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "birthday", [], "any", false, false, false, 61), 'widget');
        echo "
                    <div class=\"text-danger\">
                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "birthday", [], "any", false, false, false, 63), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group col-6\">
                    <label for=\"input-2\">Phone Number</label>
                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "phone", [], "any", false, false, false, 68), 'widget');
        echo "
                    <div class=\"text-danger\">
                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "phone", [], "any", false, false, false, 70), 'errors');
        echo "
                    </div>
                </div>
            </div>




            <div class=\"form-group\">
                <label for=\"input-2\">Role</label>
                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "role", [], "any", false, false, false, 80), 'widget');
        echo "
            </div>



            <div class=\"form-group\">
                <label for=\"input-4\">User Picture  </label>
                <div class=\"picture-container\">
                    <div class=\"picture\" onchange=\"yes()\">
                        ";
        // line 89
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 89, $this->source); })()), "pictureUser", [], "any", false, false, false, 89)) {
            // line 90
            echo "
                            ";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "pictureUser", [], "any", false, false, false, 91), 'widget', ["id" => "pic", "required" => false]);
            echo "
                            <div class=\"text-danger\">
                                ";
            // line 93
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "pictureUser", [], "any", false, false, false, 93), 'errors');
            echo "
                            </div>
                            <center>
                                <img src=\"/user/";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 96, $this->source); })()), "pictureUser", [], "any", false, false, false, 96), "html", null, true);
            echo "\" style=\"height: 140px\"
                                     class=\"picture-src\" id=\"wizardPicturePreview\" title=\"\"/>
                            </center>


                        ";
        } else {
            // line 102
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "pictureUser", [], "any", false, false, false, 102), 'widget', ["id" => "pic"]);
            echo "
                            <div class=\"text-danger\">
                                ";
            // line 104
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "pictureUser", [], "any", false, false, false, 104), 'errors');
            echo "
                            </div>
                            <center>
                                <img src=\"\"
                                     class=\"picture-src\" id=\"wizardPicturePreview\" style=\"height: 140px\" title=\"\"/>
                            </center>

                        ";
        }
        // line 112
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
        // line 125
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), 'form_end');
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
        return "back_template/user/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 125,  270 => 112,  259 => 104,  253 => 102,  244 => 96,  238 => 93,  233 => 91,  230 => 90,  228 => 89,  216 => 80,  203 => 70,  198 => 68,  190 => 63,  185 => 61,  177 => 56,  172 => 54,  161 => 46,  158 => 45,  152 => 43,  146 => 41,  144 => 40,  137 => 38,  133 => 36,  123 => 33,  119 => 32,  115 => 31,  110 => 29,  101 => 23,  94 => 19,  86 => 14,  81 => 12,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block content %}




    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"card-title\">{{ title }}</div>
            <hr>
            {{ form_start(form) }}
            <div class=\"my-custom-class-for-errors\">
                {{ form_errors(form) }}
            </div>
                <div class=\"row\">
                    <div class=\"form-group col-6\">
                        <label for=\"input-1\">First Name</label>
                        {{ form_widget(form.firstName) }}
                    </div>
                    <div class=\"form-group col-6\">
                        <label for=\"input-2\">Last Name</label>
                        {{ form_widget(form.lastName) }}
                    </div>
                </div>
            <div class=\"row\">
                <div class=\"form-group col-6\">
                    <label for=\"input-2\">Email</label>
                    {{ form_widget(form.email) }}
                    <div class=\"text-danger\">
                        {{ form_errors(form.email) }}
                        {% for message in app.flashes('danger') %}
                            {{ message }}

                        {% endfor %}
                    </div>
                </div>
                <div class=\"form-group col-6\"{% if  title  == 'Edit User' %}style=\"display: none\"{% endif %}>
                    <label for=\"input-2\">Password</label>
                    {% if  title  == 'Edit User' %}
                        {{ form_widget(form.password, {'required':false}) }}
                    {% else %}
                        {{ form_widget(form.password) }}
                    {% endif %}
                    <div class=\"text-danger\">
                        {{ form_errors(form.password) }}
                    </div>
                </div>

            </div>
            <div class=\"row\">
                <div class=\"form-group col-3\">
                    <label for=\"input-2\">Identity</label>
                    {{ form_widget(form.identity) }}
                    <div class=\"text-danger\">
                        {{ form_errors(form.identity) }}
                    </div>
                </div>
                <div class=\"form-group  col-3\">
                    <label for=\"input-3\">Birth Date  </label>
                    {{ form_widget(form.birthday) }}
                    <div class=\"text-danger\">
                        {{ form_errors(form.birthday) }}
                    </div>
                </div>
                <div class=\"form-group col-6\">
                    <label for=\"input-2\">Phone Number</label>
                    {{ form_widget(form.phone) }}
                    <div class=\"text-danger\">
                        {{ form_errors(form.phone) }}
                    </div>
                </div>
            </div>




            <div class=\"form-group\">
                <label for=\"input-2\">Role</label>
                {{ form_widget(form.role) }}
            </div>



            <div class=\"form-group\">
                <label for=\"input-4\">User Picture  </label>
                <div class=\"picture-container\">
                    <div class=\"picture\" onchange=\"yes()\">
                        {% if user.pictureUser %}

                            {{ form_widget(form.pictureUser, {'id' : 'pic' , 'required':false}) }}
                            <div class=\"text-danger\">
                                {{ form_errors(form.pictureUser) }}
                            </div>
                            <center>
                                <img src=\"/user/{{ user.pictureUser }}\" style=\"height: 140px\"
                                     class=\"picture-src\" id=\"wizardPicturePreview\" title=\"\"/>
                            </center>


                        {% else %}
                            {{ form_widget(form.pictureUser , {'id' : 'pic' }) }}
                            <div class=\"text-danger\">
                                {{ form_errors(form.pictureUser) }}
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
{% endblock %}", "back_template/user/form.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\back_template\\user\\form.html.twig");
    }
}
