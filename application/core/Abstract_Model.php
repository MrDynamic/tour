<?php

class Abstract_Model extends CI_Model{

	public function __construct()
    {
        parent::__construct();
    }

    public function insert($tableName,$data){
        try {
            $this->db->insert($tableName,$data);
        } catch (Exception $e) {
            $e->getMessage();
        }
        
    }

    public function getAllData($tableName){
        $query =  $this->db->get($tableName);
        return $query->result();
    }

    public function getDataByCriteria($tableName,$criteria){
    	$query = $this->db->get_where($tableName,)
    }
}