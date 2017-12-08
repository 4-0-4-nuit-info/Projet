<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_b3c721221b590bc6ff7906c3f841c758d56c085b6fa2b9f997e202488bda381d extends Twig_Template
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
        $__internal_16b3b3b44dc95cc571050fda6bf7b044430a35fa80d1327b430c50cd53be306e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16b3b3b44dc95cc571050fda6bf7b044430a35fa80d1327b430c50cd53be306e->enter($__internal_16b3b3b44dc95cc571050fda6bf7b044430a35fa80d1327b430c50cd53be306e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_3a883054d9c20c553df457483b14d625f81a45dab1bbd67f9ab2485fb7cfb86f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a883054d9c20c553df457483b14d625f81a45dab1bbd67f9ab2485fb7cfb86f->enter($__internal_3a883054d9c20c553df457483b14d625f81a45dab1bbd67f9ab2485fb7cfb86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_16b3b3b44dc95cc571050fda6bf7b044430a35fa80d1327b430c50cd53be306e->leave($__internal_16b3b3b44dc95cc571050fda6bf7b044430a35fa80d1327b430c50cd53be306e_prof);

        
        $__internal_3a883054d9c20c553df457483b14d625f81a45dab1bbd67f9ab2485fb7cfb86f->leave($__internal_3a883054d9c20c553df457483b14d625f81a45dab1bbd67f9ab2485fb7cfb86f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
