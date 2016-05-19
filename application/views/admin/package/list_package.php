<header class="panel-heading">
  รายการ
</header>
<div class="panel-body">
      <table class="table table-striped table-hover table-bordered">
          <thead>
          <tr>
              <th>ประเภท</th>
              <th>ชื่อแพคเก็จ</th>
              <th>ราคา</th>
              <th>วันที่เดินทาง</th>
              <th>Edit</th>
              <th>Delete</th>
          </tr>
          </thead>
          <tbody>
          <?php
              if(!isset($list)|| empty($list)) { 
                    echo "<tr><td colspan=6>ไม่พบข้อมูล</td></tr>";
              } else{
                foreach ($list as $rows){
                  echo "<tr class=''>";
                  echo "<td>$rows->package_type_name</td>";
                  echo "<td>$rows->package_name</td>";
                  echo "<td>$rows->price</td>";
                  echo "<td>$rows->travel_date</td>";
                  echo '<td>'.anchor("admin/package/$rows->package_id",'Edit').'</td>';
                  echo '<td>'.anchor("admin/package/delete/$rows->package_id",'Delete').'</td>';
                  echo "</tr>";
                }
              }
          ?>
          </tbody>
      </table>
    <div class="col-lg-11">
        <ul class="pager">
            <?=$paginationData->create_links(); ?>
        </ul>
    </div>
</div>
