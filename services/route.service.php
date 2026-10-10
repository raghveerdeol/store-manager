<?php

$parsedUrl = parse_url($_SERVER['REQUEST_URI']);
$path = $parsedUrl['path'];
$routeTo = getRouterPage($path);

function getRouterPage(string $uri) : array
{
    require './routes/index.php';

    $searchedRoute = null;
    foreach($routes as $route)
    {
        if($route['link'] === $uri)
        {
            $searchedRoute = $route;
            break;
        }
    }

    return !$searchedRoute ? $pageNotFoundRoute : $searchedRoute; 
}
