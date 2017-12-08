<?php

/* default/accueil.html.twig */
class __TwigTemplate_5f761338dfcffb22d6f7efb0859795e90aae518fd4d8fa463a8547f0c98d26da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/accueil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bfcfff31e418f4cef150e62027e93ee5df0270f042daf33848d4d1a843131fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfcfff31e418f4cef150e62027e93ee5df0270f042daf33848d4d1a843131fda->enter($__internal_bfcfff31e418f4cef150e62027e93ee5df0270f042daf33848d4d1a843131fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        $__internal_8b8a939d59c8b77559f5c0de4eec6ef4a27590dd4458d2dd8e1df7f91543cb4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8a939d59c8b77559f5c0de4eec6ef4a27590dd4458d2dd8e1df7f91543cb4d->enter($__internal_8b8a939d59c8b77559f5c0de4eec6ef4a27590dd4458d2dd8e1df7f91543cb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfcfff31e418f4cef150e62027e93ee5df0270f042daf33848d4d1a843131fda->leave($__internal_bfcfff31e418f4cef150e62027e93ee5df0270f042daf33848d4d1a843131fda_prof);

        
        $__internal_8b8a939d59c8b77559f5c0de4eec6ef4a27590dd4458d2dd8e1df7f91543cb4d->leave($__internal_8b8a939d59c8b77559f5c0de4eec6ef4a27590dd4458d2dd8e1df7f91543cb4d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d986a851d1a3829c70b4e0f72a4e64001caa60bb10f693cdbecab7a49a3a8f48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d986a851d1a3829c70b4e0f72a4e64001caa60bb10f693cdbecab7a49a3a8f48->enter($__internal_d986a851d1a3829c70b4e0f72a4e64001caa60bb10f693cdbecab7a49a3a8f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7455af340184c027d5d24fc6f6ed77494d6f2fe97d2a32dc41db3b001a3c5347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7455af340184c027d5d24fc6f6ed77494d6f2fe97d2a32dc41db3b001a3c5347->enter($__internal_7455af340184c027d5d24fc6f6ed77494d6f2fe97d2a32dc41db3b001a3c5347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "  
<div class=\"page\"> 
  <h1>Bienvenue</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  <hr>
</div>
";
        
        $__internal_7455af340184c027d5d24fc6f6ed77494d6f2fe97d2a32dc41db3b001a3c5347->leave($__internal_7455af340184c027d5d24fc6f6ed77494d6f2fe97d2a32dc41db3b001a3c5347_prof);

        
        $__internal_d986a851d1a3829c70b4e0f72a4e64001caa60bb10f693cdbecab7a49a3a8f48->leave($__internal_d986a851d1a3829c70b4e0f72a4e64001caa60bb10f693cdbecab7a49a3a8f48_prof);

    }

    public function getTemplateName()
    {
        return "default/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}  
<div class=\"page\"> 
  <h1>Bienvenue</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  <hr>
</div>
{% endblock %}
", "default/accueil.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\app\\Resources\\views\\default\\accueil.html.twig");
    }
}
