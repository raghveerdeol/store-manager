<?php

$routes = [
    [
        'link' => '/dashboard',
        'title' => 'Dashboard',
        'view' => './views/dashboard/index.view.php'
    ],
    [
        'link' => '/users',
        'title' => 'Users',
        'view' => './views/user/index.view.php'
    ],
];

$pageNotFoundRoute = [
        'link' => '/pageNotFound',
        'title' => 'Page not found',
        'view' => './views/notFound.view.php'
    ];