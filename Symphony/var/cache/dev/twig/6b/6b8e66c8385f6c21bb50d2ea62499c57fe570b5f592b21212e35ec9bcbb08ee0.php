<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_b4fdf6e81c1de259c397928c1c967a3bc5f9edb4626489208ce211ea7ac52aec extends Twig_Template
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
        $__internal_49df4e26701592a802120ea18dc7598e2cad7c076a2816ddfe4b800765d0bd85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49df4e26701592a802120ea18dc7598e2cad7c076a2816ddfe4b800765d0bd85->enter($__internal_49df4e26701592a802120ea18dc7598e2cad7c076a2816ddfe4b800765d0bd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_b8fad4da8f7553e5b61da1b18b6170a09701dd0a388864da5123f1f084aba10c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8fad4da8f7553e5b61da1b18b6170a09701dd0a388864da5123f1f084aba10c->enter($__internal_b8fad4da8f7553e5b61da1b18b6170a09701dd0a388864da5123f1f084aba10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_49df4e26701592a802120ea18dc7598e2cad7c076a2816ddfe4b800765d0bd85->leave($__internal_49df4e26701592a802120ea18dc7598e2cad7c076a2816ddfe4b800765d0bd85_prof);

        
        $__internal_b8fad4da8f7553e5b61da1b18b6170a09701dd0a388864da5123f1f084aba10c->leave($__internal_b8fad4da8f7553e5b61da1b18b6170a09701dd0a388864da5123f1f084aba10c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
