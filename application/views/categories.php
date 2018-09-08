
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/easy-responsive-tabs.css')?>">
<script src="<?php echo base_url('/assets/js/easyResponsiveTabs.js')?>"></script>
<style id="style_rtl_responsive">
</style>
<!-- Categories -->
<!--Vertical Tab-->

<div class="container">
    <div class="row">
        <ol class="breadcrumb" style="margin-top:2% ">
        <li><a href="<?php echo base_url('')?>">Home</a></li>
        <li>All Ads</li>
    </ol>
    </div>
<div class="categories-section main-grid-border">
    <div class="row">
        <div class="col-md-3 col-sm-3" style="margin-top: -2%">
            <h2 class="head">Main Categories</h2>
            <div id="parentVerticalTab">
                    <ul class="resp-tabs-list hor_1">
                        <span class="active total" style="display:block;margin-top: -15px" data-toggle="modal" data-target="#myModal"><strong>All KSA</strong> (Select your city to see local ads)</span>
                        <li id="0" value="0">
                            All Categories
                        </li>
                        <script>
                           function changed() {
                               var i =$('#category_selected').val();
                               $('#'+i+'').trigger("click");
                           }

                        </script>
                        <script>
                            //added
                            function clickedonPost() {
                                $('#type_selected').val(1);
                                var j =$('#category_selected').val();
                                $('#'+j+'').trigger("click");
                            }
                            function clickedonNeed() {
                                var i =$('#type_needs').val();
                                $('#type_selected').val(0);
                                var j =$('#category_selected').val();
                                $('#'+j+'').trigger("click");
                            }
                            function clickedonAll() {
                                $('#type_selected').val(2);
                                var j =$('#category_selected').val();
                                $('#'+j+'').trigger("click");
                            }
                            function searching() {
                                var j =$('#category_selected').val();
                                $('#'+j+'').trigger("click");
                            }

                            //added
                        </script>
                        <script type="text/javascript">
                            if (performance.navigation.type == 1) {
                                window.location.href = 'http://www.mroogle-market.com/post/categories/0';
                            }
                        </script>

                        <input id="category_selected" value="<?php echo $id_category_initial ?>"  hidden >
                        <!-- //added-->
                        <input id="type_selected" value="2" hidden>
                        <!-- //added-->
                        <script>
                            $('#0').click(function () {
                                var i =$('#0').val();
                                $('#category_selected').val(i);
                                var filter=$('#sorted').val();
                                var type= $('#type_selected').val();
                                var search=$('#search_post').val();
                                $.ajax({
                                    url : "<?php echo base_url('post/choiceAllCat'); ?>",
                                    type : "POST",
                                    dataType: 'json',
                                    data:{'id':i,'filter':filter,'type':type,'search':search},
                                    success : function(response) {
                                        $('#list_post').empty();
                                        if(!$.trim(response)){
                                            $('#list_post').append('<li> <center>There are no Posts </center></li>');
                                        }else{
                                        $.each(response,function (key,value) {
                                            var pic = value.pub_Photo.split(",");
                                            $('#list_post').append('<a href="http://www.mroogle-market.com/post/readonepost/'+value.pub_ID+'">'
                                                +'<li>'
                                                +'<img src="http://www.mroogle-market.com/assets/uploads/'+pic[0]+'">'
                                                +'<section class="list-left">'
                                                +'<h5 class="title">'+value.pub_Name+'</h5>'
                                                +'<span class="adprice">SAR '+value.pub_Price+' </span>'
                                                +'<p class="catpath">Mobile Phones » Brand</p>'
                                                +'</section>'
                                                +'<section class="list-right">'
                                                +' <span class="date">'+value.pub_Time+'</span>'
                                                +'<span class="cityname">City name</span>'
                                                +'</section>'
                                                +'<div class="clearfix"></div>'
                                                +'</li>'
                                            );
                                        });}
                                    },
                                    error : function(data) {

                                    }
                                });

                            })
                        </script>

                        <?php  foreach ($categories as $category){
                            if($category['id_Parent']==Null){?>
                        <li id="<?php echo $category['cat_ID']?>" value="<?php echo $category['cat_ID']?>" >

                            <?php echo $category['cat_Name'] ?>
    <!--                        <select class="select_sub-category" >-->
    <!--                            <option value="0"></option>-->
    <!--                            --><?php //foreach ($categories as $sub_category){
    //                            if($category['cat_ID'] == $sub_category['id_Parent']){?>
    <!--                            <option value=" --><?php //echo $sub_category['cat_ID'] ?><!--">-->
    <!--                                --><?php //echo $sub_category['cat_Name'] ?>
    <!--                            </option>-->
    <!--                            --><?php //  }}?>
    <!--                        </select>-->
                        </li>
                                <script>
                                    $('#<?php echo $category['cat_ID']?>').click(function () {
                                        var i =$('#<?php echo $category['cat_ID']?>').val();
                                        $('#category_selected').val(i);
                                        var filter=$('#sorted').val();
                                        var type= $('#type_selected').val();
                                        var search=$('#search_post').val();
                                        $.ajax({
                                            url : "<?php echo base_url('post/choiceCat'); ?>",
                                            type : "POST",
                                            dataType: 'json',
                                            data:{'id':i,'filter':filter,'type':type,'search':search},
                                            success : function(response) {
                                                $('#list_post').empty();
                                                if(!$.trim(response)){
                                                    $('#list_post').append('<li> <center>There are no Posts </center></li>');
                                                }else{
                                        $.each(response,function (key,value) {
                                            var pic = value.pub_Photo.split(",");
                                            $('#list_post').append('<a href="http://www.mroogle-market.com/post/readonepost/'+value.pub_ID+'">'
                                                +'<li>'
                                                +'<img src="http://www.mroogle-market.com/assets/uploads/'+pic[0]+'">'
                                                 +'<section class="list-left">'
                                                    +'<h5 class="title">'+value.pub_Name+'</h5>'
                                                    +'<span class="adprice">SAR '+value.pub_Price+' </span>'
                                                    +'<p class="catpath">Mobile Phones » Brand</p>'
                                                 +'</section>'
                                                 +'<section class="list-right">'
                                                    +' <span class="date">'+value.pub_Time+'</span>'
                                                    +'<span class="cityname">City name</span>'
                                                +'</section>'
                                                +'<div class="clearfix"></div>'
                                                +'</li>'
                                            );
                                        });}
                                            },
                                            error : function(data) {

                                            }
                                        });

                                    })
                                </script>
                            <?php    }

                        } ?>



                    </ul>

            </div>
        </div>
        <div class="col-md-9 col-sm-9">

        <script type="text/javascript">
        $(document).ready(function () {
            var elem=$('#container ul');
            $('#viewcontrols a').on('click',function(e) {
                if ($(this).hasClass('gridview')) {
                    elem.fadeOut(1000, function () {
                        $('#container ul').removeClass('list').addClass('grid');
                        $('#viewcontrols').removeClass('view-controls-list').addClass('view-controls-grid');
                        $('#viewcontrols .gridview').addClass('active');
                        $('#viewcontrols .listview').removeClass('active');
                        elem.fadeIn(1000);
                    });
                }
                else if($(this).hasClass('listview')) {
                    elem.fadeOut(1000, function () {
                        $('#container ul').removeClass('grid').addClass('list');
                        $('#viewcontrols').removeClass('view-controls-grid').addClass('view-controls-list');
                        $('#viewcontrols .gridview').removeClass('active');
                        $('#viewcontrols .listview').addClass('active');
                        elem.fadeIn(1000);
                    });
                }
            });
        });
    </script>
         <div>
        <div class="ads-display col-md-12" >
            <div class="wrapper">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#home" id="home-tab" onclick="clickedonAll()"  role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                                <span class="text">All Ads</span>
                            </a>
                        </li>
                        <li role="presentation" onclick="clickedonPost()" id="type_posts" value="1" class="next">
                            <a href="#profile" role="tab" id="profile-tab" value="2" data-toggle="tab" aria-controls="profile">
                                <span class="text">All Posts</span>
                            </a>
                        </li>
                        <li role="presentation" onclick="clickedonNeed()" id="type_needs" value="0">
                            <a href="#samsa" role="tab" id="samsa-tab" data-toggle="tab" aria-controls="samsa">
                                <span class="text">All Needs</span>
                            </a>
                        </li>
<!--                       addedc !!!!!!!!!!!!!-->
                        <div style="float:right;padding-top: 1%;padding-right:10px;width: 40%" class="search-product ads-list">
                                <div class="search">
                                    <div id="custom-search-input">
                                        <div class="input-group">
                                            <input id="search_post" value="" onkeyup="searching()" type="text" class="form-control input-lg" placeholder="Search for a specific product">
                                            <span class="input-group-btn">
								<button class="btn btn-info btn-lg" type="button">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                            <div>
                                <div id="container">
                                    <div class="view-controls-list" id="viewcontrols">
                                        <label>view :</label>
                                        <a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
                                        <a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
                                    </div>
                                    <div class="sort" >
                                        <div class="sort-by">
                                            <label>Sort By :</label>
                                            <select id="sorted" onchange="changed()" >
                                                <option value="recent" selected>Most recent</option>
                                                <option value="oldest">The Oldest</option>
                                                <option value="price_Low">Price: Rs Low to High</option>
                                                <option value="price_High">Price: Rs High to Low</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <ul class="list" id="list_post">
                                        <?php
                                        if($posts==null){
                                            ?><li> <center>There are no Posts </center></li>
                                        <?php
                                        }else{

                                        foreach ($posts as $post) {
                                        ?>
                                        <a href="<?php echo base_url('post/readonepost/'.$post['pub_ID']); ?>">
                                            <li>
                                                <?php $pics=explode(",",$post['pub_Photo']) ?>

                                                <img src="<?php echo base_url('assets/uploads/'.$pics[0]) ?>" title="" alt="" />
                                                <section class="list-left">
                                                    <h5 class="title"><?php echo $post['pub_Name'] ?></h5>
                                                    <span class="adprice">SAR <?php echo $post['pub_Price'] ?></span>
                                                    <p class="catpath">Mobile Phones » Brand</p>
                                                </section>
                                                <section class="list-right">
                                                    <span class="date"><?php echo $post['pub_Time'] ?></span>
                                                    <span class="cityname">City name</span>
                                                </section>
                                                <div class="clearfix"></div>
                                            </li>
                                        </a>
                                            <?php } }

                                            ?>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>



                        <ul class="pagination pagination-sm">
                            <li><a href="#">Prev</a></li>
                            <?php for($i=1;$i<(count($posts));$i++){ ?>
                            <li><a href="#"><?php echo $i ?></a></li>
                            <?php } ?>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</div>
</div>
<!--Plug-in Initialisation-->

<script type="text/javascript">
    $(document).ready(function () {
        var elem=$('#container ul');
        $('#viewcontrols a').on('click',function(e) {
            if ($(this).hasClass('gridview')) {
                elem.fadeOut(1000, function () {
                    $('#container ul').removeClass('list').addClass('grid');
                    $('#viewcontrols').removeClass('view-controls-list').addClass('view-controls-grid');
                    $('#viewcontrols .gridview').addClass('active');
                    $('#viewcontrols .listview').removeClass('active');
                    elem.fadeIn(1000);
                });
            }
            else if($(this).hasClass('listview')) {
                elem.fadeOut(1000, function () {
                    $('#container ul').removeClass('grid').addClass('list');
                    $('#viewcontrols').removeClass('view-controls-grid').addClass('view-controls-list');
                    $('#viewcontrols .gridview').removeClass('active');
                    $('#viewcontrols .listview').addClass('active');
                    elem.fadeIn(1000);
                });
            }
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {

        //Vertical Tab
        $('#parentVerticalTab').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo2');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });
</script>
<div class="total-ads main-grid-border">
    <div class="container">
        <div class="ads-grid">
            <div class="side-bar col-md-3">

                <div class="range">
                    <h3 class="sear-head">Price range</h3>
                    <ul class="dropdown-menu6">
                        <li>

                            <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0.555556%; width: 66.1111%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0.555556%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 66.6667%;"></a></div>
                            <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;">
                        </li>
                    </ul>
                    <!---->
                    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script>
                    <script type="text/javascript">//<![CDATA[
                        $(window).load(function(){
                            $( "#slider-range" ).slider({
                                range: true,
                                min: 0,
                                max: 9000,
                                values: [ 50, 6000 ],
                                slide: function( event, ui ) {  $( "#amount" ).val( "SAR" + ui.values[ 0 ] + " - SAR" + ui.values[ 1 ] );
                                }
                            });
                            $( "#amount" ).val( "SAR" + $( "#slider-range" ).slider( "values", 0 ) + " - SAR" + $( "#slider-range" ).slider( "values", 1 ) );

                        });//]]>

                    </script>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<script src="<?php echo base_url('assets/js/tabs.js')?>"></script>

<script>
    $(document).ready(function () {
        var elem=$('#container ul');
        $('#viewcontrols a').on('click',function(e) {
            if ($(this).hasClass('gridview')) {
                elem.fadeOut(1000, function () {
                    $('#container ul').removeClass('list').addClass('grid');
                    $('#viewcontrols').removeClass('view-controls-list').addClass('view-controls-grid');
                    $('#viewcontrols .gridview').addClass('active');
                    $('#viewcontrols .listview').removeClass('active');
                    elem.fadeIn(1000);
                });
            }
            else if($(this).hasClass('listview')) {
                elem.fadeOut(1000, function () {
                    $('#container ul').removeClass('grid').addClass('list');
                    $('#viewcontrols').removeClass('view-controls-grid').addClass('view-controls-list');
                    $('#viewcontrols .gridview').removeClass('active');
                    $('#viewcontrols .listview').addClass('active');
                    elem.fadeIn(1000);
                });
            }
        });
    });

</script>
