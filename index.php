<?php
    require './Database.php';
    require './services/functions.php';
    require './services/route.service.php';

    $config = require ('config.php');
    $db = new Database($config);

    require $routeTo['controller'];
    $pageData = $routeTo['function']($db);
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