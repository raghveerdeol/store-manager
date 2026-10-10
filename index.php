<?php
    require './services/route.service.php';
    require './services/functions.php';
    require './Database.php';

    $parsedUrl = parse_url($_SERVER['REQUEST_URI']);
    $path = $parsedUrl['path'];
    $routeTo = getRouterPage($path);

    require $routeTo['controller'];

    $config = require ('config.php');
    $db = new Database($config);


?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $routeTo['title'] ?></title>
        <link rel="stylesheet" href="./css/general.css"/>
        <link rel="stylesheet" href="./css/flex.css"/>
        <link rel="stylesheet" href="./css/text.css"/>
    </head>
    <body>
        <nav>
            <?php require './globalComponents/nav.php' ?>
        </nav>
        <main>
            <?php require $routeTo['view'] ?>
        </main>
    </body>
</html>