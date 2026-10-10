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