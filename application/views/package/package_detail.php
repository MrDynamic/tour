<!-- Start Shop section-->
      <section itemscope itemtype="http://data-vocabulary.org/Product">
        <div class="container">
          <div class="row">
            <!-- Start Sidebar-->
            <div class="col-md-5 sep-top-2x">
              <div class="product-images"><a href="<?=getFilePath($packageData->thumbnail,true)?>" data-rel="prettyPhoto[pp_gal0]" title="<?=$packageData->package_name;?>"><img title="" alt="" src="<?=getFilePath($packageData->thumbnail,true);?>" itemprop="image" class="img-responsive"></a></div>
              <div class="product-thumbnails">
               	<?php 
               	    if(isset($packagePicture)){
               	        foreach($packagePicture as $val){
               	            echo "<a href='".getFilePath($val->image_path,true)."' data-rel='prettyPhoto[pp_gal]' title='$val->image_title' class='zoom first'>";
               	            echo "<img title='' alt='' src='".getFilePath($val->image_path,true)."' class='img-responsive'>";
               	            echo "</a>";
               	        }
               	    }
               	?>
              </div>
            </div>
            <!-- End Sidebar-->
            <!-- Start Content-->
            <div class="col-md-7 sep-top-lg">
              <div class="main-product-title">
                <ul class="social-icon pull-right">
                  <li><a href="#"><i class="fa fa-facebook-square fa-lg"></i></a></li>
                </ul>
                <!--
                li
                  .btn-group
                    a.dropdown-toggle(href='#', data-toggle="dropdown")
                      i.fa.fa-bars.fa-lg
                    ul.dropdown-menu.pull-right(role='menu')
                      li
                        a(href='#') Dropdown link
                      li
                        a(href='#') Dropdown link
                -->
                <h3><span itemprop="name"><?=$packageData->package_name;?></span><small class="sep-top-xs" itemprop="brand"><?=$packageData->package_type_name;?></small></h3>
                <meta itemprop="identifier" content="mpn:12345-6789">
              </div>
              <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" content="3" class="rate sep-top-xs">
                <meta itemprop="worstRating" content="1">
                <meta itemprop="ratingValue" content="3">
              </div>
              <div itemprop="description" class="sep-top-sm">
                <p class="lead"><?=$packageData->package_desc;?></p>
              </div>
              <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="price-shop sep-top-xs">
              	<?php 
                  	if($packageData->discount > 0){
                  	    echo "<del>$packageData->price</del>";
                  	    echo "<ins><span itemprop='price'>($packageData->price - $packageData->discount) THB</span></ins>";
                  	}else{
                  	    echo "<ins><span itemprop='price'>$packageData->price THB</span></ins>";
                  	}
              	?>
              </div>
              <form method="get">
                <div class="row">
                  <div class="col-md-3 col-sm-6 sep-top-md">
                  	<?php echo form_input(array('type'=>'hidden','id'=>'packageId','value'=>$packageData->package_id)); 
                  	      echo form_input(array('type'=>'hidden','id'=>'price','value'=>$packageData->net_price));
                  	      echo form_input(array('type'=>'hidden','id'=>'packageName','value'=>$packageData->package_name));
                  	?>
                    <input type="text" value="1" name="qty" id="reserveQty" class="qty">
                  </div>
                  <div class="col-md-9 col-sm-6 sep-top-md">
                    <button type="button" id="btnReserve" class="btn btn-primary btn-lg"><i class="fa fa-shopping-cart"></i> จองแพคเก็จ</button>
                  </div>
                </div>
              </form>
              <ul class="sep-top-lg product-category">
                <li>
                  <h6 class="upper">ประเภท</h6><a href="#"><?=$packageData->package_type_name;?></a>
                </li>
              </ul>
            </div>
            <!-- End Content-->
          </div>
          <div class="row">
            <!-- Start Content-->
            <div class="col-md-7 col-md-push-5 sep-top-md">
              <!-- start accordion group-->
              <div id="accordion" class="accordion-group">
                <!-- start accordion item-->
                <div class="accordion-item panel">
                  <div class="accordion-heading upper"><a data-toggle="collapse" data-parent="#accordion" href="#collapse0" class="accordion-toggle">รายละเอียดแพคเก็จ<i class="accordion-icon fa fa-plus"></i></a></div>
                  <div id="collapse0" class="accordion-body panel-collapse collapse">
                      <div class="icon-box icon-horizontal icon-md">
                        <div style="font-size:3em;">
                        	<a href="<?=getFilePath($packageData->pdf_path,true); ?>" style="color:red !important;" target="_blank"><i class="fa fa-file-pdf-o"></i></a>
                        </div>
                      </div>
                  </div>
                </div>
                <!-- end accordion item-->
                <!-- start accordion item-->
                <div class="accordion-item panel">
                  <div class="accordion-heading upper"><a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="accordion-toggle">ข้อมูลเพิ่มเติม<i class="accordion-icon fa fa-plus"></i></a></div>
                  <div id="collapse2" class="accordion-body panel-collapse collapse">
                    <p>
                      Curabitur pellentesque neque eget diam posuere porta. Quisque
                      ut nulla at nunc vehicula lacinia. Proin adipiscing porta
                      tellus, ut feugiat nibh. Lorem ipsum nulla amos eget purus
                      vel mauris tincidunt tincidunt nibh tortor. Nunc faucibus
                      pellentesque facilisis. Interdum et malesuada fames ac ante
                      ipsum primis in faucibus.
                    </p>
                  </div>
                </div>
                <!-- end accordion item-->
              </div>
              <!-- end accordion group-->
            </div>
            <!-- End Content-->
          </div>
        </div>
      </section>
      <!-- End Shop section-->