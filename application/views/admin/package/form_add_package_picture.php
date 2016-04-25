<header class='panel-heading'>
  เพิ่มรูปภาพแพคเก็จ
</header>
<div class='panel-body'>
    <?php

		$selectPackage = array('class'=>'form-control','id'=>'packageType','required'=>'');
    	$uploadPicture = array('name'=>'thumbnail','id'=>'thumbnail','class'=>'form-control','required'=>'');
//         $inputTitle = array('name'=>'title','id'=>'title','class'=>'form-control','required'=>'');
        
    	$hiddenField = array(
    	  array('name'=>'hidePackageId','id'=>'hidePackageId')  
    	);
		$action = site_url('admin/packagePicture/add');
// 		echo create_input(array('ชื่อภาพ','title'), $inputTitle);
		echo create_dropdown(array('แพคเก็จ','packageType'),'package_id',$package,$selectPackage);
		echo create_dropzone(array("Test","Label"), array('action'=>$action,'id'=>'packagePicture'),$hiddenField);
		echo '<div style="margin:20px 0;">';
		echo form_button(array('type'=>'submit','class'=>'btn btn-primary','id'=>'btnSubmitId','content'=>'Save'));
		echo form_button(array('type'=>'reset','class'=>'btn btn-info','content'=>'Cancel'));
		echo '</div>';
		
    ?>
</div>