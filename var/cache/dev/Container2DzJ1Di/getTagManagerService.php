<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Service\Manager\TagManager' shared autowired service.

include_once $this->targetDirs[3].'/src/Service/Manager/TagManager.php';

$this->services['App\Service\Manager\TagManager'] = $instance = new \App\Service\Manager\TagManager(($this->privates['Redis'] ?? $this->load('getRedisService.php')), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));

$instance->setContainer(($this->privates['.service_locator.ychIlgF'] ?? $this->get_ServiceLocator_YchIlgFService())->withContext('App\\Service\\Manager\\TagManager', $this));

return $instance;