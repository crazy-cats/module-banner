<?php

/*
 * Copyright © 2019 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

namespace CrazyCat\Banner\Model;

/**
 * @category CrazyCat
 * @package CrazyCat\Banner
 * @author Bruce Z <152416319@qq.com>
 * @link http://crazy-cat.co
 */
class Banner extends \CrazyCat\Framework\App\Module\Model\AbstractModel {

    /**
     * @return void
     */
    protected function construct()
    {
        $this->init( 'banner', 'banner' );
    }

    /**
     * @return void
     */
    protected function beforeSave()
    {
        parent::beforeSave();

        if ( isset( $this->data['stage_ids'] ) && is_array( $this->data['stage_ids'] ) ) {
            $this->data['stage_ids'] = implode( ',', $this->data['stage_ids'] );
        }
    }

    /**
     * @return void
     */
    protected function afterLoad()
    {
        $this->data['stage_ids'] = explode( ',', $this->data['stage_ids'] );

        parent::afterLoad();
    }

}
