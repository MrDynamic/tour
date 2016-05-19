<header class="panel-heading">
    รายการ
</header>
<div class="panel-body">
    <table class="table table-striped table-hover table-bordered">
        <thead>
        <tr>
            <th>วันที่ออกเดินทาง</th>
            <th>ชื่อผู้ติดต่อ</th>
            <th>เบอร์โทร</th>
            <th>สถานะ</th>
            <td>หมายเหตุ</td>
            <td>รายละเอียด</td>
            <th>ยกเลิก</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if(!isset($requestData)|| empty($requestData)) {
            echo "<tr><td colspan=6>ไม่พบข้อมูล</td></tr>";
        } else{
            foreach ($requestData as $row){
                echo "<tr class=''>";
                echo "<td>$row->travel_date</td>";
                echo "<td>$row->contact_name</td>";
                echo "<td>$row->phone</td>";
                echo "<td>$row->status</td>";
                echo "<td>$row->remark</td>";
                echo '<td>';
                echo "<a class='btn btn-info btn-xs' href=".site_url('admin/manageOrder/requestDetail/'.$row->request_id)." role='button'>รายละเอียด</a>";
                echo "</td>";
                echo "<td>&nbsp;</td>";
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

