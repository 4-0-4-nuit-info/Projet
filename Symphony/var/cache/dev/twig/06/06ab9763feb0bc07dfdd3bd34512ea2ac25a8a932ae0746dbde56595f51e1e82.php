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
        $__internal_0242f65afa58fa9b0c36303fd42b4bc2b525e4568a415458313906600339663f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0242f65afa58fa9b0c36303fd42b4bc2b525e4568a415458313906600339663f->enter($__internal_0242f65afa58fa9b0c36303fd42b4bc2b525e4568a415458313906600339663f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/prevenir.html.twig"));

        $__internal_2a324aeff8946b9f8a1400d6bfe2c2b5b8a8966a8158ccb5c5f822bea8892c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a324aeff8946b9f8a1400d6bfe2c2b5b8a8966a8158ccb5c5f822bea8892c4f->enter($__internal_2a324aeff8946b9f8a1400d6bfe2c2b5b8a8966a8158ccb5c5f822bea8892c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/prevenir.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0242f65afa58fa9b0c36303fd42b4bc2b525e4568a415458313906600339663f->leave($__internal_0242f65afa58fa9b0c36303fd42b4bc2b525e4568a415458313906600339663f_prof);

        
        $__internal_2a324aeff8946b9f8a1400d6bfe2c2b5b8a8966a8158ccb5c5f822bea8892c4f->leave($__internal_2a324aeff8946b9f8a1400d6bfe2c2b5b8a8966a8158ccb5c5f822bea8892c4f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3df6e12b7ac517622ce48e1f708fb55cd91c4a3b97cf8b69265c718c6323efd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df6e12b7ac517622ce48e1f708fb55cd91c4a3b97cf8b69265c718c6323efd5->enter($__internal_3df6e12b7ac517622ce48e1f708fb55cd91c4a3b97cf8b69265c718c6323efd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_232fd27bcea200dbc70bf57e96140d591915cfb975bb570ebeac51f05fe3f751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_232fd27bcea200dbc70bf57e96140d591915cfb975bb570ebeac51f05fe3f751->enter($__internal_232fd27bcea200dbc70bf57e96140d591915cfb975bb570ebeac51f05fe3f751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_232fd27bcea200dbc70bf57e96140d591915cfb975bb570ebeac51f05fe3f751->leave($__internal_232fd27bcea200dbc70bf57e96140d591915cfb975bb570ebeac51f05fe3f751_prof);

        
        $__internal_3df6e12b7ac517622ce48e1f708fb55cd91c4a3b97cf8b69265c718c6323efd5->leave($__internal_3df6e12b7ac517622ce48e1f708fb55cd91c4a3b97cf8b69265c718c6323efd5_prof);

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
{% endblock %}
", "default/prevenir.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\app\\Resources\\views\\default\\prevenir.html.twig");
    }
}
