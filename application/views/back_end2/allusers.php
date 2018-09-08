<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            القائمة
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('admin/indexadmin')?>"><i class="fa fa-dashboard"></i> </a></li>
            <li class="active">الإعلانات</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"> قائمة الإعلانات </h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped" width="100%">
                    <thead>
                    <tr>
                        <th>تعديل </th>
                        <th> إسم المستخدم  </th>
                        <th>E-mail</th>
                        <th>رقم الهاتف </th>
                        <th>عدد إعلانات </th>
                        <th>حالة </th>
                        <th>تاريخ التسجيل  </th>
                        <th>تاريخ آخر تسجيل دخول</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if($all_users != null){
                        foreach ($all_users as $all_user){ ?>
                            <tr id="<?php echo $all_user['client_ID']  ?>">
                                <td>
                                    <input type="checkbox">
                                    <i class="fa fa-eye" id="eye<?php echo $all_user['client_ID']  ?>" onclick="location.href='<?php echo base_url('user/owenposts/'.$all_user['client_ID']) ?>'" onmouseenter="document.getElementById('eye<?php echo $all_user['client_ID']  ?>').style.color = 'red';" onmouseleave="document.getElementById('eye<?php echo $all_user['client_ID']?>').style.color = 'black';">
                                        <i class="fa fa-edit" id="edit<?php echo $all_user['client_ID']  ?>"  onmouseenter="document.getElementById('edit<?php echo $all_user['client_ID']  ?>').style.color = 'red';" onmouseleave="document.getElementById('edit<?php echo $all_user['client_ID']  ?>').style.color = 'black';"></i>
                                        <i class="fa fa-trash-o" id="delete<?php echo $all_user['client_ID']  ?>" onmouseenter="document.getElementById('delete<?php echo $all_user['client_ID']  ?>').style.color = 'red';" onmouseleave="document.getElementById('delete<?php echo $all_user['client_ID']?>').style.color = 'black';"></i>
                                </td>
                                <td> <?php echo $all_user['client_name'] ?></td>
                                <td> <?php echo $all_user['uacc_email'] ?></td>
                                <td><?php echo $all_user['client_Tel'] ?></td>
                                <td > <center><?php echo $all_user['number_posts'] ?></center></td>
                                <td> <?php if($all_user['uacc_active']==1){echo 'مفعل';}else echo 'غير مفعل'; ?></td>
                                <td> <?php echo $all_user['uacc_date_added'] ?></td>
                                <td ><?php echo $all_user['uacc_date_last_login'] ?></td>
                            </tr>
                        <?php }}else{

                        echo "لا يوجد    ";
                    }
                    ?>


                    </tbody>
                </table>
            </div><!-- /.box-body -->
            <div class="box-footer clearfix no-border">
                <button class="btn btn-default pull-left"><a href="<?php echo base_url('auth/register_account') ?>" style="color:#000"><i class="fa fa-plus"></i> إضافة مستخدم </a></button>
            </div>
        </div><!-- /.box -->
    </section><!-- /.content -->
</div>
<!-- /.content-wrapper -->