<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.B2hWbiH' shared service.

return $this->privates['.service_locator.B2hWbiH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'Userconnecte' => ['privates', '.errored..service_locator.B2hWbiH.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.B2hWbiH": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
    'serializer' => ['services', 'serializer', 'getSerializerService', false],
    'validator' => ['services', 'validator', 'getValidatorService', false],
], [
    'Userconnecte' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
    'serializer' => '?',
    'validator' => '?',
]);
