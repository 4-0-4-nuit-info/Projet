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
        $__internal_a4dcf1b0e167daf4ea7dbb37c2e35b36a6a18af5d45a587214067e93bf5ec345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4dcf1b0e167daf4ea7dbb37c2e35b36a6a18af5d45a587214067e93bf5ec345->enter($__internal_a4dcf1b0e167daf4ea7dbb37c2e35b36a6a18af5d45a587214067e93bf5ec345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/calendrier.html.twig"));

        $__internal_e483d6b4a3fd91adc69fbe1a1cc2461850bbda15f0788ac0138c39d27fd676f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e483d6b4a3fd91adc69fbe1a1cc2461850bbda15f0788ac0138c39d27fd676f5->enter($__internal_e483d6b4a3fd91adc69fbe1a1cc2461850bbda15f0788ac0138c39d27fd676f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/calendrier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4dcf1b0e167daf4ea7dbb37c2e35b36a6a18af5d45a587214067e93bf5ec345->leave($__internal_a4dcf1b0e167daf4ea7dbb37c2e35b36a6a18af5d45a587214067e93bf5ec345_prof);

        
        $__internal_e483d6b4a3fd91adc69fbe1a1cc2461850bbda15f0788ac0138c39d27fd676f5->leave($__internal_e483d6b4a3fd91adc69fbe1a1cc2461850bbda15f0788ac0138c39d27fd676f5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b2b701acb76cbae41800af25337a01b1440695b2e8653125162a1c3e106e36d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b2b701acb76cbae41800af25337a01b1440695b2e8653125162a1c3e106e36d->enter($__internal_0b2b701acb76cbae41800af25337a01b1440695b2e8653125162a1c3e106e36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c40cedd362b4347b381bd4f4d889ba46607090742a5924741784983ff1763760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40cedd362b4347b381bd4f4d889ba46607090742a5924741784983ff1763760->enter($__internal_c40cedd362b4347b381bd4f4d889ba46607090742a5924741784983ff1763760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c40cedd362b4347b381bd4f4d889ba46607090742a5924741784983ff1763760->leave($__internal_c40cedd362b4347b381bd4f4d889ba46607090742a5924741784983ff1763760_prof);

        
        $__internal_0b2b701acb76cbae41800af25337a01b1440695b2e8653125162a1c3e106e36d->leave($__internal_0b2b701acb76cbae41800af25337a01b1440695b2e8653125162a1c3e106e36d_prof);

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
", "default/calendrier.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\app\\Resources\\views\\default\\calendrier.html.twig");
    }
}
