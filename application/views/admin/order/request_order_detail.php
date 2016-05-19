<div class="col-lg-10">
    <section class="panel">
        <header class='panel-heading'>
            รายละเอียดการจัดทัวร์
        </header>
        <div class='panel-body'>
            <?php
                if(isset($requestData)){
                    echo create_output('ผู้ติดต่อ',$requestData->contact_name);
                    echo create_output('เบอร์โทร',$requestData->phone);
                    echo create_output('วันที่เดินทาง',$requestData->travel_date);
                    echo create_output('สถานะ',$requestData->status);
                    echo create_output('รายละเอียด',$requestData->request_desc);
                    echo create_output('หมายเหตุ',$requestData->remark);

                } else {
                    echo '<h3>ไม่พบข้อมูล</h3>';
                }

            ?>
        </div>
    </section>
</div>