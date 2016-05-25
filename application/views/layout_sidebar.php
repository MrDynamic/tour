<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ocharos 's tour</title>
    <meta name="description" content="FAQ">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <base href="<?php echo base_url();?>" /> 
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,300,400,600,700">
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
            <button type="button" class="navbar-toggle"><i class="fa fa-align-justify fa-lg"></i></button><a href="#" class="navbar-brand"><img src="resources/img/logo-white.png" alt="" class="logo-white"><img src="resources/img/logo-dark.png" alt="" class="logo-dark"></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right service-nav">
              <li>
              	<?=$form_login;?>
              </li>
              <li>
              	<?=$form_cart;?>
              </li>
            </ul>
            <button type="button" class="navbar-toggle"><i class="fa fa-close fa-lg"></i></button>
            <?=$nav_menu;?>
          </div>
        </div>
      </nav>
      <!-- Start header Section-->
     	<?=$header;?>
      <!-- End header Section-->
      <!-- Start Portfolio Detail section-->
      <section class="sep-bottom-2x">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-md-push-3 sep-top-xs">
              <div class="row">
                <?php (isset($content) && !empty($content))? print $content:''; ?>
              </div>
            </div>
            <!-- start sidebar-->
            <?php (isset($sidebar) && !empty($sidebar))?print $sidebar:''; ?>
            <!-- end sidebar-->
          </div>
        </div>
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
    <script src="resources/scripts/vendor/jquery.countTo.js"></script>
    <script src="resources/scripts/vendor/TweenMax.min.js"></script>
    <script src="resources/scripts/vendor/ScrollToPlugin.min.js"></script>
    <script src="resources/scripts/vendor/jquery.scrollmagic.min.js"></script>
    <script src="resources/scripts/vendor/jquery.easypiechart.js"></script>
    <script src="resources/scripts/vendor/jquery.validate.js"></script>
    <script src="resources/scripts/vendor/wow.min.js"></script>
    <script src="resources/scripts/vendor/jquery.placeholder.js"></script>
    <script src="resources/scripts/vendor/jquery.easing.1.3.min.js"></script>
    <script src="resources/scripts/vendor/jquery.waitforimages.min.js"></script>
    <script src="resources/scripts/vendor/jquery.prettyPhoto.js"></script>
    <script src="resources/scripts/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="resources/scripts/vendor/isotope.pkgd.min.js"></script>
    <script src="resources/scripts/vendor/jquery.fillparent.min.js"></script>
    <script src="resources/scripts/vendor/raphael-min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="resources/scripts/vendor/jquery.bootstrap-touchspin.min.js"></script>
    <script src="resources/scripts/vendor/bootstrap-slider.js"></script>
    <script src="resources/scripts/vendor/bootstrap-rating-input.js"></script>
    <script src="resources/scripts/vendor/bootstrap-hover-dropdown.min.js"></script>
    <script src="resources/scripts/jquery.gmap.min.js"></script>
    <script src="resources/scripts/circle_diagram.js"></script>
    <script src="resources/scripts/main.js"></script>
    <script src="resources/js/ocharos.js"></script>
  </body>
</html>