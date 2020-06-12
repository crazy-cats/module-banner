<?php

/*
 * Copyright © 2020 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

namespace CrazyCat\Banner\Model;

/**
 * @category CrazyCat
 * @package  CrazyCat\Banner
 * @author   Liwei Zeng <zengliwei@163.com>
 * @link     https://crazy-cat.cn
 */
class Banner extends \CrazyCat\Base\Model\AbstractLangModel
{
    public const TYPE_IMAGE = 1;
    public const TYPE_VIDEO = 2;

    public const MEDIA_FOLDER = 'banner';

    /**
     * @return void
     * @throws \ReflectionException
     */
    protected function construct()
    {
        $this->init('banner', 'banner');
    }

    /**
     * @return void
     * @throws \ReflectionException
     */
    protected function beforeSave()
    {
        parent::beforeSave();

        if (isset($this->data['stage_ids']) && is_array($this->data['stage_ids'])) {
            $this->data['stage_ids'] = implode(',', $this->data['stage_ids']);
        }
    }

    /**
     * @return void
     * @throws \ReflectionException
     */
    protected function afterLoad()
    {
        $this->data['stage_ids'] = explode(',', $this->data['stage_ids']);

        parent::afterLoad();
    }
}
