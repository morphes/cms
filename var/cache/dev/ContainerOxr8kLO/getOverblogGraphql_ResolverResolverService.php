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

$instance->addSolution('Overblog\\GraphQLBundle\\GraphQL\\Relay\\Mutation\\MutationFieldResolver', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Mutation\\MutationFieldResolver']], [0 => 'relay_mutation_field'], ['id' => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Mutation\\MutationFieldResolver', 'aliases' => [0 => 'relay_mutation_field'], 'method' => '__invoke']);
$instance->addSolution('Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\NodeFieldResolver', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\NodeFieldResolver']], [0 => 'relay_node_field'], ['id' => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\NodeFieldResolver', 'aliases' => [0 => 'relay_node_field'], 'method' => '__invoke']);
$instance->addSolution('Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\PluralIdentifyingRootFieldResolver', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\PluralIdentifyingRootFieldResolver']], [0 => 'relay_plural_identifying_field'], ['id' => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\PluralIdentifyingRootFieldResolver', 'aliases' => [0 => 'relay_plural_identifying_field'], 'method' => '__invoke']);
$instance->addSolution('Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\GlobalIdFieldResolver', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\GlobalIdFieldResolver']], [0 => 'relay_globalid_field'], ['id' => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\GlobalIdFieldResolver', 'aliases' => [0 => 'relay_globalid_field'], 'method' => '__invoke']);

return $instance;
