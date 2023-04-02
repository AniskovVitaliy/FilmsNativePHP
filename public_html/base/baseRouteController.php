<?php

namespace base;

class baseRouteController extends baseController
{

    function __construct(){

        $path = $_SERVER['REQUEST_URI'];

        $path = parse_url($path);
        $path = preg_split('/\\//', $path['path'],100,PREG_SPLIT_NO_EMPTY);

        if($path[0] === 'admin'){
            $controller  = $path[1] ? 'adminController' . ucfirst($path[1]) : 'adminControllerMain';
            $this->route = 'admin/controller/' . $controller;
        }else{
            $controller = $path[0] ? 'commonController' . ucfirst($path[0]) : 'commonControllerMain';
            $this->route = 'common/controller/' . $controller;
        }

    }

}