<?php

/* default/contact.html.twig */
class __TwigTemplate_ed1f91339e5b0f82f8b03e1f65c8d320f1ca6dba38fa6b9840777c4f6c15d0c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/contact.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72897ed90ed3107c8c2854b8c0893c03ba0f69243d9761a471a1cdc925d0bd7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72897ed90ed3107c8c2854b8c0893c03ba0f69243d9761a471a1cdc925d0bd7a->enter($__internal_72897ed90ed3107c8c2854b8c0893c03ba0f69243d9761a471a1cdc925d0bd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contact.html.twig"));

        $__internal_477faa21d720c76d4120e808311cba2013defb1e9dd3e957848baab07cbbcf2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477faa21d720c76d4120e808311cba2013defb1e9dd3e957848baab07cbbcf2a->enter($__internal_477faa21d720c76d4120e808311cba2013defb1e9dd3e957848baab07cbbcf2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72897ed90ed3107c8c2854b8c0893c03ba0f69243d9761a471a1cdc925d0bd7a->leave($__internal_72897ed90ed3107c8c2854b8c0893c03ba0f69243d9761a471a1cdc925d0bd7a_prof);

        
        $__internal_477faa21d720c76d4120e808311cba2013defb1e9dd3e957848baab07cbbcf2a->leave($__internal_477faa21d720c76d4120e808311cba2013defb1e9dd3e957848baab07cbbcf2a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_54fa956acc5b89f3c2038624e02a5b8c097372b0ff63934ec938d382b8485382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54fa956acc5b89f3c2038624e02a5b8c097372b0ff63934ec938d382b8485382->enter($__internal_54fa956acc5b89f3c2038624e02a5b8c097372b0ff63934ec938d382b8485382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3461519e41132080d83335d170122bf51a331ac8e331af9dfdeed8916d53ac89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3461519e41132080d83335d170122bf51a331ac8e331af9dfdeed8916d53ac89->enter($__internal_3461519e41132080d83335d170122bf51a331ac8e331af9dfdeed8916d53ac89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container-fluid text-center\">    
  <div class=\"row content\" id=\"page\">
    <div class=\"col-sm-8 text-left\"> 
      <h1>Bienvenue</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
    </div>
    </div>
  </div>
</div>
";
        
        $__internal_3461519e41132080d83335d170122bf51a331ac8e331af9dfdeed8916d53ac89->leave($__internal_3461519e41132080d83335d170122bf51a331ac8e331af9dfdeed8916d53ac89_prof);

        
        $__internal_54fa956acc5b89f3c2038624e02a5b8c097372b0ff63934ec938d382b8485382->leave($__internal_54fa956acc5b89f3c2038624e02a5b8c097372b0ff63934ec938d382b8485382_prof);

    }

    public function getTemplateName()
    {
        return "default/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
<div class=\"container-fluid text-center\">    
  <div class=\"row content\" id=\"page\">
    <div class=\"col-sm-8 text-left\"> 
      <h1>Bienvenue</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
    </div>
    </div>
  </div>
</div>
{% endblock %}
", "default/contact.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\app\\Resources\\views\\default\\contact.html.twig");
    }
}
