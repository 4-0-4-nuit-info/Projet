<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_01fc2a3f4246717550f6b0cde8160384f0d313540dfdcee9b1cb39ce24f48a1d extends Twig_Template
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
        $__internal_c0fe2f0baf36ca37fce75cc725dcbce1d15fe5a12fce8d682e7943aa72a597cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0fe2f0baf36ca37fce75cc725dcbce1d15fe5a12fce8d682e7943aa72a597cf->enter($__internal_c0fe2f0baf36ca37fce75cc725dcbce1d15fe5a12fce8d682e7943aa72a597cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_e8943a55c5e4baac8dd6255fcb732e2124c5bbd63d42c7d84d189d8a51337a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8943a55c5e4baac8dd6255fcb732e2124c5bbd63d42c7d84d189d8a51337a76->enter($__internal_e8943a55c5e4baac8dd6255fcb732e2124c5bbd63d42c7d84d189d8a51337a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c0fe2f0baf36ca37fce75cc725dcbce1d15fe5a12fce8d682e7943aa72a597cf->leave($__internal_c0fe2f0baf36ca37fce75cc725dcbce1d15fe5a12fce8d682e7943aa72a597cf_prof);

        
        $__internal_e8943a55c5e4baac8dd6255fcb732e2124c5bbd63d42c7d84d189d8a51337a76->leave($__internal_e8943a55c5e4baac8dd6255fcb732e2124c5bbd63d42c7d84d189d8a51337a76_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
