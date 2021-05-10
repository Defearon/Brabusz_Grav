<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/Work/git/Brabusz_Grav/user/themes/mytheme/blueprints.yaml',
    'modified' => 1612874406,
    'data' => [
        'name' => 'BrabuszTheme',
        'slug' => 'brabusz',
        'type' => 'theme',
        'version' => '1.0.0',
        'description' => 'Brabusz',
        'icon' => 'group',
        'author' => [
            'name' => 'Szabó Márk'
        ],
        'license' => 'Szabó Márk',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.5.10'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'color' => [
                    'type' => 'text',
                    'label' => 'Color',
                    'default' => 'blue',
                    'validate' => [
                        'type' => 'text'
                    ]
                ]
            ]
        ]
    ]
];
