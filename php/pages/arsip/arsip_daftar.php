<?php
include_once('../../inc/header.php');
include_once('../../inc/sidebar.php');

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="d-flex mt-4">
                <h1>Data Arsip</h1>
            </div>
            <ol class="breadcrumb mb-4 d-flex">
                <li class="breadcrumb-item py-2"><a href="<?php echo BASE_URL; ?>/pages/index.php">Dashboard</a></li>
                <li class="breadcrumb-item active py-2">Data Arsip</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Tabel Data Arsip
                    <a href="arsip_tambah.php" class="btn btn-primary float-right">
                        <i class="fas fa-solid fa-upload mr-2"></i>Tambah Arsip
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Waktu Upload</th>
                                    <th>Arsip</th>
                                    <th>Kategori</th>
                                    <th>Petugas</th>
                                    <th>Keterangan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Waktu Upload</th>
                                    <th>Arsip</th>
                                    <th>Kategori</th>
                                    <th>Petugas</th>
                                    <th>Keterangan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td class="align-middle">1</td>
                                    <td class="col-2">17:07:30 12-10-2024</td>
                                    <td class="col-3">
                                        <a href="#">Surat-cuti-sakit-pegawai.pdf</a>
                                    </td>
                                    <td class="align-middle">Surat Kesehatan Pegawai</td>
                                    <td class="align-middle">Kevin Adisurya</td>
                                    <td class="col-2 align-middle">Contoh Surat Cuti Sakit pegawai Baru</td>
                                    <td class="col-3 text-center align-middle">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="#" class="btn btn-outline-primary"><i class="fas fa-solid fa-download"></i></a>
                                            <a href="arsip_preview.php" class="btn btn-outline-secondary"><i class="fas fa-solid fa-eye mr-2"></i>Pratinjau</a>
                                            <a href="#" class="btn btn-outline-danger"><i class="fas fa-solid fa-trash"></i></a>
                                        </div>
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