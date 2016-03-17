<?php

class Package extends Abstract_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model(array('M_PackageCategory'=>'mCat'));
		
	}

	function index(){
	    
        $this->load->view(ADMIN_LAYOUT,$this->html);

    }

    function loadPageManageType(){
        $this->html['active_menu'] = array('MAIN_MANAGE_PACK','CAT_PACK');
        // // Get Data
        $subView['master'] = $this->load->view('admin/form_add_package','',true);
        $data['list'] = $this->mCat->getAllData(TBL_PACKAGE_TYPE);
        $subView['detail'] = $this->load->view('admin/list_package_type',$data,true);
        $this->html['body'] = $this->load->view('admin/main_package_type',$subView,true);
        $this->load->view(ADMIN_LAYOUT,$this->html);
    }

    function category(){
    	$this->loadPageManageType();
    }

    function saveCategory(){

    	$data = $this->input->post();
        $data['u_date'] = date('Y-m-d');
        $this->mCat->insert(TBL_PACKAGE_TYPE,$data);
        $this->loadPageManageType();
        
        
    }
}

?>