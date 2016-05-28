<?php

class User extends Main_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Authen'=>'authen','M_Order'=>'order'));
    }
        
    public function userPage(){
        $this->setContentWithSidePage('user/user_page');
        $this->loadLayoutSidebar($this->template);
    }
    
    public function editUser(){
       $userData = $this->authen->getDataSpecifyField('firstname,surname,email,phone,address,postalcode,province_id,amphur_id,district_id'
           ,array('user_id'=>$this->session->userdata('user_id')))[0];
       $formData = $this->setRegistData($userData->province_id,$userData->amphur_id);
       $formData['userData'] = $userData;
       $formData['actionType'] = ACTION_EDIT;
       $this->setContentWithSidePage('user/form_register',$formData);
       $this->loadLayoutSidebar($this->template);
    }
    
    public function submitEditUser(){
        try {
            $data = $this->input->post();
            $data['u_date'] = date('Y-m-d');
            $this->authen->update($data,array('user_id'=>$this->session->userdata('user_id')));
            $this->session->set_userdata($data);
            redirect('user/userPage','refresh');
        
        } catch (Exception $e) {
            $this->log_error($e->getMessage());
        }
    }
    
    public function createUser(){
        try {
            $data = $this->input->post();
            $data['password'] = md5($this->input->post('password1'));
            $data['c_date'] = getCurrentDate();
            $data['role'] = USER_ROLE;
            unset($data['password1'],$data['passwordConfirm']);
            $this->log_debug('user data',print_r($data,true));
            $this->authen->insert($data);
            $userData = $this->authen->getDataResultArray('user_id,username,role',array('username'=>$data['username'],'password'=>$data['password']));
            //$this->session->set_userdata($userData[0]);
            $this->session->set_flashdata(EXEC_MSG,STATUS_SUCCESS);
            redirect('user/register','refresh');
    
        } catch (Exception $e) {
            $this->log_error($e->getMessage());
        }
    }
    
    public function setRegistData($provId='',$amphurId=''){
        $formData = array();
        $formData['provinceItem'] = $this->generateSelectItems($this->getAllProvince());
        if($provId != ''){
            $formData['amphurItem'] = $this->generateSelectItems($this->getAmphurByProvinceId($provId));
        }else{
            $formData['amphurItem'] = $this->generateSelectItems(array());
        }
        
        if($amphurId !=''){
            $formData['districtItem'] = $this->generateSelectItems($this->getDistrictByAmphurId($amphurId));
        }else{
            $formData['districtItem'] = $this->generateSelectItems(array());
        }
        return $formData;
    }
    
    public function register(){
        try {
            $this->template['section_name'] = 'สมัครสมาชิก';
            $formData = $this->setRegistData();
            $formData['actionType'] = ACTION_ADD;
            $this->setContentPage('user/form_register',$formData);
            $this->loadLayoutContent($this->template);
    
        } catch (Exception $e) {
            $this->log_error($e->getMessage());
        }
    }
    
    public function generateAmphur(){
        $response = '';
        $this->log_debug('post data',print_r($this->input->post(),true));
        $provinceId = $this->input->post('provinceId');
        $amphurData = $this->generateSelectItems($this->getAmphurByProvinceId($provinceId));
        $this->log_debug('amphur data',print_r($amphurData,true));
        foreach($amphurData as $key=>$val){
            $response .="<option value='$key'>".trim($val)."</option>";
        }
        $this->log_debug('response',$response);
        echo $response;
    
    }
    
    public function generateDistrict(){
        $response='';
        $amphurId = $this->input->post('amphurId');
        $districtData = $this->generateSelectItems($this->getDistrictByAmphurId($amphurId));
        foreach ($districtData as $key=>$val){
            $response .="<option value='$key'>".trim($val)."</option>";
        }
        echo $response;
    }
    
    public function changePasswordPage(){
        $this->setContentWithSidePage('user/change_password_page');
        $this->loadLayoutSidebar($this->template);
    }
    
    public function changePassword(){
        $newPassword = $this->input->post("newPassword");
        if($this->authen->checkPassword($this->session->userdata('username'),$this->input->post('oldPassword'))){
            $this->authen->update(array('password'=>md5($newPassword)),array('user_id'=>$this->session->userdata('user_id')));
            $this->session->set_flashdata(array(EXEC_MSG=>STATUS_SUCCESS));

        }else{
            $this->session->set_flashdata(array(EXEC_MSG=>STATUS_ERROR,ERROR_MSG,"รหัสผ่านเดิมไม่ถูกต้อง"));
        }
        redirect('user/changePasswordPage','refresh');
        
    }

    public function resetPassword(){
        $this->setContentPage('user/form_reset_password',null);
        $this->loadLayoutContent($this->template);
    }

    public function submitResetPassword() {
        $from_email = "polawat.th@gmail.com";
        $to_email = $this->input->post('email');

        $userData = $this->authen->getDataSpecifyField("user_id,username,password,firstname,surname",array('email'=>$to_email));
        if(isset($userData) && !empty($userData)){
            $user = $userData[0];
            $this->load->library('email');
            $newPassword = $this->generateRandomString(8);
            $message = "เรียนคุณ ".$user->firstname." ". $user->surname."\n";
            $message .="ทาง Ocharos tour ได้ทำการกำหนดรหัสใหม่ตามรายละเอียดด้านล่างค่ะ"."\n";
            $message .="Username: ".$user->username ."\n";
            $message .="Password: ".$newPassword;
            $this->email->from($from_email, 'Your Name');
            $this->email->to($to_email);
            $this->email->subject("Ocharos' s Tour Reset Password");
            $this->email->message($message);

            if($this->email->send()){
                $this->authen->update(array('password'=>md5($newPassword)),array('user_id'=>$user->user_id));
                $this->session->set_flashdata(EXEC_MSG,STATUS_SUCCESS);
            }else{
                $this->session->set_flashdata(EXEC_MSG,STATUS_ERROR);
                $this->session->set_flashdata(array(EXEC_MSG=>STATUS_ERROR,ERROR_MSG=>'ระบบเกิดข้อผิดพลาด'));
            }
        }else{
            $this->session->set_flashdata(array(EXEC_MSG=>STATUS_ERROR,ERROR_MSG=>'email ไม่ถูกต้อง'));
            
        }
       
        redirect('user/resetPassword','refresh');
    }

    private function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function __destruct()
    {}
}
