<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_91b4b33a8d56ac8295cc0d637773a2d242d2b31d62b769568e0934ddb51eb391 extends Twig_Template
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
        $__internal_975049e048598d9a39191e55cf587f24eb1749d5ee6a78ed14259e5726a7b1ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_975049e048598d9a39191e55cf587f24eb1749d5ee6a78ed14259e5726a7b1ba->enter($__internal_975049e048598d9a39191e55cf587f24eb1749d5ee6a78ed14259e5726a7b1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_6449ae86a0d009af156591b79f14ba1da680a0cded6014edd9194afa957e0a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6449ae86a0d009af156591b79f14ba1da680a0cded6014edd9194afa957e0a67->enter($__internal_6449ae86a0d009af156591b79f14ba1da680a0cded6014edd9194afa957e0a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_975049e048598d9a39191e55cf587f24eb1749d5ee6a78ed14259e5726a7b1ba->leave($__internal_975049e048598d9a39191e55cf587f24eb1749d5ee6a78ed14259e5726a7b1ba_prof);

        
        $__internal_6449ae86a0d009af156591b79f14ba1da680a0cded6014edd9194afa957e0a67->leave($__internal_6449ae86a0d009af156591b79f14ba1da680a0cded6014edd9194afa957e0a67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
