<?php
abstract class Abstract_Model extends CI_Model{

    protected abstract function getTableName();
    
	public function __construct()
    {
        parent::__construct();
    }

    public function insert($tableName,$data){
        return $this->db->insert($tableName,$data);
    }

    public function getAllData($tableName){
        return $this->getDataByCriteria($tableName,array('delete_flag'=>'N'));
    }

    public function getDataByCriteria($tableName,$criteria,$limit=""){
    	$query = $this->db->get_where($tableName,$criteria);
    	return $query->result();
    }

    public function getDataSpecifyField($fieldName,$tableName,$criteria=array(),$limit=''){
        $this->db->select($fieldName);
        return $this->getDataByCriteria($tableName,$criteria,$limit);

    }

    public function getLastQuery(){
        return $this->db->last_query();
    }

    public function __deconstruct(){
        $this->db->close();
    }

}