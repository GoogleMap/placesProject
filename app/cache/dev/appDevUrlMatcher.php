<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // BundleProjectBundle_preLoad
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'BundleProjectBundle_preLoad');
            }

            return array (  '_controller' => 'Bundle\\ProjectBundle\\Controller\\PageController::preLoadAction',  '_route' => 'BundleProjectBundle_preLoad',);
        }

        // BundleProjectBundle_index
        if ($pathinfo === '/home') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_BundleProjectBundle_index;
            }

            return array (  '_controller' => 'Bundle\\ProjectBundle\\Controller\\PageController::indexAction',  '_route' => 'BundleProjectBundle_index',);
        }
        not_BundleProjectBundle_index:

        // BundleProjectBundle_about
        if ($pathinfo === '/about') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_BundleProjectBundle_about;
            }

            return array (  '_controller' => 'Bundle\\ProjectBundle\\Controller\\PageController::aboutAction',  '_route' => 'BundleProjectBundle_about',);
        }
        not_BundleProjectBundle_about:

        // BundleProjectBundle_credit
        if ($pathinfo === '/credit') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_BundleProjectBundle_credit;
            }

            return array (  '_controller' => 'Bundle\\ProjectBundle\\Controller\\PageController::creditAction',  '_route' => 'BundleProjectBundle_credit',);
        }
        not_BundleProjectBundle_credit:

        if (0 === strpos($pathinfo, '/places')) {
            // BundleProjectBundle_places
            if ($pathinfo === '/places') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_BundleProjectBundle_places;
                }

                return array (  '_controller' => 'Bundle\\ProjectBundle\\Controller\\PlaceController::placesAction',  '_route' => 'BundleProjectBundle_places',);
            }
            not_BundleProjectBundle_places:

            // BundleProjectBundle_places_showPlace
            if (preg_match('#^/places/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_BundleProjectBundle_places_showPlace;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'BundleProjectBundle_places_showPlace')), array (  '_controller' => 'Bundle\\ProjectBundle\\Controller\\PlaceController::showPlaceAction',));
            }
            not_BundleProjectBundle_places_showPlace:

        }

        // BundleProjectBundle_comment_create
        if (0 === strpos($pathinfo, '/comment') && preg_match('#^/comment/(?P<place_id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_BundleProjectBundle_comment_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'BundleProjectBundle_comment_create')), array (  '_controller' => 'Bundle\\ProjectBundle\\Controller\\CommentController::createAction',));
        }
        not_BundleProjectBundle_comment_create:

        // BundleProjectBundle_search
        if ($pathinfo === '/places/search') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_BundleProjectBundle_search;
            }

            return array (  '_controller' => 'Bundle\\ProjectBundle\\Controller\\FormsController::searchAction',  '_route' => 'BundleProjectBundle_search',);
        }
        not_BundleProjectBundle_search:

        // BundleProjectBundle_votee
        if (0 === strpos($pathinfo, '/votee') && preg_match('#^/votee/(?P<vot>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_BundleProjectBundle_votee;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'BundleProjectBundle_votee')), array (  '_controller' => 'Bundle\\ProjectBundle\\Controller\\FormsController::voteeAction',));
        }
        not_BundleProjectBundle_votee:

        // BundleProjectBundle_setVote
        if (0 === strpos($pathinfo, '/setVote') && preg_match('#^/setVote/(?P<vot>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_BundleProjectBundle_setVote;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'BundleProjectBundle_setVote')), array (  '_controller' => 'Bundle\\ProjectBundle\\Controller\\FormsController::setVoteAction',));
        }
        not_BundleProjectBundle_setVote:

        // BundleProjectBundle_moreStoresRequest
        if (0 === strpos($pathinfo, '/moreStoresRequest') && preg_match('#^/moreStoresRequest/(?P<param>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_BundleProjectBundle_moreStoresRequest;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'BundleProjectBundle_moreStoresRequest')), array (  '_controller' => 'Bundle\\ProjectBundle\\Controller\\FormsController::moreStoresRequestAction',));
        }
        not_BundleProjectBundle_moreStoresRequest:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
