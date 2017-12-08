<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_dc0f8ae5e05c9971c5f64207ea7dc37af6e4a6722d174c02ebbfa97d57123f3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b87e8d685d361135b1d28d982db355ef8ba743b5e1333d0d53f218ab4bacd0ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b87e8d685d361135b1d28d982db355ef8ba743b5e1333d0d53f218ab4bacd0ad->enter($__internal_b87e8d685d361135b1d28d982db355ef8ba743b5e1333d0d53f218ab4bacd0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_4ac591c15f0dff0d27b383b57e0275785f6b31649f769ae0eb0d962da09786c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac591c15f0dff0d27b383b57e0275785f6b31649f769ae0eb0d962da09786c8->enter($__internal_4ac591c15f0dff0d27b383b57e0275785f6b31649f769ae0eb0d962da09786c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b87e8d685d361135b1d28d982db355ef8ba743b5e1333d0d53f218ab4bacd0ad->leave($__internal_b87e8d685d361135b1d28d982db355ef8ba743b5e1333d0d53f218ab4bacd0ad_prof);

        
        $__internal_4ac591c15f0dff0d27b383b57e0275785f6b31649f769ae0eb0d962da09786c8->leave($__internal_4ac591c15f0dff0d27b383b57e0275785f6b31649f769ae0eb0d962da09786c8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_749f8b3ae2be27d9092b50154dd320919038da474ea9bc1314e53882e44cdce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_749f8b3ae2be27d9092b50154dd320919038da474ea9bc1314e53882e44cdce2->enter($__internal_749f8b3ae2be27d9092b50154dd320919038da474ea9bc1314e53882e44cdce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a5636286e5180a74b9812b634e90eb69285045b93642866ac4707ad6d57dcf5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5636286e5180a74b9812b634e90eb69285045b93642866ac4707ad6d57dcf5a->enter($__internal_a5636286e5180a74b9812b634e90eb69285045b93642866ac4707ad6d57dcf5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a5636286e5180a74b9812b634e90eb69285045b93642866ac4707ad6d57dcf5a->leave($__internal_a5636286e5180a74b9812b634e90eb69285045b93642866ac4707ad6d57dcf5a_prof);

        
        $__internal_749f8b3ae2be27d9092b50154dd320919038da474ea9bc1314e53882e44cdce2->leave($__internal_749f8b3ae2be27d9092b50154dd320919038da474ea9bc1314e53882e44cdce2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8081fbd4f773de002052562af4dfe24089465fbdf3c69cf5c7435e80ae6659a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8081fbd4f773de002052562af4dfe24089465fbdf3c69cf5c7435e80ae6659a5->enter($__internal_8081fbd4f773de002052562af4dfe24089465fbdf3c69cf5c7435e80ae6659a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e561b1a31d5bb5fa48cece121dc587efda1c036cc908a3a48d4d810cccbfd07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e561b1a31d5bb5fa48cece121dc587efda1c036cc908a3a48d4d810cccbfd07->enter($__internal_7e561b1a31d5bb5fa48cece121dc587efda1c036cc908a3a48d4d810cccbfd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_7e561b1a31d5bb5fa48cece121dc587efda1c036cc908a3a48d4d810cccbfd07->leave($__internal_7e561b1a31d5bb5fa48cece121dc587efda1c036cc908a3a48d4d810cccbfd07_prof);

        
        $__internal_8081fbd4f773de002052562af4dfe24089465fbdf3c69cf5c7435e80ae6659a5->leave($__internal_8081fbd4f773de002052562af4dfe24089465fbdf3c69cf5c7435e80ae6659a5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
