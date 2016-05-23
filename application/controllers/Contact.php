<?php

/**
 * Created by PhpStorm.
 * User: ibadboy
 * Date: 5/23/2016 AD
 * Time: 10:12 PM
 */
class Contact extends Main_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Contact'=>'contact'));
    }

    public function save(){
        $this->contact->insert($this->input->post());
        $this->session->set_flashdata(array('success'=>true));
        redirect('#contacts','refresh');
        
    }

}