<?php

class Authen extends Main_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Authen'=>'authen'));
    }

    public function submitLogin(){
        try {
            $this->log_debug('login data',print_r($this->input->post(),true));
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $redirectUrl = $this->input->post("redirectUrl");
            
            if(empty($username) || empty($password)){
                $this->session->set_flashdata(array('message'=>'กรุณากรอกชื่อผู้ใช้และรหัสผ่าน'));
                $this->session->set_flashdata('redirectUrl',$redirectUrl);
                redirect('authen/login','refresh');
            }else{
                $userData = $this->authen->getDataResultArray('user_id,username,role',array('username'=>$this->input->post('username'),'password'=>md5($this->input->post('password'))));
                if(isset($userData) && !empty($userData)){
                    $this->log_debug('session data',print_r($userData[0],true));
                    $this->session->set_userdata($userData[0]);
                    if(!empty($redirectUrl)){
                        redirect($redirectUrl,'refresh');
                    }else{
                        redirect('','refresh');
                    }
                    
                }else{
                    $this->session->set_flashdata(array('message'=>'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง'));
                    $this->session->set_flashdata('redirectUrl',$redirectUrl);
                    redirect('authen/login','refresh');
                }
            }
            
        } catch (Exception $e) {
            $this->log_error($e->getMessage());
        }    
    }
    
    public function login(){
        $this->log_debug("Start");
        $message['message'] = $this->session->flashdata('message');
        $message['redirectUrl'] = $this->session->flashdata('redirectUrl');
        $this->setContentPage('login',$message,true);
        $this->loadLayoutContent($this->template);
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('','refresh');
    }

    public function checkDupEmail(){
        $result = 'false';
        $email = $this->input->post("email");
        $userData = $this->authen->getDataSpecifyField("user_id",array('email'=>$email));
        if(isset($userData) && !empty($userData) && sizeof($userData) > 0){
            $result = 'false';
        }else{
            $result = 'true';
        }
        echo $result;
    }

    public function checkDupUser(){
        $result = 'false';
        $username = $this->input->post("username");
        $userData = $this->authen->getDataSpecifyField("user_id",array('username'=>$username));
        if(isset($userData) && !empty($userData) && sizeof($userData) > 0){
            $result = 'false';
        }else{
            $result = 'true';
        }
        echo $result;
    }


    
    
    function __destruct()
    {
        
    }
}

?>