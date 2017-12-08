<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_104c38a36f4f796344ca0a3265044b2535031c3e2a1cbe2b43c6a79b54c9a026 extends Twig_Template
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
        $__internal_fae4b79222322530de3e61270554106d854c3d4696345a8e215c83771f39d671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae4b79222322530de3e61270554106d854c3d4696345a8e215c83771f39d671->enter($__internal_fae4b79222322530de3e61270554106d854c3d4696345a8e215c83771f39d671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_39b425ce5fc5217c5ac7663b7f17b16bf5f35c8985ef8dc7d940c6846ad2ef38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b425ce5fc5217c5ac7663b7f17b16bf5f35c8985ef8dc7d940c6846ad2ef38->enter($__internal_39b425ce5fc5217c5ac7663b7f17b16bf5f35c8985ef8dc7d940c6846ad2ef38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_fae4b79222322530de3e61270554106d854c3d4696345a8e215c83771f39d671->leave($__internal_fae4b79222322530de3e61270554106d854c3d4696345a8e215c83771f39d671_prof);

        
        $__internal_39b425ce5fc5217c5ac7663b7f17b16bf5f35c8985ef8dc7d940c6846ad2ef38->leave($__internal_39b425ce5fc5217c5ac7663b7f17b16bf5f35c8985ef8dc7d940c6846ad2ef38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
