<a id="dropdownMenuCart" href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-shopping-cart fa-lg"></i>&nbsp;
<?php if(sizeof($this->my_cart->contents()) > 0): ?>
<span class="badge"><?=sizeof($this->my_cart->contents());?></span>
<?php endif; ?>
</a>
<div aria-labelledby="dropdownMenuCart" class="dropdown-menu widget-box">
  <div class="shopping_cart_dropdown">
    <ul class="cart_list product_list_widget">
    <?php 
    $total = 0;
    foreach ($this->my_cart->contents() as $item): 
        $total += $item['price'];
    ?>
      <li><a href="#" class="delete"><i class="fa fa-close"></i></a><a href="#">
      	<img alt="" src="resources/img/booking.png">
      	<span><?=$item['name'];?></span></a>
        <h5 class="quantity"><?=$item['price'];?></h5>
      </li>
    <?php endforeach;?>
    </ul>
    <?php if(sizeof($this->my_cart->contents()) > 0):?>
    <div class="total">
      <h6>รวม</h6><span><?=$total;?> THB</span>
    </div>
    <div class="action-button">
        <a href="shop-cart.html" class="btn btn-dark btn-bordered btn-xs upper">ยืนยันการสั่งซื้อ</a>
    </div>
    <?php endif; ?>
  </div>
</div>
