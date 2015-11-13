<?php
return [
    'controllers' => [
        'invokables' => [
            'UthandoBusinessList\Controller\BusinessList' => 'UthandoBusinessList\Controller\BusinessList',
        ],
    ],
    'form_elements' => [
        'invokables' => [
            'UthandoBusinessList' => 'UthandoBusinessList\Form\BusinessList',
        ],
    ],
    'hydrators' => [
        'invokables' => [
            'UthandoBusinessList' => 'UthandoBusinessList\Hydrator\BusinessList',
        ],
    ],
    'input_filters' => [
        'invokables' => [
            'UthandoBusinessList' => 'UthandoBusinessList\InputFilter\BusinessList',
        ],
    ],
    'uthando_mappers' => [
        'invokables' => [
            'UthandoBusinessList' => 'UthandoBusinessList\Mapper\BusinessList',
        ],
    ],
    'uthando_models' => [
        'invokables' => [
            'UthandoBusinessList' => 'UthandoBusinessList\Model\BusinessList',
        ],
    ],
    'uthando_services' => [
        'invokables' => [
            'UthandoBusinessList' => 'UthandoBusinessList\Service\BusinessList',
        ],
    ],
    'view_helpers' => [
        'invokables' => [
            'UthandoRecentBusinesses' => 'UthandoBusinessList\View\RecentBusinesses',
        ],
    ],
    'view_manager' => [
        'template_map' => include __DIR__ . '/../template_map.php'
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
        ],
    ],
];
