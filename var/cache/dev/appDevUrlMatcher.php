<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/directores')) {
            // app_director_getdirectores
            if ($pathinfo === '/directores') {
                return array (  '_controller' => 'AppBundle\\Controller\\DirectorController::getDirectoresAction',  '_route' => 'app_director_getdirectores',);
            }

            // app_director_deletedirector
            if (0 === strpos($pathinfo, '/directores/delete') && preg_match('#^/directores/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_director_deletedirector')), array (  '_controller' => 'AppBundle\\Controller\\DirectorController::deleteDirectorAction',));
            }

            // app_director_createdirector
            if ($pathinfo === '/directores/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\DirectorController::createDirectorAction',  '_route' => 'app_director_createdirector',);
            }

            // app_director_newdirector
            if ($pathinfo === '/directores/new') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_app_director_newdirector;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DirectorController::newDirectorAction',  '_route' => 'app_director_newdirector',);
            }
            not_app_director_newdirector:

            // app_director_geteditdirector
            if (0 === strpos($pathinfo, '/directores/edit') && preg_match('#^/directores/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_director_geteditdirector')), array (  '_controller' => 'AppBundle\\Controller\\DirectorController::getEditDirectorAction',));
            }

            // app_director_editdirector
            if ($pathinfo === '/directores/update') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_app_director_editdirector;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DirectorController::editDirectorAction',  '_route' => 'app_director_editdirector',);
            }
            not_app_director_editdirector:

            // app_director_getdirector
            if (preg_match('#^/directores/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_director_getdirector')), array (  '_controller' => 'AppBundle\\Controller\\DirectorController::getDirectorAction',));
            }

        }

        if (0 === strpos($pathinfo, '/h')) {
            if (0 === strpos($pathinfo, '/helados')) {
                // app_helado_gethelados
                if ($pathinfo === '/helados') {
                    return array (  '_controller' => 'AppBundle\\Controller\\HeladoController::getHeladosAction',  '_route' => 'app_helado_gethelados',);
                }

                // app_helado_deletehelado
                if (0 === strpos($pathinfo, '/helados/delete') && preg_match('#^/helados/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_helado_deletehelado')), array (  '_controller' => 'AppBundle\\Controller\\HeladoController::deleteHeladoAction',));
                }

                // app_helado_createhelado
                if ($pathinfo === '/helados/create') {
                    return array (  '_controller' => 'AppBundle\\Controller\\HeladoController::createHeladoAction',  '_route' => 'app_helado_createhelado',);
                }

                // app_helado_newhelado
                if ($pathinfo === '/helados/new') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_app_helado_newhelado;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\HeladoController::newHeladoAction',  '_route' => 'app_helado_newhelado',);
                }
                not_app_helado_newhelado:

                // app_helado_getedithelado
                if (0 === strpos($pathinfo, '/helados/edit') && preg_match('#^/helados/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_helado_getedithelado')), array (  '_controller' => 'AppBundle\\Controller\\HeladoController::getEditHeladoAction',));
                }

                // app_helado_edithelado
                if ($pathinfo === '/helados/update') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_app_helado_edithelado;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\HeladoController::editHeladoAction',  '_route' => 'app_helado_edithelado',);
                }
                not_app_helado_edithelado:

                // app_helado_getcrearpromocion
                if (preg_match('#^/helados/(?P<id>[^/]++)/promocion/create$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_helado_getcrearpromocion')), array (  '_controller' => 'AppBundle\\Controller\\HeladoController::getCrearPromocionAction',));
                }

                // app_helado_getnewpromocion
                if (preg_match('#^/helados/(?P<id>[^/]++)/promocion/new$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_app_helado_getnewpromocion;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_helado_getnewpromocion')), array (  '_controller' => 'AppBundle\\Controller\\HeladoController::getNewPromocionAction',));
                }
                not_app_helado_getnewpromocion:

                // app_helado_gethelado
                if (preg_match('#^/helados/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_helado_gethelado')), array (  '_controller' => 'AppBundle\\Controller\\HeladoController::getHeladoAction',));
                }

            }

            if (0 === strpos($pathinfo, '/historias')) {
                // app_historia_gethistorias
                if ($pathinfo === '/historias') {
                    return array (  '_controller' => 'AppBundle\\Controller\\HistoriaController::getHistoriasAction',  '_route' => 'app_historia_gethistorias',);
                }

                // app_historia_deletehistoria
                if (0 === strpos($pathinfo, '/historias/delete') && preg_match('#^/historias/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_historia_deletehistoria')), array (  '_controller' => 'AppBundle\\Controller\\HistoriaController::deleteHistoriaAction',));
                }

                // app_historia_createhistoria
                if ($pathinfo === '/historias/create') {
                    return array (  '_controller' => 'AppBundle\\Controller\\HistoriaController::createHistoriaAction',  '_route' => 'app_historia_createhistoria',);
                }

                // app_historia_newhistoria
                if ($pathinfo === '/historias/new') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_app_historia_newhistoria;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\HistoriaController::newHistoriaAction',  '_route' => 'app_historia_newhistoria',);
                }
                not_app_historia_newhistoria:

            }

            // app_historia_getedithistoria
            if (0 === strpos($pathinfo, '/helados/edit') && preg_match('#^/helados/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_historia_getedithistoria')), array (  '_controller' => 'AppBundle\\Controller\\HistoriaController::getEditHistoriaAction',));
            }

            if (0 === strpos($pathinfo, '/historias')) {
                // app_historia_edithistoria
                if ($pathinfo === '/historias/update') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_app_historia_edithistoria;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\HistoriaController::editHistoriaAction',  '_route' => 'app_historia_edithistoria',);
                }
                not_app_historia_edithistoria:

                // app_historia_gethistoria
                if (preg_match('#^/historias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_historia_gethistoria')), array (  '_controller' => 'AppBundle\\Controller\\HistoriaController::getHistoriaAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/sucursales')) {
            // app_sucursal_getsucursales
            if ($pathinfo === '/sucursales') {
                return array (  '_controller' => 'AppBundle\\Controller\\SucursalController::getSucursalesAction',  '_route' => 'app_sucursal_getsucursales',);
            }

            // app_sucursal_createsurcursal
            if ($pathinfo === '/sucursales/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\SucursalController::createSurcursalAction',  '_route' => 'app_sucursal_createsurcursal',);
            }

            // app_sucursal_deletesucursal
            if (0 === strpos($pathinfo, '/sucursales/delete') && preg_match('#^/sucursales/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_sucursal_deletesucursal')), array (  '_controller' => 'AppBundle\\Controller\\SucursalController::deleteSucursalAction',));
            }

            // app_sucursal_newsucursal
            if ($pathinfo === '/sucursales/new') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_app_sucursal_newsucursal;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\SucursalController::newSucursalAction',  '_route' => 'app_sucursal_newsucursal',);
            }
            not_app_sucursal_newsucursal:

            // app_sucursal_editsucursal
            if ($pathinfo === '/sucursales/update') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_app_sucursal_editsucursal;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\SucursalController::editSucursalAction',  '_route' => 'app_sucursal_editsucursal',);
            }
            not_app_sucursal_editsucursal:

            // app_sucursal_getsucursal
            if (preg_match('#^/sucursales/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_sucursal_getsucursal')), array (  '_controller' => 'AppBundle\\Controller\\SucursalController::getSucursalAction',));
            }

            // app_sucursal_geteditsucursal
            if (0 === strpos($pathinfo, '/sucursales/edit') && preg_match('#^/sucursales/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_sucursal_geteditsucursal')), array (  '_controller' => 'AppBundle\\Controller\\SucursalController::getEditSucursalAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
