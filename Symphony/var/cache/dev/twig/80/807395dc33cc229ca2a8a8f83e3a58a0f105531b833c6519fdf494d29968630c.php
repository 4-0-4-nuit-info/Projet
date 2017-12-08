<?php

/* default/connexion.html.twig */
class __TwigTemplate_1299c9f5ff5fb560a994084b43283e73ef5482fdb59144b47d39f253ab5aa068 extends Twig_Template
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
        $__internal_69832640aa65973e3d019034ad6f164193ee8543db6fa123afedd32e4bc4bd0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69832640aa65973e3d019034ad6f164193ee8543db6fa123afedd32e4bc4bd0f->enter($__internal_69832640aa65973e3d019034ad6f164193ee8543db6fa123afedd32e4bc4bd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/connexion.html.twig"));

        $__internal_7aa66adf86eab317f4c56e935bc9e329ffa72d4fe69e358238b9d4b6f082fb40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa66adf86eab317f4c56e935bc9e329ffa72d4fe69e358238b9d4b6f082fb40->enter($__internal_7aa66adf86eab317f4c56e935bc9e329ffa72d4fe69e358238b9d4b6f082fb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69832640aa65973e3d019034ad6f164193ee8543db6fa123afedd32e4bc4bd0f->leave($__internal_69832640aa65973e3d019034ad6f164193ee8543db6fa123afedd32e4bc4bd0f_prof);

        
        $__internal_7aa66adf86eab317f4c56e935bc9e329ffa72d4fe69e358238b9d4b6f082fb40->leave($__internal_7aa66adf86eab317f4c56e935bc9e329ffa72d4fe69e358238b9d4b6f082fb40_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b2330708aa21ae39d408291af446b3800bbc07dc186ae39116774ccc7716c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b2330708aa21ae39d408291af446b3800bbc07dc186ae39116774ccc7716c38->enter($__internal_4b2330708aa21ae39d408291af446b3800bbc07dc186ae39116774ccc7716c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6ff534895743ee869efa50304d3e5071d70d1899ebb20c0d7df2eda79505a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ff534895743ee869efa50304d3e5071d70d1899ebb20c0d7df2eda79505a3a->enter($__internal_f6ff534895743ee869efa50304d3e5071d70d1899ebb20c0d7df2eda79505a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container-fluid text-center\">    
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
";
        
        $__internal_f6ff534895743ee869efa50304d3e5071d70d1899ebb20c0d7df2eda79505a3a->leave($__internal_f6ff534895743ee869efa50304d3e5071d70d1899ebb20c0d7df2eda79505a3a_prof);

        
        $__internal_4b2330708aa21ae39d408291af446b3800bbc07dc186ae39116774ccc7716c38->leave($__internal_4b2330708aa21ae39d408291af446b3800bbc07dc186ae39116774ccc7716c38_prof);

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
{% endblock %}
", "default/connexion.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\app\\Resources\\views\\default\\connexion.html.twig");
    }
}
