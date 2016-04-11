<?php

class Authen extends Abstract_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function register(){
        $this->template['menu_type'] = CONTENT_TYPE;
        $this->template['section_name'] = 'สมัครสมาชิก';
        $this->template['nav_menu'] = $this->load->view('nav_menu',$this->template,true);
        $this->template['content'] = $this->load->view('form_register','',true);
        $this->load->view('layout_content',$this->template);
    }
    
    function __destruct()
    {
        
    }
}

?>