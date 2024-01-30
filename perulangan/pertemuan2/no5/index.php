<?
//buatlah sebuah fungsi yang akan menghitung lembar uang rupiah.
//contoh:140500
//lembar rupiah :
//-Rp.100.000:1
//-Rp.20.000:2
//-Rp.500:1
?>

<?php

function hitungDanTampilkan($jumlahUang) {
    $lembarUang = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500];
    $hasil = [];

    echo "Lembar Rupiah:\n";

    foreach ($lembarUang as $nominal) {
        $jumlahLembar = floor($jumlahUang / $nominal);
        if ($jumlahLembar > 0) {
            $hasil["Rp.$nominal"] = $jumlahLembar;
            $jumlahUang %= $nominal;
            echo "Rp.$nominal: $jumlahLembar lembar\n";
        }
    }
}

// Contoh penggunaan
$jumlahUang = 140500;
hitungDanTampilkan($jumlahUang);

?>