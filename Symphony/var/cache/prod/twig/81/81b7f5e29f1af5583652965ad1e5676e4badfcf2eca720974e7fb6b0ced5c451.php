<?php

/* ::base.html.twig */
class __TwigTemplate_857c29a2e11064b25a7fc7f7aa67e44850afe064fe9d47a62095cf3903cc9e42 extends Twig_Template
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
\t<div>
\t\t<img class=\"droite\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/IMAGE_Gauche.png"), "html", null, true);
        echo "\" alt=\"logo\"/>
\t\t<img class=\"gauche\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/IMAGE_Droite.png"), "html", null, true);
        echo "\" alt=\"logo\"/>
\t</div>
        ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "\t\t  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t\t  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
\t\t  <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "\t<iframe id=\"Chatbox\"
\t\twidth=\"350\"
\t\theight=\"430\"
\t\tsrc=\"https://console.dialogflow.com/api-client/demo/embedded/0bdde35c-3c7c-4897-9427-e8c990540721\">
\t</iframe>
    </body>

\t<footer class=\"container-fluid text-center\">
\t\t<p>Footer Text</p>
\t</footer>
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 49,  123 => 45,  118 => 11,  113 => 10,  98 => 50,  96 => 49,  92 => 48,  88 => 46,  86 => 45,  81 => 43,  77 => 42,  43 => 12,  41 => 11,  37 => 10,  33 => 9,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\app/Resources\\views/base.html.twig");
    }
}
