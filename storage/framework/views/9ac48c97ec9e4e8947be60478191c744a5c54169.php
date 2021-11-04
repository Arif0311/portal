<?php $__env->startSection('content'); ?>
 <!-- Main content -->
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <div class="card-tools">
                    <a href="" class="btn btn-success" method="GET">Input User</a>
                  </div>
                  <br/>
                  <tr>
                    <th>No</th>
                    <th>Role</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <a type="button" class="btn btn-warning" href=""><i class="fa fa-edit"></i></a>
                      <form role="form" method="post" action="">
                          <div class="form-group">
                            <button type="submit" class="btn btn-danger"><i class="fa fa-close"></i></button>
                          </div>
                      </form>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/admin_fintopia/Documents/Indoportal-Fintopia/resources/views/user/DataUser.blade.php ENDPATH**/ ?>