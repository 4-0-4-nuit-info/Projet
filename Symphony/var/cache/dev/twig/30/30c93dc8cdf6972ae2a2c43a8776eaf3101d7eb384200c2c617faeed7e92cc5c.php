<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_4636f147e5f61754611d1e3378dfab98d1aae296d339b07bbe1163ced9283ca8 extends Twig_Template
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
        $__internal_37461dd4367574daf76f2192f9c0791ea53fde7e4295870a61aabc3ed21f14fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37461dd4367574daf76f2192f9c0791ea53fde7e4295870a61aabc3ed21f14fa->enter($__internal_37461dd4367574daf76f2192f9c0791ea53fde7e4295870a61aabc3ed21f14fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_20588aea85de439fcd7b950ead8dd4fedb105e72cfec841b3247479f25eae98c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20588aea85de439fcd7b950ead8dd4fedb105e72cfec841b3247479f25eae98c->enter($__internal_20588aea85de439fcd7b950ead8dd4fedb105e72cfec841b3247479f25eae98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_37461dd4367574daf76f2192f9c0791ea53fde7e4295870a61aabc3ed21f14fa->leave($__internal_37461dd4367574daf76f2192f9c0791ea53fde7e4295870a61aabc3ed21f14fa_prof);

        
        $__internal_20588aea85de439fcd7b950ead8dd4fedb105e72cfec841b3247479f25eae98c->leave($__internal_20588aea85de439fcd7b950ead8dd4fedb105e72cfec841b3247479f25eae98c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
