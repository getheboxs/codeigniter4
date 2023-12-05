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
            <h1 class="m-0"> Tambah Kategori Buku </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Data Master</li>
              <li class="breadcrumb-item"><a href="/master/kategoribuku"> Kategori Buku</a></li>
              <li class="breadcrumb-item active">Tambah Kategori Buku</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        
        <!-- Form -->
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Form Kategori Buku</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form class="form-horizontal">
            <div class="card-body">
              <div class="form-group row">
                <label for="kd_kategori" class="col-sm-2 col-form-label">Kode Kategori</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="kd_kategori" placeholder="Kode Kategori">
                </div>
              </div>
              <div class="form-group row">
                <label for="nm_kategori" class="col-sm-2 col-form-label">Nama Kategori</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nm_kategori" placeholder="Nama Kategori">
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


