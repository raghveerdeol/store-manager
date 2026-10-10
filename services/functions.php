<?php

function isEven(int $num) : bool
{
    return $num % 2 === 0 ? true : false;
}

function getTableColumns(array $table) : array
{
    $columns = [];
    $singleElement = $table[0];
    foreach ($singleElement as $key => $value) {
        $columns[] = $key;
    }
    return $columns;
}