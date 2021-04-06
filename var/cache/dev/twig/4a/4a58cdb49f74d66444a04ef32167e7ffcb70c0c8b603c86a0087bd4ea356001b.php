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

/* frontblog/list.html.twig */
class __TwigTemplate_e02e72da0ab91f59d08b13d48ea36bbce375b382d0825efb26efb3994b35f133 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontblog/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontblog/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "frontblog/list.html.twig", 1);
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

    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/blog_background.jpg"), "html", null, true);
        echo "\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">Blogs</div>
        </div>
    </div>
    <!-- Blog -->

    <div class=\"blog\">
        <div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favoris");
        echo "\">Favoris</a></div>
        <div class=\"container\">
            <div class=\"row\">

                <!-- Blog Content -->
";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) || array_key_exists("blogs", $context) ? $context["blogs"] : (function () { throw new RuntimeError('Variable "blogs" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 22
            echo "                <div class=\"col-lg-8\">

                    <div class=\"blog_post_container\">

                        <!-- Blog Post -->


                        <!-- Blog Post -->


                        <!-- Blog Post -->

                        <div class=\"blog_post\">
                            <div class=\"blog_post_image\">
                                <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["b"], "picture", [], "any", false, false, false, 36))), "html", null, true);
            echo "\" alt=\"https://unsplash.com/@stilclassics\">
                            </div>
                        </div>
                        <div class=\"blog_post_meta\">
                        <ul>
                            <li class=\"blog_post_meta_item\"><a href=\"\"><i class=\"fa fa-user-circle\"> </i> ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["b"], "community", [], "any", false, false, false, 41), "grpName", [], "any", false, false, false, 41), "html", null, true);
            echo " </a></li>
                            <li class=\"blog_post_meta_item\"><a href=\"\"><i class=\"fa fa-comment \"> Comment</i> ";
            // line 42
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "commentArticles", [], "any", false, false, false, 42)), "html", null, true);
            echo " </a></li>
                            <li class=\"blog_post_meta_item\"><a href=\"\"><i class=\"fa fa-clock-o\"> </i> ";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "DateAjout", [], "any", false, false, false, 43)), "html", null, true);
            echo "</a></li>
                            <li class=\"blog_post_meta_item\">
                    ";
            // line 45
            $context["test"] = "false";
            // line 46
            echo "
                    ";
            // line 47
            $context["test2"] = "false";
            // line 48
            echo "
 ";
            // line 49
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 50
                echo "
 ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["b"], "likes", [], "any", false, false, false, 51));
                foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                    // line 52
                    echo "                    ";
                    $context["test2"] = "true";
                    // line 53
                    echo "


                                 ";
                    // line 56
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 56), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56)))) {
                        // line 57
                        echo "                                
                                                    <form action=\"";
                        // line 58
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_like");
                        echo "\" method =\"post\">
                    
                                        <input type=\"hidden\" value=\"";
                        // line 60
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 60), "html", null, true);
                        echo "\" name=\"id\">

                                       ";
                        // line 62
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "likes", [], "any", false, false, false, 62)), "html", null, true);
                        echo "   <button class=\"btn btn-small btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-o-up \"   >  </a> </button>
    ";
                        // line 63
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "dislike", [], "any", false, false, false, 63)), "html", null, true);
                        echo "<button class=\"btn btn-small btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-down \"  >  </a> </button>

                    </form>
                    ";
                        // line 66
                        $context["test"] = "true";
                        // line 67
                        echo "                    ";
                        $context["test2"] = "true";
                        // line 68
                        echo "

                                   ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "
                                 ";
                // line 73
                if (((0 === twig_compare((isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 73, $this->source); })()), "false")) && (0 === twig_compare((isset($context["test2"]) || array_key_exists("test2", $context) ? $context["test2"] : (function () { throw new RuntimeError('Variable "test2" does not exist.', 73, $this->source); })()), "true")))) {
                    echo "   
                 
         <form action=\"";
                    // line 75
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_like");
                    echo "\" method =\"post\">
                    
                                        <input type=\"hidden\" value=\"";
                    // line 77
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 77), "html", null, true);
                    echo "\" name=\"id\">

             ";
                    // line 79
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "likes", [], "any", false, false, false, 79)), "html", null, true);
                    echo "   <button class=\"btn btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-up  \"  >  </a> </button>
             ";
                    // line 80
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "dislike", [], "any", false, false, false, 80)), "html", null, true);
                    echo "<button class=\"btn btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-o-down \"   > </a> </button>
                    </form>
                 ";
                }
                // line 83
                echo "                                                
                                 ";
                // line 84
                if ((0 === twig_compare((isset($context["test2"]) || array_key_exists("test2", $context) ? $context["test2"] : (function () { throw new RuntimeError('Variable "test2" does not exist.', 84, $this->source); })()), "false"))) {
                    echo "                    
                      <form action=\"";
                    // line 85
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_like");
                    echo "\" method =\"post\">
                    
                                        <input type=\"hidden\" value=\"";
                    // line 87
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 87), "html", null, true);
                    echo "\" name=\"id\">

 ";
                    // line 89
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "likes", [], "any", false, false, false, 89)), "html", null, true);
                    echo " <button class=\"btn btn-info\" href=\"#\">   <a class=\"fa fa-thumbs-up  \"   > </a> </button>
 ";
                    // line 90
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "dislike", [], "any", false, false, false, 90)), "html", null, true);
                    echo "  <button class=\"btn btn-small btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-down \"  ></a> </button>
                      </form>
    ";
                }
                // line 93
                echo "
 ";
            }
            // line 95
            echo "                            </li>
                            <li class=\"blog_post_meta_item\">
                     ";
            // line 97
            $context["test3"] = "false";
            // line 98
            echo " ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 99
                echo "  ";
                if (((null === twig_get_attribute($this->env, $this->source, $context["b"], "favoris", [], "any", false, false, false, 99)) ||  !twig_get_attribute($this->env, $this->source, $context["b"], "favoris", [], "any", true, true, false, 99))) {
                    // line 100
                    echo "<form action=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_favoris");
                    echo "\" method =\"post\">

                                        <input type=\"hidden\" value=\"";
                    // line 102
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 102), "html", null, true);
                    echo "\" name=\"id\">

    ";
                    // line 104
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "Favoris", [], "any", false, false, false, 104)), "html", null, true);
                    echo "   <button class=\"btn btn-small btn-danger\" href=\"#\"><a class=\"fa fa-heart-o \"  > </a> </button>

                    </form>
   ";
                }
                // line 108
                echo "

 ";
                // line 110
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["b"], "favoris", [], "any", false, false, false, 110));
                foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                    echo "   
  ";
                    // line 111
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 111), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111), "id", [], "any", false, false, false, 111)))) {
                        // line 112
                        echo "                                
 <form action=\"";
                        // line 113
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_favoris");
                        echo "\" method =\"post\">
                    
    <input type=\"hidden\" value=\"";
                        // line 115
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 115), "html", null, true);
                        echo "\" name=\"id\">

     ";
                        // line 117
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "Favoris", [], "any", false, false, false, 117)), "html", null, true);
                        echo "   <button class=\"btn btn-small btn-danger\" href=\"#\"><a class=\"fa fa-heart \"  > </a> </button>

                    </form>
                                        ";
                        // line 120
                        $context["test3"] = "true";
                        // line 121
                        echo "
                                               ";
                    }
                    // line 123
                    echo "                                               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                echo "

 ";
                // line 126
                if ((0 === twig_compare((isset($context["test3"]) || array_key_exists("test3", $context) ? $context["test3"] : (function () { throw new RuntimeError('Variable "test3" does not exist.', 126, $this->source); })()), "false"))) {
                    // line 127
                    echo "                               <form action=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_favoris");
                    echo "\" method =\"post\">
                    
                                        <input type=\"hidden\" value=\"";
                    // line 129
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 129), "html", null, true);
                    echo "\" name=\"id\">

                                   ";
                    // line 131
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "Favoris", [], "any", false, false, false, 131)), "html", null, true);
                    echo "  <button class=\"btn btn-small btn-danger\" href=\"#\"> <a class=\"fa fa-heart-o \"  > </a> </button>

                    </form>

 ";
                }
                // line 136
                echo "                            ";
            }
            // line 137
            echo "

                                                   </li>
                                </ul>
                            </div>
                            <div class=\"blog_post_title\"><a href=\"#\">";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "title", [], "any", false, false, false, 142), "html", null, true);
            echo "</a></div>
                            <div class=\"blog_post_text\">
                                <p>";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "description", [], "any", false, false, false, 144), "html", null, true);
            echo "</p>

                               <a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_showfront", ["id" => twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 146)]), "html", null, true);
            echo "\">Continue reading...</a>
                            </div>
                            <div class=\"blog_post_title\"><a href=\"#\">Commentaire</a></div>
                           

                            ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["b"], "commentArticles", [], "any", false, false, false, 151));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 152
                echo "
                            <div class=\"blog_post_text\">
                                                            <p>";
                // line 154
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "user", [], "any", false, false, false, 154), "username", [], "any", false, false, false, 154), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "contenu", [], "any", false, false, false, 154), "html", null, true);
                echo "
                                <form method=\"post\" action=\"";
                // line 155
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_article_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 155)]), "html", null, true);
                echo "\" onsubmit=\"return confirm('Vous voulez supprimer votre commentaire?');\">
                                    ";
                // line 156
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                    // line 157
                    echo "                                    ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "user", [], "any", false, false, false, 157), "id", [], "any", false, false, false, 157), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "user", [], "any", false, false, false, 157), "id", [], "any", false, false, false, 157)))) {
                        // line 158
                        echo "<button class=\"btn btn-danger\" href=\"#\"> Delete <a class=\"fa fa-trash-o \"> </a> </button>
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        <input type=\"hidden\" name=\"idb\" value=\"";
                        // line 160
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "blogs", [], "any", false, false, false, 160), "id", [], "any", false, false, false, 160), "html", null, true);
                        echo "\">

    <input type=\"hidden\" name=\"_token\" value=\"";
                        // line 162
                        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 162))), "html", null, true);
                        echo "\">
</form>

                                                             ";
                    }
                    // line 166
                    echo "                                                             ";
                }
                // line 167
                echo "                                 </p>

                                  </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "      </div>
                        </div>

      </div>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "
                <!-- Blog Sidebar -->


            </div>
        </div>
    </div>

    <!-- Footer -->

    <!-- Copyright -->

    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontblog/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 177,  435 => 171,  426 => 167,  423 => 166,  416 => 162,  411 => 160,  407 => 158,  404 => 157,  402 => 156,  398 => 155,  392 => 154,  388 => 152,  384 => 151,  376 => 146,  371 => 144,  366 => 142,  359 => 137,  356 => 136,  348 => 131,  343 => 129,  337 => 127,  335 => 126,  331 => 124,  325 => 123,  321 => 121,  319 => 120,  313 => 117,  308 => 115,  303 => 113,  300 => 112,  298 => 111,  292 => 110,  288 => 108,  281 => 104,  276 => 102,  270 => 100,  267 => 99,  264 => 98,  262 => 97,  258 => 95,  254 => 93,  248 => 90,  244 => 89,  239 => 87,  234 => 85,  230 => 84,  227 => 83,  221 => 80,  217 => 79,  212 => 77,  207 => 75,  202 => 73,  199 => 72,  190 => 68,  187 => 67,  185 => 66,  179 => 63,  175 => 62,  170 => 60,  165 => 58,  162 => 57,  160 => 56,  155 => 53,  152 => 52,  148 => 51,  145 => 50,  143 => 49,  140 => 48,  138 => 47,  135 => 46,  133 => 45,  128 => 43,  124 => 42,  120 => 41,  112 => 36,  96 => 22,  92 => 21,  84 => 16,  73 => 8,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block content %}
    <!-- Home -->

    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"{{ asset('front/images/blog_background.jpg') }}\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">Blogs</div>
        </div>
    </div>
    <!-- Blog -->

    <div class=\"blog\">
        <div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"{{ path('favoris') }}\">Favoris</a></div>
        <div class=\"container\">
            <div class=\"row\">

                <!-- Blog Content -->
{% for b in blogs %}
                <div class=\"col-lg-8\">

                    <div class=\"blog_post_container\">

                        <!-- Blog Post -->


                        <!-- Blog Post -->


                        <!-- Blog Post -->

                        <div class=\"blog_post\">
                            <div class=\"blog_post_image\">
                                <img src=\"{{ asset('uploads/images/' ~ b.picture) }}\" alt=\"https://unsplash.com/@stilclassics\">
                            </div>
                        </div>
                        <div class=\"blog_post_meta\">
                        <ul>
                            <li class=\"blog_post_meta_item\"><a href=\"\"><i class=\"fa fa-user-circle\"> </i> {{b.community.grpName}} </a></li>
                            <li class=\"blog_post_meta_item\"><a href=\"\"><i class=\"fa fa-comment \"> Comment</i> {{b.commentArticles|length}} </a></li>
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

                                       {{b.likes|length}}   <button class=\"btn btn-small btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-o-up \"   >  </a> </button>
    {{b.dislike|length}}<button class=\"btn btn-small btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-down \"  >  </a> </button>

                    </form>
                    {% set test = 'true' %}
                    {% set test2 = 'true' %}


                                   {% endif %}
{% endfor %}

                                 {% if test == \"false\" and test2 == \"true\"  %}   
                 
         <form action=\"{{ path('add_like') }}\" method =\"post\">
                    
                                        <input type=\"hidden\" value=\"{{b.id}}\" name=\"id\">

             {{b.likes|length}}   <button class=\"btn btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-up  \"  >  </a> </button>
             {{b.dislike|length}}<button class=\"btn btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-o-down \"   > </a> </button>
                    </form>
                 {% endif %}
                                                
                                 {% if test2 == \"false\"  %}                    
                      <form action=\"{{ path('add_like') }}\" method =\"post\">
                    
                                        <input type=\"hidden\" value=\"{{b.id}}\" name=\"id\">

 {{b.likes|length}} <button class=\"btn btn-info\" href=\"#\">   <a class=\"fa fa-thumbs-up  \"   > </a> </button>
 {{b.dislike|length}}  <button class=\"btn btn-small btn-info\" href=\"#\"> <a class=\"fa fa-thumbs-down \"  ></a> </button>
                      </form>
    {% endif %}

 {% endif %}
                            </li>
                            <li class=\"blog_post_meta_item\">
                     {% set test3 = 'false' %}
 {% if is_granted('IS_AUTHENTICATED_FULLY') %}
  {% if b.favoris is null or b.favoris is not defined %}
<form action=\"{{ path('add_favoris') }}\" method =\"post\">

                                        <input type=\"hidden\" value=\"{{b.id}}\" name=\"id\">

    {{b.Favoris|length}}   <button class=\"btn btn-small btn-danger\" href=\"#\"><a class=\"fa fa-heart-o \"  > </a> </button>

                    </form>
   {% endif %}


 {% for blog in b.favoris %}   
  {% if blog.id == app.user.id %}
                                
 <form action=\"{{ path('remove_favoris') }}\" method =\"post\">
                    
    <input type=\"hidden\" value=\"{{b.id}}\" name=\"id\">

     {{b.Favoris|length}}   <button class=\"btn btn-small btn-danger\" href=\"#\"><a class=\"fa fa-heart \"  > </a> </button>

                    </form>
                                        {% set test3 = 'true' %}

                                               {% endif %}
                                               {% endfor %}


 {% if test3 == 'false' %}
                               <form action=\"{{ path('add_favoris') }}\" method =\"post\">
                    
                                        <input type=\"hidden\" value=\"{{b.id}}\" name=\"id\">

                                   {{b.Favoris|length}}  <button class=\"btn btn-small btn-danger\" href=\"#\"> <a class=\"fa fa-heart-o \"  > </a> </button>

                    </form>

 {% endif %}
                            {% endif %}


                                                   </li>
                                </ul>
                            </div>
                            <div class=\"blog_post_title\"><a href=\"#\">{{ b.title }}</a></div>
                            <div class=\"blog_post_text\">
                                <p>{{ b.description }}</p>

                               <a href=\"{{ path('blog_showfront', { 'id': b.id }) }}\">Continue reading...</a>
                            </div>
                            <div class=\"blog_post_title\"><a href=\"#\">Commentaire</a></div>
                           

                            {% for c in b.commentArticles %}

                            <div class=\"blog_post_text\">
                                                            <p>{{ c.user.username }} : {{ c.contenu }}
                                <form method=\"post\" action=\"{{ path('comment_article_delete', {'id': c.id}) }}\" onsubmit=\"return confirm('Vous voulez supprimer votre commentaire?');\">
                                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                    {% if c.user.id == app.user.id %}
<button class=\"btn btn-danger\" href=\"#\"> Delete <a class=\"fa fa-trash-o \"> </a> </button>
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        <input type=\"hidden\" name=\"idb\" value=\"{{c.blogs.id}}\">

    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ c.id) }}\">
</form>

                                                             {% endif %}
                                                             {% endif %}
                                 </p>

                                  </div>
                            {% endfor %}
      </div>
                        </div>

      </div>

                            {% endfor %}

                <!-- Blog Sidebar -->


            </div>
        </div>
    </div>

    <!-- Footer -->

    <!-- Copyright -->

    
{% endblock %}
", "frontblog/list.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\frontblog\\list.html.twig");
    }
}
