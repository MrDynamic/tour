<?php
class M_Province extends Abstract_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    protected function getTableName()
    { return 'tbl_province'; }

    function __destruct()
    {}
}

?>