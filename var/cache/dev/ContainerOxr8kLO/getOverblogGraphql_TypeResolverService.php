<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'overblog_graphql.type_resolver' shared service.

include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Resolver/FluentResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Resolver/AbstractResolver.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Resolver/TypeResolver.php';

$this->services['overblog_graphql.type_resolver'] = $instance = new \Overblog\GraphQLBundle\Resolver\TypeResolver();

$instance->addSolution('overblog_graphql.definition.string_type', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'overblog_graphql.definition.string_type']], [0 => 'String'], ['id' => 'overblog_graphql.definition.string_type', 'aliases' => [0 => 'String'], 'alias' => 'String']);
$instance->addSolution('overblog_graphql.definition.int_type', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'overblog_graphql.definition.int_type']], [0 => 'Int'], ['id' => 'overblog_graphql.definition.int_type', 'aliases' => [0 => 'Int'], 'alias' => 'Int']);
$instance->addSolution('overblog_graphql.definition.float_type', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'overblog_graphql.definition.float_type']], [0 => 'Float'], ['id' => 'overblog_graphql.definition.float_type', 'aliases' => [0 => 'Float'], 'alias' => 'Float']);
$instance->addSolution('overblog_graphql.definition.boolean_type', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'overblog_graphql.definition.boolean_type']], [0 => 'Boolean'], ['id' => 'overblog_graphql.definition.boolean_type', 'aliases' => [0 => 'Boolean'], 'alias' => 'Boolean']);
$instance->addSolution('overblog_graphql.definition.id_type', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'overblog_graphql.definition.id_type']], [0 => 'ID'], ['id' => 'overblog_graphql.definition.id_type', 'aliases' => [0 => 'ID'], 'alias' => 'ID']);
$instance->addSolution('Overblog\\GraphQLBundle\\__DEFINITIONS__\\PageInfoType', [0 => [0 => $this, 1 => 'get'], 1 => [0 => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\PageInfoType']], [0 => 'PageInfo'], ['id' => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\PageInfoType', 'aliases' => [0 => 'PageInfo'], 'alias' => 'PageInfo', 'generated' => true]);

return $instance;