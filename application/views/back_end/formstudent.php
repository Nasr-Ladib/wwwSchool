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
                <?php echo form_open_multipart('admin/addstudent');?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>إسم تلميذ : </label>
                            <input type="text" required  name="nametext" id="nametext" style="width: 75%">
                        </div><!-- /.form-group -->
                    </div><!-- /.col -->

                    <div class="col-md-6">
                        <div class="form-group">
                                <label>  صورة التلميذ :</label>
                                <input type="file" required  name="student_file" id="student_file">
                        </div><!-- /.form-group -->
                    </div><!-- /.col -->
                    <div class="col-md-6">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>القسم : </label>
                                <input type="text"   name="classe" id="classe" style="width: 100%">
                            </div><!-- /.form-group -->
                        </div><!-- /.col -->
                    </div><!-- /.col -->
                    <div class="col-md-6">
                    <div class="form-group">
                        <div class="box-footer clearfix no-border">
                            <button class="btn btn-default pull-left"   onclick="submit()" type="submit" name="submit"><i class="fa fa-plus"></i>سجل التمرين </a></button>
                        </div>
                    </div><!-- /.form-group -->
                    </div>
                </div><!-- /.row -->
                </form>
                <script>
                    function submit() {
                        var name=$('#nametext').val();
                        var file=$('#file').val();
                        if(name!=''){
                                if(file!=''){
                                }else
                                    alert('ضع صورة للتلميذ ');
                        }else
                            alert('إختر إسم التلميذ');
                    }
                </script>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </section><!-- /.content -->
</div>
<!-- /.content-wrapper -->