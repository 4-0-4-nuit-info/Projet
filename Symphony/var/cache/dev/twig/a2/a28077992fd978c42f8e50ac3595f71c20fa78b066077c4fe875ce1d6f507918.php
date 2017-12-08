<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_113717d6c361d3729295ae0a22e6b3442cc024aad8fb94a19ef8a115a0508e4c extends Twig_Template
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
        $__internal_182605f9d9d1b62d9f4d4ca972e492d341811f6af2bc2e71eed7cba5f27d8173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_182605f9d9d1b62d9f4d4ca972e492d341811f6af2bc2e71eed7cba5f27d8173->enter($__internal_182605f9d9d1b62d9f4d4ca972e492d341811f6af2bc2e71eed7cba5f27d8173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_f410d37d351e0ee2eef148a3c41e120f688664e7f13375ce80bad03fd1ce50e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f410d37d351e0ee2eef148a3c41e120f688664e7f13375ce80bad03fd1ce50e1->enter($__internal_f410d37d351e0ee2eef148a3c41e120f688664e7f13375ce80bad03fd1ce50e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_182605f9d9d1b62d9f4d4ca972e492d341811f6af2bc2e71eed7cba5f27d8173->leave($__internal_182605f9d9d1b62d9f4d4ca972e492d341811f6af2bc2e71eed7cba5f27d8173_prof);

        
        $__internal_f410d37d351e0ee2eef148a3c41e120f688664e7f13375ce80bad03fd1ce50e1->leave($__internal_f410d37d351e0ee2eef148a3c41e120f688664e7f13375ce80bad03fd1ce50e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
