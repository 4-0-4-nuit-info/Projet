<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_63ee2cb00a14a96d8b8e2f8ed7058e4a3d3c86fca6b4a15b07a0881d3af6047b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_c3491482931a0ee942d15ec0e584940ef36173356ecb19c39c99ae4540f1d5f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3491482931a0ee942d15ec0e584940ef36173356ecb19c39c99ae4540f1d5f6->enter($__internal_c3491482931a0ee942d15ec0e584940ef36173356ecb19c39c99ae4540f1d5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_57c46601e68c8ab8042b72cb07c3f6ed60c897223094ea9707e753f2e394179f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c46601e68c8ab8042b72cb07c3f6ed60c897223094ea9707e753f2e394179f->enter($__internal_57c46601e68c8ab8042b72cb07c3f6ed60c897223094ea9707e753f2e394179f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3491482931a0ee942d15ec0e584940ef36173356ecb19c39c99ae4540f1d5f6->leave($__internal_c3491482931a0ee942d15ec0e584940ef36173356ecb19c39c99ae4540f1d5f6_prof);

        
        $__internal_57c46601e68c8ab8042b72cb07c3f6ed60c897223094ea9707e753f2e394179f->leave($__internal_57c46601e68c8ab8042b72cb07c3f6ed60c897223094ea9707e753f2e394179f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_70f1abbfcd4c2dfacf564208c792e84a8298e2e1750f5af0ea6e088b2dcb0409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70f1abbfcd4c2dfacf564208c792e84a8298e2e1750f5af0ea6e088b2dcb0409->enter($__internal_70f1abbfcd4c2dfacf564208c792e84a8298e2e1750f5af0ea6e088b2dcb0409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7c4a8bdca82b13ea74eb8da03058204a1fb3b1a50112cec8fb04baef880485cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4a8bdca82b13ea74eb8da03058204a1fb3b1a50112cec8fb04baef880485cf->enter($__internal_7c4a8bdca82b13ea74eb8da03058204a1fb3b1a50112cec8fb04baef880485cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7c4a8bdca82b13ea74eb8da03058204a1fb3b1a50112cec8fb04baef880485cf->leave($__internal_7c4a8bdca82b13ea74eb8da03058204a1fb3b1a50112cec8fb04baef880485cf_prof);

        
        $__internal_70f1abbfcd4c2dfacf564208c792e84a8298e2e1750f5af0ea6e088b2dcb0409->leave($__internal_70f1abbfcd4c2dfacf564208c792e84a8298e2e1750f5af0ea6e088b2dcb0409_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e7d6cb24c2dd4f7fd358af6a22afd039b1cf1f7b0df2b6acc707e6666592da0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7d6cb24c2dd4f7fd358af6a22afd039b1cf1f7b0df2b6acc707e6666592da0f->enter($__internal_e7d6cb24c2dd4f7fd358af6a22afd039b1cf1f7b0df2b6acc707e6666592da0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4b277e0cf52d9e1f72d7aa5507bb15138cf5b8f07c7fb7309d758e0968dda732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b277e0cf52d9e1f72d7aa5507bb15138cf5b8f07c7fb7309d758e0968dda732->enter($__internal_4b277e0cf52d9e1f72d7aa5507bb15138cf5b8f07c7fb7309d758e0968dda732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4b277e0cf52d9e1f72d7aa5507bb15138cf5b8f07c7fb7309d758e0968dda732->leave($__internal_4b277e0cf52d9e1f72d7aa5507bb15138cf5b8f07c7fb7309d758e0968dda732_prof);

        
        $__internal_e7d6cb24c2dd4f7fd358af6a22afd039b1cf1f7b0df2b6acc707e6666592da0f->leave($__internal_e7d6cb24c2dd4f7fd358af6a22afd039b1cf1f7b0df2b6acc707e6666592da0f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dceaf60e2d45f32905203d4cd42f5947602c679b7ee56ee106a63c390c38fd0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dceaf60e2d45f32905203d4cd42f5947602c679b7ee56ee106a63c390c38fd0a->enter($__internal_dceaf60e2d45f32905203d4cd42f5947602c679b7ee56ee106a63c390c38fd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_42330111c2d37349f31568754783ee9cd56e7330405d19f2ac07d0b79033b2f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42330111c2d37349f31568754783ee9cd56e7330405d19f2ac07d0b79033b2f0->enter($__internal_42330111c2d37349f31568754783ee9cd56e7330405d19f2ac07d0b79033b2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_42330111c2d37349f31568754783ee9cd56e7330405d19f2ac07d0b79033b2f0->leave($__internal_42330111c2d37349f31568754783ee9cd56e7330405d19f2ac07d0b79033b2f0_prof);

        
        $__internal_dceaf60e2d45f32905203d4cd42f5947602c679b7ee56ee106a63c390c38fd0a->leave($__internal_dceaf60e2d45f32905203d4cd42f5947602c679b7ee56ee106a63c390c38fd0a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
