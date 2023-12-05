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
        
        <div class="card">
          <div class="card-body">
            <?php foreach ($item['penerbit'] as $data) : ?>
              <p>
                <?= $data->id_penerbit ?> : <?= $data->nm_penerbit ?>
              </p>
            <?php endforeach ?>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <?php foreach ($datapenerbit as $data) : ?>
              <p>
                <?= $data->id_penerbit ?> : <?= $data->nm_penerbit ?>
              </p>
            <?php endforeach ?>
          </div>
        </div>

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- End Section -->
<?= $this->endSection() ?>
<!-- End  -->


