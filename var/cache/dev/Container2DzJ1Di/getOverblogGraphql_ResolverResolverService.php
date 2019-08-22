<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'overblog_graphql.resolver_resolver' shared service.

include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Resolver/FluentResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Resolver/AbstractResolver.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Resolver/AbstractProxyResolver.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Resolver/ResolverResolver.php';

$this->services['overblog_graphql.resolver_resolver'] = $instance = new \Overblog\GraphQLBundle\Resolver\ResolverResolver();

$instance->addSolution('App\\GraphQL\\Resolver\\AddressField', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\AddressField']], [], ['id' => 'App\\GraphQL\\Resolver\\AddressField', 'aliases' => [], 'method' => '__invoke']);
$instance->addSolution('App\\GraphQL\\Resolver\\AddressField::data', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\AddressField']], [], ['id' => 'App\\GraphQL\\Resolver\\AddressField', 'aliases' => [], 'method' => 'data']);
$instance->addSolution('App\\GraphQL\\Resolver\\AddressResolver::resolve', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\AddressesResolver']], [0 => 'Address'], ['id' => 'App\\GraphQL\\Resolver\\AddressesResolver', 'aliases' => [0 => 'Address'], 'method' => 'resolve']);
$instance->addSolution('App\\GraphQL\\Resolver\\AuthAlias::getSessionKey', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\AuthAlias']], [], ['id' => 'App\\GraphQL\\Resolver\\AuthAlias', 'aliases' => [], 'method' => 'getSessionKey']);
$instance->addSolution('App\\GraphQL\\Resolver\\AuthAlias::getUser', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\AuthAlias']], [], ['id' => 'App\\GraphQL\\Resolver\\AuthAlias', 'aliases' => [], 'method' => 'getUser']);
$instance->addSolution('App\\GraphQL\\Resolver\\AuthAlias::getAuthKey', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\AuthAlias']], [], ['id' => 'App\\GraphQL\\Resolver\\AuthAlias', 'aliases' => [], 'method' => 'getAuthKey']);
$instance->addSolution('App\\GraphQL\\Resolver\\AuthAlias::resolve', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\AuthAlias']], [0 => 'App\\GraphQL\\Resolver\\AuthAlias'], ['id' => 'App\\GraphQL\\Resolver\\AuthAlias', 'aliases' => [0 => 'App\\GraphQL\\Resolver\\AuthAlias'], 'method' => 'resolve', 'alias' => 'App\\GraphQL\\Resolver\\AuthAlias']);
$instance->addSolution('App\\GraphQL\\Resolver\\BannerResolver::resolve', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\BannerResolver']], [0 => 'Banner'], ['id' => 'App\\GraphQL\\Resolver\\BannerResolver', 'aliases' => [0 => 'Banner'], 'method' => 'resolve']);
$instance->addSolution('App\\GraphQL\\Resolver\\BasketResolver::resolve', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\BasketResolver']], [0 => 'Basket'], ['id' => 'App\\GraphQL\\Resolver\\BasketResolver', 'aliases' => [0 => 'Basket'], 'method' => 'resolve']);
$instance->addSolution('App\\GraphQL\\Resolver\\BasketResolver::getSessionKey', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\BasketResolver']], [], ['id' => 'App\\GraphQL\\Resolver\\BasketResolver', 'aliases' => [], 'method' => 'getSessionKey']);
$instance->addSolution('App\\GraphQL\\Resolver\\BasketResolver::getUser', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\BasketResolver']], [], ['id' => 'App\\GraphQL\\Resolver\\BasketResolver', 'aliases' => [], 'method' => 'getUser']);
$instance->addSolution('App\\GraphQL\\Resolver\\BasketResolver::getAuthKey', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\BasketResolver']], [], ['id' => 'App\\GraphQL\\Resolver\\BasketResolver', 'aliases' => [], 'method' => 'getAuthKey']);
$instance->addSolution('App\\GraphQL\\Resolver\\CatalogsResolver', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\CatalogsResolver']], [], ['id' => 'App\\GraphQL\\Resolver\\CatalogsResolver', 'aliases' => [], 'method' => '__invoke']);
$instance->addSolution('App\\GraphQL\\Resolver\\CatalogResolver::name', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\CatalogsResolver']], [], ['id' => 'App\\GraphQL\\Resolver\\CatalogsResolver', 'aliases' => [], 'method' => 'name']);
$instance->addSolution('App\\GraphQL\\Resolver\\CatalogResolver::id', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\CatalogsResolver']], [], ['id' => 'App\\GraphQL\\Resolver\\CatalogsResolver', 'aliases' => [], 'method' => 'id']);
$instance->addSolution('App\\GraphQL\\Resolver\\CatalogResolver::products', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\CatalogsResolver']], [], ['id' => 'App\\GraphQL\\Resolver\\CatalogsResolver', 'aliases' => [], 'method' => 'products']);
$instance->addSolution('App\\GraphQL\\Resolver\\CatalogResolver::count', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\CatalogsResolver']], [], ['id' => 'App\\GraphQL\\Resolver\\CatalogsResolver', 'aliases' => [], 'method' => 'count']);
$instance->addSolution('App\\GraphQL\\Resolver\\CatalogResolver::resolve', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\CatalogsResolver']], [0 => 'Catalog'], ['id' => 'App\\GraphQL\\Resolver\\CatalogsResolver', 'aliases' => [0 => 'Catalog'], 'method' => 'resolve']);
$instance->addSolution('App\\GraphQL\\Resolver\\CatalogResolver::tags', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\CatalogsResolver']], [], ['id' => 'App\\GraphQL\\Resolver\\CatalogsResolver', 'aliases' => [], 'method' => 'tags']);
$instance->addSolution('App\\GraphQL\\Resolver\\ProductFieldResolver', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\ProductFieldResolver']], [], ['id' => 'App\\GraphQL\\Resolver\\ProductFieldResolver', 'aliases' => [], 'method' => '__invoke']);
$instance->addSolution('App\\GraphQL\\Resolver\\ProductFieldResolver::resolve', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\ProductFieldResolver']], [], ['id' => 'App\\GraphQL\\Resolver\\ProductFieldResolver', 'aliases' => [], 'method' => 'resolve']);
$instance->addSolution('App\\GraphQL\\Resolver\\ProductFieldResolver::name', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\ProductFieldResolver']], [], ['id' => 'App\\GraphQL\\Resolver\\ProductFieldResolver', 'aliases' => [], 'method' => 'name']);
$instance->addSolution('App\\GraphQL\\Resolver\\ProductFieldResolver::url', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\ProductFieldResolver']], [], ['id' => 'App\\GraphQL\\Resolver\\ProductFieldResolver', 'aliases' => [], 'method' => 'url']);
$instance->addSolution('App\\GraphQL\\Resolver\\ProductFieldResolver::id', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\ProductFieldResolver']], [], ['id' => 'App\\GraphQL\\Resolver\\ProductFieldResolver', 'aliases' => [], 'method' => 'id']);
$instance->addSolution('App\\GraphQL\\Resolver\\ProductFieldResolver::tags', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\ProductFieldResolver']], [], ['id' => 'App\\GraphQL\\Resolver\\ProductFieldResolver', 'aliases' => [], 'method' => 'tags']);
$instance->addSolution('App\\GraphQL\\Resolver\\ProductFieldResolver::items', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\ProductFieldResolver']], [], ['id' => 'App\\GraphQL\\Resolver\\ProductFieldResolver', 'aliases' => [], 'method' => 'items']);
$instance->addSolution('App\\GraphQL\\Resolver\\ProductFieldResolver::getAliases', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\ProductFieldResolver']], [], ['id' => 'App\\GraphQL\\Resolver\\ProductFieldResolver', 'aliases' => [], 'method' => 'getAliases']);
$instance->addSolution('App\\GraphQL\\Resolver\\ProductItemResolver::resolve', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\ProductItemResolver']], [0 => 'ProductItem'], ['id' => 'App\\GraphQL\\Resolver\\ProductItemResolver', 'aliases' => [0 => 'ProductItem'], 'method' => 'resolve']);
$instance->addSolution('App\\GraphQL\\Resolver\\ProductResolver::resolve', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\ProductResolver']], [0 => 'Product'], ['id' => 'App\\GraphQL\\Resolver\\ProductResolver', 'aliases' => [0 => 'Product'], 'method' => 'resolve']);
$instance->addSolution('App\\GraphQL\\Resolver\\ProductsFieldsResolver::resolve', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\ProductsFieldsResolver']], [0 => 'Catalog'], ['id' => 'App\\GraphQL\\Resolver\\ProductsFieldsResolver', 'aliases' => [0 => 'Catalog'], 'method' => 'resolve']);
$instance->addSolution('App\\GraphQL\\Resolver\\SalesResolver::resolve', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\SalesResolver']], [0 => 'Sales'], ['id' => 'App\\GraphQL\\Resolver\\SalesResolver', 'aliases' => [0 => 'Sales'], 'method' => 'resolve']);
$instance->addSolution('App\\GraphQL\\Resolver\\UserResolver::resolve', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\UserResolver']], [0 => 'User'], ['id' => 'App\\GraphQL\\Resolver\\UserResolver', 'aliases' => [0 => 'User'], 'method' => 'resolve']);
$instance->addSolution('App\\GraphQL\\Resolver\\UsersOrdersResolver::resolve', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\UsersOrdersResolver']], [0 => 'UsersOrders'], ['id' => 'App\\GraphQL\\Resolver\\UsersOrdersResolver', 'aliases' => [0 => 'UsersOrders'], 'method' => 'resolve']);
$instance->addSolution('App\\GraphQL\\Resolver\\UsersOrdersResolver::getSessionKey', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\UsersOrdersResolver']], [], ['id' => 'App\\GraphQL\\Resolver\\UsersOrdersResolver', 'aliases' => [], 'method' => 'getSessionKey']);
$instance->addSolution('App\\GraphQL\\Resolver\\UsersOrdersResolver::getUser', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\UsersOrdersResolver']], [], ['id' => 'App\\GraphQL\\Resolver\\UsersOrdersResolver', 'aliases' => [], 'method' => 'getUser']);
$instance->addSolution('App\\GraphQL\\Resolver\\UsersOrdersResolver::getAuthKey', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Resolver\\UsersOrdersResolver']], [], ['id' => 'App\\GraphQL\\Resolver\\UsersOrdersResolver', 'aliases' => [], 'method' => 'getAuthKey']);
$instance->addSolution('Overblog\\GraphQLBundle\\GraphQL\\Relay\\Mutation\\MutationFieldResolver', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Mutation\\MutationFieldResolver']], [0 => 'relay_mutation_field'], ['id' => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Mutation\\MutationFieldResolver', 'aliases' => [0 => 'relay_mutation_field'], 'method' => '__invoke']);
$instance->addSolution('Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\NodeFieldResolver', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\NodeFieldResolver']], [0 => 'relay_node_field'], ['id' => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\NodeFieldResolver', 'aliases' => [0 => 'relay_node_field'], 'method' => '__invoke']);
$instance->addSolution('Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\PluralIdentifyingRootFieldResolver', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\PluralIdentifyingRootFieldResolver']], [0 => 'relay_plural_identifying_field'], ['id' => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\PluralIdentifyingRootFieldResolver', 'aliases' => [0 => 'relay_plural_identifying_field'], 'method' => '__invoke']);
$instance->addSolution('Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\GlobalIdFieldResolver', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\GlobalIdFieldResolver']], [0 => 'relay_globalid_field'], ['id' => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\GlobalIdFieldResolver', 'aliases' => [0 => 'relay_globalid_field'], 'method' => '__invoke']);

return $instance;