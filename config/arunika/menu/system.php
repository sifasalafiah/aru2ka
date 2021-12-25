<?php

return [
    'System' => [
        'order' => 99,
        'menu' => [
            'Users' => [
                'route' => 'epicentrum::users.index',
                'active' => 'epicentrum/users/*',
                'icon' => 'user-friends',
            ],
            'Roles' => [
                'route' => 'epicentrum::roles.index',
                'config' => 'epicentrum/roles/*',
                'icon' => 'user-astronaut',
            ],
            'Permissions' => [
                'route' => 'epicentrum::permissions.edit',
                'active' => 'epicentrum/permissions/*',
                'icon' => 'shield-check',
            ],
            'Settings' => [
                'route' => 'platform::settings.edit',
                'active' => 'platform/settings/*',
                'icon' => 'sliders-v',
            ],
            'Workflow' => [
                'route' => 'workflow::definitions.index',
                'active' => 'workflow/definitions/*',
                'icon' => 'code-branch',
            ],
        ],
    ],
];
