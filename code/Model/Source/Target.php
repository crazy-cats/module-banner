<?php

/*
 * Copyright © 2018 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

namespace CrazyCat\Banner\Model\Source;

/**
 * @category CrazyCat
 * @package  CrazyCat\Banner
 * @author   Liwei Zeng <zengliwei@163.com>
 * @link     https://crazy-cat.cn
 */
class Target extends \CrazyCat\Framework\App\Component\Module\Model\Source\AbstractSource
{
    public function __construct()
    {
        $this->sourceData['_self'] = '_self';
        $this->sourceData['_parent'] = '_parent';
        $this->sourceData['_blank'] = '_blank';
    }
}
