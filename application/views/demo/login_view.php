<?php
$this->load->view('header');
?>
    <section>
        <div id="page-wrapper" class="sign-in-wrapper">
            <div class="graphs">
                <div class="sign-in-form">

                    <?php if (! empty($message)) { ?>
                        <div id="message">
                            <?php echo $message; ?>
                        </div>
                    <?php } ?>

                    <div class="sign-in-form-top">
                        <h1>Log in</h1>
                    </div>
                    <div class="signin">
                        <?php echo form_open(current_url(), 'class="parallel"');?>

                        <div class="log-input">
                            <div class="log-input-left">
                                <input type="text" id="identity" name="login_identity" value="<?php echo set_value('login_identity', 'public@public.com');?>" class="user" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email';}"/>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="log-input">
                            <div class="log-input-left">
                                <input type="password" id="password" name="login_password" value="<?php echo set_value('login_password', 'password123');?>" class="lock" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}"/>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="row" >
                            <div class="col-xs-4">
                                <a href="<?php echo base_url('') ?>auth/forgotten_password" >Forgot Password ?</a>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="col-xs-8">
                                <div class="checkbox icheck" style="float: right;">
                                    <label >
                                        <input type="checkbox" id="remember_me" checked name="remember_me" value="1" <?php echo set_checkbox('remember_me', 1); ?>/>Remember me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <?php
                        # Below are 2 examples, the first shows how to implement 'reCaptcha' (By Google - http://www.google.com/recaptcha),
                        # the second shows 'math_captcha' - a simple math question based captcha that is native to the flexi auth library.
                        # This example is setup to use reCaptcha by default, if using math_captcha, ensure the 'auth' controller and 'demo_auth_model' are updated.

                        # reCAPTCHA Example
                        # To activate reCAPTCHA, ensure the 'if' statement immediately below is uncommented and then comment out the math captcha 'if' statement further below.
                        # You will also need to enable the recaptcha examples in 'controllers/auth.php', and 'models/demo_auth_model.php'.
                        #/*
                        if (isset($captcha))
                        {
                            echo "<li>\n";
                            echo $captcha;
                            echo "</li>\n";
                        }
                        #*/

                        /* math_captcha Example
                        # To activate math_captcha, ensure the 'if' statement immediately below is uncommented and then comment out the reCAPTCHA 'if' statement just above.
                        # You will also need to enable the math_captcha examples in 'controllers/auth.php', and 'models/demo_auth_model.php'.
                        if (isset($captcha))
                        {
                            echo "<li>\n";
                            echo "<label for=\"captcha\">Captcha Question:</label>\n";
                            echo $captcha.' = <input type="text" id="captcha" name="login_captcha" class="width_50"/>'."\n";
                            echo "</li>\n";
                        }
                        #*/
                        ?>
                        <input type="submit" name="login_user" id="submit" value="Log in" class="btn btn-primary btn-block btn-flat"/>
                        <div class="row">
                            <div class="col-xs-12">
                                <a href="<?php echo base_url('');?>auth/resend_activation_token" hidden></a>
                            </div>
                        </div>


                        <?php echo form_close();?>

                    </div>
                    <div class="new_people" >
                        <h2>For New People</h2>
                        <p>Having hands on experience in creating innovative designs,I do offer design
                            solutions which harness.
                        </p>
                        <a href="<?php echo base_url('') ?>auth/register_account">Register Now!</a>
                    </div>

                </div>
            </div>
        </div>
        <!--footer section start-->
        <footer class="diff">
            <p class="text-center">© 2018 Mroogle. All Rights Reserved</p>
        </footer>
        <!--footer section end-->
    </section>
    <style>
        .content-wrapper, .right-side, .main-footer{
            margin-right: 0px !important;
        }
    </style>
<?php
$this->load->view('footer');
?>