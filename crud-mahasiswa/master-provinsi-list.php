<?php
include_once 'config/master.php';
$master = new masterData();
$prov = $master->getProvinsi();
if(isset($_GET['status'])){
    if($_GET['status'] == 'updatesuccess'){
        echo "<script>
            alert('Data sukses diupdate');
        </script>";
    }else if($_GET['status'] =='deleteprovinsi'){
        echo "<script>alert('Data provinsi berhasil dihapus');</script>";
    }else if($_GET['status'] == 'inputprovinsi'){
        echo "<script>alert('Data provinsi berhasil diinput');</script>";
    }else if($_GET['status'] == 'failed'){
        echo "<script>alert('Data gagal!!!!')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include_once 'template/header.php'; ?>
<body class="layout-fixed fixed-header fixed-footer sidebar-expand-lg sidebar-open bg-body-tertiary">
    <div class="app-wrapper">
        <?php
            include 'template/navbar.php';
            include 'template/sidebar.php';
        ?>
        <main class="app-main">

            <div class="app-content-header">
                <div class="content-fluid">
                    <div class="row">
                        <div class="col-sm 6">
                            <h3 class="mb-0">Data provinsi</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Master Provinsi</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="app-content">
                <div class="content-fluid">
                    <div class="row">
                        <div class="col-12">
                            
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Daftar provinsi</h3>
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
                                                <th>Nama</th>
                                                <th class="tex-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php
                                                if(count($prov) == 0){
                                                    ?><tr>
                                                    <td colspan="3">Data masih kosong</td> <tr>
                                                    <?php
                                                }else{
                                                    foreach($prov as $index => $provinsi){
                                                        ?>
                                                        <tr>
                                                            <td><?= ($index + 1); ?></td>
                                                            <td><?= $provinsi['nama']; ?></td>
                                                            <td>
                                                            <?php
                                                             echo'<button type="button" class="btn btn-sm btn-warning me-1" onclick="window.location.href=\'master-provinsi-edit.php?id='.$provinsi['id'].'\'">
                                                                    <i class="bi bi-pencil-fill"></i> Edit
                                                                </button>
                                                                <button type="button" class="btn btn-sm btn-danger" onclick="if(confirm(\'Yakin ingin menghapus data program ini?\')){window.location.href=\'proses/proses-provinsi.php?aksi=deleteprovinsi&id='.$provinsi['id'].'\'}">
                                                                   <i class="bi bi-trash-fill"></i> Hapus
                                                                </button>
                                                                ';
                                                            ?>
                                                            </td>
                                                        </tr>

                                                        <?php
                                                        
                                                    }
                                                }
                                                

                                                ?>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary" onclick="window.location.href='master-provinsi-input.php'">
                                        <i class="bi bi-plus-lg"></i>
                                        Tambah Provinsi
                                    </button>
                                </div>
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