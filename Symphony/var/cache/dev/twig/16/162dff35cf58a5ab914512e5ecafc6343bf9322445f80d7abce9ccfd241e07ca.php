<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_9d1b8654412cf8d0aa98721adae70e2473fa701609508def98796c8c545e5a4c extends Twig_Template
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
        $__internal_f86b419dbf792de5580dca6db783549805e60f2de53ad1f0b70bbe1281aaff48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f86b419dbf792de5580dca6db783549805e60f2de53ad1f0b70bbe1281aaff48->enter($__internal_f86b419dbf792de5580dca6db783549805e60f2de53ad1f0b70bbe1281aaff48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_bde95d370fa4f073ee19dddfd53f9525a321835ad0d31357a289e7dfd4044604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde95d370fa4f073ee19dddfd53f9525a321835ad0d31357a289e7dfd4044604->enter($__internal_bde95d370fa4f073ee19dddfd53f9525a321835ad0d31357a289e7dfd4044604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_f86b419dbf792de5580dca6db783549805e60f2de53ad1f0b70bbe1281aaff48->leave($__internal_f86b419dbf792de5580dca6db783549805e60f2de53ad1f0b70bbe1281aaff48_prof);

        
        $__internal_bde95d370fa4f073ee19dddfd53f9525a321835ad0d31357a289e7dfd4044604->leave($__internal_bde95d370fa4f073ee19dddfd53f9525a321835ad0d31357a289e7dfd4044604_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
