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
}