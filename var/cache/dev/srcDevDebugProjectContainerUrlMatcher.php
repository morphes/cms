<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = [];
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), ['HEAD', 'GET'], true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $trimmedPathinfo = rtrim($pathinfo, '/') ?: '/') {
            $pathinfo = $trimmedPathinfo === $pathinfo ? $pathinfo.'/' : $trimmedPathinfo;
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $pathinfo, array &$allow = [], array &$allowSchemes = []): array
    {
        $allow = $allowSchemes = [];
        $pathinfo = rawurldecode($pathinfo) ?: '/';
        $trimmedPathinfo = rtrim($pathinfo, '/') ?: '/';
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($trimmedPathinfo) {
            case '/admin':
                // easyadmin
                if ('/' !== $pathinfo && $trimmedPathinfo === $pathinfo) {
                    if ('GET' === $canonicalMethod) {
                        return $allow = $allowSchemes = [];
                    }
                    goto not_easyadmin;
                }

                return ['_route' => 'easyadmin', '_controller' => 'App\\Controller\\AdminController::indexAction'];
                not_easyadmin:
                // admin
                if ('/' !== $pathinfo && $trimmedPathinfo === $pathinfo) {
                    if ('GET' === $canonicalMethod) {
                        return $allow = $allowSchemes = [];
                    }
                    goto not_admin;
                }

                return ['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::indexAction'];
                not_admin:
                break;
            default:
                $routes = [
                    '/root' => [['_route' => 'root', '_controller' => 'App\\Controller\\RootController::index'], null, null, null, false],
                    '/login' => [['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false],
                    '/api/graphql' => [['_route' => 'overblog_graphql_endpoint', '_controller' => 'Overblog\\GraphQLBundle\\Controller\\GraphController::endpointAction', '_format' => 'json'], null, null, null, true],
                    '/api/graphql/batch' => [['_route' => 'overblog_graphql_batch_endpoint', '_controller' => 'Overblog\\GraphQLBundle\\Controller\\GraphController::batchEndpointAction', '_format' => 'json'], null, null, null, false],
                    '/graphiql' => [['_route' => 'overblog_graphiql_endpoint', '_controller' => 'Overblog\\GraphiQLBundle\\Controller\\GraphiQLController::indexAction'], null, null, null, false],
                    '/_profiler' => [['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true],
                    '/_profiler/search' => [['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false],
                    '/_profiler/search_bar' => [['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false],
                    '/_profiler/phpinfo' => [['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false],
                    '/_profiler/open' => [['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false],
                    '/logout' => [['_route' => 'app_logout'], null, null, null, false],
                    '/' => [['_route' => 'index', '_controller' => 'App\\Lp\\CmsBundle\\Controller\\CmsController::match'], null, null, null, false],
                    '/basket' => [['_route' => 'basket', '_controller' => 'App\\Lp\\BasketBundle\\Controller\\BasketController::index'], null, null, null, false],
                    '/basket/add' => [['_route' => 'basket_add', '_controller' => 'App\\Lp\\BasketBundle\\Controller\\BasketController::add'], null, null, null, false],
                    '/profile' => [['_route' => 'profile', '_controller' => 'App\\Lp\\ProfileBundle\\Controller\\ProfileController::index'], null, null, null, false],
                    '/products/jsonFormat' => [['_route' => 'products_json', '_controller' => 'App\\Lp\\CatalogBundle\\Controller\\ProductController::jsonFormat'], null, null, null, false],
                ];

                if (!isset($routes[$trimmedPathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes, $hasTrailingSlash) = $routes[$trimmedPathinfo];
                if ('/' !== $pathinfo && $hasTrailingSlash === ($trimmedPathinfo === $pathinfo)) {
                    if ('GET' === $canonicalMethod && (!$requiredMethods || isset($requiredMethods['GET']))) {
                        return $allow = $allowSchemes = [];
                    }
                    break;
                }

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = [
            0 => '{^(?'
                    .'|/api/graphql/graphql/(?'
                        .'|([^/]+)(*:38)'
                        .'|([^/]+)/batch(*:58)'
                    .')'
                    .'|/graphiql/([^/]++)(*:84)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:122)'
                        .'|wdt/([^/]++)(*:142)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:188)'
                                .'|router(*:202)'
                                .'|exception(?'
                                    .'|(*:222)'
                                    .'|\\.css(*:235)'
                                .')'
                            .')'
                            .'|(*:245)'
                        .')'
                    .')'
                    .'|/(.*)(*:260)'
                .')/?$}sD',
        ];

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = [
                            38 => [['_route' => 'overblog_graphql_multiple_endpoint', '_controller' => 'Overblog\\GraphQLBundle\\Controller\\GraphController::endpointAction', '_format' => 'json'], ['schemaName'], null, null, false, true],
                            58 => [['_route' => 'overblog_graphql_batch_multiple_endpoint', '_controller' => 'Overblog\\GraphQLBundle\\Controller\\GraphController::batchEndpointAction', '_format' => 'json'], ['schemaName'], null, null, false, false],
                            84 => [['_route' => 'overblog_graphiql_endpoint_multiple', '_controller' => 'Overblog\\GraphiQLBundle\\Controller\\GraphiQLController::indexAction'], ['schemaName'], null, null, false, true],
                            122 => [['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true],
                            142 => [['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true],
                            188 => [['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false],
                            202 => [['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false],
                            222 => [['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false],
                            235 => [['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false],
                            245 => [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true],
                            260 => [['_route' => 'urls', '_controller' => 'App\\Lp\\UrlsBundle\\Controller\\UrlController::match'], ['slug'], null, null, false, true],
                        ];

                        list($ret, $vars, $requiredMethods, $requiredSchemes, $hasTrailingSlash, $hasTrailingVar) = $routes[$m];

                        $hasTrailingVar = $trimmedPathinfo !== $pathinfo && $hasTrailingVar;
                        if ('/' !== $pathinfo && !$hasTrailingVar && $hasTrailingSlash === ($trimmedPathinfo === $pathinfo)) {
                            if ('GET' === $canonicalMethod && (!$requiredMethods || isset($requiredMethods['GET']))) {
                                return $allow = $allowSchemes = [];
                            }
                            break;
                        }
                        if ($hasTrailingSlash && $hasTrailingVar && preg_match($regex, rtrim($matchedPathinfo, '/') ?: '/', $n) && $m === (int) $n['MARK']) {
                            $matches = $n;
                        }

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (260 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return [];
    }
}
