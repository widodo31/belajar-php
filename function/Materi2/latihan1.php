<?php
function hitungStokAkhir(
    int $stokAwal,
    int $penerimaan,
    int $pemakaian
):int {
    $stokAkhir = $stokAwal + $penerimaan - $pemakaian;
    return $stokAkhir;
}

echo "<h2>Stok Akhir</h2>";
echo hitungStokAkhir(100, 50, 30);