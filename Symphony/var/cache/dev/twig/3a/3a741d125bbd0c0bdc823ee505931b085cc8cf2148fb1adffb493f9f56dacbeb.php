<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_45ebed97418b2302dc1351f6c63f6ad3d69f594e82617df17a88748da5793106 extends Twig_Template
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
        $__internal_6f21d8de69d4b512300fa4d29da53903645b018399408cc5e9833c5aade91b70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f21d8de69d4b512300fa4d29da53903645b018399408cc5e9833c5aade91b70->enter($__internal_6f21d8de69d4b512300fa4d29da53903645b018399408cc5e9833c5aade91b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_079aee52cf27ea1202efb520ffe42fc1519f7fa6c490c0f0be0ebcc5732c7573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_079aee52cf27ea1202efb520ffe42fc1519f7fa6c490c0f0be0ebcc5732c7573->enter($__internal_079aee52cf27ea1202efb520ffe42fc1519f7fa6c490c0f0be0ebcc5732c7573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_6f21d8de69d4b512300fa4d29da53903645b018399408cc5e9833c5aade91b70->leave($__internal_6f21d8de69d4b512300fa4d29da53903645b018399408cc5e9833c5aade91b70_prof);

        
        $__internal_079aee52cf27ea1202efb520ffe42fc1519f7fa6c490c0f0be0ebcc5732c7573->leave($__internal_079aee52cf27ea1202efb520ffe42fc1519f7fa6c490c0f0be0ebcc5732c7573_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
