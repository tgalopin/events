<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.route.path_info' shared service.

return $this->services['sonata.admin.route.path_info'] = new \Sonata\AdminBundle\Route\PathInfoBuilder(($this->services['sonata.admin.audit.manager'] ?? ($this->services['sonata.admin.audit.manager'] = new \Sonata\AdminBundle\Model\AuditManager($this))));
