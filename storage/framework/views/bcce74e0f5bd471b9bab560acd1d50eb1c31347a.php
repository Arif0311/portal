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
    <a href="<?php echo e(route ('index')); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>I</b>FI</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Indoportal</b> Fintopia</span>
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
              <span class="hidden-xs"><?php echo e(Auth::user()->fullname); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo e(asset ('dist/img/avatar5.png')); ?>" class="img-circle" alt="User Image">

                <p>
                <?php echo e(Auth::user()->fullname); ?> - <?php echo e(Auth::user()->username); ?>

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
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo e(asset ('dist/img/avatar5.png')); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo e(Auth::user()->fullname); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i><?php echo e(Auth::user()->username); ?></a>
        </div>
      </div>

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <li><a href="<?php echo e(route('index')); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="<?php echo e(route ('dataProfile')); ?>"><i class="glyphicon glyphicon-user"></i><span>Profile Employee</span></a></li>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
        <li class="header">ADMINISTRATOR</li>
        <li><a href="<?php echo e(route ('dataEmployee')); ?>"> <i class="glyphicon glyphicon-list-alt"></i> <span>Data Empolyee</span></a></li>
        <li><a href=" <?php echo e(route ('temperature')); ?>"><i class="glyphicon glyphicon-list-alt"></i> <span>Data Temperatur</span></a></li>
        <li><a href="<?php echo e(route('dataVisitor')); ?>"><i class="glyphicon glyphicon-list-alt"></i> <span>Data Visitor</span></a></li>
        <?php endif; ?>
        <li class="header">USER</li>
        <li><a href="<?php echo e(route ('temperatureUser')); ?>"><i class="fa fa-edit"></i><span>Input Temperature</span></a></li>
        <li class="active"><a href="<?php echo e(route ('changePassword')); ?>"><i class="glyphicon glyphicon-cog"></i><span>Change Password</span></a></li>
        <li class="header">ACTION</li>
        <li><a href="<?php echo e(route('logout')); ?>"><i class="glyphicon glyphicon-log-out"></i><span>Logout</span></a></li>
      </ul>
    </section>
  </aside>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Change Password</h1>
      <ol class="breadcrumb">
        <li><a href="#">Forms</a></li>
        <li class="active"><a href="#"><i class="fa fa-edit"></i> Change Password</a></li>
      </ol>
    </section>
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                  <br>
                    <form method="POST" action="<?php echo e(route ('savePassword')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-danger text-danger" role="alert"><?php echo e($error); ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if(Session('message')): ?>
                      <div class="alert alert-success" role="alert"><?php echo e(Session('message')); ?></div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="password">Current Password</label>
                        <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password" placeholder="password">
                    </div>

                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password" placeholder="new password">
                    </div>

                    <div class="form-group">
                        <label for="password">New Confirm Password</label>
                        <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password" placeholder="new confirm password">
                    </div>
                    <br>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Update Password
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
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
    <strong>PT.Indonesia Fintopia Technology &copy; 2021.</strong> 
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
</body>
</html>
<?php /**PATH /Users/admin_fintopia/Documents/Indoportal-Fintopia 2/resources/views/ChangePassword.blade.php ENDPATH**/ ?>