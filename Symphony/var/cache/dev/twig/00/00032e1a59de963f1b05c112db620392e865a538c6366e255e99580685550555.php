<?php

/* default/accueil.html.twig */
class __TwigTemplate_5f761338dfcffb22d6f7efb0859795e90aae518fd4d8fa463a8547f0c98d26da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/accueil.html.twig", 1);
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
        $__internal_215c2e939c1f11b5296216d8ed56cbd3f56f3eb7844fe5ffb9d16390831ceb84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_215c2e939c1f11b5296216d8ed56cbd3f56f3eb7844fe5ffb9d16390831ceb84->enter($__internal_215c2e939c1f11b5296216d8ed56cbd3f56f3eb7844fe5ffb9d16390831ceb84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        $__internal_6d32c46b1a91e5c178b1c9786d8433167fb149a593a06b0f98c9fd5a9b3354fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d32c46b1a91e5c178b1c9786d8433167fb149a593a06b0f98c9fd5a9b3354fa->enter($__internal_6d32c46b1a91e5c178b1c9786d8433167fb149a593a06b0f98c9fd5a9b3354fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_215c2e939c1f11b5296216d8ed56cbd3f56f3eb7844fe5ffb9d16390831ceb84->leave($__internal_215c2e939c1f11b5296216d8ed56cbd3f56f3eb7844fe5ffb9d16390831ceb84_prof);

        
        $__internal_6d32c46b1a91e5c178b1c9786d8433167fb149a593a06b0f98c9fd5a9b3354fa->leave($__internal_6d32c46b1a91e5c178b1c9786d8433167fb149a593a06b0f98c9fd5a9b3354fa_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8ee3bfff71fb1e2f875c86814b1aed981d6f265ac1b3b7ae347739fc305595d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8ee3bfff71fb1e2f875c86814b1aed981d6f265ac1b3b7ae347739fc305595d->enter($__internal_e8ee3bfff71fb1e2f875c86814b1aed981d6f265ac1b3b7ae347739fc305595d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cbc396ade9dfccc8d0c7785502412c9205e1d3ac52a413b6d9a7dbe1e8dfece3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbc396ade9dfccc8d0c7785502412c9205e1d3ac52a413b6d9a7dbe1e8dfece3->enter($__internal_cbc396ade9dfccc8d0c7785502412c9205e1d3ac52a413b6d9a7dbe1e8dfece3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container-fluid text-center\">    
  <div class=\"row content\" id=\"page\">
    <div class=\"col-sm-2 sidenav\" id=\"gauche\">
      <!--<div id=\"calendrier\"><a href=\"#\" style=\"color: black\">...</a></div>-->
      <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/IMAGE_Gauche.png"), "html", null, true);
        echo "\" alt=\"logo\"/>
    </div>
    <div class=\"col-sm-8 text-left\"> 
      <h1>Bienvenue</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
    </div>
    <div class=\"col-sm-2 sidenav\" id=\"logo\">
    <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/IMAGE_Droite.png"), "html", null, true);
        echo "\" alt=\"logo\"/>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_cbc396ade9dfccc8d0c7785502412c9205e1d3ac52a413b6d9a7dbe1e8dfece3->leave($__internal_cbc396ade9dfccc8d0c7785502412c9205e1d3ac52a413b6d9a7dbe1e8dfece3_prof);

        
        $__internal_e8ee3bfff71fb1e2f875c86814b1aed981d6f265ac1b3b7ae347739fc305595d->leave($__internal_e8ee3bfff71fb1e2f875c86814b1aed981d6f265ac1b3b7ae347739fc305595d_prof);

    }

    public function getTemplateName()
    {
        return "default/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
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
    <div class=\"col-sm-2 sidenav\" id=\"gauche\">
      <!--<div id=\"calendrier\"><a href=\"#\" style=\"color: black\">...</a></div>-->
      <img src=\"{{ asset('image/IMAGE_Gauche.png')}}\" alt=\"logo\"/>
    </div>
    <div class=\"col-sm-8 text-left\"> 
      <h1>Bienvenue</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
    </div>
    <div class=\"col-sm-2 sidenav\" id=\"logo\">
    <img src=\"{{ asset('image/IMAGE_Droite.png')}}\" alt=\"logo\"/>
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "default/accueil.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\app\\Resources\\views\\default\\accueil.html.twig");
    }
}
