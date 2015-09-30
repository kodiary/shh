<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>SHH  - Social helping hands</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="<?php echo $this->webroot;?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo $this->webroot;?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="<?php echo $this->webroot;?>assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="<?php echo $this->webroot;?>assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo $this->webroot;?>assets/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css" rel="stylesheet">
  <link href="<?php echo $this->webroot;?>assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="<?php echo $this->webroot;?>assets/global/css/components.css" rel="stylesheet">
  <link href="<?php echo $this->webroot;?>assets/frontend/layout/css/style.css" rel="stylesheet">
  <link href="<?php echo $this->webroot;?>assets/frontend/pages/css/style-revolution-slider.css" rel="stylesheet"><!-- metronic revo slider styles -->
  <link href="<?php echo $this->webroot;?>assets/frontend/layout/css/style-responsive.css" rel="stylesheet">
  <link href="<?php echo $this->webroot;?>assets/frontend/pages/css/portfolio.css" rel="stylesheet">
  <link href="<?php echo $this->webroot;?>assets/frontend/layout/css/custom.css" rel="stylesheet">
  
  <link href="<?php echo $this->webroot;?>css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">
   
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53551fdf0354dd89" async="async"></script>

    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="<?php echo $this->webroot;?>"><img src="<?php echo $this->webroot;?>assets/frontend/layout/img/logos/logo-corp-red.png" alt="Metronic FrontEnd"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation pull-right font-transform-inherit">
          <ul>
            <li><a href="<?php echo $this->webroot;?>" target="">Home</a></li>
            <li><a href="<?php echo $this->webroot;?>view/about" target="">About Us</a></li>
            <li><a href="<?php echo $this->webroot;?>event" target="">Events</a></li>
            <li><a href="<?php echo $this->webroot;?>project" target="">Projects</a></li>
            <li><a href="<?php echo $this->webroot;?>gallery" target="">Gallery</a></li>
            <li><a href="<?php echo $this->webroot;?>media/Publication" target="">Publication</a></li>
            <li><a href="<?php echo $this->webroot;?>contact" target="">Contact Us</a></li>

            <!-- BEGIN TOP SEARCH -->
            
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->

    <!-- BEGIN SLIDER -->
    <?php if(ucfirst($this->params['controller']) == 'Pages' && ucfirst($this->params['action']) == 'Index'){
        ?>
    <div class="page-slider margin-bottom-40">
      <div class="fullwidthbanner-container revolution-slider">
        <div class="fullwidthabnner">
          <ul id="revolutionul">
          
          
            <?php
            if($slider)
            {
                foreach($slider as $sli)
                {
                  if($sli['Slider']['image'])  {
                
                ?>
                <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="<?php echo $this->webroot;?>assets/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg">
              <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
              <img src="<?php echo $this->webroot;?>banners/<?php echo $sli['Slider']['image'];?>" alt="">
              
              <div class="caption lft slide_title_white slide_item_left" style="background-color:rgba(0,0,255,0.5);padding:10px;"
                data-x="30"
                data-y="300"
                data-speed="400"
                data-start="1500"
                data-easing="easeOutExpo">
                <?php echo $sli['Slider']['caption'];?></span>
              </div>
              
            </li>
                
                
                
                
                <?php
                }}
            }
           ?>
            
            
            
                     
          
            

            <!-- THE SECOND SLIDE -->
            
                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
            </div>
        </div>
    </div>
    <!-- END SLIDER -->
    <?php 
    }?>

    <div class="main clearfix">
        <?php echo $this->fetch('content'); ?>
      
    </div>

    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>About us</h2>
            <p>Social Helping Hands, Nepal was founded recently in 2015 with the purpose of striving provide utmost aid and support to poor, victims and needy of Nepal. With the slogan of "Helping in need is Religion indeed", SHH is always concerned about the poors and needy through out the country.
            <a href="<?php echo $this->webroot;?>Pages/detail/about">Read More</a>
            </p>

            
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>Our Contacts</h2>
            <address class="margin-bottom-40">
              <strong>Address</strong> : Baluwatar,Kathmandu, Nepal<br>
              <strong>Phone</strong> : +977-9807388399<br>
              <strong>Email</strong> : <a href="mailto:info@shhnepal.org">info@shhnepal.org</a><br>
              <strong>Skype</strong> : <a href="skype:shhnepal">shhnepal</a>            
            </address>

            
          </div>
          <!-- END BOTTOM CONTACTS -->

          <!-- BEGIN TWITTER BLOCK --> 
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2 class="margin-bottom-0">Share Us</h2>
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_sharing_toolbox"></div>
          </div>
          <!-- END TWITTER BLOCK -->
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-12 col-sm-12 padding-top-10">
            2015 © Social Helping Hands Nepal. <a href="#">Powered By Kodiary, Nepal</a>
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          
          <!-- END PAYMENTS -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="<?php echo $this->webroot;?>assets/global/plugins/respond.min.js"></script>
    <![endif]--> 
    <script src="<?php echo $this->webroot;?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo $this->webroot;?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="<?php echo $this->webroot;?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="<?php echo $this->webroot;?>assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="<?php echo $this->webroot;?>assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
    
    <script src="<?php echo $this->webroot;?>assets/global/plugins/jquery-mixitup/jquery.mixitup.min.js" type="text/javascript"></script>
    
    
    <script src="<?php echo $this->webroot;?>assets/frontend/pages/scripts/portfolio.js" type="text/javascript"></script>
    

    <!-- BEGIN RevolutionSlider -->
  
    <script src="<?php echo $this->webroot;?>assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script> 
    <script src="<?php echo $this->webroot;?>assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script> 
    <script src="<?php echo $this->webroot;?>assets/frontend/pages/scripts/revo-slider-init.js" type="text/javascript"></script>
    <!-- END RevolutionSlider -->

    <script src="<?php echo $this->webroot;?>assets/frontend/layout/scripts/layout.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            RevosliderInit.initRevoSlider();
            Layout.initTwitter();
            Portfolio.init();
            //Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            //Layout.initNavScrolling(); 
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>