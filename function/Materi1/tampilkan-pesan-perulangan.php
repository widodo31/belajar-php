<?php
function tampilkanPesan(){
    echo "menampilkan pesan di perulangan for ";
}

for ($i=1; $i <= 10; $i++) { 
    # code...
    tampilkanPesan();
    echo $i . "<br>";
}