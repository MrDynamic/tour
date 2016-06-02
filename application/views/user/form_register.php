<div class="col-md-6 sep-top-xs">
    <?php if($this->session->flashdata(EXEC_MSG) == STATUS_SUCCESS){?>
        <div id="success-alert" class="alert alert-success text-center">
            <p><i class="fa fa-check-circle fa-2x"></i></p>
            <p>สมัครสมาชิกเรียบร้อยแล้ว</p>
        </div>
    <?php }else if($this->session->flashdata(EXEC_MSG) == STATUS_ERROR) { ?>
        <div id="error-alert" class="alert alert-danger text-center">
            <p><i class="fa fa-times-circle fa-2x"></i></p>
            <p><?=$this->session->flashdata(ERROR_MSG);?></p>
        </div>
    <?php } ?>
  <h5 class="upper">
  	<?php 
  	print (isset($actionType) && $actionType==ACTION_EDIT)?'แก้ไขข้อมูลส่วนตัว':'สมัครสมาชิก';
  	?>
  </h5>
  <div class="sep-top-xs">
    <?php 
       
        $usernameAttr = array('id'=>'username','name'=>'username','required'=>'');
        $passwordAttr = array('id'=>'password1','name'=>'password1','required'=>'');
        $passwordConfirmAttr = array('id'=>'passwordConfirm','name'=>'passwordConfirm','required'=>'');
        $firstNameAttr = array('id'=>'firstName','name'=>'firstname','required'=>'');
        $surnameAttr = array('id'=>'surname','name'=>'surname','required'=>'');
        $emailAttr = array('id'=>'email','name'=>'email','type'=>'email','required'=>'');
        $phoneAttr = array('id'=>'phone','name'=>'phone','type'=>'tel','maxlength'=>'10','required'=>'');
        $postalcodeAttr = array('id'=>'postalcode','name'=>'postalcode','maxlength'=>'5');
        $addressAttr = array('id'=>'address','name'=>'address','required'=>'');
        $provinceAttr = array('id'=>'provinceId','required'=>'');
        $amphurAttr = array('id'=>'amphurId','required'=>'');
        $districtAttr = array('id'=>'districtId',);
        
        
        
        if($actionType==ACTION_ADD){
            $action = 'user/createUser';
            $selectedProvince = '';
            $selectedAmphur='';
            $selectedDistrict='';
        }else{
            $action = 'user/submitEditUser';
            $selectedProvince = $userData->province_id;
            $selectedAmphur=$userData->amphur_id;
            $selectedDistrict=$userData->district_id;
            
           $firstNameAttr['value'] = $userData->firstname;
           $surnameAttr['value'] = $userData->surname;
           $emailAttr['value'] = $userData->email;
           $phoneAttr['value'] = $userData->phone;
           $addressAttr['value'] = $userData->address;
           $postalcodeAttr['value'] =$userData->postalcode;
        
        }
        
        echo form_open($action,array('id'=>'form-register'));
        if($actionType == ACTION_ADD){
            echo create_input(array('ชื่อผู้ใช้','username'),$usernameAttr,OPEN_FORM_GROUP_12);
            echo create_password(array('รหัสผ่าน',''), $passwordAttr,array(),OPEN_FORM_GROUP_12);
            echo create_password(array('ยืนยัน',''),$passwordConfirmAttr,array(),OPEN_FORM_GROUP_12);
            echo '<div class="sep-bottom-xs">&nbsp;</div>';
        }
        echo create_input(array('ชื่อ','firstName'),$firstNameAttr,OPEN_FORM_GROUP_6);
        echo create_input(array('นามสกุล','surname'),$surnameAttr,OPEN_FORM_GROUP_6);
        echo create_input(array('อีเมล','email'),$emailAttr,OPEN_FORM_GROUP_6);
        echo create_input(array('เบอร์ติดต่อ','phone'),$phoneAttr,OPEN_FORM_GROUP_6);
        echo create_input(array('ที่อยู่','address'),$addressAttr,OPEN_FORM_GROUP_12);
        echo create_dropdown(array('จังหวัด','provinceId'), 'province_id', $provinceItem,$provinceAttr, $selectedProvince,OPEN_FORM_GROUP_6);
        echo create_dropdown(array('อำเภอ','amphurId'), 'amphur_id', $amphurItem, $amphurAttr,$selectedAmphur,OPEN_FORM_GROUP_6);
        echo create_dropdown(array('ตำบล','districtId'), 'district_id', $districtItem, $districtAttr,$selectedDistrict,OPEN_FORM_GROUP_6);
        echo create_input(array('รหัสไปรษณีย์','postalCode'),$postalcodeAttr,OPEN_FORM_GROUP_6);
        echo "<div class='sep-bottom-xs'>&nbsp;</div>";
        echo form_button(array('type'=>'submit','class'=>'btn btn-primary','content'=>'บันทึก'));
        echo form_button(array('type'=>'reset','class'=>'btn btn-info','id'=>'btnCancel','content'=>'ยกเลิก'));
        echo form_close();
        
    ?>     
	</div>
</div>


