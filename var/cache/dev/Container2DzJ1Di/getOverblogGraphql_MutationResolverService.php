<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'overblog_graphql.mutation_resolver' shared service.

include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Resolver/FluentResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Resolver/AbstractResolver.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Resolver/AbstractProxyResolver.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Resolver/MutationResolver.php';

$this->services['overblog_graphql.mutation_resolver'] = $instance = new \Overblog\GraphQLBundle\Resolver\MutationResolver();

$instance->addSolution('App\\GraphQL\\Mutation\\AuthMutation::getSessionKey', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Mutation\\AuthMutation']], [], ['id' => 'App\\GraphQL\\Mutation\\AuthMutation', 'aliases' => [], 'method' => 'getSessionKey']);
$instance->addSolution('App\\GraphQL\\Mutation\\AuthMutation::getUser', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Mutation\\AuthMutation']], [], ['id' => 'App\\GraphQL\\Mutation\\AuthMutation', 'aliases' => [], 'method' => 'getUser']);
$instance->addSolution('App\\GraphQL\\Mutation\\AuthMutation::getAuthKey', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Mutation\\AuthMutation']], [], ['id' => 'App\\GraphQL\\Mutation\\AuthMutation', 'aliases' => [], 'method' => 'getAuthKey']);
$instance->addSolution('App\\GraphQL\\Mutation\\BasketMutation::add', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Mutation\\BasketMutation']], [], ['id' => 'App\\GraphQL\\Mutation\\BasketMutation', 'aliases' => [], 'method' => 'add']);
$instance->addSolution('App\\GraphQL\\Mutation\\BasketMutation::remove', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Mutation\\BasketMutation']], [], ['id' => 'App\\GraphQL\\Mutation\\BasketMutation', 'aliases' => [], 'method' => 'remove']);
$instance->addSolution('App\\GraphQL\\Mutation\\BasketMutation::update', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Mutation\\BasketMutation']], [], ['id' => 'App\\GraphQL\\Mutation\\BasketMutation', 'aliases' => [], 'method' => 'update']);
$instance->addSolution('App\\GraphQL\\Mutation\\BasketMutation::getSessionKey', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Mutation\\BasketMutation']], [], ['id' => 'App\\GraphQL\\Mutation\\BasketMutation', 'aliases' => [], 'method' => 'getSessionKey']);
$instance->addSolution('App\\GraphQL\\Mutation\\BasketMutation::getUser', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Mutation\\BasketMutation']], [], ['id' => 'App\\GraphQL\\Mutation\\BasketMutation', 'aliases' => [], 'method' => 'getUser']);
$instance->addSolution('App\\GraphQL\\Mutation\\BasketMutation::getAuthKey', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Mutation\\BasketMutation']], [], ['id' => 'App\\GraphQL\\Mutation\\BasketMutation', 'aliases' => [], 'method' => 'getAuthKey']);
$instance->addSolution('App\\GraphQL\\Mutation\\OrderMutation::create', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Mutation\\OrderMutation']], [], ['id' => 'App\\GraphQL\\Mutation\\OrderMutation', 'aliases' => [], 'method' => 'create']);
$instance->addSolution('App\\GraphQL\\Mutation\\OrderMutation::getSessionKey', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Mutation\\OrderMutation']], [], ['id' => 'App\\GraphQL\\Mutation\\OrderMutation', 'aliases' => [], 'method' => 'getSessionKey']);
$instance->addSolution('App\\GraphQL\\Mutation\\OrderMutation::getUser', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Mutation\\OrderMutation']], [], ['id' => 'App\\GraphQL\\Mutation\\OrderMutation', 'aliases' => [], 'method' => 'getUser']);
$instance->addSolution('App\\GraphQL\\Mutation\\OrderMutation::getAuthKey', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Mutation\\OrderMutation']], [], ['id' => 'App\\GraphQL\\Mutation\\OrderMutation', 'aliases' => [], 'method' => 'getAuthKey']);
$instance->addSolution('App\\GraphQL\\Mutation\\UserMutation::auth', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Mutation\\UserMutation']], [], ['id' => 'App\\GraphQL\\Mutation\\UserMutation', 'aliases' => [], 'method' => 'auth']);
$instance->addSolution('App\\GraphQL\\Mutation\\UserMutation::getSessionKey', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Mutation\\UserMutation']], [], ['id' => 'App\\GraphQL\\Mutation\\UserMutation', 'aliases' => [], 'method' => 'getSessionKey']);
$instance->addSolution('App\\GraphQL\\Mutation\\UserMutation::getUser', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Mutation\\UserMutation']], [], ['id' => 'App\\GraphQL\\Mutation\\UserMutation', 'aliases' => [], 'method' => 'getUser']);
$instance->addSolution('App\\GraphQL\\Mutation\\UserMutation::getAuthKey', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'App\\GraphQL\\Mutation\\UserMutation']], [], ['id' => 'App\\GraphQL\\Mutation\\UserMutation', 'aliases' => [], 'method' => 'getAuthKey']);

return $instance;
