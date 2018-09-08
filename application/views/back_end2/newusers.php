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
            <li class="active">المستخدمين</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"> قائمة المستخدمين </h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
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
                    <?php if($new_users != null){
                        foreach ($new_users as $new_user){ ?>
                            <tr id="<?php echo $new_user['client_ID']  ?>">
                                <td>
                                    <input type="checkbox">
                                    <i class="fa fa-eye" id="eye<?php echo $new_user['client_ID']  ?>" onclick="location.href='<?php echo base_url('user/owenposts/'.$new_user['client_ID']) ?>'" onmouseenter="document.getElementById('eye<?php echo $new_user['client_ID']  ?>').style.color = 'red';" onmouseleave="document.getElementById('eye<?php echo $new_user['client_ID']?>').style.color = 'black';">
                                        <i class="fa fa-edit" id="edit<?php echo $new_user['client_ID']  ?>"  onmouseenter="document.getElementById('edit<?php echo $new_user['client_ID']  ?>').style.color = 'red';" onmouseleave="document.getElementById('edit<?php echo $new_user['client_ID']  ?>').style.color = 'black';"></i>
                                        <i class="fa fa-trash-o" id="delete<?php echo $new_user['client_ID']  ?>" onmouseenter="document.getElementById('delete<?php echo $new_user['client_ID']  ?>').style.color = 'red';" onmouseleave="document.getElementById('delete<?php echo $new_user['client_ID']?>').style.color = 'black';"></i>
                                </td>

                                <td> <input class="input<?php echo $new_user['client_ID']  ?>" style="display: block;width:100%;" id="name<?php echo $new_user['client_ID']  ?>" value="<?php echo $new_user['client_name'] ?>"  disabled></td>
                                <td> <input id="mail<?php echo $new_user['client_ID']  ?>" class="input<?php echo $new_user['client_ID']  ?>" value="<?php echo $new_user['uacc_email'] ?>" disabled></i> </td>
                                <td> <input id="tel<?php echo $new_user['client_ID']  ?>" class="input<?php echo $new_user['client_ID']  ?>" value="<?php echo $new_user['client_Tel'] ?>" disabled></i> </td>
                                <td  > <input id="number<?php echo $new_user['client_ID']  ?>"  style="cursor: pointer;" class="input<?php echo $new_user['client_ID']  ?>" value="<?php echo $new_user['number_posts'] ?>" disabled></i> </td>
                                <td > <input id="actif<?php echo $new_user['client_ID']  ?>" style="cursor: pointer;" class="input<?php echo $new_user['client_ID']  ?>" value="<?php if($new_user['uacc_active']==1){echo 'مفعل';}else echo 'غير مفعل'; ?>" disabled></i> </td>
                                <td  > <input id="add<?php echo $new_user['client_ID']  ?>" style="cursor: pointer;" class="input<?php echo $new_user['client_ID']  ?>" value="<?php echo $new_user['uacc_date_added'] ?>" disabled></i> </td>
                                <td  > <input id="login<?php echo $new_user['client_ID']  ?>" style="cursor: pointer;" class="input<?php echo $new_user['client_ID']  ?>" value="<?php echo $new_user['uacc_date_last_login'] ?>" disabled></i> </td>

                            </tr>
                        <?php }}else{

                        echo "لا يوجد مستخدمين جدد  ";
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