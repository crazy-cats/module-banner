<?php

/*
 * Copyright © 2019 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

namespace CrazyCat\Banner\Controller\Backend\Banner;

use CrazyCat\Banner\Block\Backend\Banner\Grid as GridBlock;
use CrazyCat\Banner\Model\Banner\Collection;
use CrazyCat\Banner\Model\Source\Group as SourceGroup;
use CrazyCat\Core\Model\Source\Stage as SourceStage;
use CrazyCat\Core\Model\Source\YesNo as SourceYesNo;

/**
 * @category CrazyCat
 * @package CrazyCat\Banner
 * @author Bruce Z <152416319@qq.com>
 * @link http://crazy-cat.co
 */
class Grid extends \CrazyCat\Core\Controller\Backend\AbstractGridAction {

    protected function construct()
    {
        $this->init( Collection::class, GridBlock::class );
    }

    /**
     * @param array $collectionData
     * @return array
     */
    protected function processData( $collectionData )
    {
        $sourceStage = $this->objectManager->get( SourceStage::class );
        $sourceYesNo = $this->objectManager->get( SourceYesNo::class );
        $sourceGroup = $this->objectManager->get( SourceGroup::class );
        foreach ( $collectionData['items'] as &$item ) {
            $item['group_id'] = $sourceGroup->getLabel( $item['group_id'] );
            $item['enabled'] = $sourceYesNo->getLabel( $item['enabled'] );
            $item['stage_ids'] = $sourceStage->getLabel( $item['stage_ids'] );
        }
        return $collectionData;
    }

}
