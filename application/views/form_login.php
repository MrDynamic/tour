<?php if(isset($_SESSION['role']) && $_SESSION['role'] == USER_ROLE) { ?>
<a id="dropdownMenuLogin" href="#" data-toggle="dropdown" class="upper dropdown-toggle"><?=$_SESSION['username'];?></a>
<div aria-labelledby="dropdownMenuLogin" class="dropdown-menu widget-box">
    <div class="shopping_cart_dropdown" style="text-align: left">
     <ul class="cart_list product_list_widget">
        <li>
            <a href="<?=site_url('user/userPage');?>"><span>ข้อมูลส่วนตัว</span></a>
        </li>
        <li>
            <a href="<?=site_url('user/changePasswordPage');?>"><span>เปลี่ยนรหัสผ่าน</span></a>
        </li>
        <li>
            <a href="<?=site_url('order/listOrder');?>"><span>รายการสั่งซื้อ</span></a>
        </li>
    </ul>
    <div class="form-inline form-group">
      <form method="post" action="<?=site_url('authen/logout');?>">
      	<button type="submit" class="btn btn-primary btn-xs">ออกจากระบบ</button>
      </form>
    </div>   
    </div>
</div>
<?php }else if(isset($_SESSION['role']) && $_SESSION['role'] == ADMIN_ROLE){ ?>
    <a id="dropdownMenuLogin" href="<?=site_url('admin');?>" class="upper dropdown-toggle"><?=$_SESSION['username'];?></a>
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
    &nbsp;<a href="<?=site_url('user/register')?>"><small>สมัครสมาชิก</small></a>
  </form>
</div>
<?php } ?>