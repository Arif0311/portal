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
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('dist/css/AdminLTE.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('dist/css/skins/_all-skins.min.css')); ?>">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="<?php echo e(route ('index')); ?>" class="logo">
      <span class="logo-mini"><b>I</b>Fi</span>
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
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo e(asset ('dist/img/avatar5.png')); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo e(Auth::user()->fullname); ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?php echo e(asset ('dist/img/avatar5.png')); ?>" class="img-circle" alt="User Image">
                <p>
                <?php echo e(Auth::user()->fullname); ?> - <?php echo e(Auth::user()->username); ?>

                  <small>Member since <?php echo e(Auth::user()->created_at); ?></small>
                </p>
              </li>
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
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo e(Auth::user()->username); ?></a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <li><a href="<?php echo e(route ('index')); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="<?php echo e(route ('dataProfile')); ?>"><i class="glyphicon glyphicon-user"></i><span>Profile Employee</span></a></li>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
        <li class="header">ADMINISTRATOR</li>
        <li><a href= "<?php echo e(route ('dataEmployee')); ?>"><i class="glyphicon glyphicon-list-alt"></i> <span>Data Empolyee</span></a></li>
        <li><a href=" <?php echo e(route ('temperature')); ?>"><i class="glyphicon glyphicon-list-alt"></i><span>Data Temperatur</span></a></li>
        <li><a href="<?php echo e(route('dataVisitor')); ?>"><i class="glyphicon glyphicon-list-alt"></i> <span>Data Visitor</span></a></li>
        <?php endif; ?>
        <li class="header">USER</li>
        <li  class="active"><a href="<?php echo e(route ('temperatureUser')); ?>"><i class="fa fa-edit"></i><span>Input Temperature</span></a></li>
        <li><a href="<?php echo e(route ('changePassword')); ?>"><i class="glyphicon glyphicon-cog"></i><span>Change Password</span></a></li>
        <li class="header">ACTION</li>
        <li><a href="<?php echo e(route('logout')); ?>"><i class="glyphicon glyphicon-log-out"></i><span>Logout</span></a></li>
      </ul>
    </section>
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Input Temperature
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <div class="table table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <div class="card-tools">
                      <a href="/temperatureUser/create" class="btn btn-success" style="background-color:#04d984" method="GET">Input Temperature</a>
                    </div>
                    <br/>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Username</th>
                      <th>Temperature</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($loop->iteration); ?></td>
                      <td><?php echo e($data->fullname); ?></td>
                      <td><?php echo e($data->username); ?></td>
                      <td><?php echo e($data->temperature); ?></td>
                      <td><?php echo e($data->inputDate); ?></td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <strong>Financial Service</strong>
    </div>
    <strong>PT.Indonesia Fintopia Technology &copy; 2021.</strong> 
  </footer>
</div>


<!-- ./script -->

<!-- jQuery 3 -->
<script src="<?php echo e(asset ('bower_components/jquery/dist/jquery.min.js')); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(asset ('bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<!-- DataTables -->
<script src="<?php echo e(asset ('bower_components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset ('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo e(asset ('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"></script>
<!-- FastClick -->
<script src="<?php echo e(asset ('bower_components/fastclick/lib/fastclick.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset ('dist/js/adminlte.min.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset ('dist/js/demo.js')); ?>"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH /Users/admin_fintopia/Documents/Indoportal-Fintopia 2/resources/views/user/TemperatureUser.blade.php ENDPATH**/ ?>