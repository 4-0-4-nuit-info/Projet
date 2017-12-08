<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_5f7dd656d3b0a26f34e8c8b8dc3cf6a12151d8a3be12a50af7600d6681901dbb extends Twig_Template
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
        $__internal_17d2011ccf03ddaa81cf2e14c89f20e0583aceb972453d8775fb9055409e8932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d2011ccf03ddaa81cf2e14c89f20e0583aceb972453d8775fb9055409e8932->enter($__internal_17d2011ccf03ddaa81cf2e14c89f20e0583aceb972453d8775fb9055409e8932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_76e183a2c64fd027abe25d4d408501e75321bb1ba0dbeda82f2d6b48844384bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e183a2c64fd027abe25d4d408501e75321bb1ba0dbeda82f2d6b48844384bb->enter($__internal_76e183a2c64fd027abe25d4d408501e75321bb1ba0dbeda82f2d6b48844384bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_17d2011ccf03ddaa81cf2e14c89f20e0583aceb972453d8775fb9055409e8932->leave($__internal_17d2011ccf03ddaa81cf2e14c89f20e0583aceb972453d8775fb9055409e8932_prof);

        
        $__internal_76e183a2c64fd027abe25d4d408501e75321bb1ba0dbeda82f2d6b48844384bb->leave($__internal_76e183a2c64fd027abe25d4d408501e75321bb1ba0dbeda82f2d6b48844384bb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
