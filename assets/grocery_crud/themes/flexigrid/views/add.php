
<?php

	$this->set_css($this->default_theme_path.'/flexigrid/css/flexigrid.css');
	$this->set_js_lib($this->default_theme_path.'/flexigrid/js/jquery.form.js');
    $this->set_js_lib($this->default_javascript_path.'/jquery_plugins/jquery.form.min.js');
	$this->set_js_config($this->default_theme_path.'/flexigrid/js/flexigrid-add.js');

	$this->set_js_lib($this->default_javascript_path.'/jquery_plugins/jquery.noty.js');
	$this->set_js_lib($this->default_javascript_path.'/jquery_plugins/config/jquery.noty.config.js');
?>
<body>
<?php
foreach($fields as $field) {
    /*if ($input_fields[$field->field_name]->display_as == 'Category') {
     $cat = $input_fields[$field->field_name]->input;
     print_r($input_fields[$field->field_name]->input);
 }  */
    if ($input_fields[$field->field_name]->display_as == 'Type Post')
    {  $type_post=$input_fields[$field->field_name]->input;}
    if ($input_fields[$field->field_name]->display_as == 'Post Name')
        $pub_name=$input_fields[$field->field_name]->input;
    if ($input_fields[$field->field_name]->display_as == 'Your Price')
        $pub_price=$input_fields[$field->field_name]->input;
    if ($input_fields[$field->field_name]->display_as == 'Category')
    {  $cat_name=$input_fields[$field->field_name]->input;}
    if ($input_fields[$field->field_name]->display_as == 'Sub-Category')
    {  $subcat_name=$input_fields[$field->field_name]->input;}
    if ($input_fields[$field->field_name]->display_as == 'Do you want to display on the Home Page?')
    {  $home_page=$input_fields[$field->field_name]->input;}
    if ($input_fields[$field->field_name]->display_as == "Zone")
    {  $zone_name=$input_fields[$field->field_name]->input;
    }
    if ($input_fields[$field->field_name]->display_as == 'Your Description')
        $pub_desc=$input_fields[$field->field_name]->input;
    if ($input_fields[$field->field_name]->display_as == 'Post Photo')
        $pub_photo=$input_fields[$field->field_name]->input;
} ?>

<!-- Submit Ad -->

<div class="submit-ad main-grid-border">
    <div class="container">
        <h2 class="head">Post an Ad</h2>
        <div class="post-ad-form">
            <div class='ui-widget-content ui-corner-all datatables'>
                <div class='form-content form-div'>
                    <?php echo form_open( $insert_url, 'method="post" id="crudForm" enctype="multipart/form-data"'); ?>
                    <label >Type Post <span>*</span></label>
                    <?php echo $type_post?>
                    <div class="clearfix"></div>
                        <label>Ad Title <span>*</span></label>
                        <?php echo $pub_name?>
                        <div class="clearfix"></div>
                        <label>Ad Price <span>*</span></label>
                        <?php echo $pub_price?>
                        <div class="clearfix"></div>
                        <label>Ad Description <span>*</span></label>
                        <?php echo $pub_desc ?>
                        <div class="clearfix"></div>
                        <div class="upload-ad-photos">
                            <label>Photos for your ad :</label>
                            <?php echo $pub_photo ?>
                            <div class="clearfix"></div>
                            <div id="Select_Category"  >
                                <label >Select Category <span>*</span></label>
                                <?php echo $cat_name?>
                                <div class="clearfix"></div>
                                <script>
                                    $(document).ready(function() {

                                       $("#Select_Sub-Category").hide();
                                    });
                                    $('#field-cat_ID').change(function () {
                                         $('#Select_Sub-Category').show();

                                        var i=$('#field-cat_ID').val();
                                        if(i==''){
                                             $("#Select_Sub-Category").hide();
                                        }

                                    });
                                </script>
                                <div id="Select_Sub-Category" >
                                    <label >Select Sub-Category <span>*</span></label>
                                     <?php // echo  $subcat_name ?>
                                    <script>
                                        $('#field-sub-cat_ID').change(function () {
                                            var i=$('#field-sub-cat_ID').val();
                                            var id= i.split(",");
                                            $.ajax({
                                                url : "<?php echo base_url('index.php/post/callback_fields'); ?>",
                                                type : "POST",
                                                dataType: 'json',
                                                data:{'id':i},
                                                success : function(response) {

                                                },
                                                error : function(data) {

                                                }
                                            });

                                        });
                                    </script>
                                </div>
                                <div class="clearfix"></div>
                                <label>What's your Zone?<span>*</span></label>
                                <?php echo $zone_name ?>
                                <div class="clearfix"></div>
                                <label>Do you want to display on the Home Page?<span>*</span></label>
                                <?php echo $home_page?>
                                <div class="clearfix"></div>
                                <!-- Start of hidden inputs -->
                                <?php
                                foreach($hidden_fields as $hidden_field){
                                    echo $hidden_field->input;
                                }
                                ?>
                                <!-- End of hidden inputs -->
                                <?php if ($is_ajax) { ?><input type="hidden" name="is_ajax" value="true" /><?php }?>

                                <div id='report-error' class='report-div error'></div>
                                <div id='report-success' class='report-div success'></div>
                            </div>
                            <div class="pDiv">
                                <div class='form-button-box'>
                                    <input id="form-button-save" type='submit' style="float: left" value='<?php echo $this->l('form_save'); ?>'  class="btn btn-large"/>
                                </div>
                                <?php 	if(!$this->unset_back_to_list) { ?>
                                   <a href="<?php echo base_url('') ?>" class="btn btn-large" style="background-color: #e7e7e7; color: black;border: none;padding: 13px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 20px 2px;cursor: pointer;"> Cancel </a>
                                <?php 	} ?>
                                <div class='form-button-box'>
                                    <div class='small-loading' id='FormLoading'><?php echo $this->l('form_insert_loading'); ?></div>
                                </div>
                                <div class='clear'></div>
                            </div>
                            <?php echo form_close(); ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- // Submit Ad -->
            <script>
                var validation_url = '<?php echo $validation_url?>';
                var list_url = '<?php echo $list_url?>';

                var message_alert_add_form = "<?php echo $this->l('alert_add_form')?>";
                var message_insert_error = "<?php echo $this->l('insert_error')?>";
            </script>
            <script src="<?php base_url('/assets/js/jquery-1.11.2.min.js') ?>"></script>

</body>
<script>
	var validation_url = '<?php echo $validation_url?>';
	var list_url = '<?php echo $list_url?>';

	var message_alert_add_form = "<?php echo $this->l('alert_add_form')?>";
	var message_insert_error = "<?php echo $this->l('insert_error')?>";
</script>
<script>
   document.getElementById("field-pub_Price").type='number' ;
   document.getElementById("field-pub_Price").style.width='25%';
   document.getElementById("field-pub_Price").min='0' ;
   document.getElementById("field-pub_Price").max='999999999999' ;


</script>
