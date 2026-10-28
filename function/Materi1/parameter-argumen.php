<?php
function hitungTotalPembelian($harga, $jumlah){
    echo "Harga = ".$harga."<br>";
    echo "Jumlah = ".$jumlah."<br>";
    echo $harga * $jumlah;
    echo "<hr>";
}

hitungTotalPembelian(12000, 4);
hitungTotalPembelian(7500, 6);