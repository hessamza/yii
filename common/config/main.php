<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',

    'components' => [
        'httpclient' => [
            'class' =>'understeam\httpclient\Client',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
