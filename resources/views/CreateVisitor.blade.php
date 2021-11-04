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

<style type="text/css">
    .responsive {
      width: 100%;
      max-width: 130px;
      height: auto;
}
</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{ route('login') }}" class="logo">
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
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <li class="active"><a href="{{ route('createVisitor') }}"><i class="fa fa-edit"></i> <span>Visitor Form</span></a></li>
        <li><a href="{{ route('login') }}"><i class="glyphicon glyphicon-arrow-left"></i> <span>Back to Login</span></a></li>
      </ul>
    </section>
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
        <div class="row">
          <!-- /.col (left) -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
              <form role="form" action="{{ route('storeVisitor') }}" method="post" onchange="validateImage()" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputVisitorName">Visitor Name: </label>
                    <h6 class="text-danger">* Wajib di isi</h6>
                    <input type="text" class="form-control" name="visitor_name" placeholder="Visitor Name" pattern="([a-zA-Z]+ ?)*$" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputVisitorEmail">Visitor Email: </label>
                    <h6 class="text-danger">* Wajib di isi</h6>
                    <input type="email" class="form-control" name="visitor_email" placeholder="Visitor Email" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputVisitorInformation">Visitor Address or Company:</label>
                    <h6 class="text-danger">* Wajib di isi</h6>
                    <input type="text" class="form-control" name="visitor_information" placeholder="Visitor Information" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputMobileNumber">Visitor Mobile Number: </label>
                    <h6 class="text-danger">* Wajib di isi, Numeric 10-12 Digit</h6>
                    <input type="tel" class="form-control" name="visitor_mobile_number" placeholder="Mobile Number" pattern="[0-9]{10,12}" required>
                  </div>
                  <div class="form-group">
                  <label>Reason Purpose:</label>
                  <h6 class="text-danger">* Wajib di isi</h6>
                      <select class="form-control" name= "reason_for_visit" required>
                          <option></option>
                          <option>Interview</option>
                          <option>Meeting</option>
                          <option>Complain</option>
                          <option>Other</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPersonVisiting">Person/Departement Visiting: </label>
                      <h6 class="text-danger">* Wajib di isi</h6>
                      <input type="text" class="form-control" name="person_visiting" placeholder="Person Visiting" required>
                  </div>
                  <div class="form-group">
                        <label for="exampleInputTemperature">Body Temperature</label>
                        <h6 class="text-danger">* Wajib di isi</h6>
                        <input type="number" maxlength="3" step="0.1" max="39.0" min="34.0" value="36.0" class="form-control" name="body_temperature" placeholder="Temperature" required>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputVisitorAccessCard">Visitor Access Card: </label>
                      <h6 class="text-danger">* Wajib di isi, Numeric Max 4 Digit</h6>
                      <input type="text" class="form-control" pattern="[0-9]{4,4}" name="visitor_access_card" placeholder="visitor Access Card" required>
                  </div>
                  <div class="form-group">
                        <label>Input Date/Time</label>
                        <input type="datetime" class="form-control" name="date_in_visitor" autocomplete="on" value="<?php echo date("Y-m-d H:i:s"); ?>">
                  </div>
                  <div class="form-group">
                        <label>Estimate Time Out</label>
                        <input type="datetime-local" data-date-format="dd-mm-yyyy H:i:s" class="form-control" name="time_out">
                  </div>
                  <div class="form-group">
                        <label>Description:</label>
                        <h6 class="text-danger">* Wajib di isi</h6>
                        <input type="text" class="form-control" name="description" placeholder="description" required></input>
                  </div>
                  <div class="form-group">
                      <label class="form-label" for="photo">Photo</label>
                      <h6 class="text-danger">* Wajib di isi</h6>
                      <img class="img-preview img-fluid mb-0 col-sm-2 responsive">
                      <input type="file" accept="image/*" class="form-control" id="img" onchange="previewImage()" name="photo" required>
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary"  method="post">Submit</button>
                  </div>
                </div>
              </div>
            </form>
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
<!-- ./wrapper -->

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

  function previewImage(){

    const photo = document.querySelector('#photo');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(photo.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result;
    }
  };

  function validateImage() {
    var formData = new FormData();
    var file = document.getElementById("img").files[0];
    formData.append("Filedata", file);
    var t = file.type.split('/').pop().toLowerCase();
    if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
        alert('Please select a valid image file');
        document.getElementById("img").value = '';
        return false;
    }
    
    var fsize = (file.size / 1024 / 1024).toFixed(2);
    if (fsize > 2 ) {
        alert('Max Upload size is 2MB only');
        document.getElementById(id).value = '';
        return false;
    }
    return true;
  }

</script>

@include('sweetalert::alert')

</body>
</html>
