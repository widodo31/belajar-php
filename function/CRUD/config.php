<?php
$server = "db";
$username = "belajar-php";
$password = "noroot";
$database = "belajar-php-db";

$conn = new mysqli($server, $username, $password, $database);
if($conn->connect_error){
    die("Koneksi error".$conn->connect_error);
}