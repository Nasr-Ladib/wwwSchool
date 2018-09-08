<html>
<head>
    <meta charset="UTF-8">
    <title>مروقل</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/back_end/css/AdminLTE.min.css')?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('assets/back_end/css/blue.css')?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-page">
<div class="login-box">
    <div class="login-logo">

    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg"><img src="<?php echo base_url('assets/images/logo.png')?>"></p>
        <form action="#" method="get">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="إسم المستخدم">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="كلمة المرور">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> تذكرني
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">تسجيل الدخول</button>
                </div><!-- /.col -->
            </div>
        </form>



        <a href="#">نسيت كلمة المرور</a><br>


    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

<!-- jQuery 2.1.4 -->
<script src="<?php echo base_url('assets/back_end/js/jQuery-2.1.4.min.js')?>"></script>
<!-- Bootstrap 3.3.4 -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/back_end/js/icheck.min.js')?>"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
