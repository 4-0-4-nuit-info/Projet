<?php

/* default/urgences.html.twig */
class __TwigTemplate_33def59b4147e7e70e298b79b0fb55de712670fdd7e992912510f2349725bf72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/urgences.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dad3a01a7f906574d7ce2180d5e3388a1593331136ed45f576fae369963c4110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dad3a01a7f906574d7ce2180d5e3388a1593331136ed45f576fae369963c4110->enter($__internal_dad3a01a7f906574d7ce2180d5e3388a1593331136ed45f576fae369963c4110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/urgences.html.twig"));

        $__internal_bd3246ad9568e2ffb449b88fbf2d06ba5b9bab7d5cd87ce0f17067e2e670cd36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3246ad9568e2ffb449b88fbf2d06ba5b9bab7d5cd87ce0f17067e2e670cd36->enter($__internal_bd3246ad9568e2ffb449b88fbf2d06ba5b9bab7d5cd87ce0f17067e2e670cd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/urgences.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dad3a01a7f906574d7ce2180d5e3388a1593331136ed45f576fae369963c4110->leave($__internal_dad3a01a7f906574d7ce2180d5e3388a1593331136ed45f576fae369963c4110_prof);

        
        $__internal_bd3246ad9568e2ffb449b88fbf2d06ba5b9bab7d5cd87ce0f17067e2e670cd36->leave($__internal_bd3246ad9568e2ffb449b88fbf2d06ba5b9bab7d5cd87ce0f17067e2e670cd36_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c889430f47e92ea971c2ef7aeefde1e2d8092395bad713de0dc74798facdb902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c889430f47e92ea971c2ef7aeefde1e2d8092395bad713de0dc74798facdb902->enter($__internal_c889430f47e92ea971c2ef7aeefde1e2d8092395bad713de0dc74798facdb902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b429c5d690f5cc2dd60b9c094fbb147e8af469fbb3de6723295f49d513741a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b429c5d690f5cc2dd60b9c094fbb147e8af469fbb3de6723295f49d513741a0a->enter($__internal_b429c5d690f5cc2dd60b9c094fbb147e8af469fbb3de6723295f49d513741a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container-fluid innerHTML-center\">    
  <div class=\"row content\"  id=\"page\">
    <div class=\"col-sm-2 sidenav\">
      <div class=\"calendrier\"><a href=\"#\">...</a></div>
    </div>
    <div class=\"col-sm-8 innerHTML-left\"> 
      <h1>Urgence</h1>
\t  <h2>Etapes à suivre</h2>
\t  <p>Vous venez de rencontrer un problème ou d'assister à un accident ? <br /> 
\t  Suivez les quelques questions afin de savoir comment réagir.<br /><br /></p>
      <div id=\"questionnaire\">
\t<b><div id=\"question\"></div></b>
\t<div id=\"reponse\"></div>
\t<br /> <br />
\t<b><div id=\"question2\"></div></b>
\t<div id=\"reponse2\"></div>
\t<b><div id=\"question3\"></div></b>
\t<div id=\"reponse3\"></div>
\t<div id=\"boutons\">
\t<input type=\"button\" value=\"oui\" id=\"oui\" onclick=\"questionnaireOui()\"></input>
\t<input type=\"button\" value=\"non\" id=\"non\" onclick=\"questionnaireNon()\"></input></div><br /><br />
\t
\t
\t<h2><font color=\"red\"><b>Pour un nouvel essai, rechargez la page</b></font></h2>
\t\t</div>
\t  
    </div>
    <div class=\"col-sm-2 sidenav\">
      <div class=\"well\">
        <p>ADS</p>
      </div>
      <div class=\"well\">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_b429c5d690f5cc2dd60b9c094fbb147e8af469fbb3de6723295f49d513741a0a->leave($__internal_b429c5d690f5cc2dd60b9c094fbb147e8af469fbb3de6723295f49d513741a0a_prof);

        
        $__internal_c889430f47e92ea971c2ef7aeefde1e2d8092395bad713de0dc74798facdb902->leave($__internal_c889430f47e92ea971c2ef7aeefde1e2d8092395bad713de0dc74798facdb902_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_62f015ac16a529112c5b934eca059ffe2f154789b545cb031912a63fa676e10e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62f015ac16a529112c5b934eca059ffe2f154789b545cb031912a63fa676e10e->enter($__internal_62f015ac16a529112c5b934eca059ffe2f154789b545cb031912a63fa676e10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4b753d626256ba51810a7fa407e17f218198a6539fd8058913c242b105110e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b753d626256ba51810a7fa407e17f218198a6539fd8058913c242b105110e27->enter($__internal_4b753d626256ba51810a7fa407e17f218198a6539fd8058913c242b105110e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/urgences.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_4b753d626256ba51810a7fa407e17f218198a6539fd8058913c242b105110e27->leave($__internal_4b753d626256ba51810a7fa407e17f218198a6539fd8058913c242b105110e27_prof);

        
        $__internal_62f015ac16a529112c5b934eca059ffe2f154789b545cb031912a63fa676e10e->leave($__internal_62f015ac16a529112c5b934eca059ffe2f154789b545cb031912a63fa676e10e_prof);

    }

    public function getTemplateName()
    {
        return "default/urgences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 42,  50 => 3,  41 => 2,  11 => 1,);
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
<div class=\"container-fluid innerHTML-center\">    
  <div class=\"row content\"  id=\"page\">
    <div class=\"col-sm-2 sidenav\">
      <div class=\"calendrier\"><a href=\"#\">...</a></div>
    </div>
    <div class=\"col-sm-8 innerHTML-left\"> 
      <h1>Urgence</h1>
\t  <h2>Etapes à suivre</h2>
\t  <p>Vous venez de rencontrer un problème ou d'assister à un accident ? <br /> 
\t  Suivez les quelques questions afin de savoir comment réagir.<br /><br /></p>
      <div id=\"questionnaire\">
\t<b><div id=\"question\"></div></b>
\t<div id=\"reponse\"></div>
\t<br /> <br />
\t<b><div id=\"question2\"></div></b>
\t<div id=\"reponse2\"></div>
\t<b><div id=\"question3\"></div></b>
\t<div id=\"reponse3\"></div>
\t<div id=\"boutons\">
\t<input type=\"button\" value=\"oui\" id=\"oui\" onclick=\"questionnaireOui()\"></input>
\t<input type=\"button\" value=\"non\" id=\"non\" onclick=\"questionnaireNon()\"></input></div><br /><br />
\t
\t
\t<h2><font color=\"red\"><b>Pour un nouvel essai, rechargez la page</b></font></h2>
\t\t</div>
\t  
    </div>
    <div class=\"col-sm-2 sidenav\">
      <div class=\"well\">
        <p>ADS</p>
      </div>
      <div class=\"well\">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>
{% endblock %}

{% block javascripts %}<script src=\"{{ asset('js/urgences.js') }}\"></script>{% endblock %}", "default/urgences.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\app\\Resources\\views\\default\\urgences.html.twig");
    }
}
