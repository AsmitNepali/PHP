<?php

$query = require 'core/bootstrap.php';

// $router = new Router();

// require 'routes.php';
$uri = Request::uri();

require Router::load('routes.php')->direct($uri); //This is call chaining

// require $router->direct($uri);

