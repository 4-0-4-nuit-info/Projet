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
        $__internal_7b7bedfa1cea671573da053704b75ea5fd6243c1ac83e1ed1ecab39ae0e777fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b7bedfa1cea671573da053704b75ea5fd6243c1ac83e1ed1ecab39ae0e777fc->enter($__internal_7b7bedfa1cea671573da053704b75ea5fd6243c1ac83e1ed1ecab39ae0e777fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/prevenir.html.twig"));

        $__internal_181dec967e9a63047365901c9a0b9224420e5cbd6dd32c9b3dc2715c0757f22e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_181dec967e9a63047365901c9a0b9224420e5cbd6dd32c9b3dc2715c0757f22e->enter($__internal_181dec967e9a63047365901c9a0b9224420e5cbd6dd32c9b3dc2715c0757f22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/prevenir.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b7bedfa1cea671573da053704b75ea5fd6243c1ac83e1ed1ecab39ae0e777fc->leave($__internal_7b7bedfa1cea671573da053704b75ea5fd6243c1ac83e1ed1ecab39ae0e777fc_prof);

        
        $__internal_181dec967e9a63047365901c9a0b9224420e5cbd6dd32c9b3dc2715c0757f22e->leave($__internal_181dec967e9a63047365901c9a0b9224420e5cbd6dd32c9b3dc2715c0757f22e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_499d90035ea5fdd5908b932df945c2831229b4ad58ca8d4d6136d2fdaaa0055c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_499d90035ea5fdd5908b932df945c2831229b4ad58ca8d4d6136d2fdaaa0055c->enter($__internal_499d90035ea5fdd5908b932df945c2831229b4ad58ca8d4d6136d2fdaaa0055c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20087cb0010becd769ec7f86d68e485b68ea03937eb2b5821342950658b5ce67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20087cb0010becd769ec7f86d68e485b68ea03937eb2b5821342950658b5ce67->enter($__internal_20087cb0010becd769ec7f86d68e485b68ea03937eb2b5821342950658b5ce67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
</div>
";
        
        $__internal_20087cb0010becd769ec7f86d68e485b68ea03937eb2b5821342950658b5ce67->leave($__internal_20087cb0010becd769ec7f86d68e485b68ea03937eb2b5821342950658b5ce67_prof);

        
        $__internal_499d90035ea5fdd5908b932df945c2831229b4ad58ca8d4d6136d2fdaaa0055c->leave($__internal_499d90035ea5fdd5908b932df945c2831229b4ad58ca8d4d6136d2fdaaa0055c_prof);

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
    <div class=\"col-sm-8 text-left\"> 
      <h1>Bienvenue</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
    </div>

    </div>
  </div>
</div>
{% endblock %}
", "default/prevenir.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\app\\Resources\\views\\default\\prevenir.html.twig");
    }
}
