<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_e1b17b672d538b6b91c8a060c36b7e27608c889b2144a6a4e8ee4ce83b0f1b9d extends Twig_Template
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
        $__internal_c2db70b20d2e413932bf1d9d51a33575c4238d0941f5d9d7bc538e452ce2a7a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2db70b20d2e413932bf1d9d51a33575c4238d0941f5d9d7bc538e452ce2a7a7->enter($__internal_c2db70b20d2e413932bf1d9d51a33575c4238d0941f5d9d7bc538e452ce2a7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_77f59f7b506f0cfd09df7055cfe6080baf8db31b250163643f63f63d0f474285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f59f7b506f0cfd09df7055cfe6080baf8db31b250163643f63f63d0f474285->enter($__internal_77f59f7b506f0cfd09df7055cfe6080baf8db31b250163643f63f63d0f474285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_c2db70b20d2e413932bf1d9d51a33575c4238d0941f5d9d7bc538e452ce2a7a7->leave($__internal_c2db70b20d2e413932bf1d9d51a33575c4238d0941f5d9d7bc538e452ce2a7a7_prof);

        
        $__internal_77f59f7b506f0cfd09df7055cfe6080baf8db31b250163643f63f63d0f474285->leave($__internal_77f59f7b506f0cfd09df7055cfe6080baf8db31b250163643f63f63d0f474285_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
