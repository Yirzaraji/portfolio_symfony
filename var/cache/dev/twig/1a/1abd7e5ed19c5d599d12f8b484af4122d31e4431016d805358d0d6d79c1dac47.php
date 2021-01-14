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

/* article.html.twig */
class __TwigTemplate_3ca4466f18823a3ba45520651d1e9977950f7cbacfa65e2e7910b0045210042f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->loadTemplate("NavBarSimple.html.twig", "article.html.twig", 4)->display($context);
        // line 5
        echo "
<div class=\"container-fluid mx-0\">
    <div class=\"row mt-5\">
        <div class=\"col-md-4 text-right\">
            <img src=\"https://picsum.photos/380/300\" class=\"img-fluid\" alt=\"Responsive image\">
        </div>
        <div class=\"col-md-6 bg-white\">
            <div class=\"row\">
                <div class=\"col-md-12 d-flex justify-content-between mt-3\">
                    <div class=\"r\">
                        PROJECT<br>JEUX DE COMBAT
                    </div>
                    <div class=\"e\">
                        <img src=\"https://placehold.it/40/40\" alt=\"\">
                        <img src=\"https://placehold.it/40/40\" alt=\"\">
                        <img src=\"https://placehold.it/40/40\" alt=\"\">
                    </div>   
                </div>
                <div class=\"col-md-12\">
                    Duis non volutpat arcu, eu mollis tellus. Sed 
                    finibus aliquam neque sit amet sodales. Lorem ipsum dolor sit amet, 
                    consectetur adipiscing elit. Nulla maximus pellentes que velit, quis 
                    consequat nulla effi citur at. Maecenas sed massa tristique.Duis non 
                    volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes 
                    que velit, quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis 
                    non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales.
                </div>              
            </div>
        </div>
    </div>
    <div class=\"row mt-5\">
        <div class=\"col-md-6 bg-white\">
            <div class=\"row justify-content-end\">
                <div class=\"col-md-8 pt-3\">
                    CHAPTER ONE<br>
                    JEUX DE COMBAT JS<br>
                    Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. Lorem 
                    ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit, quis 
                    consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu, eu mollis
                    tellus. Sed finibus aliquam neque sit amet sodales. Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Nulla maximus pellentes que velit, quis consequat nulla effi citur at. 
                    Maecenas sed massa tristique.Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam 
                    neque sit amet sodales.
                </div>
            </div>
        </div>
        <div class=\"col-md-4 bg-white\">
            <img src=\"https://picsum.photos/680/500\" class=\"img-fluid\" alt=\"Responsive image\">
        </div>
    </div>
    <div class=\"row justify-content-end\">
        <div class=\"col-md-4 text-right bg-secondary\">
            <img src=\"https://picsum.photos/680/500\" class=\"img-fluid\" alt=\"Responsive image\">
        </div>
        <div class=\"col-md-6 pt-3 bg-white\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    CHAPTER ONE<br>
                    JEUX DE COMBAT JS<br>
                    Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. Lorem 
                    ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit, quis 
                    consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu, eu mollis
                    tellus. Sed finibus aliquam neque sit amet sodales. Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Nulla maximus pellentes que velit, quis consequat nulla effi citur at. 
                    Maecenas sed massa tristique.Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam 
                    neque sit amet sodales.
                </div>
            </div>
        </div>  
    </div>
</div>
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-12 mt-5\">
        <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/swbattle.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Responsive image\">
        </div>
    </div>
</div>

";
        // line 85
        $this->loadTemplate("contact.html.twig", "article.html.twig", 85)->display($context);
        // line 86
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "
<script>
console.log('copuiiu')
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 92,  171 => 91,  158 => 86,  156 => 85,  148 => 80,  71 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
{% include 'NavBarSimple.html.twig' %}

<div class=\"container-fluid mx-0\">
    <div class=\"row mt-5\">
        <div class=\"col-md-4 text-right\">
            <img src=\"https://picsum.photos/380/300\" class=\"img-fluid\" alt=\"Responsive image\">
        </div>
        <div class=\"col-md-6 bg-white\">
            <div class=\"row\">
                <div class=\"col-md-12 d-flex justify-content-between mt-3\">
                    <div class=\"r\">
                        PROJECT<br>JEUX DE COMBAT
                    </div>
                    <div class=\"e\">
                        <img src=\"https://placehold.it/40/40\" alt=\"\">
                        <img src=\"https://placehold.it/40/40\" alt=\"\">
                        <img src=\"https://placehold.it/40/40\" alt=\"\">
                    </div>   
                </div>
                <div class=\"col-md-12\">
                    Duis non volutpat arcu, eu mollis tellus. Sed 
                    finibus aliquam neque sit amet sodales. Lorem ipsum dolor sit amet, 
                    consectetur adipiscing elit. Nulla maximus pellentes que velit, quis 
                    consequat nulla effi citur at. Maecenas sed massa tristique.Duis non 
                    volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes 
                    que velit, quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis 
                    non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales.
                </div>              
            </div>
        </div>
    </div>
    <div class=\"row mt-5\">
        <div class=\"col-md-6 bg-white\">
            <div class=\"row justify-content-end\">
                <div class=\"col-md-8 pt-3\">
                    CHAPTER ONE<br>
                    JEUX DE COMBAT JS<br>
                    Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. Lorem 
                    ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit, quis 
                    consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu, eu mollis
                    tellus. Sed finibus aliquam neque sit amet sodales. Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Nulla maximus pellentes que velit, quis consequat nulla effi citur at. 
                    Maecenas sed massa tristique.Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam 
                    neque sit amet sodales.
                </div>
            </div>
        </div>
        <div class=\"col-md-4 bg-white\">
            <img src=\"https://picsum.photos/680/500\" class=\"img-fluid\" alt=\"Responsive image\">
        </div>
    </div>
    <div class=\"row justify-content-end\">
        <div class=\"col-md-4 text-right bg-secondary\">
            <img src=\"https://picsum.photos/680/500\" class=\"img-fluid\" alt=\"Responsive image\">
        </div>
        <div class=\"col-md-6 pt-3 bg-white\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    CHAPTER ONE<br>
                    JEUX DE COMBAT JS<br>
                    Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. Lorem 
                    ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit, quis 
                    consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu, eu mollis
                    tellus. Sed finibus aliquam neque sit amet sodales. Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Nulla maximus pellentes que velit, quis consequat nulla effi citur at. 
                    Maecenas sed massa tristique.Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam 
                    neque sit amet sodales.
                </div>
            </div>
        </div>  
    </div>
</div>
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-12 mt-5\">
        <img src=\"{{ asset('images/swbattle.png') }}\" class=\"img-fluid\" alt=\"Responsive image\">
        </div>
    </div>
</div>

{% include 'contact.html.twig' %}



{% endblock %}

{% block javascripts %}

<script>
console.log('copuiiu')
</script>

{% endblock %}", "article.html.twig", "B:\\dev stuff\\portfolio_symfony\\templates\\article.html.twig");
    }
}
