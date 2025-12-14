<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            // uncomment if you want to cache RBAC items hierarchy
            // 'cache' => 'cache',
        ],
        'assetManager' => [
                'bundles' => [
                    'yii\bootstrap5\BootstrapAsset' => [
                        'sourcePath' => '@vendor/twbs/bootstrap/dist',
                        'css' => [
                            'css/bootstrap.min.css',
                        ],
                    ],
                    'yii\bootstrap5\BootstrapPluginAsset' => [
                        'sourcePath' => '@vendor/twbs/bootstrap/dist',
                        'js' => [
                            'js/bootstrap.bundle.min.js',
                        ],
                    ],
                ],
            ],
    ],
];
