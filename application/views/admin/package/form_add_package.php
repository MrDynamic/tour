<header class='panel-heading'>
  เพิ่มประเภทแพคเก็จ
</header>
<div class='panel-body'>
    <?php
    	$selectType = array('class'=>'form-control','id'=>'packageTypeId','required'=>'');
    	$inputName = array('name'=>'package_name','id'=>'packageName','class'=>'form-control','required'=>'');
    	$inputPrice = array('name'=>'price','id'=>'price','class'=>'form-control','required'=>'');
		$textDesc = array('name'=>'package_desc','id'=>'packageDesc','class'=>'form-control');
		$uploadThumbnail = array('name'=>'thumbnail','id'=>'thumbnail','class'=>'form-control','required'=>'');
		$uploadPdf = array('name'=>'tourProgram','id'=>'tourProgram','class'=>'form-control','required'=>'');
		$inputTravelDate = array('name'=>'travel_date','id'=>'travelDate','class'=>'form-control','type'=>'date','required'=>'');
		$inputExpireDate = array('name'=>'expire_date','id'=>'expireDate','class'=>'form-control','type'=>'date','required'=>'');
    	
        if($action==ACTION_ADD){
            $action = 'admin/package/add';
            $selected = '';
            $pdfPath = '';
            $thumbnailPath = '';
        }else{
            $action = 'admin/package/update';
            $selected = $editData->package_type_id;
            $inputName['value'] = $editData->package_name;
            $inputPrice['value'] = $editData->price;
            $textDesc['value'] = $editData->package_desc;
            $inputTravelDate['value'] = $editData->travel_date;
            $inputExpireDate['value'] = $editData->expire_date;
            $pdfPath = $editData->pdf_path;
            $thumbnailPath = $editData->thumbnail;
            
        }
		
        echo form_open_multipart('',array('id'=>'formPackage'));
		echo form_input(array('type'=>'hidden','value'=>site_url($action),'id'=>'action'));
		echo create_dropdown(array('ประเภทแพคเก็จ','packageTypeId'),'package_type_id',$packageType,$selectType,$selected);
		echo create_input(array('ชื่อแพ็คเกจ','packageName'),$inputName);
		echo create_input(array('ราคา','packagePrice'),$inputPrice);
		
		if($thumbnailPath == ''){
		  echo create_upload(array('ภาพย่อ','thumbnail'),$uploadThumbnail);
		  
		}else{
		  echo create_thumbnail(array('ภาพย่อ',''), array('src'=>$thumbnailPath),$thumbnailPath,$uploadThumbnail);  
		}
		
		if($pdfPath == ''){
		    echo create_upload(array('โปรแกรมทัวร์ (PDF)','tourProgram'),$pdfPath);
		}else{
		    echo create_link_icon(array('โปรแกรมทัวร์ (PDF)',''), array('src'=>'resources/img/pdf.png','atl'=>'View Package'), $pdfPath,$uploadPdf);
		}
		
		echo create_input(array('วันที่เดินทาง','travelDate'),$inputTravelDate);
		echo create_input(array('วันสิ้นสุด','expireDate'),$inputExpireDate);
		echo create_textarea(array('คำอธิบาย','packageDesc'),$textDesc);
		echo form_input(array('type'=>'hidden','name'=>'removePdf'));
		echo form_input(array('type'=>'hidden','name'=>'removeThumbnail'));
		echo form_button(array('type'=>'submit','class'=>'btn btn-primary','content'=>'Save'));
		echo form_button(array('type'=>'reset','class'=>'btn btn-info','content'=>'Cancel'));
		echo form_close();

    ?>
</div>

