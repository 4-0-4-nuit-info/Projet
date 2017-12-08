<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f105047b354efc8b735bf76a9266c0d36af85fb6d992e9fbd51ae88d75a78747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_cc7a93c052b48caa90ca201e4ea1fbf194726e1914d9d0ad4a0f37361585f520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc7a93c052b48caa90ca201e4ea1fbf194726e1914d9d0ad4a0f37361585f520->enter($__internal_cc7a93c052b48caa90ca201e4ea1fbf194726e1914d9d0ad4a0f37361585f520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_88bab68f9862ed39b1a972a2e71474a3150895efba6068dc85fc3f14414aface = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88bab68f9862ed39b1a972a2e71474a3150895efba6068dc85fc3f14414aface->enter($__internal_88bab68f9862ed39b1a972a2e71474a3150895efba6068dc85fc3f14414aface_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc7a93c052b48caa90ca201e4ea1fbf194726e1914d9d0ad4a0f37361585f520->leave($__internal_cc7a93c052b48caa90ca201e4ea1fbf194726e1914d9d0ad4a0f37361585f520_prof);

        
        $__internal_88bab68f9862ed39b1a972a2e71474a3150895efba6068dc85fc3f14414aface->leave($__internal_88bab68f9862ed39b1a972a2e71474a3150895efba6068dc85fc3f14414aface_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a496dd43736d1a30f9d194631f3c3118723c580c60ba98d56bf166126c84cf96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a496dd43736d1a30f9d194631f3c3118723c580c60ba98d56bf166126c84cf96->enter($__internal_a496dd43736d1a30f9d194631f3c3118723c580c60ba98d56bf166126c84cf96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bfe93449ec81fc36f0ff004ce56fe88a8edae7c52f148decf9cef06db0dec8b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfe93449ec81fc36f0ff004ce56fe88a8edae7c52f148decf9cef06db0dec8b5->enter($__internal_bfe93449ec81fc36f0ff004ce56fe88a8edae7c52f148decf9cef06db0dec8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_bfe93449ec81fc36f0ff004ce56fe88a8edae7c52f148decf9cef06db0dec8b5->leave($__internal_bfe93449ec81fc36f0ff004ce56fe88a8edae7c52f148decf9cef06db0dec8b5_prof);

        
        $__internal_a496dd43736d1a30f9d194631f3c3118723c580c60ba98d56bf166126c84cf96->leave($__internal_a496dd43736d1a30f9d194631f3c3118723c580c60ba98d56bf166126c84cf96_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_145b1ec1102a23cead8877fcdcaf97fcf524f99e9d8f9d3cd5b8b5c333939199 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_145b1ec1102a23cead8877fcdcaf97fcf524f99e9d8f9d3cd5b8b5c333939199->enter($__internal_145b1ec1102a23cead8877fcdcaf97fcf524f99e9d8f9d3cd5b8b5c333939199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_32c920b66aac7a65f90ddfb0f0cd4f7ca35974fb40c958cb9299f90db3443ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c920b66aac7a65f90ddfb0f0cd4f7ca35974fb40c958cb9299f90db3443ee8->enter($__internal_32c920b66aac7a65f90ddfb0f0cd4f7ca35974fb40c958cb9299f90db3443ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_32c920b66aac7a65f90ddfb0f0cd4f7ca35974fb40c958cb9299f90db3443ee8->leave($__internal_32c920b66aac7a65f90ddfb0f0cd4f7ca35974fb40c958cb9299f90db3443ee8_prof);

        
        $__internal_145b1ec1102a23cead8877fcdcaf97fcf524f99e9d8f9d3cd5b8b5c333939199->leave($__internal_145b1ec1102a23cead8877fcdcaf97fcf524f99e9d8f9d3cd5b8b5c333939199_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a648ec592ae2eea687f4d5a50659ddf17c999bdda1e5cb39657ca58bd737845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a648ec592ae2eea687f4d5a50659ddf17c999bdda1e5cb39657ca58bd737845->enter($__internal_2a648ec592ae2eea687f4d5a50659ddf17c999bdda1e5cb39657ca58bd737845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ea74d8c10cad111c6cce4e3d9c1c1ce67f51f8c2cc91d675f90f61c8c275a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea74d8c10cad111c6cce4e3d9c1c1ce67f51f8c2cc91d675f90f61c8c275a42->enter($__internal_5ea74d8c10cad111c6cce4e3d9c1c1ce67f51f8c2cc91d675f90f61c8c275a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5ea74d8c10cad111c6cce4e3d9c1c1ce67f51f8c2cc91d675f90f61c8c275a42->leave($__internal_5ea74d8c10cad111c6cce4e3d9c1c1ce67f51f8c2cc91d675f90f61c8c275a42_prof);

        
        $__internal_2a648ec592ae2eea687f4d5a50659ddf17c999bdda1e5cb39657ca58bd737845->leave($__internal_2a648ec592ae2eea687f4d5a50659ddf17c999bdda1e5cb39657ca58bd737845_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
