<?php

/**
 * Created by PhpStorm.
 * User: ibadboy
 * Date: 5/14/2016 AD
 * Time: 9:44 PM
 */
class M_RequestTour extends Abstract_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function getTableName()
    {
        return "tbl_request_tour";
    }

    public function getRequestTour($criteria=array(),$limit=array(),$resultIsArray=false){
        $this->db  = $this->generateQuery($criteria,$limit);
        if($resultIsArray){
            $result = $this->db->get()->result_array();
        }else{
            $result = $this->db->get()->result();
        }

        return $result;
    }

    protected function generateQuery($criteria=array(),$limit=array()){
        $criteria['r.delete_flag'] = 'N';
        $this->db->select("r.request_id,r.status_code,s.status_name status,r.phone,r.contact_name,date_format(travel_date,'%d/%m/%y') travel_date,r.request_desc,r.remark");
        $this->db->from('tbl_request_tour r');
        $this->db->join('tbl_status s','r.status_code=s.status_code','inner');
        $this->db->like($criteria);
        $this->db->order_by("r.request_id","desc");
        $this->db = $this->getLimit($this->db,$limit);
        return $this->db;
    }

}