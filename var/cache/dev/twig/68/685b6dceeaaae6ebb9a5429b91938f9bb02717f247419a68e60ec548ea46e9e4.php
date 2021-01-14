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

/* Footer.html.twig */
class __TwigTemplate_a76f5a2b99204ca77fd085e6708086462e400ce7c69283fbc5285b9e5a8f0dc5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Footer.html.twig"));

        // line 1
        echo "<footer>
    <div class=\"container pb-5 pt-5\">
        <div class=\"row justify-content-center\">
            
            <div class=\"col col-md-2 footerCard\">
                <b>Projects#1</b></br>
                App-glycemic</br>
                Star wars battle</br>
                Heleor</br>
                Escargeddon</br>
            </div>
            <div class=\"col col-md-2 footerCard\">
                <b>Projects#2</b></br>
                Chrono JS</br>
                Citation generator</br>
                Looking for pals</br>
                Sed eleifend</br>
            </div>
            <div class=\"col col-md-2 footerCard\">
                <b>Projects#3</b></br>
                Logo Lfp</br>
                Poster</br>
                Brochure</br>
                Teechirt Brand</br>
            </div>
            <div class=\"col col-md-2 footerCard\">
                <b>Liens</b></br>
                Home</br>
                Contact</br>
                Curriculum</br>
                Wordpress</br>
            </div>
        </div>
    </div>

    <div class=\"container-fluid\">
        <div class=\"row text-center justify-content-center\">
            <div class=\"col-md-12 footerBlock\">Copyright ©2020 | Yirzaraji | All rights reserved | Symfony project</div>
        </div>
    </div>
</footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <div class=\"container pb-5 pt-5\">
        <div class=\"row justify-content-center\">
            
            <div class=\"col col-md-2 footerCard\">
                <b>Projects#1</b></br>
                App-glycemic</br>
                Star wars battle</br>
                Heleor</br>
                Escargeddon</br>
            </div>
            <div class=\"col col-md-2 footerCard\">
                <b>Projects#2</b></br>
                Chrono JS</br>
                Citation generator</br>
                Looking for pals</br>
                Sed eleifend</br>
            </div>
            <div class=\"col col-md-2 footerCard\">
                <b>Projects#3</b></br>
                Logo Lfp</br>
                Poster</br>
                Brochure</br>
                Teechirt Brand</br>
            </div>
            <div class=\"col col-md-2 footerCard\">
                <b>Liens</b></br>
                Home</br>
                Contact</br>
                Curriculum</br>
                Wordpress</br>
            </div>
        </div>
    </div>

    <div class=\"container-fluid\">
        <div class=\"row text-center justify-content-center\">
            <div class=\"col-md-12 footerBlock\">Copyright ©2020 | Yirzaraji | All rights reserved | Symfony project</div>
        </div>
    </div>
</footer>", "Footer.html.twig", "B:\\dev stuff\\portfolio_symfony\\templates\\Footer.html.twig");
    }
}
