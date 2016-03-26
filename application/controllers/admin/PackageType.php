<?php

class PackageType extends Abstract_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model(array('M_PackageType'=>'mCat','M_Package'=>'package'));
		
	}

    function loadPageManageType(){
        $this->setActiveMenu(PACKAGE_MENU,'CAT_PACK');
        $data['list'] = $this->mCat->getAllData(TBL_PACKAGE_TYPE);
        $subView['form'] = $this->load->view('admin/package/form_add_package_type','',true);
        $subView['detail'] = $this->load->view('admin/package/list_package_type',$data,true);
        $this->html['body'] = $this->load->view(MAIN_CONTAINER,$subView,true);
        $this->load->view(ADMIN_LAYOUT,$this->html);
    }

    function index(){
    	$this->loadPageManageType();
    }

    function saveCategory(){
    	$data = $this->input->post();
        $data['u_date'] = date('Y-m-d');
        $this->mCat->insert(TBL_PACKAGE_TYPE,$data);
        redirect('/admin/package/category', 'refresh');
    }

    function edit(){
        
    }


}

?>