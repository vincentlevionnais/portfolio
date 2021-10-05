<?php

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
    // La destination (en simplifié : 'MainController::home')
    [
        'method' => 'home',
        'controller' => 'MainController',
    ],
    // Le nom de la route
    'main-home'
);

// Notre route pour la page contact
$router->map(
    'GET',
    '/contact',
    'MainController::contact',
    'main-contact'
);

// Notre route pour la page skill
$router->map(
    'GET',
    '/skills',
    'MainController::skills',
    'main-skills'
);

// Notre route dynamique pour les pages
$router->map(
    'GET',
    '/page/[i:id]',
    'MainController::page',
    'main-page'
);

$match = $router->match();

$dispatcher = new Dispatcher($match, 'portfolio\Controllers\ErrorController::err404');

// Méthode pour simplifier l'écriture des routes des controllers :
// https://packagist.org/packages/benoclock/alto-dispatcher
$dispatcher->setControllersNamespace('portfolio\Controllers');

$dispatcher->dispatch();
