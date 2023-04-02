<?php
return [
    'Development' => [
        'path' => 'dev',
        'setWritable' => [
            'web/runtime',
            'web/www/assets'
        ],
        'setExecutable' => [
            'portalium'
        ],
        'setCookieValidationKey' => [
            'api/config/main-local.php',
            'web/config/main-local.php'
        ],
    ],
    'Production' => [
        'path' => 'prod',
        'setWritable' => [
            'web/runtime',
            'web/www/assets'
        ],
        'setExecutable' => [
            'portalium'
        ],
        'setCookieValidationKey' => [
            'api/config/main.php',
            'web/config/main.php',
            'api/config/main-local.php',
            'web/config/main-local.php'
        ],
    ],
];
