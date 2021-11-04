<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Indoportal Fintopia</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset ('bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset ('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{ asset ('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{ asset ('plugins/timepicker/bootstrap-timepicker.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset ('dist/css/skins/_all-skins.min.css') }}">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{ route ('index') }}" class="logo">
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
              <img src="{{ asset ('dist/img/avatar5.png') }}" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{ Auth::user()->fullname}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="{{ asset ('dist/img/avatar5.png') }}" class="img-circle" alt="User Image">

                <p>
                {{ Auth::user()->fullname }} - {{ Auth::user()->username }}
                  <small>Member since {{ Auth::user()->created_at }}</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a>
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
          <img src="{{ asset ('dist/img/avatar5.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->fullname }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> {{ Auth::user()->username }}</a>
        </div>
      </div>
      
      
      <!-- sidebar menu: : style can be found in sidebar.less -->

      
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        
        <li><a href="{{ route('index') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="{{ route ('dataProfile') }}"><i class="glyphicon glyphicon-user"></i><span>Profile Employee</span></a></li>
        @can('admin')
        <li class="header">ADMINISTRATOR</li>
        <li><a href="{{ route ('dataEmployee') }}"> <i class="glyphicon glyphicon-list-alt"></i> <span>Data Empolyee</span></a></li>
        <li><a href=" {{ route ('temperature') }}"><i class="glyphicon glyphicon-list-alt"></i> <span>Data Temperatur</span></a></li>
        <li><a href="{{ route('dataVisitor') }}"><i class="glyphicon glyphicon-list-alt"></i> <span>Data Visitor</span></a></li>
        @endcan
        <li class="header">USER</li>
        <li><a href="{{ route ('temperatureUser') }}"><i class="fa fa-edit"></i><span>Input Temperature</span></a></li>
        <li><a href="{{ route ('changePassword') }}"><i class="glyphicon glyphicon-cog"></i><span>Change Password</span></a></li>
        <li class="header">ACTION</li>
        <li><a href="{{ route('logout') }}"><i class="glyphicon glyphicon-log-out"></i><span>Logout</span></a></li>
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
        Edit Employee
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Forms</a></li>
        <li class="active"><a href="#"><i class="fa fa-edit"></i> Edit Employee</a></li>
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
              <form role="form" action="{{ route('updateEmployee' , $datas) }}" method="post"> 
              @method('PUT')
              {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group">
                      <label for="fullnama">Fullame</label>
                      <input type="text" class="form-control" name="fullname" placeholder="Enter fullnama" value="{{ $datas->fullname }}">
                  </div>
                  <div class="form-group">
                      <label>Role</label>
                      <select class="form-control" name= "role">
                          <option <?php if($datas->role == 'User') { echo "selected"; } ?>>User</option>
                          <option <?php if($datas->role == 'Admin') { echo "selected"; } ?>>Admin</option>
                          <option <?php if($datas->role == 'Asset') { echo "selected"; } ?>>Asset</option>
                          <option <?php if($datas->role == 'HR') { echo "selected"; } ?>>HR</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPosition">Position</label>
                      <input type="text" class="form-control" name="position" placeholder="position" value="{{ $datas->position }}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputDepartment">Department</label>
                      <input type="text" class="form-control" name="department" placeholder="department" value="{{ $datas->department }}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputUsername">Username</label>
                      <input type="text" class="form-control" name="username" placeholder="username" value="{{ $datas->username }}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail">Email</label>
                      <input type="text" class="form-control" name="email" placeholder="email" value="{{ $datas->email }}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputMobileNumber">Mobile Number</label>
                      <input type="text" class="form-control" name="mobile number" placeholder="mobile number" value="{{ $datas->mobile_number }}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputAddres">Addres</label>
                      <input type="text" class="form-control" name="addres" placeholder="addres" value="{{ $datas->addres }}">
                  </div>
                </div>
                <!-- /.box-body -->
  
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
<script src="{{ asset ('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset ('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset ('bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<!-- date-range-picker -->
<script src="{{ asset ('bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset ('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset ('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- bootstrap time picker -->
<script src="{{ asset ('plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset ('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset ('bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset ('dist/js/demo.js') }}"></script>
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