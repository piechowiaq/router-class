<?php

use app\core\Application;

require_once __DIR__.'/vendor/autoload.php';

$app = new Application();

$app->router->get('/', function ()
    {
        return 'Hello World';
    }
);

$app->router->get('/home', 'home');


$app->router->post('/home', function ()
{
    return 'Handling Submitted Data';
}
);




$app->router->get('/contact', 'home');

$app->run();