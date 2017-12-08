<?php

/* ::base.html.twig */
class __TwigTemplate_7639c67a3a35faf6d191281d20ec396a8ad2ad907a3896b0e29f278f2afa0a76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2dc8abc2903d0ad2bb8bb4e8f2caaf4c110a4cb5525d5e0189e5a12052883b95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc8abc2903d0ad2bb8bb4e8f2caaf4c110a4cb5525d5e0189e5a12052883b95->enter($__internal_2dc8abc2903d0ad2bb8bb4e8f2caaf4c110a4cb5525d5e0189e5a12052883b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_66628ba74bd9ae812bfa9956c81b7f898ad9593db2caa6b1165362aa82a9ff63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66628ba74bd9ae812bfa9956c81b7f898ad9593db2caa6b1165362aa82a9ff63->enter($__internal_66628ba74bd9ae812bfa9956c81b7f898ad9593db2caa6b1165362aa82a9ff63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2dc8abc2903d0ad2bb8bb4e8f2caaf4c110a4cb5525d5e0189e5a12052883b95->leave($__internal_2dc8abc2903d0ad2bb8bb4e8f2caaf4c110a4cb5525d5e0189e5a12052883b95_prof);

        
        $__internal_66628ba74bd9ae812bfa9956c81b7f898ad9593db2caa6b1165362aa82a9ff63->leave($__internal_66628ba74bd9ae812bfa9956c81b7f898ad9593db2caa6b1165362aa82a9ff63_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed777a3d695d29a86283bbeb36fe5433fcbad2fb55549c43ad191af7083487b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed777a3d695d29a86283bbeb36fe5433fcbad2fb55549c43ad191af7083487b8->enter($__internal_ed777a3d695d29a86283bbeb36fe5433fcbad2fb55549c43ad191af7083487b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cc2da9acf58d202b46dd06e2fb743f32737c682530c23537cf00d2ce000f6e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc2da9acf58d202b46dd06e2fb743f32737c682530c23537cf00d2ce000f6e53->enter($__internal_cc2da9acf58d202b46dd06e2fb743f32737c682530c23537cf00d2ce000f6e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cc2da9acf58d202b46dd06e2fb743f32737c682530c23537cf00d2ce000f6e53->leave($__internal_cc2da9acf58d202b46dd06e2fb743f32737c682530c23537cf00d2ce000f6e53_prof);

        
        $__internal_ed777a3d695d29a86283bbeb36fe5433fcbad2fb55549c43ad191af7083487b8->leave($__internal_ed777a3d695d29a86283bbeb36fe5433fcbad2fb55549c43ad191af7083487b8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a81174f452bff3bdc549e3bc6773841cecbc0ff7203e6f604ef69a18df7fd4d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a81174f452bff3bdc549e3bc6773841cecbc0ff7203e6f604ef69a18df7fd4d9->enter($__internal_a81174f452bff3bdc549e3bc6773841cecbc0ff7203e6f604ef69a18df7fd4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ea2373c31766f71bba4fd1ec416e81a3cdf91b2cedd0c8d812aa0c8e17447588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2373c31766f71bba4fd1ec416e81a3cdf91b2cedd0c8d812aa0c8e17447588->enter($__internal_ea2373c31766f71bba4fd1ec416e81a3cdf91b2cedd0c8d812aa0c8e17447588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ea2373c31766f71bba4fd1ec416e81a3cdf91b2cedd0c8d812aa0c8e17447588->leave($__internal_ea2373c31766f71bba4fd1ec416e81a3cdf91b2cedd0c8d812aa0c8e17447588_prof);

        
        $__internal_a81174f452bff3bdc549e3bc6773841cecbc0ff7203e6f604ef69a18df7fd4d9->leave($__internal_a81174f452bff3bdc549e3bc6773841cecbc0ff7203e6f604ef69a18df7fd4d9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c675b6009d7aadf0db2bfa052c3dd4ec6be9c19a018246f79915628d7a9e8037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c675b6009d7aadf0db2bfa052c3dd4ec6be9c19a018246f79915628d7a9e8037->enter($__internal_c675b6009d7aadf0db2bfa052c3dd4ec6be9c19a018246f79915628d7a9e8037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c7206663b3d7cb0bbed1391b9950161a3f3b832420df4fb5df4d3b0a78e9eb2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7206663b3d7cb0bbed1391b9950161a3f3b832420df4fb5df4d3b0a78e9eb2e->enter($__internal_c7206663b3d7cb0bbed1391b9950161a3f3b832420df4fb5df4d3b0a78e9eb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c7206663b3d7cb0bbed1391b9950161a3f3b832420df4fb5df4d3b0a78e9eb2e->leave($__internal_c7206663b3d7cb0bbed1391b9950161a3f3b832420df4fb5df4d3b0a78e9eb2e_prof);

        
        $__internal_c675b6009d7aadf0db2bfa052c3dd4ec6be9c19a018246f79915628d7a9e8037->leave($__internal_c675b6009d7aadf0db2bfa052c3dd4ec6be9c19a018246f79915628d7a9e8037_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2ec5b69b16f7d4cdb11ca98b63ca3c54c96484dc4bb2eaf98c31b720d184764a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ec5b69b16f7d4cdb11ca98b63ca3c54c96484dc4bb2eaf98c31b720d184764a->enter($__internal_2ec5b69b16f7d4cdb11ca98b63ca3c54c96484dc4bb2eaf98c31b720d184764a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ddc7b9a0ae85531a79d566f1f0e07b5ac1fd8a18939d409aa79e15dff9398f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc7b9a0ae85531a79d566f1f0e07b5ac1fd8a18939d409aa79e15dff9398f12->enter($__internal_ddc7b9a0ae85531a79d566f1f0e07b5ac1fd8a18939d409aa79e15dff9398f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ddc7b9a0ae85531a79d566f1f0e07b5ac1fd8a18939d409aa79e15dff9398f12->leave($__internal_ddc7b9a0ae85531a79d566f1f0e07b5ac1fd8a18939d409aa79e15dff9398f12_prof);

        
        $__internal_2ec5b69b16f7d4cdb11ca98b63ca3c54c96484dc4bb2eaf98c31b720d184764a->leave($__internal_2ec5b69b16f7d4cdb11ca98b63ca3c54c96484dc4bb2eaf98c31b720d184764a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\app/Resources\\views/base.html.twig");
    }
}
