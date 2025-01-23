<?php

namespace ContainerJyAlI49;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Wo5RpguService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Wo5Rpgu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Wo5Rpgu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'repository' => ['privates', 'App\\Repository\\MusiqueRepository', 'getMusiqueRepositoryService', true],
        ], [
            'repository' => 'App\\Repository\\MusiqueRepository',
        ]);
    }
}
