<?php
include_once('../../inc/header.php');
include_once('../../inc/sidebar.php');

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Form Tambah Kategori</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/pages/index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="kategori.php">Data kategori</a></li>
                <li class="breadcrumb-item active">Form Tambah Kategori</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <form method="POST">

                        <!-- Input Kategori -->
                        <div class="form-group">
                            <label for="exampleInputKategori1">Nama Kategori</label>
                            <input id="exampleInputKategori" type="text" class="form-control" required autofocus>
                        </div>

                        <!-- textarea -->
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea id="keterangan" class="form-control" rows="3" required></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary mr-3" value="Submit">
                        <a href="kategori.php" class="btn btn-link"><u>Kembali</u></a>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include_once('../../inc/footer.php'); ?>