<?php

namespace Core;

class Route
{
    protected $routes;
    protected $pageNotFoundRoute = [
        'uri' => '/pageNotFound',
        'controller' => 'notFound.php',
        'action' => 'index',
        'method' => 'GET'
    ];

    protected function add(string $uri, string $controller, string $action, string $method)
    {
        return [
            'uri' => $uri,
            'controller' => $controller,
            'action' => $action,
            'method' => $method
        ];
    }

    public function get(string $uri, string $controller, string $action)
    {
        $this->routes[] = $this->add($uri, $controller, $action , 'GET');
    }

    public function post(string $uri, string $controller, string $action)
    {
        $this->routes[] = $this->add($uri, $controller, $action, 'POST');
    }

    public function put(string $uri, string $controller, string $action)
    {
        $this->routes[] = $this->add($uri, $controller, $action, 'PUT');
    }

    public function delete( string $uri, string $controller, string $action)
    {
        $this->routes[] = $this->add($uri, $controller, $action, 'DELETE');
    }

    public function getRouterPage(array $path, string $method) : array
    {
        $uri = $this->normalizeUri($path);
        $searchedRoute = null;
        foreach($this->routes as $route)
        {
            if(($route['uri'] === $uri || $route['uri'] === ('/'.$uri)) && $route['method'] === $method)
            {
                $searchedRoute = $route;
                break;
            }
        }
    
        return !$searchedRoute ? $this->pageNotFoundRoute : $searchedRoute;
    }
    
    public function activeUrl(string $url, array $path) : bool
    {
       $path = $this->normalizeUri($path);
       return $url === $path || $url === ('/'.$path);
    }
        
    protected function normalizeUri(array $uri) : string
    {
        $normalizedUri = '';
        $uriArray = array_values(array_filter($uri));
    
        $normalizedUri = implode('/', $uriArray);
    
        return strtolower($normalizedUri);
    }

}