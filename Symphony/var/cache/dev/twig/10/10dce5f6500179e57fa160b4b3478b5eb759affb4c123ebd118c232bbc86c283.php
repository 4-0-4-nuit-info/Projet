<?php

/* default/contact.html.twig */
class __TwigTemplate_ed1f91339e5b0f82f8b03e1f65c8d320f1ca6dba38fa6b9840777c4f6c15d0c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/contact.html.twig", 1);
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
        $__internal_ec2df9261b15c354dca54513ef2d99ecfc2601e303af5c823df35d123672b3e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec2df9261b15c354dca54513ef2d99ecfc2601e303af5c823df35d123672b3e0->enter($__internal_ec2df9261b15c354dca54513ef2d99ecfc2601e303af5c823df35d123672b3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contact.html.twig"));

        $__internal_ee03f4aca260ee72ed100c116ae71cb5ef055561799b38b97c1ca0c95fedbaf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee03f4aca260ee72ed100c116ae71cb5ef055561799b38b97c1ca0c95fedbaf4->enter($__internal_ee03f4aca260ee72ed100c116ae71cb5ef055561799b38b97c1ca0c95fedbaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec2df9261b15c354dca54513ef2d99ecfc2601e303af5c823df35d123672b3e0->leave($__internal_ec2df9261b15c354dca54513ef2d99ecfc2601e303af5c823df35d123672b3e0_prof);

        
        $__internal_ee03f4aca260ee72ed100c116ae71cb5ef055561799b38b97c1ca0c95fedbaf4->leave($__internal_ee03f4aca260ee72ed100c116ae71cb5ef055561799b38b97c1ca0c95fedbaf4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2087b3715a1c472cc07c855bf06334f8963d5a573e538084b127d07d45c9c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2087b3715a1c472cc07c855bf06334f8963d5a573e538084b127d07d45c9c77->enter($__internal_f2087b3715a1c472cc07c855bf06334f8963d5a573e538084b127d07d45c9c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5fec906c0433bc254d095c0ae0ad581c7df424fff770c77f476b3c98d0b71fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fec906c0433bc254d095c0ae0ad581c7df424fff770c77f476b3c98d0b71fab->enter($__internal_5fec906c0433bc254d095c0ae0ad581c7df424fff770c77f476b3c98d0b71fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5fec906c0433bc254d095c0ae0ad581c7df424fff770c77f476b3c98d0b71fab->leave($__internal_5fec906c0433bc254d095c0ae0ad581c7df424fff770c77f476b3c98d0b71fab_prof);

        
        $__internal_f2087b3715a1c472cc07c855bf06334f8963d5a573e538084b127d07d45c9c77->leave($__internal_f2087b3715a1c472cc07c855bf06334f8963d5a573e538084b127d07d45c9c77_prof);

    }

    public function getTemplateName()
    {
        return "default/contact.html.twig";
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
", "default/contact.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\app\\Resources\\views\\default\\contact.html.twig");
    }
}
