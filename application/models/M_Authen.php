<?php

class M_Authen extends Abstract_Model
{
    
    public function __construct()
    {
        parent::__construct();
    }

    protected function getTableName()
    { return 'tbl_user';}

    public function checkPassword($username,$password){
        $result = $this->getDataSpecifyField('1',array('username'=>$username,'password'=>md5($password)));
        log_message('debug','check password result >> '.print_r($result,true));
        return sizeof($result)==1;
    }
    
    function __destruct()
    {}

    protected function generateQuery($criteria = array(), $limit = array())
    {
        // TODO: Implement generateQuery() method.
    }
}

?>