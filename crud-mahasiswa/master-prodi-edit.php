<?php
include_once 'config/master.php';
$master = new MasterData();
$dataProdi = $master->getUpdateProdi($_GET['id']);
if(isset($_GET['status'])){
    if($_GET['status'] == 'failed'){
        echo "<script>alert('gagal mengubah data program studi, silakan coba lagi');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'template/header.php'; ?>
</head>
<body class="layout-fixed fixed-header fixed footer disebar-expand-lg sidebar-open bg-body-tertiary">
    <div class="app-wrapper">
        <?php
            include 'template/navbar.php';
            include 'template/sidebar.php';
        ?>

        <main class="app-main">

        <div class="app-content-header">
            <div class="contaier-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Edit Program Studi</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item">
                                <a href="index.php">Beranda</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit prodi</li>
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
                                <h3 class="card-title">Formulir program studi</h3>
                                <div class="card-tool">
                                    <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse" title="Collapse">
                                        <i class="bi bi-plus-lg" data-lte-icon="expand"></i>
                                        <i class="bi bi-dash-lg" data-lte-icon="collapse"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-lte-toggle="card-remove" title="Remove">
                                        <i class="bi bi-x-lg"></i>
                                    </button>
                                </div>
                            </div>

                            <form action="proses/proses-prodi.php?aksi=updateprodi" method="post">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="kode" class="form-label">Kode Porgram</label>
                                        <input type="text" name="kode" id="kode" value="<?= $dataProdi['id']; ?>" class="form-control-plaintext" placeholder="Masukkan kode program studi" required readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">nama Program Studi</label>
                                        <input type="text" name="nama" id="nama" value="<?= $dataProdi['nama']; ?>" class="form-control" placeholder="Masukkan nama program studi" required>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="button" class="btn btn-danger me-2 float-star" onclick="window.location.href='master-prodi-list.php'">Batal</button>
                                    <button type="submit" class="btn btn-warning float-end">Update Data</button>
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
    <?php
        include 'template/script.php';
    ?>
</body>
</html>