<!-- Start Shop Cart-->
<section class="sep-top-2x">
<div class="container">
 <?php  echo form_open('user/updateCart'); ?>
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered table-condensed shop-table table-responsive">
          <thead>
            <tr>
              <th scope="col" class="dark upper">แพคเก็จ</th>
              <th scope="col" class="dark upper">ราคา</th>
              <th scope="col" class="dark upper">จำนวน</th>
              <th scope="col" class="dark upper">ราคารวม</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $total = 0;
            foreach($this->my_cart->contents() as $item) :
                $total += $item['qty'] * $item['price'];
          ?>
            <tr>
              <td>
              	<a title="" href="#" onclick="removeCart('<?=$item['rowid'];?>');return false;" class="remove-button">
              		<span class="fa-stack fa-md"><i class="fa fa-circle fa-stack-2x"></i>
              		<i class="fa fa-times fa-stack-1x fa-inverse"></i></span>
              	</a>
                <h6 class="name-prod">
                    <?php
                        echo $item['name'];
                        echo form_input(array('type'=>'hidden','name'=>'rowId[]','value'=>$item['rowid']));
                    ?>
                </h6>
              </td>
              <td>
                <h5 class="upper">
            		<?php 
                	   echo $item['price'];
        	       ?>
                </h5>
              </td>
              <td>
                <input type="text" value="<?=$item['qty']?>" name="qty[]" class="qty">
              </td>
              <td>
                <h5 class="upper"><?=($item['price']*$item['qty']);?></h5>
              </td>
            </tr>
           <?php endforeach;?>
            <tr class="evidence">
                <td class="upper" colspan=3>
                  <h5>ราคารวม</h5>
                </td>
                <td class="upper">
                  <h5><?=$total;?> THB</h5>
                </td>
         	</tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 sep-top-md">
        <button type="submit" class="btn btn-dark btn-bordered">ปรับปรุง</button>
      </div>
      <div class="col-md-6 sep-top-md text-right">
        <button type="button" class="btn btn-primary">ชำระเงิน</button>
      </div>
    </div>
<?php echo form_close(); ?>
</div>
</section>