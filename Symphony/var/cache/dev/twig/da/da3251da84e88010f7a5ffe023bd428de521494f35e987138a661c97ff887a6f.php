<?php

/* default/calendrier.html.twig */
class __TwigTemplate_768f30d899a26788ddc75ca9cb1ea31027be6f6edbe82fdd2e6dc5599e34e912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/calendrier.html.twig", 1);
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
        $__internal_af0f23aad6032db63e28a915d91a48863929ec1253a4856e3f2cc2dcf3a42bd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af0f23aad6032db63e28a915d91a48863929ec1253a4856e3f2cc2dcf3a42bd8->enter($__internal_af0f23aad6032db63e28a915d91a48863929ec1253a4856e3f2cc2dcf3a42bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/calendrier.html.twig"));

        $__internal_d682185497a3e8087b4c4f1efff13b5e179455ce9650e1bd62fd7f463eb5f061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d682185497a3e8087b4c4f1efff13b5e179455ce9650e1bd62fd7f463eb5f061->enter($__internal_d682185497a3e8087b4c4f1efff13b5e179455ce9650e1bd62fd7f463eb5f061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/calendrier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af0f23aad6032db63e28a915d91a48863929ec1253a4856e3f2cc2dcf3a42bd8->leave($__internal_af0f23aad6032db63e28a915d91a48863929ec1253a4856e3f2cc2dcf3a42bd8_prof);

        
        $__internal_d682185497a3e8087b4c4f1efff13b5e179455ce9650e1bd62fd7f463eb5f061->leave($__internal_d682185497a3e8087b4c4f1efff13b5e179455ce9650e1bd62fd7f463eb5f061_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ce05a8323d1448097ca951af417b63cb814ffa89defd392ba8d072b20ad2c03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ce05a8323d1448097ca951af417b63cb814ffa89defd392ba8d072b20ad2c03->enter($__internal_7ce05a8323d1448097ca951af417b63cb814ffa89defd392ba8d072b20ad2c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41d3bf77f91e9aa2261ef50280276ef8177b509dc8f78605a7930f3ae20aed7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d3bf77f91e9aa2261ef50280276ef8177b509dc8f78605a7930f3ae20aed7f->enter($__internal_41d3bf77f91e9aa2261ef50280276ef8177b509dc8f78605a7930f3ae20aed7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container-fluid text-center\">    
  <div class=\"row content\" id=\"page\">
    <div class=\"col-sm-2 sidenav\">
      <div class=\"calendrier\"><a href=\"#\" style=\"color: black\">...</a></div>
    </div>
    <div class=\"col-sm-8 text-left\"> 
      <h1>Bienvenue</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
    </div>
    <div class=\"col-sm-2 sidenav\">
      <div class=\"well\">
        <p>ADS</p>
      </div>
      <div class=\"well\">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_41d3bf77f91e9aa2261ef50280276ef8177b509dc8f78605a7930f3ae20aed7f->leave($__internal_41d3bf77f91e9aa2261ef50280276ef8177b509dc8f78605a7930f3ae20aed7f_prof);

        
        $__internal_7ce05a8323d1448097ca951af417b63cb814ffa89defd392ba8d072b20ad2c03->leave($__internal_7ce05a8323d1448097ca951af417b63cb814ffa89defd392ba8d072b20ad2c03_prof);

    }

    public function getTemplateName()
    {
        return "default/calendrier.html.twig";
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
    <div class=\"col-sm-2 sidenav\">
      <div class=\"calendrier\"><a href=\"#\" style=\"color: black\">...</a></div>
    </div>
    <div class=\"col-sm-8 text-left\"> 
      <h1>Bienvenue</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
    </div>
    <div class=\"col-sm-2 sidenav\">
      <div class=\"well\">
        <p>ADS</p>
      </div>
      <div class=\"well\">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "default/calendrier.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\app\\Resources\\views\\default\\calendrier.html.twig");
    }
}
