<?php
// soal 1: Implementasi Array 1 Dimensi

$daftar_buah = array("Apel", "Jeruk", "Mangga", "Pisang", "Anggur");

echo "Daftar Buah: <br>";

for ($i = 0; $i < count($daftar_buah); $i++) {
    // urutan
    echo ($i + 1) . ". " . $daftar_buah[$i] . "<br>";
}


?>