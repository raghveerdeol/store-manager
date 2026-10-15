<?php

function index($db) : array
{
    $query = 'SELECT id, name, email, created_at, updated_at from users';
    $users = $db->query($query)->fetchAll();
    return [
        'view' => './views/user/index.view.php',
        'data' => $users,
        'path' => 'users',
        'title' => 'Users',
        'actions' => [
            'view'
        ]
    ];
}

function show($db) : array
{
    $query = 'SELECT id, name, email, created_at, updated_at from users where id = :id';
    $user = $db->query($query, ['id' => $_GET['id']])->fetch();
    return [
        'view' => './views/user/show.view.php',
        'data' => $user,
        'actions' => [
            'edit',
            'delete'
        ]
    ];
}

function createView() : array
{

}

function create(array $data, $db)
{

}

function editView($db) : array
{

}

function edit(array $data, $db)
{

}

function delete($db) : array
{
    $id = $_GET['id'];
    //query delete

    //redirect al index
}