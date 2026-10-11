<?php

$userRoute = require('./routes/partials/users.routes.php');
$basicRoutes = [
    [
        'link' => '/dashboard',
        'title' => 'Dashboard',
        'controller' => './controllers/dashboard.php',
        'function' => 'index',
    ]
];

$routes = array_merge($userRoute, $basicRoutes);

$pageNotFoundRoute = [
    'link' => '/pageNotFound',
    'title' => 'Page not found',
    'controller' => './controllers/notFound.php',
    'function' => 'index',
];