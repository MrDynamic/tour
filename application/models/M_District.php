<?php
class M_District extends Abstract_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    protected function getTableName()
    { return "tbl_district"; }
    

    function __destruct()
    {}

    protected function generateQuery($criteria = array(), $limit = array())
    {
        // TODO: Implement generateQuery() method.
    }
}

?>