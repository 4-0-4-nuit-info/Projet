<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_057fd96f4c4f70718795b3438c121e5106fdf92611d5b2d0ecf51ec91f78baed extends Twig_Template
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
        $__internal_53fcc16f1623dbff79ebe5d39074d46736b3094f1684c970d250a36876ba1b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53fcc16f1623dbff79ebe5d39074d46736b3094f1684c970d250a36876ba1b80->enter($__internal_53fcc16f1623dbff79ebe5d39074d46736b3094f1684c970d250a36876ba1b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_dab9a9d1da183cb18019a43fcdfde2fd17daf623d2589daa4d397edd631c803d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dab9a9d1da183cb18019a43fcdfde2fd17daf623d2589daa4d397edd631c803d->enter($__internal_dab9a9d1da183cb18019a43fcdfde2fd17daf623d2589daa4d397edd631c803d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_53fcc16f1623dbff79ebe5d39074d46736b3094f1684c970d250a36876ba1b80->leave($__internal_53fcc16f1623dbff79ebe5d39074d46736b3094f1684c970d250a36876ba1b80_prof);

        
        $__internal_dab9a9d1da183cb18019a43fcdfde2fd17daf623d2589daa4d397edd631c803d->leave($__internal_dab9a9d1da183cb18019a43fcdfde2fd17daf623d2589daa4d397edd631c803d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
