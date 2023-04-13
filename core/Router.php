<?php

namespace app\core;

class Router
{
    public Request $request;
    public Response $response;

    protected array $routes = [];

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false){
            Application::$app->response->setStatusCode(404);
            return $this->renderView('_404');
        }
        if (is_string($callback)){
            return $this->renderView($callback);
        }
        if (is_array($callback)) {

            echo "<pre>";
            var_dump($callback);
            echo "</pre>";
            exit;
            $callback[0] = new $callback[0];
        }

        return call_user_func($callback);
    }

    public function renderView($view)
    {
        include_once __DIR__."/../views/$view.php";
    }


}