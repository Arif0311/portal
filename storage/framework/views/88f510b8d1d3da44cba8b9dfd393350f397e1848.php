<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Indoportal Fintopia</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/font-awesome/css/font-awesome.min.css')); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/Ionicons/css/ionicons.min.css')); ?>">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')); ?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')); ?>">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/timepicker/bootstrap-timepicker.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('dist/css/AdminLTE.min.css')); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo e(asset('dist/css/skins/_all-skins.min.css')); ?>">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>I</b>FI</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Indoportal</b>Fintopia</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo e(asset ('dist/img/avatar5.png')); ?>" class="img-circle" alt="User Image">
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <li class="active"><a href="<?php echo e(route('createVisitor')); ?>"><i class="fa fa-edit"></i> <span>Visitor Form</span></a></li>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Visitor Form
          <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#">Forms</a></li>
          <li class="active"><i class="fa fa-edit"></i> Visitor Form</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- SELECT2 EXAMPLE -->

        <div class="row">
          <!-- /.col (left) -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" action="<?php echo e(route('storeVisitor')); ?>" method="post" enctype="multipart/form-data">
              <?php echo e(csrf_field()); ?>

                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputVisitorName">Visitor Name: </label>
                    <input type="text" class="form-control" name="visitor_name" placeholder="Visitor Name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputVisitorEmail">Visitor Email: </label>
                    <input type="email" class="form-control" name="visitor_email" placeholder="Visitor Email" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputVisitorInformation">Visitor Address or Company:</label>
                    <input type="text" class="form-control" name="visitor_information" placeholder="Visitor Information" required> 
                  </div>
                  <div class="form-group">
                    <label for="exampleInputMobileNumber">Visitor Mobile Number: </label>
                    <input type="number" class="form-control" name="visitor_mobile_number" placeholder="Mobile Number" required>
                  </div>
                  <div class="form-group">
                  <label>Reason Purpose:</label>
                      <select class="form-control" name= "reason_for_visit" required>
                          <option>Interview</option>
                          <option>Meeting</option>
                          <option>Complain</option>
                          <option>Other</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPersonVisiting">Person/Departement Visiting: </label>
                      <input type="text" class="form-control" name="person_visiting" placeholder="Person Visiting" required>
                  </div>
                  <div class="form-group">
                        <label for="exampleInputTemperature">Body Temperature</label>
                        <input type="number" maxlength="3" step="0.1" max="39.0" min="34.0" value="36.0" class="form-control" name="body_temperature" placeholder="Temperature" required>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputVisitorAccessCard">Visitor Access Card: </label>
                      <input type="number" class="form-control" name="visitor_access_card" placeholder="visitor Access Card" required>
                  </div>
                  <div class="form-group">
                        <label>Input Date/Time</label>
                        <input id="meeting-time" class="form-control" max="2100-01-01T00:00" min="2020-01-01T00:00" name="date_in_visitor" size="60" style="width:100%" type="datetime-local" required>
                  </div>
                  <div class="form-group">
                        <label>Time Out</label>
                        <input id="meeting-time" class="form-control" max="2100-01-01T00:00" min="2020-01-01T00:00" name="time_out" size="60" style="width:100%" type="datetime-local" required>
                  </div>
                  <div class="form-group">
                        <label>Description:</label>
                        <textarea type="text" class="form-control" name="description" placeholder="Enter Description" required></textarea>
                  </div>
                  <div class="form-group">
                      <label class="form-label" for="photo">Photo</label>
                      <input type="file" class="form-control" id="photo" name="photo" required>
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" mrthod="post">Create</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
    </section>
      <!-- /.content -->
  </div>
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      <strong>Financial Service</strong>
    </div>
    <!-- Default to the left -->
    <strong>PT.Indonesia Fintopia Technology &copy; 2021 <a href="#">Company</a>.</strong> 
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo e(asset('bower_components/jquery/dist/jquery.min.js')); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(asset('bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<!-- Select2 -->
<script src="<?php echo e(asset('bower_components/select2/dist/js/select2.full.min.js')); ?>"></script>
<!-- date-range-picker -->
<script src="<?php echo e(asset('bower_components/moment/min/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo e(asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')); ?>"></script>
<!-- bootstrap time picker -->
<script src="<?php echo e(asset('plugins/timepicker/bootstrap-timepicker.min.js')); ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo e(asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"></script>
<!-- FastClick -->
<script src="<?php echo e(asset('bower_components/fastclick/lib/fastclick.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('dist/js/adminlte.min.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('dist/js/demo.js')); ?>"></script>
<!-- Page script -->
<script>
  $(function () {
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ 
      timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
  // Example starter JavaScript for disabling form submissions if there are invalid fields

</script>

<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>
<?php /**PATH /Users/admin_fintopia/Documents/Indoportal-Fintopia/resources/views/CreateVisitor.blade.php ENDPATH**/ ?>