<div class="col-md-6 sep-top-xs">
    <?php if($this->session->flashdata(EXEC_MSG) == STATUS_SUCCESS){?>
        <div id="success-alert" class="alert alert-success text-center">
            <p><i class="fa fa-check-circle fa-2x"></i></p>
            <p>ระบบได้ทำการส่งรหัสผ่านใหม่ไปให้ทาง email เรียบร้อยแล้ว</p>
        </div>
    <?php }else if($this->session->flashdata(EXEC_MSG) == STATUS_ERROR) { ?>
        <div id="error-alert" class="alert alert-danger text-center">
            <p><i class="fa fa-times-circle fa-2x"></i></p>
            <p><?=$this->session->flashdata(ERROR_MSG);?></p>
        </div>
    <?php } ?>
    <h5 class="upper">
        ลืมรหัสผ่าน
    </h5>
    <div class="sep-top-xs">
        <?php

        $emailAttr = array('id'=>'email','name'=>'email','type'=>'email','required'=>'');

        echo form_open('user/submitResetPassword',array('id'=>'form-reset-password'));
        echo create_input(array('อีเมล','email'),$emailAttr);
        echo form_button(array('type'=>'submit','class'=>'btn btn-primary','content'=>'ขอรหัสผ่านใหม่'));
        echo form_button(array('type'=>'reset','class'=>'btn btn-info','onclick'=>"window.location=''",'content'=>'ยกเลิก'));
        echo form_close();

        ?>
    </div>
</div>


