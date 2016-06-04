<header class="panel-heading">
    รายการ
</header>
<div class="panel-body">
    <table class="table table-striped table-hover table-bordered">
        <thead>
        <tr>
            <th>ลำดับ</th>
            <th>E-Mail</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if(!isset($mailData)|| empty($mailData)) {
            echo "<tr><td colspan=7>ไม่พบข้อมูล</td></tr>";
        } else{
            $i=1;
            foreach ($mailData as $row){
                echo "<tr class=''>";
                echo "<td>$i</td>";
                echo "<td>$row->mail_to</td>";
                echo "<td><a class='btn btn-info btn-xs' href=".site_url('admin/config/deleteMail/'.$row->mail_id)." role='button'>ลบข้อมูล</a></td>";
                echo "</tr>";
                $i++;
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

