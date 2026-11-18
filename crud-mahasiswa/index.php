<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include 'template/header.php'; // Menampilkan header
    ?>
</head>
<body class="layout-fixed fixed-header fixed-footer sidebar-expand-lg sidebar-open bg-body-tertiary">
    <div class="app-wrapper">
        <?php
            include 'template/navbar.php'; //menampilkan navbar
            include 'template/sidebar.php'; // menampilkan sidebar
        ?>
        <main class="app-main">
            <div class="app-content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Aplikasi SICMAS</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Beranda</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="app-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Selamat Datang</h3>
                                        <div class="card-tools">
                                           <button type="button" class="btn btn-tool" data-lte-toogle="card-collapse" title="Collapse">
                                            <i class="bi bi-plus-lg" data-lte-icon="expand"></i>
                                            <i class="bi bi-dash-lg" data-lte-icon="collapse"></i>
                                           </button> 
                                           <button type="button" class="btn btn-tool" data-lte-toggle="card-remove" title="Remove">
                                            <i class="bi bi-x-lg"></i>
                                           </button>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <p>Halo user! SICMAS merupakan singkatan dari Sistem Informasi CRUD Mahasiswa, aplikasi ini bertujuan untuk mengajarkan bagaimana merancang sebuah dashboard pengelolaan dengan konsep CRUD menggunakan bahasa pemrograman PHP. Penulisan kode menggunakan OOP (Object Oriented Programming). Silakan gunakan secara bijak dan modifikasi sesuai keperluan!</p>
                                        <p>Silakan pilih salah satu tombol untuk memulai!</p>
                                        <a href="data-input.php" class="btn btn-primary btn-lg">
                                            <i class="bi bi-clipboard-data-fill"></i>
                                            Input Data Mahasiswa
                                        </a>
                                        <a href="data-list.php" class="btn btn-success btn-lg">
                                            <i class="bi bi-card-list"></i>
                                            Lihat Daftar Mahasiswa
                                        </a>
                                        <a href="data-search.php" class="btn btn-warning btn-lg">
                                            <i class="bi bi-search-heart-fill"></i>
                                            Cari Mahasiswa
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include 'template/footer.php'; //Menyertakan footer template ?> 
    </div>
    <?php
        include 'template/script.php'; //menyertakan script template
    ?>
</body>
</html>