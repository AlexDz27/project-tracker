<?php

$routes = [
  '/' => "front-end/pages/home.php",

  '/sprava' => "front-end/pages/sprava.php",
  '/project-tracker' => "front-end/pages/project-tracker.php",

  '404' => "front-end/pages/404.php"
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
      load($routePage);
      return;
    }
  }

  http_response_code(404);
  load($route404);
}