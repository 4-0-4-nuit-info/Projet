<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b5834edb95961d1cf1dbffc82ab474d9c7e33d60330ccf53ebb13e9ea0f653f7 extends Twig_Template
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
        $__internal_2fdc958d54096428e804e9d3d59c671f5ce52e8296414b376897b7cb36da9df4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fdc958d54096428e804e9d3d59c671f5ce52e8296414b376897b7cb36da9df4->enter($__internal_2fdc958d54096428e804e9d3d59c671f5ce52e8296414b376897b7cb36da9df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_5f7c1c88ac58b27c80fa8062c73e2d6cff913316fe80cf7095ad37a1c859e62f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f7c1c88ac58b27c80fa8062c73e2d6cff913316fe80cf7095ad37a1c859e62f->enter($__internal_5f7c1c88ac58b27c80fa8062c73e2d6cff913316fe80cf7095ad37a1c859e62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2fdc958d54096428e804e9d3d59c671f5ce52e8296414b376897b7cb36da9df4->leave($__internal_2fdc958d54096428e804e9d3d59c671f5ce52e8296414b376897b7cb36da9df4_prof);

        
        $__internal_5f7c1c88ac58b27c80fa8062c73e2d6cff913316fe80cf7095ad37a1c859e62f->leave($__internal_5f7c1c88ac58b27c80fa8062c73e2d6cff913316fe80cf7095ad37a1c859e62f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
