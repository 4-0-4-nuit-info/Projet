<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_8dc19400dffc6207b2952c9d3259751d3466efed668a62b0dc7966d48142f2d1 extends Twig_Template
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
        $__internal_15a358d57b8f536bbbe43498cf3f209415d80588bf40ee3ec417e0ef81f4a9fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a358d57b8f536bbbe43498cf3f209415d80588bf40ee3ec417e0ef81f4a9fb->enter($__internal_15a358d57b8f536bbbe43498cf3f209415d80588bf40ee3ec417e0ef81f4a9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_388d9cfe797071437ed16148bd5ba39b41c5a29cccedd43d5db611a6a5e9d4aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388d9cfe797071437ed16148bd5ba39b41c5a29cccedd43d5db611a6a5e9d4aa->enter($__internal_388d9cfe797071437ed16148bd5ba39b41c5a29cccedd43d5db611a6a5e9d4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_15a358d57b8f536bbbe43498cf3f209415d80588bf40ee3ec417e0ef81f4a9fb->leave($__internal_15a358d57b8f536bbbe43498cf3f209415d80588bf40ee3ec417e0ef81f4a9fb_prof);

        
        $__internal_388d9cfe797071437ed16148bd5ba39b41c5a29cccedd43d5db611a6a5e9d4aa->leave($__internal_388d9cfe797071437ed16148bd5ba39b41c5a29cccedd43d5db611a6a5e9d4aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
