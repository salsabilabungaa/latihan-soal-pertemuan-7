<?php
// Soal 2: Implementasi Array 2 Dimensi

$mahasiswa = [
    ["Jaka", "22001", "Informatika"],
    ["Sinta", "22002", "Sistem Informasi"],
    ["Budi", "22003", "Teknik Komputer"]
];


echo "Data Mahasiswa:<br>";

echo '<table border="1" cellpadding="5" cellspacing="0">';
echo '<thead><tr><th>No</th><th>Nama</th><th>NIM</th><th>Jurusan</th></tr></thead>';
echo '<tbody>';

foreach ($mahasiswa as $index => $data) {
    echo '<tr>';  
    echo '<td>' . ($index + 1) . '</td>';
    echo '<td>' . $data[0] . '</td>';
    echo '<td>' . $data[1] . '</td>';
    echo '<td>' . $data[2] . '</td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';

?>