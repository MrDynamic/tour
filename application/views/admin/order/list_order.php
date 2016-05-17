<header class="panel-heading">
    รายการ
</header>
<div class="panel-body">
    <table class="table table-striped table-hover table-bordered">
        <thead>
        <tr>
            <th>หมายเลขการสั่งซื้อ</th>
            <th>รหัสการทำรายการ</th>
            <th>สถานะ</th>
            <th>สถานะ PayPal</th>
            <th>ติดต่อ</th>
            <td>เบอร์โทรศัพท์</td>
            <th>ราคารวม</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if(!isset($orderData)|| empty($orderData)) {
            echo "<tr><td colspan=7>ไม่พบข้อมูล</td></tr>";
        } else{
            foreach ($orderData as $row){
                echo "<tr class=''>";
                echo "<td>".str_pad($row->order_id,5,"0",STR_PAD_LEFT)."</td>";
                echo "<td>$row->transaction_id</td>";
                echo "<td>$row->status</td>";
                echo "<td>$row->payment_status</td>";
                echo "<td>$row->contact</td>";
                echo "<td>$row->phone</td>";
                echo "<td>$row->total</td>";
                echo "</tr>";
            }
        }
        ?>
        </tbody>
    </table>
    <div class="col-lg-12">
        <ul class="pager">
            <?=$paginationData->create_links(); ?>
        </ul>
    </div>
</div>

