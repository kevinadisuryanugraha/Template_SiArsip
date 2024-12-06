<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo BASE_URL; ?>/pages/index.php">SI Arsip</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!"><i
            class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <!-- <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search"
                aria-describedby="basic-addon2" />
            <div class="input-group-append">
                <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form> -->
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#!" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/login.php">Logout</a>
            </div>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link mt-3" href="<?php echo BASE_URL; ?>/pages/index.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <a class="nav-link" href="<?php echo BASE_URL; ?>/pages/arsip/arsip_daftar.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-solid fa-folder-open"></i></div>
                        Data Arsip
                    </a>
                    <a class="nav-link" href="<?php echo BASE_URL; ?>/pages/kategori/kategori.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                        Data Kategori
                    </a>
                    <a class="nav-link" href="<?php echo BASE_URL; ?>/pages/users/user_daftar.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-solid fa-users"></i></div>
                        Data User
                    </a>
                    <a class="nav-link" href="<?php echo BASE_URL; ?>/pages/riwayat-unduh/riwayat_unduh_daftar.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-solid fa-business-time"></i></div>
                        Riwayat Unduh
                    </a>
                    <a class="nav-link" href="<?php echo BASE_URL; ?>/pages/ganti-password/ganti-password.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-solid fa-key"></i></div>
                        ganti Password
                    </a>
                    <a class="nav-link" href="<?php echo BASE_URL; ?>/login.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-solid fa-door-open"></i></div>
                        Logout
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Start Bootstrap
            </div>
        </nav>
    </div>