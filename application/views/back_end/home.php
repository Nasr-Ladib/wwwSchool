<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            الإحصائيات
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
            <li class="active">الرئيسية</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>120</h3>
                        <p>الإعلانات الجديدة</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">الإطلاع<i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>55</h3>
                        <p>المستخدمين الجدد</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">الإطلاع <i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>20</h3>
                        <p>الإعلانات المغلقة</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">الإطلاع <i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>10</h3>
                        <p>الشكاوى</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">الإطلاع <i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div><!-- ./col -->
        </div><!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">


                <!-- Chat box -->
                <div class="box box-success">
                    <div class="box-header">
                        <i class="fa fa-comments-o"></i>
                        <h3 class="box-title">آخر الشكاوى</h3>
                        <div class="box-tools pull-left" data-toggle="tooltip" title="Status">

                        </div>
                    </div>
                    <div class="box-body chat" id="chat-box">
                        <!-- chat item -->
                        <?php for ($i=0;$i<count($claims);$i++){ ?>
                        <div class="item">
                            <img src="<?php echo base_url('assets/uploads/'.$clients[$i][0]['client_Photo']) ?>" alt="user image" class="online">
                            <p class="message">
                                <a href="#" class="name">
                                    <small class="text-muted pull-left"><i class="fa fa-clock-o"></i> <?php echo ($claims[$i]['date_creation']) ?></small>
                                    <?php echo $clients[$i][0]['client_name'] ?>"
                                </a>
                                <?php echo ($claims[$i]['descreption']) ?>
                            </p>
                            <div class="attachment">
                                <h4>مرفقات:</h4>
                                <p class="filename">
                                    صورة.jpg
                                </p>
                                <div class="pull-left">
                                    <button class="btn btn-primary btn-sm btn-flat">إفتح</button>
                                </div>
                            </div><!-- /.attachment -->
                        </div><!-- /.item -->
                        <!-- chat item -->
                        <?php } ?>
                    </div><!-- /.chat -->

                </div><!-- /.box (chat box) -->

                <!-- TO DO List -->


            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">


                <div class="box box-primary">
                    <div class="box-header">
                        <i class="ion ion-clipboard"></i>
                        <h3 class="box-title">الإعلانات اليومية</h3>
                        <div class="box-tools pull-left">
                            <ul class="pagination pagination-sm inline">
                                <li><a href="#">&laquo;</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <ul class="todo-list">
                            <li>
                                <!-- drag handle -->
                                <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                <!-- checkbox -->
                                <input type="checkbox" value="" name="">
                                <!-- todo text -->
                                <span class="text">بيع تلفاز</span>
                                <!-- Emphasis label -->
                                <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                                <!-- General tools such as edit or delete-->
                                <div class="tools">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash-o"></i>
                                </div>
                            </li>
                            <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                <input type="checkbox" value="" name="">
                                <span class="text">بيع سيارة</span>
                                <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                                <div class="tools">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash-o"></i>
                                </div>
                            </li>
                            <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                <input type="checkbox" value="" name="">
                                <span class="text">بيع كرسي</span>
                                <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                                <div class="tools">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash-o"></i>
                                </div>
                            </li>

                        </ul>
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix no-border">
                        <button class="btn btn-default pull-left"><a href="<?php echo base_url('admin/formadmin') ?>" style="color:#000"><i class="fa fa-plus"></i> إضافة إعلان</a></button>
                    </div>
                </div><!-- /.box -->

            </section><!-- right col -->
        </div><!-- /.row (main row) -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->