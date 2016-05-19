<div class="col-lg-10">
    <section class="panel">
        <header class='panel-heading'>
            บันทึกสถานะ
        </header>
        <div class='panel-body'>
            <?php
                echo form_open('admin/manageOrder/saveStatus',array('id'=>'form-criteria'));
                echo create_dropdown(array('สถานะ','statusId'),'statusId',$statusData,array('id'=>'statusId'),'');
                echo create_textarea(array('หมายเหตุ','remark'),array('id'=>'remark','name'=>'remark','rows'=>10));
                echo form_input(array('name'=>'requestId','value'=>$requestId,'type'=>'hidden'));
                echo form_button(array('type'=>'submit','class'=>'btn btn-primary','content'=>'บันทึก'));
                echo form_button(array('type'=>'reset','class'=>'btn btn-info','id'=>'btnCancelCriteria','onclick'=>"window.location.href=admin/manageOrder/listRequestTour;return false;",'content'=>'Cancel'));
                echo form_close();
            ?>
        </div>
    </section>
</div>