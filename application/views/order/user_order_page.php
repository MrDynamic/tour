<section class="sep-top-2x">
<div class="container">
    <div class="row">
    <h5 class="sep-bottom-xs">
    	รายการสั่งซื้อ
    </h5>
      <div class="col-md-8">
        <table class="table table-bordered table-condensed shop-table table-responsive">
          <thead>
            <tr>
              <th scope="col" class="dark upper">รหัสการสั่งซื้อ</th>
              <th scope="col" class="dark upper">รหัสการทำรายการ</th>
              <th scope="col" class="dark upper">ติดต่อ</th>
              <th scope="col" class="dark upper">ราคารวม</th>
              <th scope="col" class="dark">รายละเอียด</th>
              <th scope="col" class="dark">พิมพ์ใบเสร็จ</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($orderData as $item) : ?>
            <tr>
              <td>
              	<?=str_pad($item->order_id,5,"0",STR_PAD_LEFT);?>
              </td>
              <td>
                <?=$item->transaction_id;?>
              </td>
              <td>
                <?=$item->contact;?>
              </td>
              <td>
                <?=$item->total;?>
              </td>
              <td>
              	&nbsp;
              </td>
              <td>
              	&nbsp;
              </td>
            </tr>
           <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
     <div class="sep-top-sm col-md-8">
        <!-- start pagination-->
        <ul class="pager circle">
        	<?=$paginationData->create_links(); ?>
        </ul>
        <!-- end pagination-->
      </div>
<?php echo form_close(); ?>
</div>
</section>