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
            <h1 class="m-0"> Kategori Buku </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Data Master</li>
              <li class="breadcrumb-item active">Kategori Buku</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        
        <!-- Table -->
        <div class="row">
          <div class="col-12">
            <div style="text-align: right; padding-bottom: 10px;">
              <button type="button" class="btn btn-success">Refresh</button>
              <a href="/master/kategoribuku/tambah" type="button" class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Reason</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                      <td>
                        <a type="button" class="btn btn-sm btn-info">
                          <i class="fas fa-info"></i>
                        </a>
                        <a type="button" class="btn btn-sm btn-secondary">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a type="button" class="btn btn-sm btn-danger">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>219</td>
                      <td>Alexander Pierce</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-warning">Pending</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                      <td>
                        <a type="button" class="btn btn-sm btn-info">
                          <i class="fas fa-info"></i>
                        </a>
                        <a type="button" class="btn btn-sm btn-secondary">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a type="button" class="btn btn-sm btn-danger">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>657</td>
                      <td>Bob Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-primary">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                      <td>
                        <a type="button" class="btn btn-sm btn-info">
                          <i class="fas fa-info"></i>
                        </a>
                        <a type="button" class="btn btn-sm btn-secondary">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a type="button" class="btn btn-sm btn-danger">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>175</td>
                      <td>Mike Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-danger">Denied</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                      <td>
                        <a type="button" class="btn btn-sm btn-info">
                          <i class="fas fa-info"></i>
                        </a>
                        <a type="button" class="btn btn-sm btn-secondary">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a type="button" class="btn btn-sm btn-danger">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- End Table -->

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- End Section -->
<?= $this->endSection() ?>
<!-- End  -->


