<section class="sep-top-2x">
<div class="container">
    <div class="row">
    <h5 class="sep-bottom-xs">
    	รายการสั่งซื้อ
    </h5>
      <div class="col-md-10">
        <table class="table table-bordered table-condensed shop-table table-responsive">
          <thead>
            <tr>
                <th scope="col" class="dark upper">หมายเลขการสั่งซื้อ</th>
                <th scope="col" class="dark upper">รหัสการทำรายการ</th>
                <th scope="col" class="dark upper">สถานะ</th>
                <th scope="col" class="dark upper">ติดต่อ</th>
                <th scope="col" class="dark upper">ราคารวม</th>
                <th scope="col" class="dark">รายละเอียด</th>
                <th scope="col" class="dark">พิมพ์ใบเสร็จ</th>
            </tr>
          </thead>
          <tbody>
          <?php
          if(sizeof($orderData) > 0):
          foreach($orderData as $item) : ?>
            <tr>
                <td>
                    <?=str_pad($item->order_id,5,"0",STR_PAD_LEFT);?>
                </td>
                <td>
                    <?=$item->transaction_id;?>
                </td>
                <td>
                    <?=$item->status;?>
                </td>
                <td>
                    <?=$item->contact;?>
                </td>
                <td>
                    <?=$item->total;?>
                </td>
                <td>
                  <a class="btn btn-info btn-xs" href="<?=site_url('order/orderDetailPage/'.$item->order_id);?>" role="button">รายละเอียด</a>
                </td>
                <td>
                    <?php if($item->status_code == STATUS_SUCCESS): ?>
                        <a class="btn btn-primary btn-xs" href="<?=site_url('order/generateReceipt/'.$item->order_id);?>" role="button">พิมพ์ใบเสร็จ</a>
                    <?php endif; ?>
                </td>
            </tr>
           <?php
              endforeach;
            else:
                echo "<tr style='text-align:center;'><td colspan='7'>ไม่พบข้อมูลการทำรายการ</td></tr>";
            endif;
          ?>
          </tbody>
        </table>
      </div>
    </div>
     <div class="sep-top-sm col-md-10">
        <!-- start pagination-->
        <ul class="pager circle">
        	<?=$paginationData->create_links(); ?>
        </ul>
        <!-- end pagination-->
      </div>
<?php echo form_close(); ?>
</div>
</section>