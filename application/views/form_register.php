<div class="col-md-6 sep-top-xs">
  <h4 class="upper">สมัครสมาชิก</h4>
  <div class="sep-top-xs">
    <?php 
       
        $usernameAttr = array('id'=>'username','name'=>'username','class'=>'form-control','required'=>'');
        $passwordAttr = array('id'=>'password','name'=>'password','class'=>'form-control','required'=>'');
        $firstNameAttr = array('id'=>'firstName','name'=>'firstname','class'=>'form-control','required'=>'');
        $surnameAttr = array('id'=>'surname','name'=>'surname','class'=>'form-control','required'=>'');
        $emailAttr = array('id'=>'email','name'=>'email','class'=>'form-control','type'=>'email');
        $phoneAttr = array('id'=>'phone','name'=>'phone','class'=>'form-control','type'=>'phone','required'=>'');
        $postalcodeAttr = array('id'=>'postalCode','name'=>'postalcode','class'=>'form-control');
        $addressAttr = array('id'=>'address','name'=>'address','class'=>'form-control','required'=>'');
        $provinceAttr = array('id'=>'provinceId','class'=>'form-control','required'=>'');
        $amphurAttr = array('id'=>'amphurId','class'=>'form-control','required'=>'');
        $districtAttr = array('id'=>'districtId','class'=>'form-control');
        
        $selectedProvince = '';
        $selectedAmphur='';
        $selectedDistrict='';
        
        echo form_open('authen/createUser',array('id'=>'form-register'));
        echo create_input(array('ชื่อผู้ใช้','username'),$usernameAttr,OPEN_FORM_GROUP_6);
        echo create_password(array('รหัสผ่าน',''), $passwordAttr,array(),OPEN_FORM_GROUP_6);
        echo create_input(array('ชื่อ','firstName'),$firstNameAttr,OPEN_FORM_GROUP_6);
        echo create_input(array('นามสกุล','surname'),$surnameAttr,OPEN_FORM_GROUP_6);
        echo create_input(array('อีเมล','email'),$emailAttr,OPEN_FORM_GROUP_6);
        echo create_input(array('เบอร์ติดต่อ','phone'),$phoneAttr,OPEN_FORM_GROUP_6);
        echo create_input(array('ที่อยู่','address'),$addressAttr,OPEN_FORM_GROUP_12);
        echo create_dropdown(array('จังหวัด','provinceId'), 'province_id', $provinceItem,$provinceAttr, $selectedProvince,OPEN_FORM_GROUP_6);
        echo create_dropdown(array('อำเภอ','amphurId'), 'amphur_id', $amphurItem, $amphurAttr,$selectedAmphur,OPEN_FORM_GROUP_6);
        echo create_dropdown(array('ตำบล','districtId'), 'district_id', $districtItem, $districtAttr,$selectedDistrict,OPEN_FORM_GROUP_6);
        echo create_input(array('รหัสไปรษณีย์','postalCode'),$postalcodeAttr,OPEN_FORM_GROUP_6);
        echo form_button(array('type'=>'submit','class'=>'btn btn-primary','content'=>'Save'));
        echo form_button(array('type'=>'reset','class'=>'btn btn-info','id'=>'btnCancel','content'=>'Cancel'));
        echo form_close();
        
    ?>     
	</div>
</div>


