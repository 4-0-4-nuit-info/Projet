<?php

/* base.html.twig */
class __TwigTemplate_35a788ca461558bba9038e4c3f84ff08bc8c4a644fa3eb1893a42b9f45e0624c extends Twig_Template
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
        $__internal_da26007dbfdfc0c982d2ea69940cbc82648b864bfcc687ce47b7bbdce6486329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da26007dbfdfc0c982d2ea69940cbc82648b864bfcc687ce47b7bbdce6486329->enter($__internal_da26007dbfdfc0c982d2ea69940cbc82648b864bfcc687ce47b7bbdce6486329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_99f5f4adb202e31364f2b6c1c06d39cb45dc18de3a99d164e7ac0f37e3bb8573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f5f4adb202e31364f2b6c1c06d39cb45dc18de3a99d164e7ac0f37e3bb8573->enter($__internal_99f5f4adb202e31364f2b6c1c06d39cb45dc18de3a99d164e7ac0f37e3bb8573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_da26007dbfdfc0c982d2ea69940cbc82648b864bfcc687ce47b7bbdce6486329->leave($__internal_da26007dbfdfc0c982d2ea69940cbc82648b864bfcc687ce47b7bbdce6486329_prof);

        
        $__internal_99f5f4adb202e31364f2b6c1c06d39cb45dc18de3a99d164e7ac0f37e3bb8573->leave($__internal_99f5f4adb202e31364f2b6c1c06d39cb45dc18de3a99d164e7ac0f37e3bb8573_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d8a4f4d1787d364da421e9da6663cc0133be8d3c6aea8494622c6e331d2343a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d8a4f4d1787d364da421e9da6663cc0133be8d3c6aea8494622c6e331d2343a->enter($__internal_9d8a4f4d1787d364da421e9da6663cc0133be8d3c6aea8494622c6e331d2343a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_379e4686f414c8858c0bdb9ab1af20423eb941fb86a9ab08320ea4fbcef4e562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379e4686f414c8858c0bdb9ab1af20423eb941fb86a9ab08320ea4fbcef4e562->enter($__internal_379e4686f414c8858c0bdb9ab1af20423eb941fb86a9ab08320ea4fbcef4e562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_379e4686f414c8858c0bdb9ab1af20423eb941fb86a9ab08320ea4fbcef4e562->leave($__internal_379e4686f414c8858c0bdb9ab1af20423eb941fb86a9ab08320ea4fbcef4e562_prof);

        
        $__internal_9d8a4f4d1787d364da421e9da6663cc0133be8d3c6aea8494622c6e331d2343a->leave($__internal_9d8a4f4d1787d364da421e9da6663cc0133be8d3c6aea8494622c6e331d2343a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7fd79e576b646754f28d454b7d813a70a6164f45e41099a4ec148db3c3f59a30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fd79e576b646754f28d454b7d813a70a6164f45e41099a4ec148db3c3f59a30->enter($__internal_7fd79e576b646754f28d454b7d813a70a6164f45e41099a4ec148db3c3f59a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f91221c605f8d06bfc286d84e73fdd826cb1aeac406d96842003ad13c647f491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f91221c605f8d06bfc286d84e73fdd826cb1aeac406d96842003ad13c647f491->enter($__internal_f91221c605f8d06bfc286d84e73fdd826cb1aeac406d96842003ad13c647f491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f91221c605f8d06bfc286d84e73fdd826cb1aeac406d96842003ad13c647f491->leave($__internal_f91221c605f8d06bfc286d84e73fdd826cb1aeac406d96842003ad13c647f491_prof);

        
        $__internal_7fd79e576b646754f28d454b7d813a70a6164f45e41099a4ec148db3c3f59a30->leave($__internal_7fd79e576b646754f28d454b7d813a70a6164f45e41099a4ec148db3c3f59a30_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3db5ecdb2b5c608e4e8f9765b5c004c026cd165c5208bfe63e9215317bdaa913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3db5ecdb2b5c608e4e8f9765b5c004c026cd165c5208bfe63e9215317bdaa913->enter($__internal_3db5ecdb2b5c608e4e8f9765b5c004c026cd165c5208bfe63e9215317bdaa913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc5d285825f5f8960817e39a9ef7f41b091f7c14e98742d7ddbf2fd6565ddac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5d285825f5f8960817e39a9ef7f41b091f7c14e98742d7ddbf2fd6565ddac2->enter($__internal_dc5d285825f5f8960817e39a9ef7f41b091f7c14e98742d7ddbf2fd6565ddac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dc5d285825f5f8960817e39a9ef7f41b091f7c14e98742d7ddbf2fd6565ddac2->leave($__internal_dc5d285825f5f8960817e39a9ef7f41b091f7c14e98742d7ddbf2fd6565ddac2_prof);

        
        $__internal_3db5ecdb2b5c608e4e8f9765b5c004c026cd165c5208bfe63e9215317bdaa913->leave($__internal_3db5ecdb2b5c608e4e8f9765b5c004c026cd165c5208bfe63e9215317bdaa913_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4ab1aea94af051b93b18dc33452da182adad8fdf61080d7b5f5c83369a22d8c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ab1aea94af051b93b18dc33452da182adad8fdf61080d7b5f5c83369a22d8c5->enter($__internal_4ab1aea94af051b93b18dc33452da182adad8fdf61080d7b5f5c83369a22d8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_de3e87568c6376d467cb6f13b0b684d836b66d1f82c122edb8bda40622a3b9f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3e87568c6376d467cb6f13b0b684d836b66d1f82c122edb8bda40622a3b9f3->enter($__internal_de3e87568c6376d467cb6f13b0b684d836b66d1f82c122edb8bda40622a3b9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_de3e87568c6376d467cb6f13b0b684d836b66d1f82c122edb8bda40622a3b9f3->leave($__internal_de3e87568c6376d467cb6f13b0b684d836b66d1f82c122edb8bda40622a3b9f3_prof);

        
        $__internal_4ab1aea94af051b93b18dc33452da182adad8fdf61080d7b5f5c83369a22d8c5->leave($__internal_4ab1aea94af051b93b18dc33452da182adad8fdf61080d7b5f5c83369a22d8c5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\app\\Resources\\views\\base.html.twig");
    }
}
