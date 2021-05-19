<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/Work/git/Brabusz_Grav/user/config/plugins/email.yaml',
    'modified' => 1614600854,
    'data' => [
        'enabled' => true,
        'from' => 'noreply@brabusz.hu',
        'from_name' => 'BRABUSZ',
        'to' => 'markusz996@gmail.com',
        'to_name' => NULL,
        'queue' => [
            'enabled' => false,
            'flush_frequency' => '* * * * *',
            'flush_msg_limit' => 10,
            'flush_time_limit' => 100
        ],
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.gmail.com',
                'port' => 587,
                'encryption' => 'tls',
                'user' => 'brabusz.noreply@gmail.com',
                'password' => 'BraBusz2012',
                'auth_mode' => NULL
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false,
        'charset' => NULL,
        'cc' => NULL,
        'cc_name' => NULL,
        'bcc' => NULL,
        'reply_to' => NULL,
        'reply_to_name' => NULL,
        'body' => NULL
    ]
];
