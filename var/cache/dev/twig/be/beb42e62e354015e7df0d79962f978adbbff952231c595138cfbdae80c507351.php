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
        <div class=\"col-md-5 blockBanner01\">
            <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logoround.png"), "html", null, true);
        echo "\" 
            alt=\"banner\" style=\"width:40%\" class=\"img-responsive img-center\">
            <p>DEVELOPPEUR</p>
            <p><span>PHP créatif</span></p> 
            <p>Remi Larrauri</p>
            <p>06 29 61 53 66</p>
            <button class=\"btn btn-info mb-5\">CV</button><br>
            <span>IN </span><span>MAIL </span><span>GIT </span>
        </div>
        <div class=\"col-md-7 bannerLowpolyImg bg-success\">
            <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/lowpoly_banner.jpg"), "html", null, true);
        echo "\" 
            alt=\"banner\" class=\"w-100 img-responsive cover\">
        </div>
    </div>
</div>

<div class=\"container-fluid pb-5 pt-5\">
    <div class=\"row\">
        <div class=\"col-md-12 text-center color titleColor mt-3\">
            <img src=\"https://via.placeholder.com/70\" alt=\"\">
            <h4><b>CE QUE JE</b> SAIS FAIRE...</h4>
        </div>
    </div>
    <div class=\"row text-center justify-content-center\">
        <div class=\"col-md-3 tripleCard mr-2\">ee</div>
        <div class=\"col-md-3 tripleCard mr-2\">ez</div>
        <div class=\"col-md-3 tripleCard mr-2\">re</div>
    </div>
</div>

<div class=\"container-fluid pb-5 pt-5\">
    <div class=\"row\">
        <div class=\"col-md-12 text-center color titleColor mt-3 mb-5\">
            <img src=\"https://via.placeholder.com/70\" alt=\"\">
            <h4><b>QUELQUES</b> PROJET...</h4>
            <span class=\"filterSpan\">PRINT</span> <span class=\"filterSpan\">DEV</span> <span class=\"filterSpan\">DESIGN</span>
        </div>
    </div>
    <div class=\"row text-center justify-content-center\">
        <div class=\"col-md-3 tripleCard mr-2 mb-2\">ee</div>
        <div class=\"col-md-3 tripleCard mr-2 mb-2\">ez</div>
        <div class=\"col-md-3 tripleCard mr-2 mb-2\">re</div>
        <div class=\"col-md-3 tripleCard mr-2 mb-2\">ee</div>
        <div class=\"col-md-3 tripleCard mr-2 mb-2\">ez</div>
        <div class=\"col-md-3 tripleCard mr-2 mb-2\">re</div>
    </div>
    
</div>

<div class=\"container-fluid pb-5 pt-5\">
    <div class=\"row blocExp\">
        <div class=\"col-md-4 text-center color titleColor mt-3 mb-5\">
            <img src=\"https://via.placeholder.com/70\" alt=\"\">
            <h4><b>EXPERIENCES</b> PROFESSIONNELLES...</h4>
        </div>
        <div class=\"col-md-8\"></div>
    </div>
    <div class=\"row blocDip\">
        <div class=\"col-md-4 text-center color titleColor mt-3 mb-5\">
            <img src=\"https://via.placeholder.com/70\" alt=\"\">
            <h4><b>DIPLOMES</b> CERTIFICATIONS...</h4>
        </div>
        <div class=\"col-md-8\"></div>
    </div>
</div>

<div class=\"container-fluid pb-5 pt-5\">
    <div class=\"row\">
        <div class=\"col-md-12 text-center color titleColor mt-3 mb-5\">
            <img src=\"https://via.placeholder.com/70\" alt=\"\">
            <h4><b>QUELQUES</b> SKILLS...</h4>
            <span class=\"filterSpan\">BACK</span> <span class=\"filterSpan\">FRONT</span> <span class=\"filterSpan\">CONCEPTION</span>
        </div>
    </div>
    <div class=\"row text-center justify-content-center\">
        <div class=\"col-md-3 tripleCard mr-2 mb-2\">ee</div>
        <div class=\"col-md-3 tripleCard mr-2 mb-2\">ez</div>
        <div class=\"col-md-3 tripleCard mr-2 mb-2\">re</div>
        <div class=\"col-md-3 tripleCard mr-2 mb-2\">ee</div>
        <div class=\"col-md-3 tripleCard mr-2 mb-2\">ez</div>
        <div class=\"col-md-3 tripleCard mr-2 mb-2\">re</div>
    </div>
</div>

<div class=\"container-fluid\">
    <div class=\"row blocContact justify-content-center\">
        <div class=\"col-md-4 text-center color titleColor\">
        <img src=\"";
        // line 96
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
    <div class=\"row text-center justify-content-center\">
        <div class=\"col-md-2 tripleCard mr-2 mb-2\">ee</div>
        <div class=\"col-md-2 tripleCard mr-2 mb-2\">ez</div>
        <div class=\"col-md-2 tripleCard mr-2 mb-2\">re</div>
        <div class=\"col-md-2 tripleCard mr-2 mb-2\">ee</div>
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
        return array (  160 => 96,  80 => 19,  67 => 9,  62 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

{# ========== BANNER BLOC ============ #}
<div class=\"container-fluid banner\">
    <div class=\"row text-center\">
        <div class=\"col-md-5 blockBanner01\">
            <img src=\"{{ asset('images/logoround.png') }}\" 
            alt=\"banner\" style=\"width:40%\" class=\"img-responsive img-center\">
            <p>DEVELOPPEUR</p>
            <p><span>PHP créatif</span></p> 
            <p>Remi Larrauri</p>
            <p>06 29 61 53 66</p>
            <button class=\"btn btn-info mb-5\">CV</button><br>
            <span>IN </span><span>MAIL </span><span>GIT </span>
        </div>
        <div class=\"col-md-7 bannerLowpolyImg bg-success\">
            <img src=\"{{ asset('images/lowpoly_banner.jpg') }}\" 
            alt=\"banner\" class=\"w-100 img-responsive cover\">
        </div>
    </div>
</div>

<div class=\"container-fluid pb-5 pt-5\">
    <div class=\"row\">
        <div class=\"col-md-12 text-center color titleColor mt-3\">
            <img src=\"https://via.placeholder.com/70\" alt=\"\">
            <h4><b>CE QUE JE</b> SAIS FAIRE...</h4>
        </div>
    </div>
    <div class=\"row text-center justify-content-center\">
        <div class=\"col-md-3 tripleCard mr-2\">ee</div>
        <div class=\"col-md-3 tripleCard mr-2\">ez</div>
        <div class=\"col-md-3 tripleCard mr-2\">re</div>
    </div>
</div>

<div class=\"container-fluid pb-5 pt-5\">
    <div class=\"row\">
        <div class=\"col-md-12 text-center color titleColor mt-3 mb-5\">
            <img src=\"https://via.placeholder.com/70\" alt=\"\">
            <h4><b>QUELQUES</b> PROJET...</h4>
            <span class=\"filterSpan\">PRINT</span> <span class=\"filterSpan\">DEV</span> <span class=\"filterSpan\">DESIGN</span>
        </div>
    </div>
    <div class=\"row text-center justify-content-center\">
        <div class=\"col-md-3 tripleCard mr-2 mb-2\">ee</div>
        <div class=\"col-md-3 tripleCard mr-2 mb-2\">ez</div>
        <div class=\"col-md-3 tripleCard mr-2 mb-2\">re</div>
        <div class=\"col-md-3 tripleCard mr-2 mb-2\">ee</div>
        <div class=\"col-md-3 tripleCard mr-2 mb-2\">ez</div>
        <div class=\"col-md-3 tripleCard mr-2 mb-2\">re</div>
    </div>
    
</div>

<div class=\"container-fluid pb-5 pt-5\">
    <div class=\"row blocExp\">
        <div class=\"col-md-4 text-center color titleColor mt-3 mb-5\">
            <img src=\"https://via.placeholder.com/70\" alt=\"\">
            <h4><b>EXPERIENCES</b> PROFESSIONNELLES...</h4>
        </div>
        <div class=\"col-md-8\"></div>
    </div>
    <div class=\"row blocDip\">
        <div class=\"col-md-4 text-center color titleColor mt-3 mb-5\">
            <img src=\"https://via.placeholder.com/70\" alt=\"\">
            <h4><b>DIPLOMES</b> CERTIFICATIONS...</h4>
        </div>
        <div class=\"col-md-8\"></div>
    </div>
</div>

<div class=\"container-fluid pb-5 pt-5\">
    <div class=\"row\">
        <div class=\"col-md-12 text-center color titleColor mt-3 mb-5\">
            <img src=\"https://via.placeholder.com/70\" alt=\"\">
            <h4><b>QUELQUES</b> SKILLS...</h4>
            <span class=\"filterSpan\">BACK</span> <span class=\"filterSpan\">FRONT</span> <span class=\"filterSpan\">CONCEPTION</span>
        </div>
    </div>
    <div class=\"row text-center justify-content-center\">
        <div class=\"col-md-3 tripleCard mr-2 mb-2\">ee</div>
        <div class=\"col-md-3 tripleCard mr-2 mb-2\">ez</div>
        <div class=\"col-md-3 tripleCard mr-2 mb-2\">re</div>
        <div class=\"col-md-3 tripleCard mr-2 mb-2\">ee</div>
        <div class=\"col-md-3 tripleCard mr-2 mb-2\">ez</div>
        <div class=\"col-md-3 tripleCard mr-2 mb-2\">re</div>
    </div>
</div>

<div class=\"container-fluid\">
    <div class=\"row blocContact justify-content-center\">
        <div class=\"col-md-4 text-center color titleColor\">
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
    <div class=\"row text-center justify-content-center\">
        <div class=\"col-md-2 tripleCard mr-2 mb-2\">ee</div>
        <div class=\"col-md-2 tripleCard mr-2 mb-2\">ez</div>
        <div class=\"col-md-2 tripleCard mr-2 mb-2\">re</div>
        <div class=\"col-md-2 tripleCard mr-2 mb-2\">ee</div>
    </div>
</div>

<div class=\"container-fluid\">
    <div class=\"row text-center justify-content-center\">
        <div class=\"col-md-12 footerBlock mr-2 mb-2\">Copyright ©2020 | Yirzaraji | All rights reserved</div>
    </div>
</div>

{% endblock %}", "home.html.twig", "B:\\dev stuff\\portfolio_symfony\\templates\\home.html.twig");
    }
}
