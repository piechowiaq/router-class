<?php

namespace app\core;

class Request
{
    public function getPath()
    {
        /* Generating PATH_INFO */

        $path = $_SERVER['REQUEST_URI'] ?? '/';

        $position = strpos($path, '?');

        if($position === false){
            return $path;
        }
        return substr($path,0, $position);
    }

    public function getMethod()
    {

    }

}