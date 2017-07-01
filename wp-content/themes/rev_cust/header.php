<?php include("rev_start.php");  ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <link rel="icon" type="image/ico" href="<?= get_stylesheet_directory_uri(); ?>/favicon-institution.ico"/>
   <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/layout/css/style.css">

   <link rel="stylesheet" href="http://localhost/projects/gen/liz/js/owl-carousel/owl.carousel.css">
   <link rel="stylesheet" href="http://localhost/projects/gen/liz/js/owl-carousel/owl.theme.css">
   <link rel="stylesheet" href="http://localhost/projects/gen/liz/js/owl-carousel/owl.transitions.css">
   <link rel="stylesheet" href="http://localhost/projects/gen/liz/js/rs-plugin/css/settings.css">
   <link rel="stylesheet" href="http://localhost/projects/gen/liz/js/flexslider/flexslider.css">
   <link rel="stylesheet" href="http://localhost/projects/gen/liz/js/isotope/isotope.css">
   <link rel="stylesheet" href="http://localhost/projects/gen/liz/css/jquery-ui.css">
   <link rel="stylesheet" href="http://localhost/projects/gen/liz/js/magnific-popup/magnific-popup.css">
   <link rel="stylesheet" href="http://localhost/projects/gen/liz/css/style.css">
   <!-- Google Fonts -->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,700,800' rel='stylesheet' type='text/css'>
   <!-- Icon Fonts -->
   <link rel="stylesheet" href="http://localhost/projects/gen/liz/css/icomoon/style.css" type="text/css">
   <link rel="stylesheet" href="http://localhost/projects/gen/liz/font-awesome/css/font-awesome.min.css" type="text/css">
   <!-- SKIN -->
   <link rel="stylesheet" href="http://localhost/projects/gen/liz/css/color-scheme/default-black.css" type="text/css">
   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.2/jquery.xdomainrequest.min.js"></script>      
  <![endif]-->

  <style>
   .inner-content {
      padding: 30px 0;
   }
   #header-main {
      position: fixed !important;
      top: 0 !important;
      left: 0 !important;
      z-index: 999 !important;
      width: 100% !important;
      height: 0 !important;
      padding-bottom: 10px !important;
      background-color: #FFF !important;
   }
   .tapper-rev {
      padding-top: 50px;
   }
   /* Dropdown Button */
   .dropbtn {
      background-color: #FFF;
      color: inherit;
      padding: 16px;
      padding-top: 16px;
      font-size: inherit;
      border: none;
      cursor: pointer;
   }
   /* Dropdown button on hover & focus */
   .dropbtn:hover, .dropbtn:focus {
      background-color: #3e8e41;
   }
         /* The container 
         <div>
            - needed to position the dropdown content */
            .dropdown {
               position: relative;
               display: inline-block;
            }
            /* Dropdown Content (Hidden by Default) */
            .dropdown-content {
               display: none;
               position: absolute;
               background-color: #f9f9f9;
               min-width: 360px;
               box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
               z-index: 1;
            }
            /* Links inside the dropdown */
            .dropdown-content a {
               color: black;
               padding: 12px 16px;
               text-decoration: none;
               display: block;
            }
            /* Change color of dropdown links on hover */
            .dropdown-content a:hover {background-color: #f1f1f1}
            /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
            .show {display:block;}
            .menu li a:hover {
            }
            #header-main .dropdown-menu li {
               background: #FFF !important;
               min-width: 355px;
            }
            <--logged in-->
               .main-container{
                  margin-top: 23px;
               }
               <--logged out-->
                  .main-container{
                     margin-top: 155px;
                  }
                  li {list-style-type: none !important;}
               </style>
               <?php wp_head(); ?>
            </head>
            <body <?php body_class(); ?>>
               <div id="page" class="site">
                  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shapely' ); ?></a>
                  <header id="header-main" class="site-header" role="banner">
                     <div class="nav-container">
                        <nav id="site-navigation" class="main-navigation" role="navigation">
                           <div class="container nav-bar">
                              <div class="row">
                                 <div class="module left site-title-container">
                                    <?php shapely_get_header_logo(); ?>
                                 </div>
                                 <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
                                    <i class="fa fa-bars"></i>
                                 </div>
                                 <div class="module-group right">
                                    <div class="module left">
                                       <?php shapely_header_menu(); // main navigation ?>
                                    </div>
                                    <!--end of menu module-->
                                    <div class="module widget-handle search-widget-handle left hidden-xs hidden-sm">
                                       <div class="search">
                                          <i class="fa fa-search"></i>
                                          <span class="title"><?php esc_html_e( "Site Search", 'shapely' ); ?></span>
                                       </div>
                                       <div class="function"><?php
                                          get_search_form(); ?>
                                       </div>
                                    </div>
                                 </div>
                                 <!--end of module group-->
                              </div>
                           </div>
                        </nav>
                        <!-- #site-navigation -->
                     </div>
                  </header>
                  <?PHP if( is_home() ) { ?>
                  <!-- HEADER -->
                  <div class="header-wrap">
                     <!-- SLIDER -->
                     <div class="slider-wrap">
                        <?php include("includes/slider.php"); ?>
                     </div>
                  </div>
                  <?PHP } ?>
                  <!-- #masthead -->
                  <div id="content" class="main-container">
                     <?php if ( ! is_page_template( 'page-templates/template-home.php' ) ): ?>
                        <div class="header-callout">
                        </div>
                     <?php endif; ?>
                     <div id="main" class="<?php echo ( ! is_page_template( 'page-templates/template-home.php' ) ) ? 'container' : ''; ?>"
                        role="main">

                        <!-- Plugins -->
                        <script src="http://localhost/projects/gen/liz/js/bootstrap.min.js"></script>
                        <script src="http://localhost/projects/gen/liz/js/menu.js"></script>
                        <script src="http://localhost/projects/gen/liz/js/owl-carousel/owl.carousel.min.js"></script>
                        <script src="http://localhost/projects/gen/liz/js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
                        <script src="http://localhost/projects/gen/liz/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
                        <script src="http://localhost/projects/gen/liz/js/jquery.easing.min.js"></script>
                        <script src="http://localhost/projects/gen/liz/js/isotope/isotope.pkgd.js"></script>
                        <script src="http://localhost/projects/gen/liz/js/jflickrfeed.min.js"></script>
                        <script src="http://localhost/projects/gen/liz/js/tweecool.js"></script>
                        <script src="http://localhost/projects/gen/liz/js/flexslider/jquery.flexslider.js"></script>
                        <script src="http://localhost/projects/gen/liz/js/easypie/jquery.easypiechart.min.js"></script>
                        <script src="http://localhost/projects/gen/liz/js/jquery-ui.js"></script>
                        <script src="http://localhost/projects/gen/liz/js/jquery.appear.js"></script>
                        <script src="http://localhost/projects/gen/liz/js/jquery.inview.js"></script>
                        <script src="http://localhost/projects/gen/liz/js/jquery.countdown.min.js"></script>
                        <script src="http://localhost/projects/gen/liz/js/jquery.sticky.js"></script>
                        <script src="http://localhost/projects/gen/liz/js/magnific-popup/jquery.magnific-popup.min.js"></script>
                        <script src="http://localhost/projects/gen/liz/js/jquery.easing/jquery.easing.js"></script>
                        <script src="http://localhost/projects/gen/liz/js/main.js"></script>
                        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
                        <script src="http://localhost/projects/gen/liz/js/gmaps/greyscale.js"></script>