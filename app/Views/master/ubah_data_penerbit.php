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
            <h1 class="m-0"> Ubah Data Penerbit </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Data Master</li>
              <li class="breadcrumb-item"><a href="/master/datapenerbit"> Data Penerbit</a></li>
              <li class="breadcrumb-item active">Ubah Data Penerbit</li>
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
            <h3 class="card-title">Form Data Penerbit</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form class="form-horizontal" method="post" action="<?= site_url('master/penerbit/ubah/').$datapenerbit->id_penerbit; ?>">
            <div class="card-body">              
              <div class="form-group row">
                <label for="nm_penerbit" class="col-sm-2 col-form-label">Nama Penerbit</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nm_penerbit" placeholder="Nama Penerbit" value="<?= $datapenerbit->nm_penerbit ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="kt_penerbit" class="col-sm-2 col-form-label">Kota Penerbit</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="kt_penerbit" placeholder="Kota Penerbit" value="<?= $datapenerbit->kt_penerbit ?>">
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-info">Simpan</button>
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


