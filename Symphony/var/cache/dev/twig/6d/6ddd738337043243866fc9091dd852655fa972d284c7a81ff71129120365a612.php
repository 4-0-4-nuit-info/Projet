<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_66625ed96b287b922bb2b30aea72ef04e1abf00cccc6ec4ebb3753b9a1b5af01 extends Twig_Template
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
        $__internal_db4a85b5adc38cfbb0b85e8b53c71c329b8d9bf3529e1f27da02df179c2bb64f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db4a85b5adc38cfbb0b85e8b53c71c329b8d9bf3529e1f27da02df179c2bb64f->enter($__internal_db4a85b5adc38cfbb0b85e8b53c71c329b8d9bf3529e1f27da02df179c2bb64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_34a371ea2801fde3519f61e9887f429a786f8be154086455f52ce20e9759e280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a371ea2801fde3519f61e9887f429a786f8be154086455f52ce20e9759e280->enter($__internal_34a371ea2801fde3519f61e9887f429a786f8be154086455f52ce20e9759e280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_db4a85b5adc38cfbb0b85e8b53c71c329b8d9bf3529e1f27da02df179c2bb64f->leave($__internal_db4a85b5adc38cfbb0b85e8b53c71c329b8d9bf3529e1f27da02df179c2bb64f_prof);

        
        $__internal_34a371ea2801fde3519f61e9887f429a786f8be154086455f52ce20e9759e280->leave($__internal_34a371ea2801fde3519f61e9887f429a786f8be154086455f52ce20e9759e280_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
