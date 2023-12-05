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
            <h1 class="m-0"> Data Penerbit </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Data Master</li>
              <li class="breadcrumb-item active">Data Penerbit</li>
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
        <!-- Table -->
        <div class="row">
          <div class="col-12">
            <div style="text-align: right; padding-bottom: 10px;">
              <a href="/master/penerbit/tambah" type="button" class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID Penerbit</th>
                      <th>Nama Penerbit</th>
                      <th>Kota Penerbit</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      // $nomor = 1;
                      foreach ($datapenerbit as $data) :
                    ?>
                    <tr>
                      <td><?= $nomor++; ?></td>
                      <td><?= $data->id_penerbit ?></td>
                      <td><?= $data->nm_penerbit ?></td>
                      <td><?= $data->kt_penerbit ?></td>                      
                      <td>
                        <a type="button" class="btn btn-sm btn-info">
                          <i class="fas fa-info"></i>
                        </a>
                        <a type="button" class="btn btn-sm btn-secondary" href="/master/penerbit/preview/<?= $data->id_penerbit ?>">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a type="button" class="btn btn-sm btn-danger" href="/master/penerbit/delete/<?= $data->id_penerbit ?>">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
                <?= 
                  // $datapager->links();
                  $datapager->links('penerbit', 'bootstrap_pagination');
                ?>
              </div>              
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- End Table -->        

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- End Section -->
<?= $this->endSection() ?>
<!-- End  -->


