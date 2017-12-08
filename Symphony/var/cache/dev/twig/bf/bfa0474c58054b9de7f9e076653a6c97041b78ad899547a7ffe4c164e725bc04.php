<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c36ed3eb1065618a3628c648ce8736b8c44ba21791bd47fd33fcb840b312198a extends Twig_Template
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
        $__internal_81d88559b0ad9dec9b7e2e92c67f2772169d9c71912d1080a63765e4af51ef5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81d88559b0ad9dec9b7e2e92c67f2772169d9c71912d1080a63765e4af51ef5f->enter($__internal_81d88559b0ad9dec9b7e2e92c67f2772169d9c71912d1080a63765e4af51ef5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_2a27b2c1b0e6c21fd2d8bfbf18bc91058dd57fa8cf2efbb960ea67f01b85cdb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a27b2c1b0e6c21fd2d8bfbf18bc91058dd57fa8cf2efbb960ea67f01b85cdb9->enter($__internal_2a27b2c1b0e6c21fd2d8bfbf18bc91058dd57fa8cf2efbb960ea67f01b85cdb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_81d88559b0ad9dec9b7e2e92c67f2772169d9c71912d1080a63765e4af51ef5f->leave($__internal_81d88559b0ad9dec9b7e2e92c67f2772169d9c71912d1080a63765e4af51ef5f_prof);

        
        $__internal_2a27b2c1b0e6c21fd2d8bfbf18bc91058dd57fa8cf2efbb960ea67f01b85cdb9->leave($__internal_2a27b2c1b0e6c21fd2d8bfbf18bc91058dd57fa8cf2efbb960ea67f01b85cdb9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
