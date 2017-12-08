<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_b549632acf015d162fb61593e0530139ac2730a4642372bdb7d60c6e3d7cbb7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_734715c856f692828532ea900e650d87175844a581ba1f6f51b682ed062b52ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_734715c856f692828532ea900e650d87175844a581ba1f6f51b682ed062b52ad->enter($__internal_734715c856f692828532ea900e650d87175844a581ba1f6f51b682ed062b52ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_87d82d22d6d87eb9600e2cbbfef5035d45d0e7066840c1469a7de6eabcdc4636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d82d22d6d87eb9600e2cbbfef5035d45d0e7066840c1469a7de6eabcdc4636->enter($__internal_87d82d22d6d87eb9600e2cbbfef5035d45d0e7066840c1469a7de6eabcdc4636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_734715c856f692828532ea900e650d87175844a581ba1f6f51b682ed062b52ad->leave($__internal_734715c856f692828532ea900e650d87175844a581ba1f6f51b682ed062b52ad_prof);

        
        $__internal_87d82d22d6d87eb9600e2cbbfef5035d45d0e7066840c1469a7de6eabcdc4636->leave($__internal_87d82d22d6d87eb9600e2cbbfef5035d45d0e7066840c1469a7de6eabcdc4636_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
