<?php
	class Package extends Abstract_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model(array("M_PackageType"=>'mCat','M_Package'=>'mPackage'));
		}

		function index(){
		    $this->setActiveMenu(PACKAGE_MENU,'MANAGE_PACK');
		    $formData['packageType'] = $this->generateSelectItems($this->mPackage->getDataSpecifyField('package_type_id as id,package_type_name as label',TBL_PACKAGE_TYPE));
		    $data['form'] = $this->load->view('admin/package/form_add_package',$formData,true);
		    $data['list'] = $this->mPackage->getAllData(TBL_PACKAGE);
		    $this->html['body'] = $this->load->view(MAIN_CONTAINER,$data,true);
			$this->load->view(ADMIN_LAYOUT,$this->html);

		}


	}