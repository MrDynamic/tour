<div class="col-md-6 sep-top-xs">
  <h5 class="upper">เปลี่ยนรหัสผ่าน</h5>
  <div class="sep-top-xs">
    <?php 
        if(isset($successMessage) && !empty($successMessage)){
            echo create_success_message($successMessage);
        }else if(isset($message) && !empty($message)){
            echo create_error_message($message);
        }
        
        $oldPasswordAttr = array('id'=>'oldPassword','name'=>'oldPassword','required'=>'');
        $newPasswordAttr = array('id'=>'newPassword','name'=>'newPassword','required'=>'');
        $confirmPasswordAttr = array('id'=>'passwordConfirm','name'=>'passwordConfirm','required'=>'');
        
        echo form_open('user/changePassword',array('id'=>'form-changePassword'));
        echo create_password(array('รหัสผ่านเก่า',''), $oldPasswordAttr,array(),OPEN_FORM_GROUP_12);
        echo create_password(array('รหัสผ่านใหม่',''), $newPasswordAttr,array(),OPEN_FORM_GROUP_12);
        echo create_password(array('ยืนยัน',''),$confirmPasswordAttr,array(),OPEN_FORM_GROUP_12);
        echo form_button(array('type'=>'submit','class'=>'btn btn-primary','content'=>'บันทึก'));
        echo form_button(array('type'=>'reset','class'=>'btn btn-info','id'=>'btnCancel','content'=>'ยกเลิก'));
        echo form_close();
        
    ?>     
	</div>
</div>


