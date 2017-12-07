<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_4ab0d1599d6fabc4058bc359f1f626bef78779911e18157e59cabab6d769661f extends Twig_Template
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
        $__internal_5945d303d1fa0846b72a8609dcea2bcf173b51d59977ecf8409817d08d98dde7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5945d303d1fa0846b72a8609dcea2bcf173b51d59977ecf8409817d08d98dde7->enter($__internal_5945d303d1fa0846b72a8609dcea2bcf173b51d59977ecf8409817d08d98dde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_59e2230878100e7c0df7579a5651b18e92ba6e60f7c6ee89f32879658ed89368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e2230878100e7c0df7579a5651b18e92ba6e60f7c6ee89f32879658ed89368->enter($__internal_59e2230878100e7c0df7579a5651b18e92ba6e60f7c6ee89f32879658ed89368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_5945d303d1fa0846b72a8609dcea2bcf173b51d59977ecf8409817d08d98dde7->leave($__internal_5945d303d1fa0846b72a8609dcea2bcf173b51d59977ecf8409817d08d98dde7_prof);

        
        $__internal_59e2230878100e7c0df7579a5651b18e92ba6e60f7c6ee89f32879658ed89368->leave($__internal_59e2230878100e7c0df7579a5651b18e92ba6e60f7c6ee89f32879658ed89368_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2fa319c1e42a8f9712f4ffdfc4c68bd5cb49d56f6b997253a1e2cfa7fbed94c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fa319c1e42a8f9712f4ffdfc4c68bd5cb49d56f6b997253a1e2cfa7fbed94c9->enter($__internal_2fa319c1e42a8f9712f4ffdfc4c68bd5cb49d56f6b997253a1e2cfa7fbed94c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4efe7ff0248caef10208c5f4001c2a0cb4d3768bde8d8bd2c506d1f5366019fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4efe7ff0248caef10208c5f4001c2a0cb4d3768bde8d8bd2c506d1f5366019fa->enter($__internal_4efe7ff0248caef10208c5f4001c2a0cb4d3768bde8d8bd2c506d1f5366019fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4efe7ff0248caef10208c5f4001c2a0cb4d3768bde8d8bd2c506d1f5366019fa->leave($__internal_4efe7ff0248caef10208c5f4001c2a0cb4d3768bde8d8bd2c506d1f5366019fa_prof);

        
        $__internal_2fa319c1e42a8f9712f4ffdfc4c68bd5cb49d56f6b997253a1e2cfa7fbed94c9->leave($__internal_2fa319c1e42a8f9712f4ffdfc4c68bd5cb49d56f6b997253a1e2cfa7fbed94c9_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a9a34b03584c05c019afacadfae386cc98e30a8c184f327b74262479eaf6560b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9a34b03584c05c019afacadfae386cc98e30a8c184f327b74262479eaf6560b->enter($__internal_a9a34b03584c05c019afacadfae386cc98e30a8c184f327b74262479eaf6560b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_57c0b8f0d958165dbfa27abdc12bdaaf63934df1a985a08ec645bc3840c4877e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c0b8f0d958165dbfa27abdc12bdaaf63934df1a985a08ec645bc3840c4877e->enter($__internal_57c0b8f0d958165dbfa27abdc12bdaaf63934df1a985a08ec645bc3840c4877e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_57c0b8f0d958165dbfa27abdc12bdaaf63934df1a985a08ec645bc3840c4877e->leave($__internal_57c0b8f0d958165dbfa27abdc12bdaaf63934df1a985a08ec645bc3840c4877e_prof);

        
        $__internal_a9a34b03584c05c019afacadfae386cc98e30a8c184f327b74262479eaf6560b->leave($__internal_a9a34b03584c05c019afacadfae386cc98e30a8c184f327b74262479eaf6560b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_586406f5a03fee544e58de26c48b70b140049b06137e9d19b0e39343a7ec237c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_586406f5a03fee544e58de26c48b70b140049b06137e9d19b0e39343a7ec237c->enter($__internal_586406f5a03fee544e58de26c48b70b140049b06137e9d19b0e39343a7ec237c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad1ab93fbc13f21560435b68f175ecd8f4a7c65369ad9a42fc5db37d2041595c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1ab93fbc13f21560435b68f175ecd8f4a7c65369ad9a42fc5db37d2041595c->enter($__internal_ad1ab93fbc13f21560435b68f175ecd8f4a7c65369ad9a42fc5db37d2041595c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ad1ab93fbc13f21560435b68f175ecd8f4a7c65369ad9a42fc5db37d2041595c->leave($__internal_ad1ab93fbc13f21560435b68f175ecd8f4a7c65369ad9a42fc5db37d2041595c_prof);

        
        $__internal_586406f5a03fee544e58de26c48b70b140049b06137e9d19b0e39343a7ec237c->leave($__internal_586406f5a03fee544e58de26c48b70b140049b06137e9d19b0e39343a7ec237c_prof);

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
", "@Twig/layout.html.twig", "/var/www/Projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
