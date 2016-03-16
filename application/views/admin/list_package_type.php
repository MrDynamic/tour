<?php 

  if(!isset($body_detail)|| empty($body_detail)) { 
       echo "ไม่พบข้อมูล";
  } else{

  ?>
  <table class="table table-striped table-hover table-bordered" id="editable-sample">
      <thead>
      <tr>
          <th>ประเภทแพคเก็จ</th>
          <th>รายละเอียด</th>
          <th>Edit</th>
          <th>Delete</th>
      </tr>
      </thead>
      <tbody>
      <?php
          foreach ($body_detail as $rows){
            echo "<tr class=''>";
            echo "<td>$rows->package_type_name</td>";
            echo "<td>$rows->package_type_desc</td>";
            echo '<td><a class="edit" href="javascript:;">Edit</a></td>';
            echo '<td><a class="delete" href="javascript:;">Delete</a></td>';
            echo "</tr>";
          }
      ?>
      </tbody>
  </table>
<?php } ?>