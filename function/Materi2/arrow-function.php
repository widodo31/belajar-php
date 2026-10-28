<?php
$hitungDiskon = fn(int $harga): float
                    => $harga * 0.1;
echo $hitungDiskon(50000);