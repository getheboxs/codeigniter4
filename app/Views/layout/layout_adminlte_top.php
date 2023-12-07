<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $item['menu'] ?></title>

  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css') ?>">
  <!-- simple datatables -->
  <link rel="stylesheet" href="<?= base_url('plugins/simple-datatables/style.css') ?>">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="." class="navbar-brand">
        <img src="<?= base_url('dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item"><a href="<?= base_url() ?>" class="nav-link">Dashboard</a></li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Data Master</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="<?= base_url('master/kategoribuku') ?>" class="dropdown-item">Kategori Buku</a></li>
              <li><a href="<?= base_url('master/penerbit') ?>" class="dropdown-item">Data Penerbit</a></li>
              <li><a href="<?= base_url('master/sumberbuku') ?>" class="dropdown-item">Sumber Buku</a></li>
              <!-- End Level two -->
            </ul>
          </li>
          <li class="nav-item"><a href="<?= base_url('keanggotaan') ?>" class="nav-link">Keanggotaan</a></li>
          <li class="nav-item"><a href="<?= base_url('databuku') ?>" class="nav-link">Data Buku</a></li>
          <li class="nav-item"><a href="<?= base_url('transaksipeminjaman') ?>" class="nav-link">Transaksi Peminjaman</a></li>
          <li class="nav-item"><a href="<?= base_url('riwayatpeminjaman') ?>" class="nav-link">Riwayat Peminjaman</a></li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- /.navbar -->  

  <!-- CONTENT -->
  <?= $this->renderSection('content') ?>
  <!-- End CONTENT -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.

    <!-- CONTENT -->
    <?= $this->renderSection('bawah') ?>
    <!-- End CONTENT -->

  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('dist/js/adminlte.min.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('dist/js/demo.js') ?>"></script>
<script src="<?= base_url('plugins/simple-datatables/simple-datatables.js') ?>"></script>
</body>
</html>
