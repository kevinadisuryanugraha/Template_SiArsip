<?php
include_once('../../inc/header.php');
include_once('../../inc/sidebar.php');

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="d-flex mt-4">
                <h1>Data Petugas</h1>
            </div>
            <ol class="breadcrumb mb-4 d-flex">
                <li class="breadcrumb-item py-2"><a href="<?php echo BASE_URL; ?>/pages/index.php">Dashboard</a></li>
                <li class="breadcrumb-item active py-2">Data Petugas</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Tabel Data Petugas
                    <a href="petugas_tambah.php" class="btn btn-primary float-right">
                        <i class="fas fa-plus mr-2"></i>Tambah Petugas
                    </a>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td class="col-1 align-middle">1</td>
                                    <td><img style="width: 50px;" src="<?php echo BASE_URL; ?>/assets/img/download.jpeg" alt=""></td>
                                    <td class="align-middle"><a href="#"><u>Kevin</u></a></td>
                                    <td class="align-middle">Kevin Ganteng</td>
                                    <td class="col-md-2 text-center align-middle">
                                        <a href="petugas_update.php" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i></a>
                                        &nbsp;
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo BASE_URL; ?>assets/demo/datatables-demo.js"></script>

    <?php include_once('../../inc/footer.php'); ?>