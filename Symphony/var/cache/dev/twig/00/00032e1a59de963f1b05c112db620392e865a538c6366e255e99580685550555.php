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
        $__internal_e8bc9ad98c899379bbeb0c917af5892c9e87b5b72f3341183ae64b973a6b74e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8bc9ad98c899379bbeb0c917af5892c9e87b5b72f3341183ae64b973a6b74e3->enter($__internal_e8bc9ad98c899379bbeb0c917af5892c9e87b5b72f3341183ae64b973a6b74e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        $__internal_6b7b4fe9935340a611011f5f27797ed56a2770155b2006b1e065007f941ffbab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7b4fe9935340a611011f5f27797ed56a2770155b2006b1e065007f941ffbab->enter($__internal_6b7b4fe9935340a611011f5f27797ed56a2770155b2006b1e065007f941ffbab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8bc9ad98c899379bbeb0c917af5892c9e87b5b72f3341183ae64b973a6b74e3->leave($__internal_e8bc9ad98c899379bbeb0c917af5892c9e87b5b72f3341183ae64b973a6b74e3_prof);

        
        $__internal_6b7b4fe9935340a611011f5f27797ed56a2770155b2006b1e065007f941ffbab->leave($__internal_6b7b4fe9935340a611011f5f27797ed56a2770155b2006b1e065007f941ffbab_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9913645560f62957dbe217b90f285c82a78c75d928067617e2af5d074395430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9913645560f62957dbe217b90f285c82a78c75d928067617e2af5d074395430->enter($__internal_d9913645560f62957dbe217b90f285c82a78c75d928067617e2af5d074395430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_02129b615d8242456c7c6a18446e9eb71678f209530369d9345f75e51c561d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02129b615d8242456c7c6a18446e9eb71678f209530369d9345f75e51c561d2d->enter($__internal_02129b615d8242456c7c6a18446e9eb71678f209530369d9345f75e51c561d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_02129b615d8242456c7c6a18446e9eb71678f209530369d9345f75e51c561d2d->leave($__internal_02129b615d8242456c7c6a18446e9eb71678f209530369d9345f75e51c561d2d_prof);

        
        $__internal_d9913645560f62957dbe217b90f285c82a78c75d928067617e2af5d074395430->leave($__internal_d9913645560f62957dbe217b90f285c82a78c75d928067617e2af5d074395430_prof);

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
{% endblock %}", "default/accueil.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\app\\Resources\\views\\default\\accueil.html.twig");
    }
}
