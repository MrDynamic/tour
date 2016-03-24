<header class='panel-heading'>
  เพิ่มประเภทแพคเก็จ
</header>
<div class='panel-body'>
    <?php
    	$selectType = array('class'=>'form-control','id'=>'packageTypeId','required'=>'');
    	$inputName = array('name'=>'package_name','id'=>'packageName','class'=>'form-control','required'=>'');
		$textDesc = array('name'=>'package_desc','id'=>'packageDesc','class'=>'form-control');
		$uploadThumbnail = array('name'=>'thumbnail','id'=>'thumbnail','class'=>'form-control','required'=>'');
		$uploadPdf = array('name'=>'tourProgram','id'=>'tourProgram','class'=>'form-control','required'=>'');
		$inputTravelDate = array('name'=>'travel_date','id'=>'travelDate','class'=>'form-control','type'=>'date','required'=>'');
		$inputExpireDate = array('name'=>'expire_date','id'=>'expireDate','class'=>'form-control','type'=>'date','required'=>'');
    	

		$action = 'admin/package/add';
		echo form_open_multipart('',array('id'=>'formPackage'));
		echo form_input(array('type'=>'hidden','value'=>site_url($action),'id'=>'action'));
		echo create_dropdown(array('ประเภทแพคเก็จ','packageTypeId'),'package_type_id',$packageType,$selectType);
		echo create_input(array('ชื่อแพ็คเกจ','packageName'),$inputName);
		echo create_upload(array('ภาพย่อ','thumbnail'),$uploadThumbnail);
		echo create_upload(array('โปรแกรมทัวร์ (PDF)','tourProgram'),$uploadPdf);
		echo create_input(array('วันที่เดินทาง','travelDate'),$inputTravelDate);
		echo create_input(array('วันสิ้นสุด','expireDate'),$inputExpireDate);
		echo create_textarea(array('คำอธิบาย','packageDesc'),$textDesc);
		echo form_button(array('type'=>'submit','class'=>'btn btn-primary','content'=>'Save'));
		echo form_button(array('type'=>'reset','class'=>'btn btn-info','content'=>'Cancel'));
		echo form_close();

		



		// echo create_dropzone(array('Thumbail','bhumbail'),array('action'=>site_url('admin/package/uploadToTemp'),'id'=>'thumbail'));
		
    ?>
</div>

