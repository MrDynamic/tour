<?php

class User extends Main_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Authen'=>'authen','M_Order'=>'order'));
    }
        
    public function userPage(){
        $this->setContentWithSidePage('user/user_page');
        $this->loadLayoutSidebar($this->template);
    }
    
    public function editUser(){
       $userData = $this->authen->getDataSpecifyField('firstname,surname,email,phone,address,postalcode,province_id,amphur_id,district_id'
           ,array('user_id'=>$this->session->userdata('user_id')))[0];
       $formData = $this->setRegistData($userData->province_id,$userData->amphur_id);
       $formData['userData'] = $userData;
       $formData['actionType'] = ACTION_EDIT;
       $this->setContentWithSidePage('user/form_register',$formData);
       $this->loadLayoutSidebar($this->template);
    }
    
    public function submitEditUser(){
        try {
            $data = $this->input->post();
            $data['u_date'] = date('Y-m-d');
            $this->authen->update($data,array('user_id'=>$this->session->userdata('user_id')));
            $this->session->set_userdata($data);
            redirect('user/userPage','refresh');
        
        } catch (Exception $e) {
            $this->log_error($e->getMessage());
        }
    }
    
    public function createUser(){
        try {
            $data = $this->input->post();
            $data['password'] = md5($this->input->post('password1'));
            $data['c_date'] = date('Y-m-d');
            unset($data['password1'],$data['passwordConfirm']);
            $this->log_debug('user data',print_r($data,true));
            $this->authen->insert($data);
            $this->session->set_userdata($data);
            redirect('','refresh');
    
        } catch (Exception $e) {
            $this->log_error($e->getMessage());
        }
    }
    
    public function setRegistData($provId='',$amphurId=''){
        $formData = array();
        $formData['provinceItem'] = $this->generateSelectItems($this->getAllProvince());
        if($provId != ''){
            $formData['amphurItem'] = $this->generateSelectItems($this->getAmphurByProvinceId($provId));
        }else{
            $formData['amphurItem'] = $this->generateSelectItems(array());
        }
        
        if($amphurId !=''){
            $formData['districtItem'] = $this->generateSelectItems($this->getDistrictByAmphurId($amphurId));
        }else{
            $formData['districtItem'] = $this->generateSelectItems(array());
        }
        return $formData;
    }
    
    public function register(){
        try {
            $this->template['section_name'] = 'สมัครสมาชิก';
            $formData = $this->setRegistData();
            $formData['actionType'] = ACTION_ADD;
            $this->setContentPage('user/form_register',$formData);
            $this->loadLayoutContent($this->template);
    
        } catch (Exception $e) {
            $this->log_error($e->getMessage());
        }
    }
    
    public function generateAmphur(){
        $response = '';
        $this->log_debug('post data',print_r($this->input->post(),true));
        $provinceId = $this->input->post('provinceId');
        $amphurData = $this->generateSelectItems($this->getAmphurByProvinceId($provinceId));
        $this->log_debug('amphur data',print_r($amphurData,true));
        foreach($amphurData as $key=>$val){
            $response .="<option value='$key'>".trim($val)."</option>";
        }
        $this->log_debug('response',$response);
        echo $response;
    
    }
    
    public function generateDistrict(){
        $response='';
        $amphurId = $this->input->post('amphurId');
        $districtData = $this->generateSelectItems($this->getDistrictByAmphurId($amphurId));
        foreach ($districtData as $key=>$val){
            $response .="<option value='$key'>".trim($val)."</option>";
        }
        echo $response;
    }
    
    public function orderListPage(){
        $page = empty($this->uri->segment(3))?1:$this->uri->segment(3);
        
        $this->load->library(array('pagination','mypagination'));
        $userId = $this->session->userdata("user_id");
        $pagingConfig = $this->mypagination->init('user/orderListPage',$this->order->countAllWithCriteria(array('user_id'=>$userId)));
        $limit = array($pagingConfig['per_page'],(($page-1) * $pagingConfig['per_page']));

        $data['orderData'] = $this->order->getOrderByCriteria(array("r.user_id"=>$userId),$limit);
        $data["paginationData"]   = $this->pagination;
        $this->setContentWithSidePage('order/user_order_page',$data);
        $this->loadLayoutSidebar($this->template);
    }
    
    public function changePasswordPage(){
        $message['message'] = $this->session->flashdata('message');
        $this->setContentWithSidePage('user/change_password_page',$message);
        $this->loadLayoutSidebar($this->template);
    }
    
    public function changePassword(){
        if($this->authen->checkPassword($this->session->userdata('username'),$this->input->post('oldPassword'))){
            
        }else{
            $this->session->set_flashdata('message','รหัสผ่านเดิมไม่ถูกต้อง');
            redirect('user/changePasswordPage','refresh');
        }
        
    }
    
    function __destruct()
    {}
}
