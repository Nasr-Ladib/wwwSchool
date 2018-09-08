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
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>تعديل </th>
                        <th> الإعلان </th>
                        <th>التاريخ</th>
                        <th>الحالة</th>
                        <th>المستخدم</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if($disactif_ads!=null){
                        foreach ($disactif_ads as $disactif_ad){ ?>
                            <tr id="<?php echo $disactif_ad['pub_ID']  ?>">
                                <td>
                                    <input type="checkbox">
                                    <i class="fa fa-eye" id="eye<?php echo $disactif_ad['pub_ID']  ?>" onclick="location.href='<?php echo base_url('post/readonepost/'.$disactif_ad['pub_ID']) ?>'" onmouseenter="document.getElementById('eye<?php echo $disactif_ad['pub_ID']  ?>').style.color = 'red';" onmouseleave="document.getElementById('eye<?php echo $disactif_ad['pub_ID']?>').style.color = 'black';">
                                        <i class="fa fa-edit" id="edit<?php echo $disactif_ad['pub_ID']  ?>" onclick="location.href='<?php echo base_url('post/displayonepost/edit/'.$disactif_ad['pub_ID']) ?>'" onmouseenter="document.getElementById('edit<?php echo $disactif_ad['pub_ID']  ?>').style.color = 'red';" onmouseleave="document.getElementById('edit<?php echo $disactif_ad['pub_ID']  ?>').style.color = 'black';"></i>
                                        <i class="fa fa-trash-o" id="delete<?php echo $disactif_ad['pub_ID']  ?>" onmouseenter="document.getElementById('delete<?php echo $disactif_ad['pub_ID']  ?>').style.color = 'red';" onmouseleave="document.getElementById('delete<?php echo $disactif_ad['pub_ID']?>').style.color = 'black';"></i>
                                </td>

                                <td><?php echo $disactif_ad['pub_Name'] ?></td>
                                <td><?php echo $disactif_ad['pub_Date'] ?></td>
                                <td>مغلقة </td>
                                <td style="cursor:pointer" onclick="location.href='<?php echo base_url('user/owenPosts/'.$disactif_ad['client_ID']) ?>'" > <?php echo $disactif_ad['client_name'] ?></td>
                            </tr>
                        <?php }}else{

                        echo " لا يوجد إعلانات مغلقة   ";
                    }

                    ?>


                    </tbody>
                </table>
            </div><!-- /.box-body -->
            <div class="box-footer clearfix no-border">
                <button class="btn btn-default pull-left"><a href="<?php echo base_url('post/displayonepost/add') ?>" style="color:#000"><i class="fa fa-plus"></i> إضافة الإعلان </a></button>
            </div>
        </div><!-- /.box -->
    </section><!-- /.content -->
</div>
<!-- /.content-wrapper -->