<?php

/*
 * Copyright © 2018 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

namespace CrazyCat\Banner\Model\Source;

use CrazyCat\Banner\Model\Banner;

/**
 * @category CrazyCat
 * @package CrazyCat\Banner
 * @author Bruce Z <152416319@qq.com>
 * @link http://crazy-cat.co
 */
class Type extends \CrazyCat\Framework\App\Module\Model\Source\AbstractSource {

    public function __construct()
    {
        $this->sourceData[__( 'Image' )] = Banner::TYPE_IMAGE;
        $this->sourceData[__( 'Video' )] = Banner::TYPE_VIDEO;
    }

}
