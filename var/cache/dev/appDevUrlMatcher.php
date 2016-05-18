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

        if (0 === strpos($pathinfo, '/fonts/roboto/Roboto-')) {
            if (0 === strpos($pathinfo, '/fonts/roboto/Roboto-Bold')) {
                // _assetic_roboto_bold_ttf
                if ($pathinfo === '/fonts/roboto/Roboto-Bold.ttf') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_bold_ttf',  'pos' => NULL,  '_format' => 'ttf',  '_route' => '_assetic_roboto_bold_ttf',);
                }

                // _assetic_roboto_bold_ttf_0
                if ($pathinfo === '/fonts/roboto/Roboto-Bold_Roboto-Bold_1.ttf') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_bold_ttf',  'pos' => 0,  '_format' => 'ttf',  '_route' => '_assetic_roboto_bold_ttf_0',);
                }

                // _assetic_roboto_bold_woff
                if ($pathinfo === '/fonts/roboto/Roboto-Bold.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_bold_woff',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_roboto_bold_woff',);
                }

                // _assetic_roboto_bold_woff_0
                if ($pathinfo === '/fonts/roboto/Roboto-Bold_Roboto-Bold_1.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_bold_woff',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_roboto_bold_woff_0',);
                }

                // _assetic_roboto_bold_woff2
                if ($pathinfo === '/fonts/roboto/Roboto-Bold.woff2') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_bold_woff2',  'pos' => NULL,  '_format' => 'woff2',  '_route' => '_assetic_roboto_bold_woff2',);
                }

                // _assetic_roboto_bold_woff2_0
                if ($pathinfo === '/fonts/roboto/Roboto-Bold_Roboto-Bold_1.woff2') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_bold_woff2',  'pos' => 0,  '_format' => 'woff2',  '_route' => '_assetic_roboto_bold_woff2_0',);
                }

            }

            if (0 === strpos($pathinfo, '/fonts/roboto/Roboto-Light')) {
                // _assetic_roboto_light_ttf
                if ($pathinfo === '/fonts/roboto/Roboto-Light.ttf') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_light_ttf',  'pos' => NULL,  '_format' => 'ttf',  '_route' => '_assetic_roboto_light_ttf',);
                }

                // _assetic_roboto_light_ttf_0
                if ($pathinfo === '/fonts/roboto/Roboto-Light_Roboto-Light_1.ttf') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_light_ttf',  'pos' => 0,  '_format' => 'ttf',  '_route' => '_assetic_roboto_light_ttf_0',);
                }

                // _assetic_roboto_light_woff
                if ($pathinfo === '/fonts/roboto/Roboto-Light.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_light_woff',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_roboto_light_woff',);
                }

                // _assetic_roboto_light_woff_0
                if ($pathinfo === '/fonts/roboto/Roboto-Light_Roboto-Light_1.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_light_woff',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_roboto_light_woff_0',);
                }

                // _assetic_roboto_light_woff2
                if ($pathinfo === '/fonts/roboto/Roboto-Light.woff2') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_light_woff2',  'pos' => NULL,  '_format' => 'woff2',  '_route' => '_assetic_roboto_light_woff2',);
                }

                // _assetic_roboto_light_woff2_0
                if ($pathinfo === '/fonts/roboto/Roboto-Light_Roboto-Light_1.woff2') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_light_woff2',  'pos' => 0,  '_format' => 'woff2',  '_route' => '_assetic_roboto_light_woff2_0',);
                }

            }

            if (0 === strpos($pathinfo, '/fonts/roboto/Roboto-Medium')) {
                // _assetic_roboto_medium_ttf
                if ($pathinfo === '/fonts/roboto/Roboto-Medium.ttf') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_medium_ttf',  'pos' => NULL,  '_format' => 'ttf',  '_route' => '_assetic_roboto_medium_ttf',);
                }

                // _assetic_roboto_medium_ttf_0
                if ($pathinfo === '/fonts/roboto/Roboto-Medium_Roboto-Medium_1.ttf') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_medium_ttf',  'pos' => 0,  '_format' => 'ttf',  '_route' => '_assetic_roboto_medium_ttf_0',);
                }

                // _assetic_roboto_medium_woff
                if ($pathinfo === '/fonts/roboto/Roboto-Medium.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_medium_woff',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_roboto_medium_woff',);
                }

                // _assetic_roboto_medium_woff_0
                if ($pathinfo === '/fonts/roboto/Roboto-Medium_Roboto-Medium_1.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_medium_woff',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_roboto_medium_woff_0',);
                }

                // _assetic_roboto_medium_woff2
                if ($pathinfo === '/fonts/roboto/Roboto-Medium.woff2') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_medium_woff2',  'pos' => NULL,  '_format' => 'woff2',  '_route' => '_assetic_roboto_medium_woff2',);
                }

                // _assetic_roboto_medium_woff2_0
                if ($pathinfo === '/fonts/roboto/Roboto-Medium_Roboto-Medium_1.woff2') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_medium_woff2',  'pos' => 0,  '_format' => 'woff2',  '_route' => '_assetic_roboto_medium_woff2_0',);
                }

            }

            if (0 === strpos($pathinfo, '/fonts/roboto/Roboto-Regular')) {
                // _assetic_roboto_regular_ttf
                if ($pathinfo === '/fonts/roboto/Roboto-Regular.ttf') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_regular_ttf',  'pos' => NULL,  '_format' => 'ttf',  '_route' => '_assetic_roboto_regular_ttf',);
                }

                // _assetic_roboto_regular_ttf_0
                if ($pathinfo === '/fonts/roboto/Roboto-Regular_Roboto-Regular_1.ttf') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_regular_ttf',  'pos' => 0,  '_format' => 'ttf',  '_route' => '_assetic_roboto_regular_ttf_0',);
                }

                // _assetic_roboto_regular_woff
                if ($pathinfo === '/fonts/roboto/Roboto-Regular.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_regular_woff',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_roboto_regular_woff',);
                }

                // _assetic_roboto_regular_woff_0
                if ($pathinfo === '/fonts/roboto/Roboto-Regular_Roboto-Regular_1.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_regular_woff',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_roboto_regular_woff_0',);
                }

                // _assetic_roboto_regular_woff2
                if ($pathinfo === '/fonts/roboto/Roboto-Regular.woff2') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_regular_woff2',  'pos' => NULL,  '_format' => 'woff2',  '_route' => '_assetic_roboto_regular_woff2',);
                }

                // _assetic_roboto_regular_woff2_0
                if ($pathinfo === '/fonts/roboto/Roboto-Regular_Roboto-Regular_1.woff2') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_regular_woff2',  'pos' => 0,  '_format' => 'woff2',  '_route' => '_assetic_roboto_regular_woff2_0',);
                }

            }

            if (0 === strpos($pathinfo, '/fonts/roboto/Roboto-Thin')) {
                // _assetic_roboto_thin_ttf
                if ($pathinfo === '/fonts/roboto/Roboto-Thin.ttf') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_thin_ttf',  'pos' => NULL,  '_format' => 'ttf',  '_route' => '_assetic_roboto_thin_ttf',);
                }

                // _assetic_roboto_thin_ttf_0
                if ($pathinfo === '/fonts/roboto/Roboto-Thin_Roboto-Thin_1.ttf') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_thin_ttf',  'pos' => 0,  '_format' => 'ttf',  '_route' => '_assetic_roboto_thin_ttf_0',);
                }

                // _assetic_roboto_thin_woff
                if ($pathinfo === '/fonts/roboto/Roboto-Thin.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_thin_woff',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_roboto_thin_woff',);
                }

                // _assetic_roboto_thin_woff_0
                if ($pathinfo === '/fonts/roboto/Roboto-Thin_Roboto-Thin_1.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_thin_woff',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_roboto_thin_woff_0',);
                }

                // _assetic_roboto_thin_woff2
                if ($pathinfo === '/fonts/roboto/Roboto-Thin.woff2') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_thin_woff2',  'pos' => NULL,  '_format' => 'woff2',  '_route' => '_assetic_roboto_thin_woff2',);
                }

                // _assetic_roboto_thin_woff2_0
                if ($pathinfo === '/fonts/roboto/Roboto-Thin_Roboto-Thin_1.woff2') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_thin_woff2',  'pos' => 0,  '_format' => 'woff2',  '_route' => '_assetic_roboto_thin_woff2_0',);
                }

            }

        }

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

        // default
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'default');
            }

            return array (  '_controller' => 'App\\Controller\\TestController::indexAction',  '_route' => 'default',);
        }

        // app_front_product_post
        if ($pathinfo === '/product/post') {
            return array (  '_controller' => 'App\\Controller\\front\\ProductController::postAction',  '_route' => 'app_front_product_post',);
        }

        // app_front_user_post
        if ($pathinfo === '/user/post') {
            return array (  '_controller' => 'App\\Controller\\front\\UserController::postAction',  '_route' => 'app_front_user_post',);
        }

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/v1')) {
                if (0 === strpos($pathinfo, '/api/v1/product')) {
                    // app_api_product_getproduct
                    if (preg_match('#^/api/v1/product/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_app_api_product_getproduct;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_api_product_getproduct')), array (  '_controller' => 'App\\Controller\\Api\\ProductController::getProductAction',));
                    }
                    not_app_api_product_getproduct:

                    // app_api_product_postproduct
                    if ($pathinfo === '/api/v1/product/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_app_api_product_postproduct;
                        }

                        return array (  '_controller' => 'App\\Controller\\Api\\ProductController::postProductAction',  '_route' => 'app_api_product_postproduct',);
                    }
                    not_app_api_product_postproduct:

                }

                if (0 === strpos($pathinfo, '/api/v1/user')) {
                    // app_api_user_getuser
                    if (preg_match('#^/api/v1/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_app_api_user_getuser;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_api_user_getuser')), array (  '_controller' => 'App\\Controller\\Api\\UserController::getUserAction',));
                    }
                    not_app_api_user_getuser:

                    // app_api_user_postuser
                    if ($pathinfo === '/api/v1/user/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_app_api_user_postuser;
                        }

                        return array (  '_controller' => 'App\\Controller\\Api\\UserController::postUserAction',  '_route' => 'app_api_user_postuser',);
                    }
                    not_app_api_user_postuser:

                    // app_api_user_addproduct
                    if ($pathinfo === '/api/v1/user/addProduct') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_app_api_user_addproduct;
                        }

                        return array (  '_controller' => 'App\\Controller\\Api\\UserController::addProductAction',  '_route' => 'app_api_user_addproduct',);
                    }
                    not_app_api_user_addproduct:

                }

            }

            // nelmio_api_doc_index
            if (0 === strpos($pathinfo, '/api/doc') && preg_match('#^/api/doc(?:/(?P<view>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_nelmio_api_doc_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nelmio_api_doc_index')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'default',));
            }
            not_nelmio_api_doc_index:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
