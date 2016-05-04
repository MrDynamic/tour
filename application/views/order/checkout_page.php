<!-- Start Shop Cart-->
      <section class="sep-top-2x">
        <div class="container">
          <?php echo form_open('order/checkout'); ?>
            <h4 class="upper">ข้อมูลติดต่อ</h4>
            <div class="sep-top-sm">
              <div class="row">
                <div class="col-sm-3 form-group">
                  <label class="sr-only">First Name</label>
                  <input type="text" value="" placeholder="ชื่อ" name="firstname" id="firstname" class="form-control input-lg" required>
                </div>
                <div class="col-sm-3 form-group">
                  <label class="sr-only">Last Name</label>
                  <input type="text" value="" placeholder="นามสกุล" name="lastname" id="lastname" class="form-control input-lg" required>
                </div>
                <div class="col-sm-6 form-group">
                  <label class="sr-only">Phone</label>
                  <input type="text" value="" placeholder="เบอร์ติดต่อ" name="phone" id="phone" class="form-control input-lg" required>
                </div>
              </div>
            </div>
            <div class="sep-top-xs">
              <textarea rows="7" placeholder="ข้อมูลเพิ่มเติม" name="additional" id="additional" class="form-control input-lg"></textarea>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="sep-top-2x">
                  <h4 class="upper">แพคเก็จที่สั่งซื้อ</h4>
                  <div class="sep-top-sm">
                    <table class="table table-bordered table-condensed table-responsive">
                      <tbody>
                        <tr>
                          <td class="upper">
                            <h5>สินค้าที่สั่งซื้อ</h5>
                          </td>
                          <td class="upper">
                            <h5>รวม</h5>
                          </td>
                        </tr>
                        <?php 
                            $total = 0;
                            foreach ($this->my_cart->contents() as $item):
                            $total += $item['qty'] * $item['price'];
                        ?>
                        <tr>
                          <td><?=$item['name'].' (' .$item['qty'].')'; ?></td>
                          <td>
                            <h5 class="upper"><?=$item['price'];?></h5>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                        <tr class="evidence">
                          <td class="upper">
                            <h5>รวมทั้งหมด</h5>
                          </td>
                          <td class="upper">
                            <h5><?=$total;?> THB</h5>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="sep-top-2x">
                  <h4 class="upper">ช่องทางชำระเงิน</h4>
                  <div class="sep-top-sm">
                    <table class="table table-bordered table-condensed table-responsive">
                      <tbody>
                        <tr>
                          <td>
                            <div class="radio">
                              <label>
                                <input type="radio" value="1"  name="paymentTypeId" checked><img src="resources/img/paypal-logo.png" alt="paypal">
                              </label>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-md-12 sep-top-md text-right">
                <button type="submit" class="btn btn-primary btn-lg">ยืนยัน</button>
              </div>
            </div>
          </form>
        </div>
      </section>
      <!-- End Shop Cart-->