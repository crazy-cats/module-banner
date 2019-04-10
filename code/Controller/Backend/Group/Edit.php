<?php

/*
 * Copyright © 2019 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

namespace CrazyCat\Banner\Controller\Backend\Group;

use CrazyCat\Banner\Model\Group as Model;

/**
 * @category CrazyCat
 * @package CrazyCat\Banner
 * @author Bruce Z <152416319@qq.com>
 * @link http://crazy-cat.co
 */
class Edit extends \CrazyCat\Framework\App\Module\Controller\Backend\AbstractAction {

    protected function run()
    {
        /* @var $model \CrazyCat\Framework\App\Module\Model\AbstractModel */
        $model = $this->objectManager->create( Model::class );

        if ( ( $id = $this->request->getParam( 'id' ) ) ) {
            $model->load( $id );
            if ( !$model->getId() ) {
                $this->messenger->addError( __( 'Item with specified ID does not exist.' ) );
                return $this->redirect( 'banner/group' );
            }
        }

        $this->registry->register( 'current_model', $model );

        $pageTitle = $model->getId() ?
                __( 'Edit Banner Group `%1` [ ID: %2 ]', [ $model->getData( 'name' ), $model->getId() ] ) :
                __( 'Create Banner Group' );

        $this->setPageTitle( $pageTitle )->render();
    }

}
