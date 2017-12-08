<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e12506caa6aa0b489a5a6e3aed6a7d8b525d78ffcaed02e7eb56bb15cc405767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0cd4c063e3f9fc60b7abaf0f64ee31917aeec693fe5a4feb6d95a13784036c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0cd4c063e3f9fc60b7abaf0f64ee31917aeec693fe5a4feb6d95a13784036c3->enter($__internal_e0cd4c063e3f9fc60b7abaf0f64ee31917aeec693fe5a4feb6d95a13784036c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_45612fa65b026c7d0bcdd868599a6cd56a91ab0b2536428bcaabfe6f9089d2b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45612fa65b026c7d0bcdd868599a6cd56a91ab0b2536428bcaabfe6f9089d2b7->enter($__internal_45612fa65b026c7d0bcdd868599a6cd56a91ab0b2536428bcaabfe6f9089d2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0cd4c063e3f9fc60b7abaf0f64ee31917aeec693fe5a4feb6d95a13784036c3->leave($__internal_e0cd4c063e3f9fc60b7abaf0f64ee31917aeec693fe5a4feb6d95a13784036c3_prof);

        
        $__internal_45612fa65b026c7d0bcdd868599a6cd56a91ab0b2536428bcaabfe6f9089d2b7->leave($__internal_45612fa65b026c7d0bcdd868599a6cd56a91ab0b2536428bcaabfe6f9089d2b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae7f5621b99f27542edd080933c8b7b30c0fb85d68f7d8fbc4757715e43807f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae7f5621b99f27542edd080933c8b7b30c0fb85d68f7d8fbc4757715e43807f6->enter($__internal_ae7f5621b99f27542edd080933c8b7b30c0fb85d68f7d8fbc4757715e43807f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_91aead24d0ee71eb43742abfee9ef8d4f02fba5aa65c322ac07570a1e7a60a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91aead24d0ee71eb43742abfee9ef8d4f02fba5aa65c322ac07570a1e7a60a41->enter($__internal_91aead24d0ee71eb43742abfee9ef8d4f02fba5aa65c322ac07570a1e7a60a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_91aead24d0ee71eb43742abfee9ef8d4f02fba5aa65c322ac07570a1e7a60a41->leave($__internal_91aead24d0ee71eb43742abfee9ef8d4f02fba5aa65c322ac07570a1e7a60a41_prof);

        
        $__internal_ae7f5621b99f27542edd080933c8b7b30c0fb85d68f7d8fbc4757715e43807f6->leave($__internal_ae7f5621b99f27542edd080933c8b7b30c0fb85d68f7d8fbc4757715e43807f6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_afad80d0c5123eb37fd94c8f38563b311a39b810e22dae48cf9597f9a810dd54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afad80d0c5123eb37fd94c8f38563b311a39b810e22dae48cf9597f9a810dd54->enter($__internal_afad80d0c5123eb37fd94c8f38563b311a39b810e22dae48cf9597f9a810dd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_feb62ec1587b5967aac27b612d6a521fd8623cf876eef8a44b537df3dcfad0fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb62ec1587b5967aac27b612d6a521fd8623cf876eef8a44b537df3dcfad0fc->enter($__internal_feb62ec1587b5967aac27b612d6a521fd8623cf876eef8a44b537df3dcfad0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_feb62ec1587b5967aac27b612d6a521fd8623cf876eef8a44b537df3dcfad0fc->leave($__internal_feb62ec1587b5967aac27b612d6a521fd8623cf876eef8a44b537df3dcfad0fc_prof);

        
        $__internal_afad80d0c5123eb37fd94c8f38563b311a39b810e22dae48cf9597f9a810dd54->leave($__internal_afad80d0c5123eb37fd94c8f38563b311a39b810e22dae48cf9597f9a810dd54_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ad5b05b722fbc549d67bc6b4b3d8567fa8ca71dfef3a2b0fc1e064efd2b89523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad5b05b722fbc549d67bc6b4b3d8567fa8ca71dfef3a2b0fc1e064efd2b89523->enter($__internal_ad5b05b722fbc549d67bc6b4b3d8567fa8ca71dfef3a2b0fc1e064efd2b89523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b07a8389e355771675cfa02001631dc5e1c2cd2c9a1ab1fad0d7c081a71d13f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b07a8389e355771675cfa02001631dc5e1c2cd2c9a1ab1fad0d7c081a71d13f9->enter($__internal_b07a8389e355771675cfa02001631dc5e1c2cd2c9a1ab1fad0d7c081a71d13f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b07a8389e355771675cfa02001631dc5e1c2cd2c9a1ab1fad0d7c081a71d13f9->leave($__internal_b07a8389e355771675cfa02001631dc5e1c2cd2c9a1ab1fad0d7c081a71d13f9_prof);

        
        $__internal_ad5b05b722fbc549d67bc6b4b3d8567fa8ca71dfef3a2b0fc1e064efd2b89523->leave($__internal_ad5b05b722fbc549d67bc6b4b3d8567fa8ca71dfef3a2b0fc1e064efd2b89523_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
