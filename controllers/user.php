<?php

function index($db) : array
{
    $query = 'Select id, name, email, created_at, updated_at from users';
    $users = $db->query($query)->fetchAll();
    return [
        'view' => './views/user/index.view.php',
        'data' => $users,
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
    $query = 'Select id, name, email, created_at, updated_at from users where id = :id';
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

    $formData = [
        [
            'type' => 'text',
            'name' => 'name',
            'label' => 'Name',
            'placeholder' => 'Mario',
            'required' => true,
            'cols' => '3'
        ],
        [
            'type' => 'text',
            'name' => 'email',
            'placeholder' => 'exemple@mail.com',
            'label' => 'Email',
            'required' => true,
            'cols' => '3'
        ],
    ];

    return [
        'view' => './views/user/create.view.php',
        'title' => 'User',
        'formData' => $formData
    ];
}

function create()
{
    //query creazione

    //redirect alla view
}

function editView($db) : array
{
    $query = 'Select * from users where id = :id';
    $user = $db->query($query, ['id' => $_GET['id']])->fetch();
    return [
        'view' => './views/user/edit.view.php',
        'data' => $user,
        'actions' => [
            'view',
            'delete',
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