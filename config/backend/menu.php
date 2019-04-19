<?php

/*
 * Copyright © 2019 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

/**
 * @category CrazyCat
 * @package CrazyCat\Banner
 * @author Bruce Z <152416319@qq.com>
 * @link http://crazy-cat.co
 */
return [
    'banner' => [
        'label' => 'Banners',
        'sort_order' => 130,
        'children' => [
            'banner/banner/index' => [
                'label' => 'Banner List',
                'url' => 'banner/banner/index',
                'sort_order' => 10
            ],
            'banner/group/index' => [
                'label' => 'Banner Groups',
                'url' => 'banner/group/index',
                'sort_order' => 20
            ]
        ]
    ]
];
