<?php 
    require_once __DIR__ . '/../layouts/header.php';
    require_once __DIR__ . '/../layouts.navbar.php'; 

?>
<div class="app-container">
    <?php require_once __DIR__ . '/../layouts.sidebar.php'; ?>
    <main class="main-content">
        <div class="container-fluid">
            <h3>Dashboard</h3>
            <p class="text-secondary">
                Selanat datang di aplikasi kami
            </p>
            <div class="card shadow-m-border-0">
                <div class="card-body">
                    <h5>Dashboard Administrator</h5>
                    <p>
                        Sidebar sudah menggunakan data menu yang diambil dari database
                    </p>
                </div>
            </div>
        </div>
    </main>
</div>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>