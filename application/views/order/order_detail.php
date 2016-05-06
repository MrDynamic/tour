<section class="sep-top-2x">
    <div class="container">
        <h4 class="upper">ข้อมูลติดต่อ</h4>
        <div class="sep-top-sm">
            <div class="row">
                <div class="col-sm-2">
                    รหัสการสั่งซื้อ
                </div>
                <div class="col-sm-10">
                    <?=str_pad($contactData->order_id,5,"0",STR_PAD_LEFT);?>
                </div>
            </div>
            <div class="row sep-bottom-xs">
                <div class="col-sm-2">
                    ชื่อ-นามสกุล
                </div>
                <div class="col-sm-10">
                    <?=$contactData->contact;?>
                </div>
            </div>
            <div class="row sep-bottom-xs">
                <div class="col-sm-2">
                    เบอร์ติดต่อ
                </div>
                <div class="col-sm-10">
                    <?=$contactData->phone;?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    สถานะ
                </div>
                <div class="col-sm-10">
                    <?=$contactData->status;?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="sep-top-2x">
                    <h4 class="upper">แพคเก็จที่สั่งซื้อ</h4>
                    <div class="sep-top-sm">
                        <table class="table table-bordered table-condensed table-responsive">
                            <tbody>
                            <tr>
                                <td>แพคเก็จ</td>
                                <td>จำนวน</td>
                                <td>ราคา/หน่วย</td>
                                <td>ราคารวม</td>
                            </tr>
                            <?php
                            $total = 0;
                            foreach ($orderDetails as $item):
                                $total += $item['qty'] * $item['price'];
                                ?>
                                <tr>
                                    <td><?=$item['package_name']; ?></td>
                                    <td><?=$item['qty']; ?></td>
                                    <td><?=$item['price']; ?></td>
                                    <td>
                                        <h5 class="upper"><?=($item['price']*$item['qty']);?></h5>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <tr class="evidence">
                                <td class="upper" colspan="3">
                                    <h5>รวมทั้งหมด</h5>
                                </td>
                                <td class="upper">
                                    <h5><?=$total;?> THB</h5>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 sep-top-md">
                <a class="btn btn-dark btn-bordered" href="#" onclick="window.history.back();return;" role="button">กลับ</a>
            </div>
            <div class="col-md-4 sep-top-md text-right">
                <a class="btn btn-primary" href="<?=site_url('order/generateReceipt/'.$contactData->order_id);?>" role="button">พิมพ์ใบเสร็จ</a>
            </div>
        </div>
    </div>
</section>