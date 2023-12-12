<!-- Layout -->
<?= $this->extend('layout/layout_adminlte_top') ?>
<!-- end Layout -->

<!-- Section -->
<?= $this->section('content') ?>
<!-- End -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Ubah Data User </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('users') ?>"> Manajemen Users</a></li>
              <li class="breadcrumb-item active">Ubah Data User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <!-- notifications -->
        <?= view('App\Views\layout\notifications') ?>
        <!-- Form -->
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Form Data User</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form class="form-horizontal" method="post" action="<?= site_url('users/ubah/').$datauser['id_user']; ?>">
            <?= csrf_field() ?>
            <div class="card-body">
                <div class="form-group row">
                    <div class="col">
                        <label for="firstname">First name</label>
                        <input class="form-control" required type="text" name="firstname" value="<?= $datauser['firstname'];?>" placeholder="First name"/>
                    </div>
                    <div class="col">
                        <label for="lastname">Last name</label>
                        <input class="form-control" required type="text" name="lastname" value="<?= $datauser['lastname'];?>" placeholder="Last name"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Nickname</label>
                    <input class="form-control" required type="text" name="nickname" value="<?= $datauser['nickname'];?>" placeholder="Nick name"/>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" required type="text" name="username" value="<?= $datauser['username'];?>" placeholder="Username" readonly/>
                </div>                

                <div class="text-right">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
                    <button type="submit" class="btn btn-primary" name="simpanButton"><i class="fas fa-plus-circle"></i> Save</button>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Simpan</button>
                </div>
            </div>
            <!-- /.card-footer -->
          </form>
        </div>
        <!-- End Form -->

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- End Section -->
<?= $this->endSection() ?>
<!-- End  -->


