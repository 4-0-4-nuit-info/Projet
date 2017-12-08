<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_6f31eb275bcfe2ff284ee4ce5a897064070e559597f9dbd071c2fb7b99842baf extends Twig_Template
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
        $__internal_a6ebb222d770c225913b872531be139107dd08de5e88f6fdf67f1cfabf1a71c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6ebb222d770c225913b872531be139107dd08de5e88f6fdf67f1cfabf1a71c5->enter($__internal_a6ebb222d770c225913b872531be139107dd08de5e88f6fdf67f1cfabf1a71c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_4a80df8af7191a6e2c8f1a5e1ea5735feee40cb3b345fcd12c65e61849858e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a80df8af7191a6e2c8f1a5e1ea5735feee40cb3b345fcd12c65e61849858e70->enter($__internal_4a80df8af7191a6e2c8f1a5e1ea5735feee40cb3b345fcd12c65e61849858e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a6ebb222d770c225913b872531be139107dd08de5e88f6fdf67f1cfabf1a71c5->leave($__internal_a6ebb222d770c225913b872531be139107dd08de5e88f6fdf67f1cfabf1a71c5_prof);

        
        $__internal_4a80df8af7191a6e2c8f1a5e1ea5735feee40cb3b345fcd12c65e61849858e70->leave($__internal_4a80df8af7191a6e2c8f1a5e1ea5735feee40cb3b345fcd12c65e61849858e70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
