<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.action.set_object_field_value' shared service.

return $this->services['sonata.admin.action.set_object_field_value'] = new \Sonata\AdminBundle\Action\SetObjectFieldValueAction(($this->services['twig'] ?? $this->getTwigService()), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['validator'] ?? $this->getValidatorService()));
