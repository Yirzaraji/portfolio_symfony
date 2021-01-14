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
class __TwigTemplate_3fd815b114c859d42c2d191cb40e14aace5de998981f9d774ae185f8197c641a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        <div class=\"col-md-3 tripleCard\">
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo_print.png"), "html", null, true);
        echo "\" alt=\"\" class=\"mb-4\"></br>
            <span class=\"triplecard_txt\">PRINT</span></br>
            <p class=\"mt-1\">
                elementum, quis finibus nulla facilisis.</br> 
                Sed eleifend quis turpis id euismod. Morbi.
            </p>
        </div>
        <div class=\"col-md-3 tripleCard\">
            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo_dev.png"), "html", null, true);
        echo "\" alt=\"\" class=\"mb-4\"></br>
            <span class=\"triplecard_txt\">DEV</span></br>
            <p class=\"mt-1\">
                elementum, quis finibus nulla facilisis.</br> 
                Sed eleifend quis turpis id euismod. Morbi.
            </p>
        </div>
        <div class=\"col-md-3 tripleCard\">
        <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo_design.png"), "html", null, true);
        echo "\" alt=\"\" class=\"mb-4\"></br>
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
            <div class=\"row pb-5 pt-5\">
                <div class=\"col-md-5 d-none d-md-flex justify-content-end\">
                    <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar1_small.jpg"), "html", null, true);
        echo "\" class=\"img-fluid avatar\"  alt=\"\">
                </div>
                <div class=\"col-md-5 line_left ml-2 pt-4 about-title\" id=\"ankor_aboutMe\" style=\"text-justify: auto;\">
                    <b>ABOUT ME...</b><br>
                    <br>
                    <p>A la recherche d’un poste de Développeur Web dans le cadre d’une alternance Bac +3 
                    Concepteur développeur d’application
                    Actuellement en Freelance dans deux activités différentes je propose mes services 
                    dans le design graphique & le Développement web.
                    J’ai une appétence pour les nouvelles technologies, je suis très curieux et 
                    j’ai une grande soif d’apprendre.</p>
                </div>      
            </div>
        </div>
    </div>
</div>

<div class=\"container-fluid pb-5 pt-5\">
    <div class=\"row\">
        <div class=\"col-md-12 text-center color titleColor mt-3 ml-3\">
            <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rosace.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:8.5%\" class=\"mb-2\">
            <h4 class=\"titlecolor\"><b>QUELQUES</b> PROJET...</h4>
            <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/trait.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:14%\" class=\"mb-2\">
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12 text-center mb-5\">
            <ul class=\"navTabs list_js\">
                <li class=\"active\"><a href=\"#tab1\">Dev</a></li>
                <li><a href=\"#tab2\">Design</a></li>
                <li><a href=\"#tab3\">Print</a></li>
            </ul>
        </div>
    </div>
</div>
<div class=\"container\">
    <div id=\"tab1\" class=\"box devBox active\">
        <div class=\"row justify-content-center flex-wrap\">
            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["devPosts"]) || array_key_exists("devPosts", $context) ? $context["devPosts"] : (function () { throw new RuntimeError('Variable "devPosts" does not exist.', 87, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["devPost"]) {
            // line 88
            echo "                <div class='newsCard news-Slide-up m-1'>
                    <img src=\"";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["devPost"], "projectImage", [], "any", false, false, false, 89), "html", null, true);
            echo "\"/>
                    <div class='newsCaption'>
                        <div class='newsCaption-title'>project</div>
                        <span class=\"projectTitle\">";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["devPost"], "title", [], "any", false, false, false, 92), "html", null, true);
            echo "</span>
                        <div class=\"dottedLine mb-1\"></div>
                        <span class=\"techTxt\">technologies</span>
                        <p class='newsCaption-content'>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["devPost"], "technos", [], "any", false, false, false, 95), "html", null, true);
            echo " </p>
                        <div class=\"newsCaption-link\">
                            <p><a href='";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["devPost"], "lien", [], "any", false, false, false, 97), "html", null, true);
            echo " ' target=\"_blank\">DEMO</a>
                            <a href='";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["devPost"], "git", [], "any", false, false, false, 98), "html", null, true);
            echo "' target=\"_blank\">GIT</a></p>    
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['devPost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo " 
        </div>
    </div>
</div>
<div class=\"container\">
    <div id=\"tab2\" class=\"box designBox hide\">
        <div class=\"row justify-content-center flex-wrap\"> 
            ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["designPosts"]) || array_key_exists("designPosts", $context) ? $context["designPosts"] : (function () { throw new RuntimeError('Variable "designPosts" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["designPost"]) {
            // line 110
            echo "                <div class='newsCard news-Slide-up m-1'>
                    <img src=\"";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["designPost"], "projectImage", [], "any", false, false, false, 111), "html", null, true);
            echo "\" />
                    <div class='newsCaption'>
                        <div class='newsCaption-title'>project</div>
                        <span class=\"projectTitle\">";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["designPost"], "title", [], "any", false, false, false, 114), "html", null, true);
            echo "</span>
                        <div class=\"dottedLine mb-1\"></div>
                        <span class=\"techTxt\">technologies</span>
                        <p class='newsCaption-content'>";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["designPost"], "technos", [], "any", false, false, false, 117), "html", null, true);
            echo " </p>
                        <div class=\"newsCaption-link\">
                            <p><a href='";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["designPost"], "lien", [], "any", false, false, false, 119), "html", null, true);
            echo "'>DEMO</a>
                            <a href='";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["designPost"], "lien", [], "any", false, false, false, 120), "html", null, true);
            echo "'>GIT</a></p>    
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['designPost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "        
        </div>
    </div>
    <div id=\"tab3\" class=\"box printBox hide\">
        <div class=\"row justify-content-center flex-wrap\">
            ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["printPosts"]) || array_key_exists("printPosts", $context) ? $context["printPosts"] : (function () { throw new RuntimeError('Variable "printPosts" does not exist.', 129, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["printPost"]) {
            // line 130
            echo "                <div class='newsCard news-Slide-up m-1'>
                    <img src=\"";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["printPost"], "projectImage", [], "any", false, false, false, 131), "html", null, true);
            echo "\" />
                    <div class='newsCaption'>
                        <div class='newsCaption-title'>project</div>
                        <span class=\"projectTitle\">";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["printPost"], "title", [], "any", false, false, false, 134), "html", null, true);
            echo "</span>
                        <div class=\"dottedLine mb-1\"></div>
                        <span class=\"techTxt\">technologies</span>
                        <p class='newsCaption-content'>";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["printPost"], "technos", [], "any", false, false, false, 137), "html", null, true);
            echo " </p>
                        <div class=\"newsCaption-link\">
                            <p><a href='";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["printPost"], "lien", [], "any", false, false, false, 139), "html", null, true);
            echo "'>DEMO</a>
                            <a href='";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["printPost"], "lien", [], "any", false, false, false, 140), "html", null, true);
            echo "'>GIT</a></p>    
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['printPost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "        
        </div>
    </div>
</div>

<div class=\"container-fluid pb-5 pt-5 mt-5\">
    <div class=\"row justify-content-center blocExp\">
        <div class=\"col-md-3 color mt-5 mb-5\">
            <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rosaceb_blanc.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:22%\">
            <h4><b>EXPERIENCES</b><br> PROFESSIONNELLES...</h4>
        </div>
        <div class=\"col-md-6 line_left mt-5 mb-5\">
            <p><b>DEVELOPPEUR PHP | SYMFONY<br>
            <span class=\"redfont\">DIGEAT</span></b><br>
            MARS 2020</p>
        
            <p>Dans le cadre d'un stage de 3 mois j'ai pu m'initier au fonctionnement du framework PHP Symfony 3 & 4.
            En l'espace d'un mois j'ai pu maitriser ce nouvel environnement de travail et par la suite pu
            developper mes premiers composant d'acces aux données sur l'application de l'entreprise Digeat et Sacre Fernand.<br>
            </p>

            <p>
                <ul>
                    <li>Javascript, Jquery, Ajax</li>
                    <li>Html, Css, Twig, Boostrap</li>
                    <li>Php, Sql, Uml, Doctrine, gitlab</li>
                </ul>
            </p>
            <div class=\"mt-5\"></div>
            <p><b>DEVELOPPEUR VUE.JS<br>
            <span class=\"redfont\">SIMPLON TOULOUSE</span></b><br>
            JANVIER 2020</p>

            <p>
            Dans me cadre d'un projet client, j'ai developpé une application pedagogique avec le framework Vue.js.
            Elle été composée d'un quiz dynamique permettant d'evaluer le niveau de l'utilisateur et le rediriger
            vers la page correspondante.
            </p>
            <p>
                <ul>
                    <li>Javascript</li>
                    <li>Vue.js</li>
                    <li>Html Css bootstrap</li>
                </ul>
            </p>
        </div>
    </div>
   
    <div class=\"row justify-content-center blocDip\">
        <div class=\"col-md-3 color mt-5 mb-5\">
            <img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rosace.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:22%\">
            <h4 class=\"gradientPurpleFont titleh4\"><b>PARCOURS &</b><br> CURSUS SCOLAIRE...</h4>
        </div>
        <div class=\"col-md-6 line_leftBlack mt-5 mb-5\">
        <p><b>CONCEPTEUR DEVELOPPEUR D'APPLICATION Bac +4<br>
        <span class=\"gradientPurpleFont\">OPEN CLASS ROOMS</span></b><br>
        2020</p>
       
        <p>Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit, 
        quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu, 
        eu mollis tellus. Sed finibus aliquam neque sit amet sodales.</p>
        <div class=\"mt-2\"></div>
        <p><b>DEVELOPPEUR WEB Bac +2<br>
        <span class=\"gradientPurpleFont\">SIMPLON.CO</span></b><br>
        2020</p>
       
        <p>Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit, 
        quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu, 
        eu mollis tellus. Sed finibus aliquam neque sit amet sodales.</p>
        <div class=\"mt-2\"></div>
        <p><b>DESIGNER GRAPHIQUE<br>
        <span class=\"gradientPurpleFont\">IDEM CREATIVE ARTS SCHOOL</span></b><br>
        2014</p>

        <p>Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit, 
        quis consequat nulla effi citur at. Maecenas sed massa</p>
        </div>
    </div>
</div>

<div class=\"container-fluid pb-5\">
    <div class=\"row\">
        <div class=\"col-md-12 text-center color titleColor mt-3 ml-3\">
            <img src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rosace.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:8.5%\" class=\"mb-2\">
            <h4 class=\"titlecolor\"><b>SOME</b> SKILLS.</h4>
            <img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/trait.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:14%\" class=\"mb-2\">
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12 text-center mb-5\">
            <ul class=\"navTabsTech list_js\">
                <li class=\"active\"><a href=\"#tab4\">Front</a></li>
                <li><a href=\"#tab5\">Environnement</a></li>
                <li><a href=\"#tab6\">Back</a></li>
            </ul>
        </div>
    </div>

    <div id=\"tab4\" class=\"boxTech active\">
        <div class=\"row text-center mb-2\">
            <div class=\"col-md-4\"></div>
            <div class=\"col-md-4 flex-wrap iconSkills\">
               <i class=\"fab fa-vuejs\"><p>Vue.Js</p></i>
               <i class=\"fab fa-js-square\"><p>Javascript</p></i>
               <i class=\"fab fa-html5\"><p>Html 5</p></i>
               <i class=\"fab fa-css3-alt\"><p>Css 3</p></i>
               <i class=\"fab fa-bootstrap\"><p>Bootsrap</p></i>
               <i class=\"fab fa-symfony\"><p>Symfony 5</p></i>
               <i class=\"fab fa-react\"><p>React.js</p></i>
            </div>
            <div class=\"col-md-4\"></div>
        </div>
    </div>
    <div id=\"tab5\" class=\"boxTech hide iconSkills\">
        <div class=\"row text-center mb-2\">
            <div class=\"col-md-4\"></div>
            <div class=\"col-md-4 flex-wrap\">
                <i class=\"fab fa-github\"><p>Git</p></i>
                <i class=\"fab fa-unity\"><p>Unity C#</p></i>
                <i class=\"fab fa-trello\"><p>Trello</p></i>
                <i class=\"fab fa-ubuntu\"><p>Ubuntu</p></i>
                <i class=\"fab fa-linux\"><p>Linux</p></i>
                <i class=\"fab fa-windows\"><p>Windows</p></i>
                <i class=\"fab fa-codepen\"><p>Codepen</p></i>
            </div>
            <div class=\"col-md-4\"></div>
        </div>
    </div>
    <div id=\"tab6\" class=\"boxTech hide iconSkills\">
       <div class=\"row text-center mb-2\">
            <div class=\"col-md-4\"></div>
            <div class=\"col-md-4 flex-wrap\">
                <i class=\"fab fa-symfony\"><p>Symfony 5</p></i>
                <i class=\"fab fa-php\"><p>Php</p></i>
                <i class=\"fab fa-node\"><p>Node.js</p></i>
                <i class=\"fas fa-database\"><p>Sql Doctrine</p></i>
                <i class=\"fas fa-project-diagram\"><p>Uml</p></i>
                <i class=\"fas fa-tools\"><p>Ovh</p></i>
            </div>
            <div class=\"col-md-4\"></div>
        </div>
    </div>
</div>



";
        // line 293
        $this->loadTemplate("contact.html.twig", "home.html.twig", 293)->display($context);
        // line 294
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 297
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 298
        echo "
<script>

//--------Display hide cards----------//

\$(document).ready(function() {
    \$('.navTabs > li > a').click(function(event) {
    event.preventDefault();

    //get displaying tab content jQuery selector
    let activeTabsSelector = \$('.navTabs > li.active > a').attr('href');

    //find active tabs and remove 'active'
    let activedNav = \$('.navTabs > li.active');
    activedNav.removeClass('active');

    //add 'active' into clicked navigation
    \$(this).parents('li').addClass('active');

    //hide displaying tab content
    \$(activeTabsSelector).removeClass('active');
    \$(activeTabsSelector).addClass('hide');

    //show target tab content
    let targetTabsSelector = \$(this).attr('href');
    \$(targetTabsSelector).removeClass('hide');
    \$(targetTabsSelector).addClass('active');
    });
});

\$(document).ready(function() {
    \$('.navTabsTech > li > a').click(function(event) {
    event.preventDefault();

    //get displaying tab content jQuery selector
    let activeTabsSelector = \$('.navTabsTech > li.active > a').attr('href');

    //find actived navigation and remove 'active' css
    let activedNav = \$('.navTabsTech > li.active');
    activedNav.removeClass('active');

    //add 'active' css into clicked navigation
    \$(this).parents('li').addClass('active');

    //hide displaying tab content
    \$(activeTabsSelector).removeClass('active');
    \$(activeTabsSelector).addClass('hide');

    //show target tab content
    let targetTabsSelector = \$(this).attr('href');
    \$(targetTabsSelector).removeClass('hide');
    \$(targetTabsSelector).addClass('active');
    });
});

//-----------display hide infos from a card project------------//
 
";
        // line 373
        echo "//END SCRIPT JS//
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  554 => 373,  495 => 298,  485 => 297,  474 => 294,  472 => 293,  408 => 232,  403 => 230,  364 => 194,  319 => 152,  309 => 144,  298 => 140,  294 => 139,  289 => 137,  283 => 134,  277 => 131,  274 => 130,  270 => 129,  263 => 124,  252 => 120,  248 => 119,  243 => 117,  237 => 114,  231 => 111,  228 => 110,  224 => 109,  215 => 102,  204 => 98,  200 => 97,  195 => 95,  189 => 92,  183 => 89,  180 => 88,  176 => 87,  156 => 70,  151 => 68,  128 => 48,  110 => 33,  99 => 25,  88 => 17,  79 => 11,  73 => 7,  71 => 6,  69 => 5,  59 => 4,  36 => 1,);
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
        <div class=\"col-md-3 tripleCard\">
            <img src=\"{{ asset('images/logo_print.png') }}\" alt=\"\" class=\"mb-4\"></br>
            <span class=\"triplecard_txt\">PRINT</span></br>
            <p class=\"mt-1\">
                elementum, quis finibus nulla facilisis.</br> 
                Sed eleifend quis turpis id euismod. Morbi.
            </p>
        </div>
        <div class=\"col-md-3 tripleCard\">
            <img src=\"{{ asset('images/logo_dev.png') }}\" alt=\"\" class=\"mb-4\"></br>
            <span class=\"triplecard_txt\">DEV</span></br>
            <p class=\"mt-1\">
                elementum, quis finibus nulla facilisis.</br> 
                Sed eleifend quis turpis id euismod. Morbi.
            </p>
        </div>
        <div class=\"col-md-3 tripleCard\">
        <img src=\"{{ asset('images/logo_design.png') }}\" alt=\"\" class=\"mb-4\"></br>
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
            <div class=\"row pb-5 pt-5\">
                <div class=\"col-md-5 d-none d-md-flex justify-content-end\">
                    <img src=\"{{ asset('images/avatar1_small.jpg') }}\" class=\"img-fluid avatar\"  alt=\"\">
                </div>
                <div class=\"col-md-5 line_left ml-2 pt-4 about-title\" id=\"ankor_aboutMe\" style=\"text-justify: auto;\">
                    <b>ABOUT ME...</b><br>
                    <br>
                    <p>A la recherche d’un poste de Développeur Web dans le cadre d’une alternance Bac +3 
                    Concepteur développeur d’application
                    Actuellement en Freelance dans deux activités différentes je propose mes services 
                    dans le design graphique & le Développement web.
                    J’ai une appétence pour les nouvelles technologies, je suis très curieux et 
                    j’ai une grande soif d’apprendre.</p>
                </div>      
            </div>
        </div>
    </div>
</div>

<div class=\"container-fluid pb-5 pt-5\">
    <div class=\"row\">
        <div class=\"col-md-12 text-center color titleColor mt-3 ml-3\">
            <img src=\"{{ asset('images/rosace.png') }}\" alt=\"\" style=\"width:8.5%\" class=\"mb-2\">
            <h4 class=\"titlecolor\"><b>QUELQUES</b> PROJET...</h4>
            <img src=\"{{ asset('images/trait.png') }}\" alt=\"\" style=\"width:14%\" class=\"mb-2\">
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12 text-center mb-5\">
            <ul class=\"navTabs list_js\">
                <li class=\"active\"><a href=\"#tab1\">Dev</a></li>
                <li><a href=\"#tab2\">Design</a></li>
                <li><a href=\"#tab3\">Print</a></li>
            </ul>
        </div>
    </div>
</div>
<div class=\"container\">
    <div id=\"tab1\" class=\"box devBox active\">
        <div class=\"row justify-content-center flex-wrap\">
            {% for devPost in devPosts %}
                <div class='newsCard news-Slide-up m-1'>
                    <img src=\"{{ devPost.projectImage }}\"/>
                    <div class='newsCaption'>
                        <div class='newsCaption-title'>project</div>
                        <span class=\"projectTitle\">{{ devPost.title }}</span>
                        <div class=\"dottedLine mb-1\"></div>
                        <span class=\"techTxt\">technologies</span>
                        <p class='newsCaption-content'>{{ devPost.technos }} </p>
                        <div class=\"newsCaption-link\">
                            <p><a href='{{ devPost.lien }} ' target=\"_blank\">DEMO</a>
                            <a href='{{ devPost.git }}' target=\"_blank\">GIT</a></p>    
                        </div>
                    </div>
                </div>
            {% endfor %} 
        </div>
    </div>
</div>
<div class=\"container\">
    <div id=\"tab2\" class=\"box designBox hide\">
        <div class=\"row justify-content-center flex-wrap\"> 
            {% for designPost in designPosts %}
                <div class='newsCard news-Slide-up m-1'>
                    <img src=\"{{ designPost.projectImage }}\" />
                    <div class='newsCaption'>
                        <div class='newsCaption-title'>project</div>
                        <span class=\"projectTitle\">{{ designPost.title }}</span>
                        <div class=\"dottedLine mb-1\"></div>
                        <span class=\"techTxt\">technologies</span>
                        <p class='newsCaption-content'>{{ designPost.technos }} </p>
                        <div class=\"newsCaption-link\">
                            <p><a href='{{ designPost.lien }}'>DEMO</a>
                            <a href='{{ designPost.lien }}'>GIT</a></p>    
                        </div>
                    </div>
                </div>
            {% endfor %}        
        </div>
    </div>
    <div id=\"tab3\" class=\"box printBox hide\">
        <div class=\"row justify-content-center flex-wrap\">
            {% for printPost in printPosts %}
                <div class='newsCard news-Slide-up m-1'>
                    <img src=\"{{ printPost.projectImage }}\" />
                    <div class='newsCaption'>
                        <div class='newsCaption-title'>project</div>
                        <span class=\"projectTitle\">{{ printPost.title }}</span>
                        <div class=\"dottedLine mb-1\"></div>
                        <span class=\"techTxt\">technologies</span>
                        <p class='newsCaption-content'>{{ printPost.technos }} </p>
                        <div class=\"newsCaption-link\">
                            <p><a href='{{ printPost.lien }}'>DEMO</a>
                            <a href='{{ printPost.lien }}'>GIT</a></p>    
                        </div>
                    </div>
                </div>
            {% endfor %}        
        </div>
    </div>
</div>

<div class=\"container-fluid pb-5 pt-5 mt-5\">
    <div class=\"row justify-content-center blocExp\">
        <div class=\"col-md-3 color mt-5 mb-5\">
            <img src=\"{{ asset('images/rosaceb_blanc.png') }}\" alt=\"\" style=\"width:22%\">
            <h4><b>EXPERIENCES</b><br> PROFESSIONNELLES...</h4>
        </div>
        <div class=\"col-md-6 line_left mt-5 mb-5\">
            <p><b>DEVELOPPEUR PHP | SYMFONY<br>
            <span class=\"redfont\">DIGEAT</span></b><br>
            MARS 2020</p>
        
            <p>Dans le cadre d'un stage de 3 mois j'ai pu m'initier au fonctionnement du framework PHP Symfony 3 & 4.
            En l'espace d'un mois j'ai pu maitriser ce nouvel environnement de travail et par la suite pu
            developper mes premiers composant d'acces aux données sur l'application de l'entreprise Digeat et Sacre Fernand.<br>
            </p>

            <p>
                <ul>
                    <li>Javascript, Jquery, Ajax</li>
                    <li>Html, Css, Twig, Boostrap</li>
                    <li>Php, Sql, Uml, Doctrine, gitlab</li>
                </ul>
            </p>
            <div class=\"mt-5\"></div>
            <p><b>DEVELOPPEUR VUE.JS<br>
            <span class=\"redfont\">SIMPLON TOULOUSE</span></b><br>
            JANVIER 2020</p>

            <p>
            Dans me cadre d'un projet client, j'ai developpé une application pedagogique avec le framework Vue.js.
            Elle été composée d'un quiz dynamique permettant d'evaluer le niveau de l'utilisateur et le rediriger
            vers la page correspondante.
            </p>
            <p>
                <ul>
                    <li>Javascript</li>
                    <li>Vue.js</li>
                    <li>Html Css bootstrap</li>
                </ul>
            </p>
        </div>
    </div>
   
    <div class=\"row justify-content-center blocDip\">
        <div class=\"col-md-3 color mt-5 mb-5\">
            <img src=\"{{ asset('images/rosace.png') }}\" alt=\"\" style=\"width:22%\">
            <h4 class=\"gradientPurpleFont titleh4\"><b>PARCOURS &</b><br> CURSUS SCOLAIRE...</h4>
        </div>
        <div class=\"col-md-6 line_leftBlack mt-5 mb-5\">
        <p><b>CONCEPTEUR DEVELOPPEUR D'APPLICATION Bac +4<br>
        <span class=\"gradientPurpleFont\">OPEN CLASS ROOMS</span></b><br>
        2020</p>
       
        <p>Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit, 
        quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu, 
        eu mollis tellus. Sed finibus aliquam neque sit amet sodales.</p>
        <div class=\"mt-2\"></div>
        <p><b>DEVELOPPEUR WEB Bac +2<br>
        <span class=\"gradientPurpleFont\">SIMPLON.CO</span></b><br>
        2020</p>
       
        <p>Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit, 
        quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu, 
        eu mollis tellus. Sed finibus aliquam neque sit amet sodales.</p>
        <div class=\"mt-2\"></div>
        <p><b>DESIGNER GRAPHIQUE<br>
        <span class=\"gradientPurpleFont\">IDEM CREATIVE ARTS SCHOOL</span></b><br>
        2014</p>

        <p>Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit, 
        quis consequat nulla effi citur at. Maecenas sed massa</p>
        </div>
    </div>
</div>

<div class=\"container-fluid pb-5\">
    <div class=\"row\">
        <div class=\"col-md-12 text-center color titleColor mt-3 ml-3\">
            <img src=\"{{ asset('images/rosace.png') }}\" alt=\"\" style=\"width:8.5%\" class=\"mb-2\">
            <h4 class=\"titlecolor\"><b>SOME</b> SKILLS.</h4>
            <img src=\"{{ asset('images/trait.png') }}\" alt=\"\" style=\"width:14%\" class=\"mb-2\">
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12 text-center mb-5\">
            <ul class=\"navTabsTech list_js\">
                <li class=\"active\"><a href=\"#tab4\">Front</a></li>
                <li><a href=\"#tab5\">Environnement</a></li>
                <li><a href=\"#tab6\">Back</a></li>
            </ul>
        </div>
    </div>

    <div id=\"tab4\" class=\"boxTech active\">
        <div class=\"row text-center mb-2\">
            <div class=\"col-md-4\"></div>
            <div class=\"col-md-4 flex-wrap iconSkills\">
               <i class=\"fab fa-vuejs\"><p>Vue.Js</p></i>
               <i class=\"fab fa-js-square\"><p>Javascript</p></i>
               <i class=\"fab fa-html5\"><p>Html 5</p></i>
               <i class=\"fab fa-css3-alt\"><p>Css 3</p></i>
               <i class=\"fab fa-bootstrap\"><p>Bootsrap</p></i>
               <i class=\"fab fa-symfony\"><p>Symfony 5</p></i>
               <i class=\"fab fa-react\"><p>React.js</p></i>
            </div>
            <div class=\"col-md-4\"></div>
        </div>
    </div>
    <div id=\"tab5\" class=\"boxTech hide iconSkills\">
        <div class=\"row text-center mb-2\">
            <div class=\"col-md-4\"></div>
            <div class=\"col-md-4 flex-wrap\">
                <i class=\"fab fa-github\"><p>Git</p></i>
                <i class=\"fab fa-unity\"><p>Unity C#</p></i>
                <i class=\"fab fa-trello\"><p>Trello</p></i>
                <i class=\"fab fa-ubuntu\"><p>Ubuntu</p></i>
                <i class=\"fab fa-linux\"><p>Linux</p></i>
                <i class=\"fab fa-windows\"><p>Windows</p></i>
                <i class=\"fab fa-codepen\"><p>Codepen</p></i>
            </div>
            <div class=\"col-md-4\"></div>
        </div>
    </div>
    <div id=\"tab6\" class=\"boxTech hide iconSkills\">
       <div class=\"row text-center mb-2\">
            <div class=\"col-md-4\"></div>
            <div class=\"col-md-4 flex-wrap\">
                <i class=\"fab fa-symfony\"><p>Symfony 5</p></i>
                <i class=\"fab fa-php\"><p>Php</p></i>
                <i class=\"fab fa-node\"><p>Node.js</p></i>
                <i class=\"fas fa-database\"><p>Sql Doctrine</p></i>
                <i class=\"fas fa-project-diagram\"><p>Uml</p></i>
                <i class=\"fas fa-tools\"><p>Ovh</p></i>
            </div>
            <div class=\"col-md-4\"></div>
        </div>
    </div>
</div>



{% include 'contact.html.twig' %}

{% endblock %}

{% block javascripts %}

<script>

//--------Display hide cards----------//

\$(document).ready(function() {
    \$('.navTabs > li > a').click(function(event) {
    event.preventDefault();

    //get displaying tab content jQuery selector
    let activeTabsSelector = \$('.navTabs > li.active > a').attr('href');

    //find active tabs and remove 'active'
    let activedNav = \$('.navTabs > li.active');
    activedNav.removeClass('active');

    //add 'active' into clicked navigation
    \$(this).parents('li').addClass('active');

    //hide displaying tab content
    \$(activeTabsSelector).removeClass('active');
    \$(activeTabsSelector).addClass('hide');

    //show target tab content
    let targetTabsSelector = \$(this).attr('href');
    \$(targetTabsSelector).removeClass('hide');
    \$(targetTabsSelector).addClass('active');
    });
});

\$(document).ready(function() {
    \$('.navTabsTech > li > a').click(function(event) {
    event.preventDefault();

    //get displaying tab content jQuery selector
    let activeTabsSelector = \$('.navTabsTech > li.active > a').attr('href');

    //find actived navigation and remove 'active' css
    let activedNav = \$('.navTabsTech > li.active');
    activedNav.removeClass('active');

    //add 'active' css into clicked navigation
    \$(this).parents('li').addClass('active');

    //hide displaying tab content
    \$(activeTabsSelector).removeClass('active');
    \$(activeTabsSelector).addClass('hide');

    //show target tab content
    let targetTabsSelector = \$(this).attr('href');
    \$(targetTabsSelector).removeClass('hide');
    \$(targetTabsSelector).addClass('active');
    });
});

//-----------display hide infos from a card project------------//
 
{# let i = 0;

var el = document.querySelector('.projectCard');

console.log(el.dataset.post)
\$( document ).ready(function() {
    
        \$('.teste' + el.dataset.post).hover(
            
            function() {
                \$('#infoProject' + el.dataset.post).fadeIn();
            }, 
            function() {
                \$('#infoProject' + el.dataset.post).fadeOut();
            }
        );
    
}); #}
//END SCRIPT JS//
</script>

{% endblock %}", "home.html.twig", "B:\\dev stuff\\portfolio_symfony\\templates\\home.html.twig");
    }
}
