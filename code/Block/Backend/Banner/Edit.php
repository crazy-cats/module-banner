<?php

/*
 * Copyright © 2019 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

namespace CrazyCat\Banner\Block\Backend\Banner;

use CrazyCat\Banner\Model\Source\Target as SourceTarget;
use CrazyCat\Banner\Model\Source\Type as SourceType;
use CrazyCat\Core\Model\Source\Stage as SourceStage;
use CrazyCat\Core\Model\Source\YesNo as SourceYesNo;

/**
 * @category CrazyCat
 * @package CrazyCat\Banner
 * @author Bruce Z <152416319@qq.com>
 * @link http://crazy-cat.co
 */
class Edit extends \CrazyCat\Core\Block\Backend\AbstractEdit {

    /**
     * @return array
     */
    public function getFields()
    {
        return [
            'general' => [
                'label' => __( 'General' ),
                'fields' => [
                        [ 'name' => 'id', 'label' => __( 'ID' ), 'type' => 'hidden' ],
                        [ 'name' => 'name', 'label' => __( 'Banner Name' ), 'type' => 'text', 'validation' => [ 'required' => true ] ],
                        [ 'name' => 'identifier', 'label' => __( 'Identifier' ), 'type' => 'text', 'validation' => [ 'required' => true ] ],
                        [ 'name' => 'type', 'label' => __( 'Banner Type' ), 'type' => 'select', 'source' => SourceType::class ],
                        [ 'name' => 'url', 'label' => __( 'URL' ), 'type' => 'text' ],
                        [ 'name' => 'target', 'label' => __( 'Target' ), 'type' => 'select', 'source' => SourceTarget::class ],
                        [ 'name' => 'desc', 'label' => __( 'Description' ), 'type' => 'textarea' ],
                        [ 'name' => 'enabled', 'label' => __( 'Enabled' ), 'type' => 'select', 'source' => SourceYesNo::class ],
                        [ 'name' => 'stage_ids', 'label' => __( 'Stage' ), 'type' => 'multiselect', 'source' => SourceStage::class ]
                ]
            ]
        ];
    }

    /**
     * @return string
     */
    public function getActionUrl()
    {
        return getUrl( 'banner/banner/save' );
    }

}
