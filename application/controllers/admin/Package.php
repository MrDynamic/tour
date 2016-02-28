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

    function category(){
    	$this->html["body"] = $this->load->view("admin/form_package_add",'',true);
    	$this->html["active_menu"] = array("MAIN_MANAGE_PACK","CAT_PACK");
    	$this->load->view("admin/layout",$this->html);
    }

    function saveCategory(){

    	$data = array(
                "package_type_name"=> $this->input->post("name"),
                "package_type_desc"=> $this->input->post("desc"),
                "u_date"=>date('Y-m-d')
            );
        echo $this->cat_model->insert($data);
        // print_r($data);
    }
}

?>