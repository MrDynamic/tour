 <!-- Start Shop section-->
      <section class="sep-top-2x">
        <div class="container">
          <div class="page-title-line sep-bottom-md">
            <div class="row">
              <div class="col-md-2">
                  <div class="form-group">
                    <?php
                        $selectAreaAttr = array('class'=>'form-control input-lg rounded primary','id'=>'packageAreaId');
                        echo form_open('package/filterByArea',array('id'=>'form-filterByArea'));
                        echo form_dropdown("areaId",$areaData,isset($areaSelected)?$areaSelected:'',$selectAreaAttr);
                        echo form_close();
                    ?>
                  </div>
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
                      <?=$paginationData->create_links(); ?>
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