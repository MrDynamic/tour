<?php

class M_Amphur extends Abstract_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    protected function getTableName()
    { return 'tbl_amphur'; }

    function __destruct()
    {}
}

?>