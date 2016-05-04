<div class="col-md-6 sep-top-xs">
  <h5 class="upper">
  	<?php 
  	print (isset($actionType) && $actionType==ACTION_EDIT)?'แก้ไขข้อมูลส่วนตัว':'สมัครสมาชิก';
  	?>
  </h5>
  <div class="sep-top-xs">
    <?php 
       
        $usernameAttr = array('id'=>'username','name'=>'username','class'=>'form-control','required'=>'');
        $passwordAttr = array('id'=>'password1','name'=>'password1','class'=>'form-control','required'=>'');
        $passwordConfirmAttr = array('id'=>'passwordConfirm','name'=>'passwordConfirm','class'=>'form-control','required'=>'');
        $firstNameAttr = array('id'=>'firstName','name'=>'firstname','class'=>'form-control','required'=>'');
        $surnameAttr = array('id'=>'surname','name'=>'surname','class'=>'form-control','required'=>'');
        $emailAttr = array('id'=>'email','name'=>'email','class'=>'form-control','type'=>'email');
        $phoneAttr = array('id'=>'phone','name'=>'phone','class'=>'form-control','type'=>'tel','maxlength'=>'10','required'=>'');
        $postalcodeAttr = array('id'=>'postalcode','name'=>'postalcode','class'=>'form-control','maxlength'=>'5');
        $addressAttr = array('id'=>'address','name'=>'address','class'=>'form-control','required'=>'');
        $provinceAttr = array('id'=>'provinceId','class'=>'form-control','required'=>'');
        $amphurAttr = array('id'=>'amphurId','class'=>'form-control','required'=>'');
        $districtAttr = array('id'=>'districtId','class'=>'form-control');
        
        
        
        if($actionType==ACTION_ADD){
            $action = 'user/createUser';
            $cancelPage = 'user/register';
            $selectedProvince = '';
            $selectedAmphur='';
            $selectedDistrict='';
        }else{
            $action = 'user/submitEditUser';
            $cancelPage='user/userPage';
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
        echo form_input(array('type'=>'hidden','id'=>'cancelPage','value'=>$cancelPage));
        echo "<div class='sep-bottom-xs'>&nbsp;</div>";
        echo form_button(array('type'=>'submit','class'=>'btn btn-primary','content'=>'บันทึก'));
        echo form_button(array('type'=>'reset','class'=>'btn btn-info','id'=>'btnCancel','content'=>'ยกเลิก'));
        echo form_close();
        
    ?>     
	</div>
</div>


