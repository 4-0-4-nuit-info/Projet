<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_91696a6e0cc9aad2b2a6ffbbf8651f1b29e3cbc2e48bd5dda9ee8ccabf53e928 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_f98d0ed03b9fe6cebb139bf1f9256bbf7850cf4d255823c3bd395e3f42d20c84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f98d0ed03b9fe6cebb139bf1f9256bbf7850cf4d255823c3bd395e3f42d20c84->enter($__internal_f98d0ed03b9fe6cebb139bf1f9256bbf7850cf4d255823c3bd395e3f42d20c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_909571085208c87f38e4eef0a87d9daf4f674d4cfb157eaf1c4441a56b51b1b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_909571085208c87f38e4eef0a87d9daf4f674d4cfb157eaf1c4441a56b51b1b1->enter($__internal_909571085208c87f38e4eef0a87d9daf4f674d4cfb157eaf1c4441a56b51b1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f98d0ed03b9fe6cebb139bf1f9256bbf7850cf4d255823c3bd395e3f42d20c84->leave($__internal_f98d0ed03b9fe6cebb139bf1f9256bbf7850cf4d255823c3bd395e3f42d20c84_prof);

        
        $__internal_909571085208c87f38e4eef0a87d9daf4f674d4cfb157eaf1c4441a56b51b1b1->leave($__internal_909571085208c87f38e4eef0a87d9daf4f674d4cfb157eaf1c4441a56b51b1b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_321cca4e7c1327281658b8fc55eb324b2860ff36a646ebbae19f5c427a2f82be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_321cca4e7c1327281658b8fc55eb324b2860ff36a646ebbae19f5c427a2f82be->enter($__internal_321cca4e7c1327281658b8fc55eb324b2860ff36a646ebbae19f5c427a2f82be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0917827af364ef67bec740b1944ee2c2eacfb9e5d14b2a4eeb39b03c4268fd96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0917827af364ef67bec740b1944ee2c2eacfb9e5d14b2a4eeb39b03c4268fd96->enter($__internal_0917827af364ef67bec740b1944ee2c2eacfb9e5d14b2a4eeb39b03c4268fd96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0917827af364ef67bec740b1944ee2c2eacfb9e5d14b2a4eeb39b03c4268fd96->leave($__internal_0917827af364ef67bec740b1944ee2c2eacfb9e5d14b2a4eeb39b03c4268fd96_prof);

        
        $__internal_321cca4e7c1327281658b8fc55eb324b2860ff36a646ebbae19f5c427a2f82be->leave($__internal_321cca4e7c1327281658b8fc55eb324b2860ff36a646ebbae19f5c427a2f82be_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cae611a7b1fb2297776f11044556c9fa8fbcb45fbb9f6f0c81f8fae4e4fcde5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cae611a7b1fb2297776f11044556c9fa8fbcb45fbb9f6f0c81f8fae4e4fcde5c->enter($__internal_cae611a7b1fb2297776f11044556c9fa8fbcb45fbb9f6f0c81f8fae4e4fcde5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1eed4687309c0fbf59517ee8779262a072cacad59efb8ac75360a543cee5819b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eed4687309c0fbf59517ee8779262a072cacad59efb8ac75360a543cee5819b->enter($__internal_1eed4687309c0fbf59517ee8779262a072cacad59efb8ac75360a543cee5819b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1eed4687309c0fbf59517ee8779262a072cacad59efb8ac75360a543cee5819b->leave($__internal_1eed4687309c0fbf59517ee8779262a072cacad59efb8ac75360a543cee5819b_prof);

        
        $__internal_cae611a7b1fb2297776f11044556c9fa8fbcb45fbb9f6f0c81f8fae4e4fcde5c->leave($__internal_cae611a7b1fb2297776f11044556c9fa8fbcb45fbb9f6f0c81f8fae4e4fcde5c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
