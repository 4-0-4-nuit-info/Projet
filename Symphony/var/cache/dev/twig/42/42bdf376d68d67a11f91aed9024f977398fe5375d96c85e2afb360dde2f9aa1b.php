<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_a759a908dd270e9b4504436f6763e257f38425ae400fa260a69062c667f07cdd extends Twig_Template
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
        $__internal_74ac96476018268bd5349360795011116f5d7aaf8415475c46d1597dd664d5e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74ac96476018268bd5349360795011116f5d7aaf8415475c46d1597dd664d5e7->enter($__internal_74ac96476018268bd5349360795011116f5d7aaf8415475c46d1597dd664d5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_85a736a01d2855712580653a83556cc08fda2603750e81770eec77dca8c8dba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85a736a01d2855712580653a83556cc08fda2603750e81770eec77dca8c8dba7->enter($__internal_85a736a01d2855712580653a83556cc08fda2603750e81770eec77dca8c8dba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_74ac96476018268bd5349360795011116f5d7aaf8415475c46d1597dd664d5e7->leave($__internal_74ac96476018268bd5349360795011116f5d7aaf8415475c46d1597dd664d5e7_prof);

        
        $__internal_85a736a01d2855712580653a83556cc08fda2603750e81770eec77dca8c8dba7->leave($__internal_85a736a01d2855712580653a83556cc08fda2603750e81770eec77dca8c8dba7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
