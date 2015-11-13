<?php

return [
    'navigation' => [
        'admin' => [
            'business-list' => [
                'label' => 'Business List',
                'pages' => [
                    'list' => [
                        'label'     => 'List All Businesses',
                        'action'    => 'list',
                        'route'     => 'admin/business-list',
                        'resource'  => 'menu:user'
                    ],
                    'add' => [
                        'label'     => 'Add New Business',
                        'action'    => 'add',
                        'route'     => 'admin/business-list/edit',
                        'resource'  => 'menu:user'
                    ],
                ],
                'route' => 'admin/business-list',
                'resource' => 'menu:user'
            ],
        ],
    ],
];
