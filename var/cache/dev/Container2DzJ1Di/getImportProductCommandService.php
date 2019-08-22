<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Command\ImportProductCommand' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Command/ContainerAwareCommand.php';
include_once $this->targetDirs[3].'/src/Command/ImportProductCommand.php';

$this->privates['App\Command\ImportProductCommand'] = $instance = new \App\Command\ImportProductCommand(($this->services['App\Service\ConfigService'] ?? $this->load('getConfigServiceService.php')), ($this->services['App\Service\ImportParser'] ?? $this->load('getImportParserService.php')), ($this->services['App\Service\Import\Importer'] ?? $this->load('getImporterService.php')));

$instance->setName('lp:productimport');

return $instance;