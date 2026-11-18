<?php
include_once '../config/mahasiswa.php';
$mahasiswa = new mahasiswa();
$data = [
    'nim' => $_POST['nim'],
    'nama' => $_POST['nama'],
    'prodi' => $_POST['prodi'],
    'alamat' => $_POST['alamat'],
    'email' => $_POST['email'],
    'provinsi' => $_POST['provinsi'],
    'telp' => $_POST['telp'],
    'status' => $_POST['status']
];

$inputMhs = $mahasiswa->inputMahasiswa($data);
if($inputMhs){
    header("Location: ../data-list.php?status=inputdata");
}else{
    header("Location: ../data-list.php?status=failed");
}