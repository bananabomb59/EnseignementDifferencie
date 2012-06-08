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
       'question' => true,
       'question_show' => true,
       'question_new' => true,
       'question_create' => true,
       'question_edit' => true,
       'question_update' => true,
       'question_delete' => true,
       'reponse' => true,
       'reponse_show' => true,
       'reponse_new' => true,
       'reponse_create' => true,
       'reponse_edit' => true,
       'reponse_update' => true,
       'reponse_delete' => true,
       'questionnaire' => true,
       'questionnaire_show' => true,
       'questionnaire_new' => true,
       'questionnaire_create' => true,
       'questionnaire_edit' => true,
       'questionnaire_update' => true,
       'questionnaire_delete' => true,
       'questionnaireeleve' => true,
       'questionnaireeleve_show' => true,
       'questionnaireeleve_new' => true,
       'questionnaireeleve_create' => true,
       'questionnaireeleve_edit' => true,
       'questionnaireeleve_update' => true,
       'questionnaireeleve_delete' => true,
       'competenceeleveannee' => true,
       'competenceeleveannee_show' => true,
       'competenceeleveannee_new' => true,
       'competenceeleveannee_create' => true,
       'competenceeleveannee_edit' => true,
       'competenceeleveannee_update' => true,
       'competenceeleveannee_delete' => true,
       'competenceclasseannee' => true,
       'competenceclasseannee_show' => true,
       'competenceclasseannee_new' => true,
       'competenceclasseannee_create' => true,
       'competenceclasseannee_edit' => true,
       'competenceclasseannee_update' => true,
       'competenceclasseannee_delete' => true,
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

    private function getquestionRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/question/',  ),));
    }

    private function getquestion_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/question',  ),));
    }

    private function getquestion_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/question/new',  ),));
    }

    private function getquestion_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/question/create',  ),));
    }

    private function getquestion_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/question',  ),));
    }

    private function getquestion_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/question',  ),));
    }

    private function getquestion_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/question',  ),));
    }

    private function getreponseRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ReponseController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/reponse/',  ),));
    }

    private function getreponse_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ReponseController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/reponse',  ),));
    }

    private function getreponse_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ReponseController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/reponse/new',  ),));
    }

    private function getreponse_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ReponseController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/reponse/create',  ),));
    }

    private function getreponse_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ReponseController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/reponse',  ),));
    }

    private function getreponse_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ReponseController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/reponse',  ),));
    }

    private function getreponse_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ReponseController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/reponse',  ),));
    }

    private function getquestionnaireRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/questionnaire/',  ),));
    }

    private function getquestionnaire_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/questionnaire',  ),));
    }

    private function getquestionnaire_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/questionnaire/new',  ),));
    }

    private function getquestionnaire_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/questionnaire/create',  ),));
    }

    private function getquestionnaire_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/questionnaire',  ),));
    }

    private function getquestionnaire_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/questionnaire',  ),));
    }

    private function getquestionnaire_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/questionnaire',  ),));
    }

    private function getquestionnaireeleveRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireEleveController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/questionnaireeleve/',  ),));
    }

    private function getquestionnaireeleve_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireEleveController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/questionnaireeleve',  ),));
    }

    private function getquestionnaireeleve_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireEleveController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/questionnaireeleve/new',  ),));
    }

    private function getquestionnaireeleve_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireEleveController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/questionnaireeleve/create',  ),));
    }

    private function getquestionnaireeleve_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireEleveController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/questionnaireeleve',  ),));
    }

    private function getquestionnaireeleve_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireEleveController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/questionnaireeleve',  ),));
    }

    private function getquestionnaireeleve_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireEleveController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/questionnaireeleve',  ),));
    }

    private function getcompetenceeleveanneeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceEleveAnneeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/competenceeleveannee/',  ),));
    }

    private function getcompetenceeleveannee_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceEleveAnneeController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/competenceeleveannee',  ),));
    }

    private function getcompetenceeleveannee_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceEleveAnneeController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/competenceeleveannee/new',  ),));
    }

    private function getcompetenceeleveannee_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceEleveAnneeController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/competenceeleveannee/create',  ),));
    }

    private function getcompetenceeleveannee_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceEleveAnneeController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/competenceeleveannee',  ),));
    }

    private function getcompetenceeleveannee_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceEleveAnneeController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/competenceeleveannee',  ),));
    }

    private function getcompetenceeleveannee_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceEleveAnneeController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/competenceeleveannee',  ),));
    }

    private function getcompetenceclasseanneeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceClasseAnneeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/competenceclasseannee/',  ),));
    }

    private function getcompetenceclasseannee_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceClasseAnneeController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/competenceclasseannee',  ),));
    }

    private function getcompetenceclasseannee_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceClasseAnneeController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/competenceclasseannee/new',  ),));
    }

    private function getcompetenceclasseannee_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceClasseAnneeController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/competenceclasseannee/create',  ),));
    }

    private function getcompetenceclasseannee_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceClasseAnneeController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/competenceclasseannee',  ),));
    }

    private function getcompetenceclasseannee_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceClasseAnneeController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/competenceclasseannee',  ),));
    }

    private function getcompetenceclasseannee_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceClasseAnneeController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/competenceclasseannee',  ),));
    }
}
