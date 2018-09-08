<?php
if($this->session->flashdata('message')) {
    $message = $this->session->flashdata('message');
 echo $message;
}
?>
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
<div class="single-page main-grid-border">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb" style="margin-top:-2%;margin-bottom: -2% ">
                <li><a href="">Home</a></li>
                <li><a href="<?php echo base_url('post/categories/0')?>">All Ads</a></li>
                <li><a>Page Previous</a></li>
                <li><?php echo 'Name Poster' ?></li>
            </ol>
        </div>
        <div class="">
            <div class="w3-container w3-border w3-round-xlarge" style="margin-top: 50px" >
                <div class="row">
                    <div class="col-md-3 col-ms-3 " style="margin-top: -1%" >
                        <div  style="margin-left: 20%" >
                            <img src="<?php echo base_url('assets/uploads/'.$owner_post['client_Photo'])?>" style="margin-top: 12px;border-radius:50%;width: 85;height: 77;max-width: 200%" >
                        </div>
                        <div >
                            <div class="col-md-12 col-ms-12" style="margin-left:-24%;">
                                <input class="rating_star"  type="checkbox" id="st1" value="1">
                                <label class="ra" for="st1"></label>
                                <input class="rating_star" checked type="checkbox" id="st2" value="2">
                                <label for="st2"></label>
                                <input class="rating_star" checked type="checkbox" id="st3" value="3">
                                <label for="st3"></label>
                                <input class="rating_star" checked type="checkbox" id="st4" value="4">
                                <label for="st4"></label>
                                <input class="rating_star" checked type="checkbox" id="st5" value="5">
                                <label for="st5"></label>
                                <style>
                                    .rating_star {
                                        border: 0;
                                        width: 1px;
                                        height: 1px;
                                        overflow: hidden;
                                        position: absolute !important;
                                        clip: rect(1px 1px 1px 1px);
                                        clip: rect(1px, 1px, 1px, 1px);
                                        opacity: 0;
                                    }

                                    label {
                                        position: relative;
                                        float: right;
                                        color: #C8C8C8;
                                    }

                                    label:before {
                                        margin: 5px;
                                        content: "\f005";
                                        font-family: FontAwesome;
                                        display: inline-block;
                                        font-size: 25;
                                        color: #ccc;
                                        -webkit-user-select: none;
                                        -moz-user-select: none;
                                        user-select: none;
                                    }

                                    .rating_star:checked ~ label:before {
                                        color: #FFC107;
                                    }

                                    label:hover ~ label:before {
                                        color: #ffdb70;
                                    }

                                    label:hover:before {
                                        color: #FFC107;
                                    }

                                </style>
                            </div>
                            <div class="col-md-12 col-ms-12"> <small> <h4 style="display:inline;color: black"> Voted By 150 persons </small></p></div>
                        </div>

                    </div>
                    <div class="col-md-3  col-ms-3" style="margin-top: 12px;margin-left: -7%">
                              <strong>  <a  style="font-size: 30;text-decoration: none">
                                    <div > <?php echo $owner_post['client_name'] ?>  </div> </a></strong>
                                <div >  <p style="display:inline;color: black"> Posted <?php echo $number_ads ?> Ads </p></div>
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
                    <div class="col-md-4 col-ms-4" style="margin-top: 5px;float: contour;">
                                <?php if($user!=null){
                                    if($owner_post['client_ID']!=$user[0]['client_ID']){ ?>
                                        <div class="text-center">
                                            <p style="font-size: 20;margin-top: 10px;background-color: white"><i class="glyphicon glyphicon-earphone"></i>00-966-<?php echo $owner_post['client_Tel'] ?></p>
                                            <button class="button" style="width:100%;background-image: -webkit-linear-gradient(top, #4FAFC2, #4FAFC2);color: white">CHAT</button>
                                        </div>
                                    <?php }else{?>
                                        <div class="text-center">

                                            <div class="row">
                                                <div class="text-center">
                                                    <p style="font-size: 20;margin-top: 10px;background-color: white"><i class="glyphicon glyphicon-earphone"></i>00-966-<?php echo $owner_post['client_Tel'] ?></p>
                                                    <button class="button" style="width:100%;background-image: -webkit-linear-gradient(top, #4FAFC2, #4FAFC2);color: white">Edit Your Profile</button>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }}else {?>
                                    <div class="text-center">
                                        <p style="font-size: 20;margin-top: 10px;background-color: white"><i class="glyphicon glyphicon-earphone"></i>00-966-<?php echo $owner_post['client_Tel'] ?></p>
                                        <button class="button" style="width:100%;background-image: -webkit-linear-gradient(top, #4FAFC2, #4FAFC2);color: white">CHAT</button>
                                    </div>
                                <?php } ?>
                            </div>
                    <div class="col-md-2 col-ms-2"><a href="<?php echo base_url('post/tablepost/'.$owner_post['client_ID'])?>">My Posts</a> </div>

                </div>
            </div>

        </div>
        <div class="w3-container w3-border w3-round-xlarge" style="margin-top: 50px; display: grid;" >
            <div class="head-top" style="margin-top: -5%;"> <h3 style="color: #f3c500;">All Ads</h3></div>
          <div id="container">
               <?php if($posts!= null){?>
              <ul class="grid" id="list_post" style="display: block;">
              <?php  foreach ($posts as $post){ ?>
                <a href="<?php echo base_url('post/readonepost/'.$post['pub_ID'])?>">
                    <li style="  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <img src="<?php echo base_url('assets/uploads/'.$post['pub_Photo'])?>">
                        <section class="list-left">
                            <h5 class="title"><?php echo $post['pub_Name']?></h5>
                            <span class="adprice">SAR <?php echo $post['pub_Price'] ?> </span>
                            <p class="catpath">Mobile Phones » Brand</p>
                        </section>
                        <section class="list-right">
                            <span class="date"><?php echo $post['pub_Date']?></span>
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
</div>
