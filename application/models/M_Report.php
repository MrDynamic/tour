<?php

/**
 * Created by PhpStorm.
 * User: ibadboy
 * Date: 5/20/2016 AD
 * Time: 8:05 AM
 */
class M_Report extends Abstract_Model
{

    protected function getTableName()
    {
        // TODO: Implement getTableName() method.
    }

    protected function generateQuery($criteria = array(), $limit = array())
    {
        $criteria['r.status'] = STATUS_SUCCESS;
        $this->db->select("d.order_id,concat(r.firstname,' ',r.lastname) contact,r.transaction_id,d.qty,d.price");
        $this->db->from('tbl_order_details d');
        $this->db->join('tbl_order r','d.order_id = r.order_id','inner');
        $this->db->like($criteria);
        $this->db->order_by("r.order_id","asc");
        $this->db = $this->getLimit($this->db,$limit);
        return $this->db;
    }

    public function generateReportByCriteria($criteria=array()){
        $this->db = $this->generateQuery($criteria);
        $result = $this->db->get()->result_array();
        return $result;
    }
    
    public function reportSumaryArea($year=""){
        $this->db->select(" r.order_id,r.status,r.c_date,d.package_id")
        ->from("tbl_order r")
        ->join("tbl_order_details d","d.order_id=r.order_id","inner")
        ->where(array("r.status"=>STATUS_SUCCESS,"r.c_date"=>$year));
        $subquery = $this->db->get_compile_select();
        
        $this->db->get_reset_select();
        $query = $this->db
                    ->select("a.area_id,a.area_name,count(r.order_id)")
                    ->from("tbl_area a")
                    ->join("tbl_package p","a.area_id=p.area_id","left")
                    ->join("($subquery) r","p.package_id = r.package_id","left")
                    ->group_by("a.area_id,a.area_name");
        return $query->result();

    }
}