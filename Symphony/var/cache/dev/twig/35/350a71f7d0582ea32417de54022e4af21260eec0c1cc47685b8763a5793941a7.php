<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_99edfa09d4b87a694806164ee5d791a239314d292bb5d198da36ac375123bf78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_e0375c1f13bdaf57b80619b41690fefa0188281f9c2030964044749c2b5cda64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0375c1f13bdaf57b80619b41690fefa0188281f9c2030964044749c2b5cda64->enter($__internal_e0375c1f13bdaf57b80619b41690fefa0188281f9c2030964044749c2b5cda64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_f3e159a46342f93099e3b5153b200ad18896f59a898e1220dc53cf8052fca2e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e159a46342f93099e3b5153b200ad18896f59a898e1220dc53cf8052fca2e5->enter($__internal_f3e159a46342f93099e3b5153b200ad18896f59a898e1220dc53cf8052fca2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0375c1f13bdaf57b80619b41690fefa0188281f9c2030964044749c2b5cda64->leave($__internal_e0375c1f13bdaf57b80619b41690fefa0188281f9c2030964044749c2b5cda64_prof);

        
        $__internal_f3e159a46342f93099e3b5153b200ad18896f59a898e1220dc53cf8052fca2e5->leave($__internal_f3e159a46342f93099e3b5153b200ad18896f59a898e1220dc53cf8052fca2e5_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_7c705c8cfac82e291da3c078068a7cb019e2172f85e5f6e943ad651e20cc435d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c705c8cfac82e291da3c078068a7cb019e2172f85e5f6e943ad651e20cc435d->enter($__internal_7c705c8cfac82e291da3c078068a7cb019e2172f85e5f6e943ad651e20cc435d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6cb4389f1084db98cc822f071cb574c73a0f21f206f0e42778a729412047fd4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb4389f1084db98cc822f071cb574c73a0f21f206f0e42778a729412047fd4b->enter($__internal_6cb4389f1084db98cc822f071cb574c73a0f21f206f0e42778a729412047fd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_6cb4389f1084db98cc822f071cb574c73a0f21f206f0e42778a729412047fd4b->leave($__internal_6cb4389f1084db98cc822f071cb574c73a0f21f206f0e42778a729412047fd4b_prof);

        
        $__internal_7c705c8cfac82e291da3c078068a7cb019e2172f85e5f6e943ad651e20cc435d->leave($__internal_7c705c8cfac82e291da3c078068a7cb019e2172f85e5f6e943ad651e20cc435d_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_76726fc19783f6a2b04275358eb77b352d45adea8d5fe52cddf0e96678be0a52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76726fc19783f6a2b04275358eb77b352d45adea8d5fe52cddf0e96678be0a52->enter($__internal_76726fc19783f6a2b04275358eb77b352d45adea8d5fe52cddf0e96678be0a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4166d7703f1a559c8b4e01ab972a74aff0ac1fae0aaa30a1fb669a52da75f9ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4166d7703f1a559c8b4e01ab972a74aff0ac1fae0aaa30a1fb669a52da75f9ec->enter($__internal_4166d7703f1a559c8b4e01ab972a74aff0ac1fae0aaa30a1fb669a52da75f9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4166d7703f1a559c8b4e01ab972a74aff0ac1fae0aaa30a1fb669a52da75f9ec->leave($__internal_4166d7703f1a559c8b4e01ab972a74aff0ac1fae0aaa30a1fb669a52da75f9ec_prof);

        
        $__internal_76726fc19783f6a2b04275358eb77b352d45adea8d5fe52cddf0e96678be0a52->leave($__internal_76726fc19783f6a2b04275358eb77b352d45adea8d5fe52cddf0e96678be0a52_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
