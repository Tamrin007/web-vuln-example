<?php

/**
 * co3k/web-vuln-example
 *
 * Copyright © 2014 Kousuke Ebihara <kousuke@co3k.org> All Rights Reserved
 *
 * This source code is licensed under the Apache License, Version 2.0. You can get a copy of
 * the license is the LICENSE file which is distributed with this code.
 */

$app['debug'] = true;
$app['db_path'] = realpath(__DIR__.'/db').'/example.db';
$app['db'] = function ($app) {
    $config = new \Doctrine\DBAL\Configuration();

    return Doctrine\DBAL\DriverManager::getConnection([
        'driver' => 'pdo_sqlite',
        'path' => $app['db_path'],
    ], $config);
};
