<?php
function hitungTotalPembelian($harga, $jumlah = 1){
    $result = $harga * $jumlah;
    return $result;
}

echo hitungTotalPembelian(1200);
echo "<br>";
echo hitungTotalPembelian(1200, "tiga");
echo "<br>";
echo hitungTotalPembelian(1200,4);