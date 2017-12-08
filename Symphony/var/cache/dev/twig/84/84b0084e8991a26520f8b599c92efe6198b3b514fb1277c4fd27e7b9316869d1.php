<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ebd7f9baf3254a5e3756a5891181f29cac2f19c956211fe3dacb9ff304e66210 extends Twig_Template
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
        $__internal_4fd5443f06acb1e8fd44da4dfbbf0cf6ff4ef57df361639e91850f6e4dd0b9b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fd5443f06acb1e8fd44da4dfbbf0cf6ff4ef57df361639e91850f6e4dd0b9b0->enter($__internal_4fd5443f06acb1e8fd44da4dfbbf0cf6ff4ef57df361639e91850f6e4dd0b9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_fc1ebf684d066f48ebca7506933414924f9b0c1a9a4293e880ffc57df9421aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc1ebf684d066f48ebca7506933414924f9b0c1a9a4293e880ffc57df9421aae->enter($__internal_fc1ebf684d066f48ebca7506933414924f9b0c1a9a4293e880ffc57df9421aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4fd5443f06acb1e8fd44da4dfbbf0cf6ff4ef57df361639e91850f6e4dd0b9b0->leave($__internal_4fd5443f06acb1e8fd44da4dfbbf0cf6ff4ef57df361639e91850f6e4dd0b9b0_prof);

        
        $__internal_fc1ebf684d066f48ebca7506933414924f9b0c1a9a4293e880ffc57df9421aae->leave($__internal_fc1ebf684d066f48ebca7506933414924f9b0c1a9a4293e880ffc57df9421aae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
