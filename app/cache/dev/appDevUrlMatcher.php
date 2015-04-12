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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // app_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_default_index')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/shop_')) {
            if (0 === strpos($pathinfo, '/shop_action')) {
                // shop_action
                if (rtrim($pathinfo, '/') === '/shop_action') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shop_action;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'shop_action');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Shop\\ActionController::indexAction',  '_route' => 'shop_action',);
                }
                not_shop_action:

                // shop_action_create
                if ($pathinfo === '/shop_action/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_shop_action_create;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Shop\\ActionController::createAction',  '_route' => 'shop_action_create',);
                }
                not_shop_action_create:

                // shop_action_new
                if ($pathinfo === '/shop_action/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shop_action_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Shop\\ActionController::newAction',  '_route' => 'shop_action_new',);
                }
                not_shop_action_new:

                // shop_action_show
                if (preg_match('#^/shop_action/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shop_action_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_action_show')), array (  '_controller' => 'AppBundle\\Controller\\Shop\\ActionController::showAction',));
                }
                not_shop_action_show:

                // shop_action_edit
                if (preg_match('#^/shop_action/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shop_action_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_action_edit')), array (  '_controller' => 'AppBundle\\Controller\\Shop\\ActionController::editAction',));
                }
                not_shop_action_edit:

                // shop_action_update
                if (preg_match('#^/shop_action/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_shop_action_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_action_update')), array (  '_controller' => 'AppBundle\\Controller\\Shop\\ActionController::updateAction',));
                }
                not_shop_action_update:

                // shop_action_delete
                if (preg_match('#^/shop_action/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_shop_action_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_action_delete')), array (  '_controller' => 'AppBundle\\Controller\\Shop\\ActionController::deleteAction',));
                }
                not_shop_action_delete:

            }

            if (0 === strpos($pathinfo, '/shop_category')) {
                // shop_category
                if (rtrim($pathinfo, '/') === '/shop_category') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shop_category;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'shop_category');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Shop\\CategoryController::indexAction',  '_route' => 'shop_category',);
                }
                not_shop_category:

                // shop_category_create
                if ($pathinfo === '/shop_category/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_shop_category_create;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Shop\\CategoryController::createAction',  '_route' => 'shop_category_create',);
                }
                not_shop_category_create:

                // shop_category_new
                if ($pathinfo === '/shop_category/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shop_category_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Shop\\CategoryController::newAction',  '_route' => 'shop_category_new',);
                }
                not_shop_category_new:

                // shop_category_show
                if (preg_match('#^/shop_category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shop_category_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_category_show')), array (  '_controller' => 'AppBundle\\Controller\\Shop\\CategoryController::showAction',));
                }
                not_shop_category_show:

                // shop_category_edit
                if (preg_match('#^/shop_category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shop_category_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_category_edit')), array (  '_controller' => 'AppBundle\\Controller\\Shop\\CategoryController::editAction',));
                }
                not_shop_category_edit:

                // shop_category_update
                if (preg_match('#^/shop_category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_shop_category_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_category_update')), array (  '_controller' => 'AppBundle\\Controller\\Shop\\CategoryController::updateAction',));
                }
                not_shop_category_update:

                // shop_category_delete
                if (preg_match('#^/shop_category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_shop_category_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_category_delete')), array (  '_controller' => 'AppBundle\\Controller\\Shop\\CategoryController::deleteAction',));
                }
                not_shop_category_delete:

            }

            if (0 === strpos($pathinfo, '/shop_organization')) {
                // shop_organization
                if (rtrim($pathinfo, '/') === '/shop_organization') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shop_organization;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'shop_organization');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Shop\\OrganizationController::indexAction',  '_route' => 'shop_organization',);
                }
                not_shop_organization:

                // shop_organization_create
                if ($pathinfo === '/shop_organization/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_shop_organization_create;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Shop\\OrganizationController::createAction',  '_route' => 'shop_organization_create',);
                }
                not_shop_organization_create:

                // shop_organization_new
                if ($pathinfo === '/shop_organization/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shop_organization_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Shop\\OrganizationController::newAction',  '_route' => 'shop_organization_new',);
                }
                not_shop_organization_new:

                // shop_organization_show
                if (preg_match('#^/shop_organization/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shop_organization_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_organization_show')), array (  '_controller' => 'AppBundle\\Controller\\Shop\\OrganizationController::showAction',));
                }
                not_shop_organization_show:

                // shop_organization_edit
                if (preg_match('#^/shop_organization/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shop_organization_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_organization_edit')), array (  '_controller' => 'AppBundle\\Controller\\Shop\\OrganizationController::editAction',));
                }
                not_shop_organization_edit:

                // shop_organization_update
                if (preg_match('#^/shop_organization/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_shop_organization_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_organization_update')), array (  '_controller' => 'AppBundle\\Controller\\Shop\\OrganizationController::updateAction',));
                }
                not_shop_organization_update:

                // shop_organization_delete
                if (preg_match('#^/shop_organization/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_shop_organization_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_organization_delete')), array (  '_controller' => 'AppBundle\\Controller\\Shop\\OrganizationController::deleteAction',));
                }
                not_shop_organization_delete:

            }

            if (0 === strpos($pathinfo, '/shop_pr')) {
                if (0 === strpos($pathinfo, '/shop_pricelist')) {
                    // shop_pricelist
                    if (rtrim($pathinfo, '/') === '/shop_pricelist') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_shop_pricelist;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'shop_pricelist');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\Shop\\PriceListController::indexAction',  '_route' => 'shop_pricelist',);
                    }
                    not_shop_pricelist:

                    // shop_pricelist_create
                    if ($pathinfo === '/shop_pricelist/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_shop_pricelist_create;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\Shop\\PriceListController::createAction',  '_route' => 'shop_pricelist_create',);
                    }
                    not_shop_pricelist_create:

                    // shop_pricelist_new
                    if ($pathinfo === '/shop_pricelist/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_shop_pricelist_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\Shop\\PriceListController::newAction',  '_route' => 'shop_pricelist_new',);
                    }
                    not_shop_pricelist_new:

                    // shop_pricelist_show
                    if (preg_match('#^/shop_pricelist/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_shop_pricelist_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_pricelist_show')), array (  '_controller' => 'AppBundle\\Controller\\Shop\\PriceListController::showAction',));
                    }
                    not_shop_pricelist_show:

                    // shop_pricelist_edit
                    if (preg_match('#^/shop_pricelist/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_shop_pricelist_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_pricelist_edit')), array (  '_controller' => 'AppBundle\\Controller\\Shop\\PriceListController::editAction',));
                    }
                    not_shop_pricelist_edit:

                    // shop_pricelist_update
                    if (preg_match('#^/shop_pricelist/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_shop_pricelist_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_pricelist_update')), array (  '_controller' => 'AppBundle\\Controller\\Shop\\PriceListController::updateAction',));
                    }
                    not_shop_pricelist_update:

                    // shop_pricelist_delete
                    if (preg_match('#^/shop_pricelist/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_shop_pricelist_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_pricelist_delete')), array (  '_controller' => 'AppBundle\\Controller\\Shop\\PriceListController::deleteAction',));
                    }
                    not_shop_pricelist_delete:

                }

                if (0 === strpos($pathinfo, '/shop_product')) {
                    // shop_product
                    if (rtrim($pathinfo, '/') === '/shop_product') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_shop_product;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'shop_product');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\Shop\\ProductController::indexAction',  '_route' => 'shop_product',);
                    }
                    not_shop_product:

                    // shop_product_create
                    if ($pathinfo === '/shop_product/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_shop_product_create;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\Shop\\ProductController::createAction',  '_route' => 'shop_product_create',);
                    }
                    not_shop_product_create:

                    // shop_product_new
                    if ($pathinfo === '/shop_product/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_shop_product_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\Shop\\ProductController::newAction',  '_route' => 'shop_product_new',);
                    }
                    not_shop_product_new:

                    // shop_product_show
                    if (preg_match('#^/shop_product/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_shop_product_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_product_show')), array (  '_controller' => 'AppBundle\\Controller\\Shop\\ProductController::showAction',));
                    }
                    not_shop_product_show:

                    // shop_product_edit
                    if (preg_match('#^/shop_product/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_shop_product_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_product_edit')), array (  '_controller' => 'AppBundle\\Controller\\Shop\\ProductController::editAction',));
                    }
                    not_shop_product_edit:

                    // shop_product_update
                    if (preg_match('#^/shop_product/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_shop_product_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_product_update')), array (  '_controller' => 'AppBundle\\Controller\\Shop\\ProductController::updateAction',));
                    }
                    not_shop_product_update:

                    // shop_product_delete
                    if (preg_match('#^/shop_product/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_shop_product_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_product_delete')), array (  '_controller' => 'AppBundle\\Controller\\Shop\\ProductController::deleteAction',));
                    }
                    not_shop_product_delete:

                }

            }

            if (0 === strpos($pathinfo, '/shop_shop')) {
                // shop_shop
                if (rtrim($pathinfo, '/') === '/shop_shop') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shop_shop;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'shop_shop');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Shop\\ShopController::indexAction',  '_route' => 'shop_shop',);
                }
                not_shop_shop:

                // shop_shop_create
                if ($pathinfo === '/shop_shop/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_shop_shop_create;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Shop\\ShopController::createAction',  '_route' => 'shop_shop_create',);
                }
                not_shop_shop_create:

                // shop_shop_new
                if ($pathinfo === '/shop_shop/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shop_shop_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Shop\\ShopController::newAction',  '_route' => 'shop_shop_new',);
                }
                not_shop_shop_new:

                // shop_shop_show
                if (preg_match('#^/shop_shop/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shop_shop_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_shop_show')), array (  '_controller' => 'AppBundle\\Controller\\Shop\\ShopController::showAction',));
                }
                not_shop_shop_show:

                // shop_shop_edit
                if (preg_match('#^/shop_shop/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shop_shop_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_shop_edit')), array (  '_controller' => 'AppBundle\\Controller\\Shop\\ShopController::editAction',));
                }
                not_shop_shop_edit:

                // shop_shop_update
                if (preg_match('#^/shop_shop/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_shop_shop_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_shop_update')), array (  '_controller' => 'AppBundle\\Controller\\Shop\\ShopController::updateAction',));
                }
                not_shop_shop_update:

                // shop_shop_delete
                if (preg_match('#^/shop_shop/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_shop_shop_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_shop_delete')), array (  '_controller' => 'AppBundle\\Controller\\Shop\\ShopController::deleteAction',));
                }
                not_shop_shop_delete:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
