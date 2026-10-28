<?php
function hitungTotalPembelian(
    int $harga,
    int $jumlah,
    float $diskon
):float {
    $totalAwal = $harga * $jumlah;
    $nilaiDiskon = $totalAwal * ($diskon/100);
    $totalPembayaran = $totalAwal - $nilaiDiskon;
    return $totalPembayaran;
}

echo "<h3>Total Pembayaran </h3>";
echo hitungTotalPembelian(15000, 4, 10);