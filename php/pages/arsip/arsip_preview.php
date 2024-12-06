<?php
include_once('../../inc/header.php');
include_once('../../inc/sidebar.php');

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="d-flex mt-4">
                <h1>Pratinjau Arsip</h1>
            </div>
            <ol class="breadcrumb mb-4 d-flex">
                <li class="breadcrumb-item py-2"><a href="<?php echo BASE_URL; ?>/pages/index.php">Dashboard</a></li>
                <li class="breadcrumb-item py-2"><a href="arsip_daftar.php">Arsip Daftar</a></li>
                <li class="breadcrumb-item active py-2">Pratinjau Arsip</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-eye mr-1"></i>
                    Pratinjau Arsip
                </div>
                <div class="card-body">
                    <a href="arsip_daftar.php" class="btn btn-primary mb-3"><i class="fas fa-solid fa-arrow-left mr-1"></i>Kembali</a>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="table-responsive">
                                <table class="table border-bottom-2">
                                    <tr>
                                        <th>Kode Arsip</th>
                                        <td>MN-009</td>
                                    </tr>
                                    <tr>
                                        <th>Waktu Upload</th>
                                        <td>17:07:30 12-10-2024</td>
                                    </tr>
                                    <tr>
                                        <th>Nama File</th>
                                        <td>Surat Cuti Sakit Pegawai</td>
                                    </tr>
                                    <tr>
                                        <th>Kategori</th>
                                        <td>Surat Kesehatan Pegawai</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis File</th>
                                        <td>PDF</td>
                                    </tr>
                                    <tr>
                                        <th>Petugas Pengupload</th>
                                        <td>Jamilah Suanda</td>
                                    </tr>
                                    <tr>
                                        <th>Keterangan</th>
                                        <td>Contoh Surat Cuti Sakit Pegawai Baru</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Pratinjau Arsip</h5>
                                </div>
                                <div class="card-body">
                                    <iframe src="MAKALAH_PENGANTAR_TEKNOLOGI_INFORMASI_FA.pdf" width="100%" height="500px"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include_once('../../inc/footer.php'); ?>