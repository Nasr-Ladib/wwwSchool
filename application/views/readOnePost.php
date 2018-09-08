<script>
    $( document ).ready(function () {

        $.ajax({
            url : "<?php echo base_url('post/postseen/'.$post['pub_ID'].'/'.$user[0]['client_ID']); ?>",
            type : "POST",
            success : function(response) {

            },
            error : function(data) {

            }
        });
    });
</script>
<style>
    a{
        color: #244470;
    }
</style>
<div class="single-page main-grid-border">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb" style="margin-top:-2%;margin-bottom: -2% ">
                <li><a href="">Home</a></li>
                <li><a href="<?php echo base_url('post/categories/0')?>">All Ads</a></li>
                <li><?php echo $cat['cat_Name'] ?></li>
            </ol>
        </div>
        <div class="product-desc">
            <div class="col-md-7 product-view">
                <p style="display:inline"> <i class="glyphicon glyphicon-map-marker"></i><a href="">KSA</a>, <a href=""><?php echo $zone['zone_Name']?></a>| Added at <?php echo $post['pub_Date'] ?>  Ad ID: <?php echo $post['pub_Code'] ?></p>
                <div class="flexslider">
                    <?php $pics=explode(",",$post['pub_Photo']) ?>
                    <div class="flex-viewport" style="overflow: hidden; position: relative;">
                        <ul class="slides" style="width: 1000%; transition-duration: 0.5s; transform: translate3d(-1250px, 0px, 0px);">
                            <?php foreach ($pics as $pic){ ?>
                            <li data-thumb="<?php echo base_url('assets/uploads/'.$pic); ?>" style="width: 625px; float: left; display: block;">
                                <img src="<?php echo base_url('assets/uploads/'.$pic); ?>"style="height: 570px;width: 370px;" draggable="false">
                            </li>
                            <?php } ?>
                        </ul>
                    </div>

                    <ul class="flex-direction-nav">
                        <li class="flex-nav-prev"><a class="flex-prev" href="">Previous</a></li>
                        <li class="flex-nav-next"><a class="flex-next" href="<?php base_url('assets/uploads/'.$post['pub_Photo']) ?>">Next</a></li>
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
                    <h4>Brand : <?php echo $post['pub_Name'] ?></h4>
                    <h4>Views : <strong><?php echo $post['pub_Views'] ?></strong></h4>
                    <p><strong>Summary </strong>: <?php echo $post['pub_Desc'] ?></p>

                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-5 product-details-grid">
                <div class="item-price">
                    <div class="product-price">
                        <div class="row">
                        <div class="col-md-3"> <p class="p-price">Price</p></div>
                        <div class="col-md-9"> <h3 class="rate"> <?php echo 'SAR '.$post['pub_Price'] ?> </h3></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="condition">
                        <div class="row">
                            <div class="col-md-4"> <p class="p-price">Condition</p> </div>
                            <div class="col-md-8"> <h3>Good</h3></div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="itemtype" >
                    <div class="row">
                       <div class="col-md-3"> <p class="p-price">Type:</p></div>
                        <div class="col-md-9"> <h3><?php echo $cat['cat_Name'] ?></h3></div>
                    </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="interested">
                    <div style="margin-bottom: 2%;margin-top: -20px" >
                        <h2>
                            <a href="<?php echo base_url('User/owenPosts/'.$owner_post['client_ID']) ?>">
                                <div class="row">
                                    <div class="col-md-3 col-ms-3 " >   <img src="<?php echo base_url('assets/uploads/'.$owner_post['client_Photo'])?>" style="border-radius:50%;width: 85;height: 100;max-width: 200%" > </div>
                                    <div class="col-md-9  col-ms-9">
                                        <div style="margin-top:6%"> <?php echo $owner_post['client_name'] ?>  </div>
                                        <div > <p style="display:inline"> Posted <?php echo $number_ads ?> Ads</p></div>
                                        <div >  <h4><small> Member Since <?php
                                                    $date = new DateTime($dateFirstLogin);
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
                                                    }else echo "1 minutes";
                                        ?> </small></h4></div>

                                    </div>
                                </div>
                            </a>
                        </h2>
                    </div>
                    <div id="bande_horizontale"></div>
                    <style>
                        #bande_horizontale{
                            padding: 0px;
                            margin: 20px;
                            margin-left: -50px;
                            margin-right: -50px;
                            border: none;
                            height: 20px;
                            background-color: white;
                        }

                    </style>
                    <?php if($user!=null){
                    if($owner_post['client_ID']!=$user[0]['client_ID']){ ?>
                    <div class="text-center">
                    <h4>Interested in this Ad?<small> Contact the Seller!</small></h4>
                    <p style="margin-top: 10px;background-color: white"><i class="glyphicon glyphicon-earphone"></i>00-966-<?php echo $owner_post['client_Tel'] ?></p>
                    <button class="button" style="width:100%;background-image: -webkit-linear-gradient(top, #4FAFC2, #4FAFC2);color: white">CHAT</button>
                    </div>
                   <?php }else{?>
                        <div class="text-center">

                           <div class="row">
                               <div class="col-md-6"><button  id="myBtn" class="button" >Delete</button></div>
                               <div class="col-md-5" ><a  href="<?php echo base_url('post/displayonepost/edit/'.$post['pub_ID']) ?>" class="button" style="width: 90px;height: 39px" >Edit</a></div>
                           </div>
                            <link href="<?php echo base_url('assets/css/popup.css'); ?>" rel="stylesheet" type="text/css" media="all">

                            <!-- The Modal -->
                            <div id="myModal" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <p style="font-family: lato,sans-serif;color: #8f9cb5;font-size: 20px;">Do you want to Delete your post ?</p>
                                    <ul class="cd-buttons" style="margin-top: 10%; vertical-align: baseline;border-radius: 0 0 25px 25px;">
                                        <li class="popup_btn" style="background: #fc7169;padding: 0;display: block;">
                                         <a id="YES_delete" href="<?php echo base_url('index.php/post/displayonepost/delete/'.$post['pub_ID']) ?>" class="popup_confirmation" style="text-decoration: none">   YES </a>
                                        </li>
                                        <li class="popup_btn" style="background: #b6bece;padding: 0;display: block;" >
                                          <a href="" id="No_alert" class="popup_confirmation" style="text-decoration: none">  NO </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <script>
                                $('#No_alert').click(function () {
                                    $('#Myalert').show('fade');
                                });
                                // Get the modal
                                var modal = document.getElementById('myModal');

                                // Get the button that opens the modal
                                var btn = document.getElementById("myBtn");

                                // Get the <span> element that closes the modal
                                var span = document.getElementsByClassName("close")[0];

                                // When the user clicks the button, open the modal
                                btn.onclick = function() {
                                    modal.style.display = "block";
                                };

                                // When the user clicks on <span> (x), close the modal
                                span.onclick = function() {
                                    modal.style.display = "none";
                                };

                                // When the user clicks anywhere outside of the modal, close it
                                window.onclick = function(event) {
                                    if (event.target == modal) {
                                        modal.style.display = "none";
                                    }
                                };
                            </script>


                        </div>

                    <?php  }}else{ ?>
                    <div class="text-center">
                    <h4>Interested in this Ad?<small> Contact the Seller!</small></h4>
                    <p style="margin-top: 10px;background-color: white"><i class="glyphicon glyphicon-earphone"></i>00-966-<?php echo $owner_post['client_Tel'] ?></p>
                    <button class="button" style="width:100%;background-image: -webkit-linear-gradient(top, #4FAFC2, #4FAFC2);color: white">CHAT</button>
                    </div>
                 <?php } ?>
                </div>
                <?php if($post_featuring!=null){?>
                <div class="tips">
                    <div class="">
                        <h2 class="sear-head fer">Featured Ads</h2>

                        <?php foreach ($post_featuring as $onepost){
                            $picture=explode(',',$onepost['pub_Photo']);
                            ?>
                            <div class="">
                                <a href="<?php echo base_url('post/readonepost/'.$onepost['pub_ID']) ?>">
                                    <div class="">
                                        <img src="<?php echo base_url('assets/uploads/'.$picture[0]) ?>" title="ad image" alt="" />
                                    </div>
                                    <div class="">
                                        <h4><?php echo $onepost['pub_Name']?></h4>
                                        <p>SAR <?php echo $onepost['pub_Price']?></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        <?php } ?>
                         <div class="clearfix"></div>
                    </div>

                </div>
                <?php }?>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php if($user!=null){?>
         <div> <i class="glyphicon-signal"></i><a href="<?php echo base_url('Post/report/'.$post['pub_ID'])?>">Report this Post.</a></div>
        <?php } ?>
    </div>
</div>
<?php
if($this->session->userdata('message')) {
    $message = $this->session->userdata('message');
    echo $message;
    $this->session->unset_userdata('message');
}
?>