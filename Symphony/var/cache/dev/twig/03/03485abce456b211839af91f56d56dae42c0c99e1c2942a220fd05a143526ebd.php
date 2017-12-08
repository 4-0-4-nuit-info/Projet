<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_edf8f5f4370ef1ed465f213cf350c52ce575467d23ed70a9cfca832904015759 extends Twig_Template
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
        $__internal_980a09925c490411416ba020aa4692eafe790df4c6b55298547473879b6ebdde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_980a09925c490411416ba020aa4692eafe790df4c6b55298547473879b6ebdde->enter($__internal_980a09925c490411416ba020aa4692eafe790df4c6b55298547473879b6ebdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_503ce6326ea7405451162ec1397c294a99b26eb0a5137eeefda0454aa3de9095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503ce6326ea7405451162ec1397c294a99b26eb0a5137eeefda0454aa3de9095->enter($__internal_503ce6326ea7405451162ec1397c294a99b26eb0a5137eeefda0454aa3de9095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_980a09925c490411416ba020aa4692eafe790df4c6b55298547473879b6ebdde->leave($__internal_980a09925c490411416ba020aa4692eafe790df4c6b55298547473879b6ebdde_prof);

        
        $__internal_503ce6326ea7405451162ec1397c294a99b26eb0a5137eeefda0454aa3de9095->leave($__internal_503ce6326ea7405451162ec1397c294a99b26eb0a5137eeefda0454aa3de9095_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
