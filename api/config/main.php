<?php
return [
    'id' => 'api',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules' => [
        'site' => [
            'class' => 'portalium\site\Module',
        ],
        'user' => [
            'class' => 'portalium\user\Module',
        ],
        'rbac' => [
            'class' => 'portalium\rbac\Module',
        ],
        'menu' => [
            'class' => 'portalium\menu\Module',
        ],
        'content' => [
            'class' => 'portalium\content\Module',
        ],
        'storage' => [
            'class' => 'portalium\storage\Module',
        ],
        'workspace' => [
            'class' => 'portalium\workspace\Module',
        ],
    ],
    'components' => [
        'request' => [
            'cookieValidationKey' => '',
            'csrfParam' => '_csrf-api',
            'class' => 'portalium\web\Request',
            'web'=> '/api/www',
            'aliasUrl' => '/api'
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'user' => [
            'identityClass' => 'portalium\user\models\User',
            'enableAutoLogin' => false,
            'loginUrl' => '',
            'identityCookie' => [
                'name' => '_identity-api',
            ],
        ],
        'session' => [
            'name' => 'portalium-api',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ]
];
