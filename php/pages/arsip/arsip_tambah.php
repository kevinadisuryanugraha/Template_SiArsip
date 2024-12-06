<?php
include_once('../../inc/header.php');
include_once('../../inc/sidebar.php');

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Tambah Arsip</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/pages/index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="arsip_daftar.php">Data Arsip</a></li>
                <li class="breadcrumb-item active">Tambah Arsip</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">

                        <!-- Input Kode Arsip -->
                        <div class="form-group">
                            <label for="exampleInputKode1">Kode Arsip</label>
                            <input id="exampleInputKode" type="text" class="form-control" required autofocus>
                        </div>

                        <!-- Input Nama Arsip -->
                        <div class="form-group">
                            <label for="exampleInputNamaArsip1">Nama Arsip</label>
                            <input id="exampleInputNamaArsip" type="text" class="form-control" required>
                        </div>

                        <!-- Input Select Kategori -->
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kategori</label>
                            <select id="exampleFormControlSelect1" class="form-control">
                                <option>Pilih Kategori</option>
                                <option>Kesehatan</option>
                                <option>Pajak</option>
                                <option>kantor</option>
                                <option>Rumah</option>
                            </select>
                        </div>

                        <!-- textarea -->
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Keterangan</label>
                            <textarea id="exampleFormControlTextarea1" class="form-control" rows="5"></textarea>
                        </div>

                        <!-- Input File -->
                        <div class="form-group">
                            <label for="exampleInputFile1">Upload File</label>
                            <input id="exampleInputFile1" type="file" class="form-control-file" required>
                        </div>

                        <input type="submit" class="btn btn-primary mr-3" value="Submit">
                        <a href="arsip_daftar.php" class="btn btn-link"><u>Kembali</u></a>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include_once('../../inc/footer.php'); ?>