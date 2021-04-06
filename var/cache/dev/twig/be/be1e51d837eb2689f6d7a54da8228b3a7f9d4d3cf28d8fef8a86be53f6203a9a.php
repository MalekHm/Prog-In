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

/* frontblog/favoris.html.twig */
class __TwigTemplate_9a8cabdc23328d2d50e132a87419d060273b2d8850b2c37c75855529f99c3b64 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontblog/favoris.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontblog/favoris.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "frontblog/favoris.html.twig", 1);
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
        echo "    <!-- Home -->

    <!-- Home -->

    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/blog_background.jpg"), "html", null, true);
        echo "\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">Mes favoris</div>
        </div>
    </div>

    <!-- Blog -->

    <div class=\"blog\">
        <div class=\"container\">
            <div class=\"row\">

                <!-- Blog Content -->
                                    ";
        // line 23
        $context["fa"] = "true";
        // line 24
        echo "
";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) || array_key_exists("blogs", $context) ? $context["blogs"] : (function () { throw new RuntimeError('Variable "blogs" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 26
            echo "
                                                        ";
            // line 27
            $context["test8"] = "true";
            // line 28
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["b"], "favoris", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                echo "   
  ";
                // line 29
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29)))) {
                    // line 30
                    echo "
                                                         ";
                    // line 31
                    $context["fa"] = "false";
                    // line 32
                    echo "           
                                                    
                                        ";
                    // line 34
                    $context["test8"] = "false";
                    // line 35
                    echo "
                                               ";
                }
                // line 37
                echo "                                               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                                                 ";
            if ((0 === twig_compare((isset($context["test8"]) || array_key_exists("test8", $context) ? $context["test8"] : (function () { throw new RuntimeError('Variable "test8" does not exist.', 38, $this->source); })()), "false"))) {
                // line 39
                echo "                <div class=\"col-lg-8\">

                    <div class=\"blog_post_container\">

                        <!-- Blog Post -->


                        <!-- Blog Post -->


                        <!-- Blog Post -->

                        <div class=\"blog_post\">
                            <div class=\"blog_post_image\">
                                <img src=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["b"], "picture", [], "any", false, false, false, 53))), "html", null, true);
                echo "\" alt=\"https://unsplash.com/@stilclassics\">
                            </div>
                        <div class=\"blog_post_meta\">
                                <ul>
                                    <li class=\"blog_post_meta_item\"><a href=\"\"><i class=\"fa fa-user-circle\"> </i> ";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["b"], "community", [], "any", false, false, false, 57), "grpName", [], "any", false, false, false, 57), "html", null, true);
                echo " </a></li>
        
                                  <li class=\"blog_post_meta_item\"><a href=\"\"><i class=\"fa fa-comment \">Comment</i> ";
                // line 59
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "commentArticles", [], "any", false, false, false, 59)), "html", null, true);
                echo " </a></li>
                                        <li class=\"blog_post_meta_item\"><a href=\"\"><i class=\"fa fa-clock-o\"> </i> ";
                // line 60
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "DateAjout", [], "any", false, false, false, 60)), "html", null, true);
                echo "</a></li>
                                    <li class=\"blog_post_meta_item\">

                                    ";
                // line 63
                $context["test"] = "false";
                // line 64
                echo "
                    ";
                // line 65
                $context["test2"] = "false";
                // line 66
                echo "
 ";
                // line 67
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                    // line 68
                    echo "
 ";
                    // line 69
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["b"], "likes", [], "any", false, false, false, 69));
                    foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                        // line 70
                        echo "                    ";
                        $context["test2"] = "true";
                        // line 71
                        echo "


                                 ";
                        // line 74
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 74), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74)))) {
                            // line 75
                            echo "                                
                <form action=\"";
                            // line 76
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_like");
                            echo "\" method =\"post\">

                                        <input type=\"hidden\" value=\"";
                            // line 78
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 78), "html", null, true);
                            echo "\" name=\"id\">

                    ";
                            // line 80
                            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "likes", [], "any", false, false, false, 80)), "html", null, true);
                            echo "  <button class=\"btn btn-small btn-info\" href=\"#\">  <a class=\"fa fa-thumbs-o-up\"   >  </a> </button>
                    ";
                            // line 81
                            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "dislike", [], "any", false, false, false, 81)), "html", null, true);
                            echo " <button class=\"btn btn-small btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-down \"  >  </a> </button>

                    </form>
                    ";
                            // line 84
                            $context["test"] = "true";
                            // line 85
                            echo "                    ";
                            $context["test2"] = "true";
                            // line 86
                            echo "

                                   ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 90
                    echo "
                                 ";
                    // line 91
                    if (((0 === twig_compare((isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 91, $this->source); })()), "false")) && (0 === twig_compare((isset($context["test2"]) || array_key_exists("test2", $context) ? $context["test2"] : (function () { throw new RuntimeError('Variable "test2" does not exist.', 91, $this->source); })()), "true")))) {
                        echo "   
                 
         <form action=\"";
                        // line 93
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_like");
                        echo "\" method =\"post\">
                    
                                        <input type=\"hidden\" value=\"";
                        // line 95
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 95), "html", null, true);
                        echo "\" name=\"id\">

             ";
                        // line 97
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "likes", [], "any", false, false, false, 97)), "html", null, true);
                        echo "  <button class=\"btn btn-small btn-info\" href=\"#\">   <a class=\"fa fa-thumbs-up \"  >  </a> </button>
             ";
                        // line 98
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "dislike", [], "any", false, false, false, 98)), "html", null, true);
                        echo "<button class=\"btn btn-small btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-o-down \"   > </a></button>
                    </form>
                 ";
                    }
                    // line 101
                    echo "                                                
                                 ";
                    // line 102
                    if ((0 === twig_compare((isset($context["test2"]) || array_key_exists("test2", $context) ? $context["test2"] : (function () { throw new RuntimeError('Variable "test2" does not exist.', 102, $this->source); })()), "false"))) {
                        echo "                    
                      <form action=\"";
                        // line 103
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_like");
                        echo "\" method =\"post\">
                    
                                        <input type=\"hidden\" value=\"";
                        // line 105
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 105), "html", null, true);
                        echo "\" name=\"id\">
                          ";
                        // line 106
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "likes", [], "any", false, false, false, 106)), "html", null, true);
                        echo " <button class=\"btn btn-small btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-up \"   >  </a> </button>
                          ";
                        // line 107
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "dislike", [], "any", false, false, false, 107)), "html", null, true);
                        echo "  <button class=\"btn btn-small btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-down \"  > </a>      </button>               </form>
    ";
                    }
                    // line 109
                    echo "
 ";
                }
                // line 111
                echo "                                    </li>
                                    <li class=\"blog_post_meta_item\">
                     ";
                // line 113
                $context["test3"] = "false";
                // line 114
                echo "
 ";
                // line 115
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                    // line 116
                    echo "  ";
                    if (((null === twig_get_attribute($this->env, $this->source, $context["b"], "favoris", [], "any", false, false, false, 116)) ||  !twig_get_attribute($this->env, $this->source, $context["b"], "favoris", [], "any", true, true, false, 116))) {
                        // line 117
                        echo "<form action=\"";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_favoris");
                        echo "\" method =\"post\">
                    
                                        <input type=\"hidden\" value=\"";
                        // line 119
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 119), "html", null, true);
                        echo "\" name=\"id\">

    ";
                        // line 121
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "Favoris", [], "any", false, false, false, 121)), "html", null, true);
                        echo "<button class=\"btn btn-small btn-danger\" href=\"#\"><a class=\"fa fa-heart-o \"  > </a>  </button>

                    </form>
   ";
                    }
                    // line 125
                    echo "

 ";
                    // line 127
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["b"], "favoris", [], "any", false, false, false, 127));
                    foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                        echo "   
  ";
                        // line 128
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 128), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "user", [], "any", false, false, false, 128), "id", [], "any", false, false, false, 128)))) {
                            // line 129
                            echo "                                
                                                    <form action=\"";
                            // line 130
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_favoris");
                            echo "\" method =\"post\">
                    
                                        <input type=\"hidden\" value=\"";
                            // line 132
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 132), "html", null, true);
                            echo "\" name=\"id\">

                                                        ";
                            // line 134
                            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "Favoris", [], "any", false, false, false, 134)), "html", null, true);
                            echo "    <button class=\"btn btn-small btn-danger\" href=\"#\">   <a class=\"fa fa-heart \"  > </a> </button>

                    </form>
                                        ";
                            // line 137
                            $context["test3"] = "true";
                            // line 138
                            echo "
                                               ";
                        }
                        // line 140
                        echo "                                               ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 141
                    echo "

 ";
                    // line 143
                    if ((0 === twig_compare((isset($context["test3"]) || array_key_exists("test3", $context) ? $context["test3"] : (function () { throw new RuntimeError('Variable "test3" does not exist.', 143, $this->source); })()), "false"))) {
                        // line 144
                        echo "                               <form action=\"";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_favoris");
                        echo "\" method =\"post\">
                    
                                        <input type=\"hidden\" value=\"";
                        // line 146
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 146), "html", null, true);
                        echo "\" name=\"id\">

                                   ";
                        // line 148
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "Favoris", [], "any", false, false, false, 148)), "html", null, true);
                        echo "  <button class=\"btn btn-small btn-danger\" href=\"#\"><a class=\"fa fa-heart-o \"  > </a>  </button>

                    </form>

 ";
                    }
                    // line 152
                    echo "             
                            ";
                }
                // line 154
                echo "
            
                                                                                         </li>
                                </ul>
                            </div>
                            <div class=\"blog_post_title\"><a href=\"#\">";
                // line 159
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "title", [], "any", false, false, false, 159), "html", null, true);
                echo "</a></div>
                            <div class=\"blog_post_text\">
                                <p>";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "description", [], "any", false, false, false, 161), "html", null, true);
                echo "</p>
                            </div>
                            <div class=\"blog_post_title\"><a href=\"#\">Commentaire</a></div>
                           

                            ";
                // line 166
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["b"], "commentArticles", [], "any", false, false, false, 166));
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    // line 167
                    echo "
                            <div class=\"blog_post_text\">
                   <p>";
                    // line 169
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "user", [], "any", false, false, false, 169), "username", [], "any", false, false, false, 169), "html", null, true);
                    echo " : ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "contenu", [], "any", false, false, false, 169), "html", null, true);
                    echo "

                            <form method=\"post\" action=\"";
                    // line 171
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_article_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 171)]), "html", null, true);
                    echo "\" onsubmit=\"return confirm('Vous voulez supprimer votre commentaire?');\">

                                ";
                    // line 173
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 174
                        echo "
                                 ";
                        // line 175
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "user", [], "any", false, false, false, 175), "id", [], "any", false, false, false, 175), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 175, $this->source); })()), "user", [], "any", false, false, false, 175), "id", [], "any", false, false, false, 175)))) {
                            // line 176
                            echo "
                                    <button class=\"btn btn-danger\" href=\"#\">
                                        Delete <a class=\"fa fa-trash-o \"> </a> </button>

    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        <input type=\"hidden\" name=\"idb\" value=\"";
                            // line 181
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "blogs", [], "any", false, false, false, 181), "id", [], "any", false, false, false, 181), "html", null, true);
                            echo "\">

    <input type=\"hidden\" name=\"_token\" value=\"";
                            // line 183
                            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 183))), "html", null, true);
                            echo "\">
</form>

                                                             ";
                        }
                        // line 187
                        echo "                                                             ";
                    }
                    // line 188
                    echo "                                 </p>

                                              </div>
    

                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 194
                echo "                                ";
                if ((0 === twig_compare((isset($context["fa"]) || array_key_exists("fa", $context) ? $context["fa"] : (function () { throw new RuntimeError('Variable "fa" does not exist.', 194, $this->source); })()), "true"))) {
                    // line 195
                    echo "                                                            <div class=\"blog_post_text\">
                    Aucune favoris    </div>


                                                                                             ";
                }
                // line 200
                echo "

      </div>


      </div>
                </div>
                                                                                              ";
            }
            // line 208
            echo "

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "
                <!-- Blog Sidebar -->


            </div>
        </div>
    </div>

    <!-- Footer -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontblog/favoris.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  511 => 211,  503 => 208,  493 => 200,  486 => 195,  483 => 194,  472 => 188,  469 => 187,  462 => 183,  457 => 181,  450 => 176,  448 => 175,  445 => 174,  443 => 173,  438 => 171,  431 => 169,  427 => 167,  423 => 166,  415 => 161,  410 => 159,  403 => 154,  399 => 152,  391 => 148,  386 => 146,  380 => 144,  378 => 143,  374 => 141,  368 => 140,  364 => 138,  362 => 137,  356 => 134,  351 => 132,  346 => 130,  343 => 129,  341 => 128,  335 => 127,  331 => 125,  324 => 121,  319 => 119,  313 => 117,  310 => 116,  308 => 115,  305 => 114,  303 => 113,  299 => 111,  295 => 109,  290 => 107,  286 => 106,  282 => 105,  277 => 103,  273 => 102,  270 => 101,  264 => 98,  260 => 97,  255 => 95,  250 => 93,  245 => 91,  242 => 90,  233 => 86,  230 => 85,  228 => 84,  222 => 81,  218 => 80,  213 => 78,  208 => 76,  205 => 75,  203 => 74,  198 => 71,  195 => 70,  191 => 69,  188 => 68,  186 => 67,  183 => 66,  181 => 65,  178 => 64,  176 => 63,  170 => 60,  166 => 59,  161 => 57,  154 => 53,  138 => 39,  135 => 38,  129 => 37,  125 => 35,  123 => 34,  119 => 32,  117 => 31,  114 => 30,  112 => 29,  105 => 28,  103 => 27,  100 => 26,  96 => 25,  93 => 24,  91 => 23,  75 => 10,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block content %}
    <!-- Home -->

    <!-- Home -->

    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"{{ asset('front/images/blog_background.jpg') }}\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">Mes favoris</div>
        </div>
    </div>

    <!-- Blog -->

    <div class=\"blog\">
        <div class=\"container\">
            <div class=\"row\">

                <!-- Blog Content -->
                                    {% set fa = 'true' %}

{% for b in blogs %}

                                                        {% set test8 = 'true' %}
 {% for blog in b.favoris %}   
  {% if blog.id == app.user.id %}

                                                         {% set fa = 'false' %}
           
                                                    
                                        {% set test8 = 'false' %}

                                               {% endif %}
                                               {% endfor %}
                                                 {% if test8 == 'false' %}
                <div class=\"col-lg-8\">

                    <div class=\"blog_post_container\">

                        <!-- Blog Post -->


                        <!-- Blog Post -->


                        <!-- Blog Post -->

                        <div class=\"blog_post\">
                            <div class=\"blog_post_image\">
                                <img src=\"{{ asset('uploads/images/' ~ b.picture) }}\" alt=\"https://unsplash.com/@stilclassics\">
                            </div>
                        <div class=\"blog_post_meta\">
                                <ul>
                                    <li class=\"blog_post_meta_item\"><a href=\"\"><i class=\"fa fa-user-circle\"> </i> {{b.community.grpName}} </a></li>
        
                                  <li class=\"blog_post_meta_item\"><a href=\"\"><i class=\"fa fa-comment \">Comment</i> {{b.commentArticles|length}} </a></li>
                                        <li class=\"blog_post_meta_item\"><a href=\"\"><i class=\"fa fa-clock-o\"> </i> {{b.DateAjout |date() }}</a></li>
                                    <li class=\"blog_post_meta_item\">

                                    {% set test = 'false' %}

                    {% set test2 = 'false' %}

 {% if is_granted('IS_AUTHENTICATED_FULLY') %}

 {% for blog in b.likes %}
                    {% set test2 = 'true' %}



                                 {% if blog.id == app.user.id %}
                                
                <form action=\"{{ path('remove_like') }}\" method =\"post\">

                                        <input type=\"hidden\" value=\"{{b.id}}\" name=\"id\">

                    {{b.likes|length}}  <button class=\"btn btn-small btn-info\" href=\"#\">  <a class=\"fa fa-thumbs-o-up\"   >  </a> </button>
                    {{b.dislike|length}} <button class=\"btn btn-small btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-down \"  >  </a> </button>

                    </form>
                    {% set test = 'true' %}
                    {% set test2 = 'true' %}


                                   {% endif %}
{% endfor %}

                                 {% if test == \"false\" and test2 == \"true\"  %}   
                 
         <form action=\"{{ path('add_like') }}\" method =\"post\">
                    
                                        <input type=\"hidden\" value=\"{{b.id}}\" name=\"id\">

             {{b.likes|length}}  <button class=\"btn btn-small btn-info\" href=\"#\">   <a class=\"fa fa-thumbs-up \"  >  </a> </button>
             {{b.dislike|length}}<button class=\"btn btn-small btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-o-down \"   > </a></button>
                    </form>
                 {% endif %}
                                                
                                 {% if test2 == \"false\"  %}                    
                      <form action=\"{{ path('add_like') }}\" method =\"post\">
                    
                                        <input type=\"hidden\" value=\"{{b.id}}\" name=\"id\">
                          {{b.likes|length}} <button class=\"btn btn-small btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-up \"   >  </a> </button>
                          {{b.dislike|length}}  <button class=\"btn btn-small btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-down \"  > </a>      </button>               </form>
    {% endif %}

 {% endif %}
                                    </li>
                                    <li class=\"blog_post_meta_item\">
                     {% set test3 = 'false' %}

 {% if is_granted('IS_AUTHENTICATED_FULLY') %}
  {% if b.favoris is null or b.favoris is not defined %}
<form action=\"{{ path('add_favoris') }}\" method =\"post\">
                    
                                        <input type=\"hidden\" value=\"{{b.id}}\" name=\"id\">

    {{b.Favoris|length}}<button class=\"btn btn-small btn-danger\" href=\"#\"><a class=\"fa fa-heart-o \"  > </a>  </button>

                    </form>
   {% endif %}


 {% for blog in b.favoris %}   
  {% if blog.id == app.user.id %}
                                
                                                    <form action=\"{{ path('remove_favoris') }}\" method =\"post\">
                    
                                        <input type=\"hidden\" value=\"{{b.id}}\" name=\"id\">

                                                        {{b.Favoris|length}}    <button class=\"btn btn-small btn-danger\" href=\"#\">   <a class=\"fa fa-heart \"  > </a> </button>

                    </form>
                                        {% set test3 = 'true' %}

                                               {% endif %}
                                               {% endfor %}


 {% if test3 == 'false' %}
                               <form action=\"{{ path('add_favoris') }}\" method =\"post\">
                    
                                        <input type=\"hidden\" value=\"{{b.id}}\" name=\"id\">

                                   {{b.Favoris|length}}  <button class=\"btn btn-small btn-danger\" href=\"#\"><a class=\"fa fa-heart-o \"  > </a>  </button>

                    </form>

 {% endif %}             
                            {% endif %}

            
                                                                                         </li>
                                </ul>
                            </div>
                            <div class=\"blog_post_title\"><a href=\"#\">{{ b.title }}</a></div>
                            <div class=\"blog_post_text\">
                                <p>{{ b.description }}</p>
                            </div>
                            <div class=\"blog_post_title\"><a href=\"#\">Commentaire</a></div>
                           

                            {% for c in b.commentArticles %}

                            <div class=\"blog_post_text\">
                   <p>{{ c.user.username }} : {{ c.contenu }}

                            <form method=\"post\" action=\"{{ path('comment_article_delete', {'id': c.id}) }}\" onsubmit=\"return confirm('Vous voulez supprimer votre commentaire?');\">

                                {% if is_granted('IS_AUTHENTICATED_FULLY') %}

                                 {% if c.user.id == app.user.id %}

                                    <button class=\"btn btn-danger\" href=\"#\">
                                        Delete <a class=\"fa fa-trash-o \"> </a> </button>

    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        <input type=\"hidden\" name=\"idb\" value=\"{{c.blogs.id}}\">

    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ c.id) }}\">
</form>

                                                             {% endif %}
                                                             {% endif %}
                                 </p>

                                              </div>
    

                            {% endfor %}
                                {% if fa == 'true' %}
                                                            <div class=\"blog_post_text\">
                    Aucune favoris    </div>


                                                                                             {% endif %}


      </div>


      </div>
                </div>
                                                                                              {% endif %}


                            {% endfor %}

                <!-- Blog Sidebar -->


            </div>
        </div>
    </div>

    <!-- Footer -->
{% endblock %}
", "frontblog/favoris.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\frontblog\\favoris.html.twig");
    }
}
