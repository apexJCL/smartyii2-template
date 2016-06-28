<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'language' => 'es_MX',
    'sourceLanguage' => 'en_US',
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/'         =>   'site/index',
                'signup'    =>   'site/signup',
                'login'     =>   'site/login',
                'about'     =>   'site/about',
                'contact'   =>   'site/contact',
            ],
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'basePath' => '@app/messages',
                    'fileMap' => [
                        'messages' => 'messages.php',
                        'app' => 'app.php',
                        'app/error' => 'error.php',
                    ],
                ],
                'on missingTranslation' => [
                    'app\components\TranslationEventHandler', 'handleMissingTranslation'
                ],
            ],
        ],
    ],
    'params' => $params,
];
