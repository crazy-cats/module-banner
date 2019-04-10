<?php

/*
 * Copyright © 2019 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

use CrazyCat\Framework\App\Setup\Component;

/**
 * @category CrazyCat
 * @package CrazyCat\Banner
 * @author Bruce Z <152416319@qq.com>
 * @link http://crazy-cat.co
 */
Component::getInstance()->register( 'CrazyCat\Banner', Component::TYPE_MODULE, __DIR__ );
