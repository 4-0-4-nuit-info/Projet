<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_95712cb5621cc7e9aadc0750b7264ba081c1b2e755c07cf5ac99faf4eb44463b extends Twig_Template
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
        $__internal_13049736b5a072a200d9febeb091e71a434e996ddf96c146f3b0eeef7e240289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13049736b5a072a200d9febeb091e71a434e996ddf96c146f3b0eeef7e240289->enter($__internal_13049736b5a072a200d9febeb091e71a434e996ddf96c146f3b0eeef7e240289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_dd750469e4451aec6699b5ee13be1464c867b56078d701c3ae8221112794a4e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd750469e4451aec6699b5ee13be1464c867b56078d701c3ae8221112794a4e4->enter($__internal_dd750469e4451aec6699b5ee13be1464c867b56078d701c3ae8221112794a4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_13049736b5a072a200d9febeb091e71a434e996ddf96c146f3b0eeef7e240289->leave($__internal_13049736b5a072a200d9febeb091e71a434e996ddf96c146f3b0eeef7e240289_prof);

        
        $__internal_dd750469e4451aec6699b5ee13be1464c867b56078d701c3ae8221112794a4e4->leave($__internal_dd750469e4451aec6699b5ee13be1464c867b56078d701c3ae8221112794a4e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
