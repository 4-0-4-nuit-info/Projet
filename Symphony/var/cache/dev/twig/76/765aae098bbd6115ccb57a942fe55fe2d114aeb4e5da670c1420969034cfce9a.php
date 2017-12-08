<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_932f19e9621faee0531c159e8cb699006563d530eb694cec1ca0623b275bf2ea extends Twig_Template
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
        $__internal_10e49a99f47f42f4191b17442619de074174c32c47b068253ccebb7024c41f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10e49a99f47f42f4191b17442619de074174c32c47b068253ccebb7024c41f46->enter($__internal_10e49a99f47f42f4191b17442619de074174c32c47b068253ccebb7024c41f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_31de9a366e39a1b49d42571e18065d18373e510aeb2d7953f618a9d0161fe368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31de9a366e39a1b49d42571e18065d18373e510aeb2d7953f618a9d0161fe368->enter($__internal_31de9a366e39a1b49d42571e18065d18373e510aeb2d7953f618a9d0161fe368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_10e49a99f47f42f4191b17442619de074174c32c47b068253ccebb7024c41f46->leave($__internal_10e49a99f47f42f4191b17442619de074174c32c47b068253ccebb7024c41f46_prof);

        
        $__internal_31de9a366e39a1b49d42571e18065d18373e510aeb2d7953f618a9d0161fe368->leave($__internal_31de9a366e39a1b49d42571e18065d18373e510aeb2d7953f618a9d0161fe368_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
