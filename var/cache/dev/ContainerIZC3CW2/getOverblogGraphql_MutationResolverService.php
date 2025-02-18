<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'overblog_graphql.mutation_resolver' shared service.

include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Resolver/FluentResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Resolver/AbstractResolver.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Resolver/AbstractProxyResolver.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Resolver/MutationResolver.php';

return $this->services['overblog_graphql.mutation_resolver'] = new \Overblog\GraphQLBundle\Resolver\MutationResolver();
