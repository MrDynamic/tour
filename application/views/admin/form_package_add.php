<div class="rows">
  <div class="col-lg-12">
       <section class="panel">
          <header class="panel-heading">
                      Editable Table
                  </header>
                  <div class="panel-body">
                      <div class="adv-table editable-table ">
                          <div class="clearfix">
                              <div class="btn-group">
                                  <button id="editable-sample_new" class="btn green">
                                      เพิ่ม <i class="fa fa-plus"></i>
                                  </button>
                              </div>
                          </div>
                          <div class="space15"></div>
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
                      </div>
                  </div>
      </section>
  </div>
</div>
