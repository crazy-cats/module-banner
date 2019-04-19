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
    'template' => '2columns_left',
    'blocks' => [
        'header' => [
            'header-buttons' => [
                'class' => 'CrazyCat\Core\Block\Template',
                'data' => [
                    'template' => 'CrazyCat\Core::header_buttons',
                    'buttons' => [
                        'new' => [ 'label' => __( 'Create New' ), 'action' => [ 'type' => 'redirect', 'params' => [ 'url' => getUrl( 'banner/banner/edit' ) ] ] ]
                    ]
                ]
            ]
        ],
        'main' => [
            'gird-form' => [
                'class' => 'CrazyCat\Banner\Block\Backend\Banner\Grid'
            ]
        ]
    ]
];
