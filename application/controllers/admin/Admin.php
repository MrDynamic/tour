<?php
	class Admin extends Admin_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model(array("M_Menu"=>'mMenu'));
		}

		public function index(){
			$this->load->view(ADMIN_LAYOUT,$this->template);
			
		}

		public function test(){
// 			$filed = 'menu_id,menu_type,menu_name,menu_url,is_main';
// 			$result = $this->mMenu->getDataSpecifyField($filed,$this->mMenu->getTableName(),array('delete_flag'=>'N'));
// 			print_r($result);

		    $result = $this->mMenu->getAllDataWithTable();
		    print_r($result);
		}
	}