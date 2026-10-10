<?php

function index($db) : array
{
    $query = 'Select id, name, email, created_at, updated_at from users';
    $users = $db->query($query)->fetchAll();
    return [
        'view' => './views/user/index.view.php',
        'users' => $users,
        'actions' => [
            'view',
            'create',
            'edit',
            'delete'
        ]
    ];
}

function show($db) : array
{
    $id = $_GET['id'];
    $query = 'Select id, name, email, created_at, updated_at from users where id = :id';
    $user = $db->query($query, ['id' => $id])->fetch();
    return [
        'view' => './views/user/show.view.php',
        'user' => $user,
        'actions' => [
            'edit',
            'delete'
        ]
    ];
}

function createView() : array
{
    return [
        'view' => './views/user/create.view.php'
    ];
}

function create()
{
    //query creazione

    //redirect alla view
}

function editView($db) : array
{
    $id = $_GET['id'];
    $query = 'Select * from users where id = :id';
    $user = $db->query($query, ['id' => $id])->fetch();
    return [
        'view' => './views/user/edit.view.php',
        'user' => $user,
        'actions' => [
            'view',
            'delete'
        ]
    ];
}

function edit($db) : array
{
    $id = $_GET['id'];
    //query edit
}

function delete($db) : array
{
    $id = $_GET['id'];
    //query delete

    //redirect al index
}