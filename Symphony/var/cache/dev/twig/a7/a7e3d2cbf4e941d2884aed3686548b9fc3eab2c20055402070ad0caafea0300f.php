<?php

/* default/urgences.html.twig */
class __TwigTemplate_33def59b4147e7e70e298b79b0fb55de712670fdd7e992912510f2349725bf72 extends Twig_Template
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
        $__internal_a03e8cb16d00718ca5d37b42d8a99f7eae83e46134787e671c9aa1db35718315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a03e8cb16d00718ca5d37b42d8a99f7eae83e46134787e671c9aa1db35718315->enter($__internal_a03e8cb16d00718ca5d37b42d8a99f7eae83e46134787e671c9aa1db35718315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/urgences.html.twig"));

        $__internal_eced6110006374e6dc709434540151b505a55e8d98d51e802daed8b820d087a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eced6110006374e6dc709434540151b505a55e8d98d51e802daed8b820d087a7->enter($__internal_eced6110006374e6dc709434540151b505a55e8d98d51e802daed8b820d087a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/urgences.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a03e8cb16d00718ca5d37b42d8a99f7eae83e46134787e671c9aa1db35718315->leave($__internal_a03e8cb16d00718ca5d37b42d8a99f7eae83e46134787e671c9aa1db35718315_prof);

        
        $__internal_eced6110006374e6dc709434540151b505a55e8d98d51e802daed8b820d087a7->leave($__internal_eced6110006374e6dc709434540151b505a55e8d98d51e802daed8b820d087a7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e81b3bdab1a7bab6af47622e18f9727a647b863290c71392cba606046d78eafd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e81b3bdab1a7bab6af47622e18f9727a647b863290c71392cba606046d78eafd->enter($__internal_e81b3bdab1a7bab6af47622e18f9727a647b863290c71392cba606046d78eafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1fee286bd503fdfa47bcee1fc062cba0ce4845ee5dadc32fc689053ff25ebeea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fee286bd503fdfa47bcee1fc062cba0ce4845ee5dadc32fc689053ff25ebeea->enter($__internal_1fee286bd503fdfa47bcee1fc062cba0ce4845ee5dadc32fc689053ff25ebeea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1fee286bd503fdfa47bcee1fc062cba0ce4845ee5dadc32fc689053ff25ebeea->leave($__internal_1fee286bd503fdfa47bcee1fc062cba0ce4845ee5dadc32fc689053ff25ebeea_prof);

        
        $__internal_e81b3bdab1a7bab6af47622e18f9727a647b863290c71392cba606046d78eafd->leave($__internal_e81b3bdab1a7bab6af47622e18f9727a647b863290c71392cba606046d78eafd_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_20a004fbc4f2a7ee24da469979d00cd2e27600302f3bd6904a79776cd67149ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a004fbc4f2a7ee24da469979d00cd2e27600302f3bd6904a79776cd67149ac->enter($__internal_20a004fbc4f2a7ee24da469979d00cd2e27600302f3bd6904a79776cd67149ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c298d4896743684c0b8577736f11740862eb44341366c566588f83c347d849df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c298d4896743684c0b8577736f11740862eb44341366c566588f83c347d849df->enter($__internal_c298d4896743684c0b8577736f11740862eb44341366c566588f83c347d849df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/urgences.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_c298d4896743684c0b8577736f11740862eb44341366c566588f83c347d849df->leave($__internal_c298d4896743684c0b8577736f11740862eb44341366c566588f83c347d849df_prof);

        
        $__internal_20a004fbc4f2a7ee24da469979d00cd2e27600302f3bd6904a79776cd67149ac->leave($__internal_20a004fbc4f2a7ee24da469979d00cd2e27600302f3bd6904a79776cd67149ac_prof);

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
        return array (  96 => 41,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
<div class=\"container-fluid innerHTML-center\">    
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
 
</div></div>{% endblock %}

{% block javascripts %}<script src=\"{{ asset('js/urgences.js') }}\"></script>{% endblock %}
", "default/urgences.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\app\\Resources\\views\\default\\urgences.html.twig");
    }
}
