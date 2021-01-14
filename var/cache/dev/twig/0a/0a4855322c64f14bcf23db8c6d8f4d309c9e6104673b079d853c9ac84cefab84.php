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

/* contact.html.twig */
class __TwigTemplate_3566f109c3a31e4b2588aae8a6009acdcec3c4e68c63887f195bf610ebb54a36 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        // line 1
        echo "<div class=\"container-fluid\">
    <div class=\"row blocContact justify-content-center\" id=\"ankor_contact\">
        <div class=\"d-none d-sm-none d-md-none d-xl-block col-xl-3 text-center color titleColor position-relative rocket\">
        <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/iconrocket.png"), "html", null, true);
        echo "\" 
            alt=\"banner\" class=\"position-absolute fixed-bottom img-fluid img-responsive\">
        </div>
        <div class=\"col-9 col-sm-5 col-xl-3 text-center d-flex align-items-center mt-3\">
            ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 8, $this->source); })()), 'form_start');
        echo "
                <h3 class=\"titleFormColor mb-4\"><b>CONTACTEZ MOI.</b></h3>
                <div class=\"row mb-1\">
                    ";
        // line 12
        echo "                    <div class=\"col\">
                        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), 'row');
        echo "
                    </div>
                    <div class=\"col\">
                        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 16, $this->source); })()), "email", [], "any", false, false, false, 16), 'row');
        echo "
                    </div>
                </div>
                <div class=\"row mb-1\">
                    <div class=\"col\">
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 21, $this->source); })()), "subject", [], "any", false, false, false, 21), 'row');
        echo "
                    </div>
                </div>
                <div class=\"row mb-1\">
                    <div class=\"col\">
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 26, $this->source); })()), "message", [], "any", false, false, false, 26), 'row');
        echo "
                    </div>
                </div>
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 29, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 29,  86 => 26,  78 => 21,  70 => 16,  64 => 13,  61 => 12,  55 => 8,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
    <div class=\"row blocContact justify-content-center\" id=\"ankor_contact\">
        <div class=\"d-none d-sm-none d-md-none d-xl-block col-xl-3 text-center color titleColor position-relative rocket\">
        <img src=\"{{ asset('images/iconrocket.png') }}\" 
            alt=\"banner\" class=\"position-absolute fixed-bottom img-fluid img-responsive\">
        </div>
        <div class=\"col-9 col-sm-5 col-xl-3 text-center d-flex align-items-center mt-3\">
            {{form_start(contactForm)}}
                <h3 class=\"titleFormColor mb-4\"><b>CONTACTEZ MOI.</b></h3>
                <div class=\"row mb-1\">
                    {# {{form_widget(contactForm)}} #}
                    <div class=\"col\">
                        {{ form_row(contactForm.name)}}
                    </div>
                    <div class=\"col\">
                        {{ form_row(contactForm.email)}}
                    </div>
                </div>
                <div class=\"row mb-1\">
                    <div class=\"col\">
                        {{ form_row(contactForm.subject)}}
                    </div>
                </div>
                <div class=\"row mb-1\">
                    <div class=\"col\">
                        {{ form_row(contactForm.message)}}
                    </div>
                </div>
            {{form_end(contactForm)}}
        </div>
    </div>
</div>", "contact.html.twig", "B:\\dev stuff\\portfolio_symfony\\templates\\contact.html.twig");
    }
}
