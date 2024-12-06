<?php
include_once('../../inc/header.php');
include_once('../../inc/sidebar.php');

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Ganti Password</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/pages/index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Form Ganti Password</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-solid fa-key mr-1"></i>
                    Ganti Password
                </div>
                <div class="card-body">
                    <form method="POST">

                        <!-- Input Password -->
                        <div class="form-group">
                            <label for="exampleInputPassword1">Masukkan Password Baru</label>
                            <input id="exampleInputPassword" type="text" class="form-control" placeholder="Masukkan Password baru" required autofocus>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include_once('../../inc/footer.php'); ?>