<?php

namespace ContainerJVjKGBr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0BshnpaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0Bshnpa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0Bshnpa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'auth' => ['privates', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'userService' => ['privates', 'App\\Service\\UserService', 'getUserServiceService', true],
        ], [
            'auth' => '?',
            'em' => '?',
            'userPasswordHasher' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
            'userService' => 'App\\Service\\UserService',
        ]);
    }
}