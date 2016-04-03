<header class="panel-heading">
  รายการ
</header>
<div class="panel-body">
      <table class="table table-striped table-hover table-bordered">
          <thead>
          <tr>
              <th>ประเภท</th>
              <th>รายละเอียด</th>
              <th>Edit</th>
              <th>Delete</th>
          </tr>
          </thead>
          <tbody>
          <?php
              if(!isset($list)|| empty($list)) { 
                    echo "<tr><td colspan=4>ไม่พบข้อมูล</td></tr>";
              } else{
                foreach ($list as $rows){
                  echo "<tr class=''>";
                  echo "<td>$rows->package_type_name</td>";
                  echo "<td>$rows->package_type_desc</td>";
                  echo '<td>'.anchor("admin/package/category/$rows->package_type_id",'Edit').'</td>';
                  echo '<td>'.anchor("admin/package/category/delete/$rows->package_type_id",'Delete').'</td>';
                  echo "</tr>";
                }
              }
          ?>
          </tbody>
      </table>
</div>
