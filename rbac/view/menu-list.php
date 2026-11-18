<?php
 include_once '../model/menu-m.php';
 $menu = new Menu();
 $getMenu = $menu->getMenu();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../template/header.php'; ?>
</head>
<body class="layout-fixed fixed-header sidebar-expand-lg sidebar-open bg-body-tertiary">
    <div class="app-wrapper">
        <?php
            include '../template/navbar.php';
            include '../template/sidebar.php';
        ?>

        <main class="app-main">

            <div class="app-content-header">
                <div class="content-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                          <h3 class="mb-0">Daftar Menu</h3>  
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item">
                                    <a href="#">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Daftar Menu</li>
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
                                    <h3 class="card-title">Daftar Menu</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-lte-toggle="collapse" title="Collapse">
                                            <i class="bi bi-plus-lg" data-lte-toggle="expand"></i>
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
                                                <th>Url</th>
                                                <th>Icon</th>
                                                <th>No Urut</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php
                                            $no = 1;
                                                if(count($getMenu) == 0){
                                                    ?>
                                                    <tr>
                                                        <td colspan="7" class="text-center">Tidak ada data menu</td>
                                                    </tr>
                                                    <?php
                                                }else{
                                                    
                                                    foreach($getMenu as $listMenu){

                                                        if($listMenu['is_active'] == 1){
                                                            $is_active = '<span class="badge bg-success">Aktif</span>';
                                                        }elseif($listMenu['is_active'] == 0){
                                                            $is_active = "Tidak Aktif";
                                                        }
                                                        ?>
                                                        <tr>
                                                            <td><?= $no++; ?></td>
                                                            <td><?= $listMenu['nama']; ?></td>
                                                            <td><?= $listMenu['url']; ?></td>
                                                            <td><?= $listMenu['icon']; ?></td>
                                                            <td><?= $listMenu['urutan']; ?></td>
                                                            <td><?= $is_active; ?></td>
                                                            <td>
                                                                <button type="button" class="btn btn-warning btn-sm me-1" onclick="window.location.href='menu-edit.php?id=<?= $listMenu['id'] ?>'">Edit</button>
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
                                    <button type="button" class="btn btn-primary" onclick="window.location.href='../view/menu-input.php'">
                                        <i class="bi bi-plus-lg"></i> Tambah</button>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include '../template/script.php'; ?>
    </div>
    
</body>
</html>