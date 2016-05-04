<a id="dropdownMenuCart" href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-shopping-cart fa-lg"></i>&nbsp;
<?php if($this->my_cart->total_items() > 0): ?>
<span class="badge"><?=sizeof($this->my_cart->contents());?></span>
<?php endif; ?>
</a>
<div aria-labelledby="dropdownMenuCart" class="dropdown-menu widget-box">
  <div class="shopping_cart_dropdown">
    <ul class="cart_list product_list_widget">
    <?php 
    $total = 0;
    foreach ($this->my_cart->contents() as $item): 
        $total += $item['price']*$item['qty'];
    ?>
      <li><a href="<?=site_url('user/viewCart');?>">
      	<img alt="" src="resources/img/booking.png">
      	<span><?=$item['name'];?></span></a>
        <h5 class="quantity"><?=($item['price']*$item['qty']);?></h5>
      </li>
    <?php endforeach;?>
    </ul>
    <?php if($this->my_cart->total_items() > 0):?>
    <div class="total">
      <h6>รวม</h6><span><?=$total;?> THB</span>
    </div>
    <div class="action-button">
    	<?php 
    	   echo anchor('order/viewCart','ตะกร้าสินค้า',array('class'=>'btn btn-dark btn-bordered btn-xs upper'));
    	   echo anchor('order/checkoutPage','ชำระเงิน',array('class'=>'btn btn-primary btn-xs upper'));
    	?>
    </div>
    <?php endif; ?>
  </div>
</div>
