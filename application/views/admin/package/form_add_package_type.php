<div class="col-lg-6">
	<section class="panel">
		<header class='panel-heading'>
		  เพิ่มประเภทแพคเก็จ
		</header>
		<div class='panel-body'>
			<?php

				$inputName = array('name'=>'package_type_name','id'=>'packageTypeName','class'=>'form-control','required'=>'');
				$inputDesc = array('name'=>'package_type_desc','id'=>'packageTypeDesc','class'=>'form-control');
				$hiddenTypeId = array('type'=>'hidden','name'=>'package_type_id');
				if($action == ACTION_ADD){
					$action = 'admin/package/category/save';
				}else{
					$action = 'admin/package/category/update';
					$inputName['value'] = $editData->package_type_name;
					$inputDesc['value'] = $editData->package_type_desc;
					$hiddenTypeId['value'] = $editData->package_type_id;

				}

				echo form_open($action,array('id'=>'formPackageType'));
				echo form_input($hiddenTypeId);
				echo create_input(array('ประเภทแพ็คเกจ','packageTypeName'),$inputName);
				echo create_input(array('รายละเอียด','packageTypeDesc'),$inputDesc);
				echo form_button(array('type'=>'submit','class'=>'btn btn-primary','content'=>'Save'));
				echo form_button(array('type'=>'reset','class'=>'btn btn-info','content'=>'Cancel'));
				echo form_close();
			?>
		</div>
	</section>
</div>

