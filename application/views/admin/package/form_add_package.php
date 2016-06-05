<div class="col-lg-11">
<section class="panel" >
<header class='panel-heading'>
  เพิ่มแพคเก็จ
</header>
<div class='panel-body'>
	<?php if($this->session->flashdata(EXEC_MSG) == STATUS_SUCCESS){?>
        <div id="success-alert" class="alert alert-success text-center">
            <p><i class="fa fa-check-circle fa-2x"></i></p>
            <p>บันทึกข้อมูลเรียบร้อยแล้ว</p>
        </div>
    <?php }elseif($this->session->flashdata(EXEC_MSG) == STATUS_ERROR){ ?>
        <div id="error-alert" class="alert alert-danger text-center">
            <p><i class="fa fa-times-circle fa-2x"></i></p>
            <p>เกิดข้อผิดพลาด</p>
        </div>
    <?php }?>
    
    <?php
		$selectArea = array('id'=>"areaId",'required'=>'');
    	$selectType = array('id'=>'packageTypeId','required'=>'');
    	$inputName = array('name'=>'package_name','id'=>'packageName','required'=>'');
    	$inputPrice = array('name'=>'price','id'=>'price','required'=>'');
		$textDesc = array('name'=>'package_desc','id'=>'packageDesc','class'=>'form-control');
		$uploadThumbnail = array('name'=>'thumbnail','id'=>'thumbnail','required'=>'');
		$uploadPdf = array('name'=>'tourProgram','id'=>'tourProgram','required'=>'');
		$inputTravelDate = array('name'=>'travel_date','id'=>'travelDate','type'=>'date','required'=>'');
		$inputPackageId = array('name'=>'packageId','id'=>'packageId','type'=>'hidden');
		$inputDiscountAttr = array('name'=>'discount','id'=>'discount');
        if($action==ACTION_ADD){
            $action = 'admin/package/add';
            $selected = '';
			$selectedArea = '';
            $pdfPath = '';
            $thumbnailPath = '';
        }else{
            $action = 'admin/package/update';
			$selectedArea = $editData->area_id;
            $selected = $editData->package_type_id;
            $inputName['value'] = $editData->package_name;
            $inputPrice['value'] = $editData->price;
            $textDesc['value'] = $editData->package_desc;
            $inputTravelDate['value'] = $editData->travel_date;
            $inputPackageId['value'] = $editData->package_id;
            $pdfPath = $editData->pdf_path;
            $thumbnailPath = getFilePath($editData->thumbnail);
			$inputDiscountAttr['value'] = $editData->discount;
            
        }
		
        echo form_open_multipart('',array('id'=>'formPackage'));
		echo '<div class="col-lg-5">';
        echo form_input($inputPackageId);
		echo form_input(array('type'=>'hidden','value'=>site_url($action),'id'=>'action'));
		echo create_dropdown(array('ภูมิภาค','areaId'),'area_id',$areaType,$selectArea,$selectedArea);
		echo create_dropdown(array('ประเภทแพคเก็จ','packageTypeId'),'package_type_id',$packageType,$selectType,$selected);
		echo create_input(array('ชื่อแพ็คเกจ','packageName'),$inputName);
		echo create_input(array('ราคา','packagePrice'),$inputPrice);
		echo create_input(array('ส่วนลด','discount'),$inputDiscountAttr);
		echo '</div><div class="col-lg-6">';
		if($thumbnailPath == ''){
		  echo create_upload(array('ภาพย่อ (800x600)','thumbnail'),$uploadThumbnail);
		  
		}else{
		  echo create_thumbnail(array('ภาพย่อ',''), array('src'=>$thumbnailPath),$thumbnailPath,$uploadThumbnail);  
		}
		
		if($pdfPath == ''){
		    echo create_upload(array('โปรแกรมทัวร์ (PDF)','tourProgram'),$uploadPdf);
		}else{
		    echo create_link_icon(array('โปรแกรมทัวร์ (PDF)',''), array('src'=>'resources/img/pdf.png','atl'=>'View Package'), $pdfPath,$uploadPdf);
		}
		
		echo create_input(array('วันที่เดินทาง','travelDate'),$inputTravelDate);
		echo create_textarea(array('คำอธิบาย','packageDesc'),$textDesc);
		echo form_input(array('type'=>'hidden','name'=>'tourProgram_hide','id'=>'tourProgram_hide'));
		echo form_input(array('type'=>'hidden','name'=>'thumbnail_hide','id'=>'thumbnail_hide'));
		echo form_button(array('type'=>'submit','class'=>'btn btn-primary','content'=>'Save'));
		echo form_button(array('type'=>'reset','class'=>'btn btn-info','id'=>'btnCancel','content'=>'Cancel'));
		echo '</div>';
		echo form_close();

    ?>
</div>
</section>
</div>

