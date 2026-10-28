<?php
function tampilkanHargaObat(?int $harga) :string{
    if($harga === null){
        return "Harga belum tersedia";
    }

    return "Harga obat = ".$harga;
}

echo tampilkanHargaObat(500);
echo "<br>";
echo tampilkanHargaObat(null);