<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ocharos 's tour</title>
    <meta name="description" content="One Page Layout">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <base href="<?php echo base_url();?>" /> 
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,300,400,600,700">
    <link href='https://fonts.googleapis.com/css?family=Candal' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="resources/styles/font-awesome.css">
    <link rel="stylesheet" href="resources/styles/owl.carousel.css">
    <link rel="stylesheet" href="resources/styles/owl.theme.css">
    <link rel="stylesheet" href="resources/styles/slit-slider-style.css">
    <link rel="stylesheet" href="resources/styles/slit-slider-custom.css">
    <link rel="stylesheet" href="resources/styles/idangerous.swiper.css">
    <link rel="stylesheet" href="resources/styles/yamm.css">
    <link rel="stylesheet" href="resources/styles/animate.css">
    <link rel="stylesheet" href="resources/styles/prettyPhoto.css">
    <link rel="stylesheet" href="resources/styles/bootstrap-slider.css">
    <link rel="stylesheet" href="resources/styles/device-mockups2.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="resources/styles/main.css">
    <link rel="stylesheet" href="resources/styles/main-responsive.css">
    <link id="primary_color_scheme" rel="stylesheet" href="resources/styles/theme_meadow.css">
    <script src="resources/scripts/vendor/modernizr.js"></script>
    <noscript>
      <link rel="stylesheet" href="resources/styles/styleNoJs.css">
    </noscript>
  </head>
  <body>
    <div id="load"></div><!--[if lt IE 9]>
    <p class="browsehappy">You are using an strong outdated browser. <br>Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="page">
      <!-- Start Nav Section-->
      	<nav id="main-navigation" role="navigation" class="navbar navbar-fixed-top navbar-standard"><a href="javascript:void(0)" class="search_button"><i class="fa fa-search"></i></a>
            <form action="search.html" method="get" role="search" class="h_search_form">
              <div class="container">
                <div class="h_search_form_wrapper">
                  <div class="input-group"><span class="input-group-btn">
                      <button type="submit" class="btn btn-sm"><i class="fa fa-search fa-lg"></i></button></span>
                    <input type="text" placeholder="Search on site" class="form-control">
                  </div>
                  <div class="h_search_close"><a href="#"><i class="fa fa-times"></i></a></div>
                </div>
              </div>
            </form>
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle"><i class="fa fa-align-justify fa-lg"></i></button>
                <a href="#" class="navbar-brand">
                	<img src="resources/img/logo-white.png" alt="" class="logo-white">
                	<img src="resources/img/logo-black-large.png" alt="" class="logo-dark">
                </a>
              </div>
              <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right service-nav">
                  <li>
                    <!-- Login Form -->
                    <?=$form_login;?>
                  </li>
                  <li>
                    <!-- Cart Form -->
                    <?=$form_cart;?>
                  </li>
                </ul>
                <button type="button" class="navbar-toggle"><i class="fa fa-close fa-lg"></i></button>
                <?=$nav_menu;?>
              </div>
            </div>
          </nav>
      	<?php //(isset($nav_menu) && !empty($nav_menu))?print $nav_menu:''; ?>
      <!-- Start Home Section-->
      <section id="home" class="demo-1">
        <!--     Codrops top bar-->
        <div id="slider" class="sl-slider-wrapper">
          <div class="sl-slider">
            <!-- start slide-->
            <div data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2" class="sl-slide">
              <div style="background-image: url(resources/img/intro.jpg);" class="sl-slide-inner">
                <div class="slide-container">
                  <div class="slide-content text-center">
<!--                   	<img src="resources/img/themes/meadow/logo-intro.png" alt="Ottavio" class="deco"> -->
                  </div>
                </div>
              </div>
            </div>
            <!-- end slide-->
            <!-- start slide-->
            <div data-orientation="horizontal" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5" class="sl-slide">
              <div style="background-image: url(resources/img/intro2.jpg);" class="sl-slide-inner">
                <div class="slide-container">
                  <div class="slide-content text-center">
                    
                  </div>
                </div>
              </div>
            </div>
            <!-- end slide-->
            <!-- start slide-->
            <div data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1" class="sl-slide">
              <div style="background-image: url(resources/img/intro3.jpg);" class="sl-slide-inner">
                <div class="slide-container">
                  <div class="slide-content text-center">
                  </div>
                </div>
              </div>
            </div>
            <!-- end slide-->
          </div>
          <!--       /sl-slider-->
          <nav id="nav-arrows" class="nav-arrows"><span class="nav-arrow-prev">Previous</span><span class="nav-arrow-next">Next</span></nav>
          <nav id="nav-dots" class="nav-dots"><span class="nav-dot-current"></span><span></span><span></span></nav>
        </div>
        <!--     /slider-wrapper-->
      </section>
      <!-- End Home Section-->

      <!-- Start About section-->
      <section id="about" class="sep-top-4x">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="section-title">
                <h2 class="bordered-left upper wow flipInX">ocharos<br>tour</h2>
                <p class="lead wow flipInX" style="text-align:justify">
                    โอชารสทัวร์ได้ให้บริการเช่ารถปรับอากาศ 2 ชั้น มากว่า 18 ปี
                    คลุกคลีอยู่ในวงการการท่องเที่ยวมานานและด้วยใจรักในงานบริการ จึงให้บริการประดุจดังคุณเป็นคนในครอบครัวโอชารสทัวร์ ให้ความสำคัญในงานด้านการท่องเที่ยว และบริการลูกค้าให้มีความสุขสนุกสนานไปกับการท่องเที่ยวในแบบฉบับโอชารสทัวร์
                </p>
                <p class="lead wow flipInX">"เที่ยวสนุกสุขใจไปกับโอชารสทัวร์"</p>
              </div>
            </div>
            <div class="col-md-8">
              <div class="device-content">
                <div data-device="ipad" data-orientation="landscape" data-color="white" class="device-mockup">
                  <div class="device">
                    <div class="screen">
                      <div data-navitagion="false" data-slide-speed="300" data-pagination-speed="400" data-single-item="true" data-auto-height="true" data-auto-play="true" class="owl-carousel owl-theme">
                        <!-- Start Item Slide-->
                          <div class="item"><img src="resources/img/about1.jpg" alt="" class="img-responsive"></div>
                          <div class="item"><img src="resources/img/about2.jpg" alt="" class="img-responsive"></div>
                          <div class="item"><img src="resources/img/about3.jpg" alt="" class="img-responsive"></div>
                        <!-- End Item Slide-->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-primary sep-top-md sep-bottom-md">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <p class="lead x2 light wow bounceInLeft">&nbsp;</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About section -->
      <div class="bg-primary sep-top-xs sep-bottom-xs" id="portfolio">&nbsp;</div>
      <!-- Start Profolio section -->
        <section  data-folder="/portfolio">
          <!-- Start Ajax Section-->
          <div style="position:relative;" class="ajax-section section-gray">
            <div class="closeProject"><a href="#loader"><i class="fa fa-times"></i></a></div>
            <div class="loader"><i class="fa fa-circle-o-notch fa-spin fa-2x"></i></div>
            <div class="container">
              <div class="status-message"></div>
              <div class="ajax-content-outer">
                <div class="ajax-content-inner"></div>
                <div class="project-navigation nav-arrows"><a href="#" class="nextProject"><span class="nav-arrow-next"></span></a><a href="#" class="prevProject"><span class="nav-arrow-prev"></span></a></div>
              </div>
            </div>
          </div>
          <!-- End Ajax Section-->
          <ul id="isotope" class="portfolio isotope">
            <?php if(isset($portfolioData) && !empty($portfolioData)) :
                    foreach($portfolioData as $item):
            ?>
            <li class="item videography">
              <img src="<?=getFilePath($item->image_path,true);?>" alt="<?=$item->title;?>" class="img-responsive">
              <div class="mask">
                <div class="mask-content">
                  <div class="mask-wrapper text-center"><a href="#!/portfolio/project.html?i=0" class="info ajax_load"><i class="fa fa-link fa-border"></i></a><a href="<?=getFilePath($item->image_path,true);?>" data-rel="prettyPhoto[pp_gal]" title="Extreme Freestyle" class="info"><i class="fa fa-expand fa-border"></i></a>
                    <h4 class="upper"><?=$item->title;?></h4><span><?=$item->short_desc;?></span>
                  </div>
                </div>
              </div>
            </li>
            <?php
                  endforeach;
                  endif;
            ?>
          </ul>
        </section>
      </section>
      <!-- End Portfolio section-->
      <!-- Start Contact section-->
      <section id="contacts" class="sep-top-3x sep-bottom-3x">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="section-title text-center">
                <div class="icon-box icon-horizontal icon-md">
                  <div class="icon-content img-circle"><i class="fa fa-pencil"></i></div>
                </div>
                <h2 class="upper">ติดต่อเรา</h2>
                <p class="lead">คุณสามารถติดต่อเรา ตามช่องทางการติดต่อด้านล่าง</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 sep-top-lg">
              <!--Start icon box-->
              <div class="icon-box icon-xs sep-bottom-xs icon-gradient">
                <div data-wow-delay=".5s" class="icon-content img-circle wow flipInX"><i class="fa fa-map-marker"></i></div>
                <div class="icon-box-content">
                  <h6 class="upper info-title">ที่อยู่</h6>
                  <p>183/3 หมู่ 9 ตำบล ด่านช้าง อำเภอ ด่านช้าง จังหวัด สุพรรณบุรี 72180</p>
                </div>
              </div>
              <!--End icon box-->
              <!--Start icon box-->
              <div class="icon-box icon-xs sep-bottom-xs icon-gradient">
                <div data-wow-delay=".7s" class="icon-content img-circle wow flipInX"><i class="fa fa-phone"></i></div>
                <div class="icon-box-content">
                  <h6 class="upper info-title">โทรศัพท์</h6>
                  <p>สุดาทิพย์ โอชารส (ก้อย) 090-9943646 ,087-1613120<br>อนันต์ โอชารส (หนุ่ม) 081-8512101</p>
                </div>
              </div>
              <!--End icon box-->
              <!--Start icon box-->
              <div class="icon-box icon-xs sep-bottom-xs icon-gradient">
                <div data-wow-delay=".9s" class="icon-content img-circle wow flipInX"><i class="fa fa-envelope"></i></div>
                <div class="icon-box-content">
                  <h6 class="upper info-title">Email</h6>
                  <p>koyobiii@hotmail.com</p>
                </div>
              </div>
              <!--End icon box-->
              <!--Start icon box-->
              <div class="icon-box icon-xs sep-bottom-xs icon-gradient">
                <div data-wow-delay="1.1s" class="icon-content img-circle wow flipInX"><i class="fa fa-clock-o"></i></div>
                <div class="icon-box-content">
                  <h6 class="upper info-title">Facebook</h6>
                  <p>https://www.facebook.com/ocharos</p>
                </div>
              </div>
              <!--End icon box-->
            </div>
              <!-- Start Contact Form -->
              <?=$form_contact;  ?>
              <!-- End Contact Form -->
          </div>
        </div>
      </section>
      <!-- End Contact section-->
      <!-- Start map section-->
      <section>
        <!--include _partial/gmap-->
      </section>
      <!-- Start Footer section-->
      <?=$footer;?>
      <!-- End Footer section-->
      <div id="back_to_top"><a href="#" class="fa fa-arrow-up fa-lg"></a></div>
    </div>
    <script   src="https://code.jquery.com/jquery-1.8.3.min.js"   integrity="sha256-YcbK69I5IXQftf/mYD8WY0/KmEDCv1asggHpJk1trM8="   crossorigin="anonymous"></script>
    <script src="resources/scripts/vendor/queryloader2.min.js"></script>
    <script src="resources/scripts/vendor/owl.carousel.js"></script>
    <script src="resources/scripts/vendor/jquery.ba-cond.min.js"></script>
    <script src="resources/scripts/vendor/jquery.slitslider.js"></script>
    <script src="resources/scripts/vendor/idangerous.swiper.js"></script>
    <script src="resources/scripts/vendor/jquery.fitvids.js"></script>
<!--     <script src="resources/scripts/vendor/jquery.countTo.js"></script> -->
    <script src="resources/scripts/vendor/TweenMax.min.js"></script>
    <script src="resources/scripts/vendor/ScrollToPlugin.min.js"></script>
    <script src="resources/scripts/vendor/jquery.scrollmagic.min.js"></script>
    <script src="resources/scripts/vendor/jquery.easypiechart.js"></script>
    <script src="resources/scripts/vendor/wow.min.js"></script>
    <script src="resources/scripts/vendor/jquery.placeholder.js"></script>
<!--     <script src="resources/scripts/vendor/jquery.easing.1.3.min.js"></script> -->
<!--     <script src="resources/scripts/vendor/jquery.waitforimages.min.js"></script> -->
    <script src="resources/scripts/vendor/jquery.prettyPhoto.js"></script>
    <script src="resources/scripts/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="resources/scripts/vendor/isotope.pkgd.min.js"></script>
    <script src="resources/scripts/vendor/jquery.fillparent.min.js"></script>
    <script src="resources/scripts/vendor/raphael-min.js"></script>
    <script src="resources/scripts/vendor/bootstrap.js"></script>
    <script src="resources/scripts/vendor/jquery.bootstrap-touchspin.min.js"></script>
    <script src="resources/scripts/vendor/bootstrap-slider.js"></script>
    <script src="resources/scripts/vendor/bootstrap-rating-input.js"></script>
    <script src="resources/scripts/vendor/bootstrap-hover-dropdown.min.js"></script>
    <script src="resources/scripts/jquery.gmap.min.js"></script>
    <script src="resources/scripts/circle_diagram.js"></script>
    <script src="resources/js/jquery.validate.min.js"></script>
    <script src="resources/scripts/main.js"></script>
    <script src="resources/js/ocharos.js"></script>
   
  </body>
</html>