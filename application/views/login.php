<div class="col-md-6 sep-top-xs">
<?php 
if(isset($message) && !empty($message)){
    echo create_error_content($message);
}
?>
  <h4 class="upper">เข้าสู่ระบบ</h4>
  <div class="sep-top-xs">	
  <?php 
  	 echo form_open('authen/submitLogin');
  	 echo create_input(array('ชื่อผู้ใช้','username'), array('name'=>'username','id'=>'username','class'=>'form-control'));
  	 echo create_input(array('รหัสผ่าน','password'),array('name'=>'password','id'=>'password','type'=>'password','class'=>'form-control'));
  	 if(isset($redirectUrl) && !empty($redirectUrl)){
  	     echo form_input(array("type"=>"hidden","value"=>$redirectUrl,"name"=>"redirectUrl"));
  	 }
  	 echo form_button(array('type'=>'submit','class'=>'btn btn-primary','content'=>'Login'));
  	 echo form_close();
  	 echo '<div class="sep-top-xs">';
  	 echo anchor('#','ลืมรหัสผ่าน');
  	 echo '&nbsp;';
  	 echo anchor('user/register','สมัครสมาชิก');
  	 echo '</div>';
  	?>
  </div>
</div>
