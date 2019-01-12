<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'enqueue.transport.consume_command' shared service.

$this->privates['enqueue.transport.consume_command'] = $instance = new \Enqueue\Symfony\Consumption\ConfigurableConsumeCommand(($this->privates['enqueue.locator'] ?? $this->load('getEnqueue_LocatorService.php')), 'default', 'enqueue.transport.%s.queue_consumer', 'enqueue.transport.%s.processor_registry');

$instance->setName('enqueue:transport:consume');

return $instance;
