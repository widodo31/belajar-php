<?php
$nama = "Belajar scope pada function php";

function scope(){
    global $nama;
    echo $nama;
}

scope();