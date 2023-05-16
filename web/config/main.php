<?php
return [
    'id' => 'web',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'defaultRoute' => 'site/home',
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
        'theme' => [
            'class' => 'portalium\theme\Module',
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
        ]
    ],
    'components' => [
        'request' => [
            'class' => 'portalium\web\Request',
            'cookieValidationKey' => '',
            'csrfParam' => '_csrf-web',
			'web'=> '/web/www',
            'aliasUrl' => ''
        ],
		 'urlManager' => [
        	'enablePrettyUrl' => true,
        	'showScriptName' => false,
        ],
        'user' => [
            'identityClass' => 'portalium\user\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => ['site/auth/login'],
            'identityCookie' => [
                'name' => '_identity-web',
                'httpOnly' => true
            ],
        ],
        'session' => [
            'name' => 'portalium-web',
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
        'errorHandler' => [
            'errorAction' => 'site/home/error',
        ],
    ],
    'layout' => 'dashboard',
    'layoutPath' => '@vendor/portalium/yii2-theme/src/layouts',
    'params' => [
        'bsVersion' => '5.x',
    ]
];
