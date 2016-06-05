<div class="col-lg-8">
    <section class="panel">
        <header class='panel-heading'>
            ค้นหา
        </header>
        <div class='panel-body'>
            <?php
            $packageAttr = array('id'=>'packageId');

            echo form_open('admin/report/generate',array('id'=>'form-report-criteria'));
            echo create_dropdown(array('แพ็คเกจ','packageId'),'packageId',$packageData,array('id'=>'packageId','required'=>''),'');
            echo form_button(array('type'=>'submit','class'=>'btn btn-primary','content'=>'ออกรายงาน'));
            echo form_button(array('type'=>'reset','class'=>'btn btn-info','id'=>'btnCancel','content'=>'Cancel'));
            echo form_close();

            ?>
        </div>
    </section>
</div>

