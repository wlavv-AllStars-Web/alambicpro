<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'api_platform.listener.exception' shared service.

return $this->privates['api_platform.listener.exception'] = new \ApiPlatform\Symfony\EventListener\ExceptionListener('api_platform.action.exception', ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), false, new \ApiPlatform\Symfony\EventListener\ErrorListener('api_platform.action.exception', ($this->services['logger'] ?? $this->getLoggerService()), false));
