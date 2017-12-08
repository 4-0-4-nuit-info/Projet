<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_a6a8405f86b69c8a1dc44e0b590d73e8d089748347fda5733b42b530be50aa51 extends Twig_Template
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
        $__internal_71248f2f72a60b184fc6f7997edc3e57ef639c07545e76f9717919f90060b9a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71248f2f72a60b184fc6f7997edc3e57ef639c07545e76f9717919f90060b9a4->enter($__internal_71248f2f72a60b184fc6f7997edc3e57ef639c07545e76f9717919f90060b9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_0224ad7cf9490236bd88e5ecb775bbdc762e6fc6b0ae0f5f9ab89c4678a09eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0224ad7cf9490236bd88e5ecb775bbdc762e6fc6b0ae0f5f9ab89c4678a09eaa->enter($__internal_0224ad7cf9490236bd88e5ecb775bbdc762e6fc6b0ae0f5f9ab89c4678a09eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_71248f2f72a60b184fc6f7997edc3e57ef639c07545e76f9717919f90060b9a4->leave($__internal_71248f2f72a60b184fc6f7997edc3e57ef639c07545e76f9717919f90060b9a4_prof);

        
        $__internal_0224ad7cf9490236bd88e5ecb775bbdc762e6fc6b0ae0f5f9ab89c4678a09eaa->leave($__internal_0224ad7cf9490236bd88e5ecb775bbdc762e6fc6b0ae0f5f9ab89c4678a09eaa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
