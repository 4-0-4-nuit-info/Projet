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
        $__internal_c10ab969a8cca1ecb8df6549dde789335d77c42dfde0054898bd258e13626a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c10ab969a8cca1ecb8df6549dde789335d77c42dfde0054898bd258e13626a91->enter($__internal_c10ab969a8cca1ecb8df6549dde789335d77c42dfde0054898bd258e13626a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contact.html.twig"));

        $__internal_857b489a1e9b34ebecbfddb7f3e469a7d65b1d9628a5e0a600cbc2b9641bc8bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_857b489a1e9b34ebecbfddb7f3e469a7d65b1d9628a5e0a600cbc2b9641bc8bc->enter($__internal_857b489a1e9b34ebecbfddb7f3e469a7d65b1d9628a5e0a600cbc2b9641bc8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c10ab969a8cca1ecb8df6549dde789335d77c42dfde0054898bd258e13626a91->leave($__internal_c10ab969a8cca1ecb8df6549dde789335d77c42dfde0054898bd258e13626a91_prof);

        
        $__internal_857b489a1e9b34ebecbfddb7f3e469a7d65b1d9628a5e0a600cbc2b9641bc8bc->leave($__internal_857b489a1e9b34ebecbfddb7f3e469a7d65b1d9628a5e0a600cbc2b9641bc8bc_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b742e284640d720c5bf54806a43c091c9b913f24266e681d3372f609eaa31c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b742e284640d720c5bf54806a43c091c9b913f24266e681d3372f609eaa31c2b->enter($__internal_b742e284640d720c5bf54806a43c091c9b913f24266e681d3372f609eaa31c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1bb4c710feeed6774094aba0d8d954f13e9b7cc80ff91e670307ba0908040172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb4c710feeed6774094aba0d8d954f13e9b7cc80ff91e670307ba0908040172->enter($__internal_1bb4c710feeed6774094aba0d8d954f13e9b7cc80ff91e670307ba0908040172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container-fluid text-center\">    
  <div class=\"row content\"  id=\"page\">
    <div class=\"col-sm-2 sidenav\">
      <div class=\"calendrier\"><a href=\"#\" style=\"color: black\">...</a></div>
    </div>
    <div class=\"col-sm-8 text-left\"> 
      <h1>Nous contacter</h1>
      
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
        
        $__internal_1bb4c710feeed6774094aba0d8d954f13e9b7cc80ff91e670307ba0908040172->leave($__internal_1bb4c710feeed6774094aba0d8d954f13e9b7cc80ff91e670307ba0908040172_prof);

        
        $__internal_b742e284640d720c5bf54806a43c091c9b913f24266e681d3372f609eaa31c2b->leave($__internal_b742e284640d720c5bf54806a43c091c9b913f24266e681d3372f609eaa31c2b_prof);

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
  <div class=\"row content\"  id=\"page\">
    <div class=\"col-sm-2 sidenav\">
      <div class=\"calendrier\"><a href=\"#\" style=\"color: black\">...</a></div>
    </div>
    <div class=\"col-sm-8 text-left\"> 
      <h1>Nous contacter</h1>
      
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
", "default/contact.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\app\\Resources\\views\\default\\contact.html.twig");
    }
}
