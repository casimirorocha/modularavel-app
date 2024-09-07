<?php

return [
    'name' => 'Auth',
    'routes' => [
        'prefix' => [
            'auth' => function () {
               return [];
            }
        ]

    ],
    'middleware' => [],
    'pages' => [
        'login' => [
            'title' => 'Login title'
        ]
    ]
];
