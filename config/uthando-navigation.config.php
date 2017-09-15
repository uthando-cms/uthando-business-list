<?php

return [
    'navigation' => [
        'admin' => [
            'business-list' => [
                'label' => 'Business List',
                'params' => [
                    'icon' => 'fa-list-alt',
                ],
                'pages' => [
                    'list' => [
                        'label'     => 'List Businesses',
                        'action'    => 'list',
                        'route'     => 'admin/business-list',
                        'resource'  => 'menu:user',
                        'visible'   => false,
                    ],
                    'add' => [
                        'label'     => 'Add Business',
                        'action'    => 'add',
                        'route'     => 'admin/business-list/edit',
                        'resource'  => 'menu:user',
                        'visible'   => false,
                    ],
                    'edit' => [
                        'label'     => 'Edit Business',
                        'action'    => 'edit',
                        'route'     => 'admin/business-list/edit',
                        'resource'  => 'menu:user',
                        'visible'   => false,
                    ],
                ],
                'route' => 'admin/business-list',
                'resource' => 'menu:user'
            ],
        ],
    ],
];
