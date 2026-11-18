<?php

include_once '../config/master.php';
$master = new masterData();

if($_GET['aksi'] == 'inputprodi'){
    $dataProdi = [
        'kode' => $_POST['kode'],
        'nama' => $_POST['nama']
    ];
    $input = $master->inputProdi($dataProdi);
    if($input){
        
    header("Location: ../master-prodi-list.php?status=inputsuccess");
    }else{
        header("Location: ../master-prodi-input.php?status=failed");
    }

} else if($_GET['aksi'] == 'deleteprodi'){
    $id = $_GET['id'];
    $delete = $master->deleteProdi($id);
    if($delete){
        header("Location: ../master-prodi-list.php?status=deletesuccess");

    }else{
        header("Location: ../master-prodi-list.php?status=deletefailed");
    }
}else if($_GET['aksi'] == 'updateprodi'){
    $dataProdi = [
        //'id' => $_POST['id'],
        'kode' => $_POST['kode'],
        'nama' => $_POST['nama']
    ];
   
    $update = $master->updateProdi($dataProdi);
    if($update){
        header("Location: ../master-prodi-list.php?status=editsuccess");
    }else{
        header("Location: ../master-prodi-edit.php?id".$dataProdi['kode']."&status=failed");
    }
}