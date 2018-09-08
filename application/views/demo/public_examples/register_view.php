<meta name="description" content="flexi auth, the user authentication library designed for developers."/>
<meta name="keywords" content="demo, flexi auth, user authentication, codeigniter"/>
<body id="register">

<div id="body_wrap">
    <div id="page-wrapper" class="sign-in-wrapper">
        <div class="graphs">
            <div class="sign-up">
                <h1>انشئ حساب</h1>
                <div class="content_wrap main_content_bg">
                    <div class="content clearfix">
                        <div class="col100">
                <?php if (! empty($message)) { ?>
                    <div id="message" >
                        <?php echo $message; ?>
                    </div>
                <?php } ?>
                        </div>
                    </div>
                </div>
                <h2>معلومات شخصية</h2>
                <?php echo form_open(current_url()); ?>
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4>الاسم الاول*:</h4>
                    </div>
                    <div class="sign-up2">
                            <input type="text" id="first_name" name="register_first_name" value="<?php echo set_value('register_first_name');?>"/>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4>الكنية*:</h4>
                    </div>
                    <div class="sign-up2">
                            <input type="text" id="last_name" name="register_last_name" value="<?php echo set_value('register_last_name');?>"/>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4>البريد الإلكتروني* :</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" id="email_address" name="register_email_address" value="<?php echo set_value('register_email_address');?>" class="tooltip_trigger"
                               title="This demo requires that upon registration, you will need to activate your account via clicking a link that is sent to your email address."
                        />
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4>اسم المستخدم* :</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" id="username" name="register_username" value="<?php echo set_value('register_username');?>" class="tooltip_trigger"
                               title="Set a username that can be used to login with."
                        />
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4>
                            كلمه السر* :</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="password" id="password" name="register_password" value="<?php echo set_value('register_password');?>"/>                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4>
                            تأكيد كلمة المرور* :</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="password" id="confirm_password" name="register_confirm_password" value="<?php echo set_value('register_confirm_password');?>"/>                    </div>
                    <div class="clearfix"> </div>
                </div>

                <div class="sub_home">
                    <div class="sub_home_left">

                        <input type="submit" name="register_user" id="submit" value="سجل " class="link_button large"/>
                    </div>
                    <?php echo form_close();?>

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
