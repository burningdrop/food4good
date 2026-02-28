<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/food4good/user/plugins/git-sync/git-sync.yaml',
    'modified' => 1772316389,
    'size' => 253,
    'data' => [
        'enabled' => true,
        'folders' => [
            0 => 'pages'
        ],
        'webhook' => '/git-sync/webhook',
        'webhook_enabled' => true,
        'webhook_secret' => '',
        'git' => [
            'bin' => 'git'
        ],
        'user' => 'burningdrop',
        'password' => '',
        'repository' => 'https://github.com/burningdrop/food4good.git',
        'branch' => 'main',
        'remote' => 'origin',
        'target' => 'origin/main'
    ]
];
