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
        $__internal_5a3a53b9082b744363b36edb18b7594e010b2c8eca45c549bc6235e744de7b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a3a53b9082b744363b36edb18b7594e010b2c8eca45c549bc6235e744de7b25->enter($__internal_5a3a53b9082b744363b36edb18b7594e010b2c8eca45c549bc6235e744de7b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contact.html.twig"));

        $__internal_2e1f74aafb282b87c07550633fa4702cc9019e76e4dc68a29d56041f2964ef63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e1f74aafb282b87c07550633fa4702cc9019e76e4dc68a29d56041f2964ef63->enter($__internal_2e1f74aafb282b87c07550633fa4702cc9019e76e4dc68a29d56041f2964ef63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a3a53b9082b744363b36edb18b7594e010b2c8eca45c549bc6235e744de7b25->leave($__internal_5a3a53b9082b744363b36edb18b7594e010b2c8eca45c549bc6235e744de7b25_prof);

        
        $__internal_2e1f74aafb282b87c07550633fa4702cc9019e76e4dc68a29d56041f2964ef63->leave($__internal_2e1f74aafb282b87c07550633fa4702cc9019e76e4dc68a29d56041f2964ef63_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5d3a311400bcb4a31d9a4d838fc229d5504f575b290aa5464fedfab3ca9db0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5d3a311400bcb4a31d9a4d838fc229d5504f575b290aa5464fedfab3ca9db0d->enter($__internal_f5d3a311400bcb4a31d9a4d838fc229d5504f575b290aa5464fedfab3ca9db0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7fe3ee228d5f9a5e64d09111538df21ec0727251fe29165cd93aaa6883557d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7fe3ee228d5f9a5e64d09111538df21ec0727251fe29165cd93aaa6883557d4->enter($__internal_e7fe3ee228d5f9a5e64d09111538df21ec0727251fe29165cd93aaa6883557d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e7fe3ee228d5f9a5e64d09111538df21ec0727251fe29165cd93aaa6883557d4->leave($__internal_e7fe3ee228d5f9a5e64d09111538df21ec0727251fe29165cd93aaa6883557d4_prof);

        
        $__internal_f5d3a311400bcb4a31d9a4d838fc229d5504f575b290aa5464fedfab3ca9db0d->leave($__internal_f5d3a311400bcb4a31d9a4d838fc229d5504f575b290aa5464fedfab3ca9db0d_prof);

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
", "default/contact.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\app\\Resources\\views\\default\\contact.html.twig");
    }
}
