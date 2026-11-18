<?php
include_once 'config/mahasiswa.php';
$mhs = new Mahasiswa();
if(isset($_GET['search'])){
    $src = $_GET['search'];
    $data = $mhs->searchMahasiswa($src);
}
?>
<!doctype html>
<html lang="en">
	<head>
		<?php include 'template/header.php'; ?>
	</head>

	<body class="layout-fixed fixed-header fixed-footer sidebar-expand-lg sidebar-open bg-body-tertiary">

		<div class="app-wrapper">

			<?php include 'template/navbar.php'; ?>

			<?php include 'template/sidebar.php'; ?>

			<main class="app-main">

				<div class="app-content-header">
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-6">
								<h3 class="mb-0">Cari Mahasiswa</h3>
							</div>
							<div class="col-sm-6">
								<ol class="breadcrumb float-sm-end">
									<li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
									<li class="breadcrumb-item active" aria-current="page">Cari Data</li>
								</ol>
							</div>
						</div>
					</div>
				</div>

				<div class="app-content">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
								<div class="card mb-3">
									<div class="card-header">
										<h3 class="card-title">Pencarian Mahasiswa</h3>
										<div class="card-tools">
											<button type="button" class="btn btn-tool" data-lte-toggle="card-collapse" title="Collapse">
												<i data-lte-icon="expand" class="bi bi-plus-lg"></i>
												<i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
											</button>
											<button type="button" class="btn btn-tool" data-lte-toggle="card-remove" title="Remove">
												<i class="bi bi-x-lg"></i>
											</button>
										</div>
									</div>
									<div class="card-body">
										<form action="data-search.php" method="GET">
											<div class="mb-3">
												<label for="search" class="form-label">Masukkan NIM atau Nama Mahasiswa</label>
												<input type="text" class="form-control" id="search" name="search" placeholder="Cari berdasarkan NIM atau Nama Mahasiswa" value="" required>
											</div>
											<button type="submit" class="btn btn-primary"><i class="bi bi-search-heart-fill"></i> Cari</button>
										</form>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Hasil Pencarian</h3>
										<div class="card-tools">
											<button type="button" class="btn btn-tool" data-lte-toggle="card-collapse" title="Collapse">
												<i data-lte-icon="expand" class="bi bi-plus-lg"></i>
												<i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
											</button>
											<button type="button" class="btn btn-tool" data-lte-toggle="card-remove" title="Remove">
												<i class="bi bi-x-lg"></i>
											</button>
										</div>
									</div>
									<div class="card-body p-0 table-responsive">
                                        <?php
                                        if(isset($_GET['search'])){
                                            ?>
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
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                        foreach($data as $row){
                                                            if($row['status'] == 1){
                                                                $row['status'] = '<span class="badge bg-success">Aktif</span>';
                                                            }elseif($row['status'] == 2){
                                                                $row['status'] = '<span class="badge bg-danger">Tidak Aktif</span>';
                                                            }elseif($row['status'] == 3){
                                                                $row['status'] = '<span class="badge bg-warning">Cuti</span>';
                                                            }elseif($row['status'] == 4){
                                                                $row['status'] = '<span class="badge bg-primary">Lulus</span>';
                                                            }
                                                            ?>
                                                            <tr>
                                                                <td><?=$no++; ?></td>
                                                                <td><?=$row['nim']; ?></td>
                                                                <td><?=$row['nama']; ?></td>
                                                                <td><?=$row['prodi']; ?></td>
                                                                <td><?=$row['provinsi']; ?></td>
                                                                <td><?=$row['alamat']; ?></td>
                                                                <td><?=$row['telp']; ?></td>
                                                                <td><?=$row['email']; ?></td>
                                                                <td><?=$row['status']; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <?php
                                            
                                        }
                                        ?>
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