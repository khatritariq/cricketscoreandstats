<?php

namespace App\Services\Inning\Factories;

use App\Services\AService;

/**
 * Class InningServiceFactory
 * @package App\Services\Inning\Factories
 */
class InningServiceFactory
{
    /**
     * Creates objects for service classes
     *
     * @param string $className
     * @param array $constructorArguments
     *
     * @throws \Exception
     *
     * @return AService
     */
    public static function create(string $className, array $constructorArguments = []) : AService
    {
        $class = "App\\Services\\Inning\\$className";
        if (class_exists($class)) {
            return new $class(...$constructorArguments);
        }

        throw new \Exception("Class $class not found");
    }
}
