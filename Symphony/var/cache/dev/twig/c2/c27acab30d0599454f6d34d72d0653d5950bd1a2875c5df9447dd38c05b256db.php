<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_52833beb038fded28479f80c18adb0c8ea7635faba1e1fe4eef04140bfac8e75 extends Twig_Template
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
        $__internal_4cdb533ffe3a607140f62f6d5127a83d3d42dab80d49fde5efc764d7335053c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cdb533ffe3a607140f62f6d5127a83d3d42dab80d49fde5efc764d7335053c4->enter($__internal_4cdb533ffe3a607140f62f6d5127a83d3d42dab80d49fde5efc764d7335053c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_ad6663e9b4fb6a02dc5a807e2114d16adfefc929ce0336580beb36d340069c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6663e9b4fb6a02dc5a807e2114d16adfefc929ce0336580beb36d340069c55->enter($__internal_ad6663e9b4fb6a02dc5a807e2114d16adfefc929ce0336580beb36d340069c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4cdb533ffe3a607140f62f6d5127a83d3d42dab80d49fde5efc764d7335053c4->leave($__internal_4cdb533ffe3a607140f62f6d5127a83d3d42dab80d49fde5efc764d7335053c4_prof);

        
        $__internal_ad6663e9b4fb6a02dc5a807e2114d16adfefc929ce0336580beb36d340069c55->leave($__internal_ad6663e9b4fb6a02dc5a807e2114d16adfefc929ce0336580beb36d340069c55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
