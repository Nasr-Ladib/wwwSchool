<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
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
                <h3 class="box-title">إضافة الصنف الثاني</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>إختر الصنف الرئيسي :</label>
                            <select  id="cat" class="form-control select2" style="width: 100%;">
                                <option selected="selected"></option>
                                <?php if($categories!=null){
                                foreach ($categories as $category){?>
                                    <option  value="<?php echo $category['cat_ID']?>"> <?php echo $category['cat_Name'] ?></option>
                                <?php }} ?>
                            </select>
                        </div><!-- /.form-group -->
                        <div class="form-group" id="divsubcat" >
                                <label>أضف إسم الصنف الثاني </label>
                            <div class="form-group">
                                <input id="subcat"  type="text" style="width: 75%" placeholder="    إسم الصنف الثاني    ">
                                <span class="fa fa-plus-square" onclick="addSubCat()" style="font-size:25px;color:dodgerblue;cursor: pointer;float: left" ></span>
                            </div>
                            <div id="alert"></div>
                            <script>
                                setTimeout(function() {
                                    $("#Myalert").fadeOut(1000);
                                }, 3000);</script>
                            <script>
                                function addSubCat() {
                                    var cat=$('#cat').val();
                                    var subcat=$('#subcat').val();
                                    $.ajax({
                                        url : "<?php echo base_url('admin/addsubcat/' ); ?>",
                                        type : "POST",
                                        data:{'cat':cat,'subcat':subcat},
                                        success : function(response) {
                                            if(cat==''){
                                                alert('   إختر الصنف الرئيسي ');
                                                 }else  if(subcat=''){
                                                alert('   ضع إسم للفئة الثانية  ');
                                            }else
                                            if(response=='exist'){
                                                alert('اسم الفئة الفرعية موجود بالفعل');
                                            }else{
                                            $('#alert').empty();
                                            $('#alert').append('<div id="Myalert" class="alert alert-success alert-dismissible"   style="position: fixed;width:25%;bottom: 0;left: 0;">' +
                                                '                                <a id="mylink" href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
                                                '                              <strong> بنجاح</strong> تمت اضافت الصنف الثاني   </div>');
                                            }
                                        }
                                    });
                                }
                            </script>
                        </div><!-- /.form-group -->

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.box-body -->
        </div>
        <!-- /.box -->
     </section><!-- /.content -->
</div>
<!-- /.content-wrapper -->