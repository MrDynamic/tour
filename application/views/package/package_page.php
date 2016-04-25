 <!-- Start Shop section-->
      <section class="sep-top-2x">
        <div class="container">
          <div class="page-title-line sep-bottom-md">
            <div class="row">
              <div class="col-md-2">
                <form method="get">
                  <div class="form-group">
                    <select name="" class="form-control input-lg rounded primary">
                      <option selected="selected" value="">Select a category…</option>
                      <option value="Bags">Bags</option>
                      <option value="Jeans">Jeans</option>
                      <option value="Men">Men</option>
                      <option value="Shoes">Shoes</option>
                      <option value="Sweaters">Sweaters</option>
                      <option value="Tops">Tops</option>
                    </select>
                  </div>
                </form>
              </div>
              <div class="col-md-10 text-right">
                <div class="order-content pull-right">
                  <form method="get" class="pull-right">
                    <div class="form-group">
                      <select name="orderby" class="form-control input-lg rounded">
                        <option selected="selected" value="">Default sorting</option>
                        <option value="popularity">Sort by popularity</option>
                        <option value="rating">Sort by average rating</option>
                        <option value="date">Sort by newness</option>
                        <option value="price">Sort by price: low to high</option>
                        <option value="price-desc">Sort by price: high to low</option>
                      </select>
                    </div>
                    <input type="hidden" value="product" name="post_type">
                  </form>
                </div>
              </div>
            </div>
          </div>
            <?php 
                    if(isset($packageData) && !empty($packageData)){
            ?>
              <div class="row">
                  <?php 
                            foreach ($packageData as $val){
                                echo "<div class='col-md-3 sep-bottom-lg'>";
                                echo anchor("package/detail/$val->package_id","<img src='".getFilePath($val->thumbnail,true)."' class='img-responsive'>",array('class'=>'product-image outline-outward'));
                                echo "<div class='product-title'><span class='upper'>$val->package_name</span>";
                                echo "<p>$val->package_type_name</p>";
                                echo "</div>";
                                echo "<div class='product-detail'>";
                                echo "<div class='pull-right price-shop text-right'>";
                                if($val->discount > 0){
                                    echo "<del>$val->price</del>";
                                    echo "<ins>($val->price - $val->discount) THB</ins>";
                                }else{
                                    echo "<ins>$val->price</ins> THB";
                                }
                                echo "</div>";
    //                             echo "<div class='rate'>";
    //                             echo "<input type='number' name='' value='5' data-clearable='remove' data-max='5' data-min='1' data-icon-lib='fa' data-active-icon='fa-star' data-inactive-icon='fa-star-o' data-clearable-icon='fa-times' class='rating'>";
    //                             echo "</div><a href='#'>24 customer reviews</a>";
                                echo "</div>";
                                echo "</div>";
                                
                            }
                  
                  ?>
              </div>
              <div class="sep-top-sm">
                <!-- start pagination-->
                <ul class="pager circle">
                  <li class="previous hidden-xs"><a href="#">←</a></li>
                  <li><a href="#">1</a></li>
                  <li><span class="current">2</span></li>
                  <li><a href="#">3</a></li>
                  <li class="next hidden-xs"><a href="#">→</a></li>
                </ul>
                <!-- end pagination-->
              </div>
          <?php }else{?>    
            <!-- Not Found Package -->
            <div class="icon-box icon-horizontal icon-lg">
                <div class="icon-content img-circle"><i class="fa fa-bus"></i></div>
                <div class="icon-box-content">
                  <h5 class="upper">
                  	<a href="#">ไม่พบข้อมูล</a>
                  </h5>
                </div>
             </div>
          <?php } ?>
          
        </div>
      </section>
      <!-- End Shop section-->