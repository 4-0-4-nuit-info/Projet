<?php

/* default/accueil.html.twig */
class __TwigTemplate_5f761338dfcffb22d6f7efb0859795e90aae518fd4d8fa463a8547f0c98d26da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/accueil.html.twig", 1);
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
        $__internal_c8d6c2ee822fe44b57d34359e231c0b449d571b81d1b49b0b46dcb7f3b204993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d6c2ee822fe44b57d34359e231c0b449d571b81d1b49b0b46dcb7f3b204993->enter($__internal_c8d6c2ee822fe44b57d34359e231c0b449d571b81d1b49b0b46dcb7f3b204993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        $__internal_d79190dca61d6b7304d8265b4326f2e63dbbaf5d8fe4d01771d1d8e7034e2a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d79190dca61d6b7304d8265b4326f2e63dbbaf5d8fe4d01771d1d8e7034e2a19->enter($__internal_d79190dca61d6b7304d8265b4326f2e63dbbaf5d8fe4d01771d1d8e7034e2a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8d6c2ee822fe44b57d34359e231c0b449d571b81d1b49b0b46dcb7f3b204993->leave($__internal_c8d6c2ee822fe44b57d34359e231c0b449d571b81d1b49b0b46dcb7f3b204993_prof);

        
        $__internal_d79190dca61d6b7304d8265b4326f2e63dbbaf5d8fe4d01771d1d8e7034e2a19->leave($__internal_d79190dca61d6b7304d8265b4326f2e63dbbaf5d8fe4d01771d1d8e7034e2a19_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9f61b991ffcbf0759ae4d94d49f63429111a135eeeacc627f2eef9b6194764b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9f61b991ffcbf0759ae4d94d49f63429111a135eeeacc627f2eef9b6194764b->enter($__internal_e9f61b991ffcbf0759ae4d94d49f63429111a135eeeacc627f2eef9b6194764b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_851dcf613fd7bc29058919850ddb3624fd78ca5991fa79d165ad6b4990accf31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_851dcf613fd7bc29058919850ddb3624fd78ca5991fa79d165ad6b4990accf31->enter($__internal_851dcf613fd7bc29058919850ddb3624fd78ca5991fa79d165ad6b4990accf31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_851dcf613fd7bc29058919850ddb3624fd78ca5991fa79d165ad6b4990accf31->leave($__internal_851dcf613fd7bc29058919850ddb3624fd78ca5991fa79d165ad6b4990accf31_prof);

        
        $__internal_e9f61b991ffcbf0759ae4d94d49f63429111a135eeeacc627f2eef9b6194764b->leave($__internal_e9f61b991ffcbf0759ae4d94d49f63429111a135eeeacc627f2eef9b6194764b_prof);

    }

    public function getTemplateName()
    {
        return "default/accueil.html.twig";
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
", "default/accueil.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\app\\Resources\\views\\default\\accueil.html.twig");
    }
}
