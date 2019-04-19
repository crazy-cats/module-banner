<?php

/*
 * Copyright © 2018 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

namespace CrazyCat\Banner\Model\Source;

use CrazyCat\Banner\Model\Group\Collection as GroupCollection;
use CrazyCat\Framework\App\ObjectManager;

/**
 * @category CrazyCat
 * @package CrazyCat\Banner
 * @author Bruce Z <152416319@qq.com>
 * @link http://crazy-cat.co
 */
class Group extends \CrazyCat\Framework\App\Module\Model\Source\AbstractSource {

    public function __construct( ObjectManager $objectManager )
    {
        foreach ( $objectManager->create( GroupCollection::class ) as $group ) {
            $this->sourceData[sprintf( '%s ( ID: %d )', $group->getData( 'name' ), $group->getId() )] = $group->getId();
        }
    }

}
