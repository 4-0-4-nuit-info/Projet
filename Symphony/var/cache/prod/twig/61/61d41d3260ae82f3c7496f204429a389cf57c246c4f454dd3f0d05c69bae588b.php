<?php

/* default/connexion.html */
class __TwigTemplate_196fda0c8946ffdca9424006cc3f23ac003d248a6d3ea7821544522fb770aae1 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <title>404_name_not_found</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"css/global.css\"/>
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
</head>
<body>

<nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>                        
      </button>
    </div>
    <div><h3>La sécurité routière pour tous</h3></div>
    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
      <ul class=\"nav navbar-nav\">
        <li><a href=\"accueil.html\">Accueil</a></li>
        <li><a href=\"prevenir.html\">Prévenir</a></li>
        <li class=\"active\"><a href=\"#\">Calendrier</a></li>
        <li><a href=\"contact.html\">Contact</a></li>
        <li class=\"btn btn-danger\" style=\"background-color: navy; border:none;\"><a href=\"urgence.html\">Urgence</a></li>
      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"#\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class=\"container-fluid text-center\">    
  <div class=\"row content\"  id=\"page\">
    <div class=\"col-sm-2 sidenav\">
      <div class=\"calendrier\"><a href=\"#\" style=\"color: black\">...</a></div>
    </div>
    <div class=\"col-sm-8 text-left\"> 
    <div class=\"container\">
      <!-- C'est ici que commence la grille contenant le formulaire -->
      <div class=\"row\">
        <div class=\"col-md-8\" style=\"border-right: 1px dotted #C2C2C2; padding-right: 30px;\">
          <!-- Panneaux de navigation -->
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#panneauLogin\" data-toggle=\"tab\">Authentification</a></li>
            <li><a href=\"#panneauEnregistrement\" data-toggle=\"tab\">Enregistrement</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"panneauLogin\">
              <form class=\"form-horizontal\">
                <div class=\"form-group\">
                  <label for=\"email1\" class=\"col-sm-2 control-label\">Email</label>
                  <div class=\"col-sm-10\">
                    <input type=\"email\" class=\"form-control\" id=\"email1\" placeholder=\"Votre adresse email...\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label for=\"mdp1\" class=\"col-sm-2 control-label\">Mot de passe</label>
                  <div class=\"col-sm-10\">
                    <input type=\"email\" class=\"form-control\" id=\"mdp1\" placeholder=\"Votre mot de passe...\" />
                  </div>
                </div>
                <div class=\"row\">
                  <!-- Pour \"décaler\"... -->
                  <div class=\"col-sm-2\"></div>
                  <div class=\"col-sm-10\">
                    <button type=\"submit\" class=\"btn btn-primary btn-sm\">Récupérer</button>
                    <a href=\"javascript:;\">Vous avez oublié votre mot de passe ?</a>
                  </div>
                </div>
              </form>
            </div>
            
            <div class=\"tab-pane\" id=\"panneauEnregistrement\">
              <form class=\"form-horizontal\">
                <div class=\"form-group\">
                  <label for=\"nom\" class=\"col-sm-2 control-label\">Nom</label>
                  <div class=\"col-sm-10\">
                    <div class=\"row\">
                      <div class=\"col-md-3\">
                        <select class=\"form-control\" name=\"genre\">
                          <option>Mr.</option>
                          <option>Mme.</option>
                          <option>Melle.</option>
                        </select>
                      </div>
                      <div class=\"col-md-9\">
                        <input type=\"text\" class=\"form-control\" name=\"nom\" placeholder=\"Votre nom...\" pattern=\"^[A-Z][a-zA-Z0-9\\- ]{0,20}\" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label for=\"email\" class=\"col-sm-2 control-label\">Email</label>
                  <div class=\"col-sm-10\">
                    <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Votre email...\" pattern=\"[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,3}\$\"/>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label for=\"mobile\" class=\"col-sm-2 control-label\">Mobile</label>
                  <div class=\"col-sm-10\">
                    <input type=\"email\" class=\"form-control\" name=\"mobile\" placeholder=\"Votre numéro de mobile...\" pattern=\"^([^A-Za-z]|[0-9]){0,10}\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label for=\"mdp2\" class=\"col-sm-2 control-label\">Mot de passe</label>
                  <div class=\"col-sm-10\">
                    <input type=\"password\" class=\"form-control\" name=\"mdp2\" />
                  </div>
                </div>
                <div class=\"row\">
                  <div class=\"col-sm-2\">
                  </div>
                  <div class=\"col-sm-10\">
                    <button type=\"button\" class=\"btn btn-primary\">Sauvegarder & Continuer</button>
                    <button type=\"button\" class=\"btn btn-danger\">Annuler</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
      <hr>
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

<footer class=\"container-fluid text-center\">
  <p>Footer Text</p>
</footer>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "default/connexion.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/connexion.html", "D:\\UwAmp\\www\\Projet\\Symphony\\app\\Resources\\views\\default\\connexion.html");
    }
}
