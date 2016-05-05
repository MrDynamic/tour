<?php

class M_Order extends Abstract_Model
{

    public function __construct()
    {
        parent::__construct();
    }
    
    public function createOrder($order,$orderDetails){
        $orderId = "";
        $order['u_date'] = date('Y-m-d');
        $this->db->trans_begin();
        $this->db->insert($this->getTableName(),$order);
        $orderId = $this->db->insert_id();
        
        foreach($orderDetails as $orderDetail){
            $orderDetail['order_id'] = $orderId;
            $this->db->insert('tbl_order_details',$orderDetail);
        }
        
        if ($this->db->trans_status() === FALSE)
        {
            $this->db->trans_rollback();
        }
        else
        {
            $this->db->trans_commit();
        }
        return $orderId;
    }
    

    public function getOrderByUser($userId,$limit=array()){        
        $this->db->select("r.order_id,s.status_name status,r.transaction_id,sum(d.price * d.qty) total,concat(r.firstname,' ',r.lastname) contact");
        $this->db->from('tbl_order r');
        $this->db->join('tbl_order_details d','r.order_id = d.order_id','inner');
        $this->db->join('tbl_package p','d.package_id = p.package_id','inner');
        $this->db->join('tbl_status s','r.status=s.status_code','inner');
        $this->db->where(array("r.delete_flag" =>"N","r.user_Id"=>$userId));
        $this->db->group_by("r.order_id");
        $this->db->order_by("r.order_id","desc");
        $this->db = $this->getLimit($this->db,$limit);
        return $this->db->get()->result();
    }
    
    protected function getTableName()
    { return "tbl_order"; }

    function __destruct()
    {}
}

?>