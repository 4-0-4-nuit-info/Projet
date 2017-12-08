<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_9377a6ce9008e28bc2f1fc642a965ae7dd156c712d52b9d735d549cf54f234ca extends Twig_Template
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
        $__internal_50ed11a57dc60ef0d2a45177e72a68aa9f2468a5bc0b75838759ff177c7ffb02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ed11a57dc60ef0d2a45177e72a68aa9f2468a5bc0b75838759ff177c7ffb02->enter($__internal_50ed11a57dc60ef0d2a45177e72a68aa9f2468a5bc0b75838759ff177c7ffb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_fbe8b324f8c22cc3d4b42e067ccca2998bba146496df69612d38e964383ec237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe8b324f8c22cc3d4b42e067ccca2998bba146496df69612d38e964383ec237->enter($__internal_fbe8b324f8c22cc3d4b42e067ccca2998bba146496df69612d38e964383ec237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_50ed11a57dc60ef0d2a45177e72a68aa9f2468a5bc0b75838759ff177c7ffb02->leave($__internal_50ed11a57dc60ef0d2a45177e72a68aa9f2468a5bc0b75838759ff177c7ffb02_prof);

        
        $__internal_fbe8b324f8c22cc3d4b42e067ccca2998bba146496df69612d38e964383ec237->leave($__internal_fbe8b324f8c22cc3d4b42e067ccca2998bba146496df69612d38e964383ec237_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
