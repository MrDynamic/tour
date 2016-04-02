<?php
abstract class Abstract_Model extends CI_Model{

    protected abstract function getTableName();
    
	public function __construct()
    {
        parent::__construct();
    }

    public function insert($data){
        return $this->db->insert($this->getTableName(),$data);
    }

    public function getAllData(){
        return $this->getDataByCriteria($this->getTableName(),array('delete_flag'=>'N'));
    }
    
    public function getDataByCriteria($tableName,$criteria,$limit=""){
    	$query = $this->db->get_where($tableName,$criteria);
    	return $query->result();
    }

    public function getDataSpecifyField($fieldName,$criteria=array(),$limit=''){
        $this->db->select($fieldName);
        return $this->getDataByCriteria($this->getTableName(),$criteria,$limit);

    }

    public function getLastQuery(){
        return $this->db->last_query();
    }

    public function __deconstruct(){
        $this->db->close();
    }

}