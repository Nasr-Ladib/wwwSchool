


<!-- saved from url=(0040)http://brain-pro.com/mroogle/single.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Mroogle | Single </title>


    <link rel="stylesheet" href="<?php echo base_url('assets/theme/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/theme/bootstrap-select.css'); ?>" >
    <link  href="<?php echo base_url('assets/theme/style.css'); ?>" rel="stylesheet" type="text/css" media="all">
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
    <link rel="stylesheet" href="<?php echo base_url('assets/css/flexslider.css'); ?>" media="screen">
</head>
<body>
<?php

$this->set_css($this->default_theme_path.'/datatables/css/datatables.css');
$this->set_js_lib($this->default_theme_path.'/flexigrid/js/jquery.form.js');
$this->set_js_config($this->default_theme_path.'/datatables/js/datatables-edit.js');
$this->set_css($this->default_css_path.'/ui/simple/'.grocery_CRUD::JQUERY_UI_CSS);
$this->set_js_lib($this->default_javascript_path.'/jquery_plugins/ui/'.grocery_CRUD::JQUERY_UI_JS);
$this->set_js_lib($this->default_javascript_path.'/jquery_plugins/jquery.noty.js');
$this->set_js_lib($this->default_javascript_path.'/jquery_plugins/config/jquery.noty.config.js');
?>

<!--single-page-->


<div class="single-page main-grid-border">
    <div class="container">
        <div class="product-desc">
            <div class="col-md-7 product-view">
                <h2>
                    <?php
                    foreach($fields as $field) {
                        if ($input_fields[$field->field_name]->display_as == 'client Name')
            echo '<div class="row"> <div class="col-md-3">Posted by:</div> <div class="col-md-9"><strong>'.$input_fields[$field->field_name]->input.'</strong></div></div>';
            }        ?>

                </h2>
                <p style="display:inline"> <i class="glyphicon glyphicon-map-marker"></i><a href="http://brain-pro.com/mroogle/single.html#">state</a>, <a href="http://brain-pro.com/mroogle/single.html#">city</a>| Added at <?php foreach($fields as $field) {if ($input_fields[$field->field_name]->display_as == 'Pub Date') echo $input_fields[$field->field_name]->input;} echo ', Ad ID:'?> <?php foreach($fields as $field) {if ($input_fields[$field->field_name]->display_as == 'Pub Code') echo $input_fields[$field->field_name]->input;}?></p>
                <div class="flexslider">
                    <?php
                    $pic1='';
                    foreach($fields as $field) {
                        if ($input_fields[$field->field_name]->display_as == 'Pub Photo'){
                            $pic1= $input_fields[$field->field_name]->input;
                            $pic2=url_title($pic1);
                            $pic2=substr($pic2, 0, -3);
                        }
                    }
                    ?>

                    <div class="flex-viewport" style="overflow: hidden; position: relative;">
                        <ul class="slides" style="width: 1000%; transition-duration: 0.5s; transform: translate3d(-1250px, 0px, 0px);">
                            <li data-thumb="<?php echo base_url('assets/uploads/'.$pic2.'.jpg'); ?>" class="clone" aria-hidden="true" style="width: 625px; float: left; display: block;">
                                <img src="<?php echo base_url('assets/uploads/'.$pic2.'.jpg'); ?>" draggable="false">
                            </li>
                            <li data-thumb="<?php echo base_url('assets/uploads/'.$pic2.'.jpg'); ?>" style="width: 625px; float: left; display: block;" class="" >
                                <img src="<?php echo base_url('assets/uploads/'.$pic2.'.jpg'); ?>"  draggable="false">
                            </li>
                            <li data-thumb="<?php echo base_url('assets/uploads/'.$pic2.'.jpg'); ?>" style="width: 625px; float: left; display: block;" class="flex-active-slide">
                               <img src="<?php echo base_url('assets/uploads/'.$pic2.'.jpg'); ?>" draggable="false">
                            </li>
                            <li data-thumb="<?php echo base_url('assets/uploads/'.$pic2.'.jpg'); ?>" style="width: 625px; float: left; display: block;">
                                <img src="<?php echo base_url('assets/uploads/'.$pic2.'.jpg'); ?>" draggable="false">
                            </li>

                        </ul>
                    </div>

                    <ul class="flex-direction-nav">
                        <li class="flex-nav-prev"><a class="flex-prev" href="">Previous</a></li>
                        <li class="flex-nav-next"><a class="flex-next" href="<?php base_url('assets/uploads/'.$pic2.'.jpg') ?>">Next</a></li>
                    </ul>
                </div>
                <!-- FlexSlider -->
                <script defer="" src="<?php echo base_url('assets/js/jquery.flexslider.js'); ?>"></script>
                <link rel="stylesheet" href="<?php echo base_url('assets/css/flexslider.css'); ?>" type="text/css" media="screen">

                <script>
                    $(window).load(function() {
                        $('.flexslider').flexslider({
                            animation: "slide",
                            controlNav: "thumbnails"
                        });
                    });
                </script>
                <!-- //FlexSlider -->
                <div class="product-details">
                    <h4>Brand : <a href="http://brain-pro.com/mroogle/single.html#">Company name</a></h4>
                    <h4>Views : <strong><?php
                            foreach($fields as $field) {
                                if ($input_fields[$field->field_name]->display_as == 'Pub Views')
                                {      if($input_fields[$field->field_name]->input == '0')
                                { echo '0';}
                                else echo $input_fields[$field->field_name]->input;

                            }  }      ?></strong></h4>
                    <p><strong>Display </strong>: 1.5 inch HD LCD Touch Screen</p>
                    <p><strong>Summary</strong> :<?php
                        foreach($fields as $field) {
                            if ($input_fields[$field->field_name]->display_as == 'Pub Desc')
                                echo $input_fields[$field->field_name]->input;
                        }        ?></p>

                </div>
            </div>
            <div class="col-md-5 product-details-grid">
                <div class="item-price">
                    <div class="product-price">
                        <p class="p-price">Price</p>
                        <h3 class="rate"> <?php
                            foreach($fields as $field) {
                                if ($input_fields[$field->field_name]->display_as == 'Pub Price')
                                    echo $input_fields[$field->field_name]->input;
                            }        ?> </h3>
                        <div class="clearfix"></div>
                    </div>
                    <div class="condition">
                        <p class="p-price">Condition</p>
                        <h4><?php
                            foreach($fields as $field) {
                                if ($input_fields[$field->field_name]->display_as == 'Pub Status')
                                    echo $input_fields[$field->field_name]->input;
                            }        ?></h4>
                        <div class="clearfix"></div>
                    </div>
                    <div class="itemtype">
                        <p class="p-price">Item Type</p>
                        <h4><?php
                            foreach($fields as $field) {
                                if ($input_fields[$field->field_name]->display_as == 'Categorie Name')
                                    echo $input_fields[$field->field_name]->input;
                            }        ?></h4>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="interested text-center">
                    <h4>Interested in this Ad?<small> Contact the Seller!</small></h4>
                    <p><i class="glyphicon glyphicon-earphone"></i>00-966-533442233</p>
                </div>
                <div class="tips">
                    <h4>Safety Tips for Buyers</h4>
                    <ol>
                        <li><a href="http://brain-pro.com/mroogle/single.html#">Contrary to popular belief.</a></li>
                        <li><a href="http://brain-pro.com/mroogle/single.html#">Contrary to popular belief.</a></li>
                        <li><a href="http://brain-pro.com/mroogle/single.html#">Contrary to popular belief.</a></li>
                        <li><a href="http://brain-pro.com/mroogle/single.html#">Contrary to popular belief.</a></li>
                        <li><a href="http://brain-pro.com/mroogle/single.html#">Contrary to popular belief.</a></li>
                        <li><a href="http://brain-pro.com/mroogle/single.html#">Contrary to popular belief.</a></li>
                        <li><a href="http://brain-pro.com/mroogle/single.html#">Contrary to popular belief.</a></li>
                        <li><a href="http://brain-pro.com/mroogle/single.html#">Contrary to popular belief.</a></li>
                        <li><a href="http://brain-pro.com/mroogle/single.html#">Contrary to popular belief.</a></li>
                    </ol>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--//single-page-->
</body>
</html>