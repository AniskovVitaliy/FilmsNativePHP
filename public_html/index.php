<?php

require_once 'config.php';

//require __DIR__ . '/vendor/autoload.php';

use base\baseRouteController;

$routeController = new baseRouteController();
$routeController->route();