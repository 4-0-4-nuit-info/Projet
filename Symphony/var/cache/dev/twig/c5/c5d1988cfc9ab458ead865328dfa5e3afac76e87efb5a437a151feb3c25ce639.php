<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4970a05da6c8ec585c2cccd699a26d76b4d348bb4f2715acf4fe284f570839ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_329312ec0ee3a71cff33513cecaff215f3bca22dce145ea5bf0578a57f76b574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_329312ec0ee3a71cff33513cecaff215f3bca22dce145ea5bf0578a57f76b574->enter($__internal_329312ec0ee3a71cff33513cecaff215f3bca22dce145ea5bf0578a57f76b574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_beda91aa0f512cdaba5dcb26d41109792bb1c3496787b6013aa8aa160c9b52db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beda91aa0f512cdaba5dcb26d41109792bb1c3496787b6013aa8aa160c9b52db->enter($__internal_beda91aa0f512cdaba5dcb26d41109792bb1c3496787b6013aa8aa160c9b52db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_329312ec0ee3a71cff33513cecaff215f3bca22dce145ea5bf0578a57f76b574->leave($__internal_329312ec0ee3a71cff33513cecaff215f3bca22dce145ea5bf0578a57f76b574_prof);

        
        $__internal_beda91aa0f512cdaba5dcb26d41109792bb1c3496787b6013aa8aa160c9b52db->leave($__internal_beda91aa0f512cdaba5dcb26d41109792bb1c3496787b6013aa8aa160c9b52db_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_30a53062fad8715d1a731736a05162f464af5437c3fc913920dc60ae43262928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a53062fad8715d1a731736a05162f464af5437c3fc913920dc60ae43262928->enter($__internal_30a53062fad8715d1a731736a05162f464af5437c3fc913920dc60ae43262928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b7fcd69c40d784eba2fda102719f8bc50c86b52634513e6cbe4c08d7dd33808f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7fcd69c40d784eba2fda102719f8bc50c86b52634513e6cbe4c08d7dd33808f->enter($__internal_b7fcd69c40d784eba2fda102719f8bc50c86b52634513e6cbe4c08d7dd33808f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b7fcd69c40d784eba2fda102719f8bc50c86b52634513e6cbe4c08d7dd33808f->leave($__internal_b7fcd69c40d784eba2fda102719f8bc50c86b52634513e6cbe4c08d7dd33808f_prof);

        
        $__internal_30a53062fad8715d1a731736a05162f464af5437c3fc913920dc60ae43262928->leave($__internal_30a53062fad8715d1a731736a05162f464af5437c3fc913920dc60ae43262928_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
