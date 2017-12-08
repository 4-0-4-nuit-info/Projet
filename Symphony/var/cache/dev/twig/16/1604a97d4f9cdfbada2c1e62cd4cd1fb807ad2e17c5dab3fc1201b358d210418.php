<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_3096a43cef1ce004f01c5e29d7da068086df6a2e90f52d15664103c248ee1a7d extends Twig_Template
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
        $__internal_afd03b5343b38e95332a3dfa34e71087445a6d3d348e4d33c2135e7d191ee41d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afd03b5343b38e95332a3dfa34e71087445a6d3d348e4d33c2135e7d191ee41d->enter($__internal_afd03b5343b38e95332a3dfa34e71087445a6d3d348e4d33c2135e7d191ee41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_6d4fbb35c2ebba7db09e07c6a4e03b262cfba7cf276f4c7ad4ff1087c317d155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4fbb35c2ebba7db09e07c6a4e03b262cfba7cf276f4c7ad4ff1087c317d155->enter($__internal_6d4fbb35c2ebba7db09e07c6a4e03b262cfba7cf276f4c7ad4ff1087c317d155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_afd03b5343b38e95332a3dfa34e71087445a6d3d348e4d33c2135e7d191ee41d->leave($__internal_afd03b5343b38e95332a3dfa34e71087445a6d3d348e4d33c2135e7d191ee41d_prof);

        
        $__internal_6d4fbb35c2ebba7db09e07c6a4e03b262cfba7cf276f4c7ad4ff1087c317d155->leave($__internal_6d4fbb35c2ebba7db09e07c6a4e03b262cfba7cf276f4c7ad4ff1087c317d155_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
