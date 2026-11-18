<?php
include_once '../model/menu-m.php';
$menu = new Menu();

if($_GET['aksi'] == 'inputMenu'){
    $data = [
        'nama' => $_POST['nama'],
        'url' => $_POST['url'],
        'icon' => $_POST['icon'],
        'urutan' => $_POST['urutan']
    ];
    $menu->inputMenu($data);
    header("Location: ../view/menu-list.php");
} elseif($_GET['aksi'] == 'editMenu'){
    $data = [
        'id' => $_POST['id'],
        'nama' => $_POST['nama'],
        'url' => $_POST['url'],
        'icon' => $_POST['icon'],
        'urutan' => $_POST['urutan'],
        'isactive' => $_POST['isactive']
    ];
    $menu->getMenuId($data);
    header("Location: ../view/menu-list.php");
}

