<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_34ae3fe40e13f0d75d580d9e4a2cfd8f48fcc702f37c327e35635305b5750c0f extends Twig_Template
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
        $__internal_c95fe4b0c9d263fef10a3da4c1949034b83db82419588e28e6a07d8231a72c68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c95fe4b0c9d263fef10a3da4c1949034b83db82419588e28e6a07d8231a72c68->enter($__internal_c95fe4b0c9d263fef10a3da4c1949034b83db82419588e28e6a07d8231a72c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_2be3a99d95d132b4e240daf8be0dff2042b35e8a51c8098e4283c6c5a2a2714d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be3a99d95d132b4e240daf8be0dff2042b35e8a51c8098e4283c6c5a2a2714d->enter($__internal_2be3a99d95d132b4e240daf8be0dff2042b35e8a51c8098e4283c6c5a2a2714d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c95fe4b0c9d263fef10a3da4c1949034b83db82419588e28e6a07d8231a72c68->leave($__internal_c95fe4b0c9d263fef10a3da4c1949034b83db82419588e28e6a07d8231a72c68_prof);

        
        $__internal_2be3a99d95d132b4e240daf8be0dff2042b35e8a51c8098e4283c6c5a2a2714d->leave($__internal_2be3a99d95d132b4e240daf8be0dff2042b35e8a51c8098e4283c6c5a2a2714d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
