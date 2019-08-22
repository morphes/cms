<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Overblog\GraphQLBundle\__DEFINITIONS__\PageInfoType' shared service.

include_once $this->targetDirs[3].'/vendor/webonyx/graphql-php/src/Type/Definition/Type.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Definition/Builder/TypeFactory.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Definition/ConfigProcessor/ConfigProcessorInterface.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Definition/ConfigProcessor.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Definition/ConfigProcessor/PublicFieldsFilterConfigProcessor.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Definition/ConfigProcessor/AclConfigProcessor.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Definition/ConfigProcessor/WrapArgumentConfigProcessor.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Definition/GlobalVariables.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Resolver/FluentResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Resolver/AbstractResolver.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Resolver/AbstractProxyResolver.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Resolver/MutationResolver.php';

$a = new \Overblog\GraphQLBundle\Definition\ConfigProcessor();
$a->addConfigProcessor(new \Overblog\GraphQLBundle\Definition\ConfigProcessor\PublicFieldsFilterConfigProcessor(), 2048);
$a->addConfigProcessor(new \Overblog\GraphQLBundle\Definition\ConfigProcessor\AclConfigProcessor(($this->services['overblog_graphql.access_resolver'] ?? $this->load('getOverblogGraphql_AccessResolverService.php')), $this->parameters['overblog_graphql.default_resolver']), 512);
$a->addConfigProcessor(new \Overblog\GraphQLBundle\Definition\ConfigProcessor\WrapArgumentConfigProcessor(), 0);

return $this->services['Overblog\\GraphQLBundle\\__DEFINITIONS__\\PageInfoType'] = (new \Overblog\GraphQLBundle\Definition\Builder\TypeFactory($a, new \Overblog\GraphQLBundle\Definition\GlobalVariables(['container' => $this, 'typeResolver' => ($this->services['overblog_graphql.type_resolver'] ?? $this->load('getOverblogGraphql_TypeResolverService.php')), 'resolverResolver' => ($this->services['overblog_graphql.resolver_resolver'] ?? $this->load('getOverblogGraphql_ResolverResolverService.php')), 'mutationResolver' => ($this->services['overblog_graphql.mutation_resolver'] ?? ($this->services['overblog_graphql.mutation_resolver'] = new \Overblog\GraphQLBundle\Resolver\MutationResolver()))])))->create('Overblog\\GraphQLBundle\\__DEFINITIONS__\\PageInfoType');