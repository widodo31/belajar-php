<?php
// Memanggil menu controller
require_once __DIR__ . '/../app/controllers/menu-c.php';

// Membuat objek Menu COntroller
$menuController = new MenuC();

//Mengambil data dari menu database
$menus = $menuController->index();

//Routing halaman
$page = $_GET['page'] ?? 'dashboard';
switch ($page){
    case 'dashboard':
        require_once __DIR__ . '/../app/views/dashboard/index.php';
        break;
    default:
        http_response_code(404);
        echo "404- Halaman tidak ditemukan";
        break;
}