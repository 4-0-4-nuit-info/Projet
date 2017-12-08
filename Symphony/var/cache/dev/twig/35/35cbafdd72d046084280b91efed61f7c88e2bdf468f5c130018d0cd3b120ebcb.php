<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_5890b53785cd161c0948d869269b75fa8b698db844f0c40bd0366aa9f37f27c5 extends Twig_Template
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
        $__internal_0c669bb60e56beda4fd33dd5d3de7d2c7406ec8a8e4f6a9baced065b397688d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c669bb60e56beda4fd33dd5d3de7d2c7406ec8a8e4f6a9baced065b397688d1->enter($__internal_0c669bb60e56beda4fd33dd5d3de7d2c7406ec8a8e4f6a9baced065b397688d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_5339683b9686ba1079f97f0e1e62d8135466f5cf3a6af50431ea2234a3d890c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5339683b9686ba1079f97f0e1e62d8135466f5cf3a6af50431ea2234a3d890c1->enter($__internal_5339683b9686ba1079f97f0e1e62d8135466f5cf3a6af50431ea2234a3d890c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0c669bb60e56beda4fd33dd5d3de7d2c7406ec8a8e4f6a9baced065b397688d1->leave($__internal_0c669bb60e56beda4fd33dd5d3de7d2c7406ec8a8e4f6a9baced065b397688d1_prof);

        
        $__internal_5339683b9686ba1079f97f0e1e62d8135466f5cf3a6af50431ea2234a3d890c1->leave($__internal_5339683b9686ba1079f97f0e1e62d8135466f5cf3a6af50431ea2234a3d890c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
