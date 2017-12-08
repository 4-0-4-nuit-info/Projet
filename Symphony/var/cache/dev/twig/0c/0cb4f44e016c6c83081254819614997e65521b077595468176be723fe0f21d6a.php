<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_41d85eb6c5462594cb7d218b0d7a31d2993febea285865e142cb03ef165fd8f9 extends Twig_Template
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
        $__internal_1cfabe51a3e28bad0128a38baee51714fe25bfa64960b9a6cb1ca310cb99fb8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cfabe51a3e28bad0128a38baee51714fe25bfa64960b9a6cb1ca310cb99fb8a->enter($__internal_1cfabe51a3e28bad0128a38baee51714fe25bfa64960b9a6cb1ca310cb99fb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_6557fc9a5c006a230f591eed560787272b52048da51edc1de018a051cab6515d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6557fc9a5c006a230f591eed560787272b52048da51edc1de018a051cab6515d->enter($__internal_6557fc9a5c006a230f591eed560787272b52048da51edc1de018a051cab6515d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1cfabe51a3e28bad0128a38baee51714fe25bfa64960b9a6cb1ca310cb99fb8a->leave($__internal_1cfabe51a3e28bad0128a38baee51714fe25bfa64960b9a6cb1ca310cb99fb8a_prof);

        
        $__internal_6557fc9a5c006a230f591eed560787272b52048da51edc1de018a051cab6515d->leave($__internal_6557fc9a5c006a230f591eed560787272b52048da51edc1de018a051cab6515d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
