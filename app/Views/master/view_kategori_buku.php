<!-- Layout -->
<?= $this->extend('layout/layout_adminlte_top') ?>
<!-- end Layout -->

<!-- Add these lines to include Bootstrap and Simple Datatables from CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css">

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
                            <table id="kategori" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Kategori</th>
                                        <th>Nama</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($item['model'] as $kategori) : ?>
                                        <tr>
                                            <td><?= $kategori['id_kategori']; ?></td>
                                            <td><?= $kategori['kd_kategori']; ?></td>
                                            <td><?= $kategori['nama_kategori']; ?></td>
                                            <td><?= $kategori['keterangan']; ?></td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $kategori['id_kategori']; ?>">
                                                    Delete
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="delete<?= $kategori['id_kategori']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Yakin?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <form action="<?= site_url('master/kategoribuku/delete/' . $kategori['id_kategori']); ?>" method="post">
                                                                    <input type="hidden" name="_method" value="DELETE">
                                                                    <!-- Button trigger modal -->
                                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Table -->

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Add the Bootstrap and Simple Datatables script tags above the initialization script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"></script>

<!-- Simple Datatable Initialization Script -->
<script>
    // Wrap the initialization script inside a DOM ready event
    document.addEventListener('DOMContentLoaded', function() {
        let table1 = document.querySelector('#kategori');
        let dataTable = new simpleDatatables.DataTable(table1);
    });
</script>

<!-- End Section -->
<?= $this->endSection() ?>
<!-- End  -->
