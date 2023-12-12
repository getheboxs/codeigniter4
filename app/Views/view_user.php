<!-- Layout -->
<?= $this->extend('layout/layout_adminlte_table') ?>
<!-- end Layout -->

<!-- load modals -->
<?= $this->section('modals') ?>
    <!-- create user modal form -->
    <?= view('App\Views\user_add') ?>
<?= $this->endSection() ?>

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
            <h1 class="m-0"> Manajemen Users </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Users</li>
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
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addusermodal">Tambah Data</botton>
            </div>
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Username</th>
                      <th>Nickname</th>
                      <th>Realname</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      foreach ($datauser as $key=>$data) :
                    ?>
                    <tr>
                      <td><?= $key+1; ?></td>
                      <td><?= $data['username'] ?></td>
                      <td><?= $data['nickname'] ?></td>
                      <td><?= $data['firstname']." ".$data['lastname'] ?></td>                      
                      <td>
                        <a type="button" class="btn btn-sm btn-info">
                          <i class="fas fa-info"></i>
                        </a>
                        <a type="button" class="btn btn-sm btn-secondary" href="/users/preview/<?= $data['id_user'] ?>">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a type="button" class="btn btn-sm btn-danger" href="/users/delete/<?= $data['id_user'] ?>">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>                
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


