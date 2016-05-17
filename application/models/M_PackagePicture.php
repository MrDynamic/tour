<?php

class M_PackagePicture extends \Abstract_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    protected function getTableName()
    {
        return "tbl_package_picture";
    }

    protected function generateQuery($criteria = array(), $limit = array())
    {
        // TODO: Implement generateQuery() method.
    }
}

?>