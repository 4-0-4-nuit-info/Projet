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
        $__internal_e7c2b4a37dd197429afddaf89e044b693a505302ff44efb4b71bfd2263f10141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7c2b4a37dd197429afddaf89e044b693a505302ff44efb4b71bfd2263f10141->enter($__internal_e7c2b4a37dd197429afddaf89e044b693a505302ff44efb4b71bfd2263f10141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/prevenir.html.twig"));

        $__internal_beb12fc0b92bdfa1bd64ce2e7115a80d4c5341212d1aec349bbab0f946e956b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb12fc0b92bdfa1bd64ce2e7115a80d4c5341212d1aec349bbab0f946e956b7->enter($__internal_beb12fc0b92bdfa1bd64ce2e7115a80d4c5341212d1aec349bbab0f946e956b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/prevenir.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7c2b4a37dd197429afddaf89e044b693a505302ff44efb4b71bfd2263f10141->leave($__internal_e7c2b4a37dd197429afddaf89e044b693a505302ff44efb4b71bfd2263f10141_prof);

        
        $__internal_beb12fc0b92bdfa1bd64ce2e7115a80d4c5341212d1aec349bbab0f946e956b7->leave($__internal_beb12fc0b92bdfa1bd64ce2e7115a80d4c5341212d1aec349bbab0f946e956b7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ee0f21b7d9eae0c5b0e27aad30d794cfe8df640a23e9daf58ba6699c8cb2350 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ee0f21b7d9eae0c5b0e27aad30d794cfe8df640a23e9daf58ba6699c8cb2350->enter($__internal_6ee0f21b7d9eae0c5b0e27aad30d794cfe8df640a23e9daf58ba6699c8cb2350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_670177f3a420d3c93ed326a905b21ab9607d90eefa1cdcb9ae44da834bc46c64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_670177f3a420d3c93ed326a905b21ab9607d90eefa1cdcb9ae44da834bc46c64->enter($__internal_670177f3a420d3c93ed326a905b21ab9607d90eefa1cdcb9ae44da834bc46c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
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
";
        
        $__internal_670177f3a420d3c93ed326a905b21ab9607d90eefa1cdcb9ae44da834bc46c64->leave($__internal_670177f3a420d3c93ed326a905b21ab9607d90eefa1cdcb9ae44da834bc46c64_prof);

        
        $__internal_6ee0f21b7d9eae0c5b0e27aad30d794cfe8df640a23e9daf58ba6699c8cb2350->leave($__internal_6ee0f21b7d9eae0c5b0e27aad30d794cfe8df640a23e9daf58ba6699c8cb2350_prof);

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
