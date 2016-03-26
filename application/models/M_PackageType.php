<?php

class M_PackageType extends Abstract_Model{
    
    public function getTableName(){
    	return 'tbl_package_type';
    }

    public function __construct()
    {
        parent::__construct();
    }

}