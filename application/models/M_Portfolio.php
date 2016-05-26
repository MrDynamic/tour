<?php

/**
 * Created by PhpStorm.
 * User: ibadboy
 * Date: 5/8/2016 AD
 * Time: 2:58 PM
 */
class M_Portfolio extends Abstract_Model
{

    protected function getTableName()
    {
        return "tbl_portfolio";
    }
    
    protected function generateQuery($criteria = array(), $limit = array())
    {
        // TODO: Implement generateQuery() method.
    }

    public function getRandomData(){
        $this->db->order_by('portfolio_id', 'RANDOM');
        $this->db->limit(12);
        $query = $this->db->get($this->getTableName());
        return $query->result();
    }

}