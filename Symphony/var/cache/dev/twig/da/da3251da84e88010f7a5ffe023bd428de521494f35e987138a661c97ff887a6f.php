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
        $__internal_3ee061b0671055a27d98dc3c91ff9b802ebc90bba18e7cab0f0b90bfe64544ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee061b0671055a27d98dc3c91ff9b802ebc90bba18e7cab0f0b90bfe64544ba->enter($__internal_3ee061b0671055a27d98dc3c91ff9b802ebc90bba18e7cab0f0b90bfe64544ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/calendrier.html.twig"));

        $__internal_fe3dfab42a03ea7020e620a9e971f450b5795d09b0d02809b090066fbb6d83f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe3dfab42a03ea7020e620a9e971f450b5795d09b0d02809b090066fbb6d83f8->enter($__internal_fe3dfab42a03ea7020e620a9e971f450b5795d09b0d02809b090066fbb6d83f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/calendrier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ee061b0671055a27d98dc3c91ff9b802ebc90bba18e7cab0f0b90bfe64544ba->leave($__internal_3ee061b0671055a27d98dc3c91ff9b802ebc90bba18e7cab0f0b90bfe64544ba_prof);

        
        $__internal_fe3dfab42a03ea7020e620a9e971f450b5795d09b0d02809b090066fbb6d83f8->leave($__internal_fe3dfab42a03ea7020e620a9e971f450b5795d09b0d02809b090066fbb6d83f8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a83acbaccbf3436346bfd9c0bec17aa4ef2f38f9899f0c76c9082a470698f68b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a83acbaccbf3436346bfd9c0bec17aa4ef2f38f9899f0c76c9082a470698f68b->enter($__internal_a83acbaccbf3436346bfd9c0bec17aa4ef2f38f9899f0c76c9082a470698f68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa944cb1f258a658078eab087861459e74befc2f4b0168d5a9e89377235f668a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa944cb1f258a658078eab087861459e74befc2f4b0168d5a9e89377235f668a->enter($__internal_aa944cb1f258a658078eab087861459e74befc2f4b0168d5a9e89377235f668a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container-fluid text-center\">    
  <div class=\"row content\" id=\"page\">

    <div class=\"col-sm-8 text-left\"> 
      <h1>Bienvenue</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
    </div>
    </div>
</div>
";
        
        $__internal_aa944cb1f258a658078eab087861459e74befc2f4b0168d5a9e89377235f668a->leave($__internal_aa944cb1f258a658078eab087861459e74befc2f4b0168d5a9e89377235f668a_prof);

        
        $__internal_a83acbaccbf3436346bfd9c0bec17aa4ef2f38f9899f0c76c9082a470698f68b->leave($__internal_a83acbaccbf3436346bfd9c0bec17aa4ef2f38f9899f0c76c9082a470698f68b_prof);

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

    <div class=\"col-sm-8 text-left\"> 
      <h1>Bienvenue</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
    </div>
    </div>
</div>
{% endblock %}
", "default/calendrier.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\app\\Resources\\views\\default\\calendrier.html.twig");
    }
}
