<?php

$routes = [
    [
        'link' => '/dashboard',
        'title' => 'Dashboard',
        'controller' => './controllers/dashboard.php',
        'function' => 'index',
        'view' => './views/dashboard/index.view.php'
    ],
    [
        'link' => '/users',
        'title' => 'Users',
        'controller' => './controllers/user.php',
        'function' => 'index',
        'view' => './views/user/index.view.php'
    ],
];

$pageNotFoundRoute = [
        'link' => '/pageNotFound',
        'title' => 'Page not found',
        'controller' => './controllers/notFound.php',
        'function' => 'index',
        'view' => './views/notFound.view.php'
    ];