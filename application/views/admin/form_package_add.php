<div class="rows">
  <div class="col-lg-6">
      <section class="panel">
          <header class="panel-heading">
              เพิ่มประเภทแพคเก็จ
          </header>
          <div class="panel-body">
              <form role="form" id="formPackage">
                  <div class="form-group">
                      <label for="name">ประเภทแพคเก็จ</label>
                      <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                  <div class="form-group">
                      <label for="desc">รายละเอียด</label>
                      <textarea class="wysihtml5 form-control" rows="10" id="desc" name="desc"></textarea>
                  </div>
                  <button type="submit" class="btn btn-info">บันทึก</button>
                  <button type="reset" class="btn btn-info">ยกเลิก</button>
              </form>
          </div>
      </section>
  </div>
  <div class="col-lg-6">
       <section class="panel">
          <header class="panel-heading">
              รายการ
          </header>
          <div class="panel-body">
              Detail
              <label class="error" id="errorDetail">Test Error</label>
          </div>
      </section>
  </div>
</div>
