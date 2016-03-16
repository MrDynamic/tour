<div class="rows">
  <div class="col-lg-12">
       <section class="panel">
          <header class="panel-heading">
            เพิ่มประเภทแพคเก็จ
          </header>
          <div class="panel-body">
              <?php
                echo form_open("admin/package/add");
                echo form_label(array());
                echo form_input(array("name"=>""));
                echo form_input(array("name"=>""));
                echo form_close();
              ?>
          </div>
      </section>
  </div>
</div>
