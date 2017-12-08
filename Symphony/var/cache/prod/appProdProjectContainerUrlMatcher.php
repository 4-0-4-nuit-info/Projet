<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // accueil
        if ('/accueil' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::accueilAction',  '_route' => 'accueil',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // calendrier
            if ('/calendrier' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::calendrierAction',  '_route' => 'calendrier',);
            }

            // connexion
            if ('/connexion' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::connexionAction',  '_route' => 'connexion',);
            }

            // contact
            if ('/contact' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::contactAction',  '_route' => 'contact',);
            }

        }

        // prevenir
        if ('/prevenir' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::prevenirAction',  '_route' => 'prevenir',);
        }

        // urgences
        if ('/urgences' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::urgencesAction',  '_route' => 'urgences',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
