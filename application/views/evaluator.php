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
            url: "<?php echo base_url('post/changeLang/'.$user[0]['client_ID']); ?>",
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
            url: "<?php echo base_url('post/changeLang/'.$user[0]['client_ID']); ?>",
            type: "POST",
            data: {'lang': lang}
        });
        <?php } ?>
    });
</script>
<div class="banner text-center">
    <div class="container">
        <h1>Welcome   <span class="segment-heading"> Mr  </span>  <?php echo $user[0]['client_name'] ?></h1>
        <p> Thanks to Evaluate Our Posts </p>

    </div>
</div>
<script src="<?php echo base_url()?>/assets/js/jquery.cookie.js"></script>
<style>
    .w3-border {
        border: 1px solid #b8b8b8!important;
    }
    .w3-container, .w3-panel {
        padding: 25;
    }
    .w3-round-xlarge {
        border-radius: 16px;
    }
</style>

<div class="container">
    <div class="row">
        <ol class="breadcrumb" style="margin-top: 2%">
            <li><a href="">Home</a></li>
            <li><a href="<?php echo base_url('post/categories/0')?>">All Ads</a></li>
            <li><a>Page Evaluation</a></li>
        </ol>
    </div>
    <div>
        <h3>
            Regulations:
        </h3>
        <p>
             <ul>
            <li>
                You can Evaluate only The posts You have seen.
            </li>
            <li>
               You can give a note to any posts with some features.
            </li>
            <li>
                Your note Between 0 to 100%.
            </li>
            <li>
                Your note is the averge between characteristic.
            </li>

        </ul>
        </p>
    </div>
    <div class="w3-container w3-border w3-round-xlarge" style="margin-top: 70px; display: grid;" >
        <div class="head-top" style="margin-top: -5%;"> <h3 style="color: #f3c500;">All Ads You have Seen.</h3></div>
        <div id="container">
            <?php if($posts!= null){?>
            <ul class="list" id="list_post_evaluate" style="display: block;">
                <?php  foreach ($posts as $post){
                    $i=0;
                    ?>
                    <a href="<?php echo base_url('post/readonepost/'.$post['pub_ID'])?>" id="<?php echo $post['pub_ID']?>">
                        <li style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <img src="<?php echo base_url('assets/uploads/'.$post['pub_Photo'])?>">
                            <section class="list-left">
                                <h5 class="title"><?php echo $post['pub_Name']?></h5>
                                <span class="adprice">SAR <?php echo $post['pub_Price'] ?> </span>
                                <p class="catpath">Mobile Phones » Brand</p>
                            </section></a>
                           <?php foreach($posts_evaluted as $post_evaluted){
                               if($post_evaluted['pub_ID']==$post['pub_ID']){
                                   $i=1;?>
                                   <section class="list-right" style="    width: 30%;margin-right: 250;margin-top: -80;" >
                                   <div class="progress" >
                                       <div class="<?php if($post_evaluted['evaluator_Note']>80){ echo 'progress-bar progress-bar-success';} ?>
                                       <?php if(($post_evaluted['evaluator_Note']<=80) &&($post_evaluted['evaluator_Note']>=60) ){ echo 'progress-bar progress-bar-success';} ?>
                                       <?php if(($post_evaluted['evaluator_Note']<60) &&($post_evaluted['evaluator_Note']>=30) ){ echo 'progress-bar progress-bar-warning';} ?>
                                       <?php if($post_evaluted['evaluator_Note']<30){ echo 'progress-bar progress-bar-danger';} ?>" style="width: <?php echo $post_evaluted['evaluator_Note'] ?>%"></div>
                                   </div>
                                   <span class="adprice">You Evaluate as
                                       <strong>
                                       <?php if($post_evaluted['evaluator_Note']>80){ echo 'Excellent';} ?>
                                       <?php if(($post_evaluted['evaluator_Note']<=80) &&($post_evaluted['evaluator_Note']>=60) ){ echo 'Good';} ?>
                                       <?php if(($post_evaluted['evaluator_Note']<60) &&($post_evaluted['evaluator_Note']>=30) ){ echo 'Humble';} ?>
                                       <?php if($post_evaluted['evaluator_Note']<30){ echo 'Bad';} ?>
                                       </strong>
                                       Post </span>
                                   </section>
                                   <section class="list-right" style=" margin-top: -85;">
                                       <a class="button">Edit Evalution</a>
                                   </section>
                                   <div class="clearfix"></div>
                            <?php
                               }
                           } ?>
                  <?php
                      if($i==0){?>
                          </section>
                          <section class="list-right">
                              <a id="evaluate<?php echo $post['pub_ID'] ?>" class="button">Evaluate</a>
                          </section>
                          <div class="clearfix"></div>

                  <?php    }
                     ?>
                        </li>
                    <div id="toEvaluate<?php echo $post['pub_ID'] ?>" class="well" hidden >
                        <style>
                            .slidecontainer {
                                width: 100%;
                            }

                            .slider {
                                -webkit-appearance: none;
                                width: 100%;
                                height: 10px;
                                border-radius: 5px;
                                background: #d3d3d3;
                                outline: none;
                                opacity: 0.7;
                                -webkit-transition: .2s;
                                transition: opacity .2s;
                            }

                            .slider:hover {
                                opacity: 1;
                            }

                            .slider::-webkit-slider-thumb {
                                -webkit-appearance: none;
                                appearance: none;
                                width: 15px;
                                height: 15px;
                                border-radius: 50%;
                                background: #4CAF50;
                                cursor: pointer;
                            }

                            .slider::-moz-range-thumb {
                                width: 25px;
                                height: 25px;
                                border-radius: 50%;
                                background: #4CAF50;
                                cursor: pointer;
                            }
                        </style>
                        <div class="form-horizontal">
                       <div class="form-group">
                           <label for="txtarea1" class="col-sm-2 control-label">Picture Post:</label>
                           <div class="slidecontainer col-sm-8" style="width: 50%">
                            <input type="range" min="1" max="100" value="50" class="slider" id="myRangePicture<?php echo $post['pub_ID'] ?>">
                            <p>Value: <span id="demoPicture<?php echo $post['pub_ID'] ?>"></span>%</p>
                        </div>

                        <script>
                           $('#evaluate<?php echo $post['pub_ID'] ?>').click( function () {
                                $('#toEvaluate<?php echo $post['pub_ID'] ?>').toggle();
                               var slider = document.getElementById("myRangePicture<?php echo $post['pub_ID'] ?>");
                               var output = document.getElementById("demoPicture<?php echo $post['pub_ID'] ?>");
                               output.innerHTML = slider.value;

                               slider.oninput = function() {
                                   output.innerHTML = this.value;
                               }
                           });

                        </script>
                    </div>
                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label">Description Post:</label>
                            <div class="slidecontainer col-sm-8" style="width: 50%">
                                <input type="range" min="1" max="100" value="50" class="slider" id="myRangeDescription<?php echo $post['pub_ID'] ?>">
                                <p>Value: <span id="demoDescription<?php echo $post['pub_ID'] ?>"></span>%</p>
                            </div>

                            <script>
                                $('#evaluate<?php echo $post['pub_ID'] ?>').click( function () {
                                    $('#toEvaluate<?php echo $post['pub_ID'] ?>').toggle();
                                    var slider = document.getElementById("myRangeDescription<?php echo $post['pub_ID'] ?>");
                                    var output = document.getElementById("demoDescription<?php echo $post['pub_ID'] ?>");
                                    output.innerHTML = slider.value;

                                    slider.oninput = function() {
                                        output.innerHTML = this.value;
                                    }
                                });

                            </script>
                        </div>
                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label">Price Post:</label>
                            <div class="slidecontainer col-sm-8" style="width: 50%">
                                <input type="range" min="1" max="100" value="50" class="slider" id="myRangePrice<?php echo $post['pub_ID'] ?>">
                                <p>Value: <span id="demoPrice<?php echo $post['pub_ID'] ?>"></span>%</p>
                            </div>

                            <script>
                                $('#evaluate<?php echo $post['pub_ID'] ?>').click( function () {
                                    $('#toEvaluate<?php echo $post['pub_ID'] ?>').toggle();
                                    var slider = document.getElementById("myRangePrice<?php echo $post['pub_ID'] ?>");
                                    var output = document.getElementById("demoPrice<?php echo $post['pub_ID'] ?>");
                                    output.innerHTML = slider.value;
                                    slider.oninput = function() {
                                        output.innerHTML = this.value;
                                    }
                                });

                            </script>
                        </div>
                         <div class="form-group">
                             <label for="txtarea1" class="col-sm-2 control-label">Your Preview:</label>
                             <div class="col-sm-8">
                                 <textarea name="txtarea1" id="preview<?php echo $post['pub_ID'] ?>"  cols="80" rows="10" style=" width: 822px; height:100px;"></textarea>
                             </div>
                         </div>
                            <div class="form-group">
                                <a class="account"  id="saveEvaluation<?php echo $post['pub_ID'] ?>" style="float: right">Save</a>
                                <script>
                                    $('#saveEvaluation<?php echo $post['pub_ID'] ?>').click(function () {
                                        var pathname = window.location.pathname;
                                        var pic=$('#myRangePicture<?php echo $post['pub_ID'] ?>').val();
                                        var desc=$('#myRangePicture<?php echo $post['pub_ID'] ?>').val();
                                        var price=$('#myRangePicture<?php echo $post['pub_ID'] ?>').val();
                                        var preview=$('#preview<?php echo $post['pub_ID'] ?>').val();
                                        var note= ((parseInt(pic)+parseInt(desc)+parseInt(price)));
                                        var id=<?php echo $user[0]['client_ID'] ?>;
                                        $.ajax({
                                            url : "<?php echo base_url('post/evaluatepost/'.$post['pub_ID']); ?>",
                                            type : "POST",
                                            data:{'preview':preview,'note':note,'id':id},
                                            success : function(response) {
                                                $('#list_post_evaluate').load(pathname+' #list_post_evaluate');
                                            },
                                            error : function(data) {

                                            }
                                        });
                                    });

                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                <?php }}else{ ?>
                    <ul class="list" id="list_post" style="display: block;"><li> <center>There are no Posts To Evaluate </center></li></ul>
                <?php  } ?>
            </ul>
        </div>
    </div>
    <div class="w3-container w3-border w3-round-xlarge" style="margin-top: 50px; display: grid;" >
        <div class="head-top" style="margin-top: -5%;"> <h3 style="color: #f3c500;">All Ads You have not Yet Seen</h3></div>
        <div id="container">
            <?php if($posts_not_seen!= null){?>
            <ul class="grid" id="list_post" style="display: block;">
                <?php  foreach ($posts_not_seen as $post_not_seen){ ?>
                    <a href="<?php echo base_url('post/readonepost/'.$post_not_seen['pub_ID'])?>">
                        <li style="  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <img src="<?php echo base_url('assets/uploads/'.$post_not_seen['pub_Photo'])?>" style="width: 319;height: 191">
                            <section class="list-left">
                                <h5 class="title"><?php echo $post_not_seen['pub_Name']?></h5>
                                <span class="adprice">SAR <?php echo $post_not_seen['pub_Price'] ?> </span>
                                <p class="catpath">Mobile Phones » Brand</p>
                            </section>
                            <section class="list-right">
                                <span class="date"><?php echo $post_not_seen['pub_Date']?></span>
                                <span class="cityname">City name</span>
                            </section>
                            <div class="clearfix"></div>
                        </li>
                    </a>
                <?php }}else{ ?>
                    <ul class="list" id="list_post" style="display: block;"><li> <center>There are no Posts </center></li></ul>               <?php  } ?>
            </ul>
        </div>
    </div>


</div>