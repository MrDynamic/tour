<div class="col-lg-8">
    <section class="panel">
        <header class='panel-heading'>
            ค้นหา
        </header>
        <div class='panel-body'>
            <?php
            $packageAttr = array('id'=>'packageId');
            $inputCustomerAttr = array('id'=>'customerName','name'=>'customerName','value'=>$customerName);

            echo form_open('admin/manageOrder/index',array('id'=>'form-criteria'));
            echo create_dropdown(array('แพ็คเกจ','packageId'),'packageId',$packageData,$packageAttr,$packageSelected);
            echo create_input(array('ชื่อลูกค้า','customerName'),$inputCustomerAttr);
            echo form_button(array('type'=>'submit','class'=>'btn btn-primary','content'=>'ค้นหา'));
            echo form_button(array('type'=>'reset','class'=>'btn btn-info','id'=>'btnCancelCriteria','onclick'=>"window.location.href=admin/manageOrder;return false;",'content'=>'Cancel'));
            echo form_close();

            ?>
        </div>
    </section>
</div>

