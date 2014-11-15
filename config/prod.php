<?php

// configure your app for the production environment

require_once __DIR__ . '/services.php';
require_once __DIR__ . '/routes.php';

$app['twig.path'] = array(__DIR__.'/../templates');
$app['twig.options'] = array('cache' => __DIR__.'/../var/cache/twig');
