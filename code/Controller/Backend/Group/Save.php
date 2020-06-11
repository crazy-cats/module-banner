<?php

/*
 * Copyright © 2020 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

namespace CrazyCat\Banner\Controller\Backend\Group;

use CrazyCat\Banner\Model\Group as Model;
use CrazyCat\Framework\App\Io\Http\Url;

/**
 * @category CrazyCat
 * @package  CrazyCat\Banner
 * @author   Liwei Zeng <zengliwei@163.com>
 * @link     https://crazy-cat.cn
 */
class Save extends \CrazyCat\Framework\App\Component\Module\Controller\Backend\AbstractAction
{
    protected function execute()
    {
        /* @var $model \CrazyCat\Framework\App\Component\Module\Model\AbstractModel */
        $model = $this->objectManager->create(Model::class);

        $data = $this->request->getPost('data');
        if (empty($data[$model->getIdFieldName()])) {
            unset($data[$model->getIdFieldName()]);
        }

        try {
            $id = $model->addData($data)->save()->getId();
            $this->messenger->addSuccess(__('Successfully saved.'));
        } catch (\Exception $e) {
            $id = isset($data[Url::ID_NAME]) ? $data[Url::ID_NAME] : null;
            $this->messenger->addError($e->getMessage());
        }

        if (!$this->request->getPost('to_list') && $id !== null) {
            return $this->redirect('banner/group/edit', [Url::ID_NAME => $id]);
        }
        return $this->redirect('banner/group');
    }
}
