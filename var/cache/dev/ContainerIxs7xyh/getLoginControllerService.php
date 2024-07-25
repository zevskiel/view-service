<?php

namespace ContainerIxs7xyh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\LoginController' shared autowired service.
     *
     * @return \App\Controller\LoginController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/LoginController.php';

        $container->services['App\\Controller\\LoginController'] = $instance = new \App\Controller\LoginController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\LoginController', $container));

        return $instance;
    }
}
