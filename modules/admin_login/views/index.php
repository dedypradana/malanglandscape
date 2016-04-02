<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Malang Landscape | Login Page</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="Malang Landscape" name="MalangLandscape"/>
        <meta content="dedy90.informatika@gmail.com" name="DedyPradana"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="<?php echo base_url(); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url(); ?>assets/admin/pages/css/lock2.css" rel="stylesheet" type="text/css"/>
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME STYLES -->
        <link href="<?php echo base_url(); ?>assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
        <link href="<?php echo base_url(); ?>assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body>
        <div class="page-lock">
            <div class="page-logo">
                <a class="brand" href="<?php echo base_url('admin_login');?>">
                    <img src="<?php echo base_url();?>assets/admin/layout/img/logo.png" alt="logo"/>
                </a>
            </div>
            <?php if (@$this->session->flashdata('msg')) { ?>
                <div class="row">
                    <div class="col-md-12">
                        <?php echo @$this->session->flashdata('msg'); ?>
                    </div>
                </div>
            <?php } ?>
            <div class="page-body">
                <img class="page-lock-img" src="<?php echo base_url(); ?>assets/admin/pages/media/profile/profile.jpg" alt="">
                <div class="page-lock-info">
                    <h1>LOGIN PAGE</h1>
                    <span class="email">
                        Masukkan Username & Password </span>
                    <span class="locked">
                        Authentication </span>
                    <form action="<?php echo site_url('admin_login/auth');?>" class="form-inline" method="post">
                        <div class="input-group input-medium">
                            <input type="text" name="uname" class="form-control" placeholder="Username">
                            <input type="password" name="passwd" class="form-control" placeholder="Password">
                            <span class="input-group-btn">
                                <button type="submit" class="btn blue icn-only"><i class="m-icon-swapright m-icon-white"></i></button>
                            </span>
                        </div>
                        <!-- /input-group -->
                        <div class="relogin">
                            <a href="">
                                Lupa Password ? </a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="page-footer-custom">
                2016 &copy; Malang Landscape.
            </div>
        </div>
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- BEGIN CORE PLUGINS -->
        <!--[if lt IE 9]>
        <script src="<?php echo base_url(); ?>assets/global/plugins/respond.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/excanvas.min.js"></script> 
        <![endif]-->
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>assets/global/scripts/metronic.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
        <script>
            var Lock = function () {
                return {
                    //main function to initiate the module
                    init: function () {

                        $.backstretch([
                            "<?php echo base_url(); ?>assets/admin/pages/media/bg/1.jpg",
                            "<?php echo base_url(); ?>assets/admin/pages/media/bg/2.jpg",
                            "<?php echo base_url(); ?>assets/admin/pages/media/bg/3.jpg",
                            "<?php echo base_url(); ?>assets/admin/pages/media/bg/4.jpg"
                        ], {
                            fade: 1000,
                            duration: 2500
                        });
                    }

                };

            }();
            jQuery(document).ready(function () {
                Metronic.init(); // init metronic core components
                Layout.init(); // init current layout
                Lock.init();
                Demo.init();
            });
        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>