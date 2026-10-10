<?php

$userRoute = require('./routes/partials/users.routes.php');
$basicRoutes = [
    [
        'link' => '/dashboard',
        'title' => 'Dashboard',
        'controller' => './controllers/dashboard.php',
        'function' => 'index',
        'view' => './views/dashboard/index.view.php'
    ]
];

$routes = array_merge($userRoute, $basicRoutes);

$pageNotFoundRoute = [
        'link' => '/pageNotFound',
        'title' => 'Page not found',
        'controller' => './controllers/notFound.php',
        'function' => 'index',
        'view' => './views/notFound.view.php'
    ];