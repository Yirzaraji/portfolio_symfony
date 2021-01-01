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

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 6
        echo "<div class=\"container-fluid banner\">
    <div class=\"row text-center\">
        <div class=\"col-sm-5 col-md-5 blockBanner01 pb-3\">
            <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logoround.png"), "html", null, true);
        echo "\" 
            alt=\"banner\" style=\"width:40%\" class=\"img-responsive img-center\">
            <p>DEVELOPPEUR</p>
            <p><span>&#60;?PHP créatif ?&#62;</span></p> 
            <p><span>Remi Larrauri</span><br>
            <span>06.29.61.53.66</span></p>
            <button class=\"btn btnrounded btn-info mb-5\">CV</button><br>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-4\">
                </div>
                <div class=\"col-md-4\">
                    <a href=\"https://www.linkedin.com/in/rl-dev/\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo_linkedin.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:23%\"></a>        
                    <a href=\"#ankor_contact\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo_contact.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:23%\"></a> 
                    <a href=\"https://github.com/Yirzaraji\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo_git.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:23%\"></a> 
                </div> 
                <div class=\"col-md-4\">
                </div>       
            </div>
        </div>
        <div class=\"col-sm-7 col-md-7 bannerLowpolyImg\">
            <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/lowpoly_banner.jpg"), "html", null, true);
        echo "\" 
            alt=\"banner\" class=\"w-100 h-100 img-responsive cover\">
        </div>
    </div>
</div>

<div class=\"container-fluid blockiDO pb-5 pt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-4 text-center color titleColor mt-3 mb-5\">
            <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rosace.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:25%\" class=\"mb-2\">
            <h4><b>CE QUE JE</b> SAIS FAIRE...</h4>
        </div>
    </div>
    <div class=\"row text-center justify-content-center\">
        <div class=\"col-md-3 tripleCard mr-2\">
            <img src=\"";
        // line 44
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
        // line 52
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
        // line 60
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

<div class=\"container-fluid pb-5 pt-5\">
    <div class=\"row\">
        <div class=\"col-md-12 text-center color titleColor mt-3\">
            <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rosace.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:8.5%\" class=\"mb-2\">
            <h4 class=\"titlecolor\"><b>QUELQUES</b> PROJET...</h4>
            <img src=\"";
        // line 75
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
        // line 111
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
        // line 140
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
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rosace.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:8.5%\" class=\"mb-2\">
            <h4 class=\"titlecolor\"><b>QUELQUES</b> TECHNOS...</h4>
            <img src=\"";
        // line 178
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

<div class=\"container-fluid\">
    <div class=\"row blocContact justify-content-center\" id=\"ankor_contact\">
        <div class=\"col-md-4 text-center color titleColor  mr-5\">
        <img src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/iconrocket.png"), "html", null, true);
        echo "\" 
            alt=\"banner\" class=\"w-100 img-responsive\">
        </div>
        <div class=\"col-md-4 text-center d-flex align-items-center color titleColor mt-3 mb-5\">
            <form action=\"\">
               <h3>CONTACTEZ MOI.</h3>
                <div class=\"row mb-4\">
                    <div class=\"col\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"First name\">
                    </div>
                    <div class=\"col\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Last name\">
                    </div>
                </div>
                <div class=\"row mb-4\">
                    <div class=\"col\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Mail\">
                    </div>
                </div>
                <div class=\"row mb-4\">
                    <div class=\"col\">
                        <textarea class=\"form-control\" rows=\"8\" aria-label=\"With textarea\" placeholder=\"Message\"></textarea>
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">ENVOYER</button>
            </form>
        </div>
    </div>
</div>

<div class=\"container-fluid pb-5 pt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-2 footerCard\"></div>
        <div class=\"col-md-2 footerCard\">
            <b>PANDEMONIUM</b></br>
            elementum</br>
            finibus </br>
            nulla facilisis.</br>
            Sed eleifend</br>
        </div>
        <div class=\"col-md-2 footerCard\">
            <b>PANDEMONIUM</b></br>
            elementum</br>
            finibus </br>
            nulla facilisis.</br>
            Sed eleifend</br>
        </div>
        <div class=\"col-md-2 footerCard\">
            <b>PANDEMONIUM</b></br>
            elementum</br>
            finibus </br>
            nulla facilisis.</br>
            Sed eleifend</br>
        </div>
        <div class=\"col-md-2 footerCard\">
            <b>PANDEMONIUM</b></br>
            elementum</br>
            finibus </br>
            nulla facilisis.</br>
            Sed eleifend</br>
        </div>
        <div class=\"col-md-2 footerCard\"></div>
    </div>
</div>

<div class=\"container-fluid\">
    <div class=\"row text-center justify-content-center\">
        <div class=\"col-md-12 footerBlock mr-2 mb-2\">Copyright ©2020 | Yirzaraji | All rights reserved</div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 288
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 289
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
        return array (  405 => 289,  398 => 288,  319 => 215,  279 => 178,  274 => 176,  235 => 140,  203 => 111,  164 => 75,  159 => 73,  143 => 60,  132 => 52,  121 => 44,  112 => 38,  100 => 29,  90 => 22,  86 => 21,  82 => 20,  68 => 9,  63 => 6,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

{# ========== BANNER BLOC ============ #}
<div class=\"container-fluid banner\">
    <div class=\"row text-center\">
        <div class=\"col-sm-5 col-md-5 blockBanner01 pb-3\">
            <img src=\"{{ asset('images/logoround.png') }}\" 
            alt=\"banner\" style=\"width:40%\" class=\"img-responsive img-center\">
            <p>DEVELOPPEUR</p>
            <p><span>&#60;?PHP créatif ?&#62;</span></p> 
            <p><span>Remi Larrauri</span><br>
            <span>06.29.61.53.66</span></p>
            <button class=\"btn btnrounded btn-info mb-5\">CV</button><br>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-4\">
                </div>
                <div class=\"col-md-4\">
                    <a href=\"https://www.linkedin.com/in/rl-dev/\"><img src=\"{{ asset('images/logo_linkedin.png') }}\" alt=\"\" style=\"width:23%\"></a>        
                    <a href=\"#ankor_contact\"><img src=\"{{ asset('images/logo_contact.png') }}\" alt=\"\" style=\"width:23%\"></a> 
                    <a href=\"https://github.com/Yirzaraji\"><img src=\"{{ asset('images/logo_git.png') }}\" alt=\"\" style=\"width:23%\"></a> 
                </div> 
                <div class=\"col-md-4\">
                </div>       
            </div>
        </div>
        <div class=\"col-sm-7 col-md-7 bannerLowpolyImg\">
            <img src=\"{{ asset('images/lowpoly_banner.jpg') }}\" 
            alt=\"banner\" class=\"w-100 h-100 img-responsive cover\">
        </div>
    </div>
</div>

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

<div class=\"container-fluid\">
    <div class=\"row blocContact justify-content-center\" id=\"ankor_contact\">
        <div class=\"col-md-4 text-center color titleColor  mr-5\">
        <img src=\"{{ asset('images/iconrocket.png') }}\" 
            alt=\"banner\" class=\"w-100 img-responsive\">
        </div>
        <div class=\"col-md-4 text-center d-flex align-items-center color titleColor mt-3 mb-5\">
            <form action=\"\">
               <h3>CONTACTEZ MOI.</h3>
                <div class=\"row mb-4\">
                    <div class=\"col\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"First name\">
                    </div>
                    <div class=\"col\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Last name\">
                    </div>
                </div>
                <div class=\"row mb-4\">
                    <div class=\"col\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Mail\">
                    </div>
                </div>
                <div class=\"row mb-4\">
                    <div class=\"col\">
                        <textarea class=\"form-control\" rows=\"8\" aria-label=\"With textarea\" placeholder=\"Message\"></textarea>
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">ENVOYER</button>
            </form>
        </div>
    </div>
</div>

<div class=\"container-fluid pb-5 pt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-2 footerCard\"></div>
        <div class=\"col-md-2 footerCard\">
            <b>PANDEMONIUM</b></br>
            elementum</br>
            finibus </br>
            nulla facilisis.</br>
            Sed eleifend</br>
        </div>
        <div class=\"col-md-2 footerCard\">
            <b>PANDEMONIUM</b></br>
            elementum</br>
            finibus </br>
            nulla facilisis.</br>
            Sed eleifend</br>
        </div>
        <div class=\"col-md-2 footerCard\">
            <b>PANDEMONIUM</b></br>
            elementum</br>
            finibus </br>
            nulla facilisis.</br>
            Sed eleifend</br>
        </div>
        <div class=\"col-md-2 footerCard\">
            <b>PANDEMONIUM</b></br>
            elementum</br>
            finibus </br>
            nulla facilisis.</br>
            Sed eleifend</br>
        </div>
        <div class=\"col-md-2 footerCard\"></div>
    </div>
</div>

<div class=\"container-fluid\">
    <div class=\"row text-center justify-content-center\">
        <div class=\"col-md-12 footerBlock mr-2 mb-2\">Copyright ©2020 | Yirzaraji | All rights reserved</div>
    </div>
</div>

{% endblock %}

{% block javascripts %}

<script>
console.log('copuiiu')
</script>

{% endblock %}", "home.html.twig", "B:\\dev stuff\\portfolio_symfony\\templates\\home.html.twig");
    }
}
