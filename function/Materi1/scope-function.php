<?php
$stokObat = 150;
function tampilkanStok($stok){
    global $stokObat;
    echo "Stok obat tersedia = ".$stok;
    echo "<br>".$stokObat;
}

tampilkanStok(100);