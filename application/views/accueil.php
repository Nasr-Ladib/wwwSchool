<div class="content">
    <!-- Start Display Categories -->
    <div class="categories">
        <div class="container">
            <?php $i=1;
            foreach ($categories as $categorie){
                $i++;?>
            <div class="col-md-2 focus-grid">
                <a href="<?php echo base_url('post/categories/'.$categorie['cat_ID'].'#parentVerticalTab'.$i) ?>">
                    <div class="focus-border">
                        <div class="focus-layout">
                            <div class="focus-image"><i class="<?php echo $categorie['cat_Icon']  ?>"></i></div>
                            <h4 class="clrchg"><?php echo $categorie['cat_Name']  ?></h4>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- End Display Categories -->

<div class="trending-ads">
        <div class="container">
            <!-- slider -->


        <?php if($posts!=null) {?>
            <style>
                span.favoris {
                    color: #FFF;
                    display: block;
                    padding: 6px 4px;
                    position: absolute;
                    z-index: 2;
                    transition: 0.5s all;
                    top: -3;

            </style>
            <style>
                .papertoast {
                    padding: 20px;
                    background-color: #323232;
                    color: #f1f1f1;
                    font-size: 14px;
                    font-family: 'Roboto', 'Noto', sans-serif;
                    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
                    border-radius: 2px;
                    margin: 12px;
                    width: 270px;
                    position: fixed;
                    bottom: 0;
                    left: 0;

                }

            </style>

            <div class="trend-ads">
                <h2>Trending Ads</h2>
                        <ul class="" id="flexiselDemo3" style=" list-style: none;">
                            <li class="nbs-flexisel-item">
                                    <?php if (count($posts)<4){?>
                                        <?php     for($i=0;$i<count($posts);$i++){
                                            $pic=explode(",",$posts[$i]['pub_Photo']);
                                            ?>                                            <div onmouseenter="document.getElementById('<?php echo $posts[$i]['pub_ID']?>').style='font-size:30px;color:#f3c500;-webkit-transition: 0.5s all;'" onmouseleave="document.getElementById('<?php echo $posts[$i]['pub_ID']?>').style='font-size:30px;color:rgb(36, 68, 112);-webkit-transition: 0.5s all;'" class="col-md-3 biseller-column">
                                                <a  href="<?php echo base_url('post/readonepost/'.$posts[$i]['pub_ID']) ?>">
                                                    <img src="<?php echo base_url('assets/uploads/'.$pic[0]);?> " width="191.5" height="306.55">
                                                    <span class="price"><?php echo $posts[$i]['pub_Price'].' SAR' ?></span>
                                                </a>
                                                <?php if($user!=null){
                                                    $verif_fav=0;
                                                    foreach ($favorites as $favorite){
                                                        if($favorite['pub_ID']==$posts[$i]['pub_ID']){
                                                            $verif_fav=1;
                                                        }
                                                    }
                                                if($verif_fav==1){?>
                                                    <span title="Add to my favorites" class="favoris"> <i class="material-icons" id="<?php echo $posts[$i]['pub_ID']?>" style="font-size:30px;color: rgb(36, 68, 112);">turned_in</i></span>
                                                <?php }
                                                if($verif_fav==0){ ?>
                                                    <span title="Add to my favorites"  class="favoris"> <i  class="material-icons" id="<?php echo $posts[$i]['pub_ID']?>" style="font-size:30px;color: rgb(36, 68, 112);">turned_in_not</i></span>
                                                <?php  }?>
                                                    <script>
                                                        $('#<?php echo $posts[$i]["pub_ID"]?>').click(function () {
                                                            var i=document.getElementById('<?php echo $posts[$i]["pub_ID"]?>').innerText;

                                                            $.ajax({
                                                                url : "<?php echo base_url('index.php/post/favorite/'. $posts[$i]['pub_ID'].'/'.$user[0]['client_ID']); ?>",
                                                                type : "POST",
                                                                dataType: 'json',
                                                                data:{'fav':i},
                                                                success : function(response) {
                                                                    if(response=="insert"){
                                                                        document.getElementById('<?php echo $posts[$i]["pub_ID"]?>').innerText='turned_in';
                                                                        $("#insertFav").slideToggle("fast").delay(1500).slideToggle("fast");

                                                                    }
                                                                    if(response=="delete"){
                                                                        document.getElementById('<?php echo $posts[$i]["pub_ID"]?>').innerText='turned_in_not';
                                                                        $("#deleteFav").slideToggle("fast").delay(1500).slideToggle("fast");

                                                                    }
                                                                }
                                                            });
                                                        })

                                                    </script>
                                                <?php } ?>
                                                <div id="paper_toast" class="papertoast" hidden> </div>

                                                <div class="ad-info">
                                                    <h5><?php echo $posts[$i]['pub_Name'] ?></h5>
                                                    <span> <?php
                                                        $date = new DateTime($posts[$i]['pub_Time']);
                                                        if($date->diff(new DateTime())->format('%y')!=0){
                                                            echo $date->diff(new DateTime())->format("%y years.");
                                                        }else if($date->diff(new DateTime())->format('%m')!=0){
                                                            echo $date->diff(new DateTime())->format("%m months.");
                                                        }else if($date->diff(new DateTime())->format('%d')!=0){
                                                            echo $date->diff(new DateTime())->format("%d days.");
                                                        }else if($date->diff(new DateTime())->format("%h")!=0){
                                                            echo $date->diff(new DateTime())->format("%h hours.");
                                                        }else if($date->diff(new DateTime())->format("%i")!=0) {
                                                            echo $date->diff(new DateTime())->format("%i minutes.");
                                                        }else echo "1 minutes";?> ago</span>
                                                </div>
                                            </div>
                                    <?php     } } else{?>
                                <?php     for($i=0;$i<4;$i++){
                                    $pic=explode(",",$posts[$i]['pub_Photo']);

                                    ?>
                                    <div onmouseenter="document.getElementById('<?php echo $posts[$i]['pub_ID']?>').style='font-size:30px;color:#f3c500;-webkit-transition: 0.5s all;'" onmouseleave="document.getElementById('<?php echo $posts[$i]['pub_ID']?>').style='font-size:30px;color:rgb(36, 68, 112);-webkit-transition: 0.5s all;'" class="col-md-3 biseller-column">
                                    <a  href="<?php echo base_url('post/readonepost/'.$posts[$i]['pub_ID']) ?>">

                                        <img src="<?php echo base_url('assets/uploads/'.$pic[0]);?> " width="191.5" height="306.55">
                                        <span class="price"><?php echo $posts[$i]['pub_Price'].' SAR' ?></span>
                                    </a>
                                        <?php if($user!=null){
                                            $verif_fav=0;
                                            foreach ($favorites as $favorite){
                                                if($favorite['pub_ID']==$posts[$i]['pub_ID']){
                                                    $verif_fav=1;
                                                }
                                            }
                                        if($verif_fav==1){?>
                                            <span title="Add to my favorites" class="favoris"> <i class="material-icons" id="<?php echo $posts[$i]['pub_ID']?>" style="font-size:30px;color: rgb(36, 68, 112);">turned_in</i></span>
                                        <?php }
                                        if($verif_fav==0){ ?>
                                            <span title="Add to my favorites"  class="favoris"> <i  class="material-icons" id="<?php echo $posts[$i]['pub_ID']?>" style="font-size:30px;color: rgb(36, 68, 112);">turned_in_not</i></span>
                                        <?php  }?>
                                            <script>
                                               $('#<?php echo $posts[$i]["pub_ID"]?>').click(function () {
                                                   var i=document.getElementById('<?php echo $posts[$i]["pub_ID"]?>').innerText;

                                                    $.ajax({
                                                        url : "<?php echo base_url('index.php/post/favorite/'. $posts[$i]['pub_ID'].'/'.$user[0]['client_ID']); ?>",
                                                        type : "POST",
                                                        dataType: 'json',
                                                        data:{'fav':i},
                                                        success : function(response) {
                                                            if(response=="insert"){
                                                                document.getElementById('<?php echo $posts[$i]["pub_ID"]?>').innerText='turned_in';
                                                                $("#insertFav").slideToggle("fast").delay(1000).slideToggle("fast");
                                                            }
                                                            if(response=="delete"){
                                                                document.getElementById('<?php echo $posts[$i]["pub_ID"]?>').innerText='turned_in_not';
                                                                $("#deleteFav").slideToggle("fast").delay(1000).slideToggle("fast");

                                                            }
                                                        }
                                                    });
                                                })

                                            </script>
                                        <?php } ?>

                                        <div class="ad-info">
                                        <h5><?php echo $posts[$i]['pub_Name'] ?></h5>
                                        <span> <?php
                                            $date = new DateTime($posts[$i]['pub_Time']);
                                            if($date->diff(new DateTime())->format('%y')!=0){
                                                echo $date->diff(new DateTime())->format("%y years.");
                                            }else if($date->diff(new DateTime())->format('%m')!=0){
                                                echo $date->diff(new DateTime())->format("%m months.");
                                            }else if($date->diff(new DateTime())->format('%d')!=0){
                                                echo $date->diff(new DateTime())->format("%d days.");
                                            }else if($date->diff(new DateTime())->format("%h")!=0){
                                                echo $date->diff(new DateTime())->format("%h hours.");
                                            }else if($date->diff(new DateTime())->format("%i")!=0) {
                                                echo $date->diff(new DateTime())->format("%i minutes.");
                                            }else echo "1 minutes";?> ago</span>
                                    </div>
                                </div>
                            <?php } ?>
                            </li>
                            <li  class="nbs-flexisel-item" style="width: 648px;">
                                <?php
                                    if(count($posts)>=4){
                                    for($i=4;$i<count($posts);$i++){
                                        $pic=explode(",",$posts[$i]['pub_Photo']);
                                        ?>
                                        <script>
                                            document.getElementById('flexiselDemo3').className="flexiselDemo3";
                                        </script>
                                        <div onmouseenter="document.getElementById('<?php echo $posts[$i]['pub_ID']?>').style='font-size:30px;color:#f3c500;-webkit-transition: 0.5s all;'" onmouseleave="document.getElementById('<?php echo $posts[$i]['pub_ID']?>').style='font-size:30px;color:rgb(36, 68, 112);-webkit-transition: 0.5s all;'" class="col-md-3 biseller-column">

                                            <a id="yalla" href="<?php echo base_url('post/readonepost/'.$posts[$i]['pub_ID'])?>">
                                                <img src="<?php echo base_url('assets/uploads/'.$pic[0]);?> " width="191.5" height="306.55">
                                                <span class="price"><?php echo $posts[$i]['pub_Price'].' SAR' ?></span>
                                            </a>
                                            <?php if($user!=null){
                                                $verif_fav=0;
                                                foreach ($favorites as $favorite){
                                                    if($favorite['pub_ID']==$posts[$i]['pub_ID']){
                                                        $verif_fav=1;
                                                    }
                                                }
                                            if($verif_fav==1){?>
                                                <span title="Add to my favorites" class="favoris"> <i class="material-icons" id="<?php echo $posts[$i]['pub_ID']?>" style="font-size:30px;color: rgb(36, 68, 112);">turned_in</i></span>
                                            <?php }
                                            if($verif_fav==0){ ?>
                                                <span title="Add to my favorites"  class="favoris"> <i  class="material-icons" id="<?php echo $posts[$i]['pub_ID']?>" style="font-size:30px;color: rgb(36, 68, 112);">turned_in_not</i></span>
                                            <?php  }?>
                                                <script>
                                                    $('#<?php echo $posts[$i]["pub_ID"]?>').click(function () {
                                                        var i=document.getElementById('<?php echo $posts[$i]["pub_ID"]?>').innerText;

                                                        $.ajax({
                                                            url : "<?php echo base_url('index.php/post/favorite/'. $posts[$i]['pub_ID'].'/'.$user[0]['client_ID']); ?>",
                                                            type : "POST",
                                                            dataType: 'json',
                                                            data:{'fav':i},
                                                            success : function(response) {
                                                                if(response=="insert"){
                                                                    document.getElementById('<?php echo $posts[$i]["pub_ID"]?>').innerText='turned_in';
                                                                    $("#insertFav").slideToggle("fast").delay(1500).slideToggle("fast");
                                                                }
                                                                if(response=="delete"){
                                                                    document.getElementById('<?php echo $posts[$i]["pub_ID"]?>').innerText='turned_in_not';
                                                                    $("#deleteFav").slideToggle("fast").delay(1500).slideToggle("fast");

                                                                }
                                                            }
                                                        });
                                                    })

                                                </script>
                                            <?php } ?>
                                            <div id="paper_toast" hidden> </div>
                                            <div class="ad-info">
                                                <div> <h5><?php echo $posts[$i]['pub_Name'] ?></h5></div>
                                                <span> <?php
                                                    $date = new DateTime($posts[$i]['pub_Time']);
                                                    if($date->diff(new DateTime())->format('%y')!=0){
                                                        echo $date->diff(new DateTime())->format("%y years.");
                                                    }else if($date->diff(new DateTime())->format('%m')!=0){
                                                        echo $date->diff(new DateTime())->format("%m months.");
                                                    }else if($date->diff(new DateTime())->format('%d')!=0){
                                                        echo $date->diff(new DateTime())->format("%d days.");
                                                    }else if($date->diff(new DateTime())->format("%h")!=0){
                                                        echo $date->diff(new DateTime())->format("%h hours.");
                                                    }else if($date->diff(new DateTime())->format("%i")!=0) {
                                                        echo $date->diff(new DateTime())->format("%i minutes.");
                                                    }else echo "1 minutes";?> ago</span>
                                            </div>
                                            </div>
                                        <?php  
                                       } }}?>

                            </li>
                        </ul>
                        <div class="nbs-flexisel-nav-left" style="top: 111px;"></div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(window).load(function() {
                        $(".flexiselDemo3").flexisel({
                            visibleItems:1,
                            animationSpeed: 1000,
                            autoPlay: true,
                            autoPlaySpeed: 5000,
                            pauseOnHover: true,
                            enableResponsiveBreakpoints: true,
                            responsiveBreakpoints: {
                                portrait: {
                                    changePoint:480,
                                    visibleItems:1
                                },
                                landscape: {
                                    changePoint:640,
                                    visibleItems:1
                                },
                                tablet: {
                                    changePoint:768,
                                    visibleItems:1
                                }
                            }
                        });

                    });


        <?php } ?>
                </script>

                <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.flexisel.js');?>"></script>
        </div>
    </div>
        <!-- //slider -->

    <div class="mobile-app">
        <div class="container">
            <div class="col-md-5 app-left">
                <a href=""><img src="<?php echo base_url('assets/images/app.png');?>" alt=""></a>
            </div>
            <div class="col-md-7 app-right">
                <h3>Mroogle App is the <span>Easiest</span> way for Selling and buying second-hand goods</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor Sed bibendum varius euismod. Integer eget turpis sit amet lorem rutrum ullamcorper sed sed dui. vestibulum odio at elementum. Suspendisse et condimentum nibh.</p>
                <div class="app-buttons">
                    <div class="app-button">
                        <a href=""><img src="<?php echo base_url('assets/images/1.png');?>" alt=""></a>
                    </div>
                    <div class="app-button">
                        <a href=""><img src="<?php echo base_url('assets/images/2.png');?>" alt=""></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
<div id="insertFav" class="papertoast" hidden>   Post Added To "Your Favorites"</div>
<div id="deleteFav" class="papertoast" hidden>   Post Deleted From Your "Favorites"</div>

