<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_160ddd6e734ee41808f5f77e31bfadf5e7bb8e7368aa83d79f46aae3edb828fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b59051b7b29da33148e3fa7448dc9c2d967c213c9c9e416f352fcb16da53b8c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b59051b7b29da33148e3fa7448dc9c2d967c213c9c9e416f352fcb16da53b8c2->enter($__internal_b59051b7b29da33148e3fa7448dc9c2d967c213c9c9e416f352fcb16da53b8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_abbe58b38ff5944d0ab114e5cae361a614a68d9d39f40de681caf54407d602dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abbe58b38ff5944d0ab114e5cae361a614a68d9d39f40de681caf54407d602dd->enter($__internal_abbe58b38ff5944d0ab114e5cae361a614a68d9d39f40de681caf54407d602dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b59051b7b29da33148e3fa7448dc9c2d967c213c9c9e416f352fcb16da53b8c2->leave($__internal_b59051b7b29da33148e3fa7448dc9c2d967c213c9c9e416f352fcb16da53b8c2_prof);

        
        $__internal_abbe58b38ff5944d0ab114e5cae361a614a68d9d39f40de681caf54407d602dd->leave($__internal_abbe58b38ff5944d0ab114e5cae361a614a68d9d39f40de681caf54407d602dd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_60f73d409056438e29317de72018315e3e51913c894e2bc638146e4fc59749a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f73d409056438e29317de72018315e3e51913c894e2bc638146e4fc59749a8->enter($__internal_60f73d409056438e29317de72018315e3e51913c894e2bc638146e4fc59749a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_07814dbbb470cab082853fc7a3b69e5e872e2ef5c66e2545c156478be7401ad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07814dbbb470cab082853fc7a3b69e5e872e2ef5c66e2545c156478be7401ad4->enter($__internal_07814dbbb470cab082853fc7a3b69e5e872e2ef5c66e2545c156478be7401ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_07814dbbb470cab082853fc7a3b69e5e872e2ef5c66e2545c156478be7401ad4->leave($__internal_07814dbbb470cab082853fc7a3b69e5e872e2ef5c66e2545c156478be7401ad4_prof);

        
        $__internal_60f73d409056438e29317de72018315e3e51913c894e2bc638146e4fc59749a8->leave($__internal_60f73d409056438e29317de72018315e3e51913c894e2bc638146e4fc59749a8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b736e2c1b95acd641d0bf47b56e7b824fd296c5934624cfa1111ddf571359a37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b736e2c1b95acd641d0bf47b56e7b824fd296c5934624cfa1111ddf571359a37->enter($__internal_b736e2c1b95acd641d0bf47b56e7b824fd296c5934624cfa1111ddf571359a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0960caa76fba823d724e3ecdbfdaa71909613e96497e1f77cf63ea2261acb8aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0960caa76fba823d724e3ecdbfdaa71909613e96497e1f77cf63ea2261acb8aa->enter($__internal_0960caa76fba823d724e3ecdbfdaa71909613e96497e1f77cf63ea2261acb8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0960caa76fba823d724e3ecdbfdaa71909613e96497e1f77cf63ea2261acb8aa->leave($__internal_0960caa76fba823d724e3ecdbfdaa71909613e96497e1f77cf63ea2261acb8aa_prof);

        
        $__internal_b736e2c1b95acd641d0bf47b56e7b824fd296c5934624cfa1111ddf571359a37->leave($__internal_b736e2c1b95acd641d0bf47b56e7b824fd296c5934624cfa1111ddf571359a37_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
