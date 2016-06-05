<div class="col-lg-8">
    <section class="panel">
            <header class='panel-heading'>
                เพิ่มภาพผลงาน
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

                $titleAttr = array('name'=>'title','id'=>'title','required'=>'');
                $shortDescAttr = array('name'=>'short_desc','id'=>'short_desc','required'=>'');
                $uploadPicture = array('name'=>'image','id'=>'image','required'=>'');

                echo form_open_multipart('admin/portfolio/save',array('id'=>'formUploadPortfolio'));
                echo create_input(array("ชื่อภาพ",'title'),$titleAttr);
                echo create_input(array("รายละเอียด","short_desc"),$shortDescAttr);
                echo create_upload(array('ภาพ (800x600)','image'),$uploadPicture);
                echo form_button(array('type'=>'submit','class'=>'btn btn-primary','content'=>'Save'));
                echo form_button(array('type'=>'reset','class'=>'btn btn-info','id'=>'btnCancel','content'=>'Cancel'));
                echo form_close();

                ?>
            </div>
    </section>
</div>