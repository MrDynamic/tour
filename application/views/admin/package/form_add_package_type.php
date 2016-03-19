<header class='panel-heading'>
  เพิ่มประเภทแพคเก็จ
</header>
<div class='panel-body'>
    <?php

		$inputName = array('name'=>'package_type_name','id'=>'packageTypeName','class'=>'form-control','required'=>'');
		$inputDesc = array('name'=>'package_type_desc','id'=>'packageTypeDesc','class'=>'form-control');
		$action = 'admin/package/category/save';
		echo form_open($action,array('id'=>'formPackageType'));
		echo OPEN_FORM_GROUP;
		echo form_label('Package Type Name','packageTypeName');
		echo form_input($inputName);
		echo CLOSE_FORM_GROUP;
		echo OPEN_FORM_GROUP;
		echo form_label('Package Type Description','packageTypeDesc');
		echo form_input($inputDesc);
		echo CLOSE_FORM_GROUP;
		echo form_button(array('type'=>'submit','class'=>'btn btn-primary','content'=>'Save'));
		echo form_button(array('type'=>'reset','class'=>'btn btn-info','content'=>'Cancel'));
		echo form_close();
    ?>
</div>

