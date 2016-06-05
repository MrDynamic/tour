<div class="col-md-6 sep-top-xs">
    <?php if($this->session->flashdata(EXEC_MSG) == STATUS_SUCCESS){?>
        <div id="success-alert" class="alert alert-success text-center">
            <p><i class="fa fa-check-circle fa-2x"></i></p>
            <p>เปลี่ยนรหัสเรียบร้อยแล้ว</p>
        </div>
    <?php }else if($this->session->flashdata(EXEC_MSG) == STATUS_ERROR) { ?>
        <div id="error-alert" class="alert alert-danger text-center">
            <p><i class="fa fa-times-circle fa-2x"></i></p>
            <p><?=$this->session->flashdata(ERROR_MSG);?></p>
        </div>
    <?php } ?>
    <h5 class="upper">เปลี่ยนรหัสผ่าน</h5>
    <div class="sep-top-xs">
        <?php

        $newPasswordAttr = array('id'=>'newPassword','name'=>'newPassword','required'=>'');
        $confirmPasswordAttr = array('id'=>'passwordConfirm','name'=>'passwordConfirm','required'=>'');

        echo form_open('user/submitForget',array('id'=>'form-forget'));
        echo create_password(array('รหัสผ่านใหม่',''), $newPasswordAttr,array(),OPEN_FORM_GROUP_12);
        echo create_password(array('ยืนยัน',''),$confirmPasswordAttr,array(),OPEN_FORM_GROUP_12);
        echo form_input(array("type"=>"hidden","name"=>"userId","value"=>$userId));
        echo form_button(array('type'=>'submit','class'=>'btn btn-primary','content'=>'บันทึก'));
        echo form_button(array('type'=>'reset','class'=>'btn btn-info','id'=>'btnCancel','content'=>'ยกเลิก'));
        echo form_close();

        ?>
    </div>
</div>


