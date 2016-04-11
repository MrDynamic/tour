<?php

class PackageType extends Abstract_Controller{

    function __construct()
	{
		parent::__construct();
		$this->load->model(array('M_PackageType'=>'mCat','M_Package'=>'package'));
		
	}

    function loadPage($formData=array(),$action=ACTION_ADD){
        $this->setActiveMenu(MENU_MAIN_PACKAGE,MENU_PACKAGE_TYPE);
        $data['list'] = $this->mCat->getAllData();
        $formData['action'] = $action;
        $subView['form'] = $this->load->view('admin/package/form_add_package_type',$formData,true);
        $subView['detail'] = $this->load->view('admin/package/list_package_type',$data,true);
        $this->template['body'] = $this->load->view(MAIN_CONTAINER,$subView,true);
        $this->load->view(ADMIN_LAYOUT,$this->template);
    }

    function refreshPage(){
        redirect('/admin/package/category', 'refresh');;
    }
    function index(){
    	$this->loadPage();
    }

    function saveCategory(){
        try {
            $data = $this->input->post();
            $this->mCat->insert($data);
            $this->refreshPage();
        } catch (Exception $e) {
            $this->log_error($e->getMessage());
        }
    }
    

    function view(){
        try {
            $packageTypeId = $this->uri->segment(4);
            $this->log_debug('Package Type ID',$packageTypeId);
            $data = $this->mCat->getDataSpecifyField('package_type_id,package_type_name,package_type_desc',array('package_type_id'=>$packageTypeId));
            if($data ==null){
                $this->refreshPage();
            }else{
                $editData['editData'] = $data[0];
                $this->loadPage($editData,ACTION_EDIT);
            }

        } catch (Exception $e) {
            $this->log_error($e->getMessage());
        }
    }
    
    function update(){
        try {
            $data = $this->input->post();
            $this->mCat->update($data,array('package_type_id'=>$this->input->post('package_type_id')));
            $this->refreshPage();
        } catch (Exception $e) {
            $this->log_error($e->getMessage());
        }
    }

    function delete(){
        try {
            $packageTypeId = $this->uri->segment(5);
            $this->log_debug('Package Type Id',$packageTypeId);
            $this->mCat->delete(array('package_type_id'=>$packageTypeId));
            $this->refreshPage();
        } catch (Exception $e) {
            $this->log_error($e->getMessage());
        }
    }
    

}

?>