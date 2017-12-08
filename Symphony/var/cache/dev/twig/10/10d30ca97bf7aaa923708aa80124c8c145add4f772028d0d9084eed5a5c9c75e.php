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
        $__internal_37480bebf650b4a54e22267e7a73c8a28399d23c47dd1eb44eedf834b0bd0374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37480bebf650b4a54e22267e7a73c8a28399d23c47dd1eb44eedf834b0bd0374->enter($__internal_37480bebf650b4a54e22267e7a73c8a28399d23c47dd1eb44eedf834b0bd0374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_55527c5b468e74462cfd874349ad4649403887300e3bfbee43847163b95d1875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55527c5b468e74462cfd874349ad4649403887300e3bfbee43847163b95d1875->enter($__internal_55527c5b468e74462cfd874349ad4649403887300e3bfbee43847163b95d1875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37480bebf650b4a54e22267e7a73c8a28399d23c47dd1eb44eedf834b0bd0374->leave($__internal_37480bebf650b4a54e22267e7a73c8a28399d23c47dd1eb44eedf834b0bd0374_prof);

        
        $__internal_55527c5b468e74462cfd874349ad4649403887300e3bfbee43847163b95d1875->leave($__internal_55527c5b468e74462cfd874349ad4649403887300e3bfbee43847163b95d1875_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d2368104597c310619e5443627422c657dbad85add65549863c5d95d2e49228d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2368104597c310619e5443627422c657dbad85add65549863c5d95d2e49228d->enter($__internal_d2368104597c310619e5443627422c657dbad85add65549863c5d95d2e49228d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_aabeb74fc47f583255bc9800f5f90f4e6904c536a8432acbc3748ef2b9bd825d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aabeb74fc47f583255bc9800f5f90f4e6904c536a8432acbc3748ef2b9bd825d->enter($__internal_aabeb74fc47f583255bc9800f5f90f4e6904c536a8432acbc3748ef2b9bd825d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aabeb74fc47f583255bc9800f5f90f4e6904c536a8432acbc3748ef2b9bd825d->leave($__internal_aabeb74fc47f583255bc9800f5f90f4e6904c536a8432acbc3748ef2b9bd825d_prof);

        
        $__internal_d2368104597c310619e5443627422c657dbad85add65549863c5d95d2e49228d->leave($__internal_d2368104597c310619e5443627422c657dbad85add65549863c5d95d2e49228d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fa6200418dae786cef39a03be81fbe04768c160307bbdad54d68bf8eb14af846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa6200418dae786cef39a03be81fbe04768c160307bbdad54d68bf8eb14af846->enter($__internal_fa6200418dae786cef39a03be81fbe04768c160307bbdad54d68bf8eb14af846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bf8d90ab4541b26a1065d578b888db753aae3101665eae16f70eef04a4a93277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8d90ab4541b26a1065d578b888db753aae3101665eae16f70eef04a4a93277->enter($__internal_bf8d90ab4541b26a1065d578b888db753aae3101665eae16f70eef04a4a93277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bf8d90ab4541b26a1065d578b888db753aae3101665eae16f70eef04a4a93277->leave($__internal_bf8d90ab4541b26a1065d578b888db753aae3101665eae16f70eef04a4a93277_prof);

        
        $__internal_fa6200418dae786cef39a03be81fbe04768c160307bbdad54d68bf8eb14af846->leave($__internal_fa6200418dae786cef39a03be81fbe04768c160307bbdad54d68bf8eb14af846_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_015d94c3e23015781da4c301ed6af8ce56670f82b82934e473e7bae6c04309f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_015d94c3e23015781da4c301ed6af8ce56670f82b82934e473e7bae6c04309f3->enter($__internal_015d94c3e23015781da4c301ed6af8ce56670f82b82934e473e7bae6c04309f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f7c9bcfc9f8628c4124e1331d014ff3aee4d54404714c5f3b73cd3f2547fcfb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c9bcfc9f8628c4124e1331d014ff3aee4d54404714c5f3b73cd3f2547fcfb4->enter($__internal_f7c9bcfc9f8628c4124e1331d014ff3aee4d54404714c5f3b73cd3f2547fcfb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f7c9bcfc9f8628c4124e1331d014ff3aee4d54404714c5f3b73cd3f2547fcfb4->leave($__internal_f7c9bcfc9f8628c4124e1331d014ff3aee4d54404714c5f3b73cd3f2547fcfb4_prof);

        
        $__internal_015d94c3e23015781da4c301ed6af8ce56670f82b82934e473e7bae6c04309f3->leave($__internal_015d94c3e23015781da4c301ed6af8ce56670f82b82934e473e7bae6c04309f3_prof);

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
