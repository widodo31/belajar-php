<?php
function hitungStokAkhir($stokAwal, $penerimaan, $pemakaian){
    $result = $stokAwal + $penerimaan - $pemakaian;
    return $result;
}

$stokAwal = 100;
$penerimaan = 50;
$pemakaian = 30;
$result = hitungStokAkhir($stokAwal, $penerimaan, $pemakaian);
echo "Stok awal = " . $stokAwal;
echo "<br> Penerimaan = ". $penerimaan;
echo "<br> Pemakaian = ". $pemakaian;
echo "<br> Stok Akhir = " . $result;