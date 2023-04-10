<?php

namespace app\core;

class Router
{
    public Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }


}