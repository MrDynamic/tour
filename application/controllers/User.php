<?php

class User extends Abstract_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Authen'=>'authen'));
    }
        
    public function userPage(){
        $this->checkSession();
        $this->setContentPage('user/user_page');
        $this->load->view('layout_sidebar',$this->template);
    }
    
    public function editUser(){
       $userData = $this->authen->getDataSpecifyField('firstname,surname,email,phone,address,postalcode,province_id,amphur_id,district_id'
           ,array('user_id'=>$this->session->userdata('user_id')))[0];
       $formData = $this->setRegistData($userData->province_id,$userData->amphur_id);
       $formData['userData'] = $userData;
       $formData['action'] = ACTION_EDIT;
       $this->setContentPage('user/form_register',$formData);
       $this->load->view('layout_sidebar',$this->template);
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
            $data['password'] = md5($this->input->post('password'));
            $data['c_date'] = date('Y-m-d');
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
            $formData['action'] = ACTION_ADD;
            $this->setContentPage('user/form_register',$formData);
            $this->load->view('layout_content',$this->template);
    
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
    
    public function addToCart(){
        $this->log_debug('cart data',print_r($this->input->post(),true));
        $data = array(
            'id'=>$this->input->post('id'),
            'qty'=>$this->input->post('qty'),
            'name'=>$this->input->post('name'),
            'price'=>$this->input->post('price')
        );
        $this->log_debug('data insert',print_r($data,true));
        $this->my_cart->insert($data);
    }
    
    public function viewCart(){
        $this->setContentPage('order/cart_page',null,true);
        $this->load->view('layout_content',$this->template);
    }
    
    public function updateCart(){
        $arrId = $this->input->post('rowId');
        $size = sizeof($arrId);
        $data = array();
        if($size > 0){
            for($i=0;$i<$size;$i++){
              $qty = $this->input->post('qty')[$i];
              if(!empty($qty) && $qty > 0){
                  $data[$i] = array(
                      'rowid'=>$arrId[$i],
                      'qty'=>$this->input->post('qty')[$i]
                  );
              }else{
                  $this->my_cart->remove($arrId[$i]);
              }
            }
        }
        $this->log_debug('cart data',print_r($data,true));
        $this->my_cart->update($data);
        redirect('user/viewCart','refresh');
    }
    
    public function removeCart(){
        $rowId = $this->input->post('rowId');
        $this->my_cart->remove($rowId);
    }
    
    
    function __destruct()
    {}
}
