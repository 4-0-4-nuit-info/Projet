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
        $__internal_baba03a1dc697ed2f4ba9e6761e3918312b1e562de4b5f6bd63973587ab4deb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baba03a1dc697ed2f4ba9e6761e3918312b1e562de4b5f6bd63973587ab4deb1->enter($__internal_baba03a1dc697ed2f4ba9e6761e3918312b1e562de4b5f6bd63973587ab4deb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_014492617482dfeb77cb40e03d4362491498cf9bce1d5c888913619728317fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014492617482dfeb77cb40e03d4362491498cf9bce1d5c888913619728317fc3->enter($__internal_014492617482dfeb77cb40e03d4362491498cf9bce1d5c888913619728317fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_baba03a1dc697ed2f4ba9e6761e3918312b1e562de4b5f6bd63973587ab4deb1->leave($__internal_baba03a1dc697ed2f4ba9e6761e3918312b1e562de4b5f6bd63973587ab4deb1_prof);

        
        $__internal_014492617482dfeb77cb40e03d4362491498cf9bce1d5c888913619728317fc3->leave($__internal_014492617482dfeb77cb40e03d4362491498cf9bce1d5c888913619728317fc3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ceb76b581bb278cfe5964919c64f49364e720af951276777d3eb9ceb3854f3db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb76b581bb278cfe5964919c64f49364e720af951276777d3eb9ceb3854f3db->enter($__internal_ceb76b581bb278cfe5964919c64f49364e720af951276777d3eb9ceb3854f3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4f3675fe511131a6db51fe6b5dd9e6fa543765819364903bcc69a7deac3ee617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f3675fe511131a6db51fe6b5dd9e6fa543765819364903bcc69a7deac3ee617->enter($__internal_4f3675fe511131a6db51fe6b5dd9e6fa543765819364903bcc69a7deac3ee617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4f3675fe511131a6db51fe6b5dd9e6fa543765819364903bcc69a7deac3ee617->leave($__internal_4f3675fe511131a6db51fe6b5dd9e6fa543765819364903bcc69a7deac3ee617_prof);

        
        $__internal_ceb76b581bb278cfe5964919c64f49364e720af951276777d3eb9ceb3854f3db->leave($__internal_ceb76b581bb278cfe5964919c64f49364e720af951276777d3eb9ceb3854f3db_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_acb0c724f1178ff1c3d1b7bc5dacdec7fffe3a158c8761b84fba184f0f2270d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acb0c724f1178ff1c3d1b7bc5dacdec7fffe3a158c8761b84fba184f0f2270d2->enter($__internal_acb0c724f1178ff1c3d1b7bc5dacdec7fffe3a158c8761b84fba184f0f2270d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f8e452768ee074d360d428628fb4bb932226f0aed65b323e1f47965769d5ff5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e452768ee074d360d428628fb4bb932226f0aed65b323e1f47965769d5ff5c->enter($__internal_f8e452768ee074d360d428628fb4bb932226f0aed65b323e1f47965769d5ff5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f8e452768ee074d360d428628fb4bb932226f0aed65b323e1f47965769d5ff5c->leave($__internal_f8e452768ee074d360d428628fb4bb932226f0aed65b323e1f47965769d5ff5c_prof);

        
        $__internal_acb0c724f1178ff1c3d1b7bc5dacdec7fffe3a158c8761b84fba184f0f2270d2->leave($__internal_acb0c724f1178ff1c3d1b7bc5dacdec7fffe3a158c8761b84fba184f0f2270d2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ab5feb00ce2e9e97fd9985db65182b8797ffa27b7e2450c81c33bcd8837bed85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab5feb00ce2e9e97fd9985db65182b8797ffa27b7e2450c81c33bcd8837bed85->enter($__internal_ab5feb00ce2e9e97fd9985db65182b8797ffa27b7e2450c81c33bcd8837bed85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_95d60eec3a0a030dfdb101fbd2972196b9f0686929a41f2dc9fcfc0124945ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d60eec3a0a030dfdb101fbd2972196b9f0686929a41f2dc9fcfc0124945ef3->enter($__internal_95d60eec3a0a030dfdb101fbd2972196b9f0686929a41f2dc9fcfc0124945ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_95d60eec3a0a030dfdb101fbd2972196b9f0686929a41f2dc9fcfc0124945ef3->leave($__internal_95d60eec3a0a030dfdb101fbd2972196b9f0686929a41f2dc9fcfc0124945ef3_prof);

        
        $__internal_ab5feb00ce2e9e97fd9985db65182b8797ffa27b7e2450c81c33bcd8837bed85->leave($__internal_ab5feb00ce2e9e97fd9985db65182b8797ffa27b7e2450c81c33bcd8837bed85_prof);

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
