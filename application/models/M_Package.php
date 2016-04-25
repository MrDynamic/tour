<?php
	class M_Package extends Abstract_Model{

		public function getTableName(){
			return 'tbl_package';
		}
		
		public function getPackageList($packageType=''){
		   $this->db->select("package_type_name,package_id,package_name,package_desc,price,discount,".$this->getTableName().".thumbnail,date_format(travel_date,'%d/%m/%Y') travel_date");
		   $this->db->from($this->getTableName());
		   $this->db->join('tbl_package_type',$this->getTableName().'.package_type_id = tbl_package_type.package_type_id','left');
		   $this->db->where($this->getTableName().".delete_flag ='N' ");
		   if($packageType != ''){
		       
		   }
		   return $this->db->get()->result();
		}
		
		public function getPackageByPackageId($packageId){
		    $this->db->select("package_type_name,package_id,package_name,package_desc,price,discount,(price - discount) net_price,pdf_path,".$this->getTableName().".thumbnail,date_format(travel_date,'%d/%m/%Y') travel_date");
		    $this->db->from($this->getTableName());
		    $this->db->join('tbl_package_type',$this->getTableName().'.package_type_id = tbl_package_type.package_type_id','left');
		    $this->db->where(array("tbl_package.delete_flag" =>"N","tbl_package.package_id"=>$packageId));
		    return $this->db->get()->result();
		}
	}