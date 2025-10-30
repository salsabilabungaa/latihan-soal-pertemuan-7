<?php
// Soal 3: Implementasi Array 2 Dimensi + Associative Array
echo "Output:<br>";


$nilai = [
    "Jaka" => [
        "tugas" => 80,
        "uts" => 75,
        "uas" => 85
    ],
    "Sinta" => [
        "tugas" => 90,
        "uts" => 88,
        "uas" => 92
    ],
    "Budi" => [
        "tugas" => 70,
        "uts" => 65,
        "uas" => 78
    ]
];



echo "<pre>";


foreach ($nilai as $nama => $data_nilai) {
    
    echo "Nama: " . $nama . "\n";
    echo "Nilai Tugas: " . $data_nilai['tugas'] . "\n";
    echo "Nilai UTS: " . $data_nilai['uts'] . "\n";
    echo "Nilai UAS: " . $data_nilai['uas'] . "\n";
    echo "----------\n";
}

echo "</pre>";

?>