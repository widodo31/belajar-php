<?php
    include_once 'config/master.php';
    $master = new masterData();
    $ambilprodi = $master->getProdi();
    $ambilprovinsi = $master->getProvinsi();
    $statuslist = $master->getStatus();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'template/header.php'; ?>
</head>
<body class="layout-fixed fixed-header fixed-footer sidebar-expand-lg sidebar-open bg-body-tertiary">
    <div class="app-wrapper">
        <?php
            include 'template/navbar.php';
            include 'template/sidebar.php';
        ?>

        <main class="app-main">
            <div class="app-content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Input Mahasiswa</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item">
                                    <a href="index.php">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Input Data</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="app-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Formulir Mahasiswa</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-lte-toogle="card-collapse" title="Collapse">
                                            <i class="bi bi-plus-lg" data-lte-icon="expand"></i>
                                            <i class="bi bi-dash-lg" data-lte-icon="collapse"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-lte-toogle="card-remove" title="Remove">
                                            <i class="bi bi-x-lg"></i>
                                        </button>
                                    </div>
                                </div>
                                <form action="proses/proses-input.php" method="post">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="nim" class="form-label">Nomor Induk Mahasiswa (NIM)</label>
                                            <input type="number" name="nim" id="nim" placeholder="Masukkan NIM mahasiswa" required class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama Lengkap</label>
                                            <input type="text" name="nama" id="nama" placeholder="Masukkan nama lengkap mahasiswa" required class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="prodi" class="form-label">Program studi</label>
                                            <select name="prodi" id="prodi" required class="form-select">
                                                <option value="" selected disabled>pilih Program studi</option>
                                                <?php
                                                    foreach($ambilprodi as $prodi){
                                                        ?>
                                                        <option value="<?= $prodi['id']; ?>"> <?= $prodi['nama'] ?> </option>
                                                        <?php                                        
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <textarea name="alamat" id="alamat" rows="3" placeholder="masukkan alamat sesuai KTP" required class="form-control"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Provinsi</label>
                                            <select name="provinsi" id="status" required class="form-select">
                                                <option value="" selected disabled>Pilih nama provinsi</option>
                                                <?php
                                                foreach($ambilprovinsi as $provinsi){
                                                    ?>
                                                    <option value="<?= $provinsi['id']; ?>"><?= $provinsi['nama']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" id="email" placeholder="Masukkan email anda" required class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="telp" class="form-label">Nomor Telepon</label>
                                            <input type="tel" name="telp" id="telp" placeholder="masukkan nomor telpon/HP" pattern="[0-9+\-\s()]{6,20}" required class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="status" class="status">Status</label>
                                            <select name="status" id="status" class="form-control" required>
                                                <option value="" selected disabled>Pilih Status</option>
                                                <?php
                                                    foreach($statuslist as $status){
                                                        ?>
                                                        <option value="<?= $status['id']; ?>"><?= $status['nama']; ?></option>
                                                        <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        
                                    </div>
                                    <div class="card-footer">
                                        <button type="button" class="btn btn-danger me-2 float-start" onclick="window.location.href='data-list.php'">Batal</button>
                                        <button type="reset" class="btn btn-secondary me-2 float-start">Reset</button>
                                        <button type="submit" class="btn btn-primary me-2 float-end">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include 'template/footer.php'; ?>
    </div>
    
    <?php include 'template/script.php'; ?>
</body>
</html>