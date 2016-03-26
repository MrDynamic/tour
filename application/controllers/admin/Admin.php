<?php
	class Admin extends Abstract_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model(array("M_Menu"=>'mMenu'));
		}

		public  function index(){
			$this->load->view(ADMIN_LAYOUT,$this->html);
			
		}

		public function test(){
			echo $this->mMenu->getTableName();
		}
	}