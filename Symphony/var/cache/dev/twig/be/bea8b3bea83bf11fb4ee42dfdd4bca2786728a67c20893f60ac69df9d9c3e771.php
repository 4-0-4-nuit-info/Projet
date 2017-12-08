<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_12578b539e9f6c1173c6256a7d2d44209590d6b3e2b2dd510ee73141041d0d3f extends Twig_Template
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
        $__internal_daa033d410febf506a648877efa2f36ba2b3745b15319f906cfbc3ba9bd1db07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daa033d410febf506a648877efa2f36ba2b3745b15319f906cfbc3ba9bd1db07->enter($__internal_daa033d410febf506a648877efa2f36ba2b3745b15319f906cfbc3ba9bd1db07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_b20803d22ccf2788352648163cf49aceccfe46fc40315b4ecbdd91e23cef8245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20803d22ccf2788352648163cf49aceccfe46fc40315b4ecbdd91e23cef8245->enter($__internal_b20803d22ccf2788352648163cf49aceccfe46fc40315b4ecbdd91e23cef8245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_daa033d410febf506a648877efa2f36ba2b3745b15319f906cfbc3ba9bd1db07->leave($__internal_daa033d410febf506a648877efa2f36ba2b3745b15319f906cfbc3ba9bd1db07_prof);

        
        $__internal_b20803d22ccf2788352648163cf49aceccfe46fc40315b4ecbdd91e23cef8245->leave($__internal_b20803d22ccf2788352648163cf49aceccfe46fc40315b4ecbdd91e23cef8245_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
