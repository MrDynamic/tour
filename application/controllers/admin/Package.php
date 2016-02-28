<?php

class Package extends Abstract_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model(array('PackageCategory_model'=>'cat_model'));
		
	}

	function index(){
        $this->load->view("admin/layout",$this->html);

    }

    function initCategory(){
        $this->html["active_menu"] = array("MAIN_MANAGE_PACK","CAT_PACK");
        // // Get Data
        $subView["body_detail"] = $this->cat_model->getAllData(TBL_PACKAGE_TYPE);
        $this->html["body"] = $this->load->view("admin/form_package_add",$subView,true);
    }

    function category(){
    	$this->initCategory();
    	$this->load->view("admin/layout",$this->html);
    }

    function saveCategory(){

    	$data = array(
                "package_type_name"=> $this->input->post("name"),
                "package_type_desc"=> $this->input->post("desc"),
                "u_date"=>date('Y-m-d')
            );
        // Insert Data
        print_r($this->cat_model->insert(TBL_PACKAGE_TYPE,$data));
        
        // $this->load->view("admin/layout",$this->html);
        
    }
}

?>