<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ab75f73eb3264a7290edbfea7e04927f25a38c35f2120a145d3af15fee363549 extends Twig_Template
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
        $__internal_cdd1e877009117f85fb939e22ef0c503bdfc78cf98e917925578304e0abfa08b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd1e877009117f85fb939e22ef0c503bdfc78cf98e917925578304e0abfa08b->enter($__internal_cdd1e877009117f85fb939e22ef0c503bdfc78cf98e917925578304e0abfa08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_e553b03599158946d4b5ef7e34b2572fd6f6412e77a007aee0ec21764ae3e680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e553b03599158946d4b5ef7e34b2572fd6f6412e77a007aee0ec21764ae3e680->enter($__internal_e553b03599158946d4b5ef7e34b2572fd6f6412e77a007aee0ec21764ae3e680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_cdd1e877009117f85fb939e22ef0c503bdfc78cf98e917925578304e0abfa08b->leave($__internal_cdd1e877009117f85fb939e22ef0c503bdfc78cf98e917925578304e0abfa08b_prof);

        
        $__internal_e553b03599158946d4b5ef7e34b2572fd6f6412e77a007aee0ec21764ae3e680->leave($__internal_e553b03599158946d4b5ef7e34b2572fd6f6412e77a007aee0ec21764ae3e680_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
