<?php

/*
 * Copyright © 2018 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

namespace CrazyCat\Banner\Model\Source;

use CrazyCat\Banner\Model\Banner;

/**
 * @category CrazyCat
 * @package  CrazyCat\Banner
 * @author   Liwei Zeng <zengliwei@163.com>
 * @link     https://crazy-cat.cn
 */
class Type extends \CrazyCat\Framework\App\Component\Module\Model\Source\AbstractSource
{
    public function __construct()
    {
        $this->sourceData[__('Image')] = Banner::TYPE_IMAGE;
        $this->sourceData[__('Video')] = Banner::TYPE_VIDEO;
    }
}
