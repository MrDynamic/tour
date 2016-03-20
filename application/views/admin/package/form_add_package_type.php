<header class='panel-heading'>
  เพิ่มประเภทแพคเก็จ
</header>
<div class='panel-body'>
    <?php

		$inputName = array('name'=>'package_type_name','id'=>'packageTypeName','class'=>'form-control','required'=>'');
		$inputDesc = array('name'=>'package_type_desc','id'=>'packageTypeDesc','class'=>'form-control');
		$action = 'admin/package/category/save';
		echo form_open($action,array('id'=>'formPackageType'));
		echo create_input(array('ประเภทแพ็คเกจ','packageTypeName'),$inputName);
		echo create_input(array('รายละเอียด','packageTypeDesc'),$inputDesc);
		echo form_button(array('type'=>'submit','class'=>'btn btn-primary','content'=>'Save'));
		echo form_button(array('type'=>'reset','class'=>'btn btn-info','content'=>'Cancel'));
		echo form_close();
    ?>
</div>

