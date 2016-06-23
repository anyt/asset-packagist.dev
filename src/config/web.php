<?php

/*
 * asset-packagist.dev
 *
 * @link      asset-packagist.dev
 * @package   asset-packagist.dev
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

$config = require HISITE_VENDOR_DIR . '/hiqdev/config/hisite.php';

if (YII_DEBUG) {
    $config['bootstrap']['debug'] = 'debug';
    $config['modules']['debug'] = [
        'class'      => 'yii\debug\Module',
        'allowedIPs' => $config['params']['debug_allowed_ips'],
    ];
}

return $config;
