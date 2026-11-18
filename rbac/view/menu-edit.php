<?php
 include '../model/menu-m.php';
 $id = $_GET['id'];
 $menu = new Menu();
 $getMenuId = $menu->getMenuId($id);
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../template/header.php'; ?>
</head>
<body class="layout-fixed fixed-header sidebar-expand-lg sidebar_open bg-body-tertiary">
    <div class="app-wrapper">
        <?php
            include '../template/navbar.php';
            include '../template/sidebar.php';
        ?>

        <main class="app-main">
            <div class="app-content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Edit Menu</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item">
                                    <a href="#">BERANDA</a>
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
                                    <h3 class="card-title">Formulir Menu</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-lte-toggle="collapse" title="Collapse">
                                            <i class="bi bi-plus-lg" data-lte-icon="expand"></i>
                                            <i class="bi bi-x-lg"></i>
                                        </button>
                                    </div>
                                </div>

                                <form action="../controller/menu-c.php?aksi=EditMenu" method="post">
                                    <div class="card-body">
                                        <input type="hidden" name="id" value="<?= $getMenu['id']; ?>">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama Menu</label>
                                            <input type="text" name="nama" id="nama" value="<?= $getMenuId['nama']; ?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="url" class="form-label">URL</label>
                                            <input type="text" name="url" id="url" value="<?= $getMenuId['url']; ?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="icon" class="form-label">Icon</label>
                                            <input type="text" name="icon" id="icon" value="<?= $getMenuId['icon']; ?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="urutan" class="form-label">Urutan</label>
                                            <input type="number" name="urutan" id="urutan" value="<?= $getMenuId['urutan']; ?>" class="form-control">
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="isactive" class="form-label">Is Active</label>
                                            <select name="isactive" id="isactive" class="form-control">
                                                <option value="" selected disabled>Pilih Status</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="button" class="btn btn-danger me-2 float-start" onclick="window.location.href='menu-list.php'">Batal</button>
                                        <button type="reset" class="btn btn-secondary me-2">Reset</button>
                                        <button type="submit" class="btn btn-primary me-2 float-end">Submit</button>
                                    </div>
                                </form>
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