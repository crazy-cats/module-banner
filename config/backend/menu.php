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
    'banner' => [
        'label'      => 'Banners',
        'sort_order' => 130,
        'children'   => [
            'banner/banner/index' => [
                'label'      => 'Banner List',
                'url'        => 'banner/banner/index',
                'sort_order' => 10
            ],
            'banner/group/index'  => [
                'label'      => 'Banner Groups',
                'url'        => 'banner/group/index',
                'sort_order' => 20
            ]
        ]
    ]
];
