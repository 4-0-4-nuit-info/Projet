<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_33944acc91a79d68ad8603dfd0588129a2c4014c546b9111a9038c48c8395e84 extends Twig_Template
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
        $__internal_c52ea0f5c534a3ed6e0d4bcda4ab0bbb3a4f2f93ae3f2e7a9565a76360c2da91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c52ea0f5c534a3ed6e0d4bcda4ab0bbb3a4f2f93ae3f2e7a9565a76360c2da91->enter($__internal_c52ea0f5c534a3ed6e0d4bcda4ab0bbb3a4f2f93ae3f2e7a9565a76360c2da91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_74d26c2b6db02ced3c32eca7ce95c28685a16bd13ee2ab273eeba01d5a6fc64b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d26c2b6db02ced3c32eca7ce95c28685a16bd13ee2ab273eeba01d5a6fc64b->enter($__internal_74d26c2b6db02ced3c32eca7ce95c28685a16bd13ee2ab273eeba01d5a6fc64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c52ea0f5c534a3ed6e0d4bcda4ab0bbb3a4f2f93ae3f2e7a9565a76360c2da91->leave($__internal_c52ea0f5c534a3ed6e0d4bcda4ab0bbb3a4f2f93ae3f2e7a9565a76360c2da91_prof);

        
        $__internal_74d26c2b6db02ced3c32eca7ce95c28685a16bd13ee2ab273eeba01d5a6fc64b->leave($__internal_74d26c2b6db02ced3c32eca7ce95c28685a16bd13ee2ab273eeba01d5a6fc64b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
