<?php

function angka($angka) {
    if ($angka >= 1000000) {
        return number_format($angka / 1000000, 2) . 'M';
    } elseif ($angka >= 1000) {
        return number_format($angka / 1000, 2) . 'K';
    } else {
        return $angka;
    }
}

$angka1 = 1200; 
$angka2 = 1500000;

echo "Angka 1: " . angka($angka1) . "<br>";
echo "Angka 2: " . angka($angka2);

?>
