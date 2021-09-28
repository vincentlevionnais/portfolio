<?php

require '../app/Controllers/MainController.php';
require '../app/Controllers/ErrorController.php';

require '../vendor/autoload.php';

$router = new AltoRouter();

if(array_key_exists('BASE_URI', $_SERVER)) {
    $router->setBasePath($_SERVER['BASE_URI']);
} else {
    $_SERVER['BASE_URI'] = '/';
}

// Je défini ensuite les routes :

// Notre route pour la home
$router->map(
    // La méthode
    'GET',
    // La route (motif de l'URL)
    '/',
    // La destination
    [
        'method' => 'home',
        'controller' => 'MainController',
    ],
    // Le nom de la route
    'main-home'
);

// Notre route pour la home
$router->map(
    'GET',
    '/contact',
    [
        'method' => 'contact',
        'controller' => 'MainController',
    ],
    'main-contact'
);

$match = $router->match();

$dispatcher = new Dispatcher($match, 'ErrorController::err404');

$dispatcher->dispatch();
