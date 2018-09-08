<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>مدرستي </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url('assets/back_end/css/ionicons.min.css')?>">
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/back_end/css/daterangepicker-bs3.css')?>">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?php echo base_url('assets/back_end/css/all.css')?>">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/back_end/css/bootstrap-colorpicker.min.css')?>">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/back_end/css/bootstrap-timepicker.min.css')?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/back_end/css/select2.min.css')?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/back_end/css/AdminLTE.min.css')?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url('assets/back_end/css/_all-skins.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-rtl.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/back_end/css/rtl.css')?>">
</head>
<body class="skin-green-light sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b></b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b></b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>

                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">۱۰</span>
                        </a>

                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">۹</span>
                        </a>

                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo base_url('assets/uploads/user-avatar.jpg')?>" class="user-image" alt="User Image">
                            <span class="hidden-xs"> الأستاذة <?php echo $user[0]['name'] ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?php echo base_url('assets/uploads/user-avatar.jpg')?>" class="img-circle" alt="User Image">
                                <p>
                                    الأستاذة <?php echo $user[0]['name'] ?>
                                    <small>04-07-2018</small>
                                </p>
                            </li>
                            <!-- Menu Body -->

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">حسابي</a>
                                </div>
                                <div class="pull-left">
                                    <a href="<?php echo base_url('/auth/logout');?>" class="btn btn-default btn-flat">تسجيل الخروج</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">

                <img src="<?php echo base_url('assets/images/')?>" alt="User Image" width="220px">

            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="بحث ...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">القائمة</li>
                <li class="active">
                    <a href="<?php echo base_url('admin/index')?>">
                        <i class="fa fa-dashboard"></i> <span>الرئيسية</span></i>
                    </a>

                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span>التلاميذ </span>
                        <i class="fa fa-angle-left pull-left"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url('admin/liststudents')?>"><i class="fa fa-circle-o"></i> التلاميذ مدرجين دخل أقسام  </a></li>
                        <li><a href="<?php echo base_url('admin/liststudentsoutclass')?>"><i class="fa fa-circle-o"></i>   التلاميذ بدون أقسام </a></li>
                        <li><a href="<?php echo base_url('admin/liststudentsoutteacher')?>"><i class="fa fa-circle-o"></i>   التلاميذ بدون أستاذ </a></li>
                        <li><a href="<?php echo base_url('admin/formstudent')?>"><i class="fa fa-circle-o"></i> أضف  تلميذ    </a></li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>التمارين </span>
                        <i class="fa fa-angle-left pull-left"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url('admin/readingexercices')?>"><i class="fa fa-circle-o"></i> التمارين للقراءة </a></li>
                        <li><a href="<?php echo base_url('admin/writingexercices')?>"><i class="fa fa-circle-o"></i> التمارين للكتابة </a></li>
                        <li><a href="<?php echo base_url('admin/formexercice')?>"><i class="fa fa-circle-o"></i>أضف تمرين  </a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="<?php echo base_url('admin/formmsg')?>">
                        <i class="	fa fa-envelope"></i>
                        <span>راسل </span>
                    </a>
                </li>


            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>