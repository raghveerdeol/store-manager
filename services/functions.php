<?php

function isEven(int $num) : bool
{
    return $num % 2 === 0 ? true : false;
}

//passare alla funzione solo un'elemento della tabella
function getTableColumns(array $singleElement) : array
{
    $columns = [];
    foreach ($singleElement as $key => $value) {
        $columns[] = $key;
    }
    return $columns;
}

function base_path($path)
{
    return BASE_PATH . $path;
}

//load a view page, use it in a controller
function view($path, $attributes = [])
{
    // extract variable with key name
    extract($attributes);
    return base_path('views/'.$path);
}

function controller($path)
{
    return base_path('controllers/'.$path);
}