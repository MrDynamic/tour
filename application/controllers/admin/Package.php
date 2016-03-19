<?php
	class Package extends Abstract_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model(array("M_PackageType"=>'mCat','M_Package'=>'mPackage'));
		}

		function index(){
		    $this->setActiveMenu(PACKAGE_MENU,'MANAGE_PACK');
		    $data['list'] = $this->mPackage->getAllData(TBL_PACKAGE);
		    $this->html['body'] = $this->load->view(MAIN_CONTAINER,'',true);
			$this->load->view(ADMIN_LAYOUT,$this->html);

		}
	}