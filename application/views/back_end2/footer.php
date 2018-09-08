<footer class="main-footer">
    <div class="pull-left hidden-xs">
        <b>نسخة</b> 1.0.0
    </div>
    <strong>كل الحقوق محفوظة مروقل  2018 .</strong>
</footer>
<!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->


<!-- jQuery 2.1.4 -->
<script src="<?php echo base_url('assets/back_end/js/jQuery-2.1.4.min.js')?>"></script>
<!-- Bootstrap 3.3.4 -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url('assets/back_end/js/select2.full.min.js')?>"></script>
<!-- InputMask -->
<script src="<?php echo base_url('assets/back_end/js/jquery.inputmask.js')?>"></script>
<script src="<?php echo base_url('assets/back_end/js/jquery.inputmask.date.extensions.js')?>"></script>
<script src="<?php echo base_url('assets/back_end/js/jquery.inputmask.extensions.js')?>"></script>
<script src="<?php echo base_url('assets/back_end/js/jquery.dataTables.min.js')?>"></script>

<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="<?php echo base_url('assets/back_end/js/daterangepicker.js')?>"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url('assets/back_end/js/bootstrap-colorpicker.min.js')?>"></script>
<!-- bootstrap time picker -->
<script src="<?php  echo base_url('assets/back_end/js/bootstrap-timepicker.min.js')?>"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url('assets/back_end/js/jquery.slimscroll.min.js')?>"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url('assets/back_end/js/icheck.min.js')?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/back_end/js/fastclick.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/back_end/js/app.min.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/back_end/js/demo.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js')?>"></script>
<!-- Page script -->
<script>
    $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            },
            function (start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
            showInputs: false
        });
    });
</script>
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
