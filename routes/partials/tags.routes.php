<?php
    
return [
    [
        'link' => '/tags',
        'title' => 'Tags',
        'controller' => './controllers/tag.php',
        'function' => 'index',
    ],
    [
        'link' => '/tags/view',
        'title' => 'Tag',
        'controller' => './controllers/tag.php',
        'function' => 'show',
    ],
    [
        'link' => '/tags/edit',
        'title' => 'Tag edit',
        'controller' => './controllers/tag.php',
        'function' => 'editView',
    ],
    [
        'link' => '/tags/create',
        'title' => 'Tag create',
        'controller' => './controllers/tag.php',
        'function' => 'createView',
    ]
];