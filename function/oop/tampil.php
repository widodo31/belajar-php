<?php
require_once 'Person.php';
$person = new Person();
$person->name = "Widodo";
$person->address = "Ngaliyan";

var_dump($person);
echo "</br>";
echo "nama : ".$person->name;
echo "Alamat : ".$person->address;
echo "Kota : ".$person->country;