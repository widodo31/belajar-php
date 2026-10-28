<?php
function hitungTotalPembelian($harga, $jumlah){
    $total = $harga * $jumlah;
    return $total;
}

$hasil = hitungTotalPembelian(12000, 4);
var_dump($hasil);