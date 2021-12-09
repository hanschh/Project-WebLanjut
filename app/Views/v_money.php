<?= $this->extend('template'); ?>
<<<<<<< HEAD

<?= $this->section('content'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="/assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"> Money.inc</i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/auth/logout" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/admin" class="brand-link">
                <img src="/assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Money.inc</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/assets/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Admin</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li>
                            <a href="/dashboard" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="/admin" class="nav-link">
                                <i class="nav-icon fas fa-book-open"></i>
                                <p>
                                    Data Tabungan
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Tabungan</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <li class="breadcrumb-item active">Data Tabungan</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
=======

<?= $this->section('content'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="/assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"> Money.inc</i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
                <li class="nav-item">
              <a href="/auth/logout" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i> Logout  
              </a>
            </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/admin" class="brand-link">
                <img src="/assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Money.inc</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/assets/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Admin</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li>
                            <a href="/dashboard" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="/admin" class="nav-link">
                                <i class="nav-icon fas fa-book-open"></i>
                                <p>
                                    Data Tabungan
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Tabungan</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <li class="breadcrumb-item active">Data Tabungan</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <div class="container">
            <a class="btn btn-primary" href="<?= base_url('datacontroller/form_create') ?>"><i class="fas fa-plus"></i> Create</a>
        </div>

<div class="container pt-3">

    <div class="card">
        <div class="card-header bg-black text-white">
            <h4 class="card-title" style="text-align: center;">Data Nasabah</h4>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="table-secondary">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nomor Rekening</th>
                            <th>Saldo</th>
                            <th>Bunga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $i => $r) { ?>
                            <tr>
                                <th scope="row"><?= $i + 1; ?></th>
                                <td><?= $r['nama']; ?></td>
                                <td><?= $r['no_rekening']; ?></td>
                                <td>Rp. <?= $r['nominal_uang']; ?>,-</td>
                                <td>Rp. 5000,-</td>
                                <td>
                                    <a class="btn btn-warning" href="<?= base_url('datacontroller/form_update/' . $r['id']) ?>"><i class="fas fa-edit"></i> Update</a>
                                    <a class="btn btn-danger" href="<?= base_url('datacontroller/delete/' . $r['id']) ?>"><i class="fas fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>
>>>>>>> 49f483481eb8efa084aef888374cf875d7069e9a
            </div>
            <div class="container">
                <a class="btn btn-primary" href="<?= base_url('datacontroller/form_create') ?>"><i class="fas fa-plus"></i> Create</a>
            </div>

            <div class="container pt-3">

                <div class="card">
                    <div class="card-header bg-black text-white">
                        <h4 class="card-title" style="text-align: center;">Data Nasabah</h4>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead class="table-secondary">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Nomor Rekening</th>
                                        <th>Saldo</th>
                                        <th>Bunga</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $i => $r) { ?>
                                        <tr>
                                            <th scope="row"><?= $i + 1; ?></th>
                                            <td><?= $r['nama']; ?></td>
                                            <td><?= $r['no_rekening']; ?></td>
                                            <td>Rp. <?= $r['nominal_uang']; ?>,-</td>
                                            <td>Rp. 5000,-</td>
                                            <td>
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="_method" value="Delete">
                                                <a class="btn btn-warning" href="<?= base_url('datacontroller/form_update/' . $r['id']) ?>"><i class="fas fa-edit"></i> Update</a>
                                                <a class="btn btn-danger" href="<?= base_url('datacontroller/delete/' . $r['id']) ?>"><i class="fas fa-trash" onclick="return confirm('Apakah anda yakin menghapus Post ini ?'); "></i> Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <br>
                </div>
            </div>
            </section>

            <!-- /.content -->
        </div>
<<<<<<< HEAD
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; Web Lanjut HDI. </strong>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
=======
        <br>
    </div>
</div>
</section>

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; Web Lanjut HDI. </strong>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
>>>>>>> 49f483481eb8efa084aef888374cf875d7069e9a
    <!-- ./wrapper -->

    <?= $this->endSection(); ?>