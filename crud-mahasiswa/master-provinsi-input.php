<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'template/header.php' ?>
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
                            <h3 class="mb-0">Input Provinsi</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Input provinsi</li>
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
                                    <h3 class="card-title">Formulir Provinsi</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse" title="Collapse">
                                            <i class="bi bi-plus-lg" data-lte-icon="expand"></i>
                                            <i class="bi bi-dash-lg" data-lte-icon="collapse"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-lte-toggle="card-remove" titile="Remove">
                                            <i class="bi bi-x-lg"></i>
                                        </button>
                                    </div>
                                </div>

                                <form action="proses/proses-provinsi.php?aksi=inputprovinsi" method="post">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama provinsi</label>
                                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Input Nama porvinsi" required>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button class="button btn btn-danger me-2 float-start" onclick="window.location.href='master-provinsi-list.php'">Batal</button>
                                        <button type="reset" class="btn btn-secondary me-2 float-start">Reset</button>
                                        <button type="submit" class="btn btn-primary float-end">Submit</button>
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