<?php
$this->load->view('header');
?>
<body class="login-page">
<div class="login-box">
    <div class="login-logo">

    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg"><img src="<?php echo $includes_dir; ?>ext/dist/img/logo.png" width="100px"></p>




        <?php if (! empty($message)) { ?>
            <div id="message">
                <?php echo $message; ?>
            </div>
        <?php } ?>

        <?php echo form_open(current_url(), 'class="parallel"');?>
        <h3 style="text-align:center; color:#017f7b">
            تسجيل الدخول
        </h3>
        <form action="home.html" method="get">
            <div class="form-group has-feedback">
                <input type="text" id="identity" name="login_identity" value="<?php echo set_value('login_identity', 'admin@admin.com');?>" class="form-control" placeholder="إسم المستخدم"/>

                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" id="password" name="login_password" value="<?php echo set_value('login_password', 'password123');?>" class="form-control" placeholder="كلمة المرور"/>

                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <?php

            if (isset($captcha))
            {
                echo "<li>\n";
                echo $captcha;
                echo "</li>\n";
            }

            ?>
            <div class="row">
                <div class="col-xs-12">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" id="remember_me" name="remember_me" value="1" <?php echo set_checkbox('remember_me', 1); ?>/> تذكرني
                        </label>
                    </div>
                </div> </div><!-- /.col -->
            <div class="row">
                <div class="col-xs-12">
                    <input type="submit" name="login_user" id="submit" value="تسجيل الدخول" class="btn btn-primary btn-block btn-flat"/>

                </div><!-- /.col -->
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <a href="<?php echo $base_url;?>auth/forgotten_password">إستعادة كلمة المرور</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <a href="<?php echo $base_url;?>auth/resend_activation_token"إعادة إرسال كود التفعيل</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <a href="<?php echo $base_url;?>auth/register_account" class="btn btn-primary btn-block btn-flat">تسجيل جديد</a>
                </div>
            </div>





            <?php echo form_close();?>















    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->


<?php
$this->load->view('footer');
?>
<style>
    .content-wrapper, .right-side, .main-footer{
        margin-right: 0px !important;
    }
</style>
</body>
</html>















