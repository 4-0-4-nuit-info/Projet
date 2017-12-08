<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_92831d4470acc03589f641d1084c9a5ed6caf834ae7038dfb2a16299d317f7e1 extends Twig_Template
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
        $__internal_60649774c24f79d7603e7cd738c59676743c5d769c01e0a73ea4c3ce7a66ecdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60649774c24f79d7603e7cd738c59676743c5d769c01e0a73ea4c3ce7a66ecdf->enter($__internal_60649774c24f79d7603e7cd738c59676743c5d769c01e0a73ea4c3ce7a66ecdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_5eed431944a2d1fd4e0c062618228c7fcac6e047d631f0bf2c4ef20b3280abb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eed431944a2d1fd4e0c062618228c7fcac6e047d631f0bf2c4ef20b3280abb4->enter($__internal_5eed431944a2d1fd4e0c062618228c7fcac6e047d631f0bf2c4ef20b3280abb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_60649774c24f79d7603e7cd738c59676743c5d769c01e0a73ea4c3ce7a66ecdf->leave($__internal_60649774c24f79d7603e7cd738c59676743c5d769c01e0a73ea4c3ce7a66ecdf_prof);

        
        $__internal_5eed431944a2d1fd4e0c062618228c7fcac6e047d631f0bf2c4ef20b3280abb4->leave($__internal_5eed431944a2d1fd4e0c062618228c7fcac6e047d631f0bf2c4ef20b3280abb4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
