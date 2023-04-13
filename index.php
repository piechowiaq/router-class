<?php

use app\core\Application;
use app\controllers\SiteController;

require_once __DIR__.'/vendor/autoload.php';

$app = new Application();

$app->router->get('/', function ()
    {
        return 'Hello World';
    }
);

$app->router->get('/home', 'home');


$app->router->post('/home', [SiteController::class, 'handelContent']);




$app->router->get('/contact', 'home');

$app->run();