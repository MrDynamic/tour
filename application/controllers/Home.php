<?php

class Home extends Main_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array("M_Portfolio"=>"portfolio"));
    }

    function index(){
        $this->template['portfolioData'] = $this->portfolio->getRandomData();
        $this->load->view("_layout",$this->template);
    }

}
