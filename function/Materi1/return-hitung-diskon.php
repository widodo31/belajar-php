<?php
function hitungDiskon($harga, $diskon){
    $diskon = $diskon/100;
    $hasil = $harga * $diskon;
    return $hasil;
}

$result = hitungDiskon(100000, 10);
echo $result;