<?php

$routes = [
  '/' => "pages/home.php",

  '/sprava' => "sprava.php",
  '/project-tracker' => "project-tracker.php",

  '404' => "pages/404.php"
];
setRoutes($routes);


function setRoutes($routes) {
  $uri = explode('?', $_SERVER['REQUEST_URI'])[0]; // explode to allow GET requests
  if ($uri !== '/' && substr($uri, -1) === '/') { // allow trailing slash
    $uri = rtrim($uri, '/');
  }
  $method = $_SERVER['REQUEST_METHOD'];
  $route404 = array_pop($routes);

  foreach ($routes as $routeUri => $routePage) {
    if ($uri === $routeUri) {
      require $routePage;
      return;
    }
  }

  http_response_code(404);
  require $route404;
}