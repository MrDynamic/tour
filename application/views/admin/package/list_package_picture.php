<header class="panel-heading">
  รายการ
</header>
<div class="panel-body">
      <table class="table table-striped table-hover table-bordered">
          <thead>
          <tr>
              <th>รูปภาพ</th>
              <th>ชื่อภาพ</th>
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
                  echo "<td><img src='".getFilePath($rows->image_path,true)."' height=100 width=150 /></td>";
                  echo "<td>$rows->image_title</td>";
                  echo '<td>'.anchor("#",'Delete',array('onclick'=>"deletePackagePicture($rows->package_img_id,'$rows->image_path');return false;")).'</td>'; 
                  echo "</tr>";
                }
              }
          ?>
          </tbody>
      </table>
</div>
