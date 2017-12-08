<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_82cfd82d9129f8a3b349e47dec1a796b0ce8bd3a21256b45d109633269475ab8 extends Twig_Template
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
        $__internal_15bfb559d0b22b367a1ab6e4f2b29427c55ce7441082c6bfc373b794fc0c151c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15bfb559d0b22b367a1ab6e4f2b29427c55ce7441082c6bfc373b794fc0c151c->enter($__internal_15bfb559d0b22b367a1ab6e4f2b29427c55ce7441082c6bfc373b794fc0c151c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_af03480d7a036eb6e12f2f549dceb6d18ee879da2812e3cf3d051468c58d61cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af03480d7a036eb6e12f2f549dceb6d18ee879da2812e3cf3d051468c58d61cc->enter($__internal_af03480d7a036eb6e12f2f549dceb6d18ee879da2812e3cf3d051468c58d61cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_15bfb559d0b22b367a1ab6e4f2b29427c55ce7441082c6bfc373b794fc0c151c->leave($__internal_15bfb559d0b22b367a1ab6e4f2b29427c55ce7441082c6bfc373b794fc0c151c_prof);

        
        $__internal_af03480d7a036eb6e12f2f549dceb6d18ee879da2812e3cf3d051468c58d61cc->leave($__internal_af03480d7a036eb6e12f2f549dceb6d18ee879da2812e3cf3d051468c58d61cc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
