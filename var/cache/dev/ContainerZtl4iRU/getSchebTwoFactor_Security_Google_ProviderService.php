<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'scheb_two_factor.security.google.provider' shared service.

return $this->privates['scheb_two_factor.security.google.provider'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\Google\GoogleAuthenticatorTwoFactorProvider(($this->services['scheb_two_factor.security.google_authenticator'] ?? $this->load('getSchebTwoFactor_Security_GoogleAuthenticatorService.php')), $this->load('getSchebTwoFactor_Security_Google_FormRendererService.php'));
