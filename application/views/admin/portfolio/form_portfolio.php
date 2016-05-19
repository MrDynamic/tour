<div class="col-lg-8">
    <section class="panel">
            <header class='panel-heading'>
                เพิ่มภาพผลงาน
            </header>
            <div class='panel-body'>
                <?php

                $titleAttr = array('name'=>'title','id'=>'title','required'=>'');
                $shortDescAttr = array('name'=>'short_desc','id'=>'short_desc','required'=>'');
                $uploadPicture = array('name'=>'image','id'=>'image','required'=>'');

                echo form_open('admin/portfolio/save',array('id'=>'formUploadPortfolio'));
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