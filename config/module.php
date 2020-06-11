<?php

/*
 * Copyright © 2020 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

/**
 * @category CrazyCat
 * @package  CrazyCat\Banner
 * @author   Liwei Zeng <zengliwei@163.com>
 * @link     https://crazy-cat.cn
 */
return [
    'namespace' => 'CrazyCat\Banner',
    'depends'   => [
        'CrazyCat\Base'
    ],
    'routes'    => [
        'backend' => 'banner'
    ],
    'setup'     => [
        'CrazyCat\Banner\Setup\Install'
    ]
];
