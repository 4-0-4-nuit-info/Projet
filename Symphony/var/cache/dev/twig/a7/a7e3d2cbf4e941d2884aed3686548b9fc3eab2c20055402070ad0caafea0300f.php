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
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b195dbaf617940d0b1a55bda3e7678783f24f6cc9a550017cda819dbad3300d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b195dbaf617940d0b1a55bda3e7678783f24f6cc9a550017cda819dbad3300d->enter($__internal_5b195dbaf617940d0b1a55bda3e7678783f24f6cc9a550017cda819dbad3300d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/urgences.html.twig"));

        $__internal_b708ca8c5d5391c71de71d2f0f14ce9cf14a1d7e6824d4f6fb2605542590a528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b708ca8c5d5391c71de71d2f0f14ce9cf14a1d7e6824d4f6fb2605542590a528->enter($__internal_b708ca8c5d5391c71de71d2f0f14ce9cf14a1d7e6824d4f6fb2605542590a528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/urgences.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b195dbaf617940d0b1a55bda3e7678783f24f6cc9a550017cda819dbad3300d->leave($__internal_5b195dbaf617940d0b1a55bda3e7678783f24f6cc9a550017cda819dbad3300d_prof);

        
        $__internal_b708ca8c5d5391c71de71d2f0f14ce9cf14a1d7e6824d4f6fb2605542590a528->leave($__internal_b708ca8c5d5391c71de71d2f0f14ce9cf14a1d7e6824d4f6fb2605542590a528_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ff32aed1ff5dd4cf1ac7fa2daf65d3496b10a9c35113adc6fc1c53c26b8fea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ff32aed1ff5dd4cf1ac7fa2daf65d3496b10a9c35113adc6fc1c53c26b8fea0->enter($__internal_1ff32aed1ff5dd4cf1ac7fa2daf65d3496b10a9c35113adc6fc1c53c26b8fea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_142247ae38fca2fba7076524682947b3d2776f888546c76ce51b2bca06ae52a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_142247ae38fca2fba7076524682947b3d2776f888546c76ce51b2bca06ae52a4->enter($__internal_142247ae38fca2fba7076524682947b3d2776f888546c76ce51b2bca06ae52a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container-fluid text-center\">    
  <div class=\"row content\"  id=\"page\">
    <div class=\"col-sm-2 sidenav\">
      <div class=\"calendrier\"><a href=\"#\" style=\"color: black\">...</a></div>
    </div>
    <div class=\"col-sm-8 text-left\"> 
      <h1>Welcome</h1>
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
        
        $__internal_142247ae38fca2fba7076524682947b3d2776f888546c76ce51b2bca06ae52a4->leave($__internal_142247ae38fca2fba7076524682947b3d2776f888546c76ce51b2bca06ae52a4_prof);

        
        $__internal_1ff32aed1ff5dd4cf1ac7fa2daf65d3496b10a9c35113adc6fc1c53c26b8fea0->leave($__internal_1ff32aed1ff5dd4cf1ac7fa2daf65d3496b10a9c35113adc6fc1c53c26b8fea0_prof);

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
  <div class=\"row content\"  id=\"page\">
    <div class=\"col-sm-2 sidenav\">
      <div class=\"calendrier\"><a href=\"#\" style=\"color: black\">...</a></div>
    </div>
    <div class=\"col-sm-8 text-left\"> 
      <h1>Welcome</h1>
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
{% endblock %}", "default/urgences.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\app\\Resources\\views\\default\\urgences.html.twig");
    }
}
