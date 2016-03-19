<?php

class Abstract_Model extends CI_Model{

	public function __construct()
    {
        parent::__construct();
    }

    public function insert($tableName,$data){
        $this->db->insert($tableName,$data);
    }

    public function getAllData($tableName){
        $query =  $this->db->get($tableName,array('delete_flag'=>'N'));
        return $query->result();
    }

    public function getDataByCriteria($tableName,$criteria,$limit=""){
    	$query = $this->db->get_where($tableName,$criteria);
    	return $query->result();
    }

}