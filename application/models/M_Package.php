<?php
	class M_Package extends Abstract_Model{

		public function getTableName(){
			return 'tbl_package';
		}
		
		public function getPackageList($packageType=''){
		   $this->db->select("package_type_name,package_id,package_name,price,date_format(travel_date,'%d/%m/%Y') travel_date");
		   $this->db->from($this->getTableName());
		   $this->db->join('tbl_package_type',$this->getTableName().'.package_type_id = tbl_package_type.package_type_id','left');
		   $this->db->where($this->getTableName().".delete_flag ='N' ");
		   if($packageType != ''){
		       
		   }
		   return $this->db->get()->result();
		   
		}
	}