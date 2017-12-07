<?php

/* SecRoutUserBundle:Default:index.html.twig */
class __TwigTemplate_1a3142dcde96412c0bf167c7459721ebcd9d44fe643d8b5b7f834420a262a1ea extends Twig_Template
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
        $__internal_cbaaad85938d717c1231d47a7e472a5a6b548adfe4124354f9b7743684ff6b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbaaad85938d717c1231d47a7e472a5a6b548adfe4124354f9b7743684ff6b56->enter($__internal_cbaaad85938d717c1231d47a7e472a5a6b548adfe4124354f9b7743684ff6b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SecRoutUserBundle:Default:index.html.twig"));

        $__internal_83e216dcda00656f001b9ad232a0131ba76811c2981f9ef5c8166ee14afdd1fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e216dcda00656f001b9ad232a0131ba76811c2981f9ef5c8166ee14afdd1fc->enter($__internal_83e216dcda00656f001b9ad232a0131ba76811c2981f9ef5c8166ee14afdd1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SecRoutUserBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_cbaaad85938d717c1231d47a7e472a5a6b548adfe4124354f9b7743684ff6b56->leave($__internal_cbaaad85938d717c1231d47a7e472a5a6b548adfe4124354f9b7743684ff6b56_prof);

        
        $__internal_83e216dcda00656f001b9ad232a0131ba76811c2981f9ef5c8166ee14afdd1fc->leave($__internal_83e216dcda00656f001b9ad232a0131ba76811c2981f9ef5c8166ee14afdd1fc_prof);

    }

    public function getTemplateName()
    {
        return "SecRoutUserBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "SecRoutUserBundle:Default:index.html.twig", "/var/www/Projet/src/SecRout/UserBundle/Resources/views/Default/index.html.twig");
    }
}
