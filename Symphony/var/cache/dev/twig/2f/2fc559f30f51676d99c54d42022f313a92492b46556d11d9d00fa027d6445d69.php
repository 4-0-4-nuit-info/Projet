<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_458235b318b33071a538ce04e223129efa512954b323dab0b3a8914ad9e126ab extends Twig_Template
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
        $__internal_2dc0afb5b7cb8032793ecf0845958fa6277f8c1575a1d71e6b58b8fca4c8b93c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc0afb5b7cb8032793ecf0845958fa6277f8c1575a1d71e6b58b8fca4c8b93c->enter($__internal_2dc0afb5b7cb8032793ecf0845958fa6277f8c1575a1d71e6b58b8fca4c8b93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_fcd341b0473de9926913cab7330fc2a4c89aa68e478a183965e26cb189a71d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcd341b0473de9926913cab7330fc2a4c89aa68e478a183965e26cb189a71d91->enter($__internal_fcd341b0473de9926913cab7330fc2a4c89aa68e478a183965e26cb189a71d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_2dc0afb5b7cb8032793ecf0845958fa6277f8c1575a1d71e6b58b8fca4c8b93c->leave($__internal_2dc0afb5b7cb8032793ecf0845958fa6277f8c1575a1d71e6b58b8fca4c8b93c_prof);

        
        $__internal_fcd341b0473de9926913cab7330fc2a4c89aa68e478a183965e26cb189a71d91->leave($__internal_fcd341b0473de9926913cab7330fc2a4c89aa68e478a183965e26cb189a71d91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
