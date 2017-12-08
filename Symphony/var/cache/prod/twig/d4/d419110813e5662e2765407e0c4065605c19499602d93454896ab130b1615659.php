<?php

/* default/urgences.html.twig */
class __TwigTemplate_769ea3f386e836972c8957656ad19f7ffa574bc81d3525f61bebf64995e21215 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/urgences.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container-fluid innerHTML-center\">    
  <div class=\"row content\"  id=\"page\">
    <div class=\"col-sm-2 sidenav\">
      <div class=\"calendrier\"><a href=\"#\">...</a></div>
    </div>
    <div class=\"col-sm-8 innerHTML-left\"> 
      <h1>Urgence</h1>
\t  <h2>Etapes à suivre</h2>
\t  <p>Vous venez de rencontrer un problème ou d'assister à un accident ? <br /> 
\t  Suivez les quelques questions afin de savoir comment réagir.<br /><br /></p>
      <div id=\"questionnaire\">
\t<b><div id=\"question\"></div></b>
\t<div id=\"reponse\"></div>
\t<br /> <br />
\t<b><div id=\"question2\"></div></b>
\t<div id=\"reponse2\"></div>
\t<b><div id=\"question3\"></div></b>
\t<div id=\"reponse3\"></div>
\t<div id=\"boutons\">
\t<input type=\"button\" value=\"oui\" id=\"oui\" onclick=\"questionnaireOui()\"></input>
\t<input type=\"button\" value=\"non\" id=\"non\" onclick=\"questionnaireNon()\"></input></div><br /><br />
\t
\t</div>
\t<h2><font color=\"red\"><b>Pour un nouvel essai, rechargez la page</b></font></h2>
\t\t</div> 
\t  
<div class=\"container-fluid text-center\">    
  <div class=\"row content\" id=\"page\">
    <div class=\"col-sm-8 text-left\"> 
      <h1>Bienvenue</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
    </div>
    </div>
  </div>
 
</div></div>";
    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/urgences.js"), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "default/urgences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 41,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/urgences.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\app\\Resources\\views\\default\\urgences.html.twig");
    }
}
