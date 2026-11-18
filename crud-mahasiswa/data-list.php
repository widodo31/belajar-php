<?php
include_once 'config/mahasiswa.php';
$mhs = new Mahasiswa();
$dataMahasiswa = $mhs->getMahasiswa();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'template/header.php';
    ?>
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
                            <h3 class="mb-0">Daftar Mahasiswa</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="data-input.php">Input Data</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Beranda</li>
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
                                    <h3 class="card-title">Tabel Mahasiswa</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse" title="Collapse">
                                            <i class="bi bi-plus-lg" data-lte-icon="expand"></i>
                                            <i class="bi bi-dash-lg" data-lte-icon="collapse"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-lte-toggle="card-remove" title="Remove">
                                            <i class="bi bi-x-lg"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="card-body p-0 table-responsive">
                                    <table class="table table-striped" role="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIM</th>
                                                <th>Nama</th>
                                                <th>Prodi</th>
                                                <th>Provinsi</th>
                                                <th>Alamat</th>
                                                <th>Telp</th>
                                                <th>Email</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach($dataMahasiswa as $row){
                                                if($row['status'] == 1){
                                                    $row['status'] = '<span class="badge bg-success">Aktif</span';
                                                }elseif($row['status'] == 2){
                                                    $row['status'] = '<span class="badge bg-danger">Tidak Aktif</span';
                                                }elseif($row['status'] == 3){
                                                    $row['status'] = '<span class="badge bg-warning">Cuti</span';
                                                }elseif($row['status'] == 4){
                                                    $row['status'] = '<span class="badge bg-primary">Lulus</span';
                                                }
                                                ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $row['nim']; ?></td>
                                                    <td><?= $row['nama']; ?></td>
                                                    <td><?= $row['prodi']; ?></td>
                                                    <td><?= $row['provinsi']; ?></td>
                                                    <td><?= $row['alamat']; ?></td>
                                                    <td><?= $row['telp']; ?></td>
                                                    <td><?= $row['email']; ?></td>
                                                    <td><?= $row['status']; ?></td>
                                                    <td>Edit</td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
</body>
</html>