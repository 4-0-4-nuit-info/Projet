<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_27ad885b101a9da558cfdb8aeff587abc7e66721b0fe4d6567ff2f3345f51121 extends Twig_Template
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
        $__internal_29b0b2c6309f24f9ae6f44346ac742622697233409cfa1f4d4de27c73e6d2d34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29b0b2c6309f24f9ae6f44346ac742622697233409cfa1f4d4de27c73e6d2d34->enter($__internal_29b0b2c6309f24f9ae6f44346ac742622697233409cfa1f4d4de27c73e6d2d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_aa513cdd075c6295cf2bd7a5d4ed05ce9d8a11465eb4402792a808362e13b108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa513cdd075c6295cf2bd7a5d4ed05ce9d8a11465eb4402792a808362e13b108->enter($__internal_aa513cdd075c6295cf2bd7a5d4ed05ce9d8a11465eb4402792a808362e13b108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_29b0b2c6309f24f9ae6f44346ac742622697233409cfa1f4d4de27c73e6d2d34->leave($__internal_29b0b2c6309f24f9ae6f44346ac742622697233409cfa1f4d4de27c73e6d2d34_prof);

        
        $__internal_aa513cdd075c6295cf2bd7a5d4ed05ce9d8a11465eb4402792a808362e13b108->leave($__internal_aa513cdd075c6295cf2bd7a5d4ed05ce9d8a11465eb4402792a808362e13b108_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
