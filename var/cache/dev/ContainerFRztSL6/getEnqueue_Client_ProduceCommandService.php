<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'enqueue.client.produce_command' shared service.

$this->privates['enqueue.client.produce_command'] = $instance = new \Enqueue\Symfony\Client\ProduceCommand(($this->privates['enqueue.locator'] ?? $this->load('getEnqueue_LocatorService.php')), 'default', 'enqueue.client.%s.producer');

$instance->setName('enqueue:produce');

return $instance;
