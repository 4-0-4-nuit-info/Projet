<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b4917099ad595ef29c5fb2e3ae42e3c47ff931bacceb4ea3f9ba1bf60a57196a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_df607978f42c102ab011a7882ee5d8417443cc0a41ddce366e70dc53b7c0957a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df607978f42c102ab011a7882ee5d8417443cc0a41ddce366e70dc53b7c0957a->enter($__internal_df607978f42c102ab011a7882ee5d8417443cc0a41ddce366e70dc53b7c0957a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_03f85555b1511f4bcba0788b9f0ee5c55bb9a4011d29507c75461b75599646ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03f85555b1511f4bcba0788b9f0ee5c55bb9a4011d29507c75461b75599646ab->enter($__internal_03f85555b1511f4bcba0788b9f0ee5c55bb9a4011d29507c75461b75599646ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df607978f42c102ab011a7882ee5d8417443cc0a41ddce366e70dc53b7c0957a->leave($__internal_df607978f42c102ab011a7882ee5d8417443cc0a41ddce366e70dc53b7c0957a_prof);

        
        $__internal_03f85555b1511f4bcba0788b9f0ee5c55bb9a4011d29507c75461b75599646ab->leave($__internal_03f85555b1511f4bcba0788b9f0ee5c55bb9a4011d29507c75461b75599646ab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9fc0c5d89c558815c425b0df9bcdc0a4542c33ea5652bb74bb12623a7711c45f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fc0c5d89c558815c425b0df9bcdc0a4542c33ea5652bb74bb12623a7711c45f->enter($__internal_9fc0c5d89c558815c425b0df9bcdc0a4542c33ea5652bb74bb12623a7711c45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4008e9914645368186c982d09e23330239ca652833436cc506883504e70187ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4008e9914645368186c982d09e23330239ca652833436cc506883504e70187ee->enter($__internal_4008e9914645368186c982d09e23330239ca652833436cc506883504e70187ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4008e9914645368186c982d09e23330239ca652833436cc506883504e70187ee->leave($__internal_4008e9914645368186c982d09e23330239ca652833436cc506883504e70187ee_prof);

        
        $__internal_9fc0c5d89c558815c425b0df9bcdc0a4542c33ea5652bb74bb12623a7711c45f->leave($__internal_9fc0c5d89c558815c425b0df9bcdc0a4542c33ea5652bb74bb12623a7711c45f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc123b2931932938af9d3af5242009331c7e2a60f1b4b4ae1abc939a98387f19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc123b2931932938af9d3af5242009331c7e2a60f1b4b4ae1abc939a98387f19->enter($__internal_dc123b2931932938af9d3af5242009331c7e2a60f1b4b4ae1abc939a98387f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8f28136f5cc68210561f83763d322b969a7fc9202ab7fadf8cf739a1cae68ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f28136f5cc68210561f83763d322b969a7fc9202ab7fadf8cf739a1cae68ece->enter($__internal_8f28136f5cc68210561f83763d322b969a7fc9202ab7fadf8cf739a1cae68ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8f28136f5cc68210561f83763d322b969a7fc9202ab7fadf8cf739a1cae68ece->leave($__internal_8f28136f5cc68210561f83763d322b969a7fc9202ab7fadf8cf739a1cae68ece_prof);

        
        $__internal_dc123b2931932938af9d3af5242009331c7e2a60f1b4b4ae1abc939a98387f19->leave($__internal_dc123b2931932938af9d3af5242009331c7e2a60f1b4b4ae1abc939a98387f19_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_464aaadfecaa008771c05d5ddc6029eeeaea3cf7eef6c547151c865bdf81e81b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_464aaadfecaa008771c05d5ddc6029eeeaea3cf7eef6c547151c865bdf81e81b->enter($__internal_464aaadfecaa008771c05d5ddc6029eeeaea3cf7eef6c547151c865bdf81e81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04275a5a0af369070d58550dea4bfda0f1d00ad04fb94b90a70d8608a203b208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04275a5a0af369070d58550dea4bfda0f1d00ad04fb94b90a70d8608a203b208->enter($__internal_04275a5a0af369070d58550dea4bfda0f1d00ad04fb94b90a70d8608a203b208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_04275a5a0af369070d58550dea4bfda0f1d00ad04fb94b90a70d8608a203b208->leave($__internal_04275a5a0af369070d58550dea4bfda0f1d00ad04fb94b90a70d8608a203b208_prof);

        
        $__internal_464aaadfecaa008771c05d5ddc6029eeeaea3cf7eef6c547151c865bdf81e81b->leave($__internal_464aaadfecaa008771c05d5ddc6029eeeaea3cf7eef6c547151c865bdf81e81b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
