<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_0a05875b8dcd1905ced758d797c16d5bd35942831022184846e48226124ee1f2 extends Twig_Template
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
        $__internal_553a256318e52860823a503cd5b0825e7064a2a7816ab6afcb1bd3016c838b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_553a256318e52860823a503cd5b0825e7064a2a7816ab6afcb1bd3016c838b10->enter($__internal_553a256318e52860823a503cd5b0825e7064a2a7816ab6afcb1bd3016c838b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_616505dc032a91fe7f6b8f0b22b1c339b9d94bf6784ee165e6086db9c172a5e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_616505dc032a91fe7f6b8f0b22b1c339b9d94bf6784ee165e6086db9c172a5e8->enter($__internal_616505dc032a91fe7f6b8f0b22b1c339b9d94bf6784ee165e6086db9c172a5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_553a256318e52860823a503cd5b0825e7064a2a7816ab6afcb1bd3016c838b10->leave($__internal_553a256318e52860823a503cd5b0825e7064a2a7816ab6afcb1bd3016c838b10_prof);

        
        $__internal_616505dc032a91fe7f6b8f0b22b1c339b9d94bf6784ee165e6086db9c172a5e8->leave($__internal_616505dc032a91fe7f6b8f0b22b1c339b9d94bf6784ee165e6086db9c172a5e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
