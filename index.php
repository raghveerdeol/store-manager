<?php
    require './css/general.css';
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
    </head>
    <body>
        <main>
            <?php require $routeTo['view'] ?>
        </main>
    </body>
</html>