    <?php
    foreach($fields as $field) {

        /*if ($input_fields[$field->field_name]->display_as == 'Category') {
            $cat = $input_fields[$field->field_name]->input;
            print_r($input_fields[$field->field_name]->input);
        }  */
            if ($input_fields[$field->field_name]->display_as == 'Categorie Name')
            {  $cat_name2=$input_fields[$field->field_name]->input;

            }
        if ($input_fields[$field->field_name]->display_as == 'Zone Name')
            $zone_name=$input_fields[$field->field_name]->input;
        if ($input_fields[$field->field_name]->display_as == 'Pub Name')
            $pub_name=$input_fields[$field->field_name]->input;
        if ($input_fields[$field->field_name]->display_as == 'Pub Desc')
            $pub_desc=$input_fields[$field->field_name]->input;
        if ($input_fields[$field->field_name]->display_as == 'Pub Photo')
            $pub_photo=$input_fields[$field->field_name]->input;
        if ($input_fields[$field->field_name]->display_as == 'Pub Price')
            $pub_price=$input_fields[$field->field_name]->input;
        if ($input_fields[$field->field_name]->display_as == 'Pub Status')
            $pub_Status=$input_fields[$field->field_name]->input;


    }

    ?>
    <?php

    $this->set_css($this->default_theme_path.'/datatables/css/datatables.css');
    $this->set_js_lib($this->default_javascript_path.'/jquery_plugins/jquery.form.min.js');
    $this->set_js_config($this->default_theme_path.'/datatables/js/datatables-add.js');
    $this->set_css($this->default_css_path.'/ui/simple/'.grocery_CRUD::JQUERY_UI_CSS);
    $this->set_js_lib($this->default_javascript_path.'/jquery_plugins/ui/'.grocery_CRUD::JQUERY_UI_JS);
    $this->set_js_lib($this->default_javascript_path.'/jquery_plugins/jquery.noty.js');
    $this->set_js_lib($this->default_javascript_path.'/jquery_plugins/config/jquery.noty.config.js');
    ?>



    <body>

    <!-- Submit Ad -->
    <div class="submit-ad main-grid-border">
        <div class="container">
            <h2 class="head">Post an Ad</h2>
            <div class="post-ad-form">

                    <div class='ui-widget-content ui-corner-all datatables'>
                        <div class='form-content form-div'>
                            <?php echo form_open( $insert_url, 'method="post" id="crudForm" enctype="multipart/form-data"'); ?>
                            <div id="Select_Category"  >
                            <label >Select Category <span>*</span></label>
                                    <select id="field_cat_ID">
                                        <option  value="" disabled selected>
                                            Select your Category
                                        </option>
                                        <option value="2">
                                            Cars
                                        </option>
                                        <option value="3">
                                            Electronics
                                        </option>
                                      <!--  <option value="3">
                                            Electronics
                                        </option>
                                        <option value="3">
                                            Electronics
                                        </option>
                                        <option value="3">
                                            Electronics
                                        </option> !-->
                                    </select>
                                <div class="clearfix"></div>


                                <div id="Select_Sub-Category"  >
                                </div>


                            <script>


                                $('#field_cat_ID').change(function(){
                                    var i=$(this).val();
                                    $('#Select_Sub-Category').empty();
                                    $('#Select_Sub-Category').append(" <?php
                                        echo '<label >Select Sub-Category <span>*</span></label>'.$cat_name2; ?> ");


                                    $.ajax({
                                        url : "<?php echo base_url('/post/displayonepost/add'); ?>",
                                        type : "POST",
                                        data : {"id" : i},
                                        success : function(data) {



                                        },
                                        error : function(data) {
                                             }
                                    });



                                });



                            </script>


                            <div class="clearfix"></div>

                            <label>Select Zone <span>*</span></label>

                            <?php echo $zone_name?>

                    <div class="clearfix"></div>
                    <label>Ad Title <span>*</span></label>
                            <?php echo $pub_name?>
                    <div class="clearfix"></div>
                    <label>Ad Price <span>*</span></label>
                         <?php echo $pub_price?>
                    <div class="clearfix"></div>
                    <label>Ad Condition <span>*</span></label>
                            <?php echo $pub_Status?>
                    <div class="clearfix"></div>
                    <label>Ad Description <span>*</span></label>
                        <?php echo $pub_desc ?>
                            <div class="clearfix"></div>
                    <div class="upload-ad-photos">
                        <label>Photos for your ad :</label>
                        <?php echo $pub_photo ?>
                        <div class="clearfix"></div>
                        <script src="<?php echo base_url('assets/theme/filedrag.js') ?> " ></script>
                        <?php if ($is_ajax) { ?><input type="hidden" name="is_ajax" value="true" /><?php }?>
                        <div class='line-1px'></div>
                        <div id='report-error' class='report-div error'></div>
                        <div id='report-success' class='report-div success'></div>
                    </div>
                <div class="personal-details">
                    <div class='buttons-box'>
                        <div class='form-button-box'>
                            <input id="form-button-save" type='submit' value='<?php echo $this->l('form_save'); ?>' style="text-decoration: none;cursor: pointer;color:#fff;background-color:#f3c500;    box-sizing: border-box; font-size: 15px;padding: 6px 16px;"class='ui-input-button'  />
                        </div>
                        <?php 	if(!$this->unset_back_to_list) { ?>
                        <div class='form-button-box'>
                                <input type='button' value='<?php echo $this->l('form_cancel'); ?>' style="text-decoration: none;cursor: pointer;color:#fff;background-color:#f3c500;    box-sizing: border-box; font-size: 15px;padding: 6px 16px;"  id="cancel-button" />
                        </div>
                        <?php   } ?>
                        <div class='form-button-box loading-box'>
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