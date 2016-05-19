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
                    $travelDate = date_format(date_create($requestData->travel_date),'d/m/Y');
                    echo create_output('วันที่เดินทาง',$travelDate);
                    echo create_output('รายละเอียด',$requestData->request_desc);

                } else {
                    echo '<h3>ไม่พบข้อมูล</h3>';
                }

            ?>
        </div>
    </section>
</div>