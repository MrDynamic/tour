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
                  echo '<td><a class="edit" href="javascript:;">Edit</a></td>';
                  echo '<td><a class="delete" href="javascript:;">Delete</a></td>';
                  echo "</tr>";
                }
              }
          ?>
          </tbody>
      </table>
</div>
