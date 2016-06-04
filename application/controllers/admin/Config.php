<?php

/**
 * Created by PhpStorm.
 * User: ibadboy
 * Date: 6/4/2016 AD
 * Time: 3:04 PM
 */
class Config extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Mail'=>'mail'));
    }

    public function configMail(){

        $this->setActiveMenu(MENU_MAIN_CONFIG,MENU_CONFIG_EMAIL);
        $page = empty($this->uri->segment(4))?1:$this->uri->segment(4);

        $subView['form'] = $this->load->view('admin/config/form_mail_config',null,true);

        $this->load->library('my_pagination');
        $pagingConfig = $this->my_pagination->initAdmin('admin/config/index',$this->mail->countAllWithCriteria(array(),false));
        $limit = array($pagingConfig['per_page'],(($page-1) * $pagingConfig['per_page']));
        $data["paginationData"]   = $this->pagination;
        $data['mailData'] = $this->mail->getDataByCriteriaWithOrderBy(array(),$limit,false,array("mail_id","desc"));

        $subView['detail'] = $this->load->view('admin/config/list_mail',$data,true);
        $this->loadTemplate($subView);
    }

    public function addMail(){
        $mailTo = $this->input->post("mailTo");
        if(!empty($mailTo)){
            $this->mail->insert(array("mail_to"=>$mailTo));
            $this->session->set_flashdata(array(EXEC_MSG=>STATUS_SUCCESS));
        }else{
            $this->session->set_flashdata(array(EXEC_MSG=>ERROR_MSG));
        }
        redirect('admin/config/configMail','refresh');
    }

    public function deleteMail(){
        $mailId = $this->uri->segment("4");
        if(!empty($mailId)){
            $this->session->set_flashdata(array(EXEC_MSG=>STATUS_SUCCESS));
        }else{
            $this->session->set_flashdata(array(EXEC_MSG=>ERROR_MSG));
        }
        redirect('admin/config/configMail','refresh');
    }

    public function checkDupEmail(){
        $result = 'false';
        $email = $this->input->post("mailTo");
        $mailData = $this->authen->getDataSpecifyField("mail_id",array('mail_to'=>$email));
        if(isset($mailData) && !empty($mailData) && sizeof($mailData) > 0){
            $result = 'false';
        }else{
            $result = 'true';
        }
        echo $result;
    }
}