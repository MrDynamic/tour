<?php if(isset($_SESSION['username'])) { ?>
<a id="dropdownMenuLogin" href="#" data-toggle="dropdown" class="upper dropdown-toggle"><?=$_SESSION['username'];?></a>
<div aria-labelledby="dropdownMenuLogin" class="dropdown-menu widget-box">
    <div class="shopping_cart_dropdown" style="text-align: left">
     <ul class="cart_list product_list_widget">
      <li>
      	<a href="#"><span>ข้อมูลส่วนตัว</span></a>
      </li>
    </ul>
    <div class="form-inline form-group">
      <button type="button" class="btn btn-primary btn-xs">ออกจากระบบ</button>
    </div>   
    </div>
</div>
<?php }else{?>
<a id="dropdownMenuLogin" href="#" data-toggle="dropdown" class="upper dropdown-toggle">เข้าสู่ระบบ</a>
<div aria-labelledby="dropdownMenuLogin" class="dropdown-menu widget-box">
  <form id="form-login" action="<?=site_url('authen/submitLogin');?>" method="post">
    <div class="form-group">
      <label class="sr-only">ชื่อผู้ใช้</label>
      <input type="text" name="username" id="username" placeholder="ชื่อผู้ใช้" class="form-control input-lg" />
    </div>
    <div class="form-group">
      <label class="sr-only">รหัสผ่าน</label>
      <input type="password" name="password" id="password" placeholder="รหัสผ่าน" class="form-control input-lg" />
    </div>
    <div class="form-inline form-group">
      <button type="submit" class="btn btn-primary btn-xs" id="btnLogin">เข้าสู่ระบบ</button>
    </div>
    <a href="#"><small>ลืมรหัสผ่าน</small></a>
    &nbsp;<a href="<?=site_url('authen/register')?>"><small>สมัครสมาชิก</small></a>
  </form>
</div>
<?php } ?>