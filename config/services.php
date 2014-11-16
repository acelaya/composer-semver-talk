<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use SymfonyZgz\Controller\MainController;
use SymfonyZgz\Controller\UserController;
use SymfonyZgz\Service\UserService;

// Controllers
$app['main.controller'] = $app->share(function () use ($app) {
    return new MainController($app['twig']);
});

$app['user.controller'] = $app->share(function () use ($app) {
    return new UserController($app['user.service'], $app['twig']);
});


// Other services
$app['doctrine'] = $app->share(function () use ($app) {
    $config = Setup::createAnnotationMetadataConfiguration(
        [
            __DIR__ . '/../src/Entity'
        ],
        true,
        __DIR__ . '/../var/proxies'
    );
    return EntityManager::create([
        'driver' => 'pdo_sqlite',
        'path' => __DIR__ . '/../var/database.db'
    ], $config);
});

$app['user.service'] = $app->share(function () use ($app) {
    return new UserService($app['doctrine']);
});
