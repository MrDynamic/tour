<?php

/**
 * Created by PhpStorm.
 * User: ibadboy
 * Date: 5/28/2016 AD
 * Time: 12:22 PM
 */
class Contact extends Admin_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array("M_Contact"=>"contact"));
    }
    
    public function index(){
        
        $this->setActiveMenu(MENU_MAIN_ORDER,MENU_CONTACT);

       $contactData['contactData'] = $this->contact->getAllData(false);
        $data['detail'] = $this->load->view('admin/contact/list_contact',$contactData,true);
        $this->loadTemplate($data);
    }

}