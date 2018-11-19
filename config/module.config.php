<?php

use UthandoBusinessList\Controller\BusinessListController;
use UthandoBusinessList\Service\BusinessListService;
use UthandoBusinessList\View\RecentBusinesses;

return [
    'controllers' => [
        'invokables' => [
            BusinessListController::class => BusinessListController::class,
        ],
    ],
    'uthando_services' => [
        'invokables' => [
            BusinessListService::class => BusinessListService::class,
        ],
    ],
    'view_helpers' => [
        'aliases' => [
            'UthandoRecentBusinesses' => RecentBusinesses::class,
        ],
        'invokables' => [
            RecentBusinesses::class => RecentBusinesses::class,
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
                        'controller'    => BusinessListController::class,
                        'action'        => 'view',
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
                        'controller'    => BusinessListController::class,
                        'action'        => 'view-business',
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
