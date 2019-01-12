<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.context_listener.0' shared service.

return $this->privates['security.context_listener.0'] = new \Symfony\Component\Security\Http\Firewall\ContextListener(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new RewindableGenerator(function () {
    yield 0 => ($this->privates['security.user.provider.concrete.app_administrator_provider'] ?? $this->load('getSecurity_User_Provider_Concrete_AppAdministratorProviderService.php'));
}, 1), 'main_context', ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['scheb_two_factor.security.authentication.trust_resolver'] ?? $this->load('getSchebTwoFactor_Security_Authentication_TrustResolverService.php')));
