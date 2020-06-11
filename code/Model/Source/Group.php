<?php

/*
 * Copyright © 2018 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

namespace CrazyCat\Banner\Model\Source;

use CrazyCat\Banner\Model\Group\Collection as GroupCollection;

/**
 * @category CrazyCat
 * @package  CrazyCat\Banner
 * @author   Liwei Zeng <zengliwei@163.com>
 * @link     https://crazy-cat.cn
 */
class Group extends \CrazyCat\Framework\App\Component\Module\Model\Source\AbstractSource
{
    public function __construct(
        \CrazyCat\Framework\App\ObjectManager $objectManager
    ) {
        foreach ($objectManager->create(GroupCollection::class) as $group) {
            $this->sourceData[sprintf('%s ( ID: %d )', $group->getData('name'), $group->getId())] = $group->getId();
        }
    }
}
