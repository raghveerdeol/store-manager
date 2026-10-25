<?php

$route->get('/dahboard', 'dashboard.php', 'index');
$route->get('/settings', 'settings.php', 'index');
$route->get('/settings/create', 'settings.php', 'create');
$route->post('/settings', 'settings.php', 'store');
$route->delete('/settings', 'settings.php', 'delete');

// cerco la rotta nella tabella pages
// $searchedRoute = [];

// $routes = array_merge($searchedRoute, $basicRoutes);
