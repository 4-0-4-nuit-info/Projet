<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_d72059634d795f833e249e67e86d64eacecc06862deb6f875f777b1a1222b037 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e03d240741629d4522ea06a1ede3fc38e3bc879c2ce2fbd4353d044be54f9f78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e03d240741629d4522ea06a1ede3fc38e3bc879c2ce2fbd4353d044be54f9f78->enter($__internal_e03d240741629d4522ea06a1ede3fc38e3bc879c2ce2fbd4353d044be54f9f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_8d9830392b8501f285295724a0cd2c88fa4309ce8a32d6666c8f400b93565c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9830392b8501f285295724a0cd2c88fa4309ce8a32d6666c8f400b93565c2b->enter($__internal_8d9830392b8501f285295724a0cd2c88fa4309ce8a32d6666c8f400b93565c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e03d240741629d4522ea06a1ede3fc38e3bc879c2ce2fbd4353d044be54f9f78->leave($__internal_e03d240741629d4522ea06a1ede3fc38e3bc879c2ce2fbd4353d044be54f9f78_prof);

        
        $__internal_8d9830392b8501f285295724a0cd2c88fa4309ce8a32d6666c8f400b93565c2b->leave($__internal_8d9830392b8501f285295724a0cd2c88fa4309ce8a32d6666c8f400b93565c2b_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_cb6aaedcd277067a2e4dc475801d301404a68ef417dbfd2ca9499c2c11a07252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb6aaedcd277067a2e4dc475801d301404a68ef417dbfd2ca9499c2c11a07252->enter($__internal_cb6aaedcd277067a2e4dc475801d301404a68ef417dbfd2ca9499c2c11a07252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_8b2673aaef3d76dbfd9ef19bef1e92f98e938cf1d877efd9757473bdd5d101ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b2673aaef3d76dbfd9ef19bef1e92f98e938cf1d877efd9757473bdd5d101ca->enter($__internal_8b2673aaef3d76dbfd9ef19bef1e92f98e938cf1d877efd9757473bdd5d101ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_8b2673aaef3d76dbfd9ef19bef1e92f98e938cf1d877efd9757473bdd5d101ca->leave($__internal_8b2673aaef3d76dbfd9ef19bef1e92f98e938cf1d877efd9757473bdd5d101ca_prof);

        
        $__internal_cb6aaedcd277067a2e4dc475801d301404a68ef417dbfd2ca9499c2c11a07252->leave($__internal_cb6aaedcd277067a2e4dc475801d301404a68ef417dbfd2ca9499c2c11a07252_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_309f3b10f0ddb15ac90c0aa31a19b719d74bedba26c8f37b42a00f29d145cf60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_309f3b10f0ddb15ac90c0aa31a19b719d74bedba26c8f37b42a00f29d145cf60->enter($__internal_309f3b10f0ddb15ac90c0aa31a19b719d74bedba26c8f37b42a00f29d145cf60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a7aee3cac00f6e8a7b21bb875bef125775545eb3d421a6c126b157e4a5dcf6c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7aee3cac00f6e8a7b21bb875bef125775545eb3d421a6c126b157e4a5dcf6c9->enter($__internal_a7aee3cac00f6e8a7b21bb875bef125775545eb3d421a6c126b157e4a5dcf6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a7aee3cac00f6e8a7b21bb875bef125775545eb3d421a6c126b157e4a5dcf6c9->leave($__internal_a7aee3cac00f6e8a7b21bb875bef125775545eb3d421a6c126b157e4a5dcf6c9_prof);

        
        $__internal_309f3b10f0ddb15ac90c0aa31a19b719d74bedba26c8f37b42a00f29d145cf60->leave($__internal_309f3b10f0ddb15ac90c0aa31a19b719d74bedba26c8f37b42a00f29d145cf60_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
