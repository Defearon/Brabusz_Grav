<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/Work/git/Brabusz_Grav/user/config/site.yaml',
    'modified' => 1615198742,
    'data' => [
        'title' => 'Brabusz',
        'default_lang' => 'hu',
        'author' => [
            'name' => 'Szabó Márk',
            'email' => 'markusz996@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
