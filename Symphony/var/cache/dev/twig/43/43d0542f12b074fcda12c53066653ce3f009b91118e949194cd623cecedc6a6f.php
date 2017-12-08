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
        $__internal_eae735ab33051925a5a9578b730703a79e2125806016a4e640f1ec8bda41d204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eae735ab33051925a5a9578b730703a79e2125806016a4e640f1ec8bda41d204->enter($__internal_eae735ab33051925a5a9578b730703a79e2125806016a4e640f1ec8bda41d204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6921a4ddbd150a1c7de39e6b9c84b8e7ee559393be31afffb2166784765d269a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6921a4ddbd150a1c7de39e6b9c84b8e7ee559393be31afffb2166784765d269a->enter($__internal_6921a4ddbd150a1c7de39e6b9c84b8e7ee559393be31afffb2166784765d269a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
\t\t<nav class=\"navbar navbar-inverse fixed-top\">
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
\t</nav>
\t<div>
\t\t<img class=\"gauche\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/IMAGE_Gauche.png"), "html", null, true);
        echo "\" alt=\"logo\"/>
\t\t<img class=\"droite\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/IMAGE_Droite.png"), "html", null, true);
        echo "\" alt=\"logo\"/>
\t</div>
        ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "\t\t  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t\t  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
\t\t  <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "    </body>
\t<iframe id=\"Chatbox\"
\t\twidth=\"350\"
\t\theight=\"430\"
\t\tsrc=\"https://console.dialogflow.com/api-client/demo/embedded/0bdde35c-3c7c-4897-9427-e8c990540721\">
\t</iframe>
\t<footer>
\t\t<p>Footer Text</p>
\t</footer>
</html>
";
        
        $__internal_eae735ab33051925a5a9578b730703a79e2125806016a4e640f1ec8bda41d204->leave($__internal_eae735ab33051925a5a9578b730703a79e2125806016a4e640f1ec8bda41d204_prof);

        
        $__internal_6921a4ddbd150a1c7de39e6b9c84b8e7ee559393be31afffb2166784765d269a->leave($__internal_6921a4ddbd150a1c7de39e6b9c84b8e7ee559393be31afffb2166784765d269a_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_76caa4ee9e12f63995cf8cf83b27398f7aa2584bcb17e3a478772807620e8ac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76caa4ee9e12f63995cf8cf83b27398f7aa2584bcb17e3a478772807620e8ac0->enter($__internal_76caa4ee9e12f63995cf8cf83b27398f7aa2584bcb17e3a478772807620e8ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1a01250140475f42a5aac349ff84a0e4199faa7699e7bf661f09ae0a36a417b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a01250140475f42a5aac349ff84a0e4199faa7699e7bf661f09ae0a36a417b2->enter($__internal_1a01250140475f42a5aac349ff84a0e4199faa7699e7bf661f09ae0a36a417b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1a01250140475f42a5aac349ff84a0e4199faa7699e7bf661f09ae0a36a417b2->leave($__internal_1a01250140475f42a5aac349ff84a0e4199faa7699e7bf661f09ae0a36a417b2_prof);

        
        $__internal_76caa4ee9e12f63995cf8cf83b27398f7aa2584bcb17e3a478772807620e8ac0->leave($__internal_76caa4ee9e12f63995cf8cf83b27398f7aa2584bcb17e3a478772807620e8ac0_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5de856f36ed5daa7235ff8b0bc484b155320d333e2f65d8f346acb85362d71d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5de856f36ed5daa7235ff8b0bc484b155320d333e2f65d8f346acb85362d71d4->enter($__internal_5de856f36ed5daa7235ff8b0bc484b155320d333e2f65d8f346acb85362d71d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5bd08b761732242878cd819698cde991ff069f08778ee7a1e81f9167592b9c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd08b761732242878cd819698cde991ff069f08778ee7a1e81f9167592b9c9b->enter($__internal_5bd08b761732242878cd819698cde991ff069f08778ee7a1e81f9167592b9c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5bd08b761732242878cd819698cde991ff069f08778ee7a1e81f9167592b9c9b->leave($__internal_5bd08b761732242878cd819698cde991ff069f08778ee7a1e81f9167592b9c9b_prof);

        
        $__internal_5de856f36ed5daa7235ff8b0bc484b155320d333e2f65d8f346acb85362d71d4->leave($__internal_5de856f36ed5daa7235ff8b0bc484b155320d333e2f65d8f346acb85362d71d4_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3fc219d43fe7bbd36c900a62d80db90db4e91b8dbe8dc14eb6369dfc1297423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3fc219d43fe7bbd36c900a62d80db90db4e91b8dbe8dc14eb6369dfc1297423->enter($__internal_f3fc219d43fe7bbd36c900a62d80db90db4e91b8dbe8dc14eb6369dfc1297423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b9e2d63aed6424096a57ab9a2b012df8361a14e7393ec06f59a9a0236dc1bfbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e2d63aed6424096a57ab9a2b012df8361a14e7393ec06f59a9a0236dc1bfbf->enter($__internal_b9e2d63aed6424096a57ab9a2b012df8361a14e7393ec06f59a9a0236dc1bfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b9e2d63aed6424096a57ab9a2b012df8361a14e7393ec06f59a9a0236dc1bfbf->leave($__internal_b9e2d63aed6424096a57ab9a2b012df8361a14e7393ec06f59a9a0236dc1bfbf_prof);

        
        $__internal_f3fc219d43fe7bbd36c900a62d80db90db4e91b8dbe8dc14eb6369dfc1297423->leave($__internal_f3fc219d43fe7bbd36c900a62d80db90db4e91b8dbe8dc14eb6369dfc1297423_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d047de0bed0d4c3ea546a0ec80c447259f0e35e2d27cb955716aa2b3c6bd129e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d047de0bed0d4c3ea546a0ec80c447259f0e35e2d27cb955716aa2b3c6bd129e->enter($__internal_d047de0bed0d4c3ea546a0ec80c447259f0e35e2d27cb955716aa2b3c6bd129e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a19f5b179db8a57f6b7a24dcc6f85b848f6ea14d0795886ab5214721f47316f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a19f5b179db8a57f6b7a24dcc6f85b848f6ea14d0795886ab5214721f47316f5->enter($__internal_a19f5b179db8a57f6b7a24dcc6f85b848f6ea14d0795886ab5214721f47316f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a19f5b179db8a57f6b7a24dcc6f85b848f6ea14d0795886ab5214721f47316f5->leave($__internal_a19f5b179db8a57f6b7a24dcc6f85b848f6ea14d0795886ab5214721f47316f5_prof);

        
        $__internal_d047de0bed0d4c3ea546a0ec80c447259f0e35e2d27cb955716aa2b3c6bd129e->leave($__internal_d047de0bed0d4c3ea546a0ec80c447259f0e35e2d27cb955716aa2b3c6bd129e_prof);

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
        return array (  173 => 47,  156 => 43,  139 => 11,  122 => 10,  102 => 48,  100 => 47,  96 => 46,  92 => 44,  90 => 43,  85 => 41,  81 => 40,  49 => 12,  47 => 11,  43 => 10,  39 => 9,  29 => 1,);
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
\t\t<nav class=\"navbar navbar-inverse fixed-top\">
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
\t</nav>
\t<div>
\t\t<img class=\"gauche\" src=\"{{ asset('image/IMAGE_Gauche.png')}}\" alt=\"logo\"/>
\t\t<img class=\"droite\" src=\"{{ asset('image/IMAGE_Droite.png')}}\" alt=\"logo\"/>
\t</div>
        {% block body %}{% endblock %}
\t\t  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t\t  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
\t\t  <script src=\"{{ asset('js/scripts.js')}}\"></script>
        {% block javascripts %}{% endblock %}
    </body>
\t<iframe id=\"Chatbox\"
\t\twidth=\"350\"
\t\theight=\"430\"
\t\tsrc=\"https://console.dialogflow.com/api-client/demo/embedded/0bdde35c-3c7c-4897-9427-e8c990540721\">
\t</iframe>
\t<footer>
\t\t<p>Footer Text</p>
\t</footer>
</html>
", "base.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\app\\Resources\\views\\base.html.twig");
    }
}
