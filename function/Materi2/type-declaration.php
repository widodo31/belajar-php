<?php
declare(strict_types=1);
function hitungTotalPembelian(int $harga, int $jumlah){
    $hasil = $harga * $jumlah;
    return $hasil;
}

echo hitungTotalPembelian(1200, 3);
echo "<br>";
echo hitungTotalPembelian("1200", 3);