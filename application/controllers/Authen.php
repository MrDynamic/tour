<?php

class Authen extends Abstract_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Authen'=>'authen'));
    }

    public function userPage(){
        $this->template['menu_type'] = CONTENT_TYPE;
        $this->template['nav_menu'] = $this->load->view('nav_menu',$this->template,true);
        $this->template['sidebar'] = $this->load->view('sidebar_user',null,true);
        $this->template['content'] = $this->load->view('view_profile',null,true);
        $this->load->view('layout_sidebar',$this->template);    
        
    }
    
    public function submitLogin(){
        try {
            $this->log_debug('login data',print_r($this->input->post(),true));
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            if(empty($username) || empty($password)){
                $this->session->set_flashdata('message', 'Username or Password is not null');
                redirect('authen/login','refresh');
            }else{
                $userData = $this->authen->getDataByCriteria(array('username'=>$this->input->post('username'),'password'=>$this->input->post('password')));
                if(isset($userData) && !empty($userData)){
                    $this->session->set_userdata($userData);
                    redirect('','refresh');
                }else{
                    $this->session->set_flashdata('message','Authentication failed');
                    redirect('authen/login','refresh');
                }
            }
            
        } catch (Exception $e) {
            $this->log_error($e->getMessage());
        }    
    }
    
    public function setContentPage($contentPage,$contentData=''){
        $this->template['menu_type'] = CONTENT_TYPE;
        $this->template['nav_menu'] = $this->load->view('nav_menu',$this->template,true);
        $this->template['content'] = $this->load->view($contentPage,$contentData,true);
    }
    
    public function login(){
        $this->log_debug("Start");
        $message['message'] = $this->session->flashdata('message');
        $this->setContentPage('login',$message,true);
        $this->load->view('layout_content',$this->template);
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
    
    public function register(){
        try {
            
            $this->template['menu_type'] = CONTENT_TYPE;
            $this->template['section_name'] = 'สมัครสมาชิก';
            $this->template['nav_menu'] = $this->load->view('nav_menu',$this->template,true);
            $formData = array();
            $formData['provinceItem'] = $this->generateSelectItems($this->getAllProvince());
            $formData['amphurItem'] = $this->generateSelectItems(array());
            $formData['districtItem'] = $this->generateSelectItems(array());
            $this->template['content'] = $this->load->view('form_register',$formData,true);
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
    
    function __destruct()
    {
        
    }
}

?>