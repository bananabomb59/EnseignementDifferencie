<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_welcome' => true,
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'EDiffAdminBundle_homepage' => true,
       'anneescolaire' => true,
       'anneescolaire_show' => true,
       'anneescolaire_new' => true,
       'anneescolaire_create' => true,
       'anneescolaire_edit' => true,
       'anneescolaire_update' => true,
       'anneescolaire_delete' => true,
       'matiere' => true,
       'matiere_show' => true,
       'matiere_new' => true,
       'matiere_create' => true,
       'matiere_edit' => true,
       'matiere_update' => true,
       'matiere_delete' => true,
       'classe' => true,
       'classe_show' => true,
       'classe_new' => true,
       'classe_create' => true,
       'classe_edit' => true,
       'classe_update' => true,
       'classe_delete' => true,
       'competence' => true,
       'competence_show' => true,
       'competence_new' => true,
       'competence_create' => true,
       'competence_edit' => true,
       'competence_update' => true,
       'competence_delete' => true,
       'user' => true,
       'user_show' => true,
       'user_new' => true,
       'user_create' => true,
       'user_edit' => true,
       'user_update' => true,
       'user_delete' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_welcomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login_check',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getEDiffAdminBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getanneescolaireRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\AnneeScolaireController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/anneescolaire/',  ),));
    }

    private function getanneescolaire_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\AnneeScolaireController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/anneescolaire',  ),));
    }

    private function getanneescolaire_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\AnneeScolaireController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/anneescolaire/new',  ),));
    }

    private function getanneescolaire_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\AnneeScolaireController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/anneescolaire/create',  ),));
    }

    private function getanneescolaire_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\AnneeScolaireController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/anneescolaire',  ),));
    }

    private function getanneescolaire_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\AnneeScolaireController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/anneescolaire',  ),));
    }

    private function getanneescolaire_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\AnneeScolaireController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/anneescolaire',  ),));
    }

    private function getmatiereRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\MatiereController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/matiere/',  ),));
    }

    private function getmatiere_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\MatiereController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/matiere',  ),));
    }

    private function getmatiere_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\MatiereController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/matiere/new',  ),));
    }

    private function getmatiere_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\MatiereController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/matiere/create',  ),));
    }

    private function getmatiere_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\MatiereController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/matiere',  ),));
    }

    private function getmatiere_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\MatiereController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/matiere',  ),));
    }

    private function getmatiere_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\MatiereController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/matiere',  ),));
    }

    private function getclasseRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ClasseController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/classe/',  ),));
    }

    private function getclasse_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ClasseController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/classe',  ),));
    }

    private function getclasse_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ClasseController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/classe/new',  ),));
    }

    private function getclasse_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ClasseController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/classe/create',  ),));
    }

    private function getclasse_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ClasseController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/classe',  ),));
    }

    private function getclasse_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ClasseController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/classe',  ),));
    }

    private function getclasse_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ClasseController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/classe',  ),));
    }

    private function getcompetenceRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/competence/',  ),));
    }

    private function getcompetence_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/competence',  ),));
    }

    private function getcompetence_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/competence/new',  ),));
    }

    private function getcompetence_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/competence/create',  ),));
    }

    private function getcompetence_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/competence',  ),));
    }

    private function getcompetence_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/competence',  ),));
    }

    private function getcompetence_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/competence',  ),));
    }

    private function getuserRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\UserController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/user/',  ),));
    }

    private function getuser_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\UserController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/user',  ),));
    }

    private function getuser_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\UserController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/user/new',  ),));
    }

    private function getuser_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\UserController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/user/create',  ),));
    }

    private function getuser_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\UserController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/user',  ),));
    }

    private function getuser_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\UserController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/user',  ),));
    }

    private function getuser_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\UserController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/user',  ),));
    }
}