<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e880b5cd020890817ddd9a392ba8681e5d2cf6798d15f975e0ee63a394d72a23 extends Twig_Template
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
        $__internal_1ca1a00925ce8e48f67ce616f29cee7f45d8f9f8b5bdcbc2a1c7cf630f5880b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ca1a00925ce8e48f67ce616f29cee7f45d8f9f8b5bdcbc2a1c7cf630f5880b5->enter($__internal_1ca1a00925ce8e48f67ce616f29cee7f45d8f9f8b5bdcbc2a1c7cf630f5880b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_fe59b79ea58bae497f829750952a2167c1d48410408dff14009c2b2dfa50a682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe59b79ea58bae497f829750952a2167c1d48410408dff14009c2b2dfa50a682->enter($__internal_fe59b79ea58bae497f829750952a2167c1d48410408dff14009c2b2dfa50a682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1ca1a00925ce8e48f67ce616f29cee7f45d8f9f8b5bdcbc2a1c7cf630f5880b5->leave($__internal_1ca1a00925ce8e48f67ce616f29cee7f45d8f9f8b5bdcbc2a1c7cf630f5880b5_prof);

        
        $__internal_fe59b79ea58bae497f829750952a2167c1d48410408dff14009c2b2dfa50a682->leave($__internal_fe59b79ea58bae497f829750952a2167c1d48410408dff14009c2b2dfa50a682_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
