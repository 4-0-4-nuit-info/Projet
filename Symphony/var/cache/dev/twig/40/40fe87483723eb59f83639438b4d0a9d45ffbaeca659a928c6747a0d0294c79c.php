<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_c4a50551a4b7046045ec4d969f5895ea1b3ad16fc3baf7ccafba6ba395ed6f7d extends Twig_Template
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
        $__internal_807287fdf5046aafce3d8857ade98518618366547cb9b7b3ace07adccbdaaabd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807287fdf5046aafce3d8857ade98518618366547cb9b7b3ace07adccbdaaabd->enter($__internal_807287fdf5046aafce3d8857ade98518618366547cb9b7b3ace07adccbdaaabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_acc0acb7068c11742e5991497c39cc0d1c2a33332854cd66a86c2d2c22dccb4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc0acb7068c11742e5991497c39cc0d1c2a33332854cd66a86c2d2c22dccb4e->enter($__internal_acc0acb7068c11742e5991497c39cc0d1c2a33332854cd66a86c2d2c22dccb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_807287fdf5046aafce3d8857ade98518618366547cb9b7b3ace07adccbdaaabd->leave($__internal_807287fdf5046aafce3d8857ade98518618366547cb9b7b3ace07adccbdaaabd_prof);

        
        $__internal_acc0acb7068c11742e5991497c39cc0d1c2a33332854cd66a86c2d2c22dccb4e->leave($__internal_acc0acb7068c11742e5991497c39cc0d1c2a33332854cd66a86c2d2c22dccb4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
