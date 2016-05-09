<?php

class Home extends Main_Controller{
    
    function index(){
        $this->load->view("_layout",$this->template);
    }

}
