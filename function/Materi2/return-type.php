<?php
function hitungNilaiObat(int $harga, int $jumlah) :int{
    return $harga * $jumlah;
}

echo hitungNilaiObat(1500, 4);