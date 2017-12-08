<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_2d28f1a8b3b8127c63217b7a627ec029a687ff6fcae79a01a4ffe17451bae726 extends Twig_Template
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
        $__internal_e2e37a317371c69b7570203fe9967f3e596c9a849add8281fe5dc7105f2e501f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e37a317371c69b7570203fe9967f3e596c9a849add8281fe5dc7105f2e501f->enter($__internal_e2e37a317371c69b7570203fe9967f3e596c9a849add8281fe5dc7105f2e501f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_dc4c0b16fb0d58aaca481f072410ed74d55bf74088b6554960f189c43e20eeb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4c0b16fb0d58aaca481f072410ed74d55bf74088b6554960f189c43e20eeb6->enter($__internal_dc4c0b16fb0d58aaca481f072410ed74d55bf74088b6554960f189c43e20eeb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_e2e37a317371c69b7570203fe9967f3e596c9a849add8281fe5dc7105f2e501f->leave($__internal_e2e37a317371c69b7570203fe9967f3e596c9a849add8281fe5dc7105f2e501f_prof);

        
        $__internal_dc4c0b16fb0d58aaca481f072410ed74d55bf74088b6554960f189c43e20eeb6->leave($__internal_dc4c0b16fb0d58aaca481f072410ed74d55bf74088b6554960f189c43e20eeb6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
