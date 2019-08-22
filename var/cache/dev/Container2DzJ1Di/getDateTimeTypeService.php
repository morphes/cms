<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\GraphQL\Type\DateTimeType' shared autowired service.

include_once $this->targetDirs[3].'/vendor/webonyx/graphql-php/src/Type/Definition/Type.php';
include_once $this->targetDirs[3].'/vendor/webonyx/graphql-php/src/Type/Definition/OutputType.php';
include_once $this->targetDirs[3].'/vendor/webonyx/graphql-php/src/Type/Definition/InputType.php';
include_once $this->targetDirs[3].'/vendor/webonyx/graphql-php/src/Type/Definition/LeafType.php';
include_once $this->targetDirs[3].'/vendor/webonyx/graphql-php/src/Type/Definition/NullableType.php';
include_once $this->targetDirs[3].'/vendor/webonyx/graphql-php/src/Type/Definition/NamedType.php';
include_once $this->targetDirs[3].'/vendor/webonyx/graphql-php/src/Type/Definition/ScalarType.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Definition/Resolver/AliasedInterface.php';
include_once $this->targetDirs[3].'/src/GraphQL/Type/DateTimeType.php';

return $this->services['App\GraphQL\Type\DateTimeType'] = new \App\GraphQL\Type\DateTimeType();