<div class="col-md-6 sep-top-xs">
  <h4 class="upper">สมัครสมาชิก</h4>
  <div class="sep-top-xs">
    <?php 
       
        $inputUsername = array('id'=>'username','name'=>'username','class'=>'form-control','required'=>'');
        $inputPassword = array('id'=>'password','name'=>'password','class'=>'form-control','required'=>'');
        $inputFirstName = array('id'=>'firstName','name'=>'firstName','class'=>'form-control','required'=>'');
        $inputSurname = array('id'=>'surname','name'=>'surname','class'=>'form-control','required'=>'');
        $inputEmail = array('id'=>'email','name'=>'email','class'=>'form-control','type'=>'email');
        $inputPhone = array('id'=>'phone','name'=>'phone','class'=>'form-control','type'=>'phone','required'=>'');
        $inputPostalCode = array('id'=>'postalCode','name'=>'postalCode','class'=>'form-control');
        $inputAddress = array('id'=>'address','name'=>'address','class'=>'form-control','required'=>'');
        
        echo form_open();
        echo create_input(array('ชื่อผู้ใช้','username'),$inputUsername);
        echo create_password(array('รหัสผ่าน',''), $inputPassword);
        echo create_input(array('ชื่อ','firstName'),$inputFirstName);
        echo create_input(array('นามสกุล','surname'),$inputSurname);
        echo create_input(array('อีเมล','email'),$inputEmail);
        echo create_input(array('เบอร์ติดต่อ','phone'),$inputPhone);
        echo create_input(array('ที่อยู่','address'),$inputAddress);
        
        echo create_input(array('รหัสไปรษณีย์','postalCode'),$inputPostalCode);
        echo form_button(array('type'=>'submit','class'=>'btn btn-primary','content'=>'Save'));
        echo form_button(array('type'=>'reset','class'=>'btn btn-info','id'=>'btnCancel','content'=>'Cancel'));
        echo form_close();
        
    ?>     
	</div>
</div>


