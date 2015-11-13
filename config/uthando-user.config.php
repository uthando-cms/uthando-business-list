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
];
