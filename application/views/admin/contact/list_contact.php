<header class="panel-heading">
    รายการ
</header>
<div class="panel-body">
    <table class="table table-striped table-hover table-bordered">
        <thead>
        <tr>
            <th>ชื่อผู้ติดต่อ</th>
            <th>เบอร์โทร</th>
            <th>email</th>
            <td>รายละเอียด</td>
        </tr>
        </thead>
        <tbody>
        <?php
        if(!isset($contactData)|| empty($contactData)) {
            echo "<tr><td colspan=4>ไม่พบข้อมูล</td></tr>";
        } else{
            foreach ($contactData as $row){
                echo "<tr class=''>";
                echo "<td>$row->contact_name</td>";
                echo "<td>$row->phone</td>";
                echo "<td>$row->email</td>";
                echo "<td>$row->detail</td>";
                echo "</tr>";
            }
        }
        ?>
        </tbody>
    </table>
</div>

