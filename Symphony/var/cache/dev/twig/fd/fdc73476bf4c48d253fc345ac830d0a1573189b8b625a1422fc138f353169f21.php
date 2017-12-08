<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_d428abc728fc7632698bbf226d2fdc4b0ffe50afa32859bbdbe7dfa08e7b3e8d extends Twig_Template
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
        $__internal_38523f36bf29d6b7e9a9c7dc6affceccaf9cf960e36d102e2d52d19c4b468f2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38523f36bf29d6b7e9a9c7dc6affceccaf9cf960e36d102e2d52d19c4b468f2c->enter($__internal_38523f36bf29d6b7e9a9c7dc6affceccaf9cf960e36d102e2d52d19c4b468f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_76a93a11d070379c31cdfe2c245dd6083a3d22109dee1a5f78cb38a5b873a0e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a93a11d070379c31cdfe2c245dd6083a3d22109dee1a5f78cb38a5b873a0e0->enter($__internal_76a93a11d070379c31cdfe2c245dd6083a3d22109dee1a5f78cb38a5b873a0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_38523f36bf29d6b7e9a9c7dc6affceccaf9cf960e36d102e2d52d19c4b468f2c->leave($__internal_38523f36bf29d6b7e9a9c7dc6affceccaf9cf960e36d102e2d52d19c4b468f2c_prof);

        
        $__internal_76a93a11d070379c31cdfe2c245dd6083a3d22109dee1a5f78cb38a5b873a0e0->leave($__internal_76a93a11d070379c31cdfe2c245dd6083a3d22109dee1a5f78cb38a5b873a0e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
