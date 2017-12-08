<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c226424450d01cd958170363524947f923f26a79ad5d4dc2ca407dba618e5e5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_084480e62eac8ef1b476bc10e7337179fae01b24d57f035adeee7a6b8a4f70e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_084480e62eac8ef1b476bc10e7337179fae01b24d57f035adeee7a6b8a4f70e6->enter($__internal_084480e62eac8ef1b476bc10e7337179fae01b24d57f035adeee7a6b8a4f70e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_50b0736fdbdefa1df10077e66e537d63445572c0a1de3e4af8687f7c429313a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b0736fdbdefa1df10077e66e537d63445572c0a1de3e4af8687f7c429313a3->enter($__internal_50b0736fdbdefa1df10077e66e537d63445572c0a1de3e4af8687f7c429313a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_084480e62eac8ef1b476bc10e7337179fae01b24d57f035adeee7a6b8a4f70e6->leave($__internal_084480e62eac8ef1b476bc10e7337179fae01b24d57f035adeee7a6b8a4f70e6_prof);

        
        $__internal_50b0736fdbdefa1df10077e66e537d63445572c0a1de3e4af8687f7c429313a3->leave($__internal_50b0736fdbdefa1df10077e66e537d63445572c0a1de3e4af8687f7c429313a3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ade5b570d1dc86ad87bdd5af09cd88b1feb32658ef3d6e6ee905703f8d40a4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ade5b570d1dc86ad87bdd5af09cd88b1feb32658ef3d6e6ee905703f8d40a4f->enter($__internal_5ade5b570d1dc86ad87bdd5af09cd88b1feb32658ef3d6e6ee905703f8d40a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e660f70854a6e5466e45c731e315b9ae50d5df3ae3b37bfcedf27a7345e60967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e660f70854a6e5466e45c731e315b9ae50d5df3ae3b37bfcedf27a7345e60967->enter($__internal_e660f70854a6e5466e45c731e315b9ae50d5df3ae3b37bfcedf27a7345e60967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e660f70854a6e5466e45c731e315b9ae50d5df3ae3b37bfcedf27a7345e60967->leave($__internal_e660f70854a6e5466e45c731e315b9ae50d5df3ae3b37bfcedf27a7345e60967_prof);

        
        $__internal_5ade5b570d1dc86ad87bdd5af09cd88b1feb32658ef3d6e6ee905703f8d40a4f->leave($__internal_5ade5b570d1dc86ad87bdd5af09cd88b1feb32658ef3d6e6ee905703f8d40a4f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ee4e76822b7f5051da7a64a5a7d920cbd1fcec5a56d431ee2e0b981b97092a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee4e76822b7f5051da7a64a5a7d920cbd1fcec5a56d431ee2e0b981b97092a7->enter($__internal_1ee4e76822b7f5051da7a64a5a7d920cbd1fcec5a56d431ee2e0b981b97092a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_92146c61d0d1b5dd63e7b2973716613912cf8cacc9493be00a40fbb0a969e001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92146c61d0d1b5dd63e7b2973716613912cf8cacc9493be00a40fbb0a969e001->enter($__internal_92146c61d0d1b5dd63e7b2973716613912cf8cacc9493be00a40fbb0a969e001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_92146c61d0d1b5dd63e7b2973716613912cf8cacc9493be00a40fbb0a969e001->leave($__internal_92146c61d0d1b5dd63e7b2973716613912cf8cacc9493be00a40fbb0a969e001_prof);

        
        $__internal_1ee4e76822b7f5051da7a64a5a7d920cbd1fcec5a56d431ee2e0b981b97092a7->leave($__internal_1ee4e76822b7f5051da7a64a5a7d920cbd1fcec5a56d431ee2e0b981b97092a7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
