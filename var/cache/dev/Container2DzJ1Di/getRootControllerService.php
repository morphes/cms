<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\RootController' shared autowired service.

include_once $this->targetDirs[3].'/src/Controller/RootController.php';

$this->services['App\Controller\RootController'] = $instance = new \App\Controller\RootController();

$instance->setContainer(($this->privates['.service_locator.ychIlgF'] ?? $this->get_ServiceLocator_YchIlgFService())->withContext('App\\Controller\\RootController', $this));

return $instance;
