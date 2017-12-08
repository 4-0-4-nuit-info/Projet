<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_450fe5e6df89492527aea074cde423f98d3cbc779be0c3dd15a22c18ceee0832 extends Twig_Template
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
        $__internal_e595aecfae489620257cf2f77b7db4d8c4cdf57b06123f46fa9ee885fa856b3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e595aecfae489620257cf2f77b7db4d8c4cdf57b06123f46fa9ee885fa856b3e->enter($__internal_e595aecfae489620257cf2f77b7db4d8c4cdf57b06123f46fa9ee885fa856b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_a4c9821824458b8ed02f9a0d525a79b8bb0f8933030f5d990d034e45098bff3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4c9821824458b8ed02f9a0d525a79b8bb0f8933030f5d990d034e45098bff3c->enter($__internal_a4c9821824458b8ed02f9a0d525a79b8bb0f8933030f5d990d034e45098bff3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_e595aecfae489620257cf2f77b7db4d8c4cdf57b06123f46fa9ee885fa856b3e->leave($__internal_e595aecfae489620257cf2f77b7db4d8c4cdf57b06123f46fa9ee885fa856b3e_prof);

        
        $__internal_a4c9821824458b8ed02f9a0d525a79b8bb0f8933030f5d990d034e45098bff3c->leave($__internal_a4c9821824458b8ed02f9a0d525a79b8bb0f8933030f5d990d034e45098bff3c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
