<?php

class M_PackageType extends Abstract_Model{
    
    public function getTableName(){
    	return 'tbl_package_type';
    }

    public function __construct()
    {
        parent::__construct();
    }

    protected function generateQuery($criteria = array(), $limit = array())
    {
        // TODO: Implement generateQuery() method.
    }
}