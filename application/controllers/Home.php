<?php

class Home extends Abstract_Controller{
    
    function index(){
        $this->load->view("_layout",$this->template);
    }

}
