<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            القائمة
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('') ?>"><i class="fa fa-dashboard"></i> </a></li>
            <li class="active">الرئيسية</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">قائمة التلاميذ  </h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>تعديل </th>
                        <th>الإسم  </th>
                        <th>الصورة   </th>
                        <th id="classStudent">القسم </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($students as $student){?>
                    <tr id="<?php echo $student['id'] ?>">
                        <td>
                            <input type="checkbox">
                            <i class="fa fa-eye" id="eye<?php echo $student['id'] ?>" onclick="location.href='<?php echo base_url('') ?>'" onmouseenter="document.getElementById('eye<?php echo $student['id']  ?>').style.color = 'red';" onmouseleave="document.getElementById('eye<?php echo $student['id'] ?>').style.color = 'black';"></i>
                                <i class="fa fa-edit" id="edit<?php echo $student['id'] ?>" onclick="editClass(<?php echo $student['id'] ?>)" onmouseenter="document.getElementById('edit<?php echo $student['id']  ?>').style.color = 'red';" onmouseleave="document.getElementById('edit<?php echo $student['id']  ?>').style.color = 'black';"></i>
                                <i class="fa fa-trash-o" id="delete<?php echo $student['id']  ?>" onclick="deleteClass(<?php echo $student['id']?>,'<?php echo $student['classe']?>','<?php echo $student['name']?>' )" onmouseenter="document.getElementById('delete<?php echo $student['id'] ?>').style.color = 'red';" onmouseleave="document.getElementById('delete<?php echo $student['id']  ?>').style.color = 'black';"></i>
                                <span id="save<?php echo $student['id'] ?>" onclick="saveEdit(<?php echo $student['id'] ?>)" hidden><i class="fa fa-save"  style="float: left;color: blue"></i></span>
                        </td>
                        <td><?php echo $student['name'] ?></td>
                        <td><img src="<?php echo base_url('assets/uploads/'.$student['picture']) ?>"></td>
                        <td id="class<?php echo $student['id'] ?>"><?php echo $student['classe']?></td>
                        <script>
                          function editClass(id) {
                              $('#save'+id).show();
                              $('#no'+id).show();
                              $('#class'+id).empty();
                              $('#class'+id).append('<input type="text" id="class" placeholder="ضع إسم القسم الجديد  " style="width:100%">');
                              }
                            function deleteClass(id,classe,name) {
                                alert('حذف هذا '+name +' من قسم '+classe);
                                $.ajax({
                                    url : "<?php echo base_url('admin/deleteclass') ?>",
                                    type : "POST",
                                    data:{'id':id},
                                    success : function(response) {
                                        $('#'+id).remove();
                                    },
                                    error : function(data) {
                                    }
                                });
                            }
                              function saveEdit(id) {
                                  var id=id;
                                    var classe=$('#class').val();
                                        if(classe!=''){
                                            $.ajax({
                                                url : "<?php echo base_url('admin/editclass') ?>",
                                                type : "POST",
                                                data:{'id':id,'classe':classe},
                                                success : function(response) {
                                                    $('#class'+id).html(classe);
                                                    $('#class').hide();
                                                    $('#save'+id).hide();
                                                    $('#no'+id).hide();
                                                },
                                                error : function(data) {
                                                }
                                            });
                                        }else{
                                            alert('يجب عليك إدخال إسم للقسم ');
                                        }
                              }
                        </script>
                    </tr>
                    <?php } ?>


                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->



















    </section><!-- /.content -->
</div>
<!-- /.content-wrapper -->