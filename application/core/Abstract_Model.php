<?php
abstract class Abstract_Model extends CI_Model{

    protected abstract function getTableName();
    
	public function __construct()
    {
        parent::__construct();
    }

    public function insert($data){
        $data['u_date'] = date('Y-m-d');
        return $this->db->insert($this->getTableName(),$data);
    }

    public function update($data,$criteria){
        $data['u_date'] = date('Y-m-d');
        return $this->db->update($this->getTableName(),$data,$criteria);
    }
    
    public function delete($criteria){
        $data['u_date'] = date('Y-m-d');
        return $this->db->update($this->getTableName(),array('delete_flag'=>'Y'),$criteria);
    }
    
    public function getAllData(){
        return $this->getDataByCriteria(array('delete_flag'=>'N'));
    }
    
    public function getDataByCriteria($criteria,$limit=""){
        $criteria['delete_flag'] = 'N';
    	$query = $this->db->get_where($this->getTableName(),$criteria);
    	return $query->result();
    }

    public function getDataSpecifyField($fieldName,$criteria=array(),$limit=''){
        $this->db->select($fieldName);
        return $this->getDataByCriteria($criteria,$limit);

    }

    public function getDataResultArray($fieldName,$criteria=array(),$limit=''){
        $this->db->select($fieldName);
        $criteria['delete_flag'] = 'N';
        $query = $this->db->get_where($this->getTableName(),$criteria);
        return $query->result_array();
    }
    
    public function getLastQuery(){
        return $this->db->last_query();
    }

    protected function getLimit($db,$limit=array()){
        if(sizeof($limit) == 2){
            if($limit[0] == 0){
               $db->limit($limit[1]);
            }else{
                $db->limit($limit[0],$limit[1]);
            }
        }
        return $db;
    }
    
    public function countAllWithCriteria($criteria=array()){
        $this->db->from($this->getTableName());
        $criteria['delete_flag'] = 'N';
        $this->db->where($criteria);
        return $this->db->count_all_results();
    }
    
    public function __deconstruct(){
        $this->db->close();
    }
    

}