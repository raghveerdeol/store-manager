<?php

$parsedUrl = parse_url($_SERVER['REQUEST_URI']);
$path = $parsedUrl['path'];
$routeTo = getRouterPage($path);

function getRouterPage(string $uri) : array
{
    require './routes/index.php';
    $uri = normalizeUri($uri);
    $searchedRoute = null;
    foreach($routes as $route)
    {
        if($route['link'] === $uri || $route['link'] === ('/'.$uri))
        {
            $searchedRoute = $route;
            break;
        }
    }

    return !$searchedRoute ? $pageNotFoundRoute : $searchedRoute; 
}

function normalizeUri(string $uri) : string
{
    $normalizedUri = '';
    $lowerUri = strtolower($uri);
    $uriArray = array_values(array_filter(explode('/', $lowerUri)));

    $normalizedUri = implode('/', $uriArray);

    return $normalizedUri;
}

function activeUrl(string $url, string $path) : bool
{
   $path = normalizeUri($path);
   return $url === $path || $url === ('/'.$path);
}