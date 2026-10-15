<?php

function index($db) : array
{
    $query = 'SELECT id, name, description from tags ORDER BY created_at DESC';
    $users = $db->query($query)->fetchAll();
    return [
        'view' => './views/tag/index.view.php',
        'data' => $users,
        'path' => 'tags',
        'title' => 'Tags',
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
    $query = 'SELECT * from tags where id = :id';
    $tag = $db->query($query, ['id' => $_GET['id']])->fetch();
    return [
        'view' => './views/tag/show.view.php',
        'data' => $tag,
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
            'name' => 'description',
            'placeholder' => 'This tag is red!',
            'label' => 'Description',
            'required' => true,
            'cols' => '3'
        ],
    ];

    return [
        'view' => './views/tag/create.view.php',
        'title' => 'Create tag',
        'formData' => $formData
    ];
}

function create(array $data, $db)
{
    $validate = [
        'name' => 'string,required',
        'description' => 'string,required',
    ];
    $validated = formValidator($validate, $data);

    if(validateError($validated)){
        return [
            'error' => validateError($validated)
        ];
    }

    $name = clearInput($data['name']);
    $description = clearInput($data['description']);
    $hasError = false;
    try {
        $db->query('INSERT INTO tags(name, description) VALUES(:name, :description)', [
            'name' => $name,
            'description' => $description
        ]);
    } catch (PDOException $e) {
        $hasError = true;
    }
    return $hasError ? 'error' : 'success';
}

function editView($db) : array
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
            'name' => 'description',
            'placeholder' => 'This tag is red!',
            'label' => 'Description',
            'required' => true,
            'cols' => '3'
        ],
    ];

    $id = clearInput($_GET['id']);
    $id = intval($id);

    $query = "SELECT * FROM tags where id=:id";
    $element = $db->query($query,[
        'id' => $id
    ])->fetch();

    return [
        'view' => './views/tag/edit.view.php',
        'title' => 'Edit tag',
        'formData' => $formData,
        'elementData' => $element
    ];
}

function edit(array $data, $db)
{
    $validate = [
        'name' => 'string,required',
        'description' => 'string,required',
    ];
    $validated = formValidator($validate, $data);

    if(validateError($validated)){
        return [
            'error' => validateError($validated)
        ];
    }

    $name = clearInput($data['name']);
    $description = clearInput($data['description']);
    $id = clearInput($data['id']);

    $hasError = false;
    try {
        $db->query('UPDATE tags SET name=:name, description=:description WHERE id=:id', [
            'name' => $name,
            'description' => $description,
            'id' => $id
        ]);
    } catch (PDOException $e) {
        $hasError = true;
    }
    return $hasError ? 'error' : 'success';
}

function delete($db) : array
{
    $id = $_GET['id'];
    //query delete

    //redirect al index
}