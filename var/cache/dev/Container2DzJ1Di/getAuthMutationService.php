<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\GraphQL\Mutation\AuthMutation' shared autowired service.

include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Definition/Resolver/MutationInterface.php';
include_once $this->targetDirs[3].'/src/GraphQL/Mutation/AuthMutation.php';

return $this->services['App\GraphQL\Mutation\AuthMutation'] = new \App\GraphQL\Mutation\AuthMutation(($this->privates['Redis'] ?? $this->load('getRedisService.php')), $this, ($this->privates['App\Service\AuthenticatorService'] ?? $this->load('getAuthenticatorServiceService.php')));
