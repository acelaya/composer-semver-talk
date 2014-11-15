<?php

use SymfonyZgz\Controller\MainController;

// Controllers
$app['main.controller'] = $app->share(function () use ($app) {
    return new MainController($app['twig']);
});

// Other services
