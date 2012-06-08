<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // EDiffAdminBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'EDiffAdminBundle_homepage'));
        }

        if (0 === strpos($pathinfo, '/anneescolaire')) {
            // anneescolaire
            if (rtrim($pathinfo, '/') === '/anneescolaire') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'anneescolaire');
                }
                return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\AnneeScolaireController::indexAction',  '_route' => 'anneescolaire',);
            }

            // anneescolaire_show
            if (preg_match('#^/anneescolaire/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\AnneeScolaireController::showAction',)), array('_route' => 'anneescolaire_show'));
            }

            // anneescolaire_new
            if ($pathinfo === '/anneescolaire/new') {
                return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\AnneeScolaireController::newAction',  '_route' => 'anneescolaire_new',);
            }

            // anneescolaire_create
            if ($pathinfo === '/anneescolaire/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_anneescolaire_create;
                }
                return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\AnneeScolaireController::createAction',  '_route' => 'anneescolaire_create',);
            }
            not_anneescolaire_create:

            // anneescolaire_edit
            if (preg_match('#^/anneescolaire/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\AnneeScolaireController::editAction',)), array('_route' => 'anneescolaire_edit'));
            }

            // anneescolaire_update
            if (preg_match('#^/anneescolaire/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_anneescolaire_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\AnneeScolaireController::updateAction',)), array('_route' => 'anneescolaire_update'));
            }
            not_anneescolaire_update:

            // anneescolaire_delete
            if (preg_match('#^/anneescolaire/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_anneescolaire_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\AnneeScolaireController::deleteAction',)), array('_route' => 'anneescolaire_delete'));
            }
            not_anneescolaire_delete:

        }

        if (0 === strpos($pathinfo, '/matiere')) {
            // matiere
            if (rtrim($pathinfo, '/') === '/matiere') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'matiere');
                }
                return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\MatiereController::indexAction',  '_route' => 'matiere',);
            }

            // matiere_show
            if (preg_match('#^/matiere/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\MatiereController::showAction',)), array('_route' => 'matiere_show'));
            }

            // matiere_new
            if ($pathinfo === '/matiere/new') {
                return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\MatiereController::newAction',  '_route' => 'matiere_new',);
            }

            // matiere_create
            if ($pathinfo === '/matiere/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_matiere_create;
                }
                return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\MatiereController::createAction',  '_route' => 'matiere_create',);
            }
            not_matiere_create:

            // matiere_edit
            if (preg_match('#^/matiere/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\MatiereController::editAction',)), array('_route' => 'matiere_edit'));
            }

            // matiere_update
            if (preg_match('#^/matiere/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_matiere_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\MatiereController::updateAction',)), array('_route' => 'matiere_update'));
            }
            not_matiere_update:

            // matiere_delete
            if (preg_match('#^/matiere/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_matiere_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\MatiereController::deleteAction',)), array('_route' => 'matiere_delete'));
            }
            not_matiere_delete:

        }

        if (0 === strpos($pathinfo, '/classe')) {
            // classe
            if (rtrim($pathinfo, '/') === '/classe') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'classe');
                }
                return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ClasseController::indexAction',  '_route' => 'classe',);
            }

            // classe_show
            if (preg_match('#^/classe/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ClasseController::showAction',)), array('_route' => 'classe_show'));
            }

            // classe_new
            if ($pathinfo === '/classe/new') {
                return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ClasseController::newAction',  '_route' => 'classe_new',);
            }

            // classe_create
            if ($pathinfo === '/classe/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_classe_create;
                }
                return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ClasseController::createAction',  '_route' => 'classe_create',);
            }
            not_classe_create:

            // classe_edit
            if (preg_match('#^/classe/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ClasseController::editAction',)), array('_route' => 'classe_edit'));
            }

            // classe_update
            if (preg_match('#^/classe/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_classe_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ClasseController::updateAction',)), array('_route' => 'classe_update'));
            }
            not_classe_update:

            // classe_delete
            if (preg_match('#^/classe/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_classe_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ClasseController::deleteAction',)), array('_route' => 'classe_delete'));
            }
            not_classe_delete:

        }

        if (0 === strpos($pathinfo, '/competence')) {
            // competence
            if (rtrim($pathinfo, '/') === '/competence') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'competence');
                }
                return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceController::indexAction',  '_route' => 'competence',);
            }

            // competence_show
            if (preg_match('#^/competence/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceController::showAction',)), array('_route' => 'competence_show'));
            }

            // competence_new
            if ($pathinfo === '/competence/new') {
                return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceController::newAction',  '_route' => 'competence_new',);
            }

            // competence_create
            if ($pathinfo === '/competence/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_competence_create;
                }
                return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceController::createAction',  '_route' => 'competence_create',);
            }
            not_competence_create:

            // competence_edit
            if (preg_match('#^/competence/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceController::editAction',)), array('_route' => 'competence_edit'));
            }

            // competence_update
            if (preg_match('#^/competence/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_competence_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceController::updateAction',)), array('_route' => 'competence_update'));
            }
            not_competence_update:

            // competence_delete
            if (preg_match('#^/competence/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_competence_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceController::deleteAction',)), array('_route' => 'competence_delete'));
            }
            not_competence_delete:

            if (0 === strpos($pathinfo, '/competenceeleveannee')) {
                // competenceeleveannee
                if (rtrim($pathinfo, '/') === '/competenceeleveannee') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'competenceeleveannee');
                    }
                    return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceEleveAnneeController::indexAction',  '_route' => 'competenceeleveannee',);
                }

                // competenceeleveannee_show
                if (preg_match('#^/competenceeleveannee/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceEleveAnneeController::showAction',)), array('_route' => 'competenceeleveannee_show'));
                }

                // competenceeleveannee_new
                if ($pathinfo === '/competenceeleveannee/new') {
                    return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceEleveAnneeController::newAction',  '_route' => 'competenceeleveannee_new',);
                }

                // competenceeleveannee_create
                if ($pathinfo === '/competenceeleveannee/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_competenceeleveannee_create;
                    }
                    return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceEleveAnneeController::createAction',  '_route' => 'competenceeleveannee_create',);
                }
                not_competenceeleveannee_create:

                // competenceeleveannee_edit
                if (preg_match('#^/competenceeleveannee/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceEleveAnneeController::editAction',)), array('_route' => 'competenceeleveannee_edit'));
                }

                // competenceeleveannee_update
                if (preg_match('#^/competenceeleveannee/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_competenceeleveannee_update;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceEleveAnneeController::updateAction',)), array('_route' => 'competenceeleveannee_update'));
                }
                not_competenceeleveannee_update:

                // competenceeleveannee_delete
                if (preg_match('#^/competenceeleveannee/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_competenceeleveannee_delete;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceEleveAnneeController::deleteAction',)), array('_route' => 'competenceeleveannee_delete'));
                }
                not_competenceeleveannee_delete:

            }

            if (0 === strpos($pathinfo, '/competenceclasseannee')) {
                // competenceclasseannee
                if (rtrim($pathinfo, '/') === '/competenceclasseannee') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'competenceclasseannee');
                    }
                    return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceClasseAnneeController::indexAction',  '_route' => 'competenceclasseannee',);
                }

                // competenceclasseannee_show
                if (preg_match('#^/competenceclasseannee/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceClasseAnneeController::showAction',)), array('_route' => 'competenceclasseannee_show'));
                }

                // competenceclasseannee_new
                if ($pathinfo === '/competenceclasseannee/new') {
                    return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceClasseAnneeController::newAction',  '_route' => 'competenceclasseannee_new',);
                }

                // competenceclasseannee_create
                if ($pathinfo === '/competenceclasseannee/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_competenceclasseannee_create;
                    }
                    return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceClasseAnneeController::createAction',  '_route' => 'competenceclasseannee_create',);
                }
                not_competenceclasseannee_create:

                // competenceclasseannee_edit
                if (preg_match('#^/competenceclasseannee/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceClasseAnneeController::editAction',)), array('_route' => 'competenceclasseannee_edit'));
                }

                // competenceclasseannee_update
                if (preg_match('#^/competenceclasseannee/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_competenceclasseannee_update;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceClasseAnneeController::updateAction',)), array('_route' => 'competenceclasseannee_update'));
                }
                not_competenceclasseannee_update:

                // competenceclasseannee_delete
                if (preg_match('#^/competenceclasseannee/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_competenceclasseannee_delete;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\CompetenceClasseAnneeController::deleteAction',)), array('_route' => 'competenceclasseannee_delete'));
                }
                not_competenceclasseannee_delete:

            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user
            if (rtrim($pathinfo, '/') === '/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user');
                }
                return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
            }

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\UserController::showAction',)), array('_route' => 'user_show'));
            }

            // user_new
            if ($pathinfo === '/user/new') {
                return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }

            // user_create
            if ($pathinfo === '/user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_create;
                }
                return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
            }
            not_user_create:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\UserController::editAction',)), array('_route' => 'user_edit'));
            }

            // user_update
            if (preg_match('#^/user/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\UserController::updateAction',)), array('_route' => 'user_update'));
            }
            not_user_update:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\UserController::deleteAction',)), array('_route' => 'user_delete'));
            }
            not_user_delete:

        }

        if (0 === strpos($pathinfo, '/question')) {
            // question
            if (rtrim($pathinfo, '/') === '/question') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'question');
                }
                return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionController::indexAction',  '_route' => 'question',);
            }

            // question_show
            if (preg_match('#^/question/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionController::showAction',)), array('_route' => 'question_show'));
            }

            // question_new
            if ($pathinfo === '/question/new') {
                return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionController::newAction',  '_route' => 'question_new',);
            }

            // question_create
            if ($pathinfo === '/question/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_question_create;
                }
                return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionController::createAction',  '_route' => 'question_create',);
            }
            not_question_create:

            // question_edit
            if (preg_match('#^/question/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionController::editAction',)), array('_route' => 'question_edit'));
            }

            // question_update
            if (preg_match('#^/question/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_question_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionController::updateAction',)), array('_route' => 'question_update'));
            }
            not_question_update:

            // question_delete
            if (preg_match('#^/question/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_question_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionController::deleteAction',)), array('_route' => 'question_delete'));
            }
            not_question_delete:

            if (0 === strpos($pathinfo, '/questionnaireeleve')) {
                // questionnaireeleve
                if (rtrim($pathinfo, '/') === '/questionnaireeleve') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'questionnaireeleve');
                    }
                    return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireEleveController::indexAction',  '_route' => 'questionnaireeleve',);
                }

                // questionnaireeleve_show
                if (preg_match('#^/questionnaireeleve/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireEleveController::showAction',)), array('_route' => 'questionnaireeleve_show'));
                }

                // questionnaireeleve_new
                if ($pathinfo === '/questionnaireeleve/new') {
                    return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireEleveController::newAction',  '_route' => 'questionnaireeleve_new',);
                }

                // questionnaireeleve_create
                if ($pathinfo === '/questionnaireeleve/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_questionnaireeleve_create;
                    }
                    return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireEleveController::createAction',  '_route' => 'questionnaireeleve_create',);
                }
                not_questionnaireeleve_create:

                // questionnaireeleve_edit
                if (preg_match('#^/questionnaireeleve/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireEleveController::editAction',)), array('_route' => 'questionnaireeleve_edit'));
                }

                // questionnaireeleve_update
                if (preg_match('#^/questionnaireeleve/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_questionnaireeleve_update;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireEleveController::updateAction',)), array('_route' => 'questionnaireeleve_update'));
                }
                not_questionnaireeleve_update:

                // questionnaireeleve_delete
                if (preg_match('#^/questionnaireeleve/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_questionnaireeleve_delete;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireEleveController::deleteAction',)), array('_route' => 'questionnaireeleve_delete'));
                }
                not_questionnaireeleve_delete:

            }

        }

        if (0 === strpos($pathinfo, '/reponse')) {
            // reponse
            if (rtrim($pathinfo, '/') === '/reponse') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reponse');
                }
                return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ReponseController::indexAction',  '_route' => 'reponse',);
            }

            // reponse_show
            if (preg_match('#^/reponse/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ReponseController::showAction',)), array('_route' => 'reponse_show'));
            }

            // reponse_new
            if ($pathinfo === '/reponse/new') {
                return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ReponseController::newAction',  '_route' => 'reponse_new',);
            }

            // reponse_create
            if ($pathinfo === '/reponse/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_reponse_create;
                }
                return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ReponseController::createAction',  '_route' => 'reponse_create',);
            }
            not_reponse_create:

            // reponse_edit
            if (preg_match('#^/reponse/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ReponseController::editAction',)), array('_route' => 'reponse_edit'));
            }

            // reponse_update
            if (preg_match('#^/reponse/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_reponse_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ReponseController::updateAction',)), array('_route' => 'reponse_update'));
            }
            not_reponse_update:

            // reponse_delete
            if (preg_match('#^/reponse/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_reponse_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\ReponseController::deleteAction',)), array('_route' => 'reponse_delete'));
            }
            not_reponse_delete:

        }

        if (0 === strpos($pathinfo, '/questionnaire')) {
            // questionnaire
            if (rtrim($pathinfo, '/') === '/questionnaire') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'questionnaire');
                }
                return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireController::indexAction',  '_route' => 'questionnaire',);
            }

            // questionnaire_show
            if (preg_match('#^/questionnaire/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireController::showAction',)), array('_route' => 'questionnaire_show'));
            }

            // questionnaire_new
            if ($pathinfo === '/questionnaire/new') {
                return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireController::newAction',  '_route' => 'questionnaire_new',);
            }

            // questionnaire_create
            if ($pathinfo === '/questionnaire/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_questionnaire_create;
                }
                return array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireController::createAction',  '_route' => 'questionnaire_create',);
            }
            not_questionnaire_create:

            // questionnaire_edit
            if (preg_match('#^/questionnaire/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireController::editAction',)), array('_route' => 'questionnaire_edit'));
            }

            // questionnaire_update
            if (preg_match('#^/questionnaire/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_questionnaire_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireController::updateAction',)), array('_route' => 'questionnaire_update'));
            }
            not_questionnaire_update:

            // questionnaire_delete
            if (preg_match('#^/questionnaire/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_questionnaire_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EDiff\\Bundle\\AdminBundle\\Controller\\QuestionnaireController::deleteAction',)), array('_route' => 'questionnaire_delete'));
            }
            not_questionnaire_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
