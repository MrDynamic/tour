<div class="col-md-6 sep-top-xs">
    <?php
            $errorMessage = validation_errors();
            if(!empty($errorMessage)){
                echo create_error_message(validation_errors());
            }
    ?>
    <h5 class="upper">จัดทัวร์</h5>
    <div class="sep-top-xs">
        <?php
        $nameAttr = array('name'=>'contactName','id'=>'contactName','required'=>'','value'=>set_value('contactName'));
        $phoneAttr = array('name'=>'phone','id'=>'phone','maxlength'=>10,'required'=>'','value'=>set_value('phone'));
        $inputTravelDate = array('name'=>'travelDate','id'=>'travelDate','type'=>'date','required'=>'','value'=>set_value('travelDate'));
        $descAttr = array('name'=>'requestDesc','id'=>'requestDesc','required'=>'','value'=>set_value('requestDesc'));
        $requestId='';

        if(isset($action) && $action==ACTION_EDIT){
            $nameAttr['value'] = $editData->contact_name;
            $phoneAttr['value'] = $editData->phone;
            $inputTravelDate['value'] = $editData->travel_date;
            $descAttr['value'] = $editData->request_desc;
            $requestId = $editData->request_id;
        }

        echo form_open('order/requestTour',array('id'=>'form-requestTour'));
        echo form_input(array('type'=>'hidden','name'=>'actionType','value'=>$action));
        echo form_input(array('type'=>'hidden','name'=>'requestId','value'=>$requestId));
        echo create_input(array("ชื่อผู้ติดต่อ","contactName"),$nameAttr);
        echo create_input(array("เบอร์ติดต่อ","phone"),$phoneAttr);
        echo create_input(array("วันที่เดินทาง","travelDate"),$inputTravelDate);
        echo create_textarea(array("รายละเอียด","requestDesc"),$descAttr);
        echo form_button(array('type'=>'submit','class'=>'btn btn-primary','content'=>'บันทึก'));
        echo form_button(array('type'=>'reset','class'=>'btn btn-info','id'=>'btnCancel','content'=>'ยกเลิก'));
        echo form_close();

        ?>
    </div>
</div>


