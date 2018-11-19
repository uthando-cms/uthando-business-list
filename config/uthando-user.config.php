<?php

use UthandoBusinessList\Controller\BusinessListController;

return [
    'uthando_user' => [
        'acl' => [
            'roles' => [
                'guest' => [
                    'privileges' => [
                        'allow' => [
                            'controllers' => [
                                BusinessListController::class=> ['action' => ['view', 'view-business']],
                            ],
                        ],
                    ],
                ],
                'registered' => [
                    'privileges' => [
                        'allow' => [
                            'controllers' => [
                                BusinessListController::class => ['action' => ['business-list-edit']],
                            ],
                            'resources' => ['business-list:edit'],
                        ],
                    ],
                ],
                'admin' => [
                    'privileges' => [
                        'allow' => [
                            'controllers' => [
                                BusinessListController::class => ['action' => 'all'],
                            ],
                        ],
                    ],
                ],
            ],
            'resources' => [
                BusinessListController::class,
                'business-list:edit',
            ],
        ],
    ],
];
