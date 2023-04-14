<?php

namespace app\controllers;

use app\core\Application;

class SiteController
{
    public function contact()
    {
        return Application::$app->router->renderView('contact');
    }
    public function handelContent(): string
    {
        return "Handling submitted data from controller";
    }

}