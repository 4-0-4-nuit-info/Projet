<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_e2bff2c555f05d42429c7a39dc62f1e4d40b84f64feff5f91ae831b77cd06cdf extends Twig_Template
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
        $__internal_24a25cc930024f267da30feedaae141104e7cd37360e12faab834b3c18aff7a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a25cc930024f267da30feedaae141104e7cd37360e12faab834b3c18aff7a1->enter($__internal_24a25cc930024f267da30feedaae141104e7cd37360e12faab834b3c18aff7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_87840b3867d43177b311dd4682dcb300a3fc0ba3c37de30ea7cd119bfd643aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87840b3867d43177b311dd4682dcb300a3fc0ba3c37de30ea7cd119bfd643aba->enter($__internal_87840b3867d43177b311dd4682dcb300a3fc0ba3c37de30ea7cd119bfd643aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_24a25cc930024f267da30feedaae141104e7cd37360e12faab834b3c18aff7a1->leave($__internal_24a25cc930024f267da30feedaae141104e7cd37360e12faab834b3c18aff7a1_prof);

        
        $__internal_87840b3867d43177b311dd4682dcb300a3fc0ba3c37de30ea7cd119bfd643aba->leave($__internal_87840b3867d43177b311dd4682dcb300a3fc0ba3c37de30ea7cd119bfd643aba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
