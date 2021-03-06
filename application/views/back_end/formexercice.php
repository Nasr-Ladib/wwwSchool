<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            الإضافة
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
            <li class="active">الرئيسية</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- SELECT2 EXAMPLE -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">إضافة</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div><!-- /.box-header -->
             <div class="box-body">
                 <?php echo form_open_multipart('admin/addexercice');?>
                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>نوع التمرين  </label>
                            <select class="form-control select2" id="exercice" required name="exercice" style="width: 100%;">
                                <option selected="selected"></option>
                                <option value="1"> تمرين للقرأة  </option>
                                <option value="2"> تمرين للكتابة  </option>
                            </select>
                        </div><!-- /.form-group -->
                    </div><!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>المكلف به </label>
                            <select class="form-control select2" required name="student" id="student" style="width: 100%;">
                                <option selected="selected"></option>
                                <?php if($students!=null){
                                    foreach($students as $student){?>
                                        <option value="<?php echo $student['id'] ?>"> <?php echo $student['name'] ?> </option>
                                    <?php }
                                } ?>
                            </select>
                        </div><!-- /.form-group -->
                    </div><!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> أضف تمرين :</label>
                            <input type="file" required  name="ex_file" id="file" >
                        </div><!-- /.form-group -->
                    </div><!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="box-footer clearfix no-border">
                                <button class="btn btn-default pull-left" onclick="submit()" type="submit" name="submit"><i class="fa fa-plus"></i>سجل التمرين </a></button>
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
                 </form>
                 <script>
                     function submit() {
                         var exercice=$('#classe').val();
                         var student=$('#student').val();
                         var file=$('#exercice').val();
                         if(exercice!=''){
                             if(student!=''){
                                 if(file!=''){
                                 }else
                                     alert('إختر تمرين');
                             }else
                                 alert('إختر إسم التلميذ ');
                         }else
                             alert('إختر نوع التمرين');
                     }
                 </script>
             </div><!-- /.box-body -->
        </div><!-- /.box -->
    </section><!-- /.content -->
</div>
<!-- /.content-wrapper -->