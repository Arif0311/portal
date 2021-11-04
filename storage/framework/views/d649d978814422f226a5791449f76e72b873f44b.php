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
  <link rel="stylesheet" href="<?php echo e(asset ('bower_components/Ionicons/css/ionicons.min.css')); ?>">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo e(asset ('bower_components/bootstrap-daterangepicker/daterangepicker.css')); ?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo e(asset ('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')); ?>">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo e(asset ('plugins/timepicker/bootstrap-timepicker.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset ('dist/css/AdminLTE.min.css')); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo e(asset ('dist/css/skins/_all-skins.min.css')); ?>">

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

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo e(asset ('dist/img/avatar5.png')); ?>" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo e(Auth::user()->name); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo e(asset ('dist/img/avatar5.png')); ?>" class="img-circle" alt="User Image">

                <p>
                <?php echo e(Auth::user()->name); ?> - <?php echo e(Auth::user()->username); ?>

                  <small>Member since <?php echo e(Auth::user()->created_at); ?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo e(route('logout')); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
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
        <div class="pull-left info">
          <p><?php echo e(Auth::user()->name); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo e(Auth::user()->username); ?></a>
        </div>
      </div>
      
      
      <!-- sidebar menu: : style can be found in sidebar.less -->

      
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        
        <li><a href="<?php echo e(route('index')); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        
        <li><a href="<?php echo e(route ('dataEmployee')); ?>"> <i class="fa fa-table"></i> <span>Data Empolyee</span></a></li>
        <li><a href=" <?php echo e(route ('temperature')); ?>"><i class="fa fa-table"></i> <span>Temperatur Tracking</span></a></li>
       <!--
        <li><a href="DataTemperaturTracking.html"><i class="fa fa-table"></i> <span>Data Temperatur Tracking</span></a></li>
        
        <li><a href="ProfileEmployee.html"><i class="fa fa-edit"></i> <span>Profile Employee</span></a></li>
        <li><a href="TemperaturTracking.html"><i class="fa fa-edit"></i> <span>Temperatur Tracking</span></a></li>
        <li class="active"><a href="ChangePassword.html"><i class="fa fa-edit"></i> <span>Change Password</span></a></li>
      </ul>

  -->

    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Temperature
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Forms</a></li>
        <li class="active"><a href="#"><i class="fa fa-edit"></i> Edit Temperature</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- /.col (left) -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
              <!-- /.box-header -->

              <!-- form start -->
              <form role="form" action="<?php echo e(route('updateTemperature', $datas)); ?>" method="post">
              <?php echo method_field('PUT'); ?>
              <?php echo e(csrf_field()); ?>

                <div class="box-body">
                  <div class="form-group">
                      <label for="nama">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Enter nama" value="<?php echo e($datas->name); ?>">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputUsername">Username</label>
                      <input type="text" class="form-control" name="username" placeholder="username" value="<?php echo e($datas->username); ?>">
                  </div>

                  <div class="form-group">
                        <label for="exampleInputTemperature">Body Temperature</label>
                        <input type="number" class="form-control" name="temperature" placeholder="Temperature" value="<?php echo e($datas->temperature); ?>">
                    </div>
                    <div class="form-group">
                        <label for="examplePersonalEnabled">Enabled</label>
                        <input type="text" class="form-control" name="enabled" placeholder="enabled" value="<?php echo e($datas->enabled); ?>">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea type="text" class="form-control" name="description" placeholder="Description" value="<?php echo e($datas->description); ?>"></textarea>
                    </div>
                  <div class="box-footer">
                  <button  type="submit" class="btn btn-primary" method="post">Submit</button>
                </div>
              </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">` 
      \
      <b>Version</b> 3.5.0
    </div>
    <strong>Copyright &copy; 2021 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo e(asset ('bower_components/jquery/dist/jquery.min.js')); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(asset ('bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<!-- Select2 -->
<script src="<?php echo e(asset ('bower_components/select2/dist/js/select2.full.min.js')); ?>"></script>
<!-- date-range-picker -->
<script src="<?php echo e(asset ('bower_components/moment/min/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset ('bower_components/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo e(asset ('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')); ?>"></script>
<!-- bootstrap time picker -->
<script src="<?php echo e(asset ('plugins/timepicker/bootstrap-timepicker.min.js')); ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo e(asset ('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"></script>
<!-- FastClick -->
<script src="<?php echo e(asset ('bower_components/fastclick/lib/fastclick.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset ('dist/js/adminlte.min.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset ('dist/js/demo.js')); ?>"></script>
<!-- Page script -->
<script>
  $(function () {
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
</body>
</html>
<?php /**PATH /Users/admin_fintopia/Documents/Indoportal-Fintopia/resources/views/Temperature/EditTemperature.blade.php ENDPATH**/ ?>