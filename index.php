<?php
    require './services/route.service.php';
    $uri = $_SERVER['REQUEST_URI'];
    $routeTo = getRouterPage($uri);

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $routeTo['title'] ?></title>
        <link rel="stylesheet" href="./css/general.css"/>
        <link rel="stylesheet" href="./css/flex.css"/>
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