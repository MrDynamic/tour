<?php

class Authen extends Abstract_Controller
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
            
            if(empty($username) || empty($password)){
                $this->session->set_flashdata('message', 'Username or Password is not null');
                redirect('authen/login','refresh');
            }else{
                $userData = $this->authen->getDataResultArray('user_id,username,role',array('username'=>$this->input->post('username'),'password'=>md5($this->input->post('password'))));
                if(isset($userData) && !empty($userData)){
                    $this->log_debug('session data',print_r($userData[0],true));
                    $this->session->set_userdata($userData[0]);
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
    
    public function login(){
        $this->log_debug("Start");
        $message['message'] = $this->session->flashdata('message');
        $this->setContentPage('login',$message,true);
        $this->load->view('layout_content',$this->template);
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('','refresh');
    }
    
    function __destruct()
    {
        
    }
}

?>