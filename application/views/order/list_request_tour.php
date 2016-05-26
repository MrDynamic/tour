<section class="sep-top-2x">
    <div class="container">
        <div class="row">
            <h5 class="sep-bottom-xs">
                รายการจัดทัวร์
            </h5>
            <div class="col-md-10">
                <table class="table table-bordered table-condensed shop-table table-responsive">
                    <thead>
                    <tr>
                        <th scope="col" class="dark upper">วันที่เดินทาง</th>
                        <th scope="col" class="dark upper">ชื่อผู้ติดต่อ</th>
                        <th scope="col" class="dark upper">เบอร์โทร</th>
                        <th scope="col" class="dark upper">สถานะ</th>
                        <th scope="col" class="dark">แก้ไข</th>
                        <th scope="col" class="dark">ยกเลิก</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(sizeof($requestData) > 0):
                        foreach($requestData as $item) : ?>
                            <tr>
                                <td>
                                    <?=$item->travel_date;?>
                                </td>
                                <td>
                                    <?=$item->contact_name;?>
                                </td>
                                <td>
                                    <?=$item->phone;?>
                                </td>
                                <td>
                                    <?=$item->status;?>
                                </td>
                                <td>
                                    <?php if($item->status_code == REQUEST_STATUS_WAITING): ?>
                                    <a class="btn btn-info btn-xs" href="<?=site_url('order/editRequestTour/'.$item->request_id);?>" role="button">แก้ไข</a>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($item->status_code == REQUEST_STATUS_WAITING): ?>
                                        <a class="btn btn-primary btn-xs" data-href="<?=site_url('order/cancelRequestTour/'.$item->request_id);?>" data-toggle="modal" data-target="#confirm-delete" id="cancelRequestBtn" role="button">ยกเลิก</a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php
                        endforeach;
                    else:
                        echo "<tr style='text-align:center;'><td colspan='6'>ไม่พบข้อมูลการทำรายการ</td></tr>";
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