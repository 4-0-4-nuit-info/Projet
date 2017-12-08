<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_15cac7b37526b2c0b23674c767ddea7669c8a2217d38e99f500b014ea0bffba2 extends Twig_Template
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
        $__internal_616a15c097db5f9d46834630870d4ec9937177696256f774f65e2bf2d9731087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_616a15c097db5f9d46834630870d4ec9937177696256f774f65e2bf2d9731087->enter($__internal_616a15c097db5f9d46834630870d4ec9937177696256f774f65e2bf2d9731087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_7d284ab60324f95296b99f490dc60b6ec1c3067a9c067db3c0dbaa756a96d472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d284ab60324f95296b99f490dc60b6ec1c3067a9c067db3c0dbaa756a96d472->enter($__internal_7d284ab60324f95296b99f490dc60b6ec1c3067a9c067db3c0dbaa756a96d472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_616a15c097db5f9d46834630870d4ec9937177696256f774f65e2bf2d9731087->leave($__internal_616a15c097db5f9d46834630870d4ec9937177696256f774f65e2bf2d9731087_prof);

        
        $__internal_7d284ab60324f95296b99f490dc60b6ec1c3067a9c067db3c0dbaa756a96d472->leave($__internal_7d284ab60324f95296b99f490dc60b6ec1c3067a9c067db3c0dbaa756a96d472_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
