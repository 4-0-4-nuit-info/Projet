<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_43ab81fdb888b510bca746e4dc1017173ce1e7b190a9139f80edcdcf1e6f8122 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_097782584f7dd11de1c991c68127b4158ac01a7b925e4e1c9be8fff588febc2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_097782584f7dd11de1c991c68127b4158ac01a7b925e4e1c9be8fff588febc2f->enter($__internal_097782584f7dd11de1c991c68127b4158ac01a7b925e4e1c9be8fff588febc2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_8fc5208646ce5f8b9514e44bc19faa89468379a2e6dcf65fe97421911802c177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc5208646ce5f8b9514e44bc19faa89468379a2e6dcf65fe97421911802c177->enter($__internal_8fc5208646ce5f8b9514e44bc19faa89468379a2e6dcf65fe97421911802c177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_097782584f7dd11de1c991c68127b4158ac01a7b925e4e1c9be8fff588febc2f->leave($__internal_097782584f7dd11de1c991c68127b4158ac01a7b925e4e1c9be8fff588febc2f_prof);

        
        $__internal_8fc5208646ce5f8b9514e44bc19faa89468379a2e6dcf65fe97421911802c177->leave($__internal_8fc5208646ce5f8b9514e44bc19faa89468379a2e6dcf65fe97421911802c177_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a56e4bf2bbd039c6fa0e7fe57e5ea3ee1867a6e8a061cd4f357f885e7bf6329e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a56e4bf2bbd039c6fa0e7fe57e5ea3ee1867a6e8a061cd4f357f885e7bf6329e->enter($__internal_a56e4bf2bbd039c6fa0e7fe57e5ea3ee1867a6e8a061cd4f357f885e7bf6329e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b76ace61d09d7e070591a59a02d7a354b0252c53446c9c6c95af0bfa6bf74bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76ace61d09d7e070591a59a02d7a354b0252c53446c9c6c95af0bfa6bf74bf1->enter($__internal_b76ace61d09d7e070591a59a02d7a354b0252c53446c9c6c95af0bfa6bf74bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_b76ace61d09d7e070591a59a02d7a354b0252c53446c9c6c95af0bfa6bf74bf1->leave($__internal_b76ace61d09d7e070591a59a02d7a354b0252c53446c9c6c95af0bfa6bf74bf1_prof);

        
        $__internal_a56e4bf2bbd039c6fa0e7fe57e5ea3ee1867a6e8a061cd4f357f885e7bf6329e->leave($__internal_a56e4bf2bbd039c6fa0e7fe57e5ea3ee1867a6e8a061cd4f357f885e7bf6329e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
