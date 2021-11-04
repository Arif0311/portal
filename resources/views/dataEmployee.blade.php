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
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">

  <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{ route ('index') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>I</b>Fi</span>
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
          <p>{{ Auth::user()->fullname}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> {{ Auth::user()->username }}</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="{{ route ('index') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="{{ route ('dataProfile') }}"><i class="glyphicon glyphicon-user"></i><span>Profile Employee</span></a></li>
        @can('admin')
        <li class="header">ADMINISTRATOR</li>
        <li class="active"><a href= "{{ route ('dataEmployee') }}"><i class="glyphicon glyphicon-list-alt"></i> <span>Data Empolyee</span></a></li>
        <li ><a href=" {{ route ('temperature') }}"><i class="glyphicon glyphicon-list-alt"></i> <span>Data Temperatur</span></a></li>
        <li><a href="{{ route('dataVisitor') }}"><i class="glyphicon glyphicon-list-alt"></i> <span>Data Visitor</span></a></li>
        @endcan
        <li class="header">USER</li>
        <li><a href="{{ route ('temperatureUser') }}"><i class="fa fa-edit"></i><span>Input Temperature</span></a></li>
        <li><a href="{{ route ('changePassword') }}"><i class="glyphicon glyphicon-cog"></i><span>Change Password</span></a></li>
        <li class="header">ACTION</li>
        <li><a href="{{ route('logout') }}"><i class="glyphicon glyphicon-log-out"></i><span>Logout</span></a></li>
      </ul>

    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Employee
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Employee</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body" >
              <div class="table table-responsive">
                <table id="example1" class="table table-responsive-sm table-bordered table-striped table-sm" >
                  <thead>
                    <div class="card-tools">
                      <a href="employee/create" class="btn btn-success" style="background-color:#04d984" method="GET">Create Employee</a>
                    </div>
                    <br/>
                    <tr>
                      <th>No</th>
                      <th>Fullname</th>
                      <th>Role</th>
                      <th>Position</th>
                      <th>Department</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Mobile Number</th>
                      <th>Addres</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($datas as $key=>$data)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $data->fullname}}</td>
                      <td>{{ $data->role}}</td>
                      <td>{{ $data->position}}</td>
                      <td>{{ $data->department}}</td>
                      <td>{{ $data->username}}</td>
                      <td>{{ $data->email}}</td>
                      <td>{{ $data->mobile_number}}</td>
                      <td>{{ $data->addres}}</td>
                      <td>
                        <a type="button" class="btn btn-warning" href="{{ route('editEmployee' , $data) }}"><i class="fa fa-edit"></i></a>
                        <form role="form" method="post" action="">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <a type="button" class="btn btn-danger delete-confirm" href="{{ route ('deleteEmployee' , $data) }}"><i class="fa fa-close"></i></a>
                            </div>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
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


<!-- ./script -->

<!-- JS Libraies -->
<script src="{{ asset('plugins/sweetalert2/sweetalert.min.js') }}"></script>


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

<script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- <script src="{{ asset('js/jquery-3.6.0.slim.js') }}"></script> -->

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
  });

  $('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = url;
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }
      });
});
</script>

@include('sweetalert::alert')

</body>
</html>