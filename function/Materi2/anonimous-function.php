<?php
$hitungStokAkhir = function(int $stokAwal, int $penerimaan, int $pemakaian): int{
    return $stokAwal + $penerimaan - $pemakaian;
};

echo $hitungStokAkhir(100, 50, 30);