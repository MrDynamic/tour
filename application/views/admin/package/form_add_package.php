<header class='panel-heading'>
  เพิ่มประเภทแพคเก็จ
</header>
<div class='panel-body'>
    <?php

		$inputName = array('name'=>'package_type_name','id'=>'packageTypeName','class'=>'form-control','required'=>'');
		$inputDesc = array('name'=>'package_type_desc','id'=>'packageTypeDesc','class'=>'form-control');
		$selectType = array('name'=>'package_type_id');
		$action = 'admin/package/add';
		echo form_open($action,array('id'=>'formPackage'));
		echo OPEN_FORM_GROUP;
		echo form_label('Package Type Name','packageTypeName');
		echo form_input($inputName);
		echo CLOSE_FORM_GROUP;
		echo OPEN_FORM_GROUP;
		echo form_label('Package Type Description','packageTypeDesc');
		echo form_input($inputDesc);
		echo CLOSE_FORM_GROUP;
		echo form_button(array('type'=>'submit','class'=>'btn btn-info','content'=>'Save'));
		echo form_button(array('type'=>'reset','class'=>'btn btn-info','content'=>'Cancel'));
		echo form_close();
    ?>
</div>

