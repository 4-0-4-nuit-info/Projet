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
        $__internal_ebf752a772df7a41c0448124f2c2d179d11346b60dc57c701297d8d9af498c0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebf752a772df7a41c0448124f2c2d179d11346b60dc57c701297d8d9af498c0b->enter($__internal_ebf752a772df7a41c0448124f2c2d179d11346b60dc57c701297d8d9af498c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/urgences.html.twig"));

        $__internal_f4d92ffa16da7dd1907308fab2a786199220ddfd380e318d38bdcddc471441bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d92ffa16da7dd1907308fab2a786199220ddfd380e318d38bdcddc471441bb->enter($__internal_f4d92ffa16da7dd1907308fab2a786199220ddfd380e318d38bdcddc471441bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/urgences.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebf752a772df7a41c0448124f2c2d179d11346b60dc57c701297d8d9af498c0b->leave($__internal_ebf752a772df7a41c0448124f2c2d179d11346b60dc57c701297d8d9af498c0b_prof);

        
        $__internal_f4d92ffa16da7dd1907308fab2a786199220ddfd380e318d38bdcddc471441bb->leave($__internal_f4d92ffa16da7dd1907308fab2a786199220ddfd380e318d38bdcddc471441bb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_62b3d258bc36e0538a65369d97e5d8ea9561bfc8f30e0074eddf5392d2a19809 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62b3d258bc36e0538a65369d97e5d8ea9561bfc8f30e0074eddf5392d2a19809->enter($__internal_62b3d258bc36e0538a65369d97e5d8ea9561bfc8f30e0074eddf5392d2a19809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0376ca798744ced499e475285420ccfaa5d006dd95d67ff50e64ae06ebf5b5a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0376ca798744ced499e475285420ccfaa5d006dd95d67ff50e64ae06ebf5b5a8->enter($__internal_0376ca798744ced499e475285420ccfaa5d006dd95d67ff50e64ae06ebf5b5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t
\t<h2><font color=\"red\"><b>Pour un nouvel essai, rechargez la page</b></font></h2>
\t\t</div>
\t  
<div class=\"container-fluid text-center\">    
  <div class=\"row content\" id=\"page\">
    <div class=\"col-sm-2 sidenav\" id=\"gauche\">
      <!--<div id=\"calendrier\"><a href=\"#\" style=\"color: black\">...</a></div>-->
      <img src=\"image/IMAGE_Gauche.png\" alt=\"logo\"/>
    </div>
    <div class=\"col-sm-8 text-left\"> 
      <h1>Bienvenue</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
    </div>
    <div class=\"col-sm-2 sidenav\" id=\"logo\">
    <img src=\"image/IMAGE_Droite.png\" alt=\"logo\"/>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_0376ca798744ced499e475285420ccfaa5d006dd95d67ff50e64ae06ebf5b5a8->leave($__internal_0376ca798744ced499e475285420ccfaa5d006dd95d67ff50e64ae06ebf5b5a8_prof);

        
        $__internal_62b3d258bc36e0538a65369d97e5d8ea9561bfc8f30e0074eddf5392d2a19809->leave($__internal_62b3d258bc36e0538a65369d97e5d8ea9561bfc8f30e0074eddf5392d2a19809_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_459cb5cf7767e59580aa16753d5bd42444dfd808992b605f22235995744a6e9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_459cb5cf7767e59580aa16753d5bd42444dfd808992b605f22235995744a6e9a->enter($__internal_459cb5cf7767e59580aa16753d5bd42444dfd808992b605f22235995744a6e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_add667cfe8f6f20916db6a0ab43b490ca2566d85a7983a2e7a0c54c8b0fbf818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add667cfe8f6f20916db6a0ab43b490ca2566d85a7983a2e7a0c54c8b0fbf818->enter($__internal_add667cfe8f6f20916db6a0ab43b490ca2566d85a7983a2e7a0c54c8b0fbf818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/urgences.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_add667cfe8f6f20916db6a0ab43b490ca2566d85a7983a2e7a0c54c8b0fbf818->leave($__internal_add667cfe8f6f20916db6a0ab43b490ca2566d85a7983a2e7a0c54c8b0fbf818_prof);

        
        $__internal_459cb5cf7767e59580aa16753d5bd42444dfd808992b605f22235995744a6e9a->leave($__internal_459cb5cf7767e59580aa16753d5bd42444dfd808992b605f22235995744a6e9a_prof);

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
        return array (  103 => 48,  50 => 3,  41 => 2,  11 => 1,);
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
\t
\t<h2><font color=\"red\"><b>Pour un nouvel essai, rechargez la page</b></font></h2>
\t\t</div>
\t  
<div class=\"container-fluid text-center\">    
  <div class=\"row content\" id=\"page\">
    <div class=\"col-sm-2 sidenav\" id=\"gauche\">
      <!--<div id=\"calendrier\"><a href=\"#\" style=\"color: black\">...</a></div>-->
      <img src=\"image/IMAGE_Gauche.png\" alt=\"logo\"/>
    </div>
    <div class=\"col-sm-8 text-left\"> 
      <h1>Bienvenue</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
    </div>
    <div class=\"col-sm-2 sidenav\" id=\"logo\">
    <img src=\"image/IMAGE_Droite.png\" alt=\"logo\"/>
      </div>
    </div>
  </div>
</div>
{% endblock %}

{% block javascripts %}<script src=\"{{ asset('js/urgences.js') }}\"></script>{% endblock %}
", "default/urgences.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\app\\Resources\\views\\default\\urgences.html.twig");
    }
}
