<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_725548b338eedc6c46ee3de02a8aa95131ead8954a4e2422c00f4878513a43ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_876159eeb05063390aafec70ba43be0e4e69d6e14f523973403e0f38ba21246d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_876159eeb05063390aafec70ba43be0e4e69d6e14f523973403e0f38ba21246d->enter($__internal_876159eeb05063390aafec70ba43be0e4e69d6e14f523973403e0f38ba21246d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_8792c95bb4d8e6786bff82bb77187ed9b2b2aa4a364186f0f8dc159ddf94b36c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8792c95bb4d8e6786bff82bb77187ed9b2b2aa4a364186f0f8dc159ddf94b36c->enter($__internal_8792c95bb4d8e6786bff82bb77187ed9b2b2aa4a364186f0f8dc159ddf94b36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_876159eeb05063390aafec70ba43be0e4e69d6e14f523973403e0f38ba21246d->leave($__internal_876159eeb05063390aafec70ba43be0e4e69d6e14f523973403e0f38ba21246d_prof);

        
        $__internal_8792c95bb4d8e6786bff82bb77187ed9b2b2aa4a364186f0f8dc159ddf94b36c->leave($__internal_8792c95bb4d8e6786bff82bb77187ed9b2b2aa4a364186f0f8dc159ddf94b36c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b461ebb90118770b1f4e35b89885268ca793e32076600ac1f80d42233a8af4b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b461ebb90118770b1f4e35b89885268ca793e32076600ac1f80d42233a8af4b7->enter($__internal_b461ebb90118770b1f4e35b89885268ca793e32076600ac1f80d42233a8af4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7c1c58616c85af3b656e7e97e1e367ceb7bc424632aa4704b891b834233bba9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c1c58616c85af3b656e7e97e1e367ceb7bc424632aa4704b891b834233bba9d->enter($__internal_7c1c58616c85af3b656e7e97e1e367ceb7bc424632aa4704b891b834233bba9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7c1c58616c85af3b656e7e97e1e367ceb7bc424632aa4704b891b834233bba9d->leave($__internal_7c1c58616c85af3b656e7e97e1e367ceb7bc424632aa4704b891b834233bba9d_prof);

        
        $__internal_b461ebb90118770b1f4e35b89885268ca793e32076600ac1f80d42233a8af4b7->leave($__internal_b461ebb90118770b1f4e35b89885268ca793e32076600ac1f80d42233a8af4b7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_700f204bdda90b15c6fb177be7d8926642f5aed24f08d4a7172c47851ddb3b14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_700f204bdda90b15c6fb177be7d8926642f5aed24f08d4a7172c47851ddb3b14->enter($__internal_700f204bdda90b15c6fb177be7d8926642f5aed24f08d4a7172c47851ddb3b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_848e0de7e31d0c478fbbbd1cefb54ec440d267a5dc1d77abff1550ea1b1b4de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_848e0de7e31d0c478fbbbd1cefb54ec440d267a5dc1d77abff1550ea1b1b4de9->enter($__internal_848e0de7e31d0c478fbbbd1cefb54ec440d267a5dc1d77abff1550ea1b1b4de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_848e0de7e31d0c478fbbbd1cefb54ec440d267a5dc1d77abff1550ea1b1b4de9->leave($__internal_848e0de7e31d0c478fbbbd1cefb54ec440d267a5dc1d77abff1550ea1b1b4de9_prof);

        
        $__internal_700f204bdda90b15c6fb177be7d8926642f5aed24f08d4a7172c47851ddb3b14->leave($__internal_700f204bdda90b15c6fb177be7d8926642f5aed24f08d4a7172c47851ddb3b14_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_56935428fee2d938ba9db1bb809e921bd2c3300a5ee0fabbc59500decd7c9fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56935428fee2d938ba9db1bb809e921bd2c3300a5ee0fabbc59500decd7c9fe8->enter($__internal_56935428fee2d938ba9db1bb809e921bd2c3300a5ee0fabbc59500decd7c9fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1108a33e7656461b98fe7bbabcb8a1b91fd4c902e8a5ddf6ad4eb06b95654eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1108a33e7656461b98fe7bbabcb8a1b91fd4c902e8a5ddf6ad4eb06b95654eef->enter($__internal_1108a33e7656461b98fe7bbabcb8a1b91fd4c902e8a5ddf6ad4eb06b95654eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1108a33e7656461b98fe7bbabcb8a1b91fd4c902e8a5ddf6ad4eb06b95654eef->leave($__internal_1108a33e7656461b98fe7bbabcb8a1b91fd4c902e8a5ddf6ad4eb06b95654eef_prof);

        
        $__internal_56935428fee2d938ba9db1bb809e921bd2c3300a5ee0fabbc59500decd7c9fe8->leave($__internal_56935428fee2d938ba9db1bb809e921bd2c3300a5ee0fabbc59500decd7c9fe8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
