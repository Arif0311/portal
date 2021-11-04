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
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{ asset('plugins/timepicker/bootstrap-timepicker.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="{{ route ('index') }}" class="logo">
      <span class="logo-mini"><b>I</b>FI</span>
      <span class="logo-lg"><b>Indoportal</b> Fintopia</span>
    </a>
    <nav class="navbar navbar-static-top">
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
              <img src="{{ asset ('dist/img/avatar5.png') }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->fullname}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="{{ asset ('dist/img/avatar5.png') }}" class="img-circle" alt="User Image">

                <p>
                {{ Auth::user()->fullname }} - {{ Auth::user()->username }}
                  <small>Member since {{ Auth::user()->created_at }}</small>
                </p>
              </li>
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
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset ('dist/img/avatar5.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->fullname}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i>{{ Auth::user()->username }}</a>
        </div>
      </div>
      
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
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Create Temperature
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Forms</a></li>
        <li class="active"><a href="#"><i class="fa fa-edit"></i> Create Temperature</a></li>
      </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
            <div class="box box-primary">
                <form role="form" action="/temperatureUser/store" method="post">
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group">
                        <label>Fullame</label>
                        <input type="text" class="form-control" name="fullname" placeholder="Enter fullname" value="{{ Auth::user()->fullname }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="username" value="{{ Auth::user()->username }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTemperature">Body Temperature</label>
                        <input type="number" maxlength="3" step="0.1" max="39.0" min="34.0" value="36.0" class="form-control" name="temperature" placeholder="Temperature" required>
                    </div>
                    <div class="form-group">
                        <label>Input Date/Time</label>
                        <input type="datetime" class="form-control" data-date-format="dd-mm-yyyy H:i:s" name="inputDate" autocomplete="on" value="<?php echo date("Y-m-d H:i:s"); ?>">
                    </div>
                    <div class="box-footer">
                    <button  type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                </form>
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

<!-- jQuery 3 -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<!-- date-range-picker -->
<script src="{{ asset('bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- bootstrap time picker -->
<script src="{{ asset('plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
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

@include('sweetalert::alert')

</body>
</html>
