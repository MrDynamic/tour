<?php

/**
 * Created by PhpStorm.
 * User: ibadboy
 * Date: 5/15/2016 AD
 * Time: 9:57 AM
 */
class Test extends Main_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Report'=>'report'));
    }

    public function index(){
        
        print_r($this->report->reportSumaryArea());
        echo $this->report->getLastQuery();
        
    }

}