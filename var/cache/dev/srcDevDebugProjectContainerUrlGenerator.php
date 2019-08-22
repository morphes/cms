<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'root' => [[], ['_controller' => 'App\\Controller\\RootController::index'], [], [['text', '/root']], [], []],
        'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
        'overblog_graphql_endpoint' => [[], ['_controller' => 'Overblog\\GraphQLBundle\\Controller\\GraphController::endpointAction', '_format' => 'json'], [], [['text', '/api/graphql/']], [], []],
        'overblog_graphql_batch_endpoint' => [[], ['_controller' => 'Overblog\\GraphQLBundle\\Controller\\GraphController::batchEndpointAction', '_format' => 'json'], [], [['text', '/api/graphql/batch']], [], []],
        'overblog_graphql_multiple_endpoint' => [['schemaName'], ['_controller' => 'Overblog\\GraphQLBundle\\Controller\\GraphController::endpointAction', '_format' => 'json'], ['schemaName' => '[^/]+'], [['variable', '/', '[^/]+', 'schemaName'], ['text', '/api/graphql/graphql']], [], []],
        'overblog_graphql_batch_multiple_endpoint' => [['schemaName'], ['_controller' => 'Overblog\\GraphQLBundle\\Controller\\GraphController::batchEndpointAction', '_format' => 'json'], ['schemaName' => '[^/]+'], [['text', '/batch'], ['variable', '/', '[^/]+', 'schemaName'], ['text', '/api/graphql/graphql']], [], []],
        'overblog_graphiql_endpoint' => [[], ['_controller' => 'Overblog\\GraphiQLBundle\\Controller\\GraphiQLController::indexAction'], [], [['text', '/graphiql']], [], []],
        'overblog_graphiql_endpoint_multiple' => [['schemaName'], ['_controller' => 'Overblog\\GraphiQLBundle\\Controller\\GraphiQLController::indexAction'], [], [['variable', '/', '[^/]++', 'schemaName'], ['text', '/graphiql']], [], []],
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        'app_logout' => [[], [], [], [['text', '/logout']], [], []],
        'index' => [[], ['_controller' => 'App\\Lp\\CmsBundle\\Controller\\CmsController::match'], [], [['text', '/']], [], []],
        'basket' => [[], ['_controller' => 'App\\Lp\\BasketBundle\\Controller\\BasketController::index'], [], [['text', '/basket']], [], []],
        'basket_add' => [[], ['_controller' => 'App\\Lp\\BasketBundle\\Controller\\BasketController::add'], [], [['text', '/basket/add']], [], []],
        'profile' => [[], ['_controller' => 'App\\Lp\\ProfileBundle\\Controller\\ProfileController::index'], [], [['text', '/profile']], [], []],
        'easyadmin' => [[], ['_controller' => 'App\\Controller\\AdminController::indexAction'], [], [['text', '/admin/']], [], []],
        'admin' => [[], ['_controller' => 'App\\Controller\\AdminController::indexAction'], [], [['text', '/admin/']], [], []],
        'products_json' => [[], ['_controller' => 'App\\Lp\\CatalogBundle\\Controller\\ProductController::jsonFormat'], [], [['text', '/products/jsonFormat']], [], []],
        'urls' => [['slug'], ['_controller' => 'App\\Lp\\UrlsBundle\\Controller\\UrlController::match'], ['slug' => '.*'], [['variable', '/', '.*', 'slug']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name && null !== $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
