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
    <link rel="stylesheet" href="resources/styles/bootstrap.min.css">
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
              <div style="background-image: url(resources/img/intro-home1.jpg);" class="sl-slide-inner">
                <div class="slide-container">
                  <div class="slide-content text-center">
                    <h2 class="main-title">Multi-purpose html&nbsp;<span class="text-primary">Template</span></h2>
                    <blockquote>
                      <p>Unique and modern design</p><a class="btn btn-light btn-bordered btn-lg">Our Works</a><a href="http://themeforest.net/item/ottavio-multipurpose-html5-bootstrap-template/9562624?ref=kleis" target="_blank" class="btn btn-primary btn-lg">Buy the theme</a>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
            <!-- end slide-->
            <!-- start slide-->
            <div data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1" class="sl-slide">
              <div style="background-image: url(resources/img/intro-home7.jpg);" class="sl-slide-inner">
                <div class="slide-container">
                  <div class="slide-content text-center"><img src="resources/img/themes/meadow/logo-intro.png" alt="Ottavio" class="deco">
                    <h2 class="main-title">Fully responsive &&nbsp;<span class="text-primary">Retina ready</span></h2>
                    <blockquote>
                      <p>Based on twitter bootstrap</p><a class="btn btn-light btn-bordered btn-lg">Our Works</a><a href="http://themeforest.net/item/ottavio-multipurpose-html5-bootstrap-template/9562624?ref=kleis" target="_blank" class="btn btn-primary btn-lg">Buy the theme</a>
                    </blockquote>
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
      <section id="about" class="sep-top-2x sep-bottom-3x">
        <div class="container">
          <div class="row">
            <div class="col-md-5 text-right">
              <div class="sep-top-md sep-bottom-sm">
                <div class="bordered-right section-title">
                  <h2 class="upper">Want to say Hey or find<span class="label-colored">out more?</span></h2>
                </div>
                <p class="lead">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type.</p>
                <div class="sep-top-xs"><a href="http://themeforest.net/item/ottavio-multipurpose-html5-bootstrap-template/9562624?ref=kleis" target="_blank" data-wow-delay=".5s" class="btn btn-primary btn-lg wow bounceInLeft">Learn about us</a></div>
              </div>
            </div>
            <div class="col-md-7">
              <div data-device="macbook" data-orientation="landscape" data-color="black" class="device-mockup">
                <div class="device">
                  <div class="screen"><img src="resources/img/portfolio/wr4c5.jpg" alt="" width="577" height="433" class="img-responsive"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 sep-top-2x icon-gradient">
              <div class="icon-box icon-horizontal icon-lg">
                <div data-wow-delay=".5s" class="icon-content img-circle wow bounceInUp"><i class="fa fa-lightbulb-o"></i></div>
                <div class="icon-box-content">
                  <h5 class="upper">Strategy Solutions</h5>
                  <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 sep-top-2x icon-gradient">
              <div class="icon-box icon-horizontal icon-lg">
                <div data-wow-delay=".5s" class="icon-content img-circle wow bounceInUp"><i class="fa fa-gamepad"></i></div>
                <div class="icon-box-content">
                  <h5 class="upper">Digital Design</h5>
                  <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 sep-top-2x icon-gradient">
              <div class="icon-box icon-horizontal icon-lg">
                <div data-wow-delay=".5s" class="icon-content img-circle wow bounceInUp"><i class="fa fa-code-fork"></i></div>
                <div class="icon-box-content">
                  <h5 class="upper">Web Development</h5>
                  <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 sep-top-2x icon-gradient">
              <div class="icon-box icon-horizontal icon-lg">
                <div data-wow-delay=".5s" class="icon-content img-circle wow bounceInUp"><i class="fa fa-android"></i></div>
                <div class="icon-box-content">
                  <h5 class="upper">App Development</h5>
                  <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About section-->
      
      <!-- Start Portfolio section-->
      <section id="portfolio">
        <div class="bg-primary sep-top-md sep-bottom-md">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <p class="lead x2 light wow bounceInLeft">We have put together the best of our experience</p>
              </div>
            </div>
          </div>
        </div>
        <section id="portfolio-gallery" data-folder="/portfolio">
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
            <li class="item videography">
              <!-- images should be in 1:1 format or multiples (2:1. 1:2, ...)--><img src="resources/img/portfolio/05.jpg" alt="Extreme Freestyle" class="img-responsive">
              <div class="mask">
                <div class="mask-content">
                  <div class="mask-wrapper text-center"><a href="#!/portfolio/project.html?i=0" class="info ajax_load"><i class="fa fa-link fa-border"></i></a><a href="img/portfolio/05.jpg" data-rel="prettyPhoto[pp_gal]" title="Extreme Freestyle" class="info"><i class="fa fa-expand fa-border"></i></a>
                    <h4 class="upper">Extreme Freestyle</h4><span>Lorem Ipsum is simply dummy text of the printing</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="item photography width2x height2x">
              <!-- images should be in 1:1 format or multiples (2:1. 1:2, ...)--><img src="resources/img/portfolio/11asw5.jpg" alt="Looking at The Horizon" class="img-responsive">
              <div class="mask">
                <div class="mask-content">
                  <div class="mask-wrapper text-center"><a href="#!/portfolio/project.html?i=1" class="info ajax_load"><i class="fa fa-link fa-border"></i></a><a href="img/portfolio/11asw5.jpg" data-rel="prettyPhoto[pp_gal]" title="Looking at The Horizon" class="info"><i class="fa fa-expand fa-border"></i></a>
                    <h4 class="upper">Looking at The Horizon</h4><span>Lorem Ipsum is simply dummy text of the printing</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="item photography design">
              <!-- images should be in 1:1 format or multiples (2:1. 1:2, ...)--><img src="resources/img/portfolio/wr4c5.jpg" alt="Design Studio" class="img-responsive">
              <div class="mask">
                <div class="mask-content">
                  <div class="mask-wrapper text-center"><a href="#!/portfolio/project.html?i=2" class="info ajax_load"><i class="fa fa-link fa-border"></i></a><a href="img/portfolio/wr4c5.jpg" data-rel="prettyPhoto[pp_gal]" title="Design Studio" class="info"><i class="fa fa-expand fa-border"></i></a>
                    <h4 class="upper">Design Studio</h4><span>Lorem Ipsum is simply dummy text of the printing</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="item design">
              <!-- images should be in 1:1 format or multiples (2:1. 1:2, ...)--><img src="resources/img/portfolio/mac.jpg" alt="Minimalist Design" class="img-responsive">
              <div class="mask">
                <div class="mask-content">
                  <div class="mask-wrapper text-center"><a href="#!/portfolio/project.html?i=3" class="info ajax_load"><i class="fa fa-link fa-border"></i></a><a href="img/portfolio/mac.jpg" data-rel="prettyPhoto[pp_gal]" title="Minimalist Design" class="info"><i class="fa fa-expand fa-border"></i></a>
                    <h4 class="upper">Minimalist Design</h4><span>Lorem Ipsum is simply dummy text of the printing</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="item branding width2x">
              <!-- images should be in 1:1 format or multiples (2:1. 1:2, ...)--><img src="resources/img/portfolio/2048asxsax.jpg" alt="Business Card" class="img-responsive">
              <div class="mask">
                <div class="mask-content">
                  <div class="mask-wrapper text-center"><a href="#!/portfolio/project.html?i=4" class="info ajax_load"><i class="fa fa-link fa-border"></i></a><a href="img/portfolio/2048asxsax.jpg" data-rel="prettyPhoto[pp_gal]" title="Business Card" class="info"><i class="fa fa-expand fa-border"></i></a>
                    <h4 class="upper">Business Card</h4><span>Lorem Ipsum is simply dummy text of the printing</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="item branding">
              <!-- images should be in 1:1 format or multiples (2:1. 1:2, ...)--><img src="resources/img/portfolio/20aaaaa48.jpg" alt="Horst brand identity" class="img-responsive">
              <div class="mask">
                <div class="mask-content">
                  <div class="mask-wrapper text-center"><a href="#!/portfolio/project.html?i=5" class="info ajax_load"><i class="fa fa-link fa-border"></i></a><a href="img/portfolio/20aaaaa48.jpg" data-rel="prettyPhoto[pp_gal]" title="Horst brand identity" class="info"><i class="fa fa-expand fa-border"></i></a>
                    <h4 class="upper">Horst brand identity</h4><span>Lorem Ipsum is simply dummy text of the printing</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="item design photography">
              <!-- images should be in 1:1 format or multiples (2:1. 1:2, ...)--><img src="resources/img/portfolio/20sshsh48.jpg" alt="Infinity Mirror" class="img-responsive">
              <div class="mask">
                <div class="mask-content">
                  <div class="mask-wrapper text-center"><a href="#!/portfolio/project.html?i=6" class="info ajax_load"><i class="fa fa-link fa-border"></i></a><a href="img/portfolio/20sshsh48.jpg" data-rel="prettyPhoto[pp_gal]" title="Infinity Mirror" class="info"><i class="fa fa-expand fa-border"></i></a>
                    <h4 class="upper">Infinity Mirror</h4><span>Lorem Ipsum is simply dummy text of the printing</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="item design">
              <!-- images should be in 1:1 format or multiples (2:1. 1:2, ...)--><img src="resources/img/portfolio/247610222_460fa350b6_o.jpg" alt="Simple Desk Design" class="img-responsive">
              <div class="mask">
                <div class="mask-content">
                  <div class="mask-wrapper text-center"><a href="#!/portfolio/project.html?i=7" class="info ajax_load"><i class="fa fa-link fa-border"></i></a><a href="img/portfolio/247610222_460fa350b6_o.jpg" data-rel="prettyPhoto[pp_gal]" title="Simple Desk Design" class="info"><i class="fa fa-expand fa-border"></i></a>
                    <h4 class="upper">Simple Desk Design</h4><span>Lorem Ipsum is simply dummy text of the printing</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="item videography">
              <!-- images should be in 1:1 format or multiples (2:1. 1:2, ...)--><img src="resources/img/portfolio/351609423_0595d6fc0e_o.jpg" alt="Artist collection" class="img-responsive">
              <div class="mask">
                <div class="mask-content">
                  <div class="mask-wrapper text-center"><a href="#!/portfolio/project.html?i=8" class="info ajax_load"><i class="fa fa-link fa-border"></i></a><a href="img/portfolio/351609423_0595d6fc0e_o.jpg" data-rel="prettyPhoto[pp_gal]" title="Artist collection" class="info"><i class="fa fa-expand fa-border"></i></a>
                    <h4 class="upper">Artist collection</h4><span>Lorem Ipsum is simply dummy text of the printing</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="item photography height2x">
              <!-- images should be in 1:1 format or multiples (2:1. 1:2, ...)--><img src="resources/img/portfolio/5.jpg" alt="Business airport" class="img-responsive">
              <div class="mask">
                <div class="mask-content">
                  <div class="mask-wrapper text-center"><a href="#!/portfolio/project.html?i=9" class="info ajax_load"><i class="fa fa-link fa-border"></i></a><a href="img/portfolio/5.jpg" data-rel="prettyPhoto[pp_gal]" title="Business airport" class="info"><i class="fa fa-expand fa-border"></i></a>
                    <h4 class="upper">Business airport</h4><span>Lorem Ipsum is simply dummy text of the printing</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="item photography">
              <!-- images should be in 1:1 format or multiples (2:1. 1:2, ...)--><img src="resources/img/portfolio/5a.jpg" alt="Spring Up" class="img-responsive">
              <div class="mask">
                <div class="mask-content">
                  <div class="mask-wrapper text-center"><a href="#!/portfolio/project.html?i=10" class="info ajax_load"><i class="fa fa-link fa-border"></i></a><a href="img/portfolio/5a.jpg" data-rel="prettyPhoto[pp_gal]" title="Spring Up" class="info"><i class="fa fa-expand fa-border"></i></a>
                    <h4 class="upper">Spring Up</h4><span>Lorem Ipsum is simply dummy text of the printing</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="item branding">
              <!-- images should be in 1:1 format or multiples (2:1. 1:2, ...)--><img src="resources/img/portfolio/erger20481.jpg" alt="System One" class="img-responsive">
              <div class="mask">
                <div class="mask-content">
                  <div class="mask-wrapper text-center"><a href="#!/portfolio/project.html?i=11" class="info ajax_load"><i class="fa fa-link fa-border"></i></a><a href="img/portfolio/erger20481.jpg" data-rel="prettyPhoto[pp_gal]" title="System One" class="info"><i class="fa fa-expand fa-border"></i></a>
                    <h4 class="upper">System One</h4><span>Lorem Ipsum is simply dummy text of the printing</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="item branding">
              <!-- images should be in 1:1 format or multiples (2:1. 1:2, ...)--><img src="resources/img/portfolio/12233432048.jpg" alt="Authentisch Mann" class="img-responsive">
              <div class="mask">
                <div class="mask-content">
                  <div class="mask-wrapper text-center"><a href="#!/portfolio/project.html?i=12" class="info ajax_load"><i class="fa fa-link fa-border"></i></a><a href="img/portfolio/12233432048.jpg" data-rel="prettyPhoto[pp_gal]" title="Authentisch Mann" class="info"><i class="fa fa-expand fa-border"></i></a>
                    <h4 class="upper">Authentisch Mann</h4><span>Lorem Ipsum is simply dummy text of the printing</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="item photography">
              <!-- images should be in 1:1 format or multiples (2:1. 1:2, ...)--><img src="resources/img/portfolio/erger2048.jpg" alt="Manhattan Street" class="img-responsive">
              <div class="mask">
                <div class="mask-content">
                  <div class="mask-wrapper text-center"><a href="#!/portfolio/project.html?i=13" class="info ajax_load"><i class="fa fa-link fa-border"></i></a><a href="img/portfolio/erger2048.jpg" data-rel="prettyPhoto[pp_gal]" title="Manhattan Street" class="info"><i class="fa fa-expand fa-border"></i></a>
                    <h4 class="upper">Manhattan Street</h4><span>Lorem Ipsum is simply dummy text of the printing</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="item branding">
              <!-- images should be in 1:1 format or multiples (2:1. 1:2, ...)--><img src="resources/img/portfolio/wr4c51.jpg" alt="Simple Frame Mockup" class="img-responsive">
              <div class="mask">
                <div class="mask-content">
                  <div class="mask-wrapper text-center"><a href="#!/portfolio/project.html?i=14" class="info ajax_load"><i class="fa fa-link fa-border"></i></a><a href="img/portfolio/wr4c51.jpg" data-rel="prettyPhoto[pp_gal]" title="Simple Frame Mockup" class="info"><i class="fa fa-expand fa-border"></i></a>
                    <h4 class="upper">Simple Frame Mockup</h4><span>Lorem Ipsum is simply dummy text of the printing</span>
                  </div>
                </div>
              </div>
            </li>
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
                  <p>Elizabeth St, Melbourne, Victoria 3000, Australia</p>
                </div>
              </div>
              <!--End icon box-->
              <!--Start icon box-->
              <div class="icon-box icon-xs sep-bottom-xs icon-gradient">
                <div data-wow-delay=".7s" class="icon-content img-circle wow flipInX"><i class="fa fa-phone"></i></div>
                <div class="icon-box-content">
                  <h6 class="upper info-title">โทรศัพท์ / Fax</h6>
                  <p>(+39) 123-456-789 / (+39) 123-456-789</p>
                </div>
              </div>
              <!--End icon box-->
              <!--Start icon box-->
              <div class="icon-box icon-xs sep-bottom-xs icon-gradient">
                <div data-wow-delay=".9s" class="icon-content img-circle wow flipInX"><i class="fa fa-envelope"></i></div>
                <div class="icon-box-content">
                  <h6 class="upper info-title">Email</h6>
                  <p>info@ottaviostudios.com / support@ottaviostudios.com</p>
                </div>
              </div>
              <!--End icon box-->
              <!--Start icon box-->
              <div class="icon-box icon-xs sep-bottom-xs icon-gradient">
                <div data-wow-delay="1.1s" class="icon-content img-circle wow flipInX"><i class="fa fa-clock-o"></i></div>
                <div class="icon-box-content">
                  <h6 class="upper info-title">Facebook</h6>
                  <p>xxx/xxxxx</p>
                </div>
              </div>
              <!--End icon box-->
            </div>
            <div class="col-md-6 sep-top-lg">
              <div class="contact-form">
                <div id="successMessage" style="display:none" class="alert alert-success text-center">
                  <p><i class="fa fa-check-circle fa-2x"></i></p>
                  <p>Thanks for sending your message! We'll get back to you shortly.</p>
                </div>
                <div id="failureMessage" style="display:none" class="alert alert-danger text-center">
                  <p><i class="fa fa-times-circle fa-2x"></i></p>
                  <p>There was a problem sending your message. Please, try again.</p>
                </div>
                <div id="incompleteMessage" style="display:none" class="alert alert-warning text-center">
                  <p><i class="fa fa-exclamation-triangle fa-2x"></i></p>
                  <p>Please complete all the fields in the form before sending.</p>
                </div>
                <form id="contactForm" action="php/contact.php" method="post" class="validate">
                  <div class="form-group sep-top-xs">
                    <label for="contactFormName" class="upper">ชื่อผู้ติดต่อ</label>
                    <input id="contactFormName" type="text" placeholder="Enter name" name="name" class="form-control input-lg required">
                  </div>
                  <div class="form-group sep-top-xs">
                    <label for="contactFormPhone" class="upper">โทรศัพท์</label>
                    <input id="contactFormPhone" type="text" placeholder="Enter phone" name="phone" class="form-control input-lg required">
                  </div>
                  <div class="form-group sep-top-xs">
                    <label for="contactFormEmail" class="upper">Email</label>
                    <input id="contactFormEmail" type="email" placeholder="Enter email" name="email" class="form-control input-lg required email">
                  </div>
                  <div class="form-group sep-top-xs">
                    <label for="contactFormComment" class="upper">รายละเอียด</label>
                    <textarea id="contactFormComment" placeholder="Enter comment" rows="9" name="comment" class="form-control input-lg required"></textarea>
                  </div>
                  <div class="form-group sep-top-xs">
                    <button type="submit" data-wow-delay=".5s" class="btn btn-primary btn-lg wow bounceInRight"><i class="fa fa-paper-plane"></i> ส่งข้อความ</button>
                  </div>
                  <!--input#subject.form-control.input-lg.required(type='text', placeholder='Subject of your message', name='subject')
                  -->
                </form>
                <div class="hidden"></div>
              </div>
            </div>
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
    <script src="resources/js/jquery-1.8.3.min.js"></script>
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