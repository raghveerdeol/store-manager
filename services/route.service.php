<?php

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

    if(!$searchedRoute){
        return $pageNotFoundRoute;
    } else {
        return $searchedRoute;
    }
}
