<?php
// web/index.php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// register the TwigServiceProvider so we can render templates using Twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
	'twig.path' => __DIR__.'/../views',     // changed to reflect the /views dir being sibling to /web
));

$app->get('/', function () use ($app) {
	return $app['twig']->render('index.html.twig');
});

$app->get('/hello/{name}', function ($name) use ($app) {
	return 'Hello '.$app->escape($name);
});

$app->run();