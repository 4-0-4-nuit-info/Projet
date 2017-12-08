<?php

/* default/prevenir.html.twig */
class __TwigTemplate_85940dad65f4161e7c0324e0f7370abb4b699e107eb608f0f1eb4e05bcb85133 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/prevenir.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9455427a356f67134ed044408b00188e7685b38a54e88d8f803a2e271177326a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9455427a356f67134ed044408b00188e7685b38a54e88d8f803a2e271177326a->enter($__internal_9455427a356f67134ed044408b00188e7685b38a54e88d8f803a2e271177326a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/prevenir.html.twig"));

        $__internal_1ff7c2a5706a3c386fe243ee196c1dc6b073376f65613d9cb7d066437850a9f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff7c2a5706a3c386fe243ee196c1dc6b073376f65613d9cb7d066437850a9f7->enter($__internal_1ff7c2a5706a3c386fe243ee196c1dc6b073376f65613d9cb7d066437850a9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/prevenir.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9455427a356f67134ed044408b00188e7685b38a54e88d8f803a2e271177326a->leave($__internal_9455427a356f67134ed044408b00188e7685b38a54e88d8f803a2e271177326a_prof);

        
        $__internal_1ff7c2a5706a3c386fe243ee196c1dc6b073376f65613d9cb7d066437850a9f7->leave($__internal_1ff7c2a5706a3c386fe243ee196c1dc6b073376f65613d9cb7d066437850a9f7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc6d23c6f73e6faebe99a9a508914f4085da6579e3ce5ec428429d18d493a6a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc6d23c6f73e6faebe99a9a508914f4085da6579e3ce5ec428429d18d493a6a9->enter($__internal_cc6d23c6f73e6faebe99a9a508914f4085da6579e3ce5ec428429d18d493a6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1676b14daad58185acc681c8d3f8e6da6707f2841ac5977eb0dd99b6159a35e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1676b14daad58185acc681c8d3f8e6da6707f2841ac5977eb0dd99b6159a35e6->enter($__internal_1676b14daad58185acc681c8d3f8e6da6707f2841ac5977eb0dd99b6159a35e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container-fluid text-center\">    
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
        
        $__internal_1676b14daad58185acc681c8d3f8e6da6707f2841ac5977eb0dd99b6159a35e6->leave($__internal_1676b14daad58185acc681c8d3f8e6da6707f2841ac5977eb0dd99b6159a35e6_prof);

        
        $__internal_cc6d23c6f73e6faebe99a9a508914f4085da6579e3ce5ec428429d18d493a6a9->leave($__internal_cc6d23c6f73e6faebe99a9a508914f4085da6579e3ce5ec428429d18d493a6a9_prof);

    }

    public function getTemplateName()
    {
        return "default/prevenir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
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
", "default/prevenir.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\app\\Resources\\views\\default\\prevenir.html.twig");
    }
}
