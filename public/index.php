<?php

// $routes = [];

route('/', function () {
  echo "Home Page";
});

route('/login', function () {
  echo "Login Page";
});

route('/about-us', function () {
  echo "About Us";
});

route('/404', function () {
  echo "Page not found";
});

route('/some', function(){
    echo 'something';
});

function route(string $path, callable $callback) {
  global $routes;
  $routes[$path] = $callback;
}

run();

function run() {
  global $routes;
  $uri = $_SERVER['REQUEST_URI'];
  $found = false;
  foreach ($routes as $path => $callback) {
    if ($path !== $uri) continue;

    $found = true;
    var_dump($path);
    $callback();
  }

  if (!$found) {
    $notFoundCallback = $routes['/404'];
    $notFoundCallback();
  }
}