<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_3e0701d7c83b0af07679b170556d693b8b3ba7a4ac1b6849f510fd044c68e189 extends Twig_Template
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
        $__internal_18500c23b007cef398f196b4ecb665623feb3b7d49f8a26629aefc766c711dff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18500c23b007cef398f196b4ecb665623feb3b7d49f8a26629aefc766c711dff->enter($__internal_18500c23b007cef398f196b4ecb665623feb3b7d49f8a26629aefc766c711dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_04278a8b3c7fabcdd72c130fee8f4685e5e9003a0024828961f37d71a2505d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04278a8b3c7fabcdd72c130fee8f4685e5e9003a0024828961f37d71a2505d05->enter($__internal_04278a8b3c7fabcdd72c130fee8f4685e5e9003a0024828961f37d71a2505d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_18500c23b007cef398f196b4ecb665623feb3b7d49f8a26629aefc766c711dff->leave($__internal_18500c23b007cef398f196b4ecb665623feb3b7d49f8a26629aefc766c711dff_prof);

        
        $__internal_04278a8b3c7fabcdd72c130fee8f4685e5e9003a0024828961f37d71a2505d05->leave($__internal_04278a8b3c7fabcdd72c130fee8f4685e5e9003a0024828961f37d71a2505d05_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
