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
        $__internal_ebdbc5f8dcc475566747474050f949eeae6e0aa384fdcffd0edb1b9f34f76f2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebdbc5f8dcc475566747474050f949eeae6e0aa384fdcffd0edb1b9f34f76f2b->enter($__internal_ebdbc5f8dcc475566747474050f949eeae6e0aa384fdcffd0edb1b9f34f76f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8ce412613506646df2d1d84093624594083250a4547b8d0ff425449cc19d14b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ce412613506646df2d1d84093624594083250a4547b8d0ff425449cc19d14b2->enter($__internal_8ce412613506646df2d1d84093624594083250a4547b8d0ff425449cc19d14b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "\t\t  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t\t  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        ";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "    </body>
\t<footer class=\"container-fluid text-center\">
\t\t<p>Footer Text</p>
\t</footer>
</html>
";
        
        $__internal_ebdbc5f8dcc475566747474050f949eeae6e0aa384fdcffd0edb1b9f34f76f2b->leave($__internal_ebdbc5f8dcc475566747474050f949eeae6e0aa384fdcffd0edb1b9f34f76f2b_prof);

        
        $__internal_8ce412613506646df2d1d84093624594083250a4547b8d0ff425449cc19d14b2->leave($__internal_8ce412613506646df2d1d84093624594083250a4547b8d0ff425449cc19d14b2_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce6dde4ae3a390b842245d55dec980eb09ed26ce8dd8ea0e13320e608804d43d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce6dde4ae3a390b842245d55dec980eb09ed26ce8dd8ea0e13320e608804d43d->enter($__internal_ce6dde4ae3a390b842245d55dec980eb09ed26ce8dd8ea0e13320e608804d43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f7c4903f3235ad8a2b974d96ea0247fa8cad044e1092ff0b4485118e81739511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c4903f3235ad8a2b974d96ea0247fa8cad044e1092ff0b4485118e81739511->enter($__internal_f7c4903f3235ad8a2b974d96ea0247fa8cad044e1092ff0b4485118e81739511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f7c4903f3235ad8a2b974d96ea0247fa8cad044e1092ff0b4485118e81739511->leave($__internal_f7c4903f3235ad8a2b974d96ea0247fa8cad044e1092ff0b4485118e81739511_prof);

        
        $__internal_ce6dde4ae3a390b842245d55dec980eb09ed26ce8dd8ea0e13320e608804d43d->leave($__internal_ce6dde4ae3a390b842245d55dec980eb09ed26ce8dd8ea0e13320e608804d43d_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_66e6d780e235e7b21cc4534e1dbc81d70183f85197be2e800dbd5e9b5b8d6ba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e6d780e235e7b21cc4534e1dbc81d70183f85197be2e800dbd5e9b5b8d6ba5->enter($__internal_66e6d780e235e7b21cc4534e1dbc81d70183f85197be2e800dbd5e9b5b8d6ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1f8b68a48c827a6e70464d737a42b85123e4ad31d72e3e0b3c25019c79b6aca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8b68a48c827a6e70464d737a42b85123e4ad31d72e3e0b3c25019c79b6aca8->enter($__internal_1f8b68a48c827a6e70464d737a42b85123e4ad31d72e3e0b3c25019c79b6aca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1f8b68a48c827a6e70464d737a42b85123e4ad31d72e3e0b3c25019c79b6aca8->leave($__internal_1f8b68a48c827a6e70464d737a42b85123e4ad31d72e3e0b3c25019c79b6aca8_prof);

        
        $__internal_66e6d780e235e7b21cc4534e1dbc81d70183f85197be2e800dbd5e9b5b8d6ba5->leave($__internal_66e6d780e235e7b21cc4534e1dbc81d70183f85197be2e800dbd5e9b5b8d6ba5_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_e33af102c00a0d1ba7ed25f30641534f2c98c43d611212d54633ded040bce1b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e33af102c00a0d1ba7ed25f30641534f2c98c43d611212d54633ded040bce1b9->enter($__internal_e33af102c00a0d1ba7ed25f30641534f2c98c43d611212d54633ded040bce1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19bc95309d9acab91630b70a9781ffa3c904ed4a24598da273dbabeeba243372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19bc95309d9acab91630b70a9781ffa3c904ed4a24598da273dbabeeba243372->enter($__internal_19bc95309d9acab91630b70a9781ffa3c904ed4a24598da273dbabeeba243372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_19bc95309d9acab91630b70a9781ffa3c904ed4a24598da273dbabeeba243372->leave($__internal_19bc95309d9acab91630b70a9781ffa3c904ed4a24598da273dbabeeba243372_prof);

        
        $__internal_e33af102c00a0d1ba7ed25f30641534f2c98c43d611212d54633ded040bce1b9->leave($__internal_e33af102c00a0d1ba7ed25f30641534f2c98c43d611212d54633ded040bce1b9_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_43cf092f0bc99d2cee8ffa24ff178ad15369ddf9b887f82181cffdc439ba3c42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43cf092f0bc99d2cee8ffa24ff178ad15369ddf9b887f82181cffdc439ba3c42->enter($__internal_43cf092f0bc99d2cee8ffa24ff178ad15369ddf9b887f82181cffdc439ba3c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ce4f4ce799e0bec1cf040188473b774601ff60693d7ac7f70eb8431f9982fdf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4f4ce799e0bec1cf040188473b774601ff60693d7ac7f70eb8431f9982fdf3->enter($__internal_ce4f4ce799e0bec1cf040188473b774601ff60693d7ac7f70eb8431f9982fdf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ce4f4ce799e0bec1cf040188473b774601ff60693d7ac7f70eb8431f9982fdf3->leave($__internal_ce4f4ce799e0bec1cf040188473b774601ff60693d7ac7f70eb8431f9982fdf3_prof);

        
        $__internal_43cf092f0bc99d2cee8ffa24ff178ad15369ddf9b887f82181cffdc439ba3c42->leave($__internal_43cf092f0bc99d2cee8ffa24ff178ad15369ddf9b887f82181cffdc439ba3c42_prof);

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
        return array (  156 => 44,  139 => 41,  122 => 11,  105 => 10,  90 => 45,  88 => 44,  84 => 42,  82 => 41,  49 => 12,  47 => 11,  43 => 10,  39 => 9,  29 => 1,);
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
        {% block body %}{% endblock %}
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
