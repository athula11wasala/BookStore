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


        // home_route
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\CartController::indexAction',  '_route' => 'home_route',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($pathinfo.'/', 'home_route'));
            }

            return $ret;
        }

        if (0 === strpos($pathinfo, '/cart')) {
            // cart_add_route
            if ('/cart/add' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CartController::cartAddAction',  '_route' => 'cart_add_route',);
            }

            // cart_ajax_invoice_route
            if ('/cart/ajax-invoice' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CartController::ajaxwCartAction',  '_route' => 'cart_ajax_invoice_route',);
            }

            // cart_remove_route
            if ('/cart/remove' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CartController::cartRemoveAction',  '_route' => 'cart_remove_route',);
            }

            // cart_invoice_route
            if ('/cart/invoice' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CartController::viewCartAction',  '_route' => 'cart_invoice_route',);
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($pathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
