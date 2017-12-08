<?php

/* default/connexion.html.twig */
class __TwigTemplate_cdf729a3b9d808ba93afa8520a3ff5bac38603618989b533ec36ae55db53aed9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/connexion.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container-fluid text-center\">    
  <div class=\"row content\" id=\"page\">
    <div class=\"col-sm-2 sidenav\" id=\"gauche\">
      <!--<div id=\"calendrier\"><a href=\"#\" style=\"color: black\">...</a></div>-->
      <img src=\"image/IMAGE_Gauche.png\" alt=\"logo\"/>
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
                    <input type=\"tel\" class=\"form-control\" name=\"mobile\" placeholder=\"Votre numéro de mobile...\" pattern=\"^([^A-Za-z]|[0-9]){0,10}\" />
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
        </div>
      </div>
    </div>
    <div class=\"col-sm-2 sidenav\" id=\"logo\">
      <img src=\"image/IMAGE_Droite.png\" alt=\"logo\"/>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "default/connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/connexion.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\app\\Resources\\views\\default\\connexion.html.twig");
    }
}
