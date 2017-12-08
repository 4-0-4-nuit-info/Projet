<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_3e74ffd0525fc3233db6002dbd32a6402605dad1b791f8bc0450f88f3fba53b7 extends Twig_Template
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
        $__internal_b2705e0c6a4f816a401ed66ab79df33a59230b1fdde468359b6957644f0d2546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2705e0c6a4f816a401ed66ab79df33a59230b1fdde468359b6957644f0d2546->enter($__internal_b2705e0c6a4f816a401ed66ab79df33a59230b1fdde468359b6957644f0d2546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_5d43d4922e9d1e94a048e257f1be5db5373c0cb0465a4289860e9a3c851d3ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d43d4922e9d1e94a048e257f1be5db5373c0cb0465a4289860e9a3c851d3ab2->enter($__internal_5d43d4922e9d1e94a048e257f1be5db5373c0cb0465a4289860e9a3c851d3ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b2705e0c6a4f816a401ed66ab79df33a59230b1fdde468359b6957644f0d2546->leave($__internal_b2705e0c6a4f816a401ed66ab79df33a59230b1fdde468359b6957644f0d2546_prof);

        
        $__internal_5d43d4922e9d1e94a048e257f1be5db5373c0cb0465a4289860e9a3c851d3ab2->leave($__internal_5d43d4922e9d1e94a048e257f1be5db5373c0cb0465a4289860e9a3c851d3ab2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
