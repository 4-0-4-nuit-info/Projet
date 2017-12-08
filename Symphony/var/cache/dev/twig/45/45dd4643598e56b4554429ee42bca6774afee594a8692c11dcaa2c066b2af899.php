<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c9428ef6ba41514c21537094d87f26101cea5c7b772695a152cb2b598b5ac52f extends Twig_Template
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
        $__internal_14406718f1a97413cbc2af7abadece6616b2e230ccb5362166cc91b65f0503e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14406718f1a97413cbc2af7abadece6616b2e230ccb5362166cc91b65f0503e1->enter($__internal_14406718f1a97413cbc2af7abadece6616b2e230ccb5362166cc91b65f0503e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_db58cb7f3c2bdc7d80a82fd23b5a7ce7a3aefcbc14838232c868600068f0000d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db58cb7f3c2bdc7d80a82fd23b5a7ce7a3aefcbc14838232c868600068f0000d->enter($__internal_db58cb7f3c2bdc7d80a82fd23b5a7ce7a3aefcbc14838232c868600068f0000d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_14406718f1a97413cbc2af7abadece6616b2e230ccb5362166cc91b65f0503e1->leave($__internal_14406718f1a97413cbc2af7abadece6616b2e230ccb5362166cc91b65f0503e1_prof);

        
        $__internal_db58cb7f3c2bdc7d80a82fd23b5a7ce7a3aefcbc14838232c868600068f0000d->leave($__internal_db58cb7f3c2bdc7d80a82fd23b5a7ce7a3aefcbc14838232c868600068f0000d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
