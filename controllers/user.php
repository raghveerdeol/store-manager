<?php

function index($db)
{
    $query = 'Select * from users';
    $users = $db->query($query)->fetchAll();
    return [
        'users' => $users,
    ];
}