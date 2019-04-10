<?php

/*
 * Copyright © 2019 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

namespace CrazyCat\Banner\Setup;

use CrazyCat\Framework\App\Db\MySql;

/**
 * @category CrazyCat
 * @package CrazyCat\Banner
 * @author Bruce Z <152416319@qq.com>
 * @link http://crazy-cat.co
 */
class Upgrade extends \CrazyCat\Framework\App\Module\Setup\AbstractUpgrade {

    private function createBannerMainTable()
    {
        $columns = [
                [ 'name' => 'id', 'type' => MySql::COL_TYPE_INT, 'unsign' => true, 'null' => false, 'auto_increment' => true ],
                [ 'name' => 'name', 'type' => MySql::COL_TYPE_VARCHAR, 'length' => 255, 'null' => false ],
                [ 'name' => 'identifier', 'type' => MySql::COL_TYPE_VARCHAR, 'length' => 32, 'null' => false ],
                [ 'name' => 'group_id', 'type' => MySql::COL_TYPE_INT, 'unsign' => true, 'null' => false, 'default' => 0 ],
                [ 'name' => 'enabled', 'type' => MySql::COL_TYPE_TINYINT, 'length' => 1, 'unsign' => true, 'null' => false, 'default' => 0 ],
                [ 'name' => 'stage_ids', 'type' => MySql::COL_TYPE_VARCHAR, 'length' => 32, 'null' => false, 'default' => '0' ],
                [ 'name' => 'sort_order', 'type' => MySql::COL_TYPE_INT, 'length' => 8, 'unsign' => true, 'default' => 0 ]
        ];
        $indexes = [
                [ 'columns' => [ 'identifier' ], 'type' => MySql::INDEX_UNIQUE ],
                [ 'columns' => [ 'enabled' ], 'type' => MySql::INDEX_NORMAL ],
                [ 'columns' => [ 'stage_ids' ], 'type' => MySql::INDEX_NORMAL ],
                [ 'columns' => [ 'sort_order' ], 'type' => MySql::INDEX_NORMAL ]
        ];
        $this->conn->createTable( 'banner', $columns, $indexes );
    }

    private function createBannerLangTable()
    {
        $columns = [
                [ 'name' => 'id', 'type' => MySql::COL_TYPE_INT, 'unsign' => true, 'null' => false ],
                [ 'name' => 'lang', 'type' => MySql::COL_TYPE_VARCHAR, 'length' => 8, 'null' => false ],
                [ 'name' => 'name', 'type' => MySql::COL_TYPE_VARCHAR, 'length' => 256, 'null' => false ],
                [ 'name' => 'type', 'type' => MySql::COL_TYPE_INT, 'unsign' => true, 'null' => false ],
                [ 'name' => 'content', 'type' => MySql::COL_TYPE_VARCHAR, 'length' => 256, 'null' => false ],
                [ 'name' => 'url', 'type' => MySql::COL_TYPE_VARCHAR, 'length' => 256 ],
                [ 'name' => 'target', 'type' => MySql::COL_TYPE_VARCHAR, 'length' => 8, 'null' => false ],
                [ 'name' => 'desc', 'type' => MySql::COL_TYPE_TEXT ]
        ];
        $indexes = [
                [ 'columns' => [ 'id', 'lang' ], 'type' => MySql::INDEX_UNIQUE ]
        ];
        $this->conn->createTable( 'banner_lang', $columns, $indexes );
    }

    private function createBannerGroupMainTable()
    {
        $columns = [
                [ 'name' => 'id', 'type' => MySql::COL_TYPE_INT, 'unsign' => true, 'null' => false, 'auto_increment' => true ],
                [ 'name' => 'name', 'type' => MySql::COL_TYPE_VARCHAR, 'length' => 255, 'null' => false ],
                [ 'name' => 'identifier', 'type' => MySql::COL_TYPE_VARCHAR, 'length' => 32, 'null' => false ],
                [ 'name' => 'enabled', 'type' => MySql::COL_TYPE_TINYINT, 'length' => 1, 'unsign' => true, 'null' => false, 'default' => 0 ],
                [ 'name' => 'stage_ids', 'type' => MySql::COL_TYPE_VARCHAR, 'length' => 32, 'null' => false, 'default' => '0' ]
        ];
        $indexes = [
                [ 'columns' => [ 'identifier' ], 'type' => MySql::INDEX_UNIQUE ],
                [ 'columns' => [ 'enabled' ], 'type' => MySql::INDEX_NORMAL ],
                [ 'columns' => [ 'stage_ids' ], 'type' => MySql::INDEX_NORMAL ]
        ];
        $this->conn->createTable( 'banner_group', $columns, $indexes );
    }

    /**
     * @param string|null $currentVersion
     */
    public function execute( $currentVersion )
    {
        if ( $currentVersion === null ) {
            $this->createBannerMainTable();
            $this->createBannerLangTable();
            $this->createBannerGroupMainTable();
        }
    }

}
