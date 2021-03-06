<?php

class PackageType extends Admin_Controller{

    function __construct()
	{
		parent::__construct();
		$this->load->model(array('M_PackageType'=>'mCat','M_Package'=>'package'));
		
	}

    function index(){
        $page = empty($this->uri->segment(4))?1:$this->uri->segment(4);
        $this->loadPage(array(),ACTION_ADD,$page);
    }

    function loadPage($formData=array(),$action=ACTION_ADD,$page=1){
        $this->setActiveMenu(MENU_MAIN_PACKAGE,MENU_PACKAGE_TYPE);

        $formData['action'] = $action;
        $subView['form'] = $this->load->view('admin/package/form_add_package_type',$formData,true);

        $this->load->library('my_pagination');
        $pagingConfig = $this->my_pagination->initAdmin('admin/packageType/index',$this->mCat->countAllWithCriteria());
        $limit = array($pagingConfig['per_page'],(($page-1) * $pagingConfig['per_page']));
        $data["paginationData"]   = $this->pagination;
        $data['list'] = $this->mCat->getDataByCriteria(array(),$limit);

        $subView['detail'] = $this->load->view('admin/package/list_package_type',$data,true);
        $this->loadTemplate($subView);
    }

    function refreshPage(){
        redirect('/admin/package/category', 'refresh');;
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