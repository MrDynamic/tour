<header class='panel-heading'>
    ค้นหา
</header>
<div class='panel-body'>
    <?php
    $packageAttr = array('id'=>'packageId','required'=>'');

    echo form_open_multipart('',array('id'=>'formPackage'));
    echo create_dropdown(array('แพ็คเกจ','packageId'),'packageId',$packageType,$packageAttr,$selected);
    echo create_input(array('วันที่เดินทาง','travelDate'),$inputTravelDate);
    echo create_textarea(array('คำอธิบาย','packageDesc'),$textDesc);
    echo form_button(array('type'=>'submit','class'=>'btn btn-primary','content'=>'Save'));
    echo form_button(array('type'=>'reset','class'=>'btn btn-info','id'=>'btnCancel','content'=>'Cancel'));
    echo form_close();

    ?>
</div>

