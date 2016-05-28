<div class="col-lg-8">
    <section class="panel">
        <header class='panel-heading'>
            ค้นหา
        </header>
        <div class='panel-body'>
            <?php
            $yearAttr = array('id'=>'year');

            echo form_open('admin/report/sumaryArea',array('id'=>'form-sumary-area'));
            echo create_dropdown(array('ประจำปี','year'),'year',$yearData,array('required'=>''),$yearSelected);
            echo form_button(array('type'=>'submit','class'=>'btn btn-primary','content'=>'แสดงกราฟ'));
            echo form_button(array('type'=>'reset','class'=>'btn btn-info','id'=>'btnCancelCriteria','onclick'=>"window.location.href=admin/report;return false;",'content'=>'Cancel'));
            echo form_close();

            ?>
        </div>
    </section>
</div>

