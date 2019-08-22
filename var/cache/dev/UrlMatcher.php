<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/root' => [[['_route' => 'root', '_controller' => 'App\\Controller\\RootController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/api/graphql' => [[['_route' => 'overblog_graphql_endpoint', '_controller' => 'Overblog\\GraphQLBundle\\Controller\\GraphController::endpointAction', '_format' => 'json'], null, null, null, true, false, null]],
        '/api/graphql/batch' => [[['_route' => 'overblog_graphql_batch_endpoint', '_controller' => 'Overblog\\GraphQLBundle\\Controller\\GraphController::batchEndpointAction', '_format' => 'json'], null, null, null, false, false, null]],
        '/graphiql' => [[['_route' => 'overblog_graphiql_endpoint', '_controller' => 'Overblog\\GraphiQLBundle\\Controller\\GraphiQLController::indexAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Lp\\CmsBundle\\Controller\\CmsController::match'], null, null, null, false, false, null]],
        '/admin' => [
            [['_route' => 'easyadmin', '_controller' => 'App\\Controller\\AdminController::indexAction'], null, null, null, true, false, null],
            [['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::indexAction'], null, null, null, true, false, null],
        ],
    ],
    [ // $regexpList
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
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'overblog_graphql_multiple_endpoint', '_controller' => 'Overblog\\GraphQLBundle\\Controller\\GraphController::endpointAction', '_format' => 'json'], ['schemaName'], null, null, false, true, null]],
        58 => [[['_route' => 'overblog_graphql_batch_multiple_endpoint', '_controller' => 'Overblog\\GraphQLBundle\\Controller\\GraphController::batchEndpointAction', '_format' => 'json'], ['schemaName'], null, null, false, false, null]],
        84 => [[['_route' => 'overblog_graphiql_endpoint_multiple', '_controller' => 'Overblog\\GraphiQLBundle\\Controller\\GraphiQLController::indexAction'], ['schemaName'], null, null, false, true, null]],
        122 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        142 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        188 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        202 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        222 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        235 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        245 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
