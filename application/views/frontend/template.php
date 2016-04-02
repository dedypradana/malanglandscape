<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Malang Landscape</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Pembuatan taman" name="description">
  <meta content="Membuat Taman Kota Landscape" name="keywords">
  <meta content="Malang Landscape" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="<?php echo base_url();?>assets/global/img/gallery.ico">
  <!-- Global styles START -->          
  <link href="<?php echo base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="<?php echo base_url();?>assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="<?php echo base_url();?>assets/global/css/components.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/frontend/layout/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/frontend/pages/css/portfolio.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/frontend/pages/css/style-revolution-slider.css" rel="stylesheet"><!-- metronic revo slider styles -->
  <link href="<?php echo base_url();?>assets/frontend/layout/css/style-responsive.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/frontend/layout/css/themes/green.css" rel="stylesheet" id="style-color">
  <link href="<?php echo base_url();?>assets/frontend/layout/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">
    <?php echo $_header;?>
    <?php echo $_menu;?>
    
    <?php if( $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1)==''){echo $_slider;}?>
    <div class="main">
      <div class="container">
          <?php echo $_content;?>
      </div>
    </div>
    <?php echo $_footer;?>
<!-- Load javascripts at bottom, this will reduce page load time -->
<!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
<!--[if lt IE 9]>
<script src="<?php echo base_url(); ?>assets/global/plugins/respond.min.js"></script>
<![endif]--> 
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
<script src="<?php echo base_url(); ?>assets/frontend/layout/scripts/back-to-top.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
<script src="<?php echo base_url(); ?>assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
<script src="<?php echo base_url(); ?>assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->

<!-- BEGIN RevolutionSlider -->  
<script src="<?php echo base_url(); ?>assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/pages/scripts/revo-slider-init.js" type="text/javascript"></script>
<!-- END RevolutionSlider -->

<!-- BEGIN PAGE LEVEL JAVASCRIPTS GALLERY -->
<script src="<?php echo base_url(); ?>assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery-mixitup/jquery.mixitup.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<?php if($this->uri->segment(1) == 'contact'){ ?>
<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/gmaps/gmaps.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/frontend/pages/scripts/contact-us.js" type="text/javascript"></script>
<?php } ?>    

<script src="<?php echo base_url(); ?>assets/frontend/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/frontend/pages/scripts/portfolio.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        $("img").on("contextmenu",function(){
           return false;
        }); 
        Layout.init();
        Layout.initOWL();
        RevosliderInit.initRevoSlider();
        Portfolio.init();
        <?php if($this->uri->segment(1) == 'contact'){ ?>
        ContactUs.init();
        <?php } ?>
    });
</script>
<!-- END PAGE LEVEL JAVASCRIPTS -->

</body>
<!-- END BODY -->
</html>