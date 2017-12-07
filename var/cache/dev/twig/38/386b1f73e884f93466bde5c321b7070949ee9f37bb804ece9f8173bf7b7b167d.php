<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5e93d5e3a429ea82cc5e671f8331b5b453268563aaa38cfc38e349a13569248b extends Twig_Template
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
        $__internal_19ebadfab2a5d40763c1b3591d9dd65153d144c3086402cb8d8ee0cb72b73032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ebadfab2a5d40763c1b3591d9dd65153d144c3086402cb8d8ee0cb72b73032->enter($__internal_19ebadfab2a5d40763c1b3591d9dd65153d144c3086402cb8d8ee0cb72b73032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_997c2d412f019a16bd54c2671345742f691b4d102d6f24a663faf3b97fe30220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997c2d412f019a16bd54c2671345742f691b4d102d6f24a663faf3b97fe30220->enter($__internal_997c2d412f019a16bd54c2671345742f691b4d102d6f24a663faf3b97fe30220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19ebadfab2a5d40763c1b3591d9dd65153d144c3086402cb8d8ee0cb72b73032->leave($__internal_19ebadfab2a5d40763c1b3591d9dd65153d144c3086402cb8d8ee0cb72b73032_prof);

        
        $__internal_997c2d412f019a16bd54c2671345742f691b4d102d6f24a663faf3b97fe30220->leave($__internal_997c2d412f019a16bd54c2671345742f691b4d102d6f24a663faf3b97fe30220_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_adaa080c4a81186e00f0fc8835eebf846ff97a234ccbb8c59523acfbb3eed670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adaa080c4a81186e00f0fc8835eebf846ff97a234ccbb8c59523acfbb3eed670->enter($__internal_adaa080c4a81186e00f0fc8835eebf846ff97a234ccbb8c59523acfbb3eed670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_819fe386c2e05a9d25895f4e521cf8beede4cc077051a0227477398ef748128f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_819fe386c2e05a9d25895f4e521cf8beede4cc077051a0227477398ef748128f->enter($__internal_819fe386c2e05a9d25895f4e521cf8beede4cc077051a0227477398ef748128f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_819fe386c2e05a9d25895f4e521cf8beede4cc077051a0227477398ef748128f->leave($__internal_819fe386c2e05a9d25895f4e521cf8beede4cc077051a0227477398ef748128f_prof);

        
        $__internal_adaa080c4a81186e00f0fc8835eebf846ff97a234ccbb8c59523acfbb3eed670->leave($__internal_adaa080c4a81186e00f0fc8835eebf846ff97a234ccbb8c59523acfbb3eed670_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a866db3cbbca3e1af001b680fe3387d94835683af2a15e70cd8a033f1a08eeb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a866db3cbbca3e1af001b680fe3387d94835683af2a15e70cd8a033f1a08eeb2->enter($__internal_a866db3cbbca3e1af001b680fe3387d94835683af2a15e70cd8a033f1a08eeb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6c8f912621643418f05f52dd091c6f72c04ad9b5b88a46410f3b630142ed7d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c8f912621643418f05f52dd091c6f72c04ad9b5b88a46410f3b630142ed7d3c->enter($__internal_6c8f912621643418f05f52dd091c6f72c04ad9b5b88a46410f3b630142ed7d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6c8f912621643418f05f52dd091c6f72c04ad9b5b88a46410f3b630142ed7d3c->leave($__internal_6c8f912621643418f05f52dd091c6f72c04ad9b5b88a46410f3b630142ed7d3c_prof);

        
        $__internal_a866db3cbbca3e1af001b680fe3387d94835683af2a15e70cd8a033f1a08eeb2->leave($__internal_a866db3cbbca3e1af001b680fe3387d94835683af2a15e70cd8a033f1a08eeb2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_636952968bb2f35a6c5a32b6010f6fcf0356714762a761b157bb51db30951781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_636952968bb2f35a6c5a32b6010f6fcf0356714762a761b157bb51db30951781->enter($__internal_636952968bb2f35a6c5a32b6010f6fcf0356714762a761b157bb51db30951781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d2da9931f16a7c17c67bb85788bf7911960ea1295c6f4df1c9d1b4fbc4ea365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d2da9931f16a7c17c67bb85788bf7911960ea1295c6f4df1c9d1b4fbc4ea365->enter($__internal_2d2da9931f16a7c17c67bb85788bf7911960ea1295c6f4df1c9d1b4fbc4ea365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2d2da9931f16a7c17c67bb85788bf7911960ea1295c6f4df1c9d1b4fbc4ea365->leave($__internal_2d2da9931f16a7c17c67bb85788bf7911960ea1295c6f4df1c9d1b4fbc4ea365_prof);

        
        $__internal_636952968bb2f35a6c5a32b6010f6fcf0356714762a761b157bb51db30951781->leave($__internal_636952968bb2f35a6c5a32b6010f6fcf0356714762a761b157bb51db30951781_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/Projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
