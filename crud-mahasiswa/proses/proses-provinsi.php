<?php
include_once '../config/master.php';
$master = new masterData();

if($_GET['aksi'] == 'updateprovinsi'){
    $data = [
        'id' => $_POST['id'],
        'nama' => $_POST['nama']
    ];
    $update = $master->updateProvinsi($data);
    if($update){
        header("Location: ../master-provinsi-list.php?status=updatesuccess");
    }
    else{
        header("Location: ../master-provinsi-list.php?status=failed");
    }
}else if($_GET['aksi'] == 'deleteprovinsi'){
    $id = $_GET['id'];
    $master->deleteProvinsi($id);
    header("Location: ../master-provinsi-list.php?status=deleteprovinsi");
}else if($_GET['aksi'] == 'inputprovinsi'){
    $nama = $_POST['nama'];
    $input = $master->inputProvinsi($nama);
    if($input){
        header("Location: ../master-provinsi-list.php?status=inputprovinsi");
    }else{
        header("Location: ../master-provinsi-list.php?status=failed");
    }
}