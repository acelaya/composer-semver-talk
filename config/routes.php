<?php

use Symfony\Component\HttpFoundation\Response;

$app->get('/', 'main.controller:indexAction')
    ->bind('homepage');

$app->get('/users', 'user.controller:listAction')
    ->bind('users_list');

$app->match('/users/create', 'user.controller:createAction')
    ->bind('create_user')
    ->method('GET|POST');

$app->match('/users/edit/{id}', 'user.controller:editAction')
    ->bind('edit_user')
    ->method('GET|POST')
    ->assert('id', '[0-9]+');

$app->match('/users/delete/{id}', 'user.controller:deleteAction')
    ->bind('delete_user')
    ->method('GET|POST')
    ->assert('id', '[0-9]+');

$app->error(function (\Exception $e, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = array(
        'errors/'.$code.'.html',
        'errors/'.substr($code, 0, 2).'x.html',
        'errors/'.substr($code, 0, 1).'xx.html',
        'errors/default.html',
    );

    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
});
