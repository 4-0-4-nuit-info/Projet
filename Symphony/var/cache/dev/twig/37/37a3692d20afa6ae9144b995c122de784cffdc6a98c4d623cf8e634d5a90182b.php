<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_3f67232da97bd6186c3c0068372e5df065d17fb0f6f1e7e380d7be4d53204bba extends Twig_Template
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
        $__internal_8f8e528adc117c71a1567cf401a9a617ba464265af7f5c485f91a1443e773dc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f8e528adc117c71a1567cf401a9a617ba464265af7f5c485f91a1443e773dc3->enter($__internal_8f8e528adc117c71a1567cf401a9a617ba464265af7f5c485f91a1443e773dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_adb1489d90140f079c99a41ba2717749a389c9846781da7c669ee22f38b78214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb1489d90140f079c99a41ba2717749a389c9846781da7c669ee22f38b78214->enter($__internal_adb1489d90140f079c99a41ba2717749a389c9846781da7c669ee22f38b78214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8f8e528adc117c71a1567cf401a9a617ba464265af7f5c485f91a1443e773dc3->leave($__internal_8f8e528adc117c71a1567cf401a9a617ba464265af7f5c485f91a1443e773dc3_prof);

        
        $__internal_adb1489d90140f079c99a41ba2717749a389c9846781da7c669ee22f38b78214->leave($__internal_adb1489d90140f079c99a41ba2717749a389c9846781da7c669ee22f38b78214_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
