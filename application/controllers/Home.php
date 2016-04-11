<?php

class Home extends Abstract_Controller{
    
    function index(){
        $this->template['packageIntro'] = $this->load->view('package_intro',null,true);
        $this->load->view("_layout",$this->template);

    }

}
