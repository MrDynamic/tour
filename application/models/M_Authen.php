<?php

class M_Authen extends Abstract_Model
{
    
    public function __construct()
    {
        parent::__construct();
    }

    protected function getTableName()
    { return 'tbl_user';}

    function __destruct()
    {}
}

?>