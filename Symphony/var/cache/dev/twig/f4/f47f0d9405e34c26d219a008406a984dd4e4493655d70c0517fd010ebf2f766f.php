<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4f0ad35677d1e5cbfc45094a81bbae495ca5b05e96e822464f68931d35231ec0 extends Twig_Template
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
        $__internal_254d08c56934abd6fe8287390e24d6e65ef685e5134375477902c849ace1d603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254d08c56934abd6fe8287390e24d6e65ef685e5134375477902c849ace1d603->enter($__internal_254d08c56934abd6fe8287390e24d6e65ef685e5134375477902c849ace1d603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_b0a8720fb42793e9facb784616ba15ac87db5e38b62f88f62e943266b631a1eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a8720fb42793e9facb784616ba15ac87db5e38b62f88f62e943266b631a1eb->enter($__internal_b0a8720fb42793e9facb784616ba15ac87db5e38b62f88f62e943266b631a1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_254d08c56934abd6fe8287390e24d6e65ef685e5134375477902c849ace1d603->leave($__internal_254d08c56934abd6fe8287390e24d6e65ef685e5134375477902c849ace1d603_prof);

        
        $__internal_b0a8720fb42793e9facb784616ba15ac87db5e38b62f88f62e943266b631a1eb->leave($__internal_b0a8720fb42793e9facb784616ba15ac87db5e38b62f88f62e943266b631a1eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
