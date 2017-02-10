
<div class="row">
        <!-- left column -->
        <div class="col-md-12"> 
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Siswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group col-md-12">
                  <div class="form-group col-md-4">
                    <label>No Induk</label>
                    <input type="text" class="form-control" placeholder="No Induk">
                  </div>
                </div>

                <div class="form-group col-md-12">
                    <div class="form-group col-md-5">
                      <label>Password</label>
                      <input type="Password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group col-md-5">
                      <label>Konfirmasi Password</label>
                      <input type="password" class="form-control" placeholder="Konfirmasi Password">
                    </div>
                </div>

                <div class="form-group col-md-12">
                  <div class="form-group col-md-4">
                    <label>Nama Depan</label>
                    <input type="text" class="form-control" placeholder="Nama Depan">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Nama Belakang</label>
                    <input type="text" class="form-control" placeholder="Nama Belakang">
                  </div>
                </div>

                <div class="form-group col-md-12">
                <label style="margin-left: 1.2%;">Jenis Kelamin</label> <br>
                  <div class="form-group col-md-2">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">
                        Laki-Laki
                      </label>
                    </div>
                  </div>
                  <div class="form-group col-md-2">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">
                        Perempuan
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group col-md-12">
                  <div class="form-group col-md-4">
                    <label>Tempat</label>
                    <input type="text" class="form-control" placeholder="Tempat Lahir">
                  </div>
                  <div class="form-group col-md-4">
                    <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepicker">
                      </div>
                      <!-- /.input group -->
                    </div>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
      <link rel="stylesheet" href="<?php echo admin_theme_locations();?>plugins/datepicker/datepicker3.css">
        <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo admin_theme_locations();?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo admin_theme_locations();?>plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo admin_theme_locations();?>plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo admin_theme_locations();?>plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo admin_theme_locations();?>plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo admin_theme_locations();?>plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo admin_theme_locations();?>plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo admin_theme_locations();?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo admin_theme_locations();?>dist/css/skins/_all-skins.min.css">

      <!-- jQuery 2.2.3 -->
<script src="<?php echo admin_theme_locations();?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo admin_theme_locations();?>bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo admin_theme_locations();?>plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?php echo admin_theme_locations();?>plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo admin_theme_locations();?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo admin_theme_locations();?>plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo admin_theme_locations();?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo admin_theme_locations();?>plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo admin_theme_locations();?>plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo admin_theme_locations();?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo admin_theme_locations();?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo admin_theme_locations();?>plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?php echo admin_theme_locations();?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo admin_theme_locations();?>dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo admin_theme_locations();?>dist/js/demo.js"></script>

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
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

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