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

/* banner.html.twig */
class __TwigTemplate_02dc05ad17cf468b9ea1f0464a1d59c7fb102ae716a4e036ef94c767e80edcaa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "banner.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "banner.html.twig"));

        // line 2
        echo "<div class=\"container-fluid banner\">
    <div class=\"row text-center\">
        <div class=\"col-sm-5 col-md-5 blockBanner01 pb-3\">
            <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logoround.png"), "html", null, true);
        echo "\" 
            alt=\"banner\" style=\"width:40%\" class=\"img-responsive img-center\">
            <p>DEVELOPPEUR</p>
            <p><span class=\"text-danger\">&#60;?PHP</span> créatif <span class=\"text-danger\">?&#62;</span></p> 
            <p><span>Remi Larrauri</span><br>
            <span>06.29.61.53.66</span></p>
            <button class=\"btn mb-5 mt-3 cv_icon\">
                <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cv");
        echo "\"><i class=\"far fa-arrow-alt-circle-down\"><br>
                <p class=\"mt-3\">cv</p></i></a>
            </button><br>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-4\">
                </div>
                <div class=\"col-md-4 w-50 w-md-100\">
                    <a href=\"https://www.linkedin.com/in/rl-dev/\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo_linkedin.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:23%\"></a>        
                    <a href=\"#ankor_contact\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo_contact.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:23%\"></a> 
                    <a href=\"https://github.com/Yirzaraji\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo_git.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:23%\"></a> 
                </div> 
                <div class=\"col-md-4\">
                </div>       
            </div>
        </div>
        <div class=\"col-sm-7 col-md-7 bannerLowpolyImg\">
            <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/lowpoly_banner02.jpg"), "html", null, true);
        echo "\" 
            alt=\"banner\" class=\"w-100 h-100 img-responsive cover\">
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 28,  76 => 21,  72 => 20,  68 => 19,  58 => 12,  48 => 5,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# ========== BANNER BLOC ============ #}
<div class=\"container-fluid banner\">
    <div class=\"row text-center\">
        <div class=\"col-sm-5 col-md-5 blockBanner01 pb-3\">
            <img src=\"{{ asset('images/logoround.png') }}\" 
            alt=\"banner\" style=\"width:40%\" class=\"img-responsive img-center\">
            <p>DEVELOPPEUR</p>
            <p><span class=\"text-danger\">&#60;?PHP</span> créatif <span class=\"text-danger\">?&#62;</span></p> 
            <p><span>Remi Larrauri</span><br>
            <span>06.29.61.53.66</span></p>
            <button class=\"btn mb-5 mt-3 cv_icon\">
                <a href=\"{{ path('cv') }}\"><i class=\"far fa-arrow-alt-circle-down\"><br>
                <p class=\"mt-3\">cv</p></i></a>
            </button><br>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-4\">
                </div>
                <div class=\"col-md-4 w-50 w-md-100\">
                    <a href=\"https://www.linkedin.com/in/rl-dev/\"><img src=\"{{ asset('images/logo_linkedin.png') }}\" alt=\"\" style=\"width:23%\"></a>        
                    <a href=\"#ankor_contact\"><img src=\"{{ asset('images/logo_contact.png') }}\" alt=\"\" style=\"width:23%\"></a> 
                    <a href=\"https://github.com/Yirzaraji\"><img src=\"{{ asset('images/logo_git.png') }}\" alt=\"\" style=\"width:23%\"></a> 
                </div> 
                <div class=\"col-md-4\">
                </div>       
            </div>
        </div>
        <div class=\"col-sm-7 col-md-7 bannerLowpolyImg\">
            <img src=\"{{ asset('images/lowpoly_banner02.jpg') }}\" 
            alt=\"banner\" class=\"w-100 h-100 img-responsive cover\">
        </div>
    </div>
</div>", "banner.html.twig", "B:\\dev stuff\\portfolio_symfony\\templates\\banner.html.twig");
    }
}
