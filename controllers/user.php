<?php

function index($db) : array
{
    $query = 'Select name, email, created_at, updated_at from users';
    $users = $db->query($query)->fetchAll();
    return [
        'users' => $users,
    ];
}