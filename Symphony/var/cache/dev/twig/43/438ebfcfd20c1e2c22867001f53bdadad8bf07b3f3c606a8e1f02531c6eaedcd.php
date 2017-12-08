<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_e1109f8c1a148d6de69f736d3a809b2a616e864fba84f5f65f4e7d3072465aa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf9333147bc1e83f6f4ccf08d82972693c1a4b29b6ca6d4c3bc75d781c12c7dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf9333147bc1e83f6f4ccf08d82972693c1a4b29b6ca6d4c3bc75d781c12c7dd->enter($__internal_cf9333147bc1e83f6f4ccf08d82972693c1a4b29b6ca6d4c3bc75d781c12c7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_ea443b54f0c66dcf0520132cecc77abab086a076fda71b10500128b19a5c70cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea443b54f0c66dcf0520132cecc77abab086a076fda71b10500128b19a5c70cd->enter($__internal_ea443b54f0c66dcf0520132cecc77abab086a076fda71b10500128b19a5c70cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_cf9333147bc1e83f6f4ccf08d82972693c1a4b29b6ca6d4c3bc75d781c12c7dd->leave($__internal_cf9333147bc1e83f6f4ccf08d82972693c1a4b29b6ca6d4c3bc75d781c12c7dd_prof);

        
        $__internal_ea443b54f0c66dcf0520132cecc77abab086a076fda71b10500128b19a5c70cd->leave($__internal_ea443b54f0c66dcf0520132cecc77abab086a076fda71b10500128b19a5c70cd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
