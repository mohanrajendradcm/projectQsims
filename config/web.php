<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'basic',
    
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
 
 
    'components' => [
       
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'l6XysCSLG4GBG_KoRbAQx8Qv59UqlvVc',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\ProjectUser',
            'class' => 'yii\web\user',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
         'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => ['guest'],
            'cache' => 'cache',
            //these configuratio allow to rename the auth table  
            'itemTable' => 'project_auth_item',
            'assignmentTable' => 'project_auth_assignment',
            'itemChildTable' => 'project_auth_item_child',
            'ruleTable' => 'project_auth_rule',
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
        'db' => $db,
       
       'urlManager' => [
           'class' => 'yii\web\UrlManager',
             
           'enablePrettyUrl' => true,
         //'enableStrictParsing'=>true,
            'showScriptName' => false,
            'rules' => [
                
                '<controller' => '<controller>/index',
            ],
        ],
        
    ],
    'params' => $params,
    
   // 'as beforeAction' => [  //if guest user access site so, redirect to login page.
  //  'class' => 'yii\filters\AccessControl',
  //  'rules' => [
 //       [
  //         'actions' => ['login', 'error'],
  //         'allow' => true,
  //      ],
   //     [
   //        'allow' => true,
   //        'roles' => ['@'],
    //   ],
  //  ],
//],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
