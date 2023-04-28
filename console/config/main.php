<?php
return [
    'id' => 'console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'portalium\console\controllers',
    'modules' => [
        'site' => [
            'class' => 'portalium\site\Module'
        ],
        'user' => [
            'class' => 'portalium\user\Module',
        ],
        'workspace' => [
            'class' => 'portalium\workspace\Module',
        ]
    ],
    'components' => [
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
];
