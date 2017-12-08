<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0a49730a4415c52dbae0bde59acb7a1499983a905e405c913fd1a90537bf38c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_07ee97e668d9308cca0418f2ac8d3189b84f711e9eea9ad9823b072970babf6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07ee97e668d9308cca0418f2ac8d3189b84f711e9eea9ad9823b072970babf6b->enter($__internal_07ee97e668d9308cca0418f2ac8d3189b84f711e9eea9ad9823b072970babf6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7198aea8b6b2e9c312562f08f3c35624fda2c94f90a3d591bedbc52be4bca34f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7198aea8b6b2e9c312562f08f3c35624fda2c94f90a3d591bedbc52be4bca34f->enter($__internal_7198aea8b6b2e9c312562f08f3c35624fda2c94f90a3d591bedbc52be4bca34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07ee97e668d9308cca0418f2ac8d3189b84f711e9eea9ad9823b072970babf6b->leave($__internal_07ee97e668d9308cca0418f2ac8d3189b84f711e9eea9ad9823b072970babf6b_prof);

        
        $__internal_7198aea8b6b2e9c312562f08f3c35624fda2c94f90a3d591bedbc52be4bca34f->leave($__internal_7198aea8b6b2e9c312562f08f3c35624fda2c94f90a3d591bedbc52be4bca34f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0d92ff4cbd784888a2fa1827f94267453ee50021601cb0284332ff9beeba8419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d92ff4cbd784888a2fa1827f94267453ee50021601cb0284332ff9beeba8419->enter($__internal_0d92ff4cbd784888a2fa1827f94267453ee50021601cb0284332ff9beeba8419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_09e149fca8c1115a86b33882f00df1eac7d4f6a8b1e69447e3c18057ab846491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e149fca8c1115a86b33882f00df1eac7d4f6a8b1e69447e3c18057ab846491->enter($__internal_09e149fca8c1115a86b33882f00df1eac7d4f6a8b1e69447e3c18057ab846491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_09e149fca8c1115a86b33882f00df1eac7d4f6a8b1e69447e3c18057ab846491->leave($__internal_09e149fca8c1115a86b33882f00df1eac7d4f6a8b1e69447e3c18057ab846491_prof);

        
        $__internal_0d92ff4cbd784888a2fa1827f94267453ee50021601cb0284332ff9beeba8419->leave($__internal_0d92ff4cbd784888a2fa1827f94267453ee50021601cb0284332ff9beeba8419_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a09eefaccef0d2622aca49ee94b59fcb9a2de06e1eef8d6bd0e100d472bca662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a09eefaccef0d2622aca49ee94b59fcb9a2de06e1eef8d6bd0e100d472bca662->enter($__internal_a09eefaccef0d2622aca49ee94b59fcb9a2de06e1eef8d6bd0e100d472bca662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5e63120950a8b653df16b35248015e0ce8b1b6d5dcd6557e1412d3d4db36f86d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e63120950a8b653df16b35248015e0ce8b1b6d5dcd6557e1412d3d4db36f86d->enter($__internal_5e63120950a8b653df16b35248015e0ce8b1b6d5dcd6557e1412d3d4db36f86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5e63120950a8b653df16b35248015e0ce8b1b6d5dcd6557e1412d3d4db36f86d->leave($__internal_5e63120950a8b653df16b35248015e0ce8b1b6d5dcd6557e1412d3d4db36f86d_prof);

        
        $__internal_a09eefaccef0d2622aca49ee94b59fcb9a2de06e1eef8d6bd0e100d472bca662->leave($__internal_a09eefaccef0d2622aca49ee94b59fcb9a2de06e1eef8d6bd0e100d472bca662_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f4a206d263498a88a450b75ec4a673972d7b0399eaa4943bfa58a4ccae78a65d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4a206d263498a88a450b75ec4a673972d7b0399eaa4943bfa58a4ccae78a65d->enter($__internal_f4a206d263498a88a450b75ec4a673972d7b0399eaa4943bfa58a4ccae78a65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f1400c5e4510580c796b889ba93096bdc53b7818007f0607a65bccc2e4b5d58b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1400c5e4510580c796b889ba93096bdc53b7818007f0607a65bccc2e4b5d58b->enter($__internal_f1400c5e4510580c796b889ba93096bdc53b7818007f0607a65bccc2e4b5d58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f1400c5e4510580c796b889ba93096bdc53b7818007f0607a65bccc2e4b5d58b->leave($__internal_f1400c5e4510580c796b889ba93096bdc53b7818007f0607a65bccc2e4b5d58b_prof);

        
        $__internal_f4a206d263498a88a450b75ec4a673972d7b0399eaa4943bfa58a4ccae78a65d->leave($__internal_f4a206d263498a88a450b75ec4a673972d7b0399eaa4943bfa58a4ccae78a65d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
