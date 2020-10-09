<?php

/*
 * Copyright © 2020 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

namespace CrazyCat\Banner\Block\Backend\Banner;

use CrazyCat\Banner\Model\Banner as Model;
use CrazyCat\Banner\Model\Source\Group as SourceGroup;
use CrazyCat\Banner\Model\Source\Target as SourceTarget;
use CrazyCat\Banner\Model\Source\Type as SourceType;
use CrazyCat\Base\Model\Source\Stage as SourceStage;
use CrazyCat\Base\Model\Source\YesNo as SourceYesNo;

/**
 * @category CrazyCat
 * @package  CrazyCat\Banner
 * @author   Liwei Zeng <zengliwei@163.com>
 * @link     https://crazy-cat.cn
 */
class Edit extends \CrazyCat\Base\Block\Backend\AbstractEdit
{
    /**
     * @return array
     * @throws \ReflectionException
     */
    public function getFields()
    {
        return [
            'general' => [
                'label'  => __('General'),
                'fields' => [
                    [
                        'name'  => 'id',
                        'label' => __('ID'),
                        'type'  => 'hidden'
                    ],
                    [
                        'name'       => 'name',
                        'label'      => __('Banner Name'),
                        'type'       => 'text',
                        'validation' => ['required' => true]
                    ],
                    [
                        'name'       => 'identifier',
                        'label'      => __('Identifier'),
                        'type'       => 'text',
                        'validation' => ['required' => true]
                    ],
                    [
                        'name'   => 'type',
                        'label'  => __('Banner Type'),
                        'type'   => 'select',
                        'source' => SourceType::class
                    ],
                    [
                        'name'         => 'content',
                        'label'        => __('File'),
                        'type'         => 'image',
                        'media_folder' => Model::MEDIA_FOLDER
                    ],
                    [
                        'name'   => 'group_id',
                        'label'  => __('Banner Group'),
                        'type'   => 'select',
                        'source' => SourceGroup::class
                    ],
                    [
                        'name'  => 'url',
                        'label' => __('URL'),
                        'type'  => 'text'
                    ],
                    [
                        'name'   => 'target',
                        'label'  => __('Target'),
                        'type'   => 'select',
                        'source' => SourceTarget::class
                    ],
                    [
                        'name'  => 'desc',
                        'label' => __('Description'),
                        'type'  => 'textarea'
                    ],
                    [
                        'name'   => 'enabled',
                        'label'  => __('Enabled'),
                        'type'   => 'select',
                        'source' => SourceYesNo::class
                    ],
                    [
                        'name'   => 'stage_ids',
                        'label'  => __('Stage'),
                        'type'   => 'multiselect',
                        'source' => SourceStage::class
                    ]
                ]
            ]
        ];
    }

    /**
     * @return string
     * @throws \Exception
     */
    public function getActionUrl()
    {
        return $this->getUrl('banner/banner/save');
    }
}
