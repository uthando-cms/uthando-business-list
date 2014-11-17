<?php
return [
    'uthando_user' => [
        'acl' => [
            'roles' => [
                'guest' => [
                    'privileges' => [
                        'allow' => [
                            'controllers' => [
                                'UthandoBusinessList\Controller\BusinessList' => ['action' => ['view', 'view-business']],
                            ],
                        ],
                    ],
                ],
                'registered' => [
                    'privileges' => [
                        'allow' => [
                            'controllers' => [
                                'UthandoBusinessList\Controller\BusinessList' => ['action' => ['business-list-edit']],
                            ],
                            'resources' => ['business-list:edit'],
                        ],
                    ],
                ],
                'admin' => [
                    'privileges' => [
                        'allow' => [
                            'controllers' => [
                                'UthandoBusinessList\Controller\BusinessList' => ['action' => 'all'],
                            ],
                        ],
                    ],
                ],
            ],
            'resources' => [
                'UthandoBusinessList\Controller\BusinessList',
                'business-list:edit',
            ],
        ],
    ],
    'router' => [
        'routes' => [
            'business-list' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/business-list',
                    'defaults' => [
                        '__NAMESPACE__' => 'UthandoBusinessList\Controller',
                        'controller'    => 'BusinessList',
                        'action'        => 'view',
                        'force-ssl'     => 'http'
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    'page' => [
                        'type'    => 'Segment',
                        'options' => [
                            'route'         => '/page/[:page]',
                            'constraints'   => [
                                'page' => '\d+'
                            ],
                            'defaults'      => [
                                'action'        => 'view',
                                'page'          => 1,
                                'force-ssl'     => 'ssl'
                            ],
                        ],
                    ],
                ],
            ],
            'business' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/business/[:business]',
                    'constraints' => [
                        'business'  => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ],
                    'defaults' => [
                        '__NAMESPACE__' => 'UthandoBusinessList\Controller',
                        'controller'    => 'BusinessList',
                        'action'        => 'view-business',
                        'force-ssl'     => 'http'
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    'edit' => [
                        'type'    => 'Literal',
                        'options' => [
                            'route' => '/edit',
                            'defaults'      => [
                                'action' => 'edit-business',
                            ],
                        ],
                    ],
                ],
            ],
            'admin' => [
                'child_routes' => [
                    'business-list' => [
                        'type' => 'Literal',
                        'options' => [
                            'route' => '/business-list',
                            'constraints'   => [
                                'action'    => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ],
                            'defaults' => [
                                '__NAMESPACE__' => 'UthandoBusinessList\Controller',
                                'controller'    => 'BusinessList',
                                'action'        => 'index',
                                'force-ssl'     => 'ssl'
                            ],
                        ],
                        'may_terminate' => true,
                        'child_routes' => [
                            'edit' => [
                                'type'    => 'Segment',
                                'options' => [
                                    'route'         => '/[:action[/id/[:id]]]',
                                    'constraints'   => [
                                        'action'    => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id'		=> '\d+'
                                    ],
                                    'defaults'      => [
                                        'action'        => 'edit',
                                        'force-ssl'     => 'ssl'
                                    ],
                                ],
                            ],
                            'page' => [
                                'type'    => 'Segment',
                                'options' => [
                                    'route'         => '/page/[:page]',
                                    'constraints'   => [
                                        'page' => '\d+'
                                    ],
                                    'defaults'      => [
                                        'action'        => 'list',
                                        'page'          => 1,
                                        'force-ssl'     => 'ssl'
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'navigation' => [
        'admin' => [
            'modules' => [
                'pages' => [
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
        ],
    ],
    'view_manager' => [
        'template_map' => include __DIR__ . '/../template_map.php'
    ],
];
