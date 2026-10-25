<?php
    use Core\Route;
    use Core\Database;
    use Core\Validator;

    //base path
    const BASE_PATH = __DIR__. '/../';

    //retriving file path
    
    require BASE_PATH . 'services/functions.php';
    
    spl_autoload_register(function ($class) {
        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
        require base_path("{$class}.php");
    });
    
    //routes
    $parsedUrl = parse_url($_SERVER['REQUEST_URI']);
    $method = isset($_POST["_method"]) ? $_POST["_method"] : $_SERVER["REQUEST_METHOD"];
    $route = new Route();
    require base_path("routes/index.php");
    $routeTo = $route->getRouterPage($parsedUrl, $method);

    //db connection
    $config = require base_path('config.php');
    $db = new Database($config);

    require controller($routeTo['controller']);
    $pageData = $routeTo['action']($db);
    require view("layout.php");
?>