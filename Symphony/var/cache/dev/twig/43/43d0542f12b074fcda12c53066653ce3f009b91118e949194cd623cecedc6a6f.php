<?php

/* base.html.twig */
class __TwigTemplate_35a788ca461558bba9038e4c3f84ff08bc8c4a644fa3eb1893a42b9f45e0624c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4253d750bd8565422375d02bfe4c96e9be36b19f211d8d382e3223d433afa537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4253d750bd8565422375d02bfe4c96e9be36b19f211d8d382e3223d433afa537->enter($__internal_4253d750bd8565422375d02bfe4c96e9be36b19f211d8d382e3223d433afa537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_eea175cc932c9e6964d0f6dc5757f03e1efbdfbdec6649139ed44a03a1cc0b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea175cc932c9e6964d0f6dc5757f03e1efbdfbdec6649139ed44a03a1cc0b5d->enter($__internal_eea175cc932c9e6964d0f6dc5757f03e1efbdfbdec6649139ed44a03a1cc0b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
\t\t  <title>404_name_not_found</title>
\t\t  <meta charset=\"utf-8\">
\t\t  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
\t\t  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/global.css"), "html", null, true);
        echo "\" />
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t\t<nav class=\"navbar navbar-inverse\">
\t  <div class=\"container-fluid\">
\t\t<div class=\"navbar-header\">
\t\t  <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>                        
\t\t  </button>
\t\t</div>
\t\t<div><h3>La sécurité routière pour tous</h3></div>
\t\t<div class=\"collapse navbar-collapse\" id=\"myNavbar\">
\t\t  <ul class=\"nav navbar-nav\">
\t\t\t<li class=\"active\"><a href=\"accueil\">Accueil</a></li>
\t\t\t<li><a href=\"prevenir\">Prévenir</a></li>
\t\t\t<li><a href=\"calendrier\">Calendrier</a></li>
\t\t\t<li><a href=\"contact\">Contact</a></li>
\t\t\t<li class=\"btn btn-danger\" style=\"background-color: navy; border:none;\">
\t\t\t\t<a href=\"urgences\" style=\"color: white\">Urgence</a>
\t\t\t</li>
\t\t  </ul>
\t\t  <ul class=\"nav navbar-nav navbar-right\">
\t\t\t<li><a href=\"connexion\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
\t\t  </ul>
\t\t</div>
\t  </div>
\t</nav>
\t    <div class=\"col-sm-2 sidenav\" id=\"gauche\">
      <!--<div id=\"calendrier\"><a href=\"#\" style=\"color: black\">...</a></div>-->
      <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/IMAGE_Gauche.png"), "html", null, true);
        echo "\" alt=\"logo\"/>
    </div>
        ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "\t\t\t    <div class=\"col-sm-2 sidenav\" id=\"logo\">
    <img class=\"gauche\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/IMAGE_Droite.png"), "html", null, true);
        echo "\" alt=\"logo\"/>
      </div>
\t\t  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t\t  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "    </body>
\t<footer class=\"container-fluid text-center\">
\t\t<p>Footer Text</p>
\t</footer>
</html>
";
        
        $__internal_4253d750bd8565422375d02bfe4c96e9be36b19f211d8d382e3223d433afa537->leave($__internal_4253d750bd8565422375d02bfe4c96e9be36b19f211d8d382e3223d433afa537_prof);

        
        $__internal_eea175cc932c9e6964d0f6dc5757f03e1efbdfbdec6649139ed44a03a1cc0b5d->leave($__internal_eea175cc932c9e6964d0f6dc5757f03e1efbdfbdec6649139ed44a03a1cc0b5d_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_b03cda30bb3ea29efce6b8bad4cfdeee5740d0d6d99991fce68104beb1a7badc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03cda30bb3ea29efce6b8bad4cfdeee5740d0d6d99991fce68104beb1a7badc->enter($__internal_b03cda30bb3ea29efce6b8bad4cfdeee5740d0d6d99991fce68104beb1a7badc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_62d98081837dd7559e894657c190db3d34a3badbb32e169f53a9ea2b7793e051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d98081837dd7559e894657c190db3d34a3badbb32e169f53a9ea2b7793e051->enter($__internal_62d98081837dd7559e894657c190db3d34a3badbb32e169f53a9ea2b7793e051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_62d98081837dd7559e894657c190db3d34a3badbb32e169f53a9ea2b7793e051->leave($__internal_62d98081837dd7559e894657c190db3d34a3badbb32e169f53a9ea2b7793e051_prof);

        
        $__internal_b03cda30bb3ea29efce6b8bad4cfdeee5740d0d6d99991fce68104beb1a7badc->leave($__internal_b03cda30bb3ea29efce6b8bad4cfdeee5740d0d6d99991fce68104beb1a7badc_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_08860135490b196303f8e0e83cf704e63662283968550f5d832aa5f2c5159d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08860135490b196303f8e0e83cf704e63662283968550f5d832aa5f2c5159d44->enter($__internal_08860135490b196303f8e0e83cf704e63662283968550f5d832aa5f2c5159d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cd70474565f308f5598284884f6d843a0340ab0762a4fcfddc1dadff43e86913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd70474565f308f5598284884f6d843a0340ab0762a4fcfddc1dadff43e86913->enter($__internal_cd70474565f308f5598284884f6d843a0340ab0762a4fcfddc1dadff43e86913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cd70474565f308f5598284884f6d843a0340ab0762a4fcfddc1dadff43e86913->leave($__internal_cd70474565f308f5598284884f6d843a0340ab0762a4fcfddc1dadff43e86913_prof);

        
        $__internal_08860135490b196303f8e0e83cf704e63662283968550f5d832aa5f2c5159d44->leave($__internal_08860135490b196303f8e0e83cf704e63662283968550f5d832aa5f2c5159d44_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5c2c1fc8cbce2c8276581caaafee2bed6ad830c431cb9395e3dc2f4e43e8a56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5c2c1fc8cbce2c8276581caaafee2bed6ad830c431cb9395e3dc2f4e43e8a56->enter($__internal_b5c2c1fc8cbce2c8276581caaafee2bed6ad830c431cb9395e3dc2f4e43e8a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f2b16ccafb90c2539a975ae40709b58aee2a77469429b899287960b206be463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2b16ccafb90c2539a975ae40709b58aee2a77469429b899287960b206be463->enter($__internal_9f2b16ccafb90c2539a975ae40709b58aee2a77469429b899287960b206be463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9f2b16ccafb90c2539a975ae40709b58aee2a77469429b899287960b206be463->leave($__internal_9f2b16ccafb90c2539a975ae40709b58aee2a77469429b899287960b206be463_prof);

        
        $__internal_b5c2c1fc8cbce2c8276581caaafee2bed6ad830c431cb9395e3dc2f4e43e8a56->leave($__internal_b5c2c1fc8cbce2c8276581caaafee2bed6ad830c431cb9395e3dc2f4e43e8a56_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fab64cbad129f17eb7be81275b06c85d9310117d0c07649562cc36e70d2dde8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fab64cbad129f17eb7be81275b06c85d9310117d0c07649562cc36e70d2dde8b->enter($__internal_fab64cbad129f17eb7be81275b06c85d9310117d0c07649562cc36e70d2dde8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dc2c9e96a3a81aeecb2be79c8badd7cbe84e23ae86f3f160ff9001f15c33ca3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2c9e96a3a81aeecb2be79c8badd7cbe84e23ae86f3f160ff9001f15c33ca3d->enter($__internal_dc2c9e96a3a81aeecb2be79c8badd7cbe84e23ae86f3f160ff9001f15c33ca3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dc2c9e96a3a81aeecb2be79c8badd7cbe84e23ae86f3f160ff9001f15c33ca3d->leave($__internal_dc2c9e96a3a81aeecb2be79c8badd7cbe84e23ae86f3f160ff9001f15c33ca3d_prof);

        
        $__internal_fab64cbad129f17eb7be81275b06c85d9310117d0c07649562cc36e70d2dde8b->leave($__internal_fab64cbad129f17eb7be81275b06c85d9310117d0c07649562cc36e70d2dde8b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 51,  152 => 45,  135 => 11,  118 => 10,  103 => 52,  101 => 51,  94 => 47,  91 => 46,  89 => 45,  84 => 43,  49 => 12,  47 => 11,  43 => 10,  39 => 9,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
\t\t  <title>404_name_not_found</title>
\t\t  <meta charset=\"utf-8\">
\t\t  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
\t\t  <link rel=\"stylesheet\" href=\"{{ asset('css/global.css') }}\" />
        <title>{% block title %}{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
\t\t<nav class=\"navbar navbar-inverse\">
\t  <div class=\"container-fluid\">
\t\t<div class=\"navbar-header\">
\t\t  <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>                        
\t\t  </button>
\t\t</div>
\t\t<div><h3>La sécurité routière pour tous</h3></div>
\t\t<div class=\"collapse navbar-collapse\" id=\"myNavbar\">
\t\t  <ul class=\"nav navbar-nav\">
\t\t\t<li class=\"active\"><a href=\"accueil\">Accueil</a></li>
\t\t\t<li><a href=\"prevenir\">Prévenir</a></li>
\t\t\t<li><a href=\"calendrier\">Calendrier</a></li>
\t\t\t<li><a href=\"contact\">Contact</a></li>
\t\t\t<li class=\"btn btn-danger\" style=\"background-color: navy; border:none;\">
\t\t\t\t<a href=\"urgences\" style=\"color: white\">Urgence</a>
\t\t\t</li>
\t\t  </ul>
\t\t  <ul class=\"nav navbar-nav navbar-right\">
\t\t\t<li><a href=\"connexion\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
\t\t  </ul>
\t\t</div>
\t  </div>
\t</nav>
\t    <div class=\"col-sm-2 sidenav\" id=\"gauche\">
      <!--<div id=\"calendrier\"><a href=\"#\" style=\"color: black\">...</a></div>-->
      <img src=\"{{ asset('image/IMAGE_Gauche.png')}}\" alt=\"logo\"/>
    </div>
        {% block body %}{% endblock %}
\t\t\t    <div class=\"col-sm-2 sidenav\" id=\"logo\">
    <img class=\"gauche\" src=\"{{ asset('image/IMAGE_Droite.png')}}\" alt=\"logo\"/>
      </div>
\t\t  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t\t  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        {% block javascripts %}{% endblock %}
    </body>
\t<footer class=\"container-fluid text-center\">
\t\t<p>Footer Text</p>
\t</footer>
</html>
", "base.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\app\\Resources\\views\\base.html.twig");
    }
}
