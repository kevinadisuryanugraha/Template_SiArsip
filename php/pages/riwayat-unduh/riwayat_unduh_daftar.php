<?php
include_once('../../inc/header.php');
include_once('../../inc/sidebar.php');

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="d-flex mt-4">
                <h1>Data Riwayat</h1>
            </div>
            <ol class="breadcrumb mb-4 d-flex">
                <li class="breadcrumb-item py-2"><a href="<?php echo BASE_URL; ?>/pages/index.php">Dashboard</a></li>
                <li class="breadcrumb-item active py-2">Data Riwayat Unduh Arsip</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Tabel Data Riwayat Unduh Arsip

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Waktu Upload</th>
                                    <th>User</th>
                                    <th>Arsip yang di unduh</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Waktu Upload</th>
                                    <th>User</th>
                                    <th>Arsip yang di unduh</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td class="col-1">1</td>
                                    <td>17:07:30 12-10-2024</td>
                                    <td>Kevin Adisurya</td>
                                    <td><a href="#">Surat Kesehatan Pegawai</a></td>
                                </tr>
                                <tr>
                                    <td class="col-1">1</td>
                                    <td>17:07:30 12-10-2024</td>
                                    <td>Kevin Adisurya</td>
                                    <td><a href="#">Surat Kesehatan Pegawai</a></td>
                                </tr>
                                <tr>
                                    <td class="col-1">1</td>
                                    <td>17:07:30 12-10-2024</td>
                                    <td>Kevin Adisurya</td>
                                    <td><a href="#">Surat Kesehatan Pegawai</a></td>
                                </tr>
                                <tr>
                                    <td class="col-1">1</td>
                                    <td>17:07:30 12-10-2024</td>
                                    <td>Kevin Adisurya</td>
                                    <td><a href="#">Surat Kesehatan Pegawai</a></td>
                                </tr>
                                <tr>
                                    <td class="col-1">1</td>
                                    <td>17:07:30 12-10-2024</td>
                                    <td>Kevin Adisurya</td>
                                    <td><a href="#">Surat Kesehatan Pegawai</a></td>
                                </tr>
                                <tr>
                                    <td class="col-1">1</td>
                                    <td>17:07:30 12-10-2024</td>
                                    <td>Kevin Adisurya</td>
                                    <td><a href="#">Surat Kesehatan Pegawai</a></td>
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