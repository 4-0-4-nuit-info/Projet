<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_be4c7fa34522bf3f1695469a17d074c8b47b497835287653ed69e68a52e2cad2 extends Twig_Template
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
        $__internal_fbc5d1f5891485fe170901cb86e0e96dfca4af7fb9d8745e360221901e9abd4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbc5d1f5891485fe170901cb86e0e96dfca4af7fb9d8745e360221901e9abd4e->enter($__internal_fbc5d1f5891485fe170901cb86e0e96dfca4af7fb9d8745e360221901e9abd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_5407097bf1daf3735037a0e095eb1116fd7a11c6af107bce35909ef48bbe0aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5407097bf1daf3735037a0e095eb1116fd7a11c6af107bce35909ef48bbe0aee->enter($__internal_5407097bf1daf3735037a0e095eb1116fd7a11c6af107bce35909ef48bbe0aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_fbc5d1f5891485fe170901cb86e0e96dfca4af7fb9d8745e360221901e9abd4e->leave($__internal_fbc5d1f5891485fe170901cb86e0e96dfca4af7fb9d8745e360221901e9abd4e_prof);

        
        $__internal_5407097bf1daf3735037a0e095eb1116fd7a11c6af107bce35909ef48bbe0aee->leave($__internal_5407097bf1daf3735037a0e095eb1116fd7a11c6af107bce35909ef48bbe0aee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
