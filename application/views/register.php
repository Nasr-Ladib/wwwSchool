<meta name="description" content="flexi auth, the user authentication library designed for developers."/>
<meta name="keywords" content="demo, flexi auth, user authentication, codeigniter"/>
    <body id="register">

    <div id="body_wrap">
    <div id="page-wrapper" class="sign-in-wrapper">
        <div class="graphs">
            <div class="sign-up">
                <h1>Create an account</h1>
                  <?php if (! empty($message)) { ?>
                    <div id="message">
                        <?php echo $message; ?>
                    </div>
                <?php } ?>

                <p class="creating">Having hands on experience in creating innovative designs,I do offer design
                    solutions which harness.</p>
                <h2>Personal Information</h2>
                <?php echo form_open(current_url()); ?>
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4>First Name</h4>
                    </div>
                    <div class="sign-up2">
                        <form>
                            <input type="text" id="first_name" name="register_first_name" placeholder=" " value="<?php echo set_value('register_first_name');?>" required=" "/>
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4>Last Name</h4>
                    </div>
                    <div class="sign-up2">
                        <form>
                            <input type="text" placeholder="" id="last_name" name="register_last_name" value="<?php echo set_value('register_last_name');?>" required=" "/>
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4>Phone Number*:</h4>
                    </div>
                    <div class="sign-up2">
                        <form>
                            <input type="text" id="phone_number" name="register_phone_number" placeholder=" " value="<?php echo set_value('register_last_name');?>" required=""/>
                            <label for="newsletter">Subscribe to Newsletter:</label>
                            <input type="checkbox" id="newsletter" name="register_newsletter" value="1" <?php echo set_checkbox('register_newsletter',1);?>/>
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4>E-mail* :</h4>
                    </div>
                    <div class="sign-up2">
                        <form>
                            <input type="text" id="email_address" name="register_email_address" value="<?php echo set_value('register_email_address');?>" placeholder=" " required=""
                                   title="This  requires that upon registration, you will need to activate your account via clicking a link that is sent to your email address."/>
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4>Username* :</h4>
                    </div>
                    <div class="sign-up2">
                        <form>
                            <input type="text" id="username" name="register_username" value="<?php echo set_value('register_username');?>" placeholder=" " required=" "
                                    title="Set a username that can be used to login with."/>
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4>Your Picture :</h4>
                    </div>
                    <div class="sign-up2">
                        <form>
                            <input type="file" id="picture" name="register_picture" value="<?php echo set_value('register_picture');?>" placeholder="Set your Picture" />
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4>Password* :</h4>
                    </div>
                    <div class="sign-up2">
                        <form>
                            <input type="password" id="password" name="register_password" value="<?php echo set_value('register_password');?>" placeholder=" " required=" "/>
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4>Confirm Password* :</h4>
                    </div>
                    <div class="sign-up2">
                        <form>
                            <input type="password" id="password" name="register_confirm_password" value="<?php echo set_value('register_confirm_password');?>" placeholder=" " required=" "/>
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <?php echo form_close();?>

                <div class="sub_home">
                    <div class="sub_home_left">
                        <form>
                            <input type="submit" name="register_user" id="submit" value="Create">
                        </form>
                    </div>
                    <div class="sub_home_right">
                        <p>Go Back to <a href="<?php echo base_url('')?>">Home</a></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer section start-->
    <footer class="diff">
        <p class="text-center">© 2018 Mroogle. All Rights Reserved</p>
    </footer>
    <!--footer section end-->
    </div>
    </body>
