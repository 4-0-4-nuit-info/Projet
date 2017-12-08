<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_3791ffa54039ce2a6a502944c80f963281f6134c886358317f982a75bec8f39c extends Twig_Template
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
        $__internal_fc9c54490ef79c94d8495e4b80cb62c4ac890c9d1ccc01896f93c61d4d65a7b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc9c54490ef79c94d8495e4b80cb62c4ac890c9d1ccc01896f93c61d4d65a7b1->enter($__internal_fc9c54490ef79c94d8495e4b80cb62c4ac890c9d1ccc01896f93c61d4d65a7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_c6a6398b352c162edb41be880a56fa0abeaf4a9108cced05cc7ad17b9a076873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a6398b352c162edb41be880a56fa0abeaf4a9108cced05cc7ad17b9a076873->enter($__internal_c6a6398b352c162edb41be880a56fa0abeaf4a9108cced05cc7ad17b9a076873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_fc9c54490ef79c94d8495e4b80cb62c4ac890c9d1ccc01896f93c61d4d65a7b1->leave($__internal_fc9c54490ef79c94d8495e4b80cb62c4ac890c9d1ccc01896f93c61d4d65a7b1_prof);

        
        $__internal_c6a6398b352c162edb41be880a56fa0abeaf4a9108cced05cc7ad17b9a076873->leave($__internal_c6a6398b352c162edb41be880a56fa0abeaf4a9108cced05cc7ad17b9a076873_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf46950b3b384f4c8719c1276176598a498157734688507f66b75af50fb8bde4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf46950b3b384f4c8719c1276176598a498157734688507f66b75af50fb8bde4->enter($__internal_bf46950b3b384f4c8719c1276176598a498157734688507f66b75af50fb8bde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a006b779612ba1892cf54e786d8b46d48cd704a9843cd14d83c8b1c9ee730bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a006b779612ba1892cf54e786d8b46d48cd704a9843cd14d83c8b1c9ee730bd8->enter($__internal_a006b779612ba1892cf54e786d8b46d48cd704a9843cd14d83c8b1c9ee730bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a006b779612ba1892cf54e786d8b46d48cd704a9843cd14d83c8b1c9ee730bd8->leave($__internal_a006b779612ba1892cf54e786d8b46d48cd704a9843cd14d83c8b1c9ee730bd8_prof);

        
        $__internal_bf46950b3b384f4c8719c1276176598a498157734688507f66b75af50fb8bde4->leave($__internal_bf46950b3b384f4c8719c1276176598a498157734688507f66b75af50fb8bde4_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_4a51c79af80691221c1b4071c74026504602d74c91398de08a781391d53f5c2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a51c79af80691221c1b4071c74026504602d74c91398de08a781391d53f5c2e->enter($__internal_4a51c79af80691221c1b4071c74026504602d74c91398de08a781391d53f5c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f1c1395d51b81e9d7abf39bafe7e8593e5dff251f89faee0ae58a512e81a749c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c1395d51b81e9d7abf39bafe7e8593e5dff251f89faee0ae58a512e81a749c->enter($__internal_f1c1395d51b81e9d7abf39bafe7e8593e5dff251f89faee0ae58a512e81a749c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f1c1395d51b81e9d7abf39bafe7e8593e5dff251f89faee0ae58a512e81a749c->leave($__internal_f1c1395d51b81e9d7abf39bafe7e8593e5dff251f89faee0ae58a512e81a749c_prof);

        
        $__internal_4a51c79af80691221c1b4071c74026504602d74c91398de08a781391d53f5c2e->leave($__internal_4a51c79af80691221c1b4071c74026504602d74c91398de08a781391d53f5c2e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_fff4878e0d41099f5577ec467ecae68c2ce99c12dfad60de34b1ede5bffc25c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fff4878e0d41099f5577ec467ecae68c2ce99c12dfad60de34b1ede5bffc25c0->enter($__internal_fff4878e0d41099f5577ec467ecae68c2ce99c12dfad60de34b1ede5bffc25c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ebc9bab5874eb699cd3afa0f26da9db539596ba36fc963660f2e71f39f62907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ebc9bab5874eb699cd3afa0f26da9db539596ba36fc963660f2e71f39f62907->enter($__internal_0ebc9bab5874eb699cd3afa0f26da9db539596ba36fc963660f2e71f39f62907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0ebc9bab5874eb699cd3afa0f26da9db539596ba36fc963660f2e71f39f62907->leave($__internal_0ebc9bab5874eb699cd3afa0f26da9db539596ba36fc963660f2e71f39f62907_prof);

        
        $__internal_fff4878e0d41099f5577ec467ecae68c2ce99c12dfad60de34b1ede5bffc25c0->leave($__internal_fff4878e0d41099f5577ec467ecae68c2ce99c12dfad60de34b1ede5bffc25c0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
