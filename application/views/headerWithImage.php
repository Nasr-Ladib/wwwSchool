<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title >Mroogle</title>
    <link rel="stylesheet"  href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
    <link  rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link id="bootstrap"  rel="stylesheet" href="<?php echo base_url(''); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-select.css'); ?>" >
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/flexslider.css'); ?>" media="screen">
    <link rel="icon" href="<?php echo base_url('assets/images/logotitle.png') ?>" type="image/x-icon">
    


    <link id="myprofile" rel="stylesheet" href="<?php echo base_url('assets/css/dropdown.css')?>">

    <link id="css"  href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css" media="all">
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
                <?php if($user!=null){
                    ?>
                    <div id="myprofile_mypicture" class="dropdown" style="float: left;margin-top: 5%;margin-right: 10px">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img id="mypicture"  src="<?php echo base_url('assets/uploads/'.$user[0]['client_Photo'])?>" style="border-radius:50%;width: 60;height: 60;max-width: 200%;margin-top: 5%" >
                        </a>
                        <div class="triangle-up" id="triangle-up" hidden></div>
                        <script>
                            $('#mypicture').click(function () {
                                $('.triangle-up').toggle();
                            });
                            $(window).click(function () {
                                $('.triangle-up').hide();
                                });
                        </script>
                        <ul id="logout_myprofile" class="dropdown-menu">
                            <!-- User image -->

                            <li>
                                <p>
                                  <center> <?php echo $user[0]['client_name']?></center>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <!-- Menu Footer-->
                            <li>
                                <div class="col-md-6">

                                    <a  href="<?php echo base_url('User/owenPosts/'.$user[0]['client_ID'])?>" onmouseleave="triangletoBlue()" onmouseenter="triangletoYellow()" style="width:110px" class="account"><center>My Profile</center></a>
                                </div>
                                <div class="col-md-6">
                                    <a  href="<?php echo base_url() ?>auth/logout" onmouseleave="triangletoBlue()"  onmouseenter="triangletoYellow()" class="account" style="width:100px"> <center>Log out </center> </a>
                                </div>
                            </li>
                            <?php if($user!=null){
                            if($isAdmin==3 ){ ?>
                            <li>
                                <div class="col-md-12">
                                    <a  href="<?php echo base_url('admin/indexadmin') ?>" onmouseleave="triangletoBlue()"  onmouseenter="triangletoYellow()" class="account" style="width:100%"> <center>Back To Dashboard </center> </a>
                                </div>
                            </li>
                            <?php } }?>
                        </ul>
                    </div>
                    <script>
                        function  triangletoYellow() {
                            document.getElementById('logout_myprofile').style='border-top-color: #f3c500;    -webkit-transition: 0.5s all;';
                            document.getElementById("triangle-up").style.borderBottomColor  = "#f3c500";
                        }
                        function triangletoBlue() {
                            document.getElementById('logout_myprofile').style='border-top-color: #244470;-webkit-transition: 0.5s all;';
                            document.getElementById("triangle-up").style.borderBottomColor  = "#244470";
                        }

                    </script>
              <?php  } else{ ?>

            <a class="account" href="<?php echo base_url('/auth/login'); ?>">My Account</a>
            <?php  }  ?>
            <?php if($user!=null){
            if($user[0]['client_Language']=='arab'){ ?>
            <script>
                        document.getElementById('css').href = '<?php echo base_url('assets/css/style-rtl1.css');?>';
                        document.getElementById('bootstrap').href = '<?php echo base_url('assets/css/bootstrap-rtl.min.css'); ?>';
                        $('#style_rtl_responsive').append(' .resp-vtabs li.resp-tab-active {' +
                            '        border-right: 4px solid #F3C500 !important;' +
                            '        border-left:1px solid #CCCCCC !important;' +
                            '    }');
                        document.getElementById('myprofile').href = '<?php echo base_url('assets/css/dropdown-rtl.css');?>';
                        document.getElementById('myprofile_mypicture').style = 'float: right;margin-top: 5%;margin-left: 10px';
                </script>
            <?php } }?>
            <a class="account"  onclick="changeLang()" id="arab" style="margin-left:5px; border-radius:100px;padding: 6px 9px;">Ar</a>

            <a class="account" onclick="changeLang()" id="english" style="margin-left:5px; border-radius:100px;padding: 6px 9px;">En</a>
        </div>
    </div>
</div>

<script>
    <?php if($_COOKIE["language"]=="ar"){?>
    document.getElementById('css').href = '<?php echo base_url('assets/css/style-rtl1.css');?>';
    document.getElementById('bootstrap').href = '<?php echo base_url('assets/css/bootstrap-rtl.min.css'); ?>';
    $('#style_rtl_responsive').append(' .resp-vtabs li.resp-tab-active {' +
        '        border-right: 4px solid #F3C500 !important;' +
        '        border-left:1px solid #CCCCCC !important;' +
        '    }');
    document.getElementById('myprofile').href = '<?php echo base_url('assets/css/dropdown-rtl.css');?>';
    document.getElementById('myprofile_mypicture').style = 'float: right;margin-top: 5%;margin-left: 10px';
    <?php } ?>
    <?php if($_COOKIE["language"]=="en"){?>
    document.getElementById('css').href='<?php echo base_url('assets/css/style.css'); ?>';
    document.getElementById('bootstrap').href='';
    $('#style_rtl_responsive').empty();
    document.getElementById('myprofile').href='<?php echo base_url('assets/css/dropdown.css');?>';
    document.getElementById('myprofile_mypicture').style='float: left;margin-top: 5%;margin-right: 10px';
    <?php } ?>
</script>
<script>
    $('#arab').click(function () {
        $.cookie('language', 'ar',{ expires: 1, path: '/'  });
        document.getElementById('css').href = '<?php echo base_url('assets/css/style-rtl1.css');?>';
        document.getElementById('bootstrap').href = '<?php echo base_url('assets/css/bootstrap-rtl.min.css'); ?>';
        $('#style_rtl_responsive').append(' .resp-vtabs li.resp-tab-active {' +
            '        border-right: 4px solid #F3C500 !important;' +
            '        border-left:1px solid #CCCCCC !important;' +
            '    }');
        document.getElementById('myprofile').href = '<?php echo base_url('assets/css/dropdown-rtl.css');?>';
        document.getElementById('myprofile_mypicture').style = 'float: right;margin-top: 5%;margin-left: 10px';
        var lang = 'arab';
    <?php if($user!=null){?>
        $.ajax({
                url: "<?php echo base_url('index.php/post/changeLang/'.$user[0]['client_ID']); ?>",
            type: "POST",
            data: {'lang': lang}
        });
        <?php } ?>
    });
    $('#english').click(function () {
        $.cookie('language', 'en',{ expires: 1, path: '/'  });
        document.getElementById('css').href='<?php echo base_url('assets/css/style.css'); ?>';
        document.getElementById('bootstrap').href='';
        $('#style_rtl_responsive').empty();
        document.getElementById('myprofile').href='<?php echo base_url('assets/css/dropdown.css');?>';
        document.getElementById('myprofile_mypicture').style='float: left;margin-top: 5%;margin-right: 10px';
        var lang = 'english';

        <?php if($user!=null){?>
        $.ajax({
            url: "<?php echo base_url('index.php/post/changeLang/'.$user[0]['client_ID']); ?>",
            type: "POST",
            data: {'lang': lang}
        });
        <?php } ?>
    });
</script>
<div class="banner text-center">
    <div class="container">
        <h1>Sell or Advertise   <span class="segment-heading">    anything online </span> with Resale</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        <?php if($user!=null){?>
            <a href="<?php echo base_url('/post/displayonepost/add') ?>">Post Free Ad</a>
            <a href="<?php echo base_url('post/evaluator/'.$user[0]['client_ID']); ?>" style="margin-left: 3px">Evaluate Ads</a>

        <?php }else{?>
            <a href="<?php echo base_url('/auth/login') ?>">Post Free Ad</a>
        <?php }?>

    </div>
</div>
<script src="<?php echo base_url()?>/assets/js/jquery.cookie.js"></script>
