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

/* admin/backoffice.html.twig */
class __TwigTemplate_91167cd04ffa5f267a2a31c3234d68bbd37e0726fe8230915187a754dd72e3c2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/backoffice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/backoffice.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/backoffice.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello AdminController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6)) {
            // line 7
            $this->loadTemplate("navBarSimple.html.twig", "admin/backoffice.html.twig", 7)->display($context);
            // line 8
            echo "<div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-12 text-center mt-5 mb-5\">
                <h1 class=\"titleColor mb-5\"> <i class=\"fas fa-user-shield\"></i><br>
                Bienvenue <b>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "login", [], "any", false, false, false, 12), "html", null, true);
            echo "</b></h1>
                <p>
                <table class=\"table table-striped\">
                    <thead class=\"table-dark\">
                        <tr>
                            <th scope=\"col\">ID</th>
                            <th scope=\"col\">Title</th>
                            <th scope=\"col\">Technos</th>
                            <th scope=\"col\">Project_Image</th>
                            <th scope=\"col\">Description</th>
                            <th scope=\"col\">Categorie</th>
                            <th scope=\"col\">Demo Lien</th>
                            <th scope=\"col\">Github Lien</th>
                            <th scope=\"col\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 30
                echo "                        <tr>
                            <th scope=\"row\">";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 31), "html", null, true);
                echo "</th>
                            <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
                            <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "technos", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                            <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "projectImage", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                            <td>Vide</td>
                            <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "categorie", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                            <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "lien", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
                            <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "git", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
                            <td>
                                <button type=\"button\" class=\"btn-primary  font-weight-bold\">
                                <i class=\"fab fa-readme\"></i></button> 
                                <button type=\"button\" class=\"btn-warning font-weight-bold\">
                                <i class=\"far fa-edit\"></i></button> 
                                <button type=\"button\" class=\"btn-danger font-weight-bold\">
                                <i class=\"far fa-trash-alt\"></i></button>
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                    </tbody>
                </table>
                ";
            // line 51
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 51, $this->source); })()));
            echo "
                </p>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-md-4 light text-center mt-3 mb-5\">
                ";
            // line 59
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["createPostForm"]) || array_key_exists("createPostForm", $context) ? $context["createPostForm"] : (function () { throw new RuntimeError('Variable "createPostForm" does not exist.', 59, $this->source); })()), 'form_start');
            echo "
                    <h3 class=\"mb-4 titleColor\"><b><i class=\"fas fa-edit\"></i> CREER UN POST.</b></h3>
                    <div class=\"row mb-1\">
                        ";
            // line 63
            echo "                        <div class=\"col\">
                            ";
            // line 64
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["createPostForm"]) || array_key_exists("createPostForm", $context) ? $context["createPostForm"] : (function () { throw new RuntimeError('Variable "createPostForm" does not exist.', 64, $this->source); })()), "title", [], "any", false, false, false, 64), 'row');
            echo "
                        </div>
                        <div class=\"col-md-12\">
                            ";
            // line 67
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["createPostForm"]) || array_key_exists("createPostForm", $context) ? $context["createPostForm"] : (function () { throw new RuntimeError('Variable "createPostForm" does not exist.', 67, $this->source); })()), "technos", [], "any", false, false, false, 67), 'row');
            echo "
                        </div>
                    </div>
                    <div class=\"row mb-1\">
                        <div class=\"col\">
                            ";
            // line 72
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["createPostForm"]) || array_key_exists("createPostForm", $context) ? $context["createPostForm"] : (function () { throw new RuntimeError('Variable "createPostForm" does not exist.', 72, $this->source); })()), "lien", [], "any", false, false, false, 72), 'row');
            echo "
                        </div>
                    </div>
                    <div class=\"row mb-1\">
                        <div class=\"col\">
                            ";
            // line 77
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["createPostForm"]) || array_key_exists("createPostForm", $context) ? $context["createPostForm"] : (function () { throw new RuntimeError('Variable "createPostForm" does not exist.', 77, $this->source); })()), "git", [], "any", false, false, false, 77), 'row');
            echo "
                        </div>
                    </div>
                ";
            // line 80
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["createPostForm"]) || array_key_exists("createPostForm", $context) ? $context["createPostForm"] : (function () { throw new RuntimeError('Variable "createPostForm" does not exist.', 80, $this->source); })()), 'form_end');
            echo "
            </div>
        </div>
    </div>
";
        } else {
            // line 85
            echo "
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/backoffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 85,  219 => 80,  213 => 77,  205 => 72,  197 => 67,  191 => 64,  188 => 63,  182 => 59,  171 => 51,  167 => 49,  150 => 38,  146 => 37,  142 => 36,  137 => 34,  133 => 33,  129 => 32,  125 => 31,  122 => 30,  118 => 29,  98 => 12,  92 => 8,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AdminController!{% endblock %}

{% block body %}
{% if app.user %}
{% include 'navBarSimple.html.twig' %}
<div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-12 text-center mt-5 mb-5\">
                <h1 class=\"titleColor mb-5\"> <i class=\"fas fa-user-shield\"></i><br>
                Bienvenue <b>{{ app.user.login }}</b></h1>
                <p>
                <table class=\"table table-striped\">
                    <thead class=\"table-dark\">
                        <tr>
                            <th scope=\"col\">ID</th>
                            <th scope=\"col\">Title</th>
                            <th scope=\"col\">Technos</th>
                            <th scope=\"col\">Project_Image</th>
                            <th scope=\"col\">Description</th>
                            <th scope=\"col\">Categorie</th>
                            <th scope=\"col\">Demo Lien</th>
                            <th scope=\"col\">Github Lien</th>
                            <th scope=\"col\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for post in posts %}
                        <tr>
                            <th scope=\"row\">{{post.id}}</th>
                            <td>{{post.title}}</td>
                            <td>{{post.technos}}</td>
                            <td>{{post.projectImage}}</td>
                            <td>Vide</td>
                            <td>{{post.categorie}}</td>
                            <td>{{post.lien}}</td>
                            <td>{{post.git}}</td>
                            <td>
                                <button type=\"button\" class=\"btn-primary  font-weight-bold\">
                                <i class=\"fab fa-readme\"></i></button> 
                                <button type=\"button\" class=\"btn-warning font-weight-bold\">
                                <i class=\"far fa-edit\"></i></button> 
                                <button type=\"button\" class=\"btn-danger font-weight-bold\">
                                <i class=\"far fa-trash-alt\"></i></button>
                            </td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
                {{knp_pagination_render(posts)}}
                </p>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-md-4 light text-center mt-3 mb-5\">
                {{form_start(createPostForm)}}
                    <h3 class=\"mb-4 titleColor\"><b><i class=\"fas fa-edit\"></i> CREER UN POST.</b></h3>
                    <div class=\"row mb-1\">
                        {# {{form_widget(createPostForm)}} #}
                        <div class=\"col\">
                            {{ form_row(createPostForm.title)}}
                        </div>
                        <div class=\"col-md-12\">
                            {{ form_row(createPostForm.technos)}}
                        </div>
                    </div>
                    <div class=\"row mb-1\">
                        <div class=\"col\">
                            {{ form_row(createPostForm.lien)}}
                        </div>
                    </div>
                    <div class=\"row mb-1\">
                        <div class=\"col\">
                            {{ form_row(createPostForm.git)}}
                        </div>
                    </div>
                {{form_end(createPostForm)}}
            </div>
        </div>
    </div>
{% else %}

{% endif %}
{% endblock %}
", "admin/backoffice.html.twig", "B:\\dev stuff\\portfolio_symfony\\templates\\admin\\backoffice.html.twig");
    }
}
