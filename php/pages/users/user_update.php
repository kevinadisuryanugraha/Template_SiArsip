<?php
include_once('../../inc/header.php');
include_once('../../inc/sidebar.php');

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Form Edit User</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/pages/index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="user_daftar.php">Data User</a></li>
                <li class="breadcrumb-item active">Form Edit User</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">

                        <!-- Input Nama -->
                        <div class="form-group">
                            <label for="exampleInputUser1">Nama</label>
                            <input id="exampleInputUser" type="text" class="form-control" required autofocus>
                        </div>

                        <!-- Input Username -->
                        <div class="form-group">
                            <label for="exampleInputUsername1">Username</label>
                            <input id="exampleInputUsername" type="text" class="form-control" required>
                        </div>

                        <!-- Input Password -->
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input id="exampleInputPassword" type="password" class="form-control" required>
                        </div>

                        <!-- Input File -->
                        <div class="form-group">
                            <label for="exampleInputFile1">Upload Foto</label>
                            <input id="exampleInputFile1" type="file" class="form-control-file" required>
                        </div>
                        <input type="submit" class="btn btn-primary mr-3" value="Simpan">
                        <a href="user_daftar.php" class="btn btn-link"><u>Kembali</u></a>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include_once('../../inc/footer.php'); ?>