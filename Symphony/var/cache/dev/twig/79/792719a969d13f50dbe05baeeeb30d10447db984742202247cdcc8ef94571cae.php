<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_9e1f39cc316dbded925ff69006bf06f639d30bcc75083a0c4320d29c2c1aaff9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8864b70b4f9af65cee881914acc2a12239edded1565d56dca61230fd0ed5cd16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8864b70b4f9af65cee881914acc2a12239edded1565d56dca61230fd0ed5cd16->enter($__internal_8864b70b4f9af65cee881914acc2a12239edded1565d56dca61230fd0ed5cd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_24dbc94cd3df98332a99c269d98280573fc23c4b6728fe8e983a8afefadb8819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24dbc94cd3df98332a99c269d98280573fc23c4b6728fe8e983a8afefadb8819->enter($__internal_24dbc94cd3df98332a99c269d98280573fc23c4b6728fe8e983a8afefadb8819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_8864b70b4f9af65cee881914acc2a12239edded1565d56dca61230fd0ed5cd16->leave($__internal_8864b70b4f9af65cee881914acc2a12239edded1565d56dca61230fd0ed5cd16_prof);

        
        $__internal_24dbc94cd3df98332a99c269d98280573fc23c4b6728fe8e983a8afefadb8819->leave($__internal_24dbc94cd3df98332a99c269d98280573fc23c4b6728fe8e983a8afefadb8819_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_84e6321de53fde47dfb36a6a471d6c77136bd7b1d083321dd45cac685d0b26d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84e6321de53fde47dfb36a6a471d6c77136bd7b1d083321dd45cac685d0b26d7->enter($__internal_84e6321de53fde47dfb36a6a471d6c77136bd7b1d083321dd45cac685d0b26d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f26a32e76d337704a3779354970424c62dbfede5c7a94c98d4413daf3894db4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26a32e76d337704a3779354970424c62dbfede5c7a94c98d4413daf3894db4b->enter($__internal_f26a32e76d337704a3779354970424c62dbfede5c7a94c98d4413daf3894db4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f26a32e76d337704a3779354970424c62dbfede5c7a94c98d4413daf3894db4b->leave($__internal_f26a32e76d337704a3779354970424c62dbfede5c7a94c98d4413daf3894db4b_prof);

        
        $__internal_84e6321de53fde47dfb36a6a471d6c77136bd7b1d083321dd45cac685d0b26d7->leave($__internal_84e6321de53fde47dfb36a6a471d6c77136bd7b1d083321dd45cac685d0b26d7_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_47d9669f0c780e746f3634af96f4e565081d2bc8a290f741d5b365d9f295f78e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d9669f0c780e746f3634af96f4e565081d2bc8a290f741d5b365d9f295f78e->enter($__internal_47d9669f0c780e746f3634af96f4e565081d2bc8a290f741d5b365d9f295f78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_be37f10a5ede21e639706ba7d363de48110039316445bfb3cbbc6859a53f42c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be37f10a5ede21e639706ba7d363de48110039316445bfb3cbbc6859a53f42c5->enter($__internal_be37f10a5ede21e639706ba7d363de48110039316445bfb3cbbc6859a53f42c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_be37f10a5ede21e639706ba7d363de48110039316445bfb3cbbc6859a53f42c5->leave($__internal_be37f10a5ede21e639706ba7d363de48110039316445bfb3cbbc6859a53f42c5_prof);

        
        $__internal_47d9669f0c780e746f3634af96f4e565081d2bc8a290f741d5b365d9f295f78e->leave($__internal_47d9669f0c780e746f3634af96f4e565081d2bc8a290f741d5b365d9f295f78e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_44db57db03b3799e6fb085e7866c8b7394e3c98797e13e0acf9d8812b1a86e04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44db57db03b3799e6fb085e7866c8b7394e3c98797e13e0acf9d8812b1a86e04->enter($__internal_44db57db03b3799e6fb085e7866c8b7394e3c98797e13e0acf9d8812b1a86e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05c58e3cbcb21f7698b9e0e423cf23110b496d77d3e57f865511bacf62977706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c58e3cbcb21f7698b9e0e423cf23110b496d77d3e57f865511bacf62977706->enter($__internal_05c58e3cbcb21f7698b9e0e423cf23110b496d77d3e57f865511bacf62977706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_05c58e3cbcb21f7698b9e0e423cf23110b496d77d3e57f865511bacf62977706->leave($__internal_05c58e3cbcb21f7698b9e0e423cf23110b496d77d3e57f865511bacf62977706_prof);

        
        $__internal_44db57db03b3799e6fb085e7866c8b7394e3c98797e13e0acf9d8812b1a86e04->leave($__internal_44db57db03b3799e6fb085e7866c8b7394e3c98797e13e0acf9d8812b1a86e04_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
