<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_072d892dc2028d8769ef8a0105d1954d01b46d8e7caf4b18670b072601f0c10b extends Twig_Template
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
        $__internal_bc61c9a923c001e36ba5a5f3b416fb55d668b7ea1da4a521e0c7eca596032812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc61c9a923c001e36ba5a5f3b416fb55d668b7ea1da4a521e0c7eca596032812->enter($__internal_bc61c9a923c001e36ba5a5f3b416fb55d668b7ea1da4a521e0c7eca596032812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_520582f04e885b039fd76bd3e52375c05d3af4cfd7a833549ba2fe6d6ad017da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520582f04e885b039fd76bd3e52375c05d3af4cfd7a833549ba2fe6d6ad017da->enter($__internal_520582f04e885b039fd76bd3e52375c05d3af4cfd7a833549ba2fe6d6ad017da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_bc61c9a923c001e36ba5a5f3b416fb55d668b7ea1da4a521e0c7eca596032812->leave($__internal_bc61c9a923c001e36ba5a5f3b416fb55d668b7ea1da4a521e0c7eca596032812_prof);

        
        $__internal_520582f04e885b039fd76bd3e52375c05d3af4cfd7a833549ba2fe6d6ad017da->leave($__internal_520582f04e885b039fd76bd3e52375c05d3af4cfd7a833549ba2fe6d6ad017da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
