<?php

class Package extends Abstract_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Package','package');
    }

    public function index(){
        $this->template['menu_type'] = CONTENT_TYPE;
        $this->package->getPackageList();
        $this->template['content'] = $this->load->view('form_register',$formData,true);
        $this->load->view('layout_content',$this->template);
        
    }
    
    function __destruct()
    {}
}

?>