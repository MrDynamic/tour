<ul id="one-page-menu" role="menu" class="nav navbar-nav navbar-left">
  <?php if(isset($menu_type) && !empty($menu_type) && $menu_type==CONTENT_TYPE) { ?>
  <li>
  	<?=anchor('#home','หน้าหลัก');?>
  </li>
  <li>
  	<?=anchor('#about','เกี่ยวกับ');?>
  </li>
  <li>
  	<?=anchor('#portfolio','ผลงาน');?>
  </li>
  <li>
  	<?=anchor('package','แพคเก็จ');?>
  </li>
   <li>
   <?=anchor('#contacts','ติดต่อ');?>
  </li>
  <?php }else{?>
   <li>
  	<a href="#home" title="Home" data-ref="home">หน้าหลัก</a>
  </li>
  <li>
  	<a href="#about" title="About us" data-ref="about">เกี่ยวกับ</a>
  </li>
  <li>
  	<a href="#portfolio" title="Portfolio" data-ref="portfolio">ผลงาน</a>
  </li>
  <li>
  	<?=anchor('package','แพคเก็จ');?>
  </li>
   <li>
   	<a href="#contacts" title="Contacts" data-ref="contacts">ติดต่อ</a>
  </li>
  <?php }?>
</ul>