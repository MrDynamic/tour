<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>:: ADMIN ::</title>
    <base href="<?php echo base_url();?>" /> 
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="resources/admin/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="resources/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="resources/admin/css/style.css" rel="stylesheet">
    <link href="resources/admin/css/style-responsive.css" rel="stylesheet" />
    <link href="resources/css/my-style.css" rel="stylesheet">
    <link href="resources/admin/css/dropzone.css" rel="stylesheet" />

    <script type="text/javascript">
      var base_url = "<?php print base_url(); ?>";
    </script>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="admin/js/html5shiv.js"></script>
      <script src="admin/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <div data-original-title="Toggle Navigation" data-placement="right" class="fa fa-bars tooltips"></div>
          </div>
          <!--logo start-->
          <a href="index.html" class="logo" >Ocharos <span>Admin</span></a>
          <!--logo end-->
          <div class="nav notify-row" id="top_menu">
              <ul class="nav top-menu">
                <!-- notification dropdown start-->
                <li id="header_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                        <i class="fa fa-bell-o"></i>
                        <span class="badge bg-warning">7</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <div class="notify-arrow notify-arrow-yellow"></div>
                        <li>
                            <p class="yellow">You have 7 new notifications</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                Server #3 overloaded.
                                <span class="small italic">34 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-warning"><i class="fa fa-bell"></i></span>
                                Server #10 not respoding.
                                <span class="small italic">1 Hours</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                Database overloaded 24%.
                                <span class="small italic">4 hrs</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-success"><i class="fa fa-plus"></i></span>
                                New user registered.
                                <span class="small italic">Just now</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-info"><i class="fa fa-bullhorn"></i></span>
                                Application error.
                                <span class="small italic">10 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">See all notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- notification dropdown end -->
            </ul>
          </div>
          <div class="top-nav ">
              <ul class="nav pull-right top-menu">
                  <li>
                      &nbsp;
                  </li>
                  <!-- user login dropdown start-->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <img alt="" src="resources/admin/img/avatar-mini4.jpg">
                          <span class="username">Admin</span>
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu extended logout">
                          <div class="log-arrow-up"></div>
                          <li><a href="<?=site_url("authen/logout");?>"><i class="fa fa-key"></i> ออกจากระบบ</a></li>
                      </ul>

                  </li>
                  <!-- user login dropdown end -->
              </ul>
          </div>
      </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <!-- Render Slide Menu -->
                  <?php
                    foreach($slide_menu as $key=>$value ){
                      echo '<li class="sub-menu">';
                      echo '<a href="javascript:;" ';
                        //-- For Active menu
                          if(in_array($value["KEY"],$active_menu)){
                            echo ' class="active" ';
                          }
                      echo '>';
                      echo '<i class="fa fa-book"></i>';
                      echo "<span>".$value['MENU_NAME']."</span>";
                      echo '</a>';
                      if(isset($value["SUB_MENU"])){
                          echo '<ul class="sub">';
                          foreach($value["SUB_MENU"] as $subKey=>$valueKey){
                              echo '<li';
                              //-- For Active menu
                              if(in_array($valueKey["KEY"],$active_menu)){
                                echo ' class="active" ';
                              }
                              echo '>';
                              echo '<a href="'.$valueKey["URL"].'">'.$valueKey["NAME"]. '</a>';
                              echo '</li>';                       
                            }
                          echo '</ul>';

                      }
                        
                      echo '</li>';

                    }
                  ?>
                  <!-- Render Slide Menu End -->
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
                <?php 
                  (isset($body) && !empty($body))? print $body:'';
                ?>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2016 &copy; Ocharos Admin Page.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script   src="https://code.jquery.com/jquery-1.8.3.min.js"   integrity="sha256-YcbK69I5IXQftf/mYD8WY0/KmEDCv1asggHpJk1trM8="   crossorigin="anonymous"></script>
    <script src="resources/admin/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="resources/admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="resources/admin/js/jquery.scrollTo.min.js"></script>
    <script src="resources/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="resources/admin/js/respond.min.js" ></script>
    
    <!--common script for all pages-->
    <script src="resources/admin/js/common-scripts.js"></script>
    <script src="resources/js/jquery.blockUI.js"></script>
    <script src="resources/js/main.js"></script>

    <script src="resources/js/jquery.validate.min.js"></script>;
    <script src="resources/js/additional-methods.min.js"></script>;
    <script src="resources/admin/js/dropzone.js"></script>;
    <script src="resources/admin/js/admin.js"></script>;
  
  </body>
</html>
