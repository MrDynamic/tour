<?php
	class M_Package extends Abstract_Model{

		public function getTableName(){
			return 'tbl_package';
		}
		
		public function getPackageList($criteria=array(),$limit=array()){

			$this->db = $this->generatePackageQuery($criteria,$limit);
			return $this->db->get()->result();
		}

		public function generatePackageQuery($criteria=array(),$limit=array()){
			$criteria['p.delete_flag'] = 'N';
			$this->db->select("package_type_name,package_id,package_name,package_desc,price,discount,p.thumbnail,date_format(travel_date,'%d/%m/%Y') travel_date");
			$this->db->from("tbl_package p");
			$this->db->join('tbl_package_type t','p.package_type_id = t.package_type_id','inner');
			$this->db->join('tbl_area a','p.area_id = a.area_id','inner');
			$this->db->where($criteria);
			$this->db->order_by('p.package_id','desc');
			$this->db = $this->getLimit($this->db,$limit);
			return $this->db;
		}

		public function getPackageByPackageId($packageId){
		    $this->db->select("package_type_name,package_id,package_name,package_desc,price,discount,(price - discount) net_price,pdf_path,".$this->getTableName().".thumbnail,date_format(travel_date,'%d/%m/%Y') travel_date");
		    $this->db->from($this->getTableName());
		    $this->db->join('tbl_package_type',$this->getTableName().'.package_type_id = tbl_package_type.package_type_id','left');
		    $this->db->where(array("tbl_package.delete_flag" =>"N","tbl_package.package_id"=>$packageId));
		    return $this->db->get()->result();
		}

		public function countPackage($criteria=array()){
			$this->db = $this->generatePackageQuery($criteria);
			return $this->db->count_all_results();

		}
	}