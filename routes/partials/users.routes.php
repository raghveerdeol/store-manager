<?php
    
return [
    [
        'link' => '/users',
        'title' => 'Users',
        'controller' => './controllers/user.php',
        'function' => 'index',
    ],
    [
        'link' => '/users/view',
        'title' => 'User',
        'controller' => './controllers/user.php',
        'function' => 'show',
    ],
    [
        'link' => '/users/edit',
        'title' => 'User edit',
        'controller' => './controllers/user.php',
        'function' => 'editView',
    ],
    [
        'link' => '/users/create',
        'title' => 'User create',
        'controller' => './controllers/user.php',
        'function' => 'createView',
    ]
];