<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_e50e89ffe675fdeb199d22a64eb9ee7f8c2a5ef0ecbb489458430e0b67d74ccb extends Twig_Template
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
        $__internal_1717c33c9f4185c18919009a612a978941db2174ede9b4fade9ce027e51a0e32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1717c33c9f4185c18919009a612a978941db2174ede9b4fade9ce027e51a0e32->enter($__internal_1717c33c9f4185c18919009a612a978941db2174ede9b4fade9ce027e51a0e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_b50d93987fb833cda644eb21d8db375ab64cbd660f31d0f8a39b000228ed4c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50d93987fb833cda644eb21d8db375ab64cbd660f31d0f8a39b000228ed4c83->enter($__internal_b50d93987fb833cda644eb21d8db375ab64cbd660f31d0f8a39b000228ed4c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1717c33c9f4185c18919009a612a978941db2174ede9b4fade9ce027e51a0e32->leave($__internal_1717c33c9f4185c18919009a612a978941db2174ede9b4fade9ce027e51a0e32_prof);

        
        $__internal_b50d93987fb833cda644eb21d8db375ab64cbd660f31d0f8a39b000228ed4c83->leave($__internal_b50d93987fb833cda644eb21d8db375ab64cbd660f31d0f8a39b000228ed4c83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
