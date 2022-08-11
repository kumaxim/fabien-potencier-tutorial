<?php

// Source: http://fabien.potencier.org/
// Search keyword: "Create your own framework... on top of the Symfony2 Components"
// Update: https://symfony.com/doc/current/create_framework/index.html
// RU Translate: https://habr.com/ru/post/138893/

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Simplex\StringResponseListener;
use Symfony\Component\DependencyInjection;
use Symfony\Component\HttpFoundation;
use Symfony\Component\HttpKernel\EventListener\ResponseListener;

function render_template(HttpFoundation\Request $request)
{
    extract($request->attributes->all(), EXTR_SKIP);
    ob_start();
    include sprintf('%s/src/pages/%s.php', dirname(__DIR__), $_route);

    return new HttpFoundation\Response(ob_get_clean());
}

/** @var DependencyInjection\ContainerBuilder $container */
$container = include dirname(__DIR__) . '/src/container.php';

$request  = HttpFoundation\Request::createFromGlobals();

$container->register('listener.string_response', StringResponseListener::class);
$container->getDefinition('dispatcher')
    ->addMethodCall('addSubscriber', [new DependencyInjection\Reference('listener.string_response')]);
$container->register('listener.response', ResponseListener::class)
    ->setArguments(['%charset%']);

$container->setParameter('debug', true);
$container->setParameter('charset', 'UTF-8');
$container->setParameter('routes', include dirname(__DIR__) . '/src/app.php');

$response = $container->get('framework')->handle($request);

$response->send();
