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

/* home.html.twig */
class __TwigTemplate_fd4f2315ca597df06f3a0eae03a52b97cc4d61052392257dd01ce64ba0d21371 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $this->loadTemplate("NavBar.html.twig", "home.html.twig", 5)->display($context);
        // line 6
        $this->loadTemplate("banner.html.twig", "home.html.twig", 6)->display($context);
        // line 7
        echo "
<div class=\"container-fluid blockiDO pb-5 pt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-4 text-center color titleColor mt-3 mb-5\">
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rosace.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:25%\" class=\"mb-2\">
            <h4><b>CE QUE JE</b> SAIS FAIRE...</h4>
        </div>
    </div>
    <div class=\"row text-center justify-content-center\">
        <div class=\"col-md-3 tripleCard mr-2\">
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo_print.png"), "html", null, true);
        echo "\" alt=\"\" class=\"mb-4\" style=\"width:21%\"></br>
            <span class=\"triplecard_txt\">PRINT</span></br>
            <p class=\"mt-1\">
                elementum, quis finibus nulla facilisis.</br> 
                Sed eleifend quis turpis id euismod. Morbi.
            </p>
        </div>
        <div class=\"col-md-3 tripleCard mr-2\">
            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo_dev.png"), "html", null, true);
        echo "\" alt=\"\" class=\"mb-4\" style=\"width:21%\"></br>
            <span class=\"triplecard_txt\">DEV</span></br>
            <p class=\"mt-1\">
                elementum, quis finibus nulla facilisis.</br> 
                Sed eleifend quis turpis id euismod. Morbi.
            </p>
        </div>
        <div class=\"col-md-3 tripleCard mr-2\">
        <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo_design.png"), "html", null, true);
        echo "\" alt=\"\" class=\"mb-4\" style=\"width:21%\"></br>
            <span class=\"triplecard_txt\">DESIGN</span></br>
            <p class=\"mt-1\">
                elementum, quis finibus nulla facilisis.</br> 
                Sed eleifend quis turpis id euismod. Morbi.
            </p>
        </div>
    </div>
</div>

<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-12 aboutBlock\">
            <div class=\"row\">
                <div class=\"col-md-5 d-flex justify-content-end\">
                    <img src=\"https://picsum.photos/225/225\" class=\"img-fluid\" alt=\"\">
                </div>
                <div class=\"col-md-5 d-flex align-items-center\">
                ABOUT ME...<br>
                Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que 
                velit, quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat 
                arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales.
                </div>      
            </div>
        </div>
    </div>
</div>

<div class=\"container-fluid pb-5 pt-5\">
    <div class=\"row\">
        <div class=\"col-md-12 text-center color titleColor mt-3\">
            <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rosace.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:8.5%\" class=\"mb-2\">
            <h4 class=\"titlecolor\"><b>QUELQUES</b> PROJET...</h4>
            <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/trait.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:14%\" class=\"mb-2\">
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12 text-center color titleColor mt-3 mb-5\">
            <span class=\"filterSpan\">PRINT</span> <span class=\"filterSpan\">DEV</span> <span class=\"filterSpan\">DESIGN</span>
        </div>
    </div>
    <div class=\"row text-center justify-content-center mb-2\">
        <div class=\"col-md-3 projectCard\">
            <img src=\"https://picsum.photos/325/325\" alt=\"\">
        </div>
        <div class=\"col-md-3 projectCard mb-2\">
            <img src=\"https://picsum.photos/325/325\" alt=\"\">
        </div>
        <div class=\"col-md-3 projectCard mb-2\">
            <img src=\"https://picsum.photos/325/325\" alt=\"\">
        </div>
    </div>
    <div class=\"row text-center justify-content-center\">
        <div class=\"col-md-3 projectCard\">
            <img src=\"https://picsum.photos/325/325\" alt=\"\">
        </div>
        <div class=\"col-md-3 projectCard\">
            <img src=\"https://picsum.photos/325/325\" alt=\"\">
        </div>
        <div class=\"col-md-3 projectCard\">
            <img src=\"https://picsum.photos/325/325\" alt=\"\">
        </div>
    </div>
    
</div>

<div class=\"container-fluid pb-5 pt-5\">
    <div class=\"row justify-content-center blocExp\">
        <div class=\"col-md-3 color mt-5 mb-5\">
            <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rosaceb_blanc.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:22%\">
            <h4><b>EXPERIENCES</b><br> PROFESSIONNELLES...</h4>
        </div>
        <div class=\"col-md-6 line_left mt-5 mb-5\">
        <p><b>DEVELOPPEUR PHP | SYMFONY<br>
        <span class=\"redfont\">DIGEAT</span></b><br>
        MARS 2020</p>
       
        <p>Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. Duis non 
        volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales.<br>
        </p><p>Duis non volutpat arcu, eu mollis tellus.<br>
        Quis consequat nulla effi citur at.<br>
        Sed finibus aliquam neque sit.</p>

        <p><b>WEB DESIGNER<br>
        <span class=\"redfont\">METHODE ANCESTRALE</span></b><br>
        AVRIL 2014</p>

        <p>Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit, <br>
        </p><p>quis consequat nulla effi citur at.<br>
        Duis non volutpat arcu, eu mollis tellus.<br>
        Quis consequat nulla effi citur at<br>
        Sed finibus aliquam neque sit.</p>
        </div>
    </div>
   
         <div class=\"row justify-content-center blocDip\">
        <div class=\"col-md-3 color mt-5 mb-5\">
            <img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rosace.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:22%\">
            <h4 class=\"gradientPurpleFont titleh4\"><b>DIPLOMES &</b><br> CERTIFICATIONS...</h4>
        </div>
        <div class=\"col-md-6 line_leftBlack mt-5 mb-5\">
        <p><b>CONCEPTEUR DEVELOPPEUR D'APPLICATION Bac +4<br>
        <span class=\"gradientPurpleFont\">OPEN CLASS ROOMS</span></b><br>
        2020</p>
       
        <p>Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit, 
        quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu, 
        eu mollis tellus. Sed finibus aliquam neque sit amet sodales.</p>

        <p><b>DEVELOPPEUR WEB Bac +2<br>
        <span class=\"gradientPurpleFont\">SIMPLON.CO</span></b><br>
        2020</p>
       
        <p>Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit, 
        quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu, 
        eu mollis tellus. Sed finibus aliquam neque sit amet sodales.</p>

        <p><b>DESIGNER GRAPHIQUE<br>
        <span class=\"gradientPurpleFont\">IDEM CREATIVE ARTS SCHOOL</span></b><br>
        2014</p>

        <p>Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit, 
        quis consequat nulla effi citur at. Maecenas sed massa</p>
        </div>
    </div>
</div>

<div class=\"container-fluid pb-5 pt-5\">
    <div class=\"row\">
        <div class=\"col-md-12 text-center color titleColor mt-3\">
            <img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rosace.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:8.5%\" class=\"mb-2\">
            <h4 class=\"titlecolor\"><b>QUELQUES</b> TECHNOS...</h4>
            <img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/trait.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:14%\" class=\"mb-2\">
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12 text-center color titleColor mt-3 mb-5\">
            <span class=\"filterSpan\">BACK</span> 
            <span class=\"filterSpan\">CONCEPTION</span>
            <span class=\"filterSpan\">FRONT</span> 
        </div>
    </div>
    <div class=\"row text-center justify-content-center mb-2\">
        <div class=\"col-md-3 projectCard\">
            <img src=\"https://picsum.photos/325/325\" alt=\"\">
        </div>
        <div class=\"col-md-3 projectCard mb-2\">
            <img src=\"https://picsum.photos/325/325\" alt=\"\">
        </div>
        <div class=\"col-md-3 projectCard mb-2\">
            <img src=\"https://picsum.photos/325/325\" alt=\"\">
        </div>
    </div>
    <div class=\"row text-center justify-content-center\">
        <div class=\"col-md-3 projectCard\">
            <img src=\"https://picsum.photos/325/325\" alt=\"\">
        </div>
        <div class=\"col-md-3 projectCard\">
            <img src=\"https://picsum.photos/325/325\" alt=\"\">
        </div>
        <div class=\"col-md-3 projectCard\">
            <img src=\"https://picsum.photos/325/325\" alt=\"\">
        </div>
    </div>
</div>



";
        // line 206
        $this->loadTemplate("contact.html.twig", "home.html.twig", 206)->display($context);
        // line 207
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 210
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 211
        echo "
<script>
console.log('copuiiu')
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 211,  305 => 210,  297 => 207,  295 => 206,  256 => 170,  251 => 168,  212 => 132,  180 => 103,  141 => 67,  136 => 65,  101 => 33,  90 => 25,  79 => 17,  70 => 11,  64 => 7,  62 => 6,  60 => 5,  53 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
{% include 'NavBar.html.twig' %}
{% include 'banner.html.twig' %}

<div class=\"container-fluid blockiDO pb-5 pt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-4 text-center color titleColor mt-3 mb-5\">
            <img src=\"{{ asset('images/rosace.png') }}\" alt=\"\" style=\"width:25%\" class=\"mb-2\">
            <h4><b>CE QUE JE</b> SAIS FAIRE...</h4>
        </div>
    </div>
    <div class=\"row text-center justify-content-center\">
        <div class=\"col-md-3 tripleCard mr-2\">
            <img src=\"{{ asset('images/logo_print.png') }}\" alt=\"\" class=\"mb-4\" style=\"width:21%\"></br>
            <span class=\"triplecard_txt\">PRINT</span></br>
            <p class=\"mt-1\">
                elementum, quis finibus nulla facilisis.</br> 
                Sed eleifend quis turpis id euismod. Morbi.
            </p>
        </div>
        <div class=\"col-md-3 tripleCard mr-2\">
            <img src=\"{{ asset('images/logo_dev.png') }}\" alt=\"\" class=\"mb-4\" style=\"width:21%\"></br>
            <span class=\"triplecard_txt\">DEV</span></br>
            <p class=\"mt-1\">
                elementum, quis finibus nulla facilisis.</br> 
                Sed eleifend quis turpis id euismod. Morbi.
            </p>
        </div>
        <div class=\"col-md-3 tripleCard mr-2\">
        <img src=\"{{ asset('images/logo_design.png') }}\" alt=\"\" class=\"mb-4\" style=\"width:21%\"></br>
            <span class=\"triplecard_txt\">DESIGN</span></br>
            <p class=\"mt-1\">
                elementum, quis finibus nulla facilisis.</br> 
                Sed eleifend quis turpis id euismod. Morbi.
            </p>
        </div>
    </div>
</div>

<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-12 aboutBlock\">
            <div class=\"row\">
                <div class=\"col-md-5 d-flex justify-content-end\">
                    <img src=\"https://picsum.photos/225/225\" class=\"img-fluid\" alt=\"\">
                </div>
                <div class=\"col-md-5 d-flex align-items-center\">
                ABOUT ME...<br>
                Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que 
                velit, quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat 
                arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales.
                </div>      
            </div>
        </div>
    </div>
</div>

<div class=\"container-fluid pb-5 pt-5\">
    <div class=\"row\">
        <div class=\"col-md-12 text-center color titleColor mt-3\">
            <img src=\"{{ asset('images/rosace.png') }}\" alt=\"\" style=\"width:8.5%\" class=\"mb-2\">
            <h4 class=\"titlecolor\"><b>QUELQUES</b> PROJET...</h4>
            <img src=\"{{ asset('images/trait.png') }}\" alt=\"\" style=\"width:14%\" class=\"mb-2\">
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12 text-center color titleColor mt-3 mb-5\">
            <span class=\"filterSpan\">PRINT</span> <span class=\"filterSpan\">DEV</span> <span class=\"filterSpan\">DESIGN</span>
        </div>
    </div>
    <div class=\"row text-center justify-content-center mb-2\">
        <div class=\"col-md-3 projectCard\">
            <img src=\"https://picsum.photos/325/325\" alt=\"\">
        </div>
        <div class=\"col-md-3 projectCard mb-2\">
            <img src=\"https://picsum.photos/325/325\" alt=\"\">
        </div>
        <div class=\"col-md-3 projectCard mb-2\">
            <img src=\"https://picsum.photos/325/325\" alt=\"\">
        </div>
    </div>
    <div class=\"row text-center justify-content-center\">
        <div class=\"col-md-3 projectCard\">
            <img src=\"https://picsum.photos/325/325\" alt=\"\">
        </div>
        <div class=\"col-md-3 projectCard\">
            <img src=\"https://picsum.photos/325/325\" alt=\"\">
        </div>
        <div class=\"col-md-3 projectCard\">
            <img src=\"https://picsum.photos/325/325\" alt=\"\">
        </div>
    </div>
    
</div>

<div class=\"container-fluid pb-5 pt-5\">
    <div class=\"row justify-content-center blocExp\">
        <div class=\"col-md-3 color mt-5 mb-5\">
            <img src=\"{{ asset('images/rosaceb_blanc.png') }}\" alt=\"\" style=\"width:22%\">
            <h4><b>EXPERIENCES</b><br> PROFESSIONNELLES...</h4>
        </div>
        <div class=\"col-md-6 line_left mt-5 mb-5\">
        <p><b>DEVELOPPEUR PHP | SYMFONY<br>
        <span class=\"redfont\">DIGEAT</span></b><br>
        MARS 2020</p>
       
        <p>Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. Duis non 
        volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales.<br>
        </p><p>Duis non volutpat arcu, eu mollis tellus.<br>
        Quis consequat nulla effi citur at.<br>
        Sed finibus aliquam neque sit.</p>

        <p><b>WEB DESIGNER<br>
        <span class=\"redfont\">METHODE ANCESTRALE</span></b><br>
        AVRIL 2014</p>

        <p>Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit, <br>
        </p><p>quis consequat nulla effi citur at.<br>
        Duis non volutpat arcu, eu mollis tellus.<br>
        Quis consequat nulla effi citur at<br>
        Sed finibus aliquam neque sit.</p>
        </div>
    </div>
   
         <div class=\"row justify-content-center blocDip\">
        <div class=\"col-md-3 color mt-5 mb-5\">
            <img src=\"{{ asset('images/rosace.png') }}\" alt=\"\" style=\"width:22%\">
            <h4 class=\"gradientPurpleFont titleh4\"><b>DIPLOMES &</b><br> CERTIFICATIONS...</h4>
        </div>
        <div class=\"col-md-6 line_leftBlack mt-5 mb-5\">
        <p><b>CONCEPTEUR DEVELOPPEUR D'APPLICATION Bac +4<br>
        <span class=\"gradientPurpleFont\">OPEN CLASS ROOMS</span></b><br>
        2020</p>
       
        <p>Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit, 
        quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu, 
        eu mollis tellus. Sed finibus aliquam neque sit amet sodales.</p>

        <p><b>DEVELOPPEUR WEB Bac +2<br>
        <span class=\"gradientPurpleFont\">SIMPLON.CO</span></b><br>
        2020</p>
       
        <p>Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit, 
        quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu, 
        eu mollis tellus. Sed finibus aliquam neque sit amet sodales.</p>

        <p><b>DESIGNER GRAPHIQUE<br>
        <span class=\"gradientPurpleFont\">IDEM CREATIVE ARTS SCHOOL</span></b><br>
        2014</p>

        <p>Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit, 
        quis consequat nulla effi citur at. Maecenas sed massa</p>
        </div>
    </div>
</div>

<div class=\"container-fluid pb-5 pt-5\">
    <div class=\"row\">
        <div class=\"col-md-12 text-center color titleColor mt-3\">
            <img src=\"{{ asset('images/rosace.png') }}\" alt=\"\" style=\"width:8.5%\" class=\"mb-2\">
            <h4 class=\"titlecolor\"><b>QUELQUES</b> TECHNOS...</h4>
            <img src=\"{{ asset('images/trait.png') }}\" alt=\"\" style=\"width:14%\" class=\"mb-2\">
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12 text-center color titleColor mt-3 mb-5\">
            <span class=\"filterSpan\">BACK</span> 
            <span class=\"filterSpan\">CONCEPTION</span>
            <span class=\"filterSpan\">FRONT</span> 
        </div>
    </div>
    <div class=\"row text-center justify-content-center mb-2\">
        <div class=\"col-md-3 projectCard\">
            <img src=\"https://picsum.photos/325/325\" alt=\"\">
        </div>
        <div class=\"col-md-3 projectCard mb-2\">
            <img src=\"https://picsum.photos/325/325\" alt=\"\">
        </div>
        <div class=\"col-md-3 projectCard mb-2\">
            <img src=\"https://picsum.photos/325/325\" alt=\"\">
        </div>
    </div>
    <div class=\"row text-center justify-content-center\">
        <div class=\"col-md-3 projectCard\">
            <img src=\"https://picsum.photos/325/325\" alt=\"\">
        </div>
        <div class=\"col-md-3 projectCard\">
            <img src=\"https://picsum.photos/325/325\" alt=\"\">
        </div>
        <div class=\"col-md-3 projectCard\">
            <img src=\"https://picsum.photos/325/325\" alt=\"\">
        </div>
    </div>
</div>



{% include 'contact.html.twig' %}

{% endblock %}

{% block javascripts %}

<script>
console.log('copuiiu')
</script>

{% endblock %}", "home.html.twig", "B:\\dev stuff\\portfolio_symfony\\templates\\home.html.twig");
    }
}
