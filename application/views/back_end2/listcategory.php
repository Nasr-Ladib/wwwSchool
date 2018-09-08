<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            القائمة
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
            <li class="active">الأصناف</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">قائمة الأصناف</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>تعديل </th>
                        <th> الصنف </th>
                        <th>أيقونة</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($categories as $category){ ?>
                        <tr id="<?php echo $category['cat_ID']  ?>">
                            <td>
                                <input type="checkbox">
                                <i class="fa fa-edit" id="edit<?php echo $category['cat_ID']  ?>" onclick="inputToEnable('input<?php echo $category['cat_ID']  ?>','save<?php echo $category['cat_ID']  ?>')" onmouseenter="document.getElementById('edit<?php echo $category['cat_ID']  ?>').style.color = 'red';" onmouseleave="document.getElementById('edit<?php echo $category['cat_ID']  ?>').style.color = 'black';"></i>
                                <i class="fa fa-trash-o" id="delete<?php echo $category['cat_ID']  ?>" onmouseenter="document.getElementById('delete<?php echo $category['cat_ID']  ?>').style.color = 'red';" onmouseleave="document.getElementById('delete<?php echo $category['cat_ID']?>').style.color = 'black';"></i>
                                <span id="save<?php echo $category['cat_ID']  ?>" onclick="saveCategory('icon<?php echo $category['cat_ID']  ?>','input<?php echo $category['cat_ID']  ?>','<?php echo $category['cat_ID']  ?>','save<?php echo $category['cat_ID']  ?>','name<?php echo $category['cat_ID']  ?>','icone<?php echo $category['cat_ID']  ?>')"  hidden><i class="fa fa-save"  style="float: left;color: blue"></i></span>
                            </td>
                            <style>
                                .input<?php echo $category['cat_ID']  ?>{
                                    background-color: transparent;border: none;
                                }

                            </style>
                            <td> <input class="input<?php echo $category['cat_ID']  ?>" style="display: block;width:75%;" id="name<?php echo $category['cat_ID']  ?>" value="<?php echo $category['cat_Name'] ?>"  disabled></td>
                            <td><i id="icon<?php echo $category['cat_ID']  ?>" class="<?php echo $category['cat_Icon'] ?>"> <input id="icone<?php echo $category['cat_ID']  ?>" class="input<?php echo $category['cat_ID']  ?>" value="<?php echo $category['cat_Icon'] ?>" disabled></i> </td>
                            <script>
                                function inputToEnable(id,id_save) {
                                    $("."+id).removeAttr('disabled');
                                    $('#'+id_save).show();
                                }
                                function saveCategory(icon,id_input,id,id_save,id_name,id_icone) {
                                    var name=$('#'+id_name).val();
                                    var icone=$('#'+id_icone).val();
                                    document.getElementById(icon).className=icone;
                                    $.ajax({
                                        url : "<?php echo base_url('admin/saveCategory/' ); ?>"+id,
                                        type : "POST",
                                        data:{'name':name,'icone':icone},
                                        success : function(response) {
                                            $('#'+id_save).hide();
                                            $("."+id_input).attr('disabled','disabled');

                                        }
                                    });

                                }
                            </script>
                        </tr>
                   <?php } ?>


                    </tbody>
                </table>
            </div><!-- /.box-body -->
            <div class="box-footer clearfix no-border">
                <button class="btn btn-default pull-left"><a href="<?php echo base_url('admin/fromcategory') ?>" style="color:#000"><i class="fa fa-plus"></i> إضافة صنف </a></button>
            </div>
        </div><!-- /.box -->
    </section><!-- /.content -->
</div>
<!-- /.content-wrapper -->