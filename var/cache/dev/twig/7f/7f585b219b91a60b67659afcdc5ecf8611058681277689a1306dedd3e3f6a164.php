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

/* NavBarSimple.html.twig */
class __TwigTemplate_7d034e3c3e462b30bbd8e58c6f3eca98f8a9df438144d41f2b3acac408cd87d1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "NavBarSimple.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "NavBarSimple.html.twig"));

        // line 1
        echo "<div class=\"container-fluid simpleNavBar\">
    <div class=\"row justify-content-between\">
        <div class=\"md-2 NavDesktopSimple align-items-center ml-5\"> 
            <div class=\"dzde\">  
            <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logoround.png"), "html", null, true);
        echo "\" 
            alt=\"banner\" style=\"width:10%\">
            </div> 
        </div>
        <div class=\"md-10 NavDesktopSimple align-items-center mr-5\">    
            <div class=\"navButton\"><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">HOME</a></div>
            <div class=\"navButton\"><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cv");
        echo "\">CV</a></div>
            <div class=\"navButton\"><a href=\"#ankor_aboutMe\">ABOUT</a></div>
            <div class=\"navButton\"><a href=\"#ankor_contact\">CONTACT</a></div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "NavBarSimple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  57 => 10,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid simpleNavBar\">
    <div class=\"row justify-content-between\">
        <div class=\"md-2 NavDesktopSimple align-items-center ml-5\"> 
            <div class=\"dzde\">  
            <img src=\"{{ asset('images/logoround.png') }}\" 
            alt=\"banner\" style=\"width:10%\">
            </div> 
        </div>
        <div class=\"md-10 NavDesktopSimple align-items-center mr-5\">    
            <div class=\"navButton\"><a href=\"{{ path('homepage') }}\">HOME</a></div>
            <div class=\"navButton\"><a href=\"{{ path('cv') }}\">CV</a></div>
            <div class=\"navButton\"><a href=\"#ankor_aboutMe\">ABOUT</a></div>
            <div class=\"navButton\"><a href=\"#ankor_contact\">CONTACT</a></div>
        </div>
    </div>
</div>
", "NavBarSimple.html.twig", "B:\\dev stuff\\portfolio_symfony\\templates\\NavBarSimple.html.twig");
    }
}
