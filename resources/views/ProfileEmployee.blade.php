<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Indoportal Fintopia</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins -->
  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<!--
BODY TAG OPTIONS:
=================
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="{{ route ('index') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>I</b>Fi</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Indoportal</b> Fintopia</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('dist/img/avatar5.png') }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->fullname}}</span>
            </a>
            <ul class="dropdown-menu">

              <!-- The user image in the menu -->

              <li class="user-header">
                <img src="{{ asset('dist/img/avatar5.png') }}" class="img-circle" alt="User Image">
                <p>
                  {{ Auth::user()->fullname }} - {{ Auth::user()->username }}
                  <small>Member since {{ Auth::user()->created_at }}</small>
                </p>
              </li>

              <!-- Menu Footer-->
              <li class="user-body">
                <div class="pull-right">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat"> Sign out</a>
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

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('dist/img/avatar5.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->fullname }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> {{ Auth::user()->username }} </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="{{ route('index') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="active"><a href="{{ route ('dataProfile') }}"><i class="glyphicon glyphicon-user"></i><span>Profile Employee</span></a></li>
        @can('admin')
        <li class="header">ADMINISTRATOR</li>
        <li><a href="{{ route ('dataEmployee') }}"><i class="glyphicon glyphicon-list-alt"></i> <span>Data Empolyee</span></a></li>
        <li><a href="{{ route ('temperature') }}"><i class="glyphicon glyphicon-list-alt"></i><span>Data Temperatur</span></a></li>
        <li><a href="{{ route('dataVisitor') }}"><i class="glyphicon glyphicon-list-alt"></i> <span>Data Visitor</span></a></li>
        @endcan
        <li class="header">USER</li>
        <li><a href="{{ route ('temperatureUser') }}"><i class="fa fa-edit"></i><span>Input Temperature</span></a></li>
        <li><a href="{{ route ('changePassword') }}"><i class="glyphicon glyphicon-cog"></i><span>Change Password</span></a></li>
        <li class="header">ACTION</li>
        <li><a href="{{ route('logout') }}"><i class="glyphicon glyphicon-log-out"></i><span>Logout</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
      <h1 class="logo-lg">Profile Employee</h1>
      <!-- <h1 class="logo-mini"><b>Profile Employee</b></h1> -->
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
          <li class="active">Profile Employee</li>
        </ol>
    </section>
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Profile Employee</h3>
            </div>
                <br><br>
                <div class="container-fluid">
                    <form enctype="multipart/form-data">
                    
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="id">Full Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="id" placeholder="FullName" type="text" name="FullName" value="{{ Auth::user()->fullname }}" readonly>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="Position">Position</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="Position" placeholder="Position" type="text" name="Position" value="{{ Auth::user()->position}}" readonly>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="Department">Department</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="Department" placeholder="Full Name" type="text" name="Department" value="{{ Auth::user()->department}}" readonly>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="username">Username</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="username" placeholder="Username" type="text" name="Username" value="{{ Auth::user()->username }}" readonly>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="MobileNumber">Mobile Number</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="MobileNumber" minlength="10" placeholder="Mobile Number" type="text" name="MobileNumber" value="{{ Auth::user()->mobile_number}}" readonly>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="Address">Address</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="Address" placeholder="Address" type="text" name="Address" value="{{ Auth::user()->addres}}" readonly>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="Email">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="Email" placeholder="Email" type="text" name="Email" value="{{ Auth::user()->email}}" readonly>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <center>
                                            <img alt="" height="200" id="output" src=" width="200">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </form>
                </div>
            </div>
          </div>
          <div class="box-body">
        </div>
      </div>
    </section>
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

<!-- jQuery 3 -->
<script src="{{ asset ('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset ('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset ('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset ('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset ('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset ('bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset ('dist/js/demo.js') }}"></script>
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

</body>
</html>