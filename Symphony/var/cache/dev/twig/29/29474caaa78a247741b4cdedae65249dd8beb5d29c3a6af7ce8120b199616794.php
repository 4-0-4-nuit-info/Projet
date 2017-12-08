<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_2a53bc253a0b4816d6894cf7a3fb288f9368a4ad6f2639f7d55629ac07c7171e extends Twig_Template
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
        $__internal_4f790d21f25b0317532605b0ee8ce1c63c23145e0aa3fc87c4037a521b19a2a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f790d21f25b0317532605b0ee8ce1c63c23145e0aa3fc87c4037a521b19a2a0->enter($__internal_4f790d21f25b0317532605b0ee8ce1c63c23145e0aa3fc87c4037a521b19a2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_fcb4333a2ab7b9064733db8fdbffa542a0b39793118b152090c0aa6ec8eb1f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb4333a2ab7b9064733db8fdbffa542a0b39793118b152090c0aa6ec8eb1f13->enter($__internal_fcb4333a2ab7b9064733db8fdbffa542a0b39793118b152090c0aa6ec8eb1f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4f790d21f25b0317532605b0ee8ce1c63c23145e0aa3fc87c4037a521b19a2a0->leave($__internal_4f790d21f25b0317532605b0ee8ce1c63c23145e0aa3fc87c4037a521b19a2a0_prof);

        
        $__internal_fcb4333a2ab7b9064733db8fdbffa542a0b39793118b152090c0aa6ec8eb1f13->leave($__internal_fcb4333a2ab7b9064733db8fdbffa542a0b39793118b152090c0aa6ec8eb1f13_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_76357f74b252d37e1e33b6d20199c74b0c6d54ed4afbee776e215fb1d3cc836c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76357f74b252d37e1e33b6d20199c74b0c6d54ed4afbee776e215fb1d3cc836c->enter($__internal_76357f74b252d37e1e33b6d20199c74b0c6d54ed4afbee776e215fb1d3cc836c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fde20b6b0ceb227ec1ac94f730ff1e9767e9152c432156cb04940a9d4a67e600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde20b6b0ceb227ec1ac94f730ff1e9767e9152c432156cb04940a9d4a67e600->enter($__internal_fde20b6b0ceb227ec1ac94f730ff1e9767e9152c432156cb04940a9d4a67e600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fde20b6b0ceb227ec1ac94f730ff1e9767e9152c432156cb04940a9d4a67e600->leave($__internal_fde20b6b0ceb227ec1ac94f730ff1e9767e9152c432156cb04940a9d4a67e600_prof);

        
        $__internal_76357f74b252d37e1e33b6d20199c74b0c6d54ed4afbee776e215fb1d3cc836c->leave($__internal_76357f74b252d37e1e33b6d20199c74b0c6d54ed4afbee776e215fb1d3cc836c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
