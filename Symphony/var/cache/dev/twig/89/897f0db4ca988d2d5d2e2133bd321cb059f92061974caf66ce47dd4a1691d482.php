<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_9b78c2e11f0015f10c9f2c54750a647ab7019c6656e5ee17d23edc8d63415a05 extends Twig_Template
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
        $__internal_175b900bbe3cebd2885877439f94f92ce00d5375b1012f634c437dec45822a4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_175b900bbe3cebd2885877439f94f92ce00d5375b1012f634c437dec45822a4d->enter($__internal_175b900bbe3cebd2885877439f94f92ce00d5375b1012f634c437dec45822a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_141e319e487577ed10d98ef22f48ade88e7f8ea67e36de1bf4d75460710027f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_141e319e487577ed10d98ef22f48ade88e7f8ea67e36de1bf4d75460710027f3->enter($__internal_141e319e487577ed10d98ef22f48ade88e7f8ea67e36de1bf4d75460710027f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_175b900bbe3cebd2885877439f94f92ce00d5375b1012f634c437dec45822a4d->leave($__internal_175b900bbe3cebd2885877439f94f92ce00d5375b1012f634c437dec45822a4d_prof);

        
        $__internal_141e319e487577ed10d98ef22f48ade88e7f8ea67e36de1bf4d75460710027f3->leave($__internal_141e319e487577ed10d98ef22f48ade88e7f8ea67e36de1bf4d75460710027f3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
