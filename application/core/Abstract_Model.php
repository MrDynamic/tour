<?php
abstract class Abstract_Model extends CI_Model{

    protected abstract function getTableName();
    protected abstract function generateQuery($criteria=array(),$limit=array());

	public function __construct()
    {
        parent::__construct();
    }

    public function insert($data){
        $data['u_date'] = getCurrentDate();
        return $this->db->insert($this->getTableName(),$data);
    }

    public function insertAndGetId($data){
        $data['u_date'] = getCurrentDate();
        $this->db->insert($this->getTableName(),$data);
        return $this->db->insert_id();
    }

    public function update($data,$criteria){
        $data['u_date'] = getCurrentDate();
        return $this->db->update($this->getTableName(),$data,$criteria);
    }
    
    public function deleteByFlag($criteria){
        $data['u_date'] = getCurrentDate();
        return $this->db->update($this->getTableName(),array('delete_flag'=>'Y'),$criteria);
    }

    public function delete($criteria=array()){
        return $this->db->delete($this->getTableName(),$criteria);
    }


    public function getAllData($isDeleteFlag=true){
        return $this->getDataByCriteria(array(),array(),$isDeleteFlag);
    }
    
    public function getDataByCriteria($criteria,$limit=array(),$isDeleteFlag=true){
        if($isDeleteFlag){
            $criteria['delete_flag'] = 'N';
        }
        $this->db = $this->getLimit($this->db,$limit);
        $query = $this->db->get_where($this->getTableName(),$criteria);
    	return $query->result();
    }

    public function getDataByCriteriaWithOrderBy($criteria,$limit=array(),$isDeleteFlag=true,$orderBy=array()){
        if($isDeleteFlag){
            $criteria['delete_flag'] = 'N';
        }
        $this->db = $this->getLimit($this->db,$limit);
        $this->db->order_by($orderBy[0],$orderBy[1]);
        $query = $this->db->get_where($this->getTableName(),$criteria);
        return $query->result();
    }

    public function getDataSpecifyField($fieldName,$criteria=array(),$limit=array()){
        $this->db->select($fieldName);
        return $this->getDataByCriteria($criteria,$limit);

    }

    public function getDataResultArray($fieldName,$criteria=array(),$limit=array(),$isDeleteFlag=true){
        $this->db->select($fieldName);
        if($isDeleteFlag){
            $criteria['delete_flag'] = 'N';
        }
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
    
    public function countAllWithCriteria($criteria=array(),$isDeleteFlag=true){
        $this->db->from($this->getTableName());

        if($isDeleteFlag){
            $criteria['delete_flag'] = 'N';
        }
        $this->db->where($criteria);
        return $this->db->count_all_results();
    }

    public function countByCriteria($criteria=array()){
        $this->db = $this->generateQuery($criteria);
        return $this->db->count_all_results();
    }

    public function __deconstruct(){
        $this->db->close();
    }
    

}