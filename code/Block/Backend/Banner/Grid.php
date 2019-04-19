<?php

/*
 * Copyright © 2019 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

namespace CrazyCat\Banner\Block\Backend\Banner;

use CrazyCat\Banner\Model\Source\Group as SourceGroup;
use CrazyCat\Core\Model\Source\Stage as SourceStage;
use CrazyCat\Core\Model\Source\YesNo as SourceYesNo;

/**
 * @category CrazyCat
 * @package CrazyCat\Banner
 * @author Bruce Z <152416319@qq.com>
 * @link http://crazy-cat.co
 */
class Grid extends \CrazyCat\Core\Block\Backend\AbstractGrid {

    const BOOKMARK_KEY = 'banner_banner';

    /**
     * @return array
     */
    public function getFields()
    {
        return [
                [ 'ids' => true, ],
                [ 'name' => 'id', 'label' => __( 'ID' ), 'sort' => true, 'width' => 100, 'filter' => [ 'type' => 'text', 'condition' => 'eq' ] ],
                [ 'name' => 'name', 'label' => __( 'Banner Name' ), 'sort' => true, 'filter' => [ 'type' => 'text', 'condition' => 'like' ] ],
                [ 'name' => 'identifier', 'label' => __( 'Identifier' ), 'sort' => true, 'filter' => [ 'type' => 'text', 'condition' => 'like' ] ],
                [ 'name' => 'group_id', 'label' => __( 'Banner Group' ), 'sort' => true, 'width' => 200, 'filter' => [ 'type' => 'select', 'source' => SourceGroup::class, 'condition' => 'eq' ] ],
                [ 'name' => 'stage_ids', 'label' => __( 'Stages' ), 'sort' => true, 'width' => 200, 'filter' => [ 'type' => 'select', 'source' => SourceStage::class, 'condition' => 'finset' ] ],
                [ 'name' => 'enabled', 'label' => __( 'Enabled' ), 'sort' => true, 'width' => 130, 'filter' => [ 'type' => 'select', 'source' => SourceYesNo::class, 'condition' => 'eq' ] ],
                [ 'label' => __( 'Actions' ), 'actions' => [
                        [ 'name' => 'edit', 'label' => __( 'Edit' ), 'url' => getUrl( 'banner/banner/edit' ) ],
                        [ 'name' => 'delete', 'label' => __( 'Delete' ), 'confirm' => __( 'Sure you want to remove this item?' ), 'url' => getUrl( 'banner/banner/delete' ) ]
                ] ] ];
    }

    /**
     * @return string
     */
    public function getSourceUrl()
    {
        return getUrl( 'banner/banner/grid' );
    }

}
