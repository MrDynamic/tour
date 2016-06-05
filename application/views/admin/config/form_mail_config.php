<div class="col-lg-6">
    <section class="panel">
        <header class='panel-heading'>
            เพิ่ม E-Mail แจ้งเตือน
        </header>
        <div class='panel-body'>
            <?php if($this->session->flashdata(EXEC_MSG) == STATUS_SUCCESS){?>
                <div id="success-alert" class="alert alert-success text-center">
                    <p><i class="fa fa-check-circle fa-2x"></i></p>
                    <p>บันทึกข้อมูลเรียบร้อยแล้ว</p>
                </div>
            <?php }elseif($this->session->flashdata(EXEC_MSG) == STATUS_ERROR){ ?>
                <div id="error-alert" class="alert alert-danger text-center">
                    <p><i class="fa fa-times-circle fa-2x"></i></p>
                    <p>เกิดข้อผิดพลาด</p>
                </div>
            <?php }?>

            <?php
            $mailAttr = array('name'=>'mailTo','id'=>'mailTo','class'=>'form-control','type'=>'email','required'=>'');
            echo form_open('admin/config/addMail',array('id'=>'form-mail-config'));
            echo create_input(array('E-Mail','mailTo'),$mailAttr);
            echo form_button(array('type'=>'submit','class'=>'btn btn-primary','content'=>'Save'));
            echo form_button(array('type'=>'reset','class'=>'btn btn-info','id'=>'btnCancel','content'=>'Cancel'));
            echo form_close();
            ?>
        </div>
    </section>
</div>

