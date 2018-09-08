<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Mroogle</title>
    <link rel="stylesheet"  href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
    <link  rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link  rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-rtl.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-select.css'); ?>" >
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/flexslider.css'); ?>" media="screen">
    <link rel="icon" href="<?php echo base_url('assets/images/logotitle.png') ?>" type="image/x-icon">
    <link id="css"  href="<?php echo base_url('assets/css/style-rtl1.css'); ?>" rel="stylesheet" type="text/css" media="all">
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <!--fonts-->

    <!--//fonts-->
    <!-- js -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>" ></script>
    <!-- js -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script  src="<?php echo base_url('assets/js/bootstrap-select.js'); ?>"></script>
    <script>
        $(document).ready(function () {
            var mySelect = $('#first-disabled2');
            $('#special').on('click', function () {
                mySelect.find('option:selected').prop('disabled', true);
                mySelect.selectpicker('refresh');
            });
            $('#special2').on('click', function () {
                mySelect.find('option:disabled').prop('disabled', false);
                mySelect.selectpicker('refresh');
            });
            $('#basic2').selectpicker({
                liveSearch: true,
                maxOptions: 1
            });
        });
    </script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.leanModal.min.js'); ?>"></script>
    <link href="<?php echo base_url('assets/css/jquery.uls.css'); ?>"  rel="stylesheet">
    <link href="<?php echo base_url('assets/css/jquery.uls.grid.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/jquery.uls.lcd.css'); ?>"  rel="stylesheet">
    <!-- Source -->
    <script src="<?php echo base_url('assets/js/jquery.uls.data.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.uls.data.utils.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.uls.lcd.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.uls.languagefilter.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.uls.regionfilter.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.uls.core.js'); ?>"></script>
    <script>
        $( document ).ready( function() {
            $( '.uls-trigger' ).uls( {
                onSelect : function( language ) {
                    var languageName = $.uls.data.getAutonym( language );
                    $( '.uls-trigger' ).text( languageName );
                },
                quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
            } );
        } );
    </script>
</head>
<div class="header">
    <div class="container">
        <div class="logo">
            <a href="<?php echo base_url(''); ?>">
                <img src="<?php echo base_url('assets/images/logo.png'); ?>">
            </a>
        </div>
        <div class="header-right">
            <a class="account" href="<?php echo base_url('') ?>auth/register_account">Register Now!</a>

        </div>
    </div>
</div>
<script src="<?php echo base_url()?>/assets/js/jquery.cookie.js"></script>
