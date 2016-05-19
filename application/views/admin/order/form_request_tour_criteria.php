<div class="col-lg-6">
    <section class="panel">
        <header class='panel-heading'>
            ค้นหา
        </header>
        <div class='panel-body'>
            <?php

            $inputCustomerAttr = array('id'=>'customerName','name'=>'customerName','value'=>$customerName);
            echo form_open('admin/manageOrder/requestTour',array('id'=>'form-criteria'));
            echo create_input(array('ชื่อลูกค้า','customerName'),$inputCustomerAttr);
            echo form_button(array('type'=>'submit','class'=>'btn btn-primary','content'=>'ค้นหา'));
            echo form_button(array('type'=>'reset','class'=>'btn btn-info','id'=>'btnCancelCriteria','onclick'=>"window.location.href=admin/manageOrder/listRequestTour;return false;",'content'=>'Cancel'));
            echo form_close();

            ?>
        </div>
    </section>
</div>