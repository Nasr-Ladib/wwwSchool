

<div class="trend-ads">
    <h2>Trending Ads</h2>
        <div class="nbs-flexisel-container">
            <div class="nbs-flexisel-inner">
                 <ul id="flexiselDemo3" class="nbs-flexisel-ul" style="left: -295px;">
                     <li class="nbs-flexisel-item" style="width:648px;">

                            <?php     for($i=0;$i<4;$i++){?>
                <div class="col-md-3 biseller-column">
                    <?php  foreach($columns as $column) {


                        if ($column->display_as == 'Pub Price')
                            $pub_price = $list[$i]->{$column->field_name};
                        if ($column->display_as == 'Pub Photo'){
                            $pub_photo = $list[$i]->{$column->field_name};
                            $pub_photo=url_title($pub_photo);
                            $pub_photo=substr($pub_photo, 0, -3);
                        }
                        if ($column->display_as == 'Pub Desc')
                            $pub_desc = $list[$i]->{$column->field_name};
                        if ($column->display_as == 'Pub Time')
                            $pub_time = $list[$i]->{$column->field_name};
                        if ($column->display_as == 'Pub ID')
                            $pub_id = $list[$i]->{$column->field_name};} ?>
                    <a href="<?php print_r('http://www.mroogle-market.com/post/displayonepost/read/'.$pub_id) ?>">
                        <img src="<?php echo base_url('assets/uploads/'.$pub_photo.'.jpg');?> " width="191.5" height="306.55">
                        <span class="price"><?php echo $pub_price.'SAR' ?></span>
                    </a>
                    <div class="ad-info">
                        <h5><?php echo $pub_desc ?></h5>
                        <span> <?php echo $pub_time ?></span>
                    </div>
                </div>
            <?php }?>
                    </li>
                    <li class="nbs-flexisel-item" style="width: 648px;">
                <?php     for($i=4;$i<count($list);$i++){?>
                    <div class="col-md-3 biseller-column">
                        <?php  foreach($columns as $column) {


                            if ($column->display_as == 'Pub Price')
                                $pub_price = $list[$i]->{$column->field_name};
                            if ($column->display_as == 'Pub Photo'){
                                $pub_photo = $list[$i]->{$column->field_name};
                                $pub_photo=url_title($pub_photo);
                                $pub_photo=substr($pub_photo, 0, -3);
                            }
                            if ($column->display_as == 'Pub Desc')
                                $pub_desc = $list[$i]->{$column->field_name};
                            if ($column->display_as == 'Pub Time')
                                $pub_time = $list[$i]->{$column->field_name};
                            if ($column->display_as == 'Pub ID')
                                $pub_id = $list[$i]->{$column->field_name};
                        }        ?>

                        <a href="<?php echo base_url('/index.php/post/displayonepost/read/'.$pub_id)?>">
                            <img src="<?php echo base_url('assets/uploads/'.$pub_photo.'.jpg');?> " width="191.5" height="306.55">
                            <span class="price"><?php echo $pub_price.' SAR' ?></span>
                        </a>
                        <div class="ad-info">
                            <div> <h5><?php echo $pub_desc ?></h5></div>
                            <span> <?php echo $pub_time ?></span>
                        </div>
                    </div>
                <?php }?>

            </li>

                 </ul>
                 <div class="nbs-flexisel-nav-left" style="top: 111px;"></div>
                 <div class="nbs-flexisel-nav-right" style="top: 111px;"></div>
            </div>
         </div>
    <script type="text/javascript">
        $(window).load(function() {
            $("#flexiselDemo3").flexisel({
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
    </script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.flexisel.js');?>"></script>
</div>

