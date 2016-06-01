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
                echo "<ins>".($val->price - $val->discount)."THB</ins>";
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
            <?php echo $this->ajax_pagination->create_links(); ?>
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